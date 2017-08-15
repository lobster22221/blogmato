@extends('layouts.layout')
<hr>
@section('content')
<form method="POST" action='/posts'>
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

@include('components.error')
@endsection