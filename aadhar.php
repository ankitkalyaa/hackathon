<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title></title>

<style type="text/css">
	ul
	{
		list-style: none;
		display:inline-flex;
		float:left;
	}
	li
	{
		padding: 20px;
    font-size: 25px;	
	}
  li a {
    display: block;
    color: white;
    
    padding: 15px 145px;
    font-family: Lucida Calligraphy;
  }

  li a:hover
  {
    background-color:red;
  }
	#a
	{
		border: 2px solid black;
		height: 60px;
		background-color:orange;
	}
</style></head>

<body>
<center><img src="logo.jpg" style="width: 1500px;">
<header style="width: 1500px">
	<div id="a">
		<ul>
		<a href="index.php"><li>Home</li></a>
			<a  class="active" href="aadhar.php"><li>Aadhar Card No.</li></a>
			<a href="ration.php"><li>Ration Card No.</li></a>
			<a href="#"><li>Update Details</li></a>

		</ul>
	</div>
</header>
</center>
<style type="text/css">

input[type=text], input[type=password],input[type=number],input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 15px 280px 15px 0px;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: inset;
}

</style>
<div>
<form method="post" action="aadhar1.php" style="border:50px;">
  <div class="container">
    <font color="black" size="8px" style="font-weight: bold; margin-left: 50px;">
   
   <h1>Aadhar Card No.</h1>
    </font>
    <font color="black" style="font-size: 20px;">
   <table style="padding: 10px;">
    <hr>
<tr>
    <td for="fname"><b>Holder Name</b></td>
    <td><input type="text" placeholder="ABC" name="hname" required>
</td></tr>
<tr>
    <td for="number"><b>Aadhar No. (12 digit)</b></td>
    <td><input type="text" pattern="\d{12}"  placeholder="123" name="no" required></td>
</tr>
<tr><td>
<div style="display: inline; width: 50px; padding: 250px; margin: 15px;">
   <input type="submit" name="sub" value="check">
</div>
</td></tr>

</table>
</font>
</div>
</form>
</div>


<style type="text/css">

footer
{
  background-color: rgba(0,0,0,1);
  margin-top: 0px;
  padding: 10px;
}


.fa {
  border-radius: 50%;
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.4;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}
 #links1{

 font-weight: bold;
  text-decoration: none;
  font-size: 19px;  
  font-family: 'Lithos Pro Regular';
  text-transform:1px 1px; 
  text-transform: uppercase;
  color:white;
  padding: 20px;
  text-shadow: 1px 1px;
 }

 #links
 {
  font-weight: bold;
  text-decoration: none;
  font-size: 22px;  
  font-family: 'Lithos Pro Regular';
  text-transform:1px 1px; 
  text-transform: uppercase;
  color:red;
  padding: 20px;
  text-shadow: 1px 1px;
 }
 #links:hover
 {
    color:white;
 }
 #ul2
 {
  list-style: none;

  margin-top: 30px;
 }




</style>
<footer>
<div style="background-color:black; height: 300px; width: 100%;">
<div class="col-md-12">
</div>
  <div class="col-md-4"><br>  
  <ul id="ul2">
<li><a id="links1" href="house.html">home</a></li>
  <li><a  id="links1" href="About Us.html">About us</a></li>
  <li><a id="links1" href="#">conatct us</a></li>
  <li><a id="links1" href="#">log in</a></li>
  </ul>
  </div>
  <div class="col-md-4"><h3 id="links1" style=" font-size: 24px;  " >&emsp;&emsp;&emsp;Contact Us</h3>
  <pre   style="color:red; text-decoration:none; background-color:rgba(0,0,0,0); border:none; font-weight:bolder; font-size:18px;
  font-family:'Lithos Pro Regular';">
  Email: bhamashah@rajasthan.gov.in
  Landline : 0141-5166227,223,224</pre>
  
   <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
</div>
<div class="col-md-4"><h3 id="links1" style=" font-size: 24px;  " >&emsp;&emsp;&emsp;Address</h3>
 <pre   style="color:red; text-decoration:none; background-color:rgba(0,0,0,0); border:none; font-weight:bolder; font-size:18px;
  font-family:'Lithos Pro Regular';">
  IT Building, Yojana Bhawan Premises, Tilak Marg,<br>
   C-Scheme, Jaipur, Rajasthan India - 302005,
</pre>

</footer>


</body>
</html>