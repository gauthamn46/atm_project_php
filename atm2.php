<html>
<head>
	<script type='text/javascript' src='authenticate.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="uitheme.css">
<style>
button[type=submit]
{
	background-color:gray;
	width: 15%;
	color: white;
}
</style>
</head>
<body>
<div align="center">
<img src="logo.png" width=800px height=150px></body>
<br>
<br>
<form action="authenticate.php" method="POST" class="box">
<label>Enter Account Number:</label><br>
  <input name="username" type="text" placeholder="Enter Account number" >
  <br>
  <br>
  <label>Enter ATM Pin:</label><br>
 <input name="password" type="password" placeholder="Enter ATM Pin" >
  <br><br>
<input type="submit" name="Login">
<p><b>Account No:admin<br>ATM Pin:1234</b></p>
</form>
</div>
</body>
<footer><b>Copyrights &copy; State Bank of India 2018</b></footer>
</html> 