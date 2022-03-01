@extends('layouts.main')

{{-- @section('title')
BookList
@endsection() --}}

@section('container')

<div class="container py-5">
	<h1 class="fs-2 font-semibold">BookList</h1>
	<a href="/book/add" class="block mt-3 mb-4 btn btn-outline-primary">Add new book</a>
	<table class="table table-striped">
    <thead>
    	<tr class="text-center">
    		<th >No</th>
    		<th>Title</th>
    		<th>Author</th>
    		<th>Publication</th>
    		<th>Year</th>
    		<th>Modifier</th>
    	</tr>
    </thead>
    <tbody>
    	@foreach($Books as $item)
        <tr class="text-center">
            <td style="height:30px; line-height:30px;">{{ $item->no }}</td>
            <td style="height:30px; line-height:30px;">{{ $item->title }}</td>
            <td style="height:30px; line-height:30px;">{{ $item->author }}</td>
            <td style="height:30px; line-height:30px;">{{ $item->publication }}</td>
            <td style="height:30px; line-height:30px;">{{ $item->year }}</td>
            <td>
                <a href='/book/delete/{{ $item->no }}' class="btn btn-danger btn-sm">Delete</a>
                <a href="/book/edit/{{$item->no}}" class="btn btn-success btn-sm">Edit</a>
            </td>
        </tr>
   
        @endforeach
    </tbody>
  </table>
</div>

@endsection()