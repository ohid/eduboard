@extends('admin.layouts.admin')

@section('title', $year->exists ? 'Editing year' : 'Add new year')

@section('section')
<!-- Centered Pills -->
					<ul class="nav nav-tabs nav-justified">
					  <li class="active"><a href="{{ $year->exists ? '' : route('admin.year.create') }}">
							{{$year->exists ? 'Editing year' : 'Add new year'}}
					  </a></li>
					  <li><a href="{{ route('admin.year.index') }}">All years</a></li>
					</ul>

					<div id="new-year" class="tab-pane active">
						{!! Form::model($year, [
							'method' => $year->exists ? 'put' : 'post',
							'route' => $year->exists ? ['admin.year.update', $year->id] : ['admin.year.store'],
						]) !!}

						<div class="form-group top-group">

							@include('admin.messages')

							<h5>{!! Form::label('year', $year->exists ? 'Editing Year' :  'Add new year') !!}</h5>
							{!! Form::text('year', $year->year, ['class' => 'form-control', 'placeholder' => 'e.g. 2016']) !!}
						</div>

						{!! Form::submit($year->exists ? 'Update Year' : 'Add Year', ['class' => 'btn btn-primary']) !!}
						
						{!! Form::close() !!}
					</div>




@stop