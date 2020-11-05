<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- JQuery Script -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        
        <!-- Fontawesome link -->
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
   
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

        <!-- CSS Script -->
        <link rel="stylesheet" href="css/styles.css">
       
        <title> SCP Index - SCP Foundation </title>
   
    </head>

    <body class=" bg-light text-dark" >
       
    
    <div class="wrapper">
        <div class="sidebar">
          <div class="bg_shadow"></div>
            <div class="sidebar__inner">
               <div class="close">
              <i class="fas fa-times"></i>
            </div>
            
            <div class="sidebar_info">
                <div class="sidebar_img">
                  <img src="images/SCP_Logo_Navbar.png" alt="profile_img">
                </div>
            </div>
            
            <ul class="siderbar_menu">
            
                <li class="navButton"><a type="button" id="speakBtn">
                  <div class="icon"><i class="fas fa-play"></i></div>
                  <div class="title  ">Text To Speech</div>
                  </a></li>  
                  
              <li class="navButton"><a type="button" id="pauseBtn">
                  <div class="icon"><i class="fas fa-pause"></i></div>
                  <div class="title whiteTxt ">Pause</div>
                  </a></li>  
              
              <li class="navButton"><a type="button" id="resumeBtn">
                  <div class="icon"><i class="fas fa-play-circle"></i></div>
                  <div class="title whiteTxt ">Resume</div>
                  </a></li>    
                  
              <li class="navButton"><a type="button" id="cancelBtn">
                  <div class="icon"><i class="fas fa-stop"></i></div>
                  <div class="title whiteTxt ">Stop</div>
                  </a></li>  
            </ul>
            
          </div>
        </div>
        
        <div class="main_container">
          <div class="top_navbar">
              <div class="hamburger">
                  <div class="hamburger__inner">
                      <i class="fas fa-bars"></i>  
                  </div>  
              </div>
            </div>

        <button class="navbar-toggler positionalchange" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       
        </nav>


    <?php $files = json_decode(file_get_contents('json/scp_files.json')) ?>


    <div id="text" style="font-family: 'Playfair Display', serif;">

    <?php foreach($files as $display): ?>
    <main class="container-fluid spacing">
       

    <div class='textSpace'>
    <h1> Name: <?php echo $display->name; ?> </h1>
    </div>
   
    <div class='textSpace'>
    <h2> Object Class: <?php echo $display->class; ?> </h2>
    </div>
   
    <div class='textSpace'>
    <p><img class='imageSpace' src='<?php echo $display->image; ?>'></p>
    </div>
   
    <div class='textSpace'>
       <h3> Containment </h3> <p> <?php echo $display->containment; ?> </p>
    </div>
   
    <div class='textSpace'>
    <h3> Description </h3> <p> <?php echo $display->description; ?> </p>
    </div>
   
    <?php
    if (is_null($display->h1))
    {
    echo"";
    }
    else
    {
    echo"
    <div class='textSpace'>
    <h4> $display->h1 </h4>
    <p>  $display->p1 </p>
    </div>";
    }
    ?>
   

    <?php
    if (is_null($display->h2))
    {
        echo"";
    }
    else
    {
    echo"
        <div class='textSpace'>
        <h4> $display->h2 </h4>
        <p>  $display->p2 </p>
        </div>";
    }
    ?>
   
    <?php
    if (is_null($display->h3))
    {
        echo"";
    }
    else
    {
    echo"
        <div class='textSpace'>
        <h4> $display->h3 </h4>
        <p>  $display->p3 </p>
        </div>";
    }
    ?>
   
    <?php
    if (is_null($display->h4))
    {
        echo"";
    }
    else
    {
    echo"
        <div class='textSpace'>
        <h4> $display->h4 </h4>
        <p>  $display->p4 </p>
        </div>";
    }
    ?>
   
    <?php
    if (is_null($display->h5))
    {
        echo"";
    }
    else
    {
    echo"
    <div class='textSpace'>
    <h4> $display->h5 </h4>
    <p>  $display->p5 </p>
    </div>";
    }
    ?>

    </main>    
    <div style='margin-bottom: 5%;'></div>
   
    <?php  endforeach; ?>

   </div>
 
    </div>
    
        <!-- Optional JavaScript -->
        <!-- Sidebar and Speech Javascript -->        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/speech.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   
    </body>

</html>