<x-app-layout>
    <header class="flex justify-between items-center mb-3 py-4">
        <h2 class="text-gray-500 text-md">My Projects</h2>
        <a class="button" href="/projects/create">New Project</a>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                <x-card :project="$project"/>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>
</x-app-layout>
