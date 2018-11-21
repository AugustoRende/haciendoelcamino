@if(Request::path() === '/')
    <section class="s-pageheader s-pageheader--home">
@else
    <section class="s-pageheader">
@endif
    <header class="header">
        <div class="header__content row">
            <div class="header__logo">
                <a class="logo" href="{{ url('/') }}">
                    <img src="{{ url('images/logo.png') }}" alt="Homepage">
                </a>
            </div> <!-- end header__logo -->

            <ul class="header__social">
                <li><a href="https://www.facebook.com/haciendoelcamino1/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/haciendo.elcamino" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            </ul> <!-- end header__social -->

            <a class="header__search-trigger" href="#0"></a>

            <div class="header__search">
                <form role="search" method="get" class="header__search-form" action="#">
                    <label>
                        <span class="hide-content">Buscar:</span>
                        <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Buscar:" autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Buscar">
                </form>
                <a href="#0" title="Close Search" class="header__overlay-close">Cerrar</a>
            </div>  <!-- end header__search -->

            <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

            <nav class="header__nav-wrap">
                <!-- <h2 class="header__nav-heading h6">Site Navigation</h2> -->
                <ul class="header__nav">
                    <li class="current"><a href="{{ url('/') }}" title="">Inicio</a></li>
                    <li class="has-children">
                        <a href="#0" title="">Categorías</a>
                        <ul class="sub-menu">
                            @foreach($categories as $category)
                                <li><a href="{{ url('/category/'.$category->id) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#0" title="">Blog</a>
                        <ul class="sub-menu">
                            @foreach($types as $type)
                                <li><a href="{{ url('/media/'.$type->id) }}">{{ $type->description }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="style-guide.html" title="">Styles</a></li>
                    <li><a href="about.html" title="">Nosotros</a></li>
                    <li><a href="contact.html" title="">Contactanos</a></li>
                </ul> <!-- end header__nav -->

                <a href="#0" title="Cerrar Menu" class="header__overlay-close close-mobile-menu">Cerrar</a>
            </nav> <!-- end header__nav-wrap -->
        </div> <!-- header-content -->
    </header> <!-- header -->

    @if(Request::path() === '/')
        @include('layouts.home')
    @endif
    
</section>