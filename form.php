<!doctype html>

<html lang="en">
    
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="css/style.css" rel="StyleSheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!--StyleSheets-->


        <title>SCP Form </title>
    
  </head>
  
  <body class="container bg-secondary text-black ">
      
      
       
     <h1 class='text-center text-white'> SCP Record Entry</h1> 
     <h2 class='text-center text-white'>Use the form below to enter in your SCP File Entry</h2>
      <hr width="80%">
    <form class="form-group bg-light p-2"  action="connection.php" method="post">
        
        <label class="m-3">Page Name </label>
         <br>
        <input type="text" class="form-control " name="pg" placeholder="Page Name" required> 
        <br>
        <br>
        
        <hr width="80%">
        
        <label  class="m-3"> Heading One </label>
         <br>
        <input type="text" class="form-control" name="h1" placeholder="Heading One"> 
        <br>
        <br>
        
        <label  class="m-3"> Heading Two </label>
         <br>
        <input type="text" class="form-control" name="h2" placeholder="Heading Two"> 
        <br>
        <br>
        
         <hr width="80%">
        
        <label  class="m-3"> Paragraph One </label>
         <br>
        <textarea class="form-control" name="p1" rows="5" placeholder="Paragraph One"></textarea>
        <br>
        <br>
        
        <label  class="m-3"> Paragraph Two </label>
         <br>
        <textarea class="form-control" name="p2" rows="5" placeholder="Paragraph Two" ></textarea>
        <br>
        <br>
        
         <hr width="80%">
        
        <label  class="m-3"> Image </label>
         <br>
        <input type="text" class="form-control" name="img1"  placeholder="Image" >
        <br>
        <br>
     
        
         <hr width="80%">
         
         <input type="submit" name="submit"  class="btn btn-info text-white w-25">
        <p><a href="index.php" class="btn btn-info text-white w-25 mt-3">Home</a></p>
        
    </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
  </body>
  
</html>