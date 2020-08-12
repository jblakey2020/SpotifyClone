<?php
include("includes/config.php");
if(isset($_SESSION['userLoggedIn'])){
	$userLoginIn = $_SESSION['userLoggedIn'];
}else{
	header("Location: register.php");
}


?>


<html>
<head>
	<title>Welcome to Slotify!</title>
	<link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
	<div class="MainContainer">
		<div class="TopContainer">
			<div id="NavBarContainer">
				<nav class="navBar">
					<!-- navigation website go here -->
					<a href="index.php" class="logo">
						<img src="assets/img/icons/icons8-home.png" alt="">
					</a>
					<div class="group">
						<div class="NavItem">
							<a href="search.php" class="NavItemLink">Search</a>
							<img src="assets/img/icons/icons8-search.png" alt="search">
						</div>

					</div>
					<div class="group">
					<div class="NavItem">
							<a href="browse.php" class="NavItemLink">Bowse</a>
						</div>
						<div class="NavItem">
							<a href="YourMusic.php" class="NavItemLink">Your Music</a>
						</div>
						<div class="NavItem">
							<a href="profile.php" class="NavItemLink">Justin Blakey</a>
						</div>
						
						
					</div>

				</nav>

			</div>


		</div>
	<div id="nowPlayingBarContainer">
	<div id="nowPlayingBar">
		<div id="nowPlayingLeft">
			<div class="content">
				<span class="albumLink">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAjVBMVEX//wAAl/4AywD+AAAAAAAAACAnd7AICQsODAvR0k3+/xP//AAvAAAKCwkAEADxBwalGRkplCkKxQsACwkLAADaBAUEg9wAAAsErwULAA/c3AQJl/UAzgDOCQiJGBgSBQkkhSMKsgAAEAkKDQUUABAPCRYLBxoMEgkHDBQKgtIjaYwGCBe3szvf1BDZ3AkcHEXCAAABWUlEQVR4nO3PW1bCQBQAwRHBicrgI1EIRgPE+ELd//LMIjzXD6s30KfSaVxX18tcVje3s9ASISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISHhrwq7btbFle7ienxa9nm120zt95uoUh3Yoa7K0PRt2/fPbVSpBDaML7lqxjyUoQ6bpiquMpR1GV5Lld+OY44qNZH1E24dXLqP6/1jcTzMP7+231PbqNJJXA9ni1zNzy9SbH8hvCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQk/C/CH1zB1grs7czYAAAAAElFTkSuQmCC" class="albumArtwork" alt="">

				</span>
				<div class="trackInfo">
					<span class="trackName">
						<span>Happy Dance</span>
					</span>
					<span class="artistName">
						<span>Justin Blakey</span>
					</span>
				</div>
			</div>

		</div>
		<div id="nowPlayingCenter">
			
			<div class="content playerControls">
				<div class="buttons">
					<button class="controlButton shuffle" title="ShuffleButton">
					<img src="assets/img/icons/icons8-shuffle.png" alt="Shuffle">


					</button>
					<button class="controlButton previous" title="previous">
					<img src="assets/img/icons/icons8-sort_left.png" alt="previous">


					</button>
					<button class="controlButton next" title="next">
					<img src="assets/img/icons/icons8-sort_right.png" alt="next">


					</button>
					<button class="controlButton pause" title="pause">
					<img src="assets/img/icons/icons8-pause 2.png" alt="pause">


					</button>
					<button class="controlButton play" title="play">
					<img src="assets/img/icons/icons8-play.png" alt="play">


					</button>
					


				</div>

				<div class="playbackBar">

				<span class="progressTime current">0.00</span>
				<div class="progressBar">
					<div class="progressBarBG">
						<div class="progress"></div>
					</div>
				</div>
				<span class="progressTime remaining">0.00</span>





				</div>

			</div>
			
		</div>
		<div id="nowPlayingRight">
			<div class="volumeBar">
				<button class="controlButton volume" title="Volume Button">
					<img src="assets/img/icons/icons8-sound.png" alt="volume">
				</button>
				<div class="progressBar">
				<div class="progressBarBG">
						<div class="progress"></div>
					</div>

				</div>

			</div>
			
		</div>

	</div>



</div>

	</div>

	
</body>

</html>