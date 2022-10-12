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
			<nav>
			<ul>
				<li><a href="random.php" target="_new">give me one random video</a></li>
				<li><a href="all.php" target="_new">give me all the videos</a></li>
			</ul>
		</nav>
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
				<li><a href="all.php" target="_new">give me all the videos</a></li>
			</ul>
		</nav>

<?php
$path = "/var/www/html/videolar/*";


$fi = new FilesystemIterator($path);

$latest_ctime = 0;
$latest_filename = '';

$files = glob($path);
foreach($files as $file)
{
        if (is_file($file) && filectime($file) > $latest_ctime)
        {
                $latest_ctime = filectime($file);
                $latest_filename = $file;
        }
}

echo("<p>Video count: %d </p>", iterator_count($fi));

echo "<p>Latest video added on " . date ("F d Y H:i:s.", $latest_ctime) . "</p>";
?>

		</section>

	</main>

	<footer>
		<p>&copy; <a href="https://lolfi.com">Larson Online Financial Services, Inc.</a></p>
	</footer>
</body>
</html>


