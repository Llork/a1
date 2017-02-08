<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>David Kroll - DWA15 Assignment 1</title>
	<link rel="stylesheet" href="/css/styles.css">
</head>

<body>
	
	<div class="container">
    
    	<h1>David Kroll</h1>
        
        	<img src="images/david_kroll.jpg" style="width:25%;min-width:300px;height:auto;" />
        
        <h2>About Me</h2>
        
  			<p>under construction</p>
            
		<h2>Random Quote</h2>
        
        	<p><?php
			
			$cool_quotes = array('"Reality is merely an illusion, albeit a very persistent one."<br>Albert Einstein', '"You must be the change you wish to see in the world."<br>Mahatma Gandhi', '"I\'ve learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel."<br>Maya Angelou');
			
			$random_number = rand(0,2);
			
			echo($cool_quotes[$random_number]);
			
			?></p>
                 
  	</div>  
  
</body>

</html>