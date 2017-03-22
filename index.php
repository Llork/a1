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
        
        	<img alt="David Kroll" src="images/david_kroll.jpg" style="width:25%;min-width:300px;height:auto;" />
        
        <h2>About Me</h2>
        
  			<p>Hi everyone, I'm David Kroll. I was born in Somerville, New Jersey, 1957. I have 3 sisters and one brother; my parents both passed away in recent years. I'm married to my lovely wife Elizabeth, we have two daughters, both in their 20's. After graduating high school in 1975, I attended M.I.T. for two years and then dropped out.  Went back to school years later, I have a Bachelors degree in Computer Science (1993) from Boston University.  Career-wise, my longest term employer (1986-2003) was Verizon (a.k.a. NYNEX, Bell Atlantic).  I did COBOL programming and various other technical stuff, also got into web design there around 2000 (HTML, Photoshop, Flash).<br><br>
Since December 2012 I've worked for Harvard Business School as a web technologist. I'm taking this course to learn more about back-end programming, so that I'm in a better position to create and maintain non-static web sites.</p>
            
		<h2>Random Quote</h2>
        
        	<p><?php
			
			$cool_quotes = array('"Reality is merely an illusion, albeit a very persistent one."<br>Albert Einstein', '"You must be the change you wish to see in the world."<br>Mahatma Gandhi', '"I\'ve learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel."<br>Maya Angelou');
			
			$random_number = rand(0,2);
			
			echo($cool_quotes[$random_number]);
			
			?></p>
                 
  	</div>  
  
</body>

</html>