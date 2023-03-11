<div class="card">
    <div class="card-header">
        ID: {{ $movie->id }}
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            Original Title:{{ $movie->original_title }}
        </li>
        <li class="list-group-item">
            Nationality: {{ $movie->nationality }}
        </li>
        <li class="list-group-item">
            Date: {{ $movie->date }}
        </li>
        <li class="list-group-item">
            Vote: {{ $movie->vote }}
        </li>
    </ul>
</div>