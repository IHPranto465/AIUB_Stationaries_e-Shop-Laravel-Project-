@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    
	<link rel="stylesheet" href="css/home.css">
	<meta charset="utf-8">
	<title>
		STATIONARY E-SHOP
	</title>
</head>
<body>
	


<h1 align="center">
				<font face="sans-serif" color="#2980b9" size="7">
				WELCOME TO THE AIUB STATIONARY E-SHOP
				</font>
			</h1>
			
			<br />
			<div class="start_shop" align="center">
				<p><b><a href="views/login.php"><font face="sans-serif" size="6" color="Black" >START TO ORDER</font></a></b></p>
			</div>
		</div>

		
		<br>
		<div class="photos" id="about">
			<hr color="#A9A9A9" width="20%">
				<p align="center"><font face="sans-serif" color="#2c3e50" size="5.5">PHOTOS OF THE GROUP MEMBERS</font></p>
			<hr color="#A9A9A9" width="20%">
			<br><br>
			<table align="center" cellspacing="10" cellpadding="15">
				<tr>
					<td>
                        <img src={{url('/images/img1.jpg')}} width="300" height="200" alt="Customer"/><br>
                        <font face="sans-serif" color="#2980b9" size="7">
				--Customer--
				</font>

					</td>
					<td>
                    <img src={{url('/images/img2.jpg')}} width="300" height="200" alt="Admin"/><br>
                    <font face="sans-serif" color="#2980b9" size="7">
				--Admin--
				</font>
					</td>
					<td>
                    <img src={{url('/images/img3.jpg')}} width="300" height="200" alt="Vendor"/><br>
                    <font face="sans-serif" color="#2980b9" size="7">
				--Vendor--
				</font>
					</td>
				</tr>
				<tr>
					<td>
                    <img src={{url('/images/img4.jpg')}} width="300" height="200" alt="Manager"/><br>
                    <font face="sans-serif" color="#2980b9" size="7">
				--Seller--
				</font>
					</td>
					<td>
                    <img src={{url('/images/img5.jpg')}} width="300" height="200" alt="Delivery man"/>
                    <br>
                    <font face="sans-serif" color="#2980b9" size="7">
				--Delivery Man--
				</font>
					</td>
					
				</tr>
				<tr>
					<th colspan="1" rowspan="2"><a href="#">LOAD MORE</a></th>
				</tr>
			</table>
		</div>

		<!-- contact us -->

		<br>
		<div class="contact">
		<p align="center"><font face="sans-serif" color="#017bf5" size="5.5" id="contact">CONTACT US</font></p>

		<table align="center" cellspacing="10" cellpadding="15">
				<tr>
					<td>
						<a href="https://www.facebook.com" target="_blank">
                        <img src={{url('/images/fb.jpg')}} width="50" height="50" alt="Delivery man"/>

						</a>
					</td>
					<td>
						<a href="https://www.instagram.com" target="_blank">
                        <img src={{url('/images/insta.jpg')}} width="50" height="50" alt="Delivery man"/>
						</a>
					</td>
					<td>
						<a href="https://www.youtube.com" target="_blank">
                        <img src={{url('/images/yt.jpg')}} width="50" height="50" alt="Delivery man"/>
						</a>
					</td>
					<td>
						<a href="https://www.twitter.com" target="_blank">
                        <img src={{url('/images/twitter.jpg')}} width="50" height="50" alt="Delivery man"/>
						</a>
					</td>
				</tr>
			</table>

		</div>
		<br><br><br><br><br>
		<hr color="#000">
		<p align="center">
			<a href="home.php"><font face="sans-serif" size="4" color="#f00">AIUB Stationaries</font></a>
		</p>
		<p align="center">
			<font face="sans-serif" size="2" color="#000">
			
			</font>
		</p>
</body>
</html>
@endsection