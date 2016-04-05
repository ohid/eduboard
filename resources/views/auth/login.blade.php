@extends('layouts.auth')

@section('form')
	<div class="login-full">
	    <div class="container">
	        <div class="card card-container">
	            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
	            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
	            <p id="profile-name" class="profile-name-card"></p>
	            <div>
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <div>{{ $error }}</div>
                    </div>
                @endforeach
                </div>
	            <form class="form-signin" method="POST" action="/auth/login">
	            	{!! csrf_field() !!}
	                <span id="reauth-email" class="reauth-email"></span>
	                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
	                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
	                <div id="remember" class="checkbox" >
	                    <label>
	                        <input type="checkbox" name="remember" value="remember-me"> Remember me
	                    </label>
	                </div>
	                <button class="btn  btn-primary form-control" type="submit">Sign in</button>
	            </form><!-- /form -->
	            <a href="#" class="forgot-password">
	                Forgot the password?
	            </a>
	        </div><!-- /card-container -->
	    </div><!-- /container -->
    </div>
@stop