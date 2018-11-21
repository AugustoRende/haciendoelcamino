@extends('layouts.app')

@section('title', '- '.$category->name)

@section('content')
    <section class="s-content">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1>Category: {{ $category->name }}</h1>

                <p class="lead">{{ $category->description }}</p>
            </div>
        </div>

        @include('layouts.gallery', ['posts' => $category->posts ])
    </section> <!-- s-content -->
@endsection


