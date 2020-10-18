<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>
			div.text_box table{
				width: 100%;
			}
			div.text_box td.img{
				width: 30%;
				height: auto;
				background-color: #BDBDBD;
			}
			div.text_box td.description{
				width: 70%;
				height: auto;
				background-color: #BDBDBD;
				padding: 20px;
				vertical-align:top;
			}
			div.text_box td.role{
				width: 70%;
				height: auto;
				background-color: #BDBDBD;
				vertical-align:top;
				padding: 20px;
			}
			div.text_box td.role ul{
				margin-left: 40px;
				margin-top: 20px;
			}
			
			div.text_box h2.list {
				position: relative;
				padding: 0.25em 1em;
				border-top: solid 2px black;
				border-bottom: solid 2px black;
			}
			div.text_box h2.list:before, div.text_box h2.list:after {
				content: '';
				position: absolute;
				top: -7px;
				width: 2px;
				height: -webkit-calc(100% + 14px);
				height: calc(100% + 14px);
				background-color: black;
			}
			div.text_box h2.list:before {
				left: 7px;
			}
			div.text_box h2.list:after {
				right: 7px;
			}
			
			div.text_box td.description p {
				padding: 20px;
			}
			
			/* Owner */
			div.text_box th.owner{
				width: 100%;
				height: 100px;
				text-align: center;
				background-color: #ff0000;
				color: #fff;
				vertical-align: middle;
			}
			
			/* Admin */
			div.text_box th.admin{
				width: 100%;
				height: 100px;
				text-align: center;
				background-color: #40FF00;
				color: #000;
				vertical-align: middle;
			}
			
			/* Op */
			div.text_box th.op{
				width: 100%;
				height: 100px;
				text-align: center;
				background-color: #d4ffb1;
				color: #000;
				vertical-align: middle;
			}
			/* Op */
			div.text_box th.dev{
				width: 100%;
				height: 100px;
				text-align: center;
				background-color: #2583ff;
				color: #000;
				vertical-align: middle;
			}
			
		</style>
		<title>運営陣一覧 | MonsterLifeServer</title>
	</head>

	<body>
		<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.php"); ?>
		<div class="wrapper">
			<div class="contents">
				<div class="text_box">

					<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope
							itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/">
								<span itemprop="name">ホーム</span>
							</a>
							<meta itemprop="position" content="1" />
						</li>

						<li itemprop="itemListElement" itemscope
							itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/admin">
								<span itemprop="name">運営陣一覧</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>

					<h1 class="design">運営陣一覧</h1>
					<!-- 目次 -->
						<ul class="mokuji">
							<li><a href="#top">MLS運営陣制度</a></li>
							<li><a href="#image">運営陣相関図</a></li>
							<li><a href="#list">運営陣一覧</a></li>
						</ul>
					<!-- 目次 -->
					<h2 class="design" id="top">運営陣制度</h2>
					<p>
						当鯖ではオーナーを最高権限者とし、そこから運営、OP、
						その他の役職という順に権限が与えられています。
					</p>
					<p>
						それではその他の役職の方に権限が低いというわけではなく
						役職の掛け持ちが可能となっているため運営であり、
						その他の役職であるという方もいます。
					</p>
					<p>
						ただし、運営とOPの掛け持ちは不可能になっています。
					</p>
					
					<h2 class="design" id="image">運営陣相関図</h2>
					<p>
						<a href="<?php echo $conf["url"]; ?>/assets/img/admin_group.png" data-lightbox="admin_group"><img src="<?php echo $conf["url"]; ?>/assets/img/admin_group.png" width="100%"></img></a>
					</p>

					<h2 class="design" id="list">運営陣一覧</h2>
						<table border="1">
							<tr>
								<th colspan="2" class="owner">
									<h1>
										Monster2408<br>
										(モンスター)
									</h1>
								</th>
							</tr>
							<tr>
								<td class="img">
									<a href="https://minotar.net/armor/body/1c2b6991e8ce4e5db4d8ec3f0cdc5f8e" data-lightbox="admin">
										<img src="https://minotar.net/armor/body/1c2b6991e8ce4e5db4d8ec3f0cdc5f8e" width="100%">
									</a>
								</td>
								<td class="role">
									<h2 class="list">役職</h2>
									<ul>
										<li>オーナー</li>
										<li>開発者</li>
										<li>何かしら鯖主</li>
										<li>動画編集者</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="description">
									<h2 class="list">紹介</h2>
									<p>
										UUUMネットワーク所属の『ゆっくり夫婦』の１人。<br>
										MonsterLifeServerのオーナーでホームページ、サーバーなど、あらゆる管理をしている。（人手不足・・・）
									</p>
								</td>
							</tr>
							
							<tr>
								<th colspan="2" class="owner">
									<h1>
										NAGISA<br>
										(なぎさ)
									</h1>
								</th>
							</tr>
							<tr>
								<td class="img">
									<a href="<?php echo $conf["url"]; ?>/assets/img/nagisa.png" data-lightbox="admin">
										<img src="<?php echo $conf["url"]; ?>/assets/img/nagisa.png" width="100%">
									</a>
								</td>
								<td class="role">
									<h2 class="list">役職</h2>
									<ul>
										<li>オーナー</li>
										<li>経理</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="description">
									<h2 class="list">紹介</h2>
									<p>
										UUUMネットワーク所属の『ゆっくり夫婦』の１人。<br>
										MonsterLifeServerの経理担当。Monsterに連絡がすぐ取れる人間。<br>
										※運営人で唯一Minecraftをやっていない。
									</p>
								</td>
							</tr>
													
							<tr>
								<th colspan="2" class="admin">
									<h1>
										Ginger_Ale10<br>
										(ぎんぎん)
									</h1>
								</th>
							</tr>
							<tr>
								<td class="img">
									<a href="https://minotar.net/armor/body/95593263edef4f07a6bbefd7a05e2652" data-lightbox="admin">
										<img src="https://minotar.net/armor/body/95593263edef4f07a6bbefd7a05e2652" width="100%">
									</a>
								</td>
								<td class="role">
									<h2 class="list">役職</h2>
									<ul>
										<li>運営</li>
										<li>24H鯖主</li>
										<li>企画鯖主</li>
										<li>動画編集者</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="description">
									<h2 class="list">紹介</h2>
									<p>
										MonsterLifeServerの元OPでよく企画のためにサーバーを立ててくれる。<br>
										ぎんぎんっていうのはオーナーMonsterが勝手につけた愛称
									</p>
								</td>
							</tr>
																				
							<tr>
								<th colspan="2" class="op">
									<h1>
										RYOAIKAWA<br>
										(あいかわさん)
									</h1>
								</th>
							</tr>
							<tr>
								<td class="img">
									<a href="https://minotar.net/armor/body/27806419703d4d90945a33a63e1cb8ae" data-lightbox="admin">
										<img src="https://minotar.net/armor/body/27806419703d4d90945a33a63e1cb8ae" width="100%">
									</a>
								</td>
								<td class="role">
									<h2 class="list">役職</h2>
									<ul>
										<li>OP</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="description">
									<h2 class="list">紹介</h2>
									<p>
										かわいいスキン・・・<br>
										いろははかわいいよね・・・<br>
										あ、話がずれた・・・<br>
										建築がとてもうまい人です！！<br>
										※現在活動縮小中
									</p>
								</td>
							</tr>

							<tr>
								<th colspan="2" class="dev">
									<h1>
										meary0304<br>
										(メアリー)
									</h1>
								</th>
							</tr>
							<tr>
								<td class="img">
									<a href="<?php echo $conf["url"]; ?>/assets/img/meary.png" data-lightbox="dev">
										<img src="<?php echo $conf["url"]; ?>/assets/img/meary.png" width="100%">
									</a>
								</td>
								<td class="role">
									<h2 class="list">役職</h2>
									<ul>
										<li>開発者（Skript）</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="description">
									<h2 class="list">紹介</h2>
									<p>
										Skript開発者で企画の大半を整備管理している。									
									</p>
								</td>
							</tr>
						</table>


				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>