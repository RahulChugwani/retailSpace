<?php 
session_start();
$id = session_id();
 
echo "<script>console.log('Debug Objects: " . $id . "  hello " . $_SESSION['owner_id']."' );</script>" ;

if($_SESSION['sess_id'] != $id){
	//session_destroy();
	//header("location: index.php");
	echo("<script language='JavaScript'>
    window.location.href= 'index.php';
    window.alert('redirect to index page & session destroy');
    console.log('Debug Objects: " . $id . "  hello " . $_SESSION['owner_id']."' );
    </script>");
}
?> 