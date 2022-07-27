<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $project->title }}</h2>
    </x-slot>

    <div>{{ $project->description }}</div>
    <a href="/projects">Go Back</a>
</x-app-layout>
