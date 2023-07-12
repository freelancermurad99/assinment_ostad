<!DOCTYPE html>
<html>
<head>
	<title>Glib's Blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.navbar {
			background-color: #f8f9fa;
		}
		.navbar-nav li {
			padding-right: 10px;
		}
		.nav-link {
			color: #333;
		}
		.nav-link:hover {
			color: #666;
		}
	</style>
</head>
<body>
    <div class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="/">Galib's Blog</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="/">প্রথম পাতা</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/">ব্লগ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/">যোগাযোগ</a>
				</li>
			</ul>
		</div>
	</nav>

    
        @yield('content')
    </div>
	<!-- আপনার ব্লগ সাইটের অন্যান্য কন্টেন্ট এখানে থাকবে -->
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
