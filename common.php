<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=, initial-scale=1.0">';
    echo '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
    echo '<title>' . $title . '</title>';
    echo '<!-- Link to external style sheet -->';
    echo '<link rel="stylesheet" type="text/css" href="Css/style.css">';
    echo '</head>';
    echo '<body>';
    
}

/* Ouputs the banner and the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output navigation

    echo '<nav class="navigation">';
    
    //Array of pages to link to
    $linkNames = array("Home", "User", "Leaderboard","Game");
    $linkAddresses = array("index.php","logIn.php" ,"leaderboard.php","game.php");
    
    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a id="hello"';
        if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
    }
    echo '</nav>';
}

//Outputs Footer tag closing body tag and closing HTML tag
function outputFooter(){

    echo '<footer>&copyCopyright 2019 by Mohammed MK. All Rights Reserved.</footer>';
    echo '</body>';
    echo '</html>';
}