@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel Model Controller | {{ $movie->original_title }}
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
        <div class="container">
            <div class="row ">
                <div class="col text-center">
                    <h2>
                        {{ $movie->original_title }}
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-center">
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
                </div>
            </div>
        </div>
        
    </main>
@endsection

