<?php

$con = mysqli_connect('localhost','root','','bootcamp');

$query = 'SELECT * FROM user';
$result_select2 = mysqli_query($con, $query) or die(mysqli_error());
$rows2 = array();
while($row2 = mysqli_fetch_object($result_select2))
    $rows2[] = $row2;

$query2 = 'SELECT user.*, COUNT(skill.id_user) as x FROM user INNER JOIN skill ON skill.id_user = user.id GROUP BY user.id';
$result_select3 = mysqli_query($con, $query2) or die(mysqli_error());
$rows3 = array();
while($row3 = mysqli_fetch_object($result_select3))
    $rows3[] = $row3;

?>