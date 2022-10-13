<?php
$path = "/var/www/html/videolar/*";

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
echo "

<article>
<h2>Shocking stats!</h2>
<p>You're not going to fucking believe this:</p>

<table>";


echo "
<tr>
<td> Latest video added on </td> <td>" . date ("F d Y H:i:s.", $latest_ctime) . "</td> </tr>";

echo "</table>";
?>