<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}


button:hover {
    opacity: 0.4;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}



/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 75%; /* Could be more or less, depending on screen size */
}



/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}



/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 50%;
    }
}


/* Style all input fields */
input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}


/* Style the container for inputs */
.container {
    background-color: #f1f1f1;
    padding: 20px;
}


/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}


/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "Done";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "X";
}
</style>
<body>
<center>
<h2> Signup Form</h2>
<h3>Are you a New User ?</h3>
<br>
<h4>Click on the Sign Up Button below. </h4>
<br>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
</center>



<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="/action_page.php">
    <div class="container">
      
	  <label><b>First Name</b></label><br>
      <input type="text" placeholder="Enter your First Name" name="fname" required><br>
	  
	  <label><b>Last Name</b></label><br>
      <input type="text" placeholder="Enter your Last Name" name="lname" required><br>
      
    <label><b>Email</b></label><br>
      <input type="text" placeholder="Enter Email" name="email" required><br>
	  
	  <label><b>Phone Number</b></label><br>
      <input type="text" placeholder="Enter your Phone Number" name="phn" required><br>
      
    <label><b>Birthday</b></label><br>
      <input type="text" placeholder="Enter your Date of Birth" name="bday" required><br>
	  
    <label><b>Gender</b></label><br>
      <input type="text" placeholder="Enter your Gender" name="gender" required><br>
      
    
      <label><b>Password</b></label><br>
      
	  <input type="password" placeholder="Click here to view the Password Requirements" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required><br>

	  <div id="message">
	  <h3>Password must contain the following:</h3>
	<h4 id="letter" class="invalid">A <b>lowercase</b> letter</h4>
	<h4 id="capital" class="invalid">A <b>capital (uppercase)</b> letter</h4>
	<h4 id="number" class="invalid">A <b>number</b></h4>
	<h4 id="length" class="invalid">Minimum <b>6 characters</b></h4>
	</div>
    
    
      
        <div class="clearfix">
	  <center>
	    <button type="submit" class="signupbtn">Sign Up</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		</center>
      </div>
    </div>
  </form>
</div>



<script>
// Get the modal
var modal = document.getElementById('id01');

//For Password Validation
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>   