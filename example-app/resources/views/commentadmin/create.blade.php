@extends('layouts.template2')
@section('content')
@parent
<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Create a comment. <strong>blog</strong>
			</h2>
			<hr>
			{!! Form::open(['url' => 'commentadmin','method'=>'post']) !!}
			<div class="form-group">
			

			{{Form::label('author', 'Author')}}
			 {{Form::text('author',null,['class'=>'form-control','placeholder'=>'Author'])}} 
             {{Form::hidden('post_id',$post_id)}} 
			 {{Form::label('comment', 'comment')}}
			 {{Form::textarea('comment',null,['class'=>'form-control','placeholder'=>'comment'])}} 

			</div>
			 {{Form::submit('Send',['class'=>'form-control btn btn-success'])}}
			{!! Form::close() !!}
		</div>
	</div>

</div>
@endsection