<nav class="side_menu">
	<div class="side_body">
		<span id="sidenav_close"></span>
		<h1 class="side_logo">Ispeech 愛聽講</h1>
	    <div class="search-box">
            <input placeholder="點這裡搜尋演講..">
            <span class="icon glyphicon glyphicon-search"></span>
        </div>
		<div class="user_welcome">
			<p>Hi,</p>
			<span class="login_user_name"><?=$this->login_user_name?></span>
			<img class="nav_logo" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc3/t1.0-1/p50x50/10314011_10202684084237605_1762184246269689844_t.jpg" >
		</div>
		<p class="side-use">在 Ispeech 中你將可以自定義標籤，提供給你有收藏的文章，以便日後尋找。</p>
		<ul class="">
			<li>
				<a href="/ispeech_feature/pages/tag.php">
				管理標簽
				<span class="badge">14</span>
				</a>
			</li>
			<li>
				<a href="/ispeech_feature/pages/box.php">
				查看收藏文章
				<span class="badge">14</span>
				</a>
			</li>
<!-- 			<li>
				<a href="/ispeech_feature/pages/user.php">
				基本資料設定
				</a>
			</li> -->
			<li>
				<a id="translateLink">
					簡繁互換
				</a>
			</li>
			<li>
				<a href="/ispeech_feature/pages/logout.php">
				登出
				</a>
			</li>
		</ul>
		<p class="side-use quote">No one saves us but ourselves. No one can and no one may. We ourselves must walk the path. - Buddha</p>
	</div>
</nav>