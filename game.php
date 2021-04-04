<?php
    //Include the PHP functions to be used on the page 
    include('common.php');
	
    //Output header and navigation 
    outputHeader('Game');
?>
<!-- Giving a header for the page -->
<header>
    <h1>Game</h1>
</header>
<?php
    //Output navigation
    outputBannerNavigation("Game");
?>
<!-- Attaching a gif which reperesents the game -->
<div class="game-box">

    <div id="beginning">
<input id=start-game type="submit" value="Start" onclick="selectionCategory()">

</div>
    <div class=selection>
    <button id="selection1" style="display:none;" onclick="startGame()">Geography</button> 
    <button id="selection2" style="display:none;" onclick="startHistoryGame()">History</button>
</div>
<div>
    <p id="welcome-message">Click Start To Begin!</p>
    <p id="selection-message"  style="display:none;">Select Your Category</p>
    <p id="question"></p>
    <p id="game-score" style="display:none;" >Score: </p>
    <input id="answer-text" value="" type="text" placeholder="Enter Answer" style="display:none;">
    <input id="submitGeo" type="submit" style="display:none;" onclick="startGeography()">
    <input id="submitHistory" type="submit" style="display:none;" onclick="startHistory()">
    <p id = "answer-status"></p>
    <p id="final-message" style="display:none;">You have Passed the Quiz</p>
    

</div>

</div>
<img src="Images/earth.png" id="earth">

<script src="game.js"></script>

 <?php
    //Output footer
    outputFooter();
?>
