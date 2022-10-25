
<div id="container25">
		<div class="box13">
			<h1 style="color: #826F66; font-weight: bold"> Services</h1>
			<div class="Servicecards">
			<article class="servcard">
					<div class="sImg">
						<img src="images/tattooink.png" width="100px" height="100px">
					</div>
					<div class="scard-content">
						<h2>Tattoo</h2>
					</div>
				</article>
				<article class="servcard">
					<div class="sImg">
						<img src="images/piercing.jpg" width="100px" height="100px">
					</div>
					<div class="scard-content">
						<h2>Piercings</h2>
					</div>
				</article>
				<article class="servcard">
				<div class="sImg">
						<img src="images/jewelry.jpg" width="100px" height="100px">
					</div>
					<div class="scard-content">
						<h2> Body Jewelry</h2>
					</div>
				</article>
			
				<article class="servcard">
				<div class="sImg">
						<img src="images/cosmetic.jpg" width="100px" height="100px">
					</div>
					<div class="scard-content">
						<h2>Cosmetic Tattoo</h2>
					</div>
				</article>
			</div>
		</div>
	</div>

	<script>
	           const tilt = $('.card').tilt({
	               scale:1.01,
	               glare: true,
	               maxGlare: .5
	           });
	</script>
	
	<style>
		* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
body {
	background: url(1.jpg);
	color: #3d3935;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	font-family: 'Montserrat', sans-serif;
}
#container25 {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 100vh;
}
.box13 {
	width: 100%;
	max-width: 1170px;
	padding: 15px;
}
.box13 h1 {
	margin: 30px 0;
	color: black;
	font-size: 35px;
	text-align: center;
	text-transform: uppercase;
}
.Servicecards {
	display: flex;
	justify-content: space-between;
	width: 80%;
	margin-left:10%;
	height:50%;
	text-align: center;
}
.servcard {
	width: 30%;
	padding: 20px 20px;
	border-radius: 3px;
	transition: transform .3s;
	backdrop-filter: blur(30px);
	border: 2px solid rgb(177,170,170);

}
.scard-content {
	
}
.scard-content h2 {
	text-transform: uppercase;
	font-size: 20px;
	font-weight: 700;
	margin-bottom: 10px;
}
.scard-content p {
	font-size: 14px;
	line-height: 1.9;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	#container25 {
		height: auto;
	}
	.box13 {
		padding: 20px;
	}
	.servecard {
		width: 100%;
		margin-bottom: 30px;
	}
}
@media only screen and (max-width: 767px) {
	.box13 h1 {
		font-size: 1.5rem
	}
	.Servicecards {
		justify-content: center;
	}
	.servecard {
		margin-bottom: 20px;
		width: 100%;
	}
}

	</style>