@extends('admin.layouts.admin')

@section('title', 'All results')

@section('section')
<!-- Centered Pills -->
					<ul class="nav nav-tabs nav-justified">
					  <li><a href="{{ route('admin.result.create') }}">Add new result</a></li>
					  <li class="active"><a href="{{ route('admin.result.index') }}">All results</a></li>
					</ul>
					<div id="all-results" class="tab-pane active">
					  @include('admin.messages')
					  <table class="table table-hover">
					  	<tr>
					  		<th>No.</th>
					  		<th>Name</th>
					  		<th>Roll</th>
					  		<th>Action</th>
					  	</tr>
					  	@if(count($results) > 0)
					  	<?php  
					  		if(isset($_GET['page'])) {
					  			$count = ($_GET['page']-1) * 100 + 1; 
					  		} else {
					  			$count = 1;
					  		}
					  	?>
					  	@endif
					  	@foreach($results as $result)
							<tr>
								<td width="20%">{{ $count++ }}</td>
								<td width="30%">{{ $result->name }}</td>
								<td width="20%">{{ $result->roll }}</td>
								<td width="30%">
									<a href="{{ route('admin.result.edit', $result->id) }}" class="btn btn-info btn-xs">Edit</a>
									{!! Form::open(['method' => 'delete', 'route' => ['admin.result.destroy', $result->id], 'class' => 'form-inline']) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-warning btn-xs']) !!}
									{!! Form::close() !!}
								</td>
							</tr>
					  	@endforeach
					  </table>

					  {!! $results->render() !!}
					</div>



@stop