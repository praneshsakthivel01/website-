<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registration form </title>
    <link href="register.css" rel="stylesheet" type="text/css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
  <h1>Registration Form </h1>
  <form action="connect.php" method="POST">
  <p>
    <label>User Name&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
    <input type ='text' name='username' id='username' placeholder='enter user name' required ><br><br>
  </p>
  <p>
    <label>Email-id&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
    <input type='email' name='email' id='email' placeholder="enter email id " required><br><br>
  </p>
  <p>
    <label>Password&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
    <input type='password' name='password' id='password' placeholder="enter your password " required><br><br>
  </p>
  <p>
    <label>Confirm password &ensp;</label>
    <input type='password' name='cpassword' id='cpassword'  placeholder="confirm your password " required><br>
  </p>
  <p>
    <input type="submit" name ="submit" value="submit"><br>
  </p> 
  <p>
    Already Member ?
    <a href="index.php">login here </a>
  </p> 
 </form>
</body>
</html>