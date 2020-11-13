@extends('layouts.pages_layout')

@section('content')
<section class="banner" role="banner">
        <header id="header">
            <div class="header-content clearfix">
                <a class="logo" href="#"><img src="images/bemo-logo2.png" alt=""></a>
                <nav class="navigation" role="navigation">
                    <ul class="primary-nav">
                    @foreach ($menus as $menu)
                        <li><a href="{{ $menu->link }}">{{ $menu->title }}</a></li>
                    @endforeach
                    </ul>
                </nav>
                <a href="#" class="nav-toggle">Menu<span></span></a>
            </div>
        </header>
        <div class="container">
        <div id="carousel-slide" class="carousel slide carousel-slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            @foreach ($sliders as $slider)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="view">
                            <img class="d-block w-100" src="{{ $slider->picture }}" alt="banner slide" >
                        </div>
                        <div class="carousel-caption">
                        {{ $slider->title }}
                        </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>

    </section>

    
    <section id="article" class="section article">
        <div class="container">
        @foreach ($contents as $content)
        <div class="feature-content">
                        <h5>{{ $content->title }}</h5>
                        <p>{!! $content->content !!}</p>
                    </div>
        @endforeach

        </div>
    </section>


    @include('pages.footer')

@endsection

