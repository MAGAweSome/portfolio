@extends('layouts.app')

@section('title', 'Marcus Grau')

@section('content')
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
@endsection