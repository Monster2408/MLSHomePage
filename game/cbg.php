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
		<title>コア破壊ゲーム | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/game/cbg">
								<span itemprop="name">コア破壊ゲーム</span>
							</a>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
					<div class="game_creator">
						企画作成者：Meary, <a href="https://www.youtube.com/channel/UCWSz32UUYgAzs_hVqKeqq-Q" target="_blank">Monster2408</a>
					</div>						
					<h1 class="design">コア破壊ゲーム</h1>
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
								1.0.0
							</td>
						</tr>
						<tr>
							<th>
								最低人数
							</th>
							<td>
								4人
							</td>
						</tr>
					</table>
					<h2 class="design">基本ルール</h2>
					<div class="or_box">
						<ul>
							<li>相手のコアを破壊しコア体力を0にする。</li>
							<li>マップ内に存在する鉱山から鉱石を採掘し、攻防の準備をする。</li>
							<li>ゲーム時間は20分です。</li>
							<li>チームは赤と青の二チームです。</li>
							<li class="unimplement">エンチャント台と本棚は破壊が不可能になっています。</li>
							<li class="unimplement">ゲーム開始から5分間はコア攻撃が不可能です。</li>
							<li class="unimplement">制限時間内にどちらかのコア体力が0にならなかった場合はコア体力の多いチームが勝ちになります。</li>
							<li class="unimplement">チームベースでは保護範囲がありその中では建築等は不可能です。</li>
						</ul>
						<div style="text-align: right;">
							<span class="unimp">の付くルールは未実装です。</span>
						</div>
					</div>
					<h2 class="design">設置/使用不可アイテム</h2>
					<div class="or_box">
						<ul>
							<li class="unimplement">バケツ</li>
							<li class="unimplement">火打石</li>
							<li class="unimplement">ピストン</li>
							<li class="unimplement">ボート</li>
							<li class="unimplement">ホッパー/TNT付きトロッコ</li>
							<li class="unimplement">赤/青テラコッタ</li>
							<li class="unimplement">本棚</li>
							<li class="unimplement">エンチャントテーブル</li>
						</ul>
						<div style="text-align: right;">
							<span class="unimp">の付くルールは未実装です。</span>
						</div>
					</div>
					<h2 class="design">禁止・注意事項</h2>
					<div class="or_box">
						<ul>
							<li>とくにな～い</li>
						</ul>
					</div>
					<!--<h2 class="design">デバッグ動画</h2>
					<div class="or_box">
						<div class="video">
							<iframe src="https://www.youtube.com/embed/XH3MEx5oBIc" frameborder="0" allowfullscreen></iframe>
						</div>
					</div> -->
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
