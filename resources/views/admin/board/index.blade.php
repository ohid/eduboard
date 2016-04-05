@extends('admin.layouts.admin')

@section('title', 'All Boards')

@section('section')
<!-- Centered Pills -->
					<ul class="nav nav-tabs nav-justified">
					  <li><a href="{{ route('admin.board.create') }}">Add new board</a></li>
					  <li class="active"><a href="{{ route('admin.board.index') }}">All boards</a></li>
					</ul>
					<div id="all-boards" class="tab-pane active">
					  @include('admin.messages')
					  <table class="table table-hover">
					  	<tr>
					  		<th>No.</th>
					  		<th>board</th>
					  		<th>Action</th>
					  	</tr>
					  	@if(count($boards) > 0)
					  	<?php  
					  		if(isset($_GET['page'])) {
					  			$count = ($_GET['page']-1) * 15 + 1; 
					  		} else {
					  			$count = 1;
					  		}
					  	?>
					  	@endif
					  	@foreach($boards as $board)
							<tr>
								<td width="20%">{{ $count++ }}</td>
								<td width="50%">{{ $board->board }}</td>
								<td width="30%">
									<a href="{{ route('admin.board.edit', $board->id) }}" class="btn btn-info btn-xs">Edit</a>
									{!! Form::open(['method' => 'delete', 'route' => ['admin.board.destroy', $board->id], 'class' => 'form-inline']) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-warning btn-xs']) !!}
									{!! Form::close() !!}
								</td>
							</tr>
					  	@endforeach
					  </table>

					  {!! $boards->render() !!}
					</div>



@stop