<?php include 'cms/db.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Digital Library</title>
    <!--this is arvo font-->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> 
        <!-- Custom styles for this template -->
        <link href="custom.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fas fa-book-open"> Digital library </i></a>
        </div> 
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">  
             <li ><a href="#wwa">Who We Are </a></li>
            <li><a href="#get_involved">Get Involved</a></li>
           
            <li><a href="signin.php" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">Sign In</a></li>
         
            <li>
                    <a href="signout.php" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">Sign Out</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>  
<main role="main">
 
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 >We aim to <br> Wake us all more Resilient, more Knowledgeable and more Successful.</h1>
        <p>The Library preserves and promotes universal access to a broad range of human knowledge, experience, information and ideas in a welcoming and supportive environment.</p>
    </div>
  </div>
  <div id="wwa">
    <div class="container homepage">
      <span class="fa-stack fa-7x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-certificate fa-stack-1x fa-inverse"></i>
          </span>
      <h2>Who We Are</h2>
      <hr>
      <p>We are <a href="#" target="_blank">UBIT Digital Library</a>. We aim to provide universal access to a broad range of human knowledge, experience, information and ideas in a welcoming and supportive environment.</p>
    </div>
  </div>
  <div id="get_involved">
    <div class="container homepage">
       <h2>Get Involved</h2>
       <hr>
       <div class="cbg">
    <div class="container">
    <div class="col-md-12">
    <div id="logbox">
        <form method="post">
      
        <input name="name" type="text" placeholder="Enter your username"  autofocus="autofocus" required="required" class="input pass"/>
        <input name="password" type="password" placeholder="Choose a password" required="required" class="input pass"/>
 
        <input name="email" type="email" placeholder="Email address" class="input pass"/>
        <input type="submit" value="Sign me up!" name="submit" class="inputButton"/>
      </form>
    </div>
        <?php
            if(isset($_POST['submit']))
            {
                $uname=$_POST['name'];
                $upassword=$_POST['password'];
                $uemail=$_POST['email'];
                $user_id = uniqid();
                
                $query = "insert into user (user_id ,username,password,email)values('$user_id','$uname','$upassword','$uemail')";
                if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
            }
        ?>
   </div>
    <!--col-md-6-->
   
  </div>
  </div>
  </div> <!-- /container -->
</main>

      <footer>
      
  </footer>
  
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>
</html>
