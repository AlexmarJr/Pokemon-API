<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pokemon Index</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        
        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.1/css/buttons.dataTables.min.css">

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.1/js/dataTables.buttons.min.js"></script>
        <!-- Styles / Scripts -->

        <link rel="stylesheet" href="{{ asset('css/laravel_style.css') }}?v={{ time() }}">
        <link rel="stylesheet" href="{{ asset('css/pokemon_table.css') }}?v={{ time() }}">
        <script src="{{ asset('script/main.js') }}"></script>

       
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
        
        <header class="grid grid-cols-2 items-center gap-2 mt-5 lg:grid-cols-3">
            <div class="flex lg:justify-center lg:col-start-2">
                <svg href='/home' class="nav-link cursor-pointer" width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="45" stroke="black" stroke-width="5" fill="white" /><path d="M5 50a45 45 0 0 1 90 0h-90z" fill="red" /><line x1="5" y1="50" x2="95" y2="50" stroke="black" stroke-width="5" /><circle cx="50" cy="50" r="15" stroke="black" stroke-width="5" fill="white" /><circle cx="50" cy="50" r="7" fill="black" /></svg>
            </div>
        </header>

        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 page" id="home" hidden>
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <main>
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <a
                                href="https://pokemon.fandom.com/wiki/Pok%C3%A9mon_Wiki"
                                target="_blank"
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img
                                        src="https://img.pokemondb.net/sprites/home/normal/pikachu.png"
                                        alt="Pikachu"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                    />
                                    <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                    ></div>
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/><path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/></svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">PokePedia</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                The PokéPédia is an online encyclopedia dedicated to the Pokémon universe, hosted on the Fandom platform. It provides a wide range of information about the franchise, including details on games, anime, manga, the Trading Card Game (TCG), movies, and more. The PokéPédia covers everything from information about Pokémon species, abilities, evolutions, attacks, and unique characteristics, to characters, trainers, regions, and significant events in the series.
                                            </p>
                                        </div>
                                    </div>

                                    <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                                </div>
                            </a>

                            <a
                                href="/pokemon"
                                class="nav-link flex items-start cursor-pointer gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 3H21V10" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 21H3V14" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 3L14 10" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 21L10 14" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Random Pokemon</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Select a random pokemon, and see their atributes.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <a
                                href="/list"
                                class="nav-link flex items-start gap-4 cursor-pointer rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 12H20" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 18H20" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 6L2 6" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 12L2 12" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 18L2 18" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Pokemon List</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        List of all pokemons from all generations
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 page" id="pokemon" hidden>
            <div class="relative flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <main class="mt-6">
                        @include('pokemon')
                    </main>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 page" id="list" hidden>
            <div class="relative flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <main class="mt-6">
                        @include('pokemon_list')
                    </main>
                </div>
            </div>
        </div>

    </body>
</html>
