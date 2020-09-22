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
		<title>DeadbyDaylight in MC | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/game/dbd">
								<span itemprop="name">DeadbyDaylight in MC</span>
							</a>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
					<div class="game_creator">
						企画作成者：Meary, <a href="https://www.youtube.com/channel/UCWSz32UUYgAzs_hVqKeqq-Q" target="_blank">Monster2408</a>
					</div>						
					<h1 class="design">DeadbyDaylight in MC</h1>
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
								初期リリース企画Ver
							</th>
							<td>
								0.5.0
							</td>
						</tr>
						<tr>
							<th>
								最新企画Ver
							</th>
							<td>
								1.4.0 β
							</td>
						</tr>
						<tr>
							<th>
								最低人数
							</th>
							<td>
								5人
							</td>
						</tr>
					</table>
					<h2 class="design">基本ルール</h2>
					<div class="or_box">
						<ul>
							<li>チームはキラーとサバイバーの２チームです。</li>
							<li>サバイバーチームは発電機のレッドストーンランプ部分を壊し続けることで発電機を修理します。</li>
							<li>発電機を一定数修理するとゲートの開放が可能になります。</li>
							<li>ゲートはマップの東西に存在しており、その横のレッドストーンランプを壊し続けることで開放へと繋がります。</li>
							<li>キラーチームはそれを阻止するのが目的です。</li>
							<li>キラーチームはサバイバーを殴ると一時的に動作が遅くなります。</li>
							<li>２回殴ることでサバイバーを瀕死状態にさせることが可能です。</li>
							<li>サバイバーの近くにキラーがいると鼓動が早くなります。がんばって逃げましょう。</li>
							<li>キラーとの距離が一定値を下回ると足跡が残ってしまいます。キラーはその足跡をたどって追いかけてもいいでしょう。</li>
							<li>復活したサバイバーは牢屋に閉じ込められます。<span style='color: red;'>0.6.0</span></li>
							<li>発電機を修理していると一定確率でスキルチェックが発動します。<span style='color: red;'>1.0.0</span></li>
							<li>スキルチェックが発動するとホットバーに赤色の板ガラスが並べられそのうちの一枚が緑の板ガラスになります。緑の板ガラスを捨てることでスキルチェック成功です。<span style='color: red;'>1.0.0</span></li>
							<li>スキルチェックに失敗すると発電機の修理率が下がり、該当サバイバーが発光します。<span style='color: red;'>1.0.0</span></li>
							<li>サバイバーはマップ内に散らばられたチェストを開くことでLEDランプの点灯時間が伸びます。<span style='color: red;'>1.3.0</span></li>
							<li>LEDを手に持つと視界が明るくなりますが、LEDを使える時間が減っていくため注意しましょう。<span style='color: red;'>1.0.0</span></li>
							<li>負傷状態でも負傷状態以上のサバイバーに一定回数殴られることで回復できます。<span style='color: red;'>1.1.0</span></li>
							<li>参加者はロビーのテントにあるチェストで初期設定をしてください。<span style='color: red;'>1.3.0</span></li>
							<li>瀕死状態のサバイバーをキラーが殴ると担ぐことができます。<span style='color: red;'>1.4.0</span></li>
							<li>瀕死状態のサバイバーを他の負傷状態以上のサバイバーが殴ると回復させることが可能です。<span style='color: red;'>1.4.0</span></li>
							<li>担がれたサバイバーを下すには手に持っているサバイバーの頭を設置することで可能です<span style='color: red;'>1.4.0</span></li>
							<li>サバイバーをフックの位置に下におろすことでフックに吊るすことができます。<span style='color: red;'>1.4.0</span></li>
							<li>フックにつるされたサバイバーを負傷状態以上のサバイバーが殴ることでフックから離脱できます。<span style='color: red;'>1.4.0</span></li>
							<li>フックに吊るされたときに残基が減り、吊るされる前に0またはそれ以下だった場合、そのプレイヤーは観戦モードになります。<span style='color: red;'>1.4.0</span></li>
						</ul>
					</div>
					<h2 class="design">キラーについて</h2>
					<div class="or_box">
						<ul>
							<li>時間と残り人数を考えていい感じの立ち回りお願いします。</li>
						</ul>
					</div>
					<h3 class="design">ハントレス</h3>
					<div class="or_box">
						<ul>
							<li>ゲーム開始時に弓と矢（テクスチャ導入時は手斧のようなもの）が配布</li>
							<li>ホットバーの一番右側に設置されるもので手斧を投げることが可能です。</li>
							<li>矢の補充はマップ上のチェストで可能です。</li>
						</ul>
					</div>
					<h3 class="design">トラッパー</h3>
					<div class="or_box">
						<ul>
							<li>ゲーム開始時に罠（レール）が１つ配布されます。</li>
							<li>罠は自由に設置可能で、設置すると起動済みの罠（パワードレール）が設置されます。</li>
							<li>起動済みの罠を踏んでしまうと罠（レール）になり、サバイバーであった場合負傷状態になります。</li>
							<li>トラッパーは罠を右クリックすることで回収ができ、罠の最大所持数は１つです。</li>
							<li>サバイバーは起動済みの罠を壊すことで解除できますが、180秒後に起動します。</li>
						</ul>
					</div>
					<h3 class="design">レイス</h3>
					<div class="or_box">
						<ul>
							<li>ゲーム開始時に鐘（金床）が１つ配布されます。</li>
							<li>鐘を設置で透明化・解除を切り替えます。</li>
							<li>切替時に数秒間の行動不能時間があります。</li>
							<li>透明時は通常時よりも早く走ることが可能で、気配を100%隠すことが可能です。</li>
						</ul>
					</div>
					<h3 class="design">ヒルビリー</h3>
					<div class="or_box">
						<ul>
							<li>ゲーム開始時にチェーンソー（ダイヤ斧）が１つ配布されます。</li>
							<li>チェーンソーを持って右クリックすると起動して前方にダッシュできます。</li>
							<li>表示は停止中と起動中です。</li>
						</ul>
					</div>
					<h2 class="design">禁止・注意事項</h2>
					<div class="or_box">
						<ul>
							<li>キラーに見えるスキンの使用はおやめください。</li>
						</ul>
					</div>
					<h2 class="design">主要オブジェクト画像</h2>
					<div class="or_box">
						<h3 class="design">発電機画像</h3>
						<a href="https://i.gyazo.com/b1e21890fa8400fe0ffed235b1064b7f.png" data-lightbox="dbd"><img src="https://i.gyazo.com/b1e21890fa8400fe0ffed235b1064b7f.png" width="100%"></img></a>
						<h3 class="design">ゲート画像</h3>
						<a href="https://i.gyazo.com/81cb85d2046d7d8a41445609f1731982.png" data-lightbox="dbd"><img src="https://i.gyazo.com/81cb85d2046d7d8a41445609f1731982.png" width="100%"></img></a>
						<h3 class="design">フック画像</h3>
						<a href="https://i.gyazo.com/acd34ccfabeea4a015bdac11c7fdf197.png" data-lightbox="dbd"><img src="https://i.gyazo.com/acd34ccfabeea4a015bdac11c7fdf197.png" width="100%"></img></a>
					</div>
					<h2 class="design">専用テクスチャについて</h2>
					<p>
						DeadbyDaylight in MCにはプレイを楽しむための専用テクスチャパックがあります。
						サーバーリソースの読み込みをONにして鯖に参加するとサーバーリソースを適応することができます。
						この時に鯖からキックされる場合はサーバーリソースの読み込みをOFFにして参加することで専用テクスチャパックを使用することはできませんが企画には問題なく参加できます。
						どうしても使用したい場合は<a href="<?php echo $conf["textures"]["dbd"]; ?>" target="_blank">コチラ</a>よりダウンロードし適応することで解消することが可能です。
					</p>
					<h2 class="design">ルール説明動画(Ver-1.4.0 β用)</h2>
					<div class="or_box">
						<div class="video">
							<iframe src="https://www.youtube.com/embed/RPDq9Aw6VoM" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<h2 class="design">今後のアップデート予定</h2>
					<p>今後のアップデート情報は<a href="http://seesaawiki.jp/monsterlifeserver/d/DeadbyDaylight%20in%20MC%a5%a2%a5%c3%a5%d7%a5%c7%a1%bc%a5%c8%cd%bd%c4%ea" target="_blank">こちら</a>をクリック</p>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
