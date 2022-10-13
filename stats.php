<?php
$path = "/var/www/html/videolar/*";

$latest_ctime = 0;
$latest_filename = '';

$filecount = new FilesystemIterator($path);

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

<table>";


echo "<tr><td> Latest video added on </td> <td>" . date ("F d Y H:i:s.", $latest_ctime) . "</td> </tr>";

/* echo "<tr><td> Number of videos is </td> <td>" . $filecount . "</td> </tr>"; */

echo $path;
echo "<hr";

echo $files;


echo "</table>";
?>