@extends('layouts.app')

@section('content')


@include('admin.includs.errors')

<div class="panel panel-default">

	<div class="panel-heading">

		
		Create a new post       
		
	</div>

	<div class="panel-body">
		
		<form action="{{ route('category.store') }}" method="post" accept-charset="utf-8">

			@csrf


			<div class="form-group">
				<lavel for="name">Name</lavel>
				<input type="text" name="name" class="form-control">
			</div>


			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-outline-success" type="submit">Store category</button>
				</div>
			</div>
			

		</form>
		
	</div>


</div>


@stop