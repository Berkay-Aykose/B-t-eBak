<?php 

try{
    $db=new PDO("mysql:host=localhost;dbname=butcebak;charset=utf8",'root','123456789');
    //echo "bağlanti basarili";
}catch(PDOExpception $e)
{
    echo $e -> getMessage();
}
?>