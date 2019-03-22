<?php include 'cms/db.php';?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
   
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
    <link href="home.css" rel="stylesheet">
  </head>
  <body>
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

<main role="main">
   
  <div class="album py-5 bg-light" style="padding-top:5rem; padding-bottom: 4rem;">
      
    <div class="container">
         <div class="row">
        <h2>BOOKS</h2>
        <h6 style="text-align:right;"><a href="books.php">view all</a></h6>
         <?php
            $query ="select * from books limit 6 offset 0";
            $run = mysqli_query($conn, $query);
            while($row= mysqli_fetch_array($run)){
          ?>
        <div class="col-md-4">
          <div class="col-lg-3 col-md-4 col-sm-6 ">
              <img src="images/img/<?php echo $row['book_img'];?>" width="148px" height="223px">
            <h5 style="font-weight:bold;"><?php echo $row['product_name'];?> Semester: <?php echo $row['product_sem'];?></h5>
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="images/<?php echo $row['product_desc'];?>"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
    </div>
    </div>
      <div class="container">
        <h2>AUDIOS</h2>
        <h6 style="text-align:right;"><a href="audios.php">view all</a></h6>
         <div class="row">
          <?php
             $query ="select * from audios  limit 6 offset 0";
            $run = mysqli_query($conn, $query); 
            while($row= mysqli_fetch_array($run)){
          ?>
        <div class="col-md-4">
          <div class="col-lg-3 col-md-4 col-sm-6">
              <audio width="320" height="240" controls>
                  <source src="audios/<?php echo $row['product_desc'];?>">
              </audio>
            <h5 style="font-weight:bold;"><?php echo $row['product_name'];?>Semester: <?php echo $row['product_sem'];?></h5>
          </div>
        </div>
        <?php }?>
    </div>
      </div>
      <div class="container">
        <h2>VIDEOS</h2>
        <h6 style="text-align:right;"><a href="videos.php">view all</a></h6>
         <div class="row">
          
         <?php
           $query ="select * from videos limit 6 offset 0 ";
            $run = mysqli_query($conn, $query);
            while($row= mysqli_fetch_array($run)){
          ?>
        <div class="col-md-4">
          <div class="col-lg-3 col-md-4 col-sm-6">
               <video width="320" height="240" controls>
                   <source src="videos/<?php echo $row['product_desc'];?>">
               </video>
            <h5 style="font-weight:bold;"><?php echo $row['product_name'];?>Semester: <?php echo $row['product_sem'];?></h5>
          </div>
        </div>
        <?php }?>
    </div>
  </div>       
  </div>
</main>
      <footer></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
