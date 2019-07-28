@extends('layouts.app')

@section('content')


  @include('admin.includs.errors')

<div class="panel panel-default">

	<div class="panel-heading">

		
		Update category:{{ $category->name }}  
		
	</div>

	<div class="panel-body">
		
		<form action="{{ route('category.update',['id'=> $category->id]) }}" method="post" accept-charset="utf-8">

			@csrf


			<div class="form-group">
				<lavel for="name">Name</lavel>
				<input type="text" name="name" value="{{ $category->name }}" class="form-control">
			</div>


			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-outline-success" type="submit">Update category</button>
				</div>
			</div>
			

		</form>
		
	</div>


</div>


@stop