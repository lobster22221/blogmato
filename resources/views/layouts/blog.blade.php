

@extends('layouts.layout')

@section ('content')
<div id='postContent'>
    
    @foreach($blogpost as $post)    
    @include('components.blog.blogpost')    
    <hr>
    
 @endforeach
  
</div>


@endsection