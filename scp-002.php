<!DOCTYPE html>
<html lang="en">

    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="css/style.css" rel="StyleSheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!--StyleSheets-->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>SCP-002 - SCP Foundation</title> <!--Page Name-->

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
     
     


        <h1 class="card-header text-center mt-3"> <b>Item #:</b> SCP-002  </h1> <!--Page Titles-->
        <h2 class="card-header text-center"><b>Object Class:</b> Euclid</h2>
       

        <div class="row mt-3">
          <div class="col-sm-6">
            <div class="card"> <!--Information sections-->
              <div class="card-body ">
                <h5 class='card-header text-center mb-3 bg-info text-light'>Special Containment Procedures:</h5>

                <p class="card-text">SCP-002 is to remain connected to a suitable power supply at all times, to keep it in what appears to be a recharging mode. In case of electrical outage, the emergency barrier between the object and the facility is to be closed and the immediate area evacuated. Once facility power is re-established, alternating bursts of X-ray and ultraviolet light must strobe the area until SCP-002 is re-affixed to the power supply and returned to recharging mode. Containment area is to be kept at negative air pressure at all times.</p>
                <p class="card-text">Teams including a minimum of two (2) members are required within 20 meters of SCP-002 or its containment area. Personnel should maintain physical contact with one another at all times to confirm there is another person present, as perception may be dulled, skewed, or influenced by proximity to the object.</p>
                <p class="card-text">No personnel below Level 3 are permitted within SCP-002. This requirement may be waived via written authorization from two (2) off-site Level 4 administrators. Command staff issued such a waiver must be escorted by at least five (5) Level 3 Security personnel for the duration of their contact and must temporarily surrender their rank and security clearance. Following contact, command staff will be escorted at least 5 km from SCP-002 to undergo a seventy-two (72)-hour quarantine and psychological evaluation. If deemed fit for return to duty by psych staff, rank and security clearance may be restored when quarantine expires.</p>
                
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="card">
              <div class="card-body"> 
                <h5 class='card-header text-center mb-3 bg-info text-light'>Description:</h5>
                
                <p class="card-text">SCP-002 resembles a tumorous, fleshy growth with a volume of roughly 60 m³ (or 2000 ft³). An iron valve hatch on one side leads to its interior, which appears to be a standard low-rent apartment of modest size. One wall of the room possesses a single window, though no such opening is visible from the exterior. The room contains furniture which, upon close examination, appears to be sculpted bone, woven hair, and various other biological substances produced by the human body. All matter tested thus far show independent or fragmented DNA sequences for each object in the room.</p>
                <p class="card-text">Refer to the Mulhausen Report [cross-ref:document00.023.603] for details related to object's discovery.</p>
                <img src="images/800px-SCP002.jpg" class="mr-3 pic-small" alt="Blurry Picture">
                
              </div>
            </div>
          </div>
        </div>

        <div class="card my-3">
          <h1 class='card-header text-center mb-3 bg-info text-light'> Reference: </h1> <!--New section for refferencing-->
  
          <div class="card-body">
  
            <div class="media">
  
              <div class="media-body">
                <p>To date, subject has been responsible for the disappearances of seven personnel. It has also in its time at the facility further furnished itself with two lamps, a throw rug, a television, a radio, a beanbag chair, three books in an unknown language, four children's toys, and a small potted plant. Tests with a variety of lab animals including higher primates have failed to provoke a response in SCP-002. Cadavers as well fail to produce any effect. Whatever process the subject uses to convert organic matter into furnishings is apparently only facilitated by the introduction of living humans.</p>
                <p><code>Mulhausen Report docid:00.023.603</code></p>
                <p><code>The following is a brief report detailing the discovery of SCP-002</code></p>
                <p><code>Subject was discovered in a small crater in northern Portugal where it struck the Earth from orbit. Encased in a shell of thick rock, the fleshy exterior of the object was exposed by the impact. A native farmer happened upon the site and reported his findings to the village elder. Subject gained SCP attention when a Level 4 agent posted in the area detected a small radioactive anomaly generated by the object.</code></p>
                <p><code>A collection squad of SCP security personnel led by General Mulhausen was immediately dispatched to the area where they quickly secured the subject in a large container and performed initial testing with subjects recruited from the nearby village. Three men individually sent into the structure subsequently disappeared. Upon discovering this deadly property of the subject, General Mulhausen issued a Level 4a Termination Order of any witnesses (roughly 1/3 of the village) to ensure no outside knowledge of the object and initiated its transport to SCP facility <b> [DATA EXPUNGED]</b>.</code></p>
                <p><code>During preparation for transport, four SCP security personnel were inexplicably drawn inside the object where they too immediately disappeared. Following inspection, it appeared as if the object had "grown" several new furnishings and was beginning to look like the interior of an apartment room. General Mulhausen immediately ordered the requisition of several Class III HAZMAT suits for the remaining security team members, who proceeded to lift the container onto a waiting freight ship for transport to the SCP containment facility.</code></p>
                <p><code> <b>[DATA EXPUNGED</b>]</code></p>
                <p><code><b>[DATA EXPUNGED]</b></code></p>
                <p><code>Following the termination of General Mulhausen, SCP-002 was re-secured by SCP staff and brought into special containment in <b>[CLASSIFIED]</b>, where it currently resides. Staff with clearance below Level 3 have been denied access to the SCP-002 container without prior approval of at least two Level 4 staff after the Mulhausen incident.</code></p>
              </div>
            </div>
            <hr>
  
          </div>
  
        </div>
      
        <script src="scripts/script.js"></script> <!--Link to scripting-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                
            
    </body>

</html>