
<?php 


$files = glob( 'videolar/*.mp4' );
$file = array_rand($files);
$playme =  basename($files[$file]);


header("Location: videolar/$playme");;


?> 
<html>
<body>
cool </body>
</html>
