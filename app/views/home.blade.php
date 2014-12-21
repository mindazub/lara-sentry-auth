
<!DOCTYPE html>
<html>
<head>
	<title>mindazub template</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>





		<div class="container">

				<div class="col-sm-6">
				@if(Session::has('errors'))
				    <div class="alert alert-danger">{{ Session::get('errors') }}</div>
				@elseif(Session::has('success'))
				    <div class="alert alert-success">{{ Session::get('success') }}</div>
				@endif
				</div>
		</div>


<div class="container">

	<h1>This is HOME PAGE</h1>
	<div class="container">
		
	</div>
				

</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</body>
</html>