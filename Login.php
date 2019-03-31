<html>
    <head>
        <title>
            Login
        </title>
        <link rel="stylesheet" href="loginboxStyle.css">
        
    </head>
    <body background="magenta.png">
        <?php
            //session_start();
            $db=new PDO('sqlite:snapsta.db');
            if(isset($_POST['login']))
            {
                $username1 = ($_POST['uname']);
                $password1=($_POST['password']);
	           // $_SESSION['uname'] = $username1;
	
                $firstname1= $db->query('select * from users;');
	            foreach($firstname1 as $r)
	            {
								  
	                if($r['uname'] == $username1 && $r['password'] == $password1)
	                {
			             header("Location: parallax.php");
                    }
                }
			   echo '<script>alert("Invalid username or password")</script>';
            }
        ?>
        <div class="main">
            <div id="heading">
                <p id="hh">Snapsta</p>
                <p id="pp"><b>Where Pictures Tell the Tales..</b></p>
            </div>
            <div id="loginbox">   
                <form method="post" action="Login.php">
                <!-- <label id="l1">
                    UserName 
                </label> -->
                    <h2 id="hh1">Snapsta</h2>
                    <input type= "text" placeholder= "Username" name="uname" id="uname"/></br></br>
                <!-- <label id="l2">
                    Password  
                </label> -->
                    <input type="password" placeholder="Password" name="password" id="password"/></br></br>
                    <input type="submit" value="Login" name="login" id="login"/>
                </form>
        </div>
    </body>
</html>