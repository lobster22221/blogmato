<?php

namespace App\Http\Controllers;

use Request;
use Storage;
use File;
use Illuminate\Http\Response;
use App\Models\Fileentry;
class FileEntryController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    
	public function index()
	{
		$entries = \App\Models\Fileentry::all();
 
		return view('fileentries.index', ['entries' => $entries]);
	}
 
	public function add() {
 
		$file = Request::file('filefield');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file), 'public');
		$entry = new Fileentry();
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;
 
		$entry->save();
 
		return redirect('fileentry');
		
	}
        
        public function get($filename){
           
	$url = Storage::url('$filename.jpg');

		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
                echo "Entry = $entry";
		$file = Storage::disk('public')->get($entry->filename);
 
		return ("<img src='$url'>");
	}
}
