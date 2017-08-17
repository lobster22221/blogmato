@extends('layouts.layout')

@section ('content')
<div class='postContent'>
    
    
  @foreach( $posts as $post)
  @include ('components.Blog.post')
   @endforeach   
   
</div>
   
              
                
    
  

    
    



@endsection