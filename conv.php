<html>
<head>Video Converter</head>
<body>
<form action=" " method="post" enctype="multipart/form-data">
<input type="file" name="video"><br><br>
Video Name <input type="text" name="vname">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
	$currentPath=$_FILES['video']['tmp_name'];
	$vname=$_POST['vname'];
	exec("ffmpeg.exe"); 
//if(exec("ffmpeg -i ".$currentPath." -an ./output/name.mp4"))
 exec("ffmpeg -i ".$currentPath." -c:a copy -s hd720 ./output/".$vname.".mp4");
	echo "Ok";
	
}
?>