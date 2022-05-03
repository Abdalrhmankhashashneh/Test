<?php
session_start();
for ($i=0; $i < count($_SESSION['pro']); $i++) { 
   $p =$_SESSION['pro'][$i]; 
echo ' 
<div class="">
<img src= " '. $p[2] .'">
<h2>'.$p[0].'<h2>  
<h3>'.$p[1].'<h3>  
 
'; 
}



