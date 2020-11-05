<!DOCTYPE html>
<html lang="en">

    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="css/style.css" rel="StyleSheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!--StyleSheet-->

        <meta charset="utf-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1.0">

        <title>SCP-006 - SCP Foundation</title> <!--Browser Title-->

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
     
        <h1 class="card-header text-center mt-3"><b>Item #:</b> SCP-006 </h1>
        <h2 class="card-header text-center"><b>Object Class:</b> Safe</h2> <!--Page Titles-->

        <div class="card my-3">
          <div class="card-body">
            
            <div class="media">

              <div class="media-body"> <!--Content-->
                <h5 class='card-header text-center mb-3 bg-info text-light'>Special Containment Procedures:</h5>
                <p class="card-text">Whereas the nature of SCP-006 does not warrant any extensive containment, a certain level of secrecy is necessary regarding the object's existence and properties, for obvious reasons. The following procedures are required not for personnel safety, but to deny or hide knowledge of SCP-006's effects from the personnel who interact with it.</p>
                <p class="card-text">
                    <ol>
                        <li>: All personnel interacting with SCP-006 in any physical way are required to wear modified Class VI BNC suits. Before personnel are allowed to perform procedures, they must be briefed with Material SCP-006B or SCP-006C. SCP-006A Briefing is the correct one and is restricted to only those with O5 clearance. To ensure personnel are wearing suits properly, they are to be submerged into a pool of water. Any air bubbles spotted signify a leak in the suit.</li>
                        <li>: Procedures with SCP-006 are to be carried out under extreme surveillance. In case of contact with SCP-006, the commander in charge will announce Procedure 006-Xi-12, which the personnel have been briefed to believe to mean high toxicity is present and they must evacuate.</li>
                        <li>: Any procedure in which liquid is acquired from SCP-006 must be approved by three (3) O5 level personnel. The liquid is to be transferred in a Quad-Sealant Container and under armed guard.</li>
                        <li>: If at any time personnel come into contact with SCP-006 or liquid from SCP-006, they are to be confined and terminated after sufficient studies are done. Due to the nature of SCP-006, the most effective termination method is incineration. (For full report, see file SCP006-TerO5)</li>
                    </ol>
                

              </div>
            </div>
            <hr>
            <div class="media-body">
                <h5 class='card-header text-center mb-3 bg-info text-light'>Description:</h5>
                <p>SCP-006 is a very small spring located 60 km west of Astrakhan. Foundation Command was aware of its existence since the 19th century, but were unable to secure it until 1991 due to political reasons. On the spot of the spring, a chemical factory has been constructed as a disguise, with the majority of laborers under Foundation and/or Russian control. The liquid emitted from the spring has been chemically identified as simple mineral water in 1902, but has the unusual property of "health".</p>
            <p>Ingesting the liquid produces the following properties in human beings: the ability to regenerate DNA damaged by sufficient duplication, heightened excitement of cellular duplication, vastly improved abilities in the repair of damaged tissue, and a frightening increase in the effectiveness of the human immune system. Upon testing the liquid on animal subjects, hostile bacteria and viral agents were destroyed immediately. Many reptiles and birds were unaffected, while higher primates experienced the same benefits as humans.</p>
              </div>
            </div>
            <hr>
  
          </div>
  

            <script src="scripts/script.js"></script>  <!--Scripting-->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            

    </body>

</html>