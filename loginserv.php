<?php
$error='';
$succesful='';
$dbhost=	'fdb26.awardspace.net';
$dbpass='_/SPswbw4e*sxr^e';
$dbname='3399312_users';
if(isset($_POST['submit']))
{
    if(empty($_POST['user'])||empty($_POST['pass']))
    {
        $error="Username or Password is Invalid";
    }
    else{
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $conn=mysqli_connect($dbhost,$dbname,$dbpass);
        $db=mysqli_select_db($conn,$dbname);
        $query=mysqli_query($conn,"SELECT * FROM 'data' WHERE Password='$pass' AND Username='$user'");
        $rows=mysqli_num_rows($query);
        if($rows==1){
            $error='';
            header("Location:MilkyWay.php");
        }
        else{
            $error="Invalid Connection";
        }
        mysqli_close($conn);

    }
}
else{
    $error='';
}

if(isset($_POST['regsubmit'])&&!empty($_POST['reguser'])&&!empty($_POST['regpass'])&&!!empty($_POST['regmail']))
{
    $reguser=$_POST['reguser'];
    $regpass=$_POST['regpass'];
    $regemail=$_POST['regemail'];
    $conn=mysqli_connect($dbhost,$dbname,$dbpass);
    $db=mysqli_select_db($conn,$dbname);
    $sql = "INSERT INTO `data`( `Username`, `Password`,`EmailAddress`) VALUES ('$reguser','$regpass','$regemail')";
    $result = mysqli_query($conn, $sql);
    if($result!=NULL)
		{
			
				
			$error="Succesfully registered";
			
        }
        else{
           $error="Something went wrong";
        }
}


?>