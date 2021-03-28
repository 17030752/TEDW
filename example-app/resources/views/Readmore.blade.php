@extends('layouts.template2')
@section('title','Readmore')
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
				<br>
			</div>
			<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0">
				@foreach ($posts as $p )
				<div class="col-lg-12 text-center">
					<img class="img-responsive img-border img-full" src="{{asset('img/'.$p->image)}}" alt="">
					<h2>{{ $p ->title}}
						<br>
						<small>{{$p->created_at}}</small>
					</h2>
					<p> {{$p->content}}.</p>
					<!--<a href="" class="btn btn-default btn-lg">Read More</a>-->
					<hr>
					<a href="{{route('comment',$p->id)}}" class="btn btn-success">comentar</a>
				</div>
				@endforeach
				
			</div>
			@foreach($comments as $c)
			<div class="card col col-lg-12">
				<div class="panel panel-primary">
				<div class="panel-heading"><h6><strong>{{$c->author}}</strong></h6></div>
				<div class="panel-body">
					{{$c->comment}}
				</div>
				<div class="panel-footer"><figcaption class="blockquote-footer">
						<strong>created:</strong>{{$c->created_at}} &nbsp;<cite title="Source Title"><strong>update:</strong>{{$c->updated_at}}</cite>
					</figcaption></div>
			</div>
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