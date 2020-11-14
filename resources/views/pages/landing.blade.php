@extends('layouts.pages_layout')

@section('content')

    @foreach ($sliders as $slider)
    <section class="banner" role="banner" style="background-image: url(' {{ $slider->picture }} ')">
        <header id="header">
            <div class="header-content clearfix">
            <a class="logo" href="{{ url('/') }}"><img src="images/bemo-logo2.png" alt=""></a>
                <nav class="navigation" role="navigation">
                    <ul class="primary-nav">
                    @foreach ($menus as $menu)
                        <li><a href="{{ $menu->link }}">{{ $menu->title }}</a></li>
                    @endforeach
                    </ul>
                </nav>
                <a href="#" class="nav-toggle">Menu<span></span></a>
            </div><!-- header content -->
        </header><!-- header -->
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-text text-center">
                    <h1>{{ $slider->title }}</h1>
                </div><!-- banner text -->
            </div>
        </div>
    </section><!-- banner -->
    @endforeach


    
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

