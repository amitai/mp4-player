<?php
$path = "/var/www/html/videolar/*";

$latest_ctime = 0;
$latest_filename = '';

$filecount = new FilesystemIterator("/var/www/html/videolar");

$files = glob($path);
foreach($files as $file)
{
        if (is_file($file) && filectime($file) > $latest_ctime)
        {
                $latest_ctime = filectime($file);
                $latest_filename = $file;
        }
}
echo "

<article>
<h3>Shocking stats!</h3>
<p>You're not going to fucking believe this:</p>

<ul>";


echo "<li>The latest video was added on " . date ("F d Y H:i", $latest_ctime) . "</li>";

echo "<li>We have " . iterator_count($filecount) . " videos in our system</li>";

echo "</ul>";

function folderSize ($dir)
{
    $size = 0;

    foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
        $size += is_file($each) ? filesize($each) : folderSize($each);
    }

    return $size;
}

?>
