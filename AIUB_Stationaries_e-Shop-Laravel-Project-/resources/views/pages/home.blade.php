@extends('layouts.app')
@section('content')
<div class="p-3 mb-2 text-dark" style="background-color: #e3f2fd;">
    <h1>Welcome to our AIUB Stationary Shop</h1>
    <img src={{url('/images/st1.jpg')}} width="1850" height="600" alt="Customer"/><br>
    	<!-- contact us -->

		<br>
		<div class="contact">
		<p align="center"><font face="sans-serif" color="#017bf5" size="5.5" id="contact">CONTACT US</font></p>
        <p align="center"><font face="sans-serif" color="#017bf5" size="3" id="contact">Phone: 0178*******</font></p>
        <p align="center"><font face="sans-serif" color="#017bf5" size="3" id="contact">Address: Dhaka Kuril 1212</font></p>



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
@endsection