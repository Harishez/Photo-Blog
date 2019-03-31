<html>
    <head>
		<meta charset="utf-8">
        <title>
            Upload
        </title>
        <link rel="stylesheet" href="upload.css">
        
    </head>
    <body background="magenta.png">
			<?php
		//	echo "<script>alert('Uploading')</script>";
				$db=new PDO('sqlite:snapsta.db');
				if(isset($_POST['up']))
				{
				//	echo "<script>alert('Uploading')</script>";
					//$url=$_FILES['upload1']['name'];
					//$url = fopen($_FILES["upload1"]["name"], 'r');
					$url = $_FILES['upload1']['name'];
					
					echo "<script>alert('".$url."')</script>";

					$db->exec('INSERT INTO pics(url) VALUES("'.$url.'");');
					//	header("Location: parallax.php");
			}
			?>
            <div class="main">
            <div id="heading">
                <p id="hh">Snapsta</p>
                <p id="pp"><b>Where Pictures Tell the Tales..</b></p>
            </div>
			<div id="loginbox">   
                <form method="post" action="upload.php" enctype="multipart/form-data">
					<input type=file id="upload1" name="upload1"><br/><br/>
					<input type=submit id="up" name="up" value="Post Picture">
				</form>
			</div>
			</div>
	</body>