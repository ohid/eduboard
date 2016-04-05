@extends('admin.layouts.admin')

@section('title', 'All Examinations')

@section('section')
<!-- Centered Pills -->
					<ul class="nav nav-tabs nav-justified">
					  <li><a href="{{ route('admin.examination.create') }}">Add new examination</a></li>
					  <li class="active"><a href="{{ route('admin.examination.index') }}">All examinations</a></li>
					</ul>
					<div id="all-examinations" class="tab-pane active">
					  @include('admin.messages')
					  <table class="table table-hover">
					  	<tr>
					  		<th>No.</th>
					  		<th>examination</th>
					  		<th>Action</th>
					  	</tr>
					  	@if(count($examinations) > 0)
					  	<?php  
					  		if(isset($_GET['page'])) {
					  			$count = ($_GET['page']-1) * 15 + 1; 
					  		} else {
					  			$count = 1;
					  		}
					  	?>
					  	@endif
					  	@foreach($examinations as $examination)
							<tr>
								<td width="20%">{{ $count++ }}</td>
								<td width="50%">{{ $examination->examination }}</td>
								<td width="30%">
									<a href="{{ route('admin.examination.edit', $examination->id) }}" class="btn btn-info btn-xs">Edit</a>
									{!! Form::open(['method' => 'delete', 'route' => ['admin.examination.destroy', $examination->id], 'class' => 'form-inline']) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-warning btn-xs']) !!}
									{!! Form::close() !!}
								</td>
							</tr>
					  	@endforeach
					  </table>

					  {!! $examinations->render() !!}
					</div>



@stop