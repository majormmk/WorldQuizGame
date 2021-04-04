<?php
    //Include the PHP functions to be used on the page 
    include('common.php');
	
    //Output header and navigation 
    outputHeader('User');
?>
<!-- Giving a header for the page -->
<header>
        <h1>User</h1>
</header>    
<?php
    //Output navigation
    outputBannerNavigation("Login");
?>
        <br>
        <br>
<!-- Creating a Form For Login  -->
        <form class="form" id="login-container">
    <input type="text" name="firstname"placeholder="Username" class="input" id="username"><br>
    <br>
    <input type="password" name="password"placeholder="Password"class="input" required id="password">
    <br>
    <input type="submit" name="submit" onclick="userLogin()">
    
  </form>
  <input type="submit" value="Logout" id="logout" onclick= "logout()">
  
        <br>
        <p>If you are a new user, click <a href="registration.php">here</a></p>
        
        <script>
// This is the login function
    function userLogin() {
        var enteredusername = document.getElementById("username").value;
        var enteredpassword = document.getElementById("password").value;
        if (localStorage[enteredusername] === undefined) {
            alert("Please create an account before loging in.");
            } 
            else {
            var stored = JSON.parse(localStorage[enteredusername]);
            if (enteredpassword == stored.password) {
                alert("Logged in as " + enteredusername + ".");
                window.location.href="game.php";
                sessionStorage["loggedin"] = "True";
                sessionStorage["username"] = enteredusername;
            } 
            else {
                alert("Incorrect Password.");
            }
        }
    }
// The logout function
    function logout(){
        sessionStorage['loggedin']= "false";
        location.replace("index.php");
    }
        window.onload = function hidebutton() {
    if (sessionStorage["loggedin"] == "True") {
        var loginandsign = document.getElementById("login-container");
        loginandsign.style.display = "none";
        var logout = document.getElementById("logout");
        logout.style.display = "block";
       
    } 
    else {
        var logout = document.getElementById("logout");
        logout.style.display = "none";
        var loginandsign = document.getElementById("login-container");
        loginandsign.style.display = "block";
    }
}
    </script>
        <?php
    
    
    //Output footer
    outputFooter();
?>
