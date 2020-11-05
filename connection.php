<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="css/style.css" rel="StyleSheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
        </head>
<?php

//db cred
$user = "a3003365_scpUser";
$pw = "Toiohomai1234";
$db = "a3003365_scp";

//db connection
$connection = new mysqli('localhost', $user, $pw, $db)or die(mysqli_error($connection));

//create variable that stores records 
$result = $connection->query("select * from pages") or die($connection->error()); 

//check form has data to submit

if(isset($_POST['submit']))
{
    
    $pg = $_POST['pg'];
    
   $h1 = htmlspecialchars($_POST['h1']);
   $h1 = $connection->real_escape_string($h1); 
   
   $h2 = htmlspecialchars($_POST['h2']);
   $h2 = $connection->real_escape_string($h2);
    
   $p1 = htmlspecialchars($_POST['p1']);
   $p1 = $connection->real_escape_string($p1);
   
   $p2 = htmlspecialchars($_POST['p2']);
   $p2 = $connection->real_escape_string($p2);
   
    
    $img1 = $_POST['img1'];  
    
    $sql = "insert into pages(pg,h1,h2,p1,p2,img1)
    values('$pg','$h1','$h2','$p1','$p2','$img1')";
    
    if($connection->query($sql) === TRUE)
    {
        echo"
        <h1> Record added succesfully</h1>
        <p><a href='index.php'>Return to home page</p>
        ";
        
    }else
    {
        echo"
        <h1> Record not added succesfully</h1>
        <p><a href='index.php'>Return to home page</p>
        ";
    }
    
    
}

if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $pg = $_POST['pg'];
        
        $h1 = htmlspecialchars($_POST['h1']);
        $h1 = $connection->real_escape_string($h1); 
        
        $h2 = htmlspecialchars($_POST['h2']);
        $h2 = $connection->real_escape_string($h2);
    
        $p1 = htmlspecialchars($_POST['p1']);
        $p1 = $connection->real_escape_string($p1);
        
        $p2 = htmlspecialchars($_POST['p2']);
        $p2 = $connection->real_escape_string($p2);
    
        $img1 = $_POST['img1'];
        
        $update = "update pages set pg='$pg', h1='$h1', h2='$h2', p1='$p1', p2='$p2', img1='$img1'
        where id='$id'";
        
        if($connection->query($update) === TRUE)
        {
            echo "<h1>Record Updated</h1>";
            echo "<p><a href='index.php' >Home</a></p>";
        }
        else
        {
            echo "<h1>Error: Record not updated</h1>";
            echo "<p><a href='index.php' >Home</a></p>";
        }
    }
    
if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        
        $del = "delete from pages where id=$id";
        
        if($connection->query($del) ===TRUE)
        {
        echo"<p> Record was deleted. 
        <a href='index.php'> Return to home page</a> </p>";
        }
        else
        {
         echo"
         <p>Error in deleting record </p>
         <p> <a href='index.php'> Return to home page</a> </p>
         ";
        }
    }

?>