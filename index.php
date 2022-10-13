<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="mtv.css">
	<title>MTV</title>
</head>
<body>
	<header>
		<h1>Welcome to MTV</h1>
	</header>

	<main>
			<section>
			<h2>How to use</h2>
			<p>Tap "random video" to get redirected to a video file at random. Tap "all videos"
			to watch all videos in a random order.</p>
			<nav>
			<ul>
				<li><a href="random.php" target="_new">give me one random video</a></li>
				<li><a href="all.php">give me all the videos</a></li>
			</ul>
		</nav>

		<?php include 'stats.php';?>

		</section>

	</main>
	<?php include 'footer.php';?>
</body>
</html>


