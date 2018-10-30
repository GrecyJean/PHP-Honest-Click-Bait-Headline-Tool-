<?php

    define("TITLE", "Honest Click Bait Headlines");
    include("functions.php");    

    if(isset($_POST["fix_submit"]) ) {
        
        checkForClickBait();
        
    }
   
?>

<!DOCTYPE html>

<html lang="en-us">
    
    <head>
        
        <meta charset="UTF-8">
        
        
        <title><?php echo TITLE; ?></title>
        
    <!--Bootstrap css-->

<link rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
    
    </head>
    
        <body>
            <div class="container">
                
                <h1><?php echo TITLE; ?></h1>
                <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program</p>
                
            <div class="row">
                
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg"  name="clickbait_headline"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make Honest!</button>
                
                </form>
                 
            </div><!--END OF row class-->
            
            <?php 
                
                if(isset($_POST["fix_submit"]) ) {
                    
                    $clickBait = checkForClickBait()[0];
                    
                    $honestHeadline = checkForClickBait()[1];
                    
                displayHonestHeadline( $clickBait, $honestHeadline );
                    
                    
                }  
            
            ?>
                
                <br><h4>USE THESE KEYWORDS IN HEADLINE</h4>
                
                <ul>
                
                <li>scientist</li>
                <li>doctors</li>
                <li>hate</li>
                <li>stupid</li>
                <li>weird</li>
                <li>simple</li>
                <li>trick</li>
                <li>shocked me</li>
                <li>you'll never believe</li>
                <li>hack</li>
                <li>epic</li>
                <li>unbelievable</li>
                    
                </ul>
                
                <p>EXAMPLE</p>
                
                <p>"<strong>Scientist</strong> have found 5 <strong>simple</strong> <strong>hacks</strong> to lose 10 pounds in 1 day"</p>
            
            
            </div>
    
    
        
    
    <!--Bootstrap JS-->
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    
        </body>




</html>