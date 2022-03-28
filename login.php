<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></head><body><h2 class='m-5'> Login
</h2>
<div class='container pb-5'> 
  <form action="" method="post" name="Login_Form">
<?php if(isset($msg)){?>
<?php echo $msg;?>
<?php } ?> 
    <div class='form-group'> 
      <label for='exampleInputEmail1'>Email address</label> 
      <input name="Username" type='text' class='form-control' id='Username' aria-describedby='emailHelp'> 
      <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small> 
    </div>
    <div class='form-group'> 
      <label for='exampleInputPassword1'>Password</label> 
      <input name="Password" type='password' class='form-control' id='exampleInputPassword1'> 
    </div>
    <div class='form-group form-check'> 
      <input type='checkbox' class='form-check-input' id='exampleCheck1'> 
      <label class='form-check-label' for='exampleCheck1'>Check me out</label> 
    </div>
    <button name="Submit" type="submit" value="Login" class='btn btn-primary'>Submit</button>
  </form>
</div></body></html>
