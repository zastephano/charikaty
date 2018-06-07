<!DOCTYPE html>
<html>
<head>
	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    {{-- Bootstrap --}}
    <link rel="stylesheet" type="text/css" href="assets/components/bootstrap-3.3.7-dist/css/bootstrap.min.css">

        <style>
        	html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 300px;
                height: 100vh;
                margin: 0;
            }
        </style>
</head>
<body>

	<div class="lead text-center jumbotron">
		<h1>This is <strong>HOME</strong> Page</h1>
		<h2>(For Guest)</h2>
		<hr>
		<a href="{{url('/login')}}" class="btn btn-primary"><strong>USER</strong></a>
		<a href="{{url('/admin')}}" class="btn btn-danger"><strong>ADMIN</strong></a>
	</div>

</body>
</html>

