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
                <ul class="nav nav-pills nav-justified">
                    @foreach($categories as $category)
                    <li role="presentation" class="@if ($category->id == $category_id) active @endif">
                        <a href="{{route('blog',$category->id)}}">
                        {{$category->name}}    
                        </a>
                        
                    </li>
                    @endforeach
                </ul>
                <br>
            </div>
            @foreach ($posts as $p )
            <div class="col-lg-12 text-center">
                <img class="img-responsive img-border img-full" src="{{ asset('storage/images/') }}/{{ $p->image }}" alt="">
                <h2>{{ $p ->title}}
                    <br>
                    <small>{{$p->created_at}}</small>
                </h2>
                <p> {{Str::limit($p->content,100)}}.</p>
                <a href="{{route('readmore',$p->id)}}" class="btn btn-default btn-lg">Read More{{$p->id}}</a>
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