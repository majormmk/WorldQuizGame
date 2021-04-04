<?php
    //Include the PHP functions to be used on the page 
    include('common.php');
	
    //Output header and navigation 
    outputHeader('Welcome to the World');
?>
<!-- Giving a header for the page -->
<header>
    <h1>Welcome to the World Quiz</h1>
</header>
<?php
    //Output navigation
    outputBannerNavigation("Home");
?>
<br>
<br>
    <!-- Begininng of Article & Creating classes for ease of applying css-->
<article class="description">
<div class="flip-card1">
  <div class="flip-card-inner1">
    <div class="flip-card-front">
        <br>
        <br>
        <br>
       <h2> Introduction</h2>
</div>
<div class="flip-card-back">
    <section class= "introduction">
    Welcome to the domain of the World Quiz!
    Where we provide you with extraordinary and brain-engaging geography trivia 
    to test your knowledge and agility to answer the strenuous questions and motivation to acquire more. 
    7 continents, 5 oceans, 195 countries and around 200 islands are waiting to challenge you in this 
    nerve wrecking but exhilarating journey of trivia and quizzes. 
    To join our team, just sign up here and if you’re already a part of this family then just log into your 
    account and quiz away.
    </section>
</div>
</div>
</div>

<div class="flip-card2">
<div class="flip-card-inner2">
<div class="flip-card-front">
        <br>
        <br>
        <br>
    <h2> Instructions</h2>
</div>
<div class="flip-card-back">
    <section class= "instructions">
        Instructions: 
        <br>
        <ul>
            <ol>Click on start to begin the Game</ol>
            <ol>Select the category, Geography is an easy level and History is a tough level</ol>
            <ol>This is when your game starts where a question is displayed on the screen.</ol>
            <ol>Answering the question correctly will open you up to another 
            mind boggling question and earn you a score.</ol>
            <ol> However,answering the question incorrectly will take you back to where you started from. </ol>
        
        </ul>
    </section>
</div>
</div>
    </article>
<?php
    //Output footer
    outputFooter();
?>
    