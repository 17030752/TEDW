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
            <div class="row">
                <a href="{{route('blogadmin.create')}}" class="btn btn-primary">New</a>
            </div>
            <table class="table table-bordered">
               <thead>
                   <tr>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Content</th>
                      <th>Image</th>
                      <th>Options</th>
                  </tr>	
              </thead>
              <tbody>
                  @foreach($posts as $post)
                  <tr>
                     <td>{{$post ->id}}</td>
                     <td>{{$post ->title}}</td>
                     <td>{{$post ->author}}</td>
                     <td>{{$post ->content}}</td>
                     <td>{{$post ->image}}</td>
                     <td>
                        <a href="" class="btn btn-primary">Edit</a>
                         <a href="" class="btn btn-danger">Delete</a>         
                     </td>
                 </tr>
                 @endforeach

             </tbody>
         </table>
     </div>
 </div>

</div>
@endsection