<?php
include('mainheader.php');
$id = addslashes($id);
$user = $_SESSION['user'];
$q="selct username='$user' from images where img_id=$id";
$res = mysql_query($q, $con);
if(mysql_num_rows($res)==0)
{
	echo "Illegal delete Operation!";
	return;
}
$q = "delete from images where img_id=$id";
if(mysql_query($q, $con))
{
	echo "OK";
	return;
}
echo "Delete failed";
return;
?>
