<!DOCTYPE html>
<html lang="en">

    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="css/style.css" rel="StyleSheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!--StyleSheet-->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>SCP-004 - SCP Foundation</title> <!--Browser Title-->

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
     

        <h1 class="card-header text-center mt-3"><b>Item #:</b> SCP-004</h1> <!--Page Titles-->
        <h2 class="card-header text-center"><b>Object Class:</b> Euclid</h2>

          <div class="row mt-3">

            <div class="col-sm-6"> <!--Content-->
              <div class="card">
                <div class="card-body ">
                  <h5 class='card-header text-center mb-3 bg-info text-light'>Special Containment Procedures:</h5>
                  <p class="card-text">When handling items SCP-004-2 through SCP-004-13, proper procedure is vital. The items are not permitted to be moved off-site unless accompanied by two Level 4 security personnel. Under no circumstances should any other component of SCP-004 be taken through SCP-004-1. The effects of doing so are as yet unknown, and the current cost of experimentation makes further research impractical. Should any of the objects contained within SCP-004-1 breach containment, or the facility be breached, the keys must be brought inside and the door closed prior to activation of Site 62’s on-site warhead. Unauthorized removal of keys from the testing area is grounds for immediate termination.</p>
                  <p class="card-text">Level 1 clearance is required for basic access to SCP-004-1; Level 4 clearance is required for use of SCP-004-2 to -13.</p>
                  <img src="images/SCP-005.jpg" class="mr-3 pic-small" alt="Key">
                </div>
              </div>
            </div>
  
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class='card-header text-center mb-3 bg-info text-light'>Description:</h5>
                  <p class="card-text">SCP-004 consists of an old wooden barn door (SCP-004-1) and a set of twelve rusted steel keys (SCP-004-2 through SCP-004-13). The door itself is the entrance to an abandoned factory in [DATA EXPUNGED].</p>
                  <img src="images/SCP004_door.jpg" class="mr-3 pic-small" alt="Door">
                </div>
              </div>
            </div>

          </div>
          <div class="row mt-3">

            <div class="col-sm-6">
              <div class="card"> <!--More Content-->
                <div class="card-body ">
                  <h5 class="card-title">Space-Time Anomalies</h5>
                  <p class="card-text">SCP-004 seems to propagate spatiotemporal anomalies. Personnel leaving the facility report losing time. Those who have been in the site for weeks insist that they had only been in the facility for several days, and records of work completed and supplies consumed support their claims. Other temporal anomalies involve SCP-004-2 through -13, especially the reappearance of SCP-004-CAS01 and SCP-004-CAS02 exactly ██ years after using SCP-004-██. ████████████████████ has been assigned to investigate all aspects of these time anomalies. Spatial anomalies include the impossibly large dimensions of the area opened by SCP-004-7. Similarly, the 2003 blackout incident suggests that there exists an alternate plane of existence within the same space that Site-62 occupies.</p>
              
                </div>
              </div>
            </div>
  
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Additional Notes</h5>
                  
                  <p class="card-text">Testing on SCP-004 reveals that ten of the keys open SCP-004-1 on a dimension where the laws of physics and topology are significantly different than those of our home dimension. Test subjects meeting these hostile conditions are torn apart, their body parts deposited in various locations, only three of which have been verified to be on Earth. Material deposited at two of these points appears immediately; material deposited at the third appears exactly ██ years into the future. The other seven locations are currently unknown.</p>
                  <p class="card-text"> Current testing focuses on two avenues of research. The first is finding ways to survive SCP-004’s hostile topologies. The second [DATA EXPUNGED] suggest that SCP-004-2 through -13 may open doors other than SCP-004-1.</p>
                </div>
              </div>
            </div>
            </div>

          <h3 class="card-header text-center mt-3 rounded-sm">Chronological Timeline</h3> <!--TimeLine-->
          <div class="accordion" id="timeline">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    07/02/1949:
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#timeline">
                <div class="card-body">
                  A group of three juveniles trespassing on federal property near ██████████ find the door. According to their testimony, they found a set of rusted keys in an iron lockbox and determined what door the keys unlock. The juveniles are taken into custody after they contact Sheriff █████████████████ when one of their friends (SCP-004-CAS01) goes missing.
              </div>
            </div>
            </div>
          </div>
  
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link text-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    07/03/1949:
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#timeline">
                <div class="card-body">
                  Local authorities find the severed right hand of SCP-004-CAS01 eight kilometers from SCP-004-1. Other parts of SCP-004-CAS01's body are found scattered as far as 32 km from the factory. Under interrogation, the apprehended juveniles tell authorities that upon opening the door with one of the keys, SCP-004-CAS01 was torn into several pieces, each of which disappeared. At this point, the SCP Foundation takes over the investigation.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                    07/04/1949:
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#timeline">
                <div class="card-body">
                  SCP Agent █████ obtains the keys from the local authorities to begin testing. Tests show that SCP-004-2 through SCP-004-13 all fit into a single lock on the large barred door. 12 Class D personnel are assigned to test the effects of the door. Of the twelve test subjects each trying a different key to enter the room, only two survive. Opening the door with any key except SCP-004-7 or SCP-004-12 caused the test subjects to be torn apart in multiple directions; however, no dismembered parts were found until later. At the time of writing, only two parts of each subject have been recovered (with the exception of the subject using SCP-004-█, whose pieces were scattered in close proximity). The others have, for all intents and purposes, vanished from existence.
                  Of the two surviving subjects, only one (having used SCP-004-7) returned unharmed. The other came back in a near-catatonic state, able only to remove himself from the room and then collapse on the floor, and had to be restrained to prevent him from gouging out his eyes (see Appendix A: Mental Health Effects of SCP-004). The subject using SCP-004-7 said that he had entered a large room, impossibly big for the size of the attached building. After his exit, SCP-004-1 was propped open and an armed squad of Level 3 personnel entered. The size of the room is impossible to measure and the door frame and the individuals in the room are the only part of the room that can be felt or illuminated.
              </div>
            </div>
            </div>
  
            <div class="card">
              <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    07/16/1949:
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#timeline">
                <div class="card-body">
                  The juvenile suspects and Sheriff █████████████████ are terminated
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    08/02/1949: 
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#timeline">
                <div class="card-body">
                  █████████████████ is declared a hazardous area "due to unexploded ordnance" and fences erected in order to prevent civilian ingress. Tests to determine safety of exposure to environment behind SCP-004-1 begin.
              </div>
            </div>
            </div>
  
            <div class="card">
              <div class="card-header" id="headingSix">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    12/01/1950:
                  </button>
                </h2>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#timeline">
                <div class="card-body">
                  Space-time anomalies resulting from exposure to SCP-004 are confirmed. Testing is suspended until further notice.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingSeven">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    07/02/19██:
                  </button>
                </h2>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#timeline">
                <div class="card-body">
                  The unaccounted-for remains of SCP-004-CAS01 appear unexpectedly outside SCP-004-1. Despite being killed decades before, the remains of SCP-004-CAS01 are not decomposed in any manner and are still warm to the touch. Blood remains uncoagulated. The remains are remanded for testing.
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingEight">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    07/04/19██:
                  </button>
                </h2>
              </div>
              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#timeline">
                <div class="card-body">
                  The unaccounted-for remains of one of the twelve (12) original test subjects appear in similar manner to those of SCP-004-CAS01. The remains have been designated SCP-004-CAS02. Records suggest that both SCP-004-CAS01 and CAS02 used SCP-004-██.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingNine">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                    03/21/1999:
                  </button>
                </h2>
              </div>
              <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#timeline">
                <div class="card-body">
                  With the massive proliferation of nuclear weapons and World War III only ██ years away, construction has begun on a site inside SCP-004-1. The site is to stock supplies for ███████ person-days.
              </div>
            </div>
  
            <div class="card">
              <div class="card-header" id="headingTen">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    04/21/1999: 
                  </button>
                </h2>
              </div>
              <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#timeline">
                <div class="card-body">
                  █████████████████ has ordered the site inside SCP-004-1 to be expanded to include emergency storage for all mobile SCP-███ specimens and a ██-petabyte database for the storage of all SCP data. The facility is now referred to as Site-62.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingEleven">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                    09/25/2000:
                  </button>
                </h2>
              </div>
              <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#timeline">
                <div class="card-body">
                  Site-62 is operational. Labs and containment units are complete and can contain the most dangerous specimens. Backup of the SCP database has begun.
              </div>
            </div>
  
            <div class="card">
              <div class="card-header" id="headingTwelve">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                    01/25/2001:
                  </button>
                </h2>
              </div>
              <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#timeline">
                <div class="card-body">
                  Due to time anomalies (see “Space-Time Anomalies” below), all personnel working at Site-62 are now required to reside on-site permanently. Families of personnel are to be informed that loved ones perished in an industrial accident. Cloned bodies have been prepared for funeral.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThirteen">
                <h2 class="mb-0">
                  <button class="btn btn-link  text-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                    08/14/2003:
                  </button>
                </h2>
              </div>
              <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#timeline">
                <div class="card-body">
                  Massive power outage across Northeast United States and through Canada. Due to the initial failure of multiple SCP generators, Site-62 was without power for fifty-three (53) minutes. During those fifty-three (53) minutes, those on site were completely without any source of light. They reported "sensing" creatures and people, although no abnormal entities could be seen or felt. Selected facility personnel were allowed to read ████████████ (Appendix A) and said the creatures "sensed" were of humanoid size but otherwise similar to the massive green creature described.  </div>
              </div>
            </div>
          </div>
          </div>
          </div>
        
          <h3 class="card-header text-center mt-3">Appendices</h3> <!--Title-->
          <!--Section for the appendices-->
            <div class="accordion mb-3" id="appendices">
              <div class="card">
                <div class="card-header" id="AppendicesOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link  text-light btn-block text-left" type="button" data-toggle="collapse" data-target="#AcollapseOne" aria-expanded="true" aria-controls="AcollapseOne">
                      Appendix A: Mental Health Effects of SCP-004-12
    
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg>
    
                    </button>
                  </h2>
                </div>
                <div id="AcollapseOne" class="collapse" aria-labelledby="AppendicesOne" data-parent="#appendices">
                  <div class="card-body">
                    <p>All Class D personnel using SCP-004-12 return in a catatonic state, unable to speak. Some may have enough energy left to try to claw out their eyes. Of the 16 subjects, only 4 have survived. Only one has regained speech, following long-term psychotherapy. He was able to tell the psychiatrist that he saw a massive green creature, so large that much of its body extended beyond his field of view. He reported innate fear and sudden recognition, “as if it were something buried deep in [his] primal fears,” and forced implantation of “incomprehensible” memories. Subject displays acute anterograde and retrograde amnesia.</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="AppendicesTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link  text-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#ACollapseTwo" aria-expanded="false" aria-controls="ACollapseTwo">
                      Appendix B: Additional Information
    
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    </button>
                  </h2>
                </div>
                <div id="ACollapseTwo" class="collapse" aria-labelledby="AppendicesTwo" data-parent="#appendices">
                  <div class="card-body">
                    <p><b>Item #:</b> SCP-004-14 SCP-004-14</p>
                    <p><b>Date of Discovery:</b> 09/02/1950</p>
                    <p><b>Origin of Object:</b> Object was discovered elsewhere in factory area, in the previously undiscovered manager's office.</p>
                    <p><b>Description:</b> Object appears as a large, unvarnished wooden box. The box may be unlocked by the "safe" key, SCP-004-7, as well as five of the "unsafe" keys (see Document SCP-004-1).</p>
                    <p>Upon unlocking SCP-004-14 with SCP-004-7, the box opens automatically on hinges. The volume of the space inside is precisely five times greater than the outer dimensions imply. Items placed within while the lid remains open do not affect the weight or any other properties of the box. When the lid is closed and locked, however, all items inside vanish irretrievably. Personnel locked inside the box are also irretrievable, although losing personnel in this fashion appears to affect significantly the dreams experienced by [DATA EXPUNGED].</p>
                  </div>
                </div>
              </div>
    
            </div>
           

            <script src="scripts/script.js"></script> 
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            

    </body>

</html>