@extends('layout.app') {{-- estende in layout  --}}

@section('head_title')
    Laravel Model Controller
@endsection {{-- segnaposto dentro head  --}}

@section('body_main')
    {{-- segnaposto dentro body  --}}

    <main>
        <h1>
            Books
        </h1>
        <div class="row row-cols-4 g-5 ">
            @include('partials.card')
        </div>
    </main>
@endsection
