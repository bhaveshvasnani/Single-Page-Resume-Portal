<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $_SESSION['name'];?></title>

<meta name="viewport" content="width=device-width"/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php echo $_SESSION['name']; ?></h1>
			<h2 class="quickFade delayThree"><?php echo $_SESSION['occ'];?></h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>Email: <?php echo $_SESSION['em'];?></li>
				<li>Website: <?php echo $_SESSION['web'];?></li>
				<li>Mob. No: <?php echo $_SESSION['ph'];?></li>
			</ul>
		</div>
		<div class="clear"></div>
                    
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
        
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Objective</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $_SESSION['obj'];?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
        
        <section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo $_SESSION['pro'];?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			
			<div class="sectionContent">
                <article>
                <h2>Company</h2>
                <p class="subDetails"><?php echo $_SESSION['obj'];?></p>
				<p><?php echo $_SESSION['work'];?></p>
                </article>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			
			<div class="sectionContent">
				<p><?php echo $_SESSION['k1'];?></p>
                <p><?php echo $_SESSION['k2'];?></p>
                <p><?php echo $_SESSION['k3'];?></p>
                <p><?php echo $_SESSION['k4'];?></p>
                <p><?php echo $_SESSION['k5'];?></p>
			</div>
			<div class="clear"></div>
		</section>
		
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2>College/University</h2>
					<p><?php echo $_SESSION['deg'];?></p>
					<p><?php echo $_SESSION['detc'];?></p>
				</article>
				
				<article>
					<h2>School</h2>
					<p><?php echo $_SESSION['bo'];?></p>
					<p><?php echo $_SESSION['dets'];?></p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
	</div>
</div>
</body>
<?php session_destroy(); ?>
</html>