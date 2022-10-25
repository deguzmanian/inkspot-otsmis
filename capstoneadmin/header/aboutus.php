<br />
<br />
<br />
<section class="fdes">
		<div class="about-us">
			<h2 class="about" style="text-align:center; font-weight: bold">ABOUT US</h2>
		</div>
		<div class="descrip">
			<img src="images/ink.png" class="center">
			<p class="des" style="font-family: 'Poppins', sans-serif; text-align:center; padding-left: 7%; padding-right:7%";>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. 

Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit.  </p>
		</div>

<div class="container5">
		<h1> our team</h1>
		<div class="row">
			<div class="col-sm-3">
				<div class="single-team">
					<div class="team-img one">
						<div class="img-area">
							<img src="header/mich.jpeg" width="370px" height="250px" >
						</div>
					</div>
					<div class="team-text">
						<h2>Michelle Mae Celorico</h2>
						<h4>Programmer</h4>
						<p>Develop the Backend and Frontend of the application.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="single-team">
					<div class="team-img two">
						<div class="img-area">
							<img src="header/alfred.jpg" width="370px" height="250px" >
						</div>
					</div>
					<div class="team-text">
						<h2>John Alfred Borerros</h2>
						<h4>Programmer</h4>
						<p>Develop the Backend and Frontend of the application.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="single-team">
					<div class="team-img three">
						<div class="img-area">
							<img src="header/majo.jpg" width="390px" height="250px" >
						</div>
					</div>
					<div class="team-text">
						<h2>Marjorie Carter</h2>
						<h4>Documentation</h4>
						<p>Document the progress of the application.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="single-team">
					<div class="team-img three">
						<div class="img-area">
							<img src="header/erika.jpg" width="390px" height="250px" >
						</div>
					</div>
					<div class="team-text">
						<h2>Erika Cate Dela Cruz</h2>
						<h4>Documentation</h4>
						<p>Document the progress of the application.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
		body{
			font-family: 'Poppins', sans-serif;
		}
		.center
		 {
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 10%;
		}
		.about-us h2
		{
			font-size: 40px;
			text-align: center;
			text-transform: uppercase;
			margin-bottom: 40px;
			font-weight: bold;
			color: #826F66;
		}
		.header10
		{
			text-align: center;
		}
		p
		{
			text-align: center;
		}
		body {
			background: #ececec;
			font-family: poppins;
		}
		.container5 h1 {
			font-size: 40px;
			text-align: center;
			text-transform: uppercase;
			margin-bottom: 40px;
			font-weight: bold;
			color: #826F66;
		}
		.container5 {
			padding-top: 8%;
			padding-left: 3%;
			padding-right: 3%;
		}
		.single-team {
			position: relative;
			overflow: hidden;
			margin-bottom: 10px;
			perspective: 1000px;
			-webkit-perspective: 1000px;
		}
		.team-img {
			width: 100%;
			height: 250px;
			padding: 20px;
			text-align: center;
			transition: all .5s ease;
		}
		.one {
			background-image: url(img/1.jpg);
			-webkit-background-size: cover;
			background-size: cover;
			background-position: center center;
		}
		.two {
			background-image: url(img/2.jpg);
			-webkit-background-size: cover;
			background-size: cover;
			background-position: center center;
		}
		.three {
			background-image: url(img/3.jpg);
			-webkit-background-size: cover;
			background-size: cover;
			background-position: center center;
		}
		.team-text {
			position: absolute;
			width: 100%;
			height: 250px;
			padding: 20px;
			text-align: center;
			transition: all .5s ease;
			top: 0;
			left: 0;
			z-index: 1;
			opacity: 0;
			background-color: #BB9981;
		
			backface-visibility: hidden;
			transform-style: preserve-3d;
			transform: translateX(110px) rotateY(-90deg);
			color: #534340;
		}
		.team-text h2 {
			text-transform: uppercase;
			font-weight: 700;
		}
		.team-text h4 {
			text-transform: uppercase;
			letter-spacing: 2px;
			font-weight: 300;
		}
		.team-text p {
			line-height: 2;
		}
		.img-area {
			position: relative;
			left: 100px;
			top: 0;
			transform: translateX(-50%);
		}
		.single-team:hover .team-img {
			opacity: 0;
			transform: translateX(-110px) rotateY(90deg);
		}
		.single-team:hover .team-text {
			opacity: 1;
			transform: rotateY(0);
		}

	</style>