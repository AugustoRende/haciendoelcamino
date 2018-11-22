@extends('layouts.app')

@section('title', '- '.ucfirst(Request::path()))

@section('content')
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <article class="row format-standard">
            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">Augusto Rende Giacomelli.</h1>
                <ul class="s-content__header-meta">
                    <li class="date">16 de Julio de 1992</li>
                    <li class="cat">En La Plata</li>
                </ul>
            </div> <!-- end s-content__header -->
    
    		<div class="s-content__media col-full">
                <div class="s-content__slider slider">
                    <div class="slider__slides">
                        <div class="slider__slide">
                    		<img src="{{ url('images/home/augusto.jpg') }}">
                        </div>
                        <div class="slider__slide">
                            <img src="images/thumbs/single/gallery/single-gallery-02-1000.jpg">
                        </div>
                        <div class="slider__slide">
                            <img src="images/thumbs/single/gallery/single-gallery-03-1000.jpg">
                        </div>
                    </div>
                </div>
            </div> <!-- end s-content__media -->
            
            <div class="col-full s-content__main">
                <p class="lead">RELATO INTRODUCTORIO</p>
                
                <p>Relato más detallado</p>
            </div> <!-- end s-content__main -->
        </article>
    </section> <!-- s-content -->
@endsection