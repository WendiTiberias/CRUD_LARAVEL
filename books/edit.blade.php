@extends('layouts.main')


@section('container')
<div class="container py-5">
	<h2 class="fs-2 font-semibold">Add Book</h2>
	<a href="/" class="d-block mt-3 mb-4">Back to home</a>
	@foreach($item as $p) 
	<form class="form col-md-5 border py-4 px-4" method="post" action="/book/update">
		{{ csrf_field() }}
		<input type="hidden" name="no" value="{{ $p->no }}">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Title</label>
			<input type="text" class="form-control" value="{{ $p->title }}" name="title" id="exampleFormControlInput1" placeholder="book title">
		</div>
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Author</label>
			<input type="text" class="form-control" value="{{ $p->author }}" name="author" id="exampleFormControlInput1" placeholder="Author book">
		</div>
			<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Publication</label>
			<input type="text" class="form-control" value="{{ $p->publication }}" name="publication" id="exampleFormControlInput1" placeholder="Publication">
		</div>
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Year</label>
			<input type="text" class="form-control" value="{{ $p->year }}" name="year" id="exampleFormControlInput1" placeholder="Year">
		</div>
		<button style="width:100%" class="btn btn-primary mt-3" type="submit">Submit</button>
	</form>
	@endforeach
</div>
@endsection()