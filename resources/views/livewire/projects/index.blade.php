<div>
    <h1>Component Project Index</h1>

    <ul>
        @foreach ($this->projects as $project)
            <li>
                <a href="{{ route('projects.show', $project) }}">
                    {{ $project->id }} . {{ $project->title }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
