@extends('layouts.app')



@section('content')

	<div class="panel panel-default">
		<div class="panel-body">

			<div class="panel-heading">

				Trashed post
				
			</div>

				<table class="table table-hover">
					
								<thead>
									
									<th>
											
										Title

									</th>

									<th>
										
										Image

									</th>

									<th>
										
										Content

									</th>

									<th> 
										

										Edit

									</th>

									<th> 
										

										Restore

									</th>

									<th> 
										

										Trashing

									</th>

								</thead>

								<tbody>
									
										@if($posts->count() > 0)
											@foreach($posts as $post)
											
												<tr>

													

													<td>{{ $post->title }}</td>

														
														<td><img src="{{ asset('/uploads/posts/'. $post->featured) }}" alt="{{ $post->title }}" width="50px" height="50px"></td>
													
														
													

													<td>{{ $post->content }}</td>

													<td><a href="" class="btn btn-outline-info">Edit</a></td>


													<td><a href="{{ route('post.restore',['id'=>$post->id]) }}" class="btn btn-outline-success">Restore</a>

													</td><td><a href="{{ route('post.kill',['id'=>$post->id]) }}" class="btn btn-outline-danger">Delete</a></td>
												</tr>

											@endforeach

										@else 
												
												<tr>
													
													<th colspan="5" class="text-center">No trashed posts</th>

												</tr>	
										@endif
										

								</tbody>

				</table>

		</div>	
	</div>

@stop