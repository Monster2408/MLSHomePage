<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>
			table.game th {
				background-color: #a2a2a2;
				text-align: center;
				padding: 5px;
			}
			table.game td {
				text-align: center;
				background-color: #ffffff;
				padding: 5px;
			}
			table.game {
				text-align: center;
				background-color: #696969;
				padding: 5px;
			}
		</style>
		<title>青鬼ゲーム6.23 | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/game/aooni">
								<span itemprop="name">青鬼ゲーム6.23</span>
							</a>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
					<div class="game_creator">
						企画作成者：Meary, <a href="https://www.youtube.com/channel/UCWSz32UUYgAzs_hVqKeqq-Q" target="_blank">Monster2408</a>
					</div>						
					<h1 class="design">青鬼ゲーム6.23</h1>
					<img width="100%" src="<?php echo $conf["url"]; ?>/assets/img/_car/aooni.png">
					<h2 class="design">前提</h2>
					<table width="100%" class="game">
						<tr>
							<th width="50%">
								MCVer
							</th>
							<td width="50%">
								1.12.2
							</td>
						</tr>
						<tr>
							<th>
								企画Ver
							</th>
							<td>
								1.3.0
							</td>
						</tr>
						<tr>
							<th>
								最低人数
							</th>
							<td>
								3人
							</td>
						</tr>
					</table>
					<h2 class="design">基本ルール</h2>
					<div class="or_box">
						<ul>
							<li>マップは青鬼ver6.23である。</li>
							<li>ゲーム時間は20分です。</li>
							<li>館は本館、第一別館、第二別館に分かれている。</li>
							<li>本館→第一別館、第一別館→第二別館へは各館内のチェストに感圧板がありそれを設置しなければ開放できない。<br>
								※開放は通知されません。</li>
							<li>ゲーム開始前に青鬼抽選を行われる。</li>
							<li>青鬼抽選に参加したい場合は<code>/oni</code>とすることで参加でき、再度実行で辞退できる。</li>
							<li>ゲーム開始時、逃陣営は館にTPされる。</li>
							<li>ゲーム開始から30秒後、青鬼陣営は館にTPされる。</li>
							<li>ゲーム中、青鬼に殴られると食べられた判定になり、ロビーにTPする。</li>
							<li>ロビーから館に戻るにはアスレをクリアする他ない。<br>
								※予定では一定時間経過などで自動復活を考えているが現在その使用はない。</li>
							<li>アスレはイージーとノーマルがあるが、好きなほうをやるとよい。<br>
								※ノーマルのほうが復活後の透明・俊足時間が若干長くなる。</li>
							<li>復活はアスレクリア先のダイアモンドブロックを右クリックで可能だ。</li>
							<li>館内のチェストにはお肉が入っている。</li>
							<li>館内にはいくつかの木の感圧板があり、そのうちの３つを踏むことで鉱石３種類を取得できる。</li>
							<li>脱出の鍵は鉱石が３種類を持って本館か別館の中に多数存在する作業台を右クリックすることで脱出の鍵と交換できる。<br>
								※この時、作業台が発光してしまうため注意</li>
							<li>脱出は脱出可能時間にならなければできません。</li>
						</ul>
					</div>
					<h2 class="design">禁止・注意事項</h2>
					<div class="or_box">
						<ul>
							<li>青鬼は同じ場所にとどまることはおやめください。</li>
							<li>青鬼抽選には館の間取りを覚えてない人は参加しないでください。</li>
							<li>青鬼抽選は回線の悪い人は参加しないでください。</li>
							<li>企画VerとMapVerは別物です。</li>
							<li>青鬼に見えるスキンの使用はおやめください。</li>
						</ul>
					</div>
					<h2 class="design">専用テクスチャについて</h2>
					<p>
						青鬼ゲーム6.23にはプレイを楽しむための専用テクスチャパックがあります。
						サーバーリソースの読み込みをONにして鯖に参加するとサーバーリソースを適応することができます。
						この時に鯖からキックされる場合はサーバーリソースの読み込みをOFFにして参加することで専用テクスチャパックを使用することはできませんが企画には問題なく参加できます。
						どうしても使用したい場合は<a href="<?php echo $conf["textures"]["aooni"]; ?>" target="_blank">コチラ</a>よりダウンロードし適応することで解消することが可能です。
					</p>
					<h2 class="design">デバッグ動画</h2>
					<div class="or_box">
						<div class="video">
							<iframe src="https://www.youtube.com/embed/XH3MEx5oBIc" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
