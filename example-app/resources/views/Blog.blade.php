@extends('layouts.template2')
@section('tittle' ,'Blog')
@section('sidebar')
@parent
@endsection
@section('content')
@parent

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Company <strong>blog</strong>
                </h2>
                <hr>
            </div>
            @foreach ($posts as $p )
            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="{{asset('img/slide-1.jpg')}}" alt="">
                <h2>Post Title
                    <br>
                    <small>{{$p->created_at}}</small>
                </h2>
                <p> {{$p->content}}.</p>
                <a href="#" class="btn btn-default btn-lg">Read More</a>
                <hr>
            </div>
            @endforeach
            <div class="col-lg-12 text-center">
                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a>
                    </li>
                    <li class="next"><a href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

@endsection
@section('footer')
@parent
@endsection