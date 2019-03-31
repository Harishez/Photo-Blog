<html>
    <head>
        <title>
            SignUp
        </title>
        <link rel="stylesheet" href="Signup.css">
        
    </head>
    <body background="magenta.png">
        <?php
            $db=new PDO('sqlite:snapsta.db');
            if(isset($_POST['signup']))
            {
                
                $fname = ($_POST['fname']);
                $lname=($_POST['lname']);
                $dob=($_POST['dob']);
                $email=($_POST['mail']);
                $mob=($_POST['mob']);
                $uname=($_POST['uname']);
                $password=($_POST['password']);
                $cpassword=($_POST['cpassword']);
                $db->exec('INSERT INTO users(fname,lname,dob,mob,email,uname,password) VALUES("'.$fname.'","'.$lname.'","'.$dob.'","'.$mob.'","'.$email.'","'.$uname.'","'.$password.'");');             
                    header("Location: parallax.php");
               
            }
        ?>
            <div class="main">
            <div id="heading">
                <p id="hh">Snapsta</p>
                <p id="pp"><b>Where Pictures Tell the Tales..</b></p>
            </div>
            <div id="loginbox">   
                <form method="post" action="Signin.php">
                <!-- <label id="l1">
                    UserName 
                </label> -->
                    <h3 id="hh1">Snapsta</h3>
                    <input type= "text" placeholder= "First Name" name="fname" id="fname"/></br></br>
                    <input type= "text" placeholder= "Last Name" name="lname" id="lname"/></br></br>
                    <input type= "date" placeholder= "DOB" name="dob" id="dob"/></br></br>
                    <input type= "text" placeholder= "Mobile Number" name="mob" id="mob"/></br></br>
                    <input type= "text" placeholder= "Email Id" name="mail" id="mail"/></br></br>                    
                    <input type= "text" placeholder= "Username" name="uname" id="uname"/></br></br>
                <!-- <label id="l2">
                    Password  
                </label> -->
                    <input type="password" placeholder="Password" name="password" id="password"/></br></br>
                    <input type= "password" placeholder= "Confirm Password" name="cpassword" id="cpassword"/></br></br>                    
                    <input type="submit" value="Signup" name="signup" id="signup"/>
                </form>
            </div>
        </div>
    </body>
</html>