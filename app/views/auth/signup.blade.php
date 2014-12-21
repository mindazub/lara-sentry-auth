

<!DOCTYPE html>
<html>
<head>
	<title>mindazub template</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>


<div class="alert">

@if(Session::has('errors'))
    <div class="alert alert-danger">{{ Session::get('errors') }}</div>
@endif

</div>


		<div class="container">

			<div class="col-sm-6">

			<h3>Sign up Form</h3>

			{{ Form::open(array('route'=>'signup_form_post', 'files'=>true)) }}
				
				<div class="form-group">
					<label for="">First Name</label>
					<input type="text" class="form-control input-sm" name="first_name">
				</div>
				
				
				<div class="form-group">
					<label for="">Last Name</label>
					<input type="text" class="form-control input-sm" name="last_name">
				</div>
				
				
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control input-sm" name="email">
				</div>
				
				
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control input-sm" name="password">
				</div>
				
				
				<button class="btn btn-primary">Submit</button>
				
				
				

			{{ Form::close() }}

			</div>

		</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</body>
</html>


