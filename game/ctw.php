<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<title>Capture the Wool | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/game/ctw">
								<span itemprop="name">Capture the Wool</span>
							</a>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
					<div class="game_creator">
						企画作成者：<a href="index">未定</a>
					</div>
					<h1 class="design">Capture the Wool</h1>
					<h2 class="design">最低人数</h2 class="design">
					<center>４人</center>
					<h2 class="design">目標</h2>
					<div class="or_box">
						相手チームの
						<!-- キャプチャーウールのグラデーション文字 -->
						<font color="#ff0000">キ</font>
						<font color="#ff0039">ャ</font>
						<font color="#ff0073">プ</font>
						<font color="#ff00ac">チ</font>
						<font color="#ff00e6">ャ</font>
						<font color="#df00ff">ー</font>
						<font color="#a600ff">ウ</font>
						<font color="#6c00ff">ー</font>
						<font color="#3300ff">ル</font>
						<!-- キャプチャーウールのグラデーション文字 -->
						をハサミで壊して自分のチームのショップで売ることにより自分のチームの点数を増やす。
					</div>
					<h2 class="design">基本ルール</h2>
					<div class="or_box">
						<ul>
							<li>制限時間は１０分です。</li>
							<li>チームは２チームです。</li>
							<li>各チームには スコア・ポイント・武器レベル・防具レベル があります。</li>
							<li>はじめは両チームとも武器・防具レベルは１でチームポイントによりレベルアップできます。</li>
							<li>
								相手チームの
								<!-- キャプチャーウールのグラデーション文字 -->
								<font color="#ff0000">キ</font>
								<font color="#ff0039">ャ</font>
								<font color="#ff0073">プ</font>
								<font color="#ff00ac">チ</font>
								<font color="#ff00e6">ャ</font>
								<font color="#df00ff">ー</font>
								<font color="#a600ff">ウ</font>
								<font color="#6c00ff">ー</font>
								<font color="#3300ff">ル</font>
								<!-- キャプチャーウールのグラデーション文字 -->
								はハサミで壊すことができ、壊すと頭にセットされます。
							</li>
							<li>プレイヤーの初期アイテムはハサミ・皮装備・木の剣です。</li>
							<li>プレイヤーは死ぬと５秒間リスポーンできません。</li>
							<li>
								プレイヤーは
								<!-- キャプチャーウールのグラデーション文字 -->
								<font color="#ff0000">キ</font>
								<font color="#ff0039">ャ</font>
								<font color="#ff0073">プ</font>
								<font color="#ff00ac">チ</font>
								<font color="#ff00e6">ャ</font>
								<font color="#df00ff">ー</font>
								<font color="#a600ff">ウ</font>
								<font color="#6c00ff">ー</font>
								<font color="#3300ff">ル</font>
								<!-- キャプチャーウールのグラデーション文字 -->
								を頭にセットしながら自分のチームの村人を殴ると
								<!-- キャプチャーウールのグラデーション文字 -->
								<font color="#ff0000">キ</font>
								<font color="#ff0039">ャ</font>
								<font color="#ff0073">プ</font>
								<font color="#ff00ac">チ</font>
								<font color="#ff00e6">ャ</font>
								<font color="#df00ff">ー</font>
								<font color="#a600ff">ウ</font>
								<font color="#6c00ff">ー</font>
								<font color="#3300ff">ル</font>
								<!-- キャプチャーウールのグラデーション文字 -->
								を売ることができます。
							</li>
							<li>
								<!-- キャプチャーウールのグラデーション文字 -->
								<font color="#ff0000">キ</font>
								<font color="#ff0039">ャ</font>
								<font color="#ff0073">プ</font>
								<font color="#ff00ac">チ</font>
								<font color="#ff00e6">ャ</font>
								<font color="#df00ff">ー</font>
								<font color="#a600ff">ウ</font>
								<font color="#6c00ff">ー</font>
								<font color="#3300ff">ル</font>
								<!-- キャプチャーウールのグラデーション文字 -->
								を売るとチームスコアが上昇します。
							</li>
							<li>ゲーム終了時チームスコアが多いほうが優勝です。</li>
							<li>村人を右クリックするとショップを開くことができ、チームポイントで 武器レベル・防具レベル でレベルアップできます。<br>
							<li>チームポイントはチームのものなので相談しながら使う必要があります。<br>
							<li>
								チームポイントは一定間隔で付与されていきます。<br>
						　		※その他でも増えるかも（未定）
							</li>
							<li>チームは勝手に割り振られます。</li>
							<li>
								<!-- キャプチャーウールのグラデーション文字 -->
								<font color="#ff0000">キ</font>
								<font color="#ff0039">ャ</font>
								<font color="#ff0073">プ</font>
								<font color="#ff00ac">チ</font>
								<font color="#ff00e6">ャ</font>
								<font color="#df00ff">ー</font>
								<font color="#a600ff">ウ</font>
								<font color="#6c00ff">ー</font>
								<font color="#3300ff">ル</font>
								<!-- キャプチャーウールのグラデーション文字 -->
								を持ったプレイヤーを倒すと
								<!-- キャプチャーウールのグラデーション文字 -->
								<font color="#ff0000">キ</font>
								<font color="#ff0039">ャ</font>
								<font color="#ff0073">プ</font>
								<font color="#ff00ac">チ</font>
								<font color="#ff00e6">ャ</font>
								<font color="#df00ff">ー</font>
								<font color="#a600ff">ウ</font>
								<font color="#6c00ff">ー</font>
								<font color="#3300ff">ル</font>
								<!-- キャプチャーウールのグラデーション文字 -->
								を落とします。
							</li>
							<li>
								<!-- キャプチャーウールのグラデーション文字 -->
								<font color="#ff0000">キ</font>
								<font color="#ff0039">ャ</font>
								<font color="#ff0073">プ</font>
								<font color="#ff00ac">チ</font>
								<font color="#ff00e6">ャ</font>
								<font color="#df00ff">ー</font>
								<font color="#a600ff">ウ</font>
								<font color="#6c00ff">ー</font>
								<font color="#3300ff">ル</font>
								<!-- キャプチャーウールのグラデーション文字 -->
								を拾うと自分のチームのものであれば元の位置にセットされ、相手チームのものであれば自分の頭にセットされます。
							</li>
							<li>
								<font color="#ff0000">キ</font>
								<font color="#ff0039">ャ</font>
								<font color="#ff0073">プ</font>
								<font color="#ff00ac">チ</font>
								<font color="#ff00e6">ャ</font>
								<font color="#df00ff">ー</font>
								<font color="#a600ff">ウ</font>
								<font color="#6c00ff">ー</font>
								<font color="#3300ff">ル</font>
								<!-- キャプチャーウールのグラデーション文字 -->
								以外のものは落とさず、レベルにあったアイテムが復活時、配布されます。
							</li>
						</ul>
					</div>
					<h2 class="design">禁止・注意事項</h2>
					<div class="or_box">
						<ul>
							<li>
								荒らし目的でポイントを使用しないでください。<br>
								※嫌われます。
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
