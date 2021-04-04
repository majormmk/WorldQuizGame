<?php
    //Include the PHP functions to be used on the page 
    include('common.php');
	
    //Output header and navigation 
    outputHeader('Registration');
?>
<!-- Giving a header for the page -->
<header>
    <h1>Registration</h1>
</header>
<?php
    //Output navigation
    outputBannerNavigation("Registration");
?>
<!-- Creating a form for registration of new users -->
<form class="form">
    <input type="text" name="firstname"placeholder="Name" class="input" id="nameId"><br>
    <br>
    <input type="text" name="email" placeholder="Email"class="input" id="emailId"><br>
    <br>
    <input type="text" name="username" placeholder="Username" class="input" id="userId"><br>
    <br>
    <input type="password" name="password"placeholder="Password" class="input" id="passId"><br>
    <br>
    <input type="submit" name="submit" onclick="registerForm()";>
  </form>
  <script>


function registerForm() {
var usrObject = {};
usrObject.name = document.getElementById("nameId").value;
usrObject.email = document.getElementById("emailId").value;
usrObject.username = document.getElementById("userId").value;
usrObject.password = document.getElementById("passId").value;

if (usrObject.username === "")
 {
    alert("Please Fill the form");
} 
else {
    document.getElementById("nameId").value = "";
    document.getElementById("emailId").value = "";
    document.getElementById("userId").value = "";
    document.getElementById("passId").value = "";
   
    localStorage[usrObject.username] = JSON.stringify(usrObject);
    alert("You have successfully signed up");
}
}
</script>

<?php
    //Output footer
    outputFooter();
?>
