<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<title>青鬼ONLINE in MC | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/game/">
								<span itemprop="name">ミニゲーム企画一覧</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
						<li itemprop="itemListElement" itemscope
							itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/game/online">
								<span itemprop="name">青鬼ONLINE in MC</span>
							</a>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
					<div class="game_creator">
						企画作成者：<a href="https://twitter.com/touhouPC" target="_blank">touhouPC</a>
					</div>							
					<h1 class="design">青鬼ONLINE in MC</h1>
					<img width="100%" src="<?php echo $conf["url"]; ?>/assets/img/_car/online.png">
					<h2 class="design">最低人数</h2>
					<div style="text-align: center;">２人</div>
					<h2 class="design">目標</h2>
					<div class="or_box">
						最後の一人になるまで追いかけてくる青鬼から逃げて、青逃を目指す！！
					</div>
					<h2 class="design">基本ルール</h2>
					<div class="or_box">
						<ul>
							<li>制限時間は10分です。</li>
							<li><font color="#0000FF">青鬼</font>に殴られると死にます。</li>
							<li><font color="#0000FF">青鬼</font>を常に近くのプレイヤーをターゲットにします。</li>
							<li><font color="#0000FF">青鬼</font>を素手で殴ることはできません。</li>
							<li>苔石の上に10秒間居ると死にスペクテイターになります。</li>
							<li><font color="#0000FF">青鬼</font>に食べられると死にスペクテイターになります。</li>
							<li>30秒毎に足元のブロックが苔石に変化します。</li>
							<li>10秒後、変化した苔石のどれかに<font color="#0000FF">青鬼</font>が出現します。</li>
							<li>ステージは4秒毎に苔石で覆われます。</li>
							<li>チェストを開けると特殊効果が発動します。</li>
						</ul>
					</div>
					<h2 class="design">禁止・注意事項</h2>
					<div class="or_box">
						<ul>
							<li>あからさまにほかのプレイヤーに青鬼を飛ばすのはやめましょう。</li>
						</ul>
					</div>
					<h2 class="design">効果一覧</h2>
					<img src="<?php echo $conf["url"]; ?>/assets/img/aooni_on_status.png" width="98%"></img>
					<h2 class="design">専用テクスチャについて</h2>
					<p>
						青鬼ONLINE in MCにはプレイを楽しむための専用テクスチャパックがあります。
						サーバーリソースの読み込みをONにして鯖に参加するとサーバーリソースを適応することができます。
						この時に鯖からキックされる場合はサーバーリソースの読み込みをOFFにして参加することで専用テクスチャパックを使用することはできませんが企画には問題なく参加できます。
						どうしても使用したい場合は<a href="<?php echo $conf["textures"]["aooni"]; ?>" target="_blank">コチラ</a>よりダウンロードし適応することで解消することが可能です。
					</p>
					<h2 class="design">プレイ動画</h2>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/_QFLSkD5Y5Y" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
