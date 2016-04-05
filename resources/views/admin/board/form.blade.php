@extends('admin.layouts.admin')

@section('title', $board->exists ? 'Editing board' : 'Add new board type ')

@section('section')
<!-- Centered Pills -->
					<ul class="nav nav-tabs nav-justified">
					  <li class="active"><a href="{{ $board->exists ? '' : route('admin.board.create') }}">
							{{$board->exists ? 'Editing board' : 'Add new board'}}
					  </a></li>
					  <li><a href="{{ route('admin.board.index') }}">All boards</a></li>
					</ul>

					<div id="new-board" class="tab-pane active">
						{!! Form::model($board, [
							'method' => $board->exists ? 'put' : 'post',
							'route' => $board->exists ? ['admin.board.update', $board->id] : ['admin.board.store'],
						]) !!}

						<div class="form-group top-group">

							@include('admin.messages')

							<h5>{!! Form::label('board', $board->exists ? 'Editing board' :  'Add new board') !!}</h5>
							{!! Form::text('board', $board->board, ['class' => 'form-control', 'placeholder' => 'e.g. Dhaka']) !!}
						</div>

						{!! Form::submit($board->exists ? 'Update board' : 'Add board', ['class' => 'btn btn-primary']) !!}
						
						{!! Form::close() !!}
					</div>




@stop