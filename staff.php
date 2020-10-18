<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>

		</style>
		<title>スタッフ募集 | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/staff">
								<span itemprop="name">スタッフ募集</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<h1 class="design">スタッフ募集</h1>
					<h2 class="design">スタッフ募集について</h2>
					<h3>応募資格</h3>
					<div class="or_box">
						<ul>
							<li>中学２年生以上</li>
							<li>頻繁に浮上できること</li>
							<li>
								声を面接時に出せること<br>
								※面接 = ちょっとした会話
							</li>
							<li>一般常識があること</li>
							<li>
								Discord/MinecraftJEを持っていること<br>
								※一部役職はMinecraftJEを持っていなくてもよい
							</li>
							<div style="text-align: right;">以上の項目にあてはまっていれば応募はできます</div>
						</ul>
					</div>
					<h2 class="design">応募方法</h2>
					<p><a href="<?php echo $conf["url"]; ?>/form/staff">コチラ</a>からご応募ください。
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
