
@extends ('layouts.master')


@section ('content')

	<div class="col-sm-8 blog-main">
		<h1>Sign In</h1>
		<hr>

	   	<form method="post" action="/login">
	   		{{csrf_field()}}

	   		<div class="form-group">
	   			<label for="email">Email:</label>
	   			<input type="email" name="email" id="email" class="form-control" value=""  />
	   		</div>

	   		<div class="form-group">
	   			<label for="password">Password:</label>
	   			<input type="password" name="password" id="password" class="form-control" value=""  />
	   		</div>

			<div class="form-group">
				<span class="col-sm-8">
					<button type="submit" class="btn btn-primary">Login</button>
				</span>
				<span class="col-sm-4"><a href="/register">Register</a> </span>
			</div>
	   	</form>

	   	@include('layouts.errors')

	</div>
@endsection