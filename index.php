<?php

 if( $_POST["location"] ) {
      $location = $_POST["location"];
      header( "Location:$location" );
      
      exit();
   }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="cats.css">
    <title>Bootstrap kittens project</title>

  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-11">
          <h2 class="text-primary text-center">Little Kittens</h2>
        </div>
        <div class="col-md-1">
          <a href="#"><img class="img-responsive thick-orange-border" src="https://bit.ly/fcc-relaxing-cat" alt="relaxing cat"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <img src="http://www.wallpaperup.com/uploads/wallpapers/2015/06/02/708300/eeeecaf1d4cc8858fa21567085a3ab30.jpg" class="img-responsive" alt="seating cats">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <button class="btn btn-block btn-primary"><i class="fa fa-thumbs-up"></i>Like</button>
        </div>
        <div class="col-md-4">
          <button class="btn btn-block btn-info"><i class="fa fa-info-circle"></i>Info</button>
        </div>
        <div class="col-md-4">
          <button class="btn btn-block btn-danger"><i class="fa fa-trash"></i>Delete</button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <p>Things cats <span class="text-danger">love:</span></p>
          <ul>
            <li>cat nip</li>
            <li>laser pointers</li>
            <li>lasagna</li>
          </ul>
        </div>
        <div class="col-md-4">
          <p>Top 3 things cats <span class="text-danger">hate:</span></p>
          <ol>
            <li>flea treatment</li>
            <li>thunder</li>
            <li>other cats</li>
          </ol>
        </div>
        <div class="col-md-4">
        <p><em>Interesting fact:</em> A cat cannot climb head first down a tree because its claws are curved the wrong way</p>
        </div>
      </div>
     
        <div class="row">
          <div class="col-md-6">
            <label><input type="radio" name="indoor-outdoor">Indoor</label>
          </div>
          <div class="col-md-6">
            <label><input type="radio" name="indoor-outdoor">Outdoor</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <label><input type="checkbox" name="personality">Loving</label>
          </div>
          <div class="col-md-4">
            <label><input type="checkbox" name="personality">Lazy</label>
          </div>
          <div class="col-md-4">
            <label><input type="checkbox" name="personality">Crazy</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
           <form action = "<?php $_SERVER['PHP_SELF'] ?>" method ="POST">
         <select name = "location">
            <option value = "https://en.wikipedia.org/wiki/Cat">
               Cats on Wikipedia
            </option>
         
            <option value = "http://facts.randomhistory.com/interesting-facts-about-cats.html">
               Facts on cats
            </option>
         </select>
          </div>
          <div class="col-md-5">
            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
          </div>
        </div>
     
    </div>
  </body>
</html>
