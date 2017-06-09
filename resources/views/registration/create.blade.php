
@extends ('layouts.master')


@section ('content')

	<div class="col-sm-8 blog-main">
		<h1>Register</h1>
		<hr>
	   	<form method="post" action="/register">
	   		{{csrf_field()}}

	   		<div class="form-group">
	   			<label for="name">Name:</label>
	   			<input type="text" name="name" id="name" class="form-control name" value="" required />
	   		</div>
	   		
	   		<div class="form-group">
	   			<label for="email">Email:</label>
	   			<input type="email" name="email" id="email" class="form-control" value="" required />
	   		</div>

	   		<div class="form-group">
	   			<label for="password">Password:</label>
	   			<input type="password" name="password" id="password" class="form-control" value="" required />
	   		</div>

	   		<div class="form-group">
	   			<label for="password_confirmation">Confirm Password:</label>
	   			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="" required />
	   		</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>	   		
	   	</form>

	   	@include('layouts.errors')

	</div>
@endsection