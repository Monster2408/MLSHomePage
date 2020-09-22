<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>
			#acMenu dt ul {
				list-style-image: url(<?php echo $conf["url"]; ?>/assets/img/q.png);
			}
			#acMenu dd ul {
				list-style-image: url(<?php echo $conf["url"]; ?>/assets/img/a.png);
			}
		</style>
		<title>よくある質問 | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/faq">
								<span itemprop="name">よくある質問</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<h1 class="design">よくある質問</h1>
					<dl id="acMenu">
						<dt>
							<ul>
								<li>処罰基準は何ですか？</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
									処罰の基準は「これ！！」というものはすべてにはございません。参考程度に過去の処罰例や注意例を下記に掲載しています。
									<ul class="list">
										<li>MCIDとスキンが有名実況者に似ている、または同じである。</li>
										<li>権限クレクレ</li>
										<li>スパム</li>
										<li>ALTアカウントの所持</li>
										<li>
											Hackなどの使用<br>
											<div style="text-align: right;">etc...</div>
											<div style="text-align: right;">※この処罰基準は一部です。</div>
										</li>
									</ul>
								</li>
							</ul>
						</dd>

						<dt>
							<ul>
								<li>
									サーバーIPはなにですか？
								</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
									<a href="https://discord.gg/gaGB6Mm" target="_blank">Discordグループ</a>に参加して認証するとサーバーIPの書いたチャンネルを見ることができます。
								</li>
							</ul>
						</dd>

						<dt>
							<ul>
								<li>
									サーバーに入ろうとすると画像のような表示が出て入れない。
								</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
									<a href="https://discord.gg/gaGB6Mm" target="_blank">Discordグループ</a>に参加してい場合や認証していない場合にはサーバーに接続できなくなります。<br>
									また、誤認証（MCIDが間違っているなど）でもサーバーに接続ができなくなっています。その場合に関する対応は<a href="<?php echo $conf["url"]; ?>/faq/mcid">コチラ</a>をご覧ください。
								</li>
								<img src="<?php echo $conf["url"]; ?>/assets/img/dis_kick.png" width="100%"></img>
							</ul>
						</dd>

						<dt>
							<ul>
								<li>
									それでもサーバーに接続できません
								</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
									上の項目でもなく入れないのであればバージョンが間違っているかエディションが間違っているなどが考えられます。
									バージョンは1.12.2です。エディションはJavaEditionで（PC）です。統合版（PSやスマホWin10など）ではございません。
								</li>
							</ul>
						</dd>

						<dt>
							<ul>
								<li>
									Discordにアクセスできない
								</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
								<a href="<?php echo $conf["url"]; ?>/ban">BANユーザー一覧</a>に自分が載っていないのにアクセスできない場合は<a href="https://twitter.com/mlserver2408">MLS公式アカウント</a>にDMでご連絡ください。気づき次第対応いたします。
								</li>
							</ul>
						</dd>

						<dt>
							<ul>
								<li>
									サーバーバージョンを教えてください
								</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
									あらゆる場所に書いていますが、基本は<u>1.12.2</u>です。<br>
									※それ以外の場合はそのたびに通知します。
								</li>
							</ul>
						</dd>

						<dt>
							<ul>
								<li>
									作ったものがなくなりました
								</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
									サーバールールなどに従い、撤去・移動されたかと思われます。荒らしの可能性もあるかもしれませんので<a href="<?php echo $conf["url"]; ?>/24h">オープンサーバー</a>ページを使用してご確認ください。<br>
									※移動の場合はできるだけ伝えるようにします。
								</li>
							</ul>
						</dd>

						<dt>
							<ul>
								<li>
									迷子になった場合どうしたらいいですか？
								</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
								オープンサーバーではサイドバーに座標を表示しています。そちらで座標を保存しておくか、<code>/mls home set</code>で保存した座標に<code>/mls home tp</code>でテレポートすることが可能です。
								</li>
							</ul>
						</dd>

						<dt>
							<ul>
								<li>
									TNTRUNで遊べません
								</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
									TNTRUNは2人以上のプレイヤーがいる必要がございます。
								</li>
							</ul>
						</dd>

						<dt>
							<ul>
								<li>
									ホームページの○○部分が見づらいです。
								</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
									ホームページ下部のお問い合わせフォームにてご連絡いただけるとありがたいです。
								</li>
							</ul>
						</dd>

						<dt>
							<ul>
								<li>
									お問い合わせはどのような方法がありますか？
								</li>
							</ul>
						</dt>
						<dd>
							<ul>
								<li>
									ホームページ下部のお問い合わせフォームや公式Twitter（@MLServer2408）、<a href="<?php echo $conf["url"]; ?>/monsterbox/bot">MonsterBOT</a>のDM、Discordグループから可能です。
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
