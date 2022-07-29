@csrf
<div class="field mb-6">
    <label for="title" class="label text-sm mb-2 block">Title</label>

    <div class="control">
        <input
            type="text"
            class="input bg-transparent border border-gray-400 rounded p-2 text-xs w-full"
            name="title"
            placeholder="My next awesome project"
            required
            id="title"
            value="{{ $project->title }}"
        >
    </div>
</div>

<div class="field mb-6">
    <label for="description" class="label text-sm mb-2 block">Description</label>

    <div class="control">
            <textarea
                name="description"
                class="textarea bg-transparent border border-gray-400 rounded p-2 text-xs w-full"
                id="description"
                placeholder="I should start learning piano"
                required
            >{{ $project->description }}</textarea>
    </div>
</div>

<div class="field">
    <div class="control">
        <button type="submit" class="button is-link mr-2">{{ $buttonText }}</button>
        <a href="{{ $project->path() }}" class="underline">Cancel</a>
    </div>
</div>

@if ($errors->any())
    <div class="field mt-6">
        <ul>
            @foreach($errors->all() as $error)
                <li class="text-red-500 text-sm list-disc">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
