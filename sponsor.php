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
		<title>会員（スポンサー）制</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/sponsor">
								<span itemprop="name">会員（スポンサー）制</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<h1 class="design">会員（スポンサー）制</h1>
					<h2 class="design">会員（スポンサー）制について</h2>
					<p>
						MonsterLifeServerでは会員（スポンサー）制を採用しています。
						会員（スポンサー）になると特典が付与されます。
						会員（スポンサー）には主に二つの方法でなることができます。
					</p>
					<dl id="acMenu">
						<dt>
							<ul class="ac">
								<li>
									一つ目　申請フォームから申請する。
								</li>
							</ul>
						</dt>
						<dd>
							<ul class="ac">
								<li>
									<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSchGaIAXCqH3fS7QIN_ktrtjXyPdNKqL8l4O0FUL7P_RhQ9tA/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
								</li>
							</ul>
						</dd>

						<dt>
							<ul class="ac">
								<li>
									二つ目　Discordグループから申請する。
								</li>
							</ul>
						</dt>
						<dd>
							<ol>
								<li>
									<a href="pl_help">MLSが困っています</a>に書いてある内容を確認する。<br>
								</li>
								<li>
									解決できる内容があれば、番号を指定してDiscordで Monster2408#8936 にDMを送ってください。<br>
								</li>
								<li>
									オーナー ・ 運営 のだれかから指示されると思うので、指示に従ってください。 <br>
								</li>
								<li>
									無事に解決できたら１か月間 会員（スポンサー） になれます。
								</li>
							</ol>
						</dd>
					</dl>
					<h2 class="design">会員（スポンサー）の特典</h2>
					<div class="or_box">
						<ul>
							<li>TweetをMLSグループに自動で流す</li>
							<li>あなたのYouTubeチャンネルで動画投稿をすると通知をDiscordグループで可能</li>
							<li>
								オープンサーバーでの定期メッセージを非表示にできる<br>
								<div style="text-align: right;">etc...</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
