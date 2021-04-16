@extends('layouts.template2')
@section('content')
@parent
<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Blog administration <strong>blog</strong>
			</h2>
			<hr>
			{!! Form::open(['url' => 'blogadmin','method'=>'post','files'=>true]) !!}
			<div class="form-group">
			{{Form::label('title', 'Title')}}
			 {{Form::text('title',null,['class'=>'form-control','placeholder'=>'Title'])}}

			{{Form::label('author', 'Author')}}
			 {{Form::text('author',null,['class'=>'form-control','placeholder'=>'Author'])}} 

			 {{Form::label('content', 'Content')}}
			 {{Form::textarea('content',null,['class'=>'form-control','placeholder'=>'content'])}} 

			 {{Form::label('image', 'Image')}}
			 {{Form::file('image',null,['class'=>'form-control','placeholder'=>'image'])}} 
			</div>
			{{Form::label('category_id', 'Categories')}}
			 {{Form::select('category_id',$categories,null,['class'=>'form-control','placeholder'=>'options'])}}
			 {{Form::submit('Send',['class'=>'form-control btn btn-success'])}}
			{!! Form::close() !!}
		</div>
	</div>

</div>
@endsection