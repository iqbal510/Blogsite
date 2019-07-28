@extends('layouts.app')



@section('content')
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="panel-headein">
				
					Categories

			</div>

			<table class="table table-hover">
				
							<thead>
								
								<th>
										
									Category name

								</th>

								<th>
									
									Editing

								</th>

								<th> 
									

									Deleting

								</th>

							</thead>

							<tbody>
								@if($categories->count() > 0)
									@foreach($categories as $category)
										<tr>
											
											<td>
													
													{{ $category->name }}

											</td>

											<td>
													
													<a href="{{ route('category.edit',['id'=> $category->id]) }}" class="btn btn-xs btn-outline-info">Edit

											</td>

											<td>
													
													<a href="{{ route('category.delete',['id'=> $category->id]) }}" class="btn btn-xs btn-outline-danger">Delete
											</td>

										</tr>

									@endforeach

								@else
								
											<tr>
												
												<th colspan="5" class="text-center">No category yet</th>

											</tr>		
								@endif	
									

							</tbody>

		</div>			</table>

	</div>			


@stop