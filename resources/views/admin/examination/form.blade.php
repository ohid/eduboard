@extends('admin.layouts.admin')

@section('title', $examination->exists ? 'Editing examination' : 'Add new examination type ')

@section('section')
<!-- Centered Pills -->
					<ul class="nav nav-tabs nav-justified">
					  <li class="active"><a href="{{ $examination->exists ? '' : route('admin.examination.create') }}">
							{{$examination->exists ? 'Editing examination' : 'Add new examination type '}}
					  </a></li>
					  <li><a href="{{ route('admin.examination.index') }}">All examinations</a></li>
					</ul>

					<div id="new-examination" class="tab-pane active">
						{!! Form::model($examination, [
							'method' => $examination->exists ? 'put' : 'post',
							'route' => $examination->exists ? ['admin.examination.update', $examination->id] : ['admin.examination.store'],
						]) !!}

						<div class="form-group top-group">

							@include('admin.messages')

							<h5>{!! Form::label('examination', $examination->exists ? 'Editing examination' :  'Add new examination type') !!}</h5>
							{!! Form::text('examination', $examination->examination, ['class' => 'form-control', 'placeholder' => 'e.g. SSC']) !!}
						</div>

						{!! Form::submit($examination->exists ? 'Update examination' : 'Add examination', ['class' => 'btn btn-primary']) !!}
						
						{!! Form::close() !!}
					</div>




@stop