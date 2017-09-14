<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>About Me</title>

      <link rel="stylesheet" type="text/css" href="css/p1.css">

  </head>
  <body>
      
      <h1>Eric Tracy</h1>
      
        <img src='images/myprofile.png' alt='My Profile'><br>

      <p id="bio">My name is Eric Tracy. I am currently working toward the Web Technologies Certificate at Harvard Extension School. I work as a recruiter here in Massachusetts and I am pursuing this course to expand my technical skillset. I am intrigued by the boundless creativity that web development offers - I am already learning a lot in this course and look forward to this semester!</p> 
      <br>
      
      <?php
        $array1 = [
            '"Time you enjoy wasting, was not wasted" - John Lennon',
            '"Life is far too important a thing ever to talk seriously about" - Oscar Wilde',
            '"I learned that courage was not the absence of fear, but the triumph over it" - Nelson Mandela'
        ];

        shuffle($array1);
		$quote = array_pop($array1);
    	echo "$quote ";
      ?>
      
  </body>
    
</html>
