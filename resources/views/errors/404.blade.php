<!DOCTYPE html>

<html>

<head>

	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>404 Page Not Found Error</title>

</head>

<body>



<div class="container">
    <div class="jumbotron">
        <div class="text-center"><i class="fa fa-5x fa-frown-o" style="color:#d9534f;"></i></div>
        <h1 class="text-center">404 Not Found<p> </p><p><small class="text-center"> Oh noes everything broke</small></p></h1>
        <p class="text-center">Try pressing the back button or clicking on this button.</p>
        <p class="text-center"><a class="btn btn-primary" href="{{ route('home') }}"><i class="fa fa-home"></i> Take Me Home</a></p>
    </div>
</div>

</body>

</html>