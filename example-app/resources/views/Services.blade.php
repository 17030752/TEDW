@extends('layouts.template2')
@section('tittle' ,'Services')
@section('sidebar')
    @parent
@endsection
@section('content')
    @parent
<div class="row">
<div class="box">
<div class="col-lg-12">
<hr>
<h2 class="intro-text text-center"> services <strong>bussiness casual</strong></h2>
</div>
<div class="col-md-12">
hrere goes services
<ul>
@foreach ($services as $service )
    <li>{{$service->name}}({{$service->description}})</li>
@endforeach
</ul>
</div>
<div class="clearfix"></div>
</div>
</div>
@endsection
@section('footer')
    @parent
@endsection