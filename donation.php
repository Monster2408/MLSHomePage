<<<<<<< HEAD
<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>
			#acMenu dt ul.ac, #acMenu dd ul.ac {
				list-style-type: none;
			}
			#acMenu dt ul.ac li:before {
				font-family: "Font Awesome 5 Free";
				content: '\f054';
				font-weight: 900;
			}
			#acMenu dt.active ul.ac li:before {
				font-family: "Font Awesome 5 Free";
				content: '\f078';
				font-weight: 900;
			}
		</style>
		<title>寄付制度 | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/donation">
								<span itemprop="name">寄付制度</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<h1 class="design">寄付制度</h1>
					<!-- 目次 -->
						<ul class="mokuji">
							<li><a href="#top">寄付について</a></li>
							<li><a href="#tokuten">寄付特典</a></li>
							<li><a href="#how_to">寄付方法</a></li>
						</ul>
					<!-- 目次 -->
					<h2 class="design" id="top">寄付について</h2>
					<p>
						当鯖は、管理人が学生である非営利団体です。 そのため、運営のための負担が非常に大きい、または金銭面からサーバーが継続が困難になる可能性があります。 大変心苦しいのですが、皆様のご協力をよろしくお願い申し上げます。
					</p>
					<p>
						また、Minecraftの規約・ガイドラインにより寄付者がゲーム上有利になることはありませんが当ページ下部の MonsterLifeServer通帳 より寄付者が確認可能です。
					</p>
					<h2 class="design" id="tokuten">寄付特典</h2>
					<p>500円につき約30日間特典を使用できます。</p>
					<div class="or_box">
						<ul>
							<li>ブロックをかぶるコマンドを追加</li>
							<li>ロビーで飛行可能</li>
							<li>TABリストのMCIDカラー変更</li>
						</ul>
					</div>
					<h2 class="design" id="how_to">寄付方法</h2>
					<dl id="acMenu">
						<dt>
							<ul class="ac">
								<li>
									一つ目　Kyashアプリを使用
								</li>
							</ul>
						</dt>
						<dd>
							<ul class="ac">
								<li>
									<p>クレジットカード・銀行振込・セブン銀行などあらゆる機関から入金ができる バーチャルカードを使用して寄付が可能です。</p>
									<img src="https://pbs.twimg.com/media/EOFq5CzUcAAa2VQ.jpg" width="200px"></img>
								</li>
							</ul>
						</dd>

						<dt>
							<ul class="ac">
								<li>
									二つ目　Amazonギフトカードを使用
								</li>
							</ul>
						</dt>
						<dd>
							<ul class="ac">
								<li>
									<p>コンビニなどで購入可能なAmazonギフトカードを使用して寄付が可能です。寄付時は<span style="color: #5882FA; font-weight: bold;"><i class="fab fa-discord" style="font-weight: 900;">Discord:Monster2408#8936</i></span>, <span style="color: #00BFFF; font-weight: bold;"><i class="fab fa-twitter" style="font-weight: 900;">Twitter:<a style="color: #00BFFF; font-weight: bold;" href="https://twitter.com/MLServer2408" target="_blank">@MLServer2408</a></i></span>のDMにて受け付けています。</p>
								</li>
							</ul>
						</dd>
						
						<dt>
							<ul class="ac">
								<li>
									MonsterLifeServer通帳
								</li>
							</ul>
						</dt>
						<dd>
							<ul class="ac">
								<li>
									<object width="100%" height="1000px" data='https://docs.google.com/spreadsheets/d/e/2PACX-1vTxtRyHPWH3r8O3ER-L6pkZHPNfmksUkmzklCqEsJFbgMgTDhgxERrgebofefJvq0rmsngQsSnvltGV/pubhtml?widget=true&amp;headers=false'>このサイトは現在表示できません。<!-- 埋め込みできない場合の代替データ --></object>
								</li>
							</ul>
						</dd>

					</dl>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
=======
<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>
			#acMenu dt ul.ac, #acMenu dd ul.ac {
				list-style-type: none;
			}
			#acMenu dt ul.ac li:before {
				font-family: "Font Awesome 5 Free";
				content: '\f054';
				font-weight: 900;
			}
			#acMenu dt.active ul.ac li:before {
				font-family: "Font Awesome 5 Free";
				content: '\f078';
				font-weight: 900;
			}
		</style>
		<title>寄付制度 | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/donation">
								<span itemprop="name">寄付制度</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<h1 class="design">寄付制度</h1>
					<!-- 目次 -->
						<ul class="mokuji">
							<li><a href="#top">寄付について</a></li>
							<li><a href="#tokuten">寄付特典</a></li>
							<li><a href="#how_to">寄付方法</a></li>
						</ul>
					<!-- 目次 -->
					<h2 class="design" id="top">寄付について</h2>
					<p>
						当鯖は、管理人が学生である非営利団体です。 そのため、運営のための負担が非常に大きい、または金銭面からサーバーが継続が困難になる可能性があります。 大変心苦しいのですが、皆様のご協力をよろしくお願い申し上げます。
					</p>
					<p>
						また、Minecraftの規約・ガイドラインにより寄付者がゲーム上有利になることはありませんが当ページ下部の MonsterLifeServer通帳 より寄付者が確認可能です。
					</p>
					<h2 class="design" id="tokuten">寄付特典</h2>
					<p>500円につき約30日間特典を使用できます。</p>
					<div class="or_box">
						<ul>
							<li>ブロックをかぶるコマンドを追加</li>
							<li>ロビーで飛行可能</li>
							<li>TABリストのMCIDカラー変更</li>
						</ul>
					</div>
					<h2 class="design" id="how_to">寄付方法</h2>
					<dl id="acMenu">
						<dt>
							<ul class="ac">
								<li>
									一つ目　Kyashアプリを使用
								</li>
							</ul>
						</dt>
						<dd>
							<ul class="ac">
								<li>
									<p>クレジットカード・銀行振込・セブン銀行などあらゆる機関から入金ができる バーチャルカードを使用して寄付が可能です。</p>
									<img src="https://pbs.twimg.com/media/EOFq5CzUcAAa2VQ.jpg" width="200px"></img>
								</li>
							</ul>
						</dd>

						<dt>
							<ul class="ac">
								<li>
									二つ目　Amazonギフトカードを使用
								</li>
							</ul>
						</dt>
						<dd>
							<ul class="ac">
								<li>
									<p>コンビニなどで購入可能なAmazonギフトカードを使用して寄付が可能です。寄付時は<span style="color: #5882FA; font-weight: bold;"><i class="fab fa-discord" style="font-weight: 900;">Discord:Monster2408#8936</i></span>, <span style="color: #00BFFF; font-weight: bold;"><i class="fab fa-twitter" style="font-weight: 900;">Twitter:<a style="color: #00BFFF; font-weight: bold;" href="https://twitter.com/MLServer2408" target="_blank">@MLServer2408</a></i></span>のDMにて受け付けています。</p>
								</li>
							</ul>
						</dd>
						
						<dt>
							<ul class="ac">
								<li>
									MonsterLifeServer通帳
								</li>
							</ul>
						</dt>
						<dd>
							<ul class="ac">
								<li>
									<object width="100%" height="1000px" data='https://docs.google.com/spreadsheets/d/e/2PACX-1vTxtRyHPWH3r8O3ER-L6pkZHPNfmksUkmzklCqEsJFbgMgTDhgxERrgebofefJvq0rmsngQsSnvltGV/pubhtml?widget=true&amp;headers=false'>このサイトは現在表示できません。<!-- 埋め込みできない場合の代替データ --></object>
								</li>
							</ul>
						</dd>

					</dl>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
>>>>>>> b0e70e6dcd736e9a1825497e781df8c51dcadfa6
