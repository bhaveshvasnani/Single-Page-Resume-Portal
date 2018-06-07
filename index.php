<!DOCTYPE html>
<html>
<head>
<title>Create your Resume</title>

<meta name="viewport" content="width=device-width"/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>


</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		
		<div id="name">
			<h1 class="quickFade delayTwo">Enter below details</h1>
		</div>
		
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
        <form action="index.php" method="POST">
        
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Objective</h1>
				</div>
				
				<div class="sectionContent">
					<input type="text" name="obj" placeholder="Objective"><br><br>
				</div>
			</article>
			<div class="clear"></div>
		</section>
        
        <section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Details</h1>
				</div>
				
				<div class="sectionContent">
					<input type="text" name="name" placeholder="Name">
                    <input type="text" name="occ" placeholder="Occupation"><br>
                    <input type="email" name="em" placeholder="Email ID">
                    <input type="text" name="web" placeholder="Website">
                    <br>
                    <input type="text" name="ph" placeholder="Phone No."><br><br>
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
					<input type="text" name="pro" placeholder="Person Profile"><br><br>
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
                <input type="text" name="time" placeholder="Time"><br>
				<input type="text" name="work" placeholder="Work experience"><br><br>
                </article>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			
			<div class="sectionContent">
				<input type="text" name="k1" placeholder="Key Skill 1">
                <input type="text" name="k2" placeholder="Key Skill 2">
                <input type="text" name="k3" placeholder="Key Skill 3">
                <input type="text" name="k4" placeholder="Key Skill 4">
                <input type="text" name="k5" placeholder="Key Skill 5"><br><br>
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
					<input type="text" name="deg" placeholder="Degree"><br>
					<input type="text" name="detc" placeholder="Details">
				</article>
				
				<article>
					<h2>School</h2>
					<input type="text" name="bo" placeholder="Board"><br>
					<input type="text" name="dets" placeholder="Details"><br><br>
				</article>
			</div>
			<div class="clear"></div>
		</section>
            
        <section>
			<center><input type="submit" name="submit" id="submit"></center>
			<div class="clear"></div>
		</section>
            
		</form>
	</div>
</div>
</body>
</html>

<?php
    session_start();
    if (isset($_POST['submit'])){
        $obj=$_POST['obj'];
        $name=$_POST['name'];
        $occ=$_POST['occ'];
        $em=$_POST['em'];
        $web=$_POST['web'];
        $ph=$_POST['ph'];
        $pro=$_POST['pro'];
        $time=$_POST['time'];
        $work=$_POST['work'];
        $k1=$_POST['k1'];
        $k2=$_POST['k2'];
        $k3=$_POST['k3'];
        $k4=$_POST['k4'];
        $k5=$_POST['k5'];
        $deg=$_POST['deg'];
        $detc=$_POST['detc'];
        $bo=$_POST['bo'];
        $dets=$_POST['dets'];
        $_SESSION['obj']=$obj;
        $_SESSION['name']=$name;
        $_SESSION['occ']=$occ;
        $_SESSION['em']=$em;
        $_SESSION['web']=$web;
        $_SESSION['ph']=$ph;
        $_SESSION['pro']=$pro;
        $_SESSION['time']=$time;
        $_SESSION['work']=$work;
        $_SESSION['k1']=$k1;
        $_SESSION['k2']=$k2;
        $_SESSION['k3']=$k3;
        $_SESSION['k4']=$k4;
        $_SESSION['k5']=$k5;
        $_SESSION['deg']=$deg;
        $_SESSION['detc']=$detc;
        $_SESSION['bo']=$bo;
        $_SESSION['dets']=$dets;
        header("Location: resume.php");
        //bhavesh098   58440815
    }
?>