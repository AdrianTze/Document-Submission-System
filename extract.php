<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/loaderStyle.css" />
</head>

<body>

	<div class="loader-wrapper">
		<span class="loader"><span class="loader-inner"></span></span>
	</div>

	<script>
		$(window).on("load", function() {
			$(".loader-wrapper").fadeOut("slow");
		});
	</script>
</body>

</html>