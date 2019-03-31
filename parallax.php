<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parallax</title>
    <link rel="stylesheet" href="parallax1.css">    
    <style>
		#posts{
			display: block;
		}
        #upload
        {
        
            position:relative;
            left:50px;
            font-size: 19px;
            font-family: cursive;
            background-color: black;
            color: white;
            border-radius:5px;
        }
		#logout
		{
			position:relative;
            left:1120px;
            font-size: 19px;
            font-family: cursive;
            background-color: black;
            color: white;
            border-radius:5px;
		
		}
    </style>
</head>
<body>
	<?php
				$db=new PDO('sqlite:snapsta.db');
				$url1= $db->query('select * from pics;');
			//	$imgarr=array("p.jpg","m1.jpg");
	            foreach($url1 as $r)
	            {
					$ur = $r['url'];
				//s	$ur=addslashes($ur);
		//			echo "<script>alert('".$ur."')</script>";
				/*	echo"<script>alert('$ur');</script>";
					$url='p.jpg';
					echo '<script>';
					echo'alert("hello");';
					echo"var sess=document.createElement('section');</script>";
					echo"<script>sess.createAttribute('class');</script>";
					echo"<script>sess.setAttribute('class','sec1');</script>";
					echo"<script>var ex=getElementById('sec1');</script>";
					echo"<script>ex.style.backgroundImage='url($ur)';</script>";
					echo'alert("hello");';
					echo"<script>sess.appendChild(section);</script>";
					echo"<script>alert('end');</script>";
					echo'</script>'	;		  
	           */

			  /* $iurl = ''
			  for ($x = strlen($ur)-1; $ur[$x] != "\\" ; $x--)
			  {
					$iurl = $iurl.$ur[$x];
			  }
			  $iurl = strrev($iurl);
			*/
			 

			  echo '<img  src=\''.$ur.'\' width="1300px" height="600px"  /> <br/>';

		

			  /*
			   echo'<script>alert("'.$ur.'");</script>';
					echo '<script>
							      var sess=document.createElement("section");
								  var attr = document.createAttribute("class");
								  attr.value = "sec1";
								  sess.setAttributeNode(attr);
								  sess.style.backgroundImage="url(\''.'file://'.$ur.'\')";
								  document.getElementById("posts").appendChild(sess);
							</script>';
				*/
						}
				
				/*echo"<script>alert('$ur');</script>';
				echo '<script>getElementById("img1").setAttribute("src","C:\wamp\www\snapsta1\p.jpg");</script>';*/
				if(isset($_POST['logout']))
				{
					//$url=$_FILES['upload1']['name'];
					//$url = fopen($_FILES["upload1"]["name"], 'r');
					//$url = realpath($_FILES["upload1"]["name"]);
					//echo $url;
					
					//$db->exec('INSERT INTO pics VALUES("'.$url.'");');
					header("Location: home2.php");
				}
				else if(isset($_POST['upload']))
				{
					//$url=$_FILES['upload1']['name'];
					//$url = fopen($_FILES["upload1"]["name"], 'r');
					//$url = realpath($_FILES["upload1"]["name"]);
					//echo $url;
					//$db->exec('INSERT INTO pics VALUES("'.$url.'");');
					header("Location: upload.php");
				}
			?>
    <form method="POST" action="parallax.php">
        <input type="submit" value="Upload" id="upload" name="upload">
		<input type="submit" value="Logout" id="logout" name="logout">
    </form>
	<!--
	<img src="m1.jpg" width="1280" height="720" id="img1" alt="no image"/> 
    <a href="upload.php" button onclick="upload()">
-->
<!--
    <section class="sec1" name="sec11" id="sec11">
	</section>
    <section class="sectext" > 
    <div class="heart"></div>
    </section>
-->
		<div id="posts">
		
		</div>
		<!--<section class="sec2"></section>
		<section class="sec3"></section>
		<section class="sec4"></section>-->

</body>
</html>