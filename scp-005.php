<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
        <link href="css/style.css" rel="StyleSheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!--StyleSheet-->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>SCP-005 - SCP Foundation</title> <!--Browser Title-->

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
     

        <h1 class="card-header text-center mt-3"><b>Item #:</b> SCP-005 </h1> <!--Page Titles-->
        <h2 class="card-header text-center"><b>Object Class:</b> Safe</h2>


          <div class="row mt-3">
            <div class="col-sm-6"> <!--Content-->
              <div class="card">
                <div class="card-body ">
                  <h5 class='card-header text-center mb-3 bg-info text-light'>Special Containment Procedures:</h5>
                  <p class="card-text">SCP-005 poses no immediate risk in any direct sense. Even so, its unique functions require special measures be taken to restrict access and manipulation of the object. Approval of at least one (1) Level 4 personnel is required for the removal of the object from its containment area.</p>
                </div>
              </div>
            </div>
  
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class='card-header text-center mb-3 bg-info text-light'>Description:</h5>
                  <p class="card-text">In appearance, SCP-005 resembles an ornate key, displaying the characteristics of a typical mass produced key used in the 1920s. The key was discovered when a civilian used it to infiltrate a high security facility. SCP-005 seems to have the unique ability to open any and all forms of lock (See Appendix A), be they mechanical or digital, with relative ease. The origin of this ability has yet to be determined.</p>
                  <img src="images/SCP-005.jpg" class="mr-3 pic-small" alt="key">
                </div>
              </div>
            </div>
          </div>


          <div class="card mt-3"> <!--More Content-->

            <h5 class='card-header text-center m-3 bg-info text-light'> Additional Notes: </h5>
            <div class="card-body">
              <div class="media">
                <div class="media-body">
                  <p>SCP-005 may be used as a replacement for lost security passes, but only under the supervision of at least one (1) Level 4 personnel. SCP-005 may not be used for vending machine repairs, opening lockers, or for any personnel's spare home key. Removal of the object from the compound will result in immediate termination.</p>
                </div>
              </div>
              <hr>
            </div>
    
          </div>

          
          <div class="accordion my-3 " id="Appendix"> <!--Collapsible for the appendix-->
            <div class="card">
              <div class="card-header text-light" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   
                    Appendix A:
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
  
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#Appendix">
                <div class="card-body">
                  <p>While SCP-005 has been shown to be effective in removing almost any form of locking device, further experiments have shown that efforts to disguise the purpose or identity of a lock have proven at least somewhat successful in defeating SCP-005's ability. In approximately 50% of cases where a volunteer was not able to identify a locking device as such, SCP-005 was not successful in deactivating the device. Due to these results, SCP-005 has been tentatively classified as 'sentient' and further tests are being run to determine its cognitive abilities. However, there are no results that show any traits that prevent it from being able to identify any particular locking device, only that the aforementioned device has been heavily concealed and disguised.</p>

                </div>
              </div>
            </div>
          </div>
        
        
            <script src="scripts/script.js"></script> <!--Scripting-->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            
      
    </body>

</html>