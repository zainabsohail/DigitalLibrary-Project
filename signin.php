<?php include 'cms/db.php'; ?>
<?php session_start();?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sign In</title>
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet" >


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

 <body >
    <header>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php"><i class="fas fa-book-open"> Digital library </i></a>
        </div>
             <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
               <li>
               <a href="home.php" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">HOME</a>
            </li>
             <li >
              <a  href="books.php" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">BOOKS</a>
            </li>
            <li>
              <a href="videos.php" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">VIDEO LECTURES</a>
            </li>
            <li>
              <a href="audios.php" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">AUDIO LECTURES</a>
            </li>
            
            <li><a href="signin.php" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">SIGN IN</a></li>
           
                <li>
                    <a href="signout.php" style="font-family: 'Arvo',courier, serif ;font-size: 15px;">SIGN OUT</a>
            </li>
          
          </ul>
        </div>
        </div>
    </nav>
</header>

<main role="main" >
    <div class="cbg" style="    background-color: #efefef;">
        <div class="container" >
<div class="col-md-12">
      <h1 style="text-align: center; padding-top: 40px;">Account Log in</h1>
    <div id="logbox">
        <form method="post">
          
        <input name="email" type="email" placeholder="enter your email" class="input pass"/>
        <input name="password" type="password" placeholder="enter your password" required="required" class="input pass"/>
        <a href="home.php"><input type="submit" name="submit" value="Sign me in!" class="inputButton"  /></a>
      </form>
    </div>
        <?php
     if(isset($_POST['submit']))
  {
    $uemail = $_POST['email'];
    $upassword =$_POST['password'];
    $query = mysqli_query($conn, "select * from user where email='$uemail' and password='$upassword'");
    $check = mysqli_num_rows($query);

    if($check>0)
        {
        while ($row = mysqli_fetch_array($query))
            {
                    $_SESSION['user_id'] = $row['user_id'];
            }
        echo "<script> window.location='home.php' </script>";
        }
    else 
        {
            echo 'incorrect email';
        
        }    
}
?>
</div>
        </div>
    </div>
    

</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
  
      