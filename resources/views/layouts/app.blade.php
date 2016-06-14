<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Проба пера.</title>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	
	<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
	<script src="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="header">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="/">
			        D&D 
			      </a>
			    </div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
					    <li><a href="{{ action('Table\AdventureController@index') }}">Adventure</a></li>
							
						@if (Auth::check())
							<li><a href="{{ url('auth/logout') }}">Logout</a></li>
							<li><a href="{{ url('acount/profile') }}">Account</a></li>
						@else
					    	<li><a href="{{ url('auth/login') }}">Login</a></li>
					    	<li><a href="{{ url('auth/register') }}">Register</a></li>
						@endif

					</ul>
				</div>

			  </div>
			</nav>
		</div>

		@yield('content')
	</div>
</body>
</html>