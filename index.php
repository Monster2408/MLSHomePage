<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<meta name="google-site-verification" content="FMHqGUFRwEOW7oMChN9z9-EzW0Scx3IkYDe8Z9fpSLc" />
		<style>

			#text-wrap {
				width: 100%;
				height: 100%;
				display: block;
				margin: 0 auto;
				padding: 40px;
				padding: 0.5em 1em;
				background: #FFF;
				border: solid 3px #F5A9A9;/*線*/
				border-radius: 10px;/*角の丸み*/
			}

			article {
                display: flex;
                margin-bottom: 20px;
                padding: 20px;
                border-radius: 5px;
                box-sizing: border-box;
				box-shadow: 0 0 5px #999;
				width: 100%;
				text-align: left;
			}
            article figure.samune {
                margin-right: 20px;
                width: 80px;
				height: 80px;
				position: relative;
            }
            article figure.samune img {
                min-width: 80px;
                max-width: 100%;
                vertical-align: top;
			}
			article figure.samune p.popular {
				position: absolute;
				top: 0;/*画像の左上に配置*/
				left: 0;
				margin: 0; /*余計な隙間を除く*/
				color: white;/*文字を白に*/
				background: skyblue;/*背景色*/
				font-size: 15px;
				line-height: 1;/*行高は1に*/
				padding: 5px 10px;/*文字周りの余白*/
			}

		</style>
		<title>MonsterLifeServer | ホームページ</title>
	</head>

	<body onload="timer()">
		<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.php"); ?>
		<div class="wrapper">
			<div class="contents">
				<div class="footer-mc">
					<?php
						$url = "https://minecraft.jp/servers/5d51f624a9b0bd7e0e00834e";
						$ch = curl_init($url);
						curl_setopt_array($ch, [
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_FAILONERROR => true,
						]);
						$body = curl_exec($ch);
						$info = curl_getinfo($ch);

						$errno = curl_errno($ch);
						$error = curl_error($ch);
						curl_close($ch);
						if (CURLE_OK == $errno) {
							echo '<a href="https://minecraft.jp/servers/5d51f624a9b0bd7e0e00834e" target="_blank"><img width="100%" src="https://minecraft.jp/servers/5d51f624a9b0bd7e0e00834e/banner/2/560x95.png"/></a>';
						}
					?>
				</div>
				<div class="text_box">
					<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope
							itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/">
								<span itemprop="name">ホーム</span>
							</a>
							<meta itemprop="position" content="1" />
						</li>
					</ol>
					<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/slider.php"); ?>
					<h2 class="design">MLServerとは</h2>
					<p>
						​UUUMネットワーク所属の二人組ゆっくり実況者であるゆっくり夫婦がオーナーを務めるMinecraftJEミニゲーム企画サーバーです。内容は、Minecraftマルチプレイでいろいろなミニゲームなどをするサーバーです。開催日などはDiscordにてお知らせしますが夜にやることが多いです。各ミニゲームのルール、禁止事項などは左のメニューバーからどうぞ。参加は下記を参照してください。
					</p>
					<p>
						また、全てのミニゲームのバージョンはマインクラフト 1.12.2です。
						もしそれ以外のバージョンのミニゲームなどであればdiscordグループにて連絡します。
						放送中には言わない可能性があるのでご注意ください。
					</p>
					<h2 class="design">MLS 稼働時間</h2>
					<p>MLSが始動した日付は 2018/9/10 です。</p>
					<p>その日から <span id="elapsedTime"></span> が経ちました。</p>
					<h2 class="design">最新情報・更新情報</h2>
					
					<div id="text-wrap">

						<?php
							$xml = $_SERVER["DOCUMENT_ROOT"] . "/assets/data/news.xml";//ファイルを指定
							$xmlData = simplexml_load_file($xml);//xmlを読み込む
							$i = 0;
							foreach ($xmlData->blog->item as $data) { 
						?>
						<ul class="newsList">
							<?php

								if ($i === 3) {
									break;
								}

							?>
							<li>
								<?php 
									$i++;
									$text = (string)$data->date;
									if (isNearDate($text)) {
										$text = "<span class='blinking'><span style='color: red;'>New</span></span>" . $text;
									}
									echo $text; 
								?>
							</li>
							<li style="background-color: 
								<?php 
									echo getCategoryColorCode((string)$data->category);
								?>
							;">
								<?php 
									echo $data->category; 
								?>
							</li>
							<li><a href="<?php echo $data->link; ?>"<?php 
								if (strpos($data->link,'mlserver.php.xdomain.jp') === false) {
									echo ' target="_blank"';
								}
							?>><?php echo $data->title; ?></a></li>
						</ul>

						<?php } ?>

						<a href="<?php echo $conf["url"]; ?>/news/">>>> 続きを表示する</a>

					</div>
					
					<h2 class="design" id="notice_under">募金代金や会員（スポンサー）代金の行方</h2>
					<p>
						払われた代金はサーバーの電気代やサーバー機器のグレードアップなどに使われます。
					</p>
					<h2 class="design">MLServerの参加方法</h2>
					<p>
						MLServerに参加するにはDiscordグループに参加する必要がございます。<br>
						※その際に利用規約・ガイドラインを読んでいただく必要がございます。
					</p>
					<h2 class="design">MLServer PV</h2>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/6qZxE2KlNRQ" frameborder="0" allowfullscreen></iframe>
					</div>
					<h2 class="design">MLServerの近況報告をするためのブログ</h2>
					<div align="center">
						<article>
							<figure class="samune">
								<img src="<?php echo $conf["url"]; ?>/assets/img/server-icon.png" alt="サムネイル画像">
							</figure>
							<div class="text_content">
								<p class="text_date"><time datetime="2019-11-10">2019年11月10日</time></p>
								<h2><a href="http://monsterlifeserver.blog.jp" target="_blank">MLServerのブログ</a></h2>
								<p class="text_excerpt">近況報告等をする予定です。</p>
							</div>
						</article>
					</div>
					
					
					<!--<div style="width: 90%; height: auto; margin: 10px auto; padding: 10px; border: 1px solid black; background-color: rgba(255, 255, 255, 0.8); text-align: left; position: relative; z-index: 2;">
						<script type="text/javascript">-->
						<!--
							var blogroll_channel_id = 298809;
						-->
						<!--</script>
						<script type="text/javascript" charset="utf-8" src="<?php echo $conf["url"]; ?>/assets/js/blogroll.js"></script>
						<link rel="stylesheet" type="text/css" href="https://blogroll.livedoor.net/css/default2.css" />	
					</div>-->
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
		<script>
			var elapsedTime = document.getElementById("elapsedTime");


			function Time_exchange() {
				now_time = new Date();
				sec_present = (now_time.getTime()/1000).toFixed(0);
				sec_start = (Date.parse("2018/9/10")/1000).toFixed(0);
				sec_time = sec_present - sec_start;

				sec = sec_time % 60;
				time = (sec_time - sec)/60;
				min = time % 60;
				time = (time - min)/60;
				hour = time % 24;
				time = (time - hour)/24;
				days = time % 365;
				time = (time - days)/365;
				years = time;
				elapsedTime.innerHTML = years + " 年 " + days + " 日 " + hour + " 時間 " + min + " 分 " + sec + " 秒 " ;
			};

			function timer(){
				setInterval(Time_exchange,1000);
			}
		</script>
	</body>
</html>