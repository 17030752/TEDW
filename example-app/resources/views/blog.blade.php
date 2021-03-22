@extends('layouts.template1')

@section('title', 'Home')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p><h1>This is my Blog page.</h1></p>
    @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
    @endfor
    <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">author</th>
        <th scope="col">email</th>
        <th scope="col">date</th>
        <th scope="col">content</th>
        <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($posts as $item)
  <tr>
  <th scope="row">
  {{$item->id}}
  </th>
  <td>  {{$item->title}} </td>
    <td>{{$item->author}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->date}}</td>
    <td>{{$item->content}}</td>
    <td>{{$item->image}}</td>
  </tr>
      @endforeach
  </tbody>
</table>
@endsection