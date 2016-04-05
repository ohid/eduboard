@extends('admin.layouts.admin')

@section('title', 'All Years')

@section('section')
<!-- Centered Pills -->
					<ul class="nav nav-tabs nav-justified">
					  <li><a href="{{ route('admin.year.create') }}">Add new year</a></li>
					  <li class="active"><a href="{{ route('admin.year.index') }}">All years</a></li>
					</ul>
					<div id="all-years" class="tab-pane active">
					  @include('admin.messages')
					  <table class="table table-hover">
					  	<tr>
					  		<th>No.</th>
					  		<th>Year</th>
					  		<th>Action</th>
					  	</tr>
					  	@if(count($years) > 0)
					  	<?php  
					  		if(isset($_GET['page'])) {
					  			$count = ($_GET['page']-1) * 15 + 1; 
					  		} else {
					  			$count = 1;
					  		}
					  	?>
					  	@endif
					  	@foreach($years as $year)
							<tr>
								<td width="20%">{{ $count++ }}</td>
								<td width="50%">{{ $year->year }}</td>
								<td width="30%">
									<a href="{{ route('admin.year.edit', $year->id) }}" class="btn btn-info btn-xs">Edit</a>
									{!! Form::open(['method' => 'delete', 'route' => ['admin.year.destroy', $year->id], 'class' => 'form-inline']) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-warning btn-xs']) !!}
									{!! Form::close() !!}
								</td>
							</tr>
					  	@endforeach
					  </table>

					  {!! $years->render() !!}
					</div>



@stop