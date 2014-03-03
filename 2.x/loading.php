<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>loading2</title>
		<link rel="stylesheet" type="text/css" href="loading.css">
<!--[if lte IE 8]>
		<script src="/js/html5shiv-3.7.0.js"></script>
<![endif]-->
		<script src="/js/jquery-2.1.0.min.js"></script>
		<script>
			$(function() {
				// Create the loader
				var loader = $("<div></div>", {
					id: "loader"
				}).css("display", "none");
				var bar = $("<span></span>").css("opacity", 0.2);
				var loadingInterval = null;


				// Create bars
				for (var x = 0; x < 3; x++) {
					bar.clone().addClass("bar-" + x).appendTo(loader);
				}


				// Add to page
				loader.insertAfter("#go");


				// Animate
				function runLoader() {
					var firstBar = loader.children(":first"),
						secondBar = loader.children().eq(1),
						thirdBar = loader.children(":last");

					firstBar.fadeTo("fast", 1, function() {
						firstBar.fadeTo("fast", 0.2, function() {
							secondBar.fadeTo("fast", 1, function() {
								secondBar.fadeTo("fast", 0.2, function() {
									thirdBar.fadeTo("fast", 1, function() {
										thirdBar.fadeTo("fast", 0.2);
									});
								});
							});
						});
					});
				};


				$("#go").click(function() {
					if ( !$("#loader").is(":visible") ) {
						loader.show();
						loadingInterval = setInterval(function() {
							runLoader();
						}, 1200);
					} else {
						loader.hide();
						clearInterval(loadingInterval);
					}
				});
			});
		</script>
	</head>





	<body>
		<button id="go">Initiate the action</button> 
	</body>
</html>