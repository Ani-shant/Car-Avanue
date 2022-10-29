<?php
ob_start();
session_start();
$con = mysqli_connect("localhost","root","","onlinevehicles") or die("Server error :".mysqli_error($con));
?>