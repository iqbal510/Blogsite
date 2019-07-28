@extends('layouts.app')

@section('content')


@if(count($errors) > 0)


<ul class="list-group">
	
	@foreach($errors->all() as $error)

	<li class="list-group-item text-danger">
		
		
		{{ $error }}		

	</li>
	@endforeach

</ul>



@endif

<div class="panel panel-default">

	<div class="panel-heading">

		
		Edit post::{{ $post->title }}     
		
	</div>

	<div class="panel-body">
		
		<form action="{{ route('post.update',['id'=>$post->id]) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">

			{{ csrf_field() }}


			<div class="form-group">
				<lavel for="title">Title</lavel>
				<input type="text" name="title" value="{{ $post->title }}" class="form-control">
			</div>

			<div class="form-group">
				<lavel for="title">Featured image</lavel>
				<input type="file" id="featured" name="featured" class="form-control">
			</div>	

			<div class="form-group">
				<lavel for="category">Selecct a Category</lavel>
				<select name="category_id" id="category" class="form-control">
					
					@foreach($categories as $category)

						<option value="{{ $category->id }}">{{ $category->name }}</option>

					@endforeach

				</select>
			</div>

			<div class="form-group">
				<lavel for="title">Content</lavel>
				<textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea> 
			</div>

			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-outline-success" type="submit">Store post</button>
				</div>
			</div>
			

		</form>
		
	</div>


</div>


@stop