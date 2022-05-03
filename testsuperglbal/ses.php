<?php

//Start your session.
session_start();

//A simple array that contains product IDs.

if(!isset($_SESSION['cart'])){
//Store the array in a session variable called "cart"
$_SESSION['cart'] = array();
}
//Dump out the session variable, just to
//see what it looks like.

array_push($_SESSION['cart'] , "nada");


//Make sure that the session variable actually exists!
if(isset($_SESSION['cart'])){
    //Loop through it like any other array.
    foreach($_SESSION['cart'] as $productId){
        //Print out the product ID.
        echo $productId, '<br>';
    }
}