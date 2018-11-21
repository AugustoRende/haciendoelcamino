@extends('layouts.app')

@section('title', '- '.ucfirst(Request::path()))

@section('content')
    <section class="s-content">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1>Media: {{ $type->description }}</h1>

                {{-- <p class="lead">{{ $types->description }}</p> --}}
            </div>
        </div>

        @include('layouts.gallery', ['posts' => $type->posts ])
    </section> <!-- s-content -->
@endsection


