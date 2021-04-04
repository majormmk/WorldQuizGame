<?php
    //Include the PHP functions to be used on the page 
    include('common.php');
	
    //Output header and navigation 
    outputHeader('Leaderboard');
?>
<!-- Giving a header for the page -->
<header>
        <h1>Leaderboard</h1>
</header>    
<?php
    //Output navigation
    outputBannerNavigation("Leaderboard");
?>

<!-- Making a Grid for the leaderboard -->
<div class="gridcontainer" id="leaderboard">
  <div class="griditem" id="heading">Name</div>
  <div class="griditem" id="heading">Score</div>
  <div class="griditem" id="heading">Quiz</div>
</div>

<script>
// This is where the leaderboard functionates after receving data from the game
    let currentLeaderboard = JSON.parse(localStorage.getItem('leaderboard'))
    let leaderboardTable = document.querySelector('#leaderboard')
// This is where the sorting of leaderboard score takes place
    let sortedLeaderboard = currentLeaderboard.sort(function(a, b) {
        return b.score - a.score
    })

    sortedLeaderboard.map(function(leaderboardEntry) {
        let usernameHtml = '<div class="griditem">' + leaderboardEntry.username + '</div>'
        let scoreHtml = '<div class="griditem">' + leaderboardEntry.score + '</div>'
        let quizHtml = '<div class="griditem">' + leaderboardEntry.quiz + '</div>'

        leaderboardTable.insertAdjacentHTML('beforeend', usernameHtml)
        leaderboardTable.insertAdjacentHTML('beforeend', scoreHtml)
        leaderboardTable.insertAdjacentHTML('beforeend', quizHtml)
        
    })
</script>

<?php
    //Output footer
    outputFooter();
?>