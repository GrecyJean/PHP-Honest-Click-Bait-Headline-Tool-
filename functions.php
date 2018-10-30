 <?php


//functions.php

function checkForClickBait() {
        
        $clickBait = strtolower($_POST["clickbait_headline"]);

        //array of common clickbait words
        $a = array(
                "scientist",
                "doctors",
                "hate",
                "stupid",
                "weird",
                "simple",
                "trick",
                "shocked me",
                "you'll never believe",
                "hack",
                "epic",
                "unbelievable"


        );

            //array to replace common clickbait words

            $b = array(
                "so-called scientist",
                "so-called doctors",
                "aren't threatened by",
                "average",
                "completely normal",
                "ineffective",
                "method",
                "is no different than the others",
                "you won't really be suprised by",
                "slightly improve",
                "boring",
                "normal"




        );

        $honestHeadline = str_replace($a, $b, $clickBait);
    
    return array($clickBait, $honestHeadline);

 } //End of Function checkForClickBait

function displayHonestHeadline($x, $y) {
    
    echo "<br><strong class='text-danger'>Original Headline<h4>".ucwords($x)."</h4><hr>";
                    
     echo "<br><strong class='text-success'>Honest  Headline<h4>".ucwords($y)."</h4><hr>";
    
}

 ?>
