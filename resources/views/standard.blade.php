@extends('layouts.app')

@section('title', '- '.$post->title)

@section('content')
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    {{ $post->title }}
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date">{{ $post->date }}</li>
                    <li class="cat">
                        En
                        <a href="{{ url('category/'.$post->category->id) }}">{{ $post->category->name }}</a> 
                    </li>
                </ul>
            </div> <!-- end s-content__header -->
    
            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <img src="{{ url($post->src) }}">
                </div>
            </div> <!-- end s-content__media -->


            <div class="col-full s-content__main">
                <p class="lead">{{ $post->short_description }}</p>
                
                <p>{{ $post->long_description }}</p>

                {{-- TODO: LLAMAR A PLANTILLA CON LA PARTICULARIDAD DEL POSTEO EN CUESTION --}}
                @include('posts/'.$post->id)
                
            </div> <!-- end s-content__main -->

        </article>
    </section> <!-- s-content -->
@endsection
