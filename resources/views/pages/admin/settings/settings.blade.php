@extends('layouts.admin.admin')

@section ('header')
Settings
@endsection

@section ('content')

    <form method="POST">
    {{ csrf_field() }}
    
  <div class="form-group">
      
    <label for="title">Maintenance Mode</label>
    
    <input type="button" class="form-control" id="maintenance" name="maintenance">
  </div>
    
  <button type="submit" class="btn btn-primary">Save</button>
</form>
 
 
   


@endsection