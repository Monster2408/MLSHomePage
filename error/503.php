<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<title>503 エラー | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/error/503">
								<span itemprop="name">503エラー</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<h1 class="error">503 Service Temporarily Unavailable</h1>
					<h2 class="error"><span class="under">接続に失敗しました。</span></h2>
					<p class="error">申し訳ありません。現在サーバーに集中的にアクセスされ、サーバーがダウンしています。</p>
					<p class="error">お手数ですがしばらくしてからまたアクセスしてください。</p>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
