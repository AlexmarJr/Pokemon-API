<table id="pokemon_table" class="bg-white rounded-lg text-black">
    <thead>
        <tr>
            <th>Pokemon</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>

<script>
    function renderList() {
        var html = '';
        $.ajax({
                url: 'https://pokeapi.co/api/v2/pokemon?limit=1025',
                method: 'GET',
                success: function(data) {
                    data.results.forEach(function(row) {
                        html += '<tr class="!border-t-8 !border-b-8 !border-gray-50 nav-link">';
                        html += '<th href="pokemon" class="nav-link px-6 py-4 font-medium text-gray-900 whitespace-nowrap cursor-pointer" onclick="getPokemon(\'' + row.url + '\')"> ' + row.name + ' </th>';
                        html += '</tr>';
                    });

                    $('#pokemon_table tbody').empty().html(html);
                    if ($.fn.DataTable.isDataTable('#pokemon_table')) {
                        let dataTable = $('#pokemon_table').DataTable();
                        dataTable.clear().rows.add($('#pokemon_table tbody tr')).draw();
                    } else {
                        new DataTable('#pokemon_table', {
                            "lengthChange": false, // Disable the "Show entries" dropdown
                            "info": false,         // Disable the "Showing X to Y of Z entries" text
                            "paging": true,         // Enable pagination
                            "pageLength": 15,       // Set the number of entries per page
                            retrieve: true,
                        });
                    }

                    
                },
                error: function() {
                    alert('Erro while searching Pokemon, Try again');
                }
            });
    }

    function getPokemon(url) {
        cleanPokemonData();
        $.ajax({
                url: url,
                method: 'GET',
                success: function(data) {
                    renderPokemon(data);
                    $('#who_is').hide();
                    $('#pokemon_details').show();
                },
                error: function() {
                    alert('Erro while searching Pokemon, Try again');
                }
            });
    }
</script>