<x-app-layout>
    <header class="flex justify-between mb-3 py-4">
        <h2 class="text-gray-500 text-md">My Projects</h2>
        <a class="button" href="/projects/create">New Project</a>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                <div class="bg-white p-5 rounded-lg shadow h-60">
                    <h3 class="text-xl py-4 -ml-5 border-l-4 border-sky-300 pl-4 mb-3">
                        <a href="{{ $project->path() }}">{{ $project->title }}</a>
                    </h3>

                    <div class="text-gray-400">{{ Str::limit($project->description) }}</div>
                </div>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>
</x-app-layout>
