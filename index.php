<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Main Login</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body oncontextmenu="return false">

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Elemental<span> Industries</span></div>
		</div>
		<br>
		<form name="login">
		<div class="login">
				<input type="text" placeholder="Username" name="userid"><br>
				<input type="password" placeholder="Password" name="pswrd"><br>
				<input type="button" onclick="check(this.form)" value="Login"/>
		</div>

            

</form>
<script language="javascript">
function check(form)
{
 
 if(form.userid.value == "Elemental" && form.pswrd.value == "Industries")
  {
    window.open('pages/cp.php')
  }
 else
 {
   alert("You have entered the wrong username/password.")
  }
}
</script>
</body>
</html>