<div class="container-fluid">
		<div class="wrapper-inner">
			<div class="box-wrapper">
				<div class="box">
					<div class="avatar">
						<img src="http://remtsoy.com/experiments/user_card/img/avatar.jpg">
					</div>
					<div class="box-inner">
						<h3 class="name"><?= $userdetail['0']['fname']." ".$userdetail['0']['lname']?></h3>
						<h4 class="occupation"><?= $userdetail['0']['status']?></h4>
						<p class="location"><i class="fa fa-map-marker"></i>Yogyakarta</p>
						<h3 class="followers-title">"<?= $userdetail['0']['info']?>"</h3>
						
					</div>
					<ul class="social-list">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-dribbble"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-pinterest"></a></li>
						<li><a href="#" class="fa fa-linkedin"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>