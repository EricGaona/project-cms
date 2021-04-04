
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FrontEnd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="#">

	<link rel="stylesheet" href="http://localhost:8080/project-cms/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost:8080/project-cms/public/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://localhost:8080/project-cms/public/css/style.css">
	<link rel="stylesheet" href="http://localhost:8080/project-cms/public/css/fonts.css">
	<link rel="stylesheet" href="http://localhost:8080/project-cms/public/css/cssFancybox/jquery.fancybox.css">

	<script src="http://localhost:8080/project-cms/public/js/jquery-2.2.0.min.js"></script>
	<script src="http://localhost:8080/project-cms/public/js/bootstrap.min.js"></script>
	<script src="http://localhost:8080/project-cms/public/js/jquery.fancybox.js"></script>
	<script src="http://localhost:8080/project-cms/public/js/animatescroll.js"></script>
	<script src="http://localhost:8080/project-cms/public/js/jquery.scrollUp.js"></script>
    <script src="http://localhost:8080/project-cms/public/js/script.js"></script>
</head>

<body>

	<div class="container-fluid">

		@include('frontend.menu')
        @yield('content')
		
		
    </div>





</body>
</html>


