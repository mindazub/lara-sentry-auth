

<!DOCTYPE html>
<html>
<head>
	<title>Sentry Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>








</div>


		<div class="container">


				

			<div class="col-sm-6">


			<h3>Login Form</h3>


				@if(Session::has('errors'))
				    <div class="alert alert-danger">{{ Session::get('errors') }}</div>
				@endif

				
			{{ Form::open(array('url'=>'/login', 'files'=>true)) }}
				
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control input-sm" name="email" placeholder="Email">
				</div>
				
				
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control input-sm" name="password" placeholder="Password">
				</div>
				
				<button class="btn btn-primary">Submit</button>	

			{{ Form::close() }}

			</div>

		</div>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</body>
</html>
