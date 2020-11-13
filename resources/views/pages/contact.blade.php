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

        <form action="{{ url('/contact-us') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                <label>Name:</label> *<br />
                <input class="form-input-field" type="text" value="" name="name" size="40"/><br /><br />

                <label>Email Address:</label> *<br />
                <input class="form-input-field" type="text" value="" name="email" size="40"/><br /><br />

                <label>How can we help you?</label> *<br />
                <textarea class="form-input-field" name="content" rows="8" cols="38"></textarea><br /><br />

                <input class="form-input-button" type="reset" name="resetButton" value="Reset" />
                <input class="form-input-button" type="submit" name="submitButton" value="Submit" />
            </div>
        </form>
        <p class="padding20 text-center">
        <span style="font-size:15px; ">Note : If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy &amp; paste the email address)</span>
        </p>
        </div>
    </section>


    @include('pages.footer')

@endsection

