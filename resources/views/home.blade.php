@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Home
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
        <h1>
            Books
        </h1>
        <div class="d-flex flex-wrap gap-5">
            @foreach ($movies as $item)
                <ul>
                    <li>
                        ID: {{ $item->id }}
                    </li>
                    <li>
                        Original Title:{{ $item->original_title }}
                    </li>
                    <li>
                        Nationality: {{ $item->nationality }}
                    </li>
                    <li>
                        Date: {{ $item->date }}
                    </li>
                    <li>
                        Vote: {{ $item->vote }}
                    </li>
                </ul>
            @endforeach
        </div>
    </main>
@endsection
