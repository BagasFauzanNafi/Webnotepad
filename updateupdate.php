<?php 
include"config.php";

$id=$_POST['id'];
$title=$_POST['title_note'];
$note=$_POST['note_note'];
$query="UPDATE note_pad SET title_note='$title',note_note='$note'WHERE note_pad.id_note='$id'";
$sql=mysqli_query($conn,$query);
if($sql){
   header("location:index.php");
}else{
    echo $query;
}
?>