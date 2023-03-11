@foreach ($movies as $item)
    <div class="col">
        <a href="{{ route('movie',$loop->index) }}" class="text-decoration-none text-bg-light">
            <div class="card">
                <div class="card-header">
                    ID: {{ $item->id }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Original Title:{{ $item->original_title }}
                    </li>
                    <li class="list-group-item">
                        Nationality: {{ $item->nationality }}
                    </li>
                    <li class="list-group-item">
                        Date: {{ $item->date }}
                    </li>
                    <li class="list-group-item">
                        Vote: {{ $item->vote }}
                    </li>
                </ul>
            </div>
        </a>

    </div>
@endforeach
