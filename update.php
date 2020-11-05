<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Update record</title>
  </head>
  <body class="container bg-secondary text-black">
    <h1 class="text-center text-white"> Update record</h1>
    
    
    
    <?php
    
        include 'connection.php';
        
        $id = $_GET['update'];
        
        $record = $connection->query("select * from pages where id='$id'") or die($connection->error());
        
        $row = $record->fetch_assoc();
    
    ?>
    
    
    <form class="form-group  bg-light p-2" action="connection.php" method="post">
    
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label class="m-3">Update page name:</label>
        <br>
        <input type="text" name="pg" placeholder="Write page name here" class="form-control" value="<?php echo $row['pg']; ?>">
        <br>
        
        <label class="m-3">Update Heading One:</label>
        <br>
        <input type="text" name="h1" placeholder="Main heading here" class="form-control" value="<?php echo $row['h1']; ?>">
        <br>
        
        <label class="m-3">Update Heading Two:</label>
        <br>
        <input type="text" name="h2" placeholder="Heading Two here" class="form-control" value="<?php echo $row['h2']; ?>">
        <br>
        
        
        <label class="m-3">Paragraph One:</label>
        <br>
        <input type="text" name="p1" placeholder="Write p1 here" class="form-control" value="<?php echo $row['p1']; ?>">
        <br>
        
        <label class="m-3">Paragraph Two:</label>
        <br>
        <input type="text" name="p2" placeholder="Write p2 here" class="form-control" value="<?php echo $row['p2']; ?>">
        <br>
        
        
        <label class="m-3">Update image address:</label>
        <br>
        <input type="text" name="img1" placeholder="e.g images/pic.jpg" class="form-control" value="<?php echo $row['img1']; ?>">
        <br>
        
        <input type="submit" name="update"  class="btn btn-info text-white w-25" value="Update">
        <p><a href="index.php" class="btn btn-info  w-25 mt-3">Home</a></p>
        
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>