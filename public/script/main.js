
$(document).ready(function() {
    function navigateToPage(path) {
        $('.page').hide();  // Hide all pages
        $('#' + path).show();  // Show the page matching the current path

        if (path == 'list') {
            renderList();
        }
    }

    // Listen for the browser's back and forward buttons
    $(window).on('popstate', function() {
        var path = window.location.pathname.replace('/', '');
        if (!path) path = 'home';  // Default to home if no path is set
        navigateToPage(path);
    });

    // Usando delegação de eventos para lidar com os links de navegação
    $(document).on('click', '.nav-link', function(event) {
        event.preventDefault();  // Impede o comportamento padrão do link
        var path = $(this).attr('href').replace('/', '');  // Obtém o path do href
        history.pushState(null, null, $(this).attr('href'));  // Atualiza a URL
        navigateToPage(path);  // Mostra a página correspondente
    });

    // Inicializa a navegação com a URL atual
    var initialPath = window.location.pathname.replace('/', '');
    if (!initialPath) initialPath = 'home';  // Default to home if no path is set
    navigateToPage(initialPath);
});

function renderPokemon(data) {
    $("#pokemon_img").attr('src', data.sprites.front_default);
    $("#p_name").text(data.name);
    $("#p_species").text(data.species.name);
    $("#p_height").text((data.height / 10) + ' meters');
    $("#p_type").text(data.types.map(type => type.type.name).join(", "));
    $("#p_weight").text((data.weight / 10) + ' kg');

    let skills = data.abilities.map(function(abilityData) {
        return abilityData.ability.name;  // Acessa o nome da habilidade dentro de `ability`
    }).join(", ");
    $("#p_skills").text(skills);

    data.stats.forEach(function(stat) {
        $("#" + stat.stat.name + '_value').text(stat.base_stat);
    });

    randomNum = data.id;
}

function cleanPokemonData() {
    $('#p_name, #p_type, #p_weight, #p_skills, #hp_value, #attack_value, #defense_value, #special-attack_value, #special-defense_value, #speed_value, #p_species').text('');
    $('#pokemon_img').attr('src', '');
} 