<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<title>MCIDについて | MonsterLifeServer</title>
		<?php echo $html["common_head"]; ?>
		<style>

		</style>
	</head>
	<body>
		<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.php"); ?>
		<div class="wrapper">
			<div class="contents">
				<div class="text_box">
					<!-- パンくずリスト始 -->
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/faq/">
								<span itemprop="name">よくある質問</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
						<li itemprop="itemListElement" itemscope
							itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/faq/mcid">
								<span itemprop="name">MCIDについて</span>
							</a>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
					<!-- パンくずリスト終 -->

					<!-- ↓↓↓↓↓ ここから本文 ↓↓↓↓↓ -->
					<h1 class="design">MCIDについて</h1>
					<h2 class="design">MCIDとは...</h2>
					<p>当鯖ではMinecraft内で表示されるプレイヤー名をMCIDと記述しています。確認方法はランチャーで確認することが可能です。</p>
					<a href="<?php echo $conf["url"]; ?>/assets/img/mcid_check_launcher.png" data-lightbox="mcid"><img src="<?php echo $conf["url"]; ?>/assets/img/mcid_check_launcher.png" width="100%"></img></a>
					<h2 class="design">認証時のDMから来た人はこちら</h2>
					<p>この度は、ご参加ありがとうございます。</p>
					<p>現在、当鯖ではあなたのMCIDが「MCID」で記録されている可能性がございます。その場合、お手数ですがDiscordで Monster2408#8936 にご連絡ください。連絡がなかった場合24時間経過後にキックされる場合がございます。これは処罰ではないので再参加可能ですが同じことが何度もある場合には迷惑行為として処罰されます。</p>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
