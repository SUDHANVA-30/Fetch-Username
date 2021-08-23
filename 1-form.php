<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="mystyle.css"> 
  <body>
   <style type="text/css">
   	body{
   		background-color: black;
   	}
   	.b1{
   		color: white;
   		border: 5px solid blue;
   		padding: 20px;
   	}
   	.b2{
   		 background-color: #A9A9A9;
		  border: none;
		  color: white;
		  padding: 10px 10px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 10px 10px;
		  cursor: pointer;
		  font-family: Georgia, serif;
   	}
   </style>
    <form method="post" action="1-form.php">
    	<div style="text-align: center;">
      <h1 class="b1">SEARCH FOR USERS</h1>
      <h2 class="a1">Please type in the characters of first and/or last name!</h2>
      <input  style="border-width: 5px" type="text" name="search" required/>
      <input class="b2" type="submit" value="Submit"/>
  </div>
    </form>


    <?php
  
    if (isset($_POST['search'])) {

      require "2-search.php";
      
 
      if (count($results) > 0) {
        foreach ($results as $r) {
          printf("<div>%s - %s</div>", $r['name'], $r['email']);
        }
       
      } else { echo "<br>Sorry, no results found";}
    }
    ?>

  </body>
</html>