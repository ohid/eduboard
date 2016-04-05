@extends('admin.layouts.admin')

@section('title', $result->exists ? 'Editing result' : 'Add new result')

@section('section')
<!-- Centered Pills -->
					<ul class="nav nav-tabs nav-justified">
					  <li class="active"><a href="{{ $result->exists ? '' : route('admin.result.create') }}">
							{{$result->exists ? 'Editing result' : 'Add new result'}}
					  </a></li>
					  <li><a href="{{ route('admin.result.index') }}">All results</a></li>
					</ul>


					<div id="new-result" class="tab-pane active">
						{!! Form::model($result, [
							'method' => $result->exists ? 'put' : 'post',
							'route' => $result->exists ? ['admin.result.update', $result->id] : ['admin.result.store'],
						]) !!}

						@include('admin.messages')

						<h5>{!! $result->exists ? 'Editing result' :  'Add new result' !!}</h5>
						<hr>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('roll') !!}
									{!! Form::text('roll', null, ['class' => 'form-control']) !!}
								</div>

								<div class="form-group">
									<label for="board">Board</label>
									<select name="board" id="board"  class="form-control" >
										<option value="">Select a board</option>

										@foreach($boards as $board)
											<option value="{{ $board->board }}" 
											{{ ($board->board == $result->board) ? 'selected' : '' }} 
											>{{ $board->board }}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group">
									<label for="year">Year</label>
									<select name="year" id="year"  class="form-control" >
										<option value="">Select a year</option>

										@foreach($years as $year)
											<option value="{{ $year->year }}" 
											{{ ($year->year == $result->year) ? 'selected' : '' }} 
											>{{ $year->year }}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group">
									<label for="examination">Examination</label>
									<select name="examination" id="examination"  class="form-control" >
										<option value="">Select an examination type</option>

										@foreach($examinations as $examination)
											<option value="{{ $examination->examination }}" 
											{{ ($examination->examination == $result->examination) ? 'selected' : '' }} 
											>{{ $examination->examination }}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group">
									{!! Form::label('group') !!}
									{!! Form::select('group', ['Select a group', 'Business Studies', 'Science', 'Arts'] ,null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('type') !!}
									{!! Form::select('type', ['regular' => 'Regular', 'irregular' => 'Irregular'], null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-md-6">								
								<div class="form-group">
									{!! Form::label('name') !!}
									{!! Form::text('name', null, ['class' => 'form-control']) !!}
								</div>			
								<div class="form-group">
									{!! Form::label('fathers_name', 'Father\'s name') !!}
									{!! Form::text('fathers_name', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('mothers_name', 'Mother\'s name') !!}
									{!! Form::text('mothers_name', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('birth', 'Date of birth') !!}
									{!! Form::input('date', 'birth', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('institute') !!}
									{!! Form::text('institute', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('result', 'Grade Point') !!}
									{!! Form::text('result', null, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>

						<h6><b>Subject wise grade mark: </b></h6>
						<hr>

						<div class="row">
							<div class="col-md-6">								
								<div class="form-group">
									{!! Form::label('bangla') !!}
									{!! Form::text('bangla', null, ['class' => 'form-control']) !!}
								</div>					
								<div class="form-group">
									{!! Form::label('english') !!}
									{!! Form::text('english', null, ['class' => 'form-control']) !!}
								</div>	
								<div class="form-group">
									{!! Form::label('math') !!}
									{!! Form::text('math', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('science') !!}
									{!! Form::text('science', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('religion') !!}
									{!! Form::text('religion', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-md-6">								
								<div class="form-group">
									{!! Form::label('int_to_busi', 'Introduction to business') !!}
									{!! Form::text('int_to_busi', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('accounting') !!}
									{!! Form::text('accounting', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('business_entre', 'Business Entreprenuer') !!}
									{!! Form::text('business_entre', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('agriculture') !!}
									{!! Form::text('agriculture', null, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>


							<!-- {!! Form::label('result', $result->exists ? 'Editing result' :  'Add new result') !!}
							{!! Form::text('result', $result->result, ['class' => 'form-control', 'placeholder' => 'e.g. 2016']) !!} -->
				
						{!! Form::submit($result->exists ? 'Update result' : 'Add result', ['class' => 'btn btn-primary']) !!}
						
						{!! Form::close() !!}
					</div>




@stop