<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="css/style.css" rel="StyleSheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!--StyleSheets-->

    <title>SCP Application</title>
  </head>
  
  <body class="container bg-secondary">
      
      <?php include 'connection.php'; ?>
     
     <!-- Menu -->  
        
                <header>
                    
                <nav class="row  navbar navbar-expand-lg navbar-dark bg-dark">
                    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>  <!--Button for smaller browser-->
                </button>
                
                <div class="col collapse navbar-collapse" id="navbarSupportedContent">
        
                  <ul class=" nav navbar-nav mr-auto">
                      
                      <li class="nav-item active">
                          <a href="index.php" class="nav-link">Home</a>
                    </li>
                    
                    <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      SCP-002 - SCP-006
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="scp-002.php">SCP-002</a>
                      <a class="dropdown-item" href="scp-003.php">SCP-003</a>
                      <a class="dropdown-item" href="scp-004.php">SCP-004</a>
                      <a class="dropdown-item" href="scp-005.php">SCP-005</a>
                      <a class="dropdown-item" href="scp-006.php">SCP-006</a>
                    </div>
                    </li>
                    
                    <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      SCP Record Entries
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <?php foreach($result as $menu): ?>
                      
                      <a href="index.php?page='<?php echo $menu['pg']; ?>'" class="dropdown-item"><?php echo $menu['pg']; ?></a>
                      
                  
                  <?php endforeach; ?>
                    </div>
                    </li>
                  
                  
                  
                   <li class="nav-item active">
                       <a href="form.php" class="nav-link">Create new record</a>
                       </li>
        
                  </ul>
        
                </div>
                
                </nav>
        </header>
     

    
    <!-- database content  -->
    
     <div class="row">
    
    <div class="col">
        
       
            <?php 
            
                if(isset($_GET['page']))
                {
                    $pg = trim($_GET['page'], "'");
                    
                    $result = $connection->query("select * from pages where pg='$pg'") or die($connection->error());
                    
                    $single = $result->fetch_assoc();
                    
                    
                    $h1 = $single['h1'];
                    $h2 = $single['h2'];
                    
                    $p1 = $single['p1'];
                    $p2 = $single['p2'];
            
                    $img1 = $single['img1']; 
                    
                    $id = $single['id'];
                    $update = "update.php?update=" . $id; 
                    $delete="connection.php?delete=".$id;
            
            echo" 
            
                    <h1 class='card-header text-center mt-3'>{$h1}</h1>
                    <h2 class='card-header text-center'>{$h2}</h2>
                                
                                
                    <div class='row mt-3'>
                      <div class='col-sm-12'>
                        <div class='card'> 
                          <div class='card-body'> 
                            <h5 class='card-header text-center mb-3 bg-info text-light'>Special Containment Procedures:</h5>
                            <p class='card-text'>{$p1}</p>
                             </div>
                             </div>
                             </div>
                             </div>
                             
                     <div class='row mt-3'>
                      <div class='col-sm-12'>
                        <div class='card'> 
                          <div class='card-body'>
                            <h5 class='card-header text-center mb-3 bg-info text-light'>Description:</h5>
                            <p class='card-text'>{$p2} </br> <img src='{$img1}' class='mr-3 pic-small'></p>
                             </div>
                             </div>
                             </div>
                             </div>
                    
                    
                    
                    <p> <a href='{$update}' class='btn btn-light text-info  mt-3 p-2 w-25'>Update </a>
                     <a href='{$delete}' class='btn btn-light  mt-3 p-2 w-25 '>Delete </a> </p>
                     
            "; 
            
        }
        else
        {
            echo "
            
            <h1 class='text-center m-3'>Welcome to the SCP Case Website!</h1>
            <p class='text-center'> Use the links above to access the pages stored in the database.</br></br> <img src='images\SCP.jpg' class='pic-small'> </p>
            
            
            ";
            
        }
        
        
        ?>
        
    </div>
    
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="scripts/script.js"></script> <!--Link to scripting-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
  </body>
</html>