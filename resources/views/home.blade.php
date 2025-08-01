<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Portfolio</title>
        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            @keyframes move-background {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }

            .bg-animated-gradient {
                background: linear-gradient(-45deg, #0f172a, #1e293b, #0f172a);
                background-size: 400% 400%;
                animation: move-background 15s ease infinite;
            }
        </style>
    </head>

    <body class="bg-animated-gradient font-sans antialiased text-gray-200">
        <div class="relative min-h-screen flex items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    </header>

                <main class="mt-6">
                    <section class="py-20">
                        <div class="container mx-auto px-4">
                            <h2 class="text-4xl font-bold mb-10 text-center text-white">My Skills</h2>
                
                            <div
                                x-data="{ skillsVisible: false }"
                                x-intersect.once="skillsVisible = true"
                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8"
                            >
                                @php
                                    $skills = [
                                        ['name' => 'HTML & CSS', 'category' => 'Frontend'],
                                        ['name' => 'JavaScript', 'category' => 'Frontend'],
                                        ['name' => 'Vue.js', 'category' => 'Frontend'],
                                        ['name' => 'PHP', 'category' => 'Backend'],
                                        ['name' => 'Laravel', 'category' => 'Backend'],
                                        ['name' => 'SQL', 'category' => 'Database'],
                                    ];
                                @endphp
                
                                @foreach ($skills as $skill)
                                    <div
                                        x-show="skillsVisible"
                                        x-transition:enter="transition ease-out duration-700"
                                        x-transition:enter-start="opacity-0 transform translate-y-10"
                                        x-transition:enter-end="opacity-100 transform translate-y-0"
                                        style="transition-delay: {{ $loop->index * 100 }}ms"
                                        class="bg-gray-800 p-6 rounded-lg shadow-lg"
                                    >
                                        <h3 class="text-xl font-bold">{{ $skill['name'] }}</h3>
                                        <p class="text-sm mt-2 text-gray-400">{{ $skill['category'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </main>
    
                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>
            </div>
        </div>
    </body>
</html>