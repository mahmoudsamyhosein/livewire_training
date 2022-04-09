<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$setting->doc_title}}</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('icon-2.png')}}" style="width:24px; height:24px;">
        <link rel="stylesheet" href="{{asset('css/documenter_style.css')}}" media="all">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="documenter-project-mp-price" dir="rtl">
        <style>
            img {
                margin-top: 75px;
                margin-bottom: 75px;
            }
            .title {
                background: #FB70A9;
            }
        </style>
        <div id="documenter_sidebar">
            <h4 class="title">{{$setting->doc_name}}</h4>
            <ul id="documenter_nav">
                <li><a class="current" href="#">{{$setting->link_introd}}</a></li>
                
                <li><a href="#{{$setting->link}}">{{$setting->link_subject}}</a></li>
            </ul>
            <div id="documenter_copyright">
                <a href="{{$setting->copy_right_link}}">{{$setting->copy_right}}</a>
            </div>
        </div>
        <div id="documenter_content">
            <section id="{{$setting->link_introd}}">
                <div class="text-center">
                    <h1>{{$setting->introd}}</h1>
                </div>
                <img src="{{ asset('cover') }}/{{$setting->image_cover}}"  alt="{{$setting->image_alt}}">
            </section>
            
            <section id="{{$setting->link}}">
                <div class="text-center">
                <h1 class="title text-center">{{$setting->link_subject}}</h1>
                    {{$setting->doc_subject}}
                    <pre>{{$setting->pre}}</pre>
                    <img src="{{asset('images/doc_post')}}/{{$setting->image}}"  alt="{{$setting->image}}">
                </div>
            </section>
    <script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/jquery.scrollTo.js')}}"></script>
	<script src="{{asset('js/jquery.easing.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
