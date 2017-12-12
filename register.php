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

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:50%}

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
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
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
      <input type="password" placeholder="Enter Password" name="psw" required><br>

    
    
      <input type="checkbox" checked="checked"> Remember me
    
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>   
      
       <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>   