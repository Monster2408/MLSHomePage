<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<title>増え鬼ゲーム | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/game/ho">
								<span itemprop="name">増え鬼ゲーム</span>
							</a>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
					<div class="game_creator">
						企画作成者：<a href="https://www.youtube.com/channel/UCWSz32UUYgAzs_hVqKeqq-Q" target="_blank">Monster2408</a>
					</div>						
					<h1 class="design">増え鬼ゲーム</h1>
					<h2 class="design">最低人数</h2>
					<center>５人</center>
					<h2 class="design">各自目標</h2>
					<h2 class="design">鬼側</h2>
					<div class="or_box">
						逃側を全滅させる。
					</div>
					<h2 class="design">逃側</h2>
					<div class="or_box">
						最後まで逃げ切る
					</div>
					<h2 class="design">基本ルール</h2>
					<div class="or_box">
						<ul>
						<li>あらゆるアイテムを駆使して逃走する逃側とそれを阻止して仲間を増やし続ける鬼側の鬼ごっこです。</li>
						<li>鬼の持つ情報端末（本）はスポーンポイントにTPすることができます。</li>
						<li>ゲーム時間は600秒です。</li>
						</ul>
					</div>
					<h2 class="design">禁止・注意事項</h2>
					<div class="or_box">

					</div>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
