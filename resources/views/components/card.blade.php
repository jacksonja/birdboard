@props(['project'])

<div class="card h-60">
    <h3 class="text-xl py-4 -ml-5 border-l-4 border-sky-300 pl-4 mb-3">
        <a href="{{ $project->path() }}">{{ $project->title }}</a>
    </h3>

    <div class="text-gray-400">{{ Str::limit($project->description) }}</div>
</div>
