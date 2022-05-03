<?php
session_start();


    echo "
<h1> hi this the last product you have add </h1> 
    <img src = \" ". 
    $_SESSION['lproduct']['proimg']
    ."\" <br>
    <h3>".

    $_SESSION['lproduct']['proname'] 
    .
    "
     </h3>  
    <h3>".

    $_SESSION['lproduct']['prodes'] 
    .
    "
     </h3>  
    <h3>".

    $_SESSION['lproduct']['proprice'] 
    .
    "
     </h3>  
     
    
    ";


