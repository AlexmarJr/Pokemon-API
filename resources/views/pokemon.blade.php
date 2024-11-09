
<div class="flex justify-center items-center min-h-screen" id="who_is">
  <div class="relative pt-[79.200%] w-full max-w-[500px]">
    <iframe src="{{ asset('img/who.gif') }}" class="absolute top-0 left-0 w-full h-full" frameborder="0" allowfullscreen></iframe>
  </div>
</div>

<div class="flex justify-between w-full">
    <a href="/home" class="nav-link bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mx-2">Home</a>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mx-2" onclick="randomPokemon()">Randomize Pokemon</button>
    <a href="/list" class="nav-link bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mx-2">List</a>
</div>

<div class="flex justify-center items-start rounded-lg bg-white shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20] mt-10 relative">
    <!-- Seta esquerda (Font Awesome) -->
    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 text-5xl cursor-pointer hover:text-blue-500 transition-all duration-200 animate-pulse" onclick="nextOrPrevius(-1)">
        <i class="fas fa-chevron-left"></i>
    </div>

    <div class="w-2/5 pr-4 border-r-2 border-gray-300">
        <img src="" alt="Imagem" class="w-full h-auto" id="pokemon_img">
    </div>
    <div class="w-3/5 p-4 text-white">
        <h1 class=" text-4xl mb-2">Basic Information</h1>

        <h2>Name: <b id="p_name"></b> </h2>
        <h2>Type: <b id="p_type"></b> </h2>
        <h2>Weight: <b id="p_weight"></b> </h2>
        <h2>Height: <b id="p_height"></b> </h2>
        <h2>Skills: <b id="p_skills"></b> </h2> 
        <h2>Species: <b id="p_species"></b> </h2> 

        <hr class="mt-7 mb-5">

        <h1 class="text-4xl mb-2">Stats</h1>

        <h2 id='hp'>HP: <b id="hp_value"></b></h2>
        <h2 id='attack'>Attack: <b id="attack_value"></b></h2>
        <h2 id='defense'>Defense: <b id="defense_value"></b></h2>
        <h2 id='special-attack'>Special Attack: <b id="special-attack_value"></b></h2>
        <h2 id='special-defense'>Special Defense: <b id="special-defense_value"></b></h2>
        <h2 id='speed'>Speed: <b id="speed_value"></b></h2>

    </div>
    <!-- Seta direita (Font Awesome) -->
    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 text-5xl cursor-pointer hover:text-blue-500 transition-all duration-200 animate-pulse" onclick="nextOrPrevius(1)">
        <i class="fas fa-chevron-right"></i>
    </div>
</div>




<script>
    $(document).ready(function() {
        randomPokemon();
    });
    var randomNum ;
    function randomPokemon(){
            $('#who_is').show();
            // Gerar número aleatório entre 1 e 1025
            randomNum = Math.floor(Math.random() * 1025) + 1;

            $.ajax({
                url: `https://pokeapi.co/api/v2/pokemon/${randomNum}`,
                method: 'GET',
                success: function(data) {
                    renderPokemon(data);

                    setTimeout(function() {
                        $('#who_is').fadeOut(1000);
                        $('#pokemon_details').fadeIn(1000);
                    }, 2500);
                },
                error: function() {
                    alert('Erro while searching Pokemon, Trry again');
                }
            });
        }

    function nextOrPrevius(number) {
        let currentId = randomNum + number;
        randomNum = currentId;

        $.ajax({
                url: `https://pokeapi.co/api/v2/pokemon/${currentId}`,
                method: 'GET',
                success: function(data) {
                    renderPokemon(data);

                    setTimeout(function() {
                        $('#who_is').fadeOut(200);
                        $('#pokemon_details').fadeIn(200);
                    }, 200);
                },
                error: function() {
                    alert('Erro while searching Pokemon, Trry again');
                }
            });
    }
</script>