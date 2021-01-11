<?php 
require("connection.php");
include("top_inc.php");

if(isset($_GET['query_submit']))
{
  $fname=$_GET['firstname'];
  $lname=$_GET['mail'];
  $subject=$_GET['subject'];
  $des=$_GET['description'];


    $insqry="insert into query_tb(fname,lname,subject, description) values('$fname','$lname','$subject','$des')";

    $inres=mysqli_query($con,$insqry) or die(mysqli_error($con));

  if(!$inres)
  {
    echo "error";
  }
  

  mysqli_close($con);

}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.4.1.min.js"></script>     

<b style="padding: 50;">call on:</b><i class="fa fa-phone fa-2x" aria-hidden="true" ></i>  9913365780 <br/>
		


<style type="text/css">
	/* Style inputs with type="text", select elements and textareas */
input[type=text],input[type=email], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<div class="container">
  <form >

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="email" id="lname" name="mail" placeholder="email id..">

	<label for="lname">subject</label>
    <input type="text" name="subject" id="lname" placeholder="subject">

    <label>Subject</label>
    <textarea id="subject" name="description" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="query_submit">

  </form>
</div>
<?php

?>
