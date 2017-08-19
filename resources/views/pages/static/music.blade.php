@extends('layouts.layout')

@section('content')

<div>
chillhop songs to look up later

<style> table {
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
<table style="width:100%">
    <tr>
        <th>Song</th>
        <th>Author</th> 
        <th>link</th>
        
    </tr>
    
    <tr>
        <td>24/7 stream</td>
        <td>Ambition</td> 
        <td><a href="https://www.youtube.com/watch?v=j3sPW0uIgs8">Lofi Hiphop Radio - Beats to Study, Game & Relax</a></td>
    </tr>
    <tr>
        <td>Pure Imagination </td>
        <td>Dotan Negrin & Prismatic Mantis</td> 
        <td><a href="https://www.youtube.com/watch?v=TzaBak8o5UQ">Dotan Negrin & Prismatic Mantis - Pure Imagination (Future James Trap Remix) </a></td>
    </tr>
   
   </table>
</div>
@endsection