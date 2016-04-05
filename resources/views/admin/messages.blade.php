							@if(count($errors->all()) > 0)
								<div class="alert alert-danger">
								@foreach($errors->all() as $error)
									<div>{{ $error }}</div>
								@endforeach
								</div>
							@endif

							@if(Session::get('status'))
					          <div class="alert alert-success">
					            {{ Session::get('status')}}
					          </div>
					        @endif