<x-app-layout>
    <header class="flex justify-between items-center mb-3 py-4">
        <p class="text-gray-500 text-md">
            <a class="text-gray-500 text-md" href="/projects">My Projects</a> / {{ $project->title }}
        </p>

        <a class="button" href="/projects/create">New Project</a>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-gray-500 text-lg font-bold mb-3">Tasks</h2>

                    @foreach($project->tasks as $task)
                        <div class="card mb-3">
                            <form method="POST" action="{{ $task->path() }}">
                                @method('PATCH')
                                @csrf

                                <div class="flex items-center">
                                    <input name="body" class="w-full {{ $task->completed ? 'text-gray-400' : '' }}" value="{{ $task->body }}">
                                    <input name="completed" class="border-gray-300 rounded" type="checkbox" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach

                    <div class="card mb-3">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf
                            <input placeholder="Add a new task..." class="w-full" name="body">
                        </form>
                    </div>
                </div>

                <div>
                    <h2 class="text-gray-500 text-lg font-bold mb-3">General Notes</h2>

                    {{-- general notes --}}
                    <textarea class="border border-gray-100 card w-full h-60">Lorem ipsum.</textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                <x-card :project="$project"/>
            </div>
        </div>
    </main>

</x-app-layout>
