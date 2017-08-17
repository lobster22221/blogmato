@extends('layouts.layout')
@section('content')
 
    <form action="{{route('addentry', [])}}" method="post" enctype="multipart/form-data">{{ csrf_field() }}
        <input type="file" name="filefield">
        <input type="submit">
    </form>
 
 <h1> Pictures list</h1>
 <div class="row">
        <ul class="thumbnails">
            
            
 //@foreach($entries as $entry)
            
 <div>
                    <?php $filename= $entry->filename;?>
     <a href="{{asset('storage/'.$filename)}}"><img src="{{asset('storage/'.$filename)}}" width = "100" height="100"/></a>
                    </div>
                    
                  
 @endforeach
 </ul>
 </div>
 
@endsection