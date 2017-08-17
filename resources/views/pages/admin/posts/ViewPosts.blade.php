@extends('layouts.admin.admin')

@section ('header')
view posts
@endsection

@section ('content')
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<div class='postContent'>
    <table style="width:100%">
  <tr>
    <th>PostName</th>
    <th>Created</th> 
    <th>Modified</th>
    <th>Actions</th>
  </tr>
  @foreach($posts as $post)
  <tr>
    <td>{{$post->postName}}</td>
    <td>{{$post->created_at}}</td> 
    <td>
        <?php if($post->updated_at == $post->created_at ){echo "Never";}else {echo $post->updated_at;}?></td>
    <td>
        <a href="/posts/<?=$post->id?>">View</a>  
        <a href="/admin/posts/edit/<?=$post->id?>">Edit</a>
        <a href="/admin/posts/delete/<?php$post->id?>">Delete</a>
    </td>
  </tr>
   @endforeach   
  
  
  
</table>
 
   
</div>

@endsection