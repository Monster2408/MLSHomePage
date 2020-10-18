<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>
			#checbox {
				width:80%;
				border:1px solid #c0c0c0;
				list-style: none;
				padding: 0 0 0 0;
				margin-left: 10px;
			}
			 
			#checbox li {
				position:relative;
				border-bottom:1px solid #c0c0c0;
			}
			 
			#checbox li:last-child {
				border-bottom:none;
			}
			 
			#checbox li input[type="checkbox"] {
				display:none;
			}
			 
			#checbox li label {
				display: block;
				padding: 10px 10px 10px 40px;
				cursor: pointer;
				text-align: left;
			}
			 
			#checbox li label:after {
				content: "";
				width: 30px;
				height: 30px;
				background-size: 30px;
				background-image: url(http://www.poroanet.com/img/blog/c_off.gif);
				background-repeat: no-repeat;
				position: absolute;
				top: 50%;
				margin: -18px 0 0 0;
				left: 5px;
			}
			 
			#checbox li input[type="checkbox"]:checked + label {
				background-color:#060;
				color:#fff;
				
			}
			 
			#checbox li input[type="checkbox"]:checked + label:after {
				background-image:url(http://www.poroanet.com/img/blog/c_on.gif);
			}
			
			div.course h2 {
				font-size: 20px;
			}
			
			div.course {
				overflow: hidden;
				margin-bottom: 10px;
			}
			
			div.course div.box1 {
				float: left;
				margin-right: 20px;
				margin-bottom: 10px;
				padding: 20px;
				width: 300px;
				background: #F78181;
				border-radius: 10px;
			}
			
			div.course div.box2 {
				float: left;
				padding: 20px;
				width: 300px;
				background: #58ACFA;
				border-radius: 10px;
			}
		</style>
		<title>問題解決・解消・改善 | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/problem">
								<span itemprop="name">問題解決・解消・改善</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<h1 class="design">問題解決・解消・改善</h1>
					<ul class="mokuji">
						<li><a href="#top">前提</a></li>
						<li><a href="#preparation">依頼の前に</a></li>
						<li><a href="#condition">依頼時の条件</a></li>
						<li><a href="#ex">間違った依頼例と正しい依頼例</a></li>
					</ul>				
					<h2 class="design" id="top">前提</h2>
					<p>
						MonsterLifeServer（以下、当鯖）では、現在の問題を改善するべく参加者（以下、鯖民）から改善依頼を受け付けています。
					</p>
					<p>
						問題点があり改善を依頼する場合は、一定の条件を満たしている必要がございます。<br>
						※詳しくは<a href="#condition">依頼時の条件</a>を参照
					</p>
					<h2 class="design" id="preparation">依頼の前に</h2>
					<p>
						以下の<a href="#condition">依頼時の条件</a>のチェックリストを使用して依頼条件を達しているのかをしっかり確認してください。
					</p>
					<p>
						場合によっては悪質な行為、悪口による雰囲気を害する行為とし罰せられることがございます。<br>
						※チェックリストを満たしているのであればそのようなことはございません。
					</p>
					<h2 class="design" id="condition">依頼時の条件</h2>
					<ul id="checbox">
						<li>
							<input type="checkbox" name="" value="" id="1">
							<label for="1">具体的な解決案がある。</label>
						</li>
						<li>
							<input type="checkbox" name="" value="" id="2">
							<label for="2">
								問題解決が鯖民の大半のためとなっているか。<br>
								（自分のためだけに改善依頼をしていないか）
							</label>
						</li>
						<li>
							<input type="checkbox" name="" value="" id="3">
							<label for="3">その問題と思われるシステムの存在理由がある場合それを理解している。</label>
						</li>
						<li>
							<input type="checkbox" name="" value="" id="4">
							<label for="4">その問題と思われるシステムの存在理由がある場合それを解決できる案がある。</label>
						</li>
					</ul>
					<!-- 
						間違った依頼例と正しい依頼例
					-->
					<h2 class="design" id="ex">間違った依頼例と正しい依頼例</h2>
					<div class="course">
						<div class="box1">
							<h2>間違った例</h2>
							<p>
								「好き勝手にルールいじれていやなら鯖を去れという」記述、発言が鯖民を軽く見すぎている。<br>
								そんなのはだめだと思います！！
							</p>
							<div style="text-align: right;">
								<p>
									過去にあった間違えた例
								</p>
							</div>
						</div>
						<div class="box2">
							<h2>正しい例</h2>
							<p>
								「好き勝手にルールいじれていやなら鯖を去れという」記述、発言が鯖民を軽く見すぎている。<br>
								そのため、ルールを変更する際にいくつの手順を踏む必要がある。
								などの条件を満たした際に変更できるなどがいいと思います。
							</p>
							<div style="text-align: right;">
								<p>
									運営会議で出た草案
								</p>
							</div>
						</div>
					</div>
					<div class="course">
						<div class="box1">
							<h2>間違った例</h2>
							<p>
								「処罰するよ」が軽い。だめだと思う。
							</p>
							<div style="text-align: right;">
								<p>
									過去にあった間違えた例
								</p>
							</div>
						</div>
						<div class="box2">
							<h2>正しい例</h2>
							<p>
								「処罰するよ」が軽い。警告なのはわかるけどもう少し言い方を変えるなどがいいと思います。
							</p>
							<div style="text-align: right;">
								<p>
									運営会議で出たこういう言い方だと理解できるよね・・・ってやつ。
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
