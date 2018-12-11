<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@stack("title")</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="@stack('desc')">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> --}}
	<style>
		textarea{
			resize: none;
			width: 100%;
			height: 160px!important;
		}
	</style>
</head>
<body>
	
	<header>
		<nav>
			<ul>
				<li>
					<a href="/">Home</a>
				</li>
				<li>
					<a href="/search">Search</a>
				</li>
			</ul>
		</nav>
	</header>



	@if(count($errors) > 0)
		<div class="container">
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li><i class="fas fa-times-circle"></i> {{$error}}</li>
					@endforeach
				</ul>
			</div>
		</div>
	@endif

	@yield("content")



</body>
<script src="/js/jquery_min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</html>