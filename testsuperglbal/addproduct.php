<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the amaizing market</title>
</head>

<body>

    <form action="#" method="post">

        <pre>
<div>
    <label for="proimg"> product img url : </label>        <input type="text" name="proimg"> <?php if(empty($_POST['proimg'])){ echo " Please enter  product img url " ; } ?> 
</div>

<div>
    <label for="proname"> product name        : </label>   <input type="text" name="proname"> <?php if(empty($_POST['proname'])){ echo " Please enter product name " ; } ?>
</div>

<div>
    <label for="prodes"> product description  : </label>   <input type="textarea" name="prodes"> <?php if(empty($_POST['prodes'])){ echo " Please enter product description " ; } ?>
</div>

<div>
    <label for="proprice"> product price        : </label> <input type="text" name="proprice"> <?php if(empty($_POST['proprice'])){ echo " Please enter product price " ; } ?>
</div>

</pre>
        <button type="submit"> submit </button>

    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $op =true;
    if(empty($_POST['proimg'])){
        $op =false;
    }
    if(empty($_POST['prodes'])){
        $op =false;
    }
    if(empty($_POST['proname'])){
        $op =false;
    }
    if(empty($_POST['proprice'])){
        $op =false;
    }
    if($op){
        $product = array("proname"=>$_POST['proname'] ,"prodes"=>$_POST['prodes'] ,"proimg"=>$_POST['proimg'] ,"proprice"=>$_POST['proprice']  );
        if(!isset($_SESSION['products'])){
            $_SESSION['products'] = array();
        }
        array_push($_SESSION['products'] , $product);
       $_SESSION['lproduct'] = $product;
        for ($i=0; $i < count($_SESSION['products']) ; $i++) { 
            $p = $_SESSION['products'][$i];
            echo "
            <pre>";
            print_r($p);
            echo " 
            </pre>
            ";
        }
        echo '<script language="javascript" > location.href = "productviwe.php" </script>';
    }
    else
    {
        echo " please check to fill all fieled in the form ";
    }
}
?>
</body>

</html>
          