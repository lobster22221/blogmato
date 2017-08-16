@extends('layouts.admin.admin')

@section ('header')
Edit post
@endsection

@section ('content')


<div class='postContent'>
    <form method="POST" {{action('PostsController@update', $post, $id)}}>
    {{ csrf_field() }}
    
  <div class="form-group">
      
    <label for="title">Title</label>
    
    <input type="text" class="form-control" id="title" name="title" placeholder="title" required>
  </div>
    
 <div class="form-group">
  <label for="body">Content:</label>
  <textarea class="form-control" rows="5" id="body" name="body"></textarea>
 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
   
</div>

@endsection