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
		<title>ミニゲーム企画一覧 | MonsterLifeServer</title>
	</head>

	<body>
		<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.php"); ?>
		<div class="wrapper">
			<div class="contents">
				<div class="text_box">
                    <!-- パンくずリスト始まり -->
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
					</ol>
                    <!-- パンくずリスト終わり -->
					<h1 class="design">ミニゲーム企画</h1>
					<h2 class="design">ミニゲーム企画前提</h2>
					<p>
						各ページのルールなどの横に企画バージョンが書かれているとそのバージョンから登場したルールです。
					</p>
					<h2 class="design">ミニゲーム企画共通 禁止事項</h2>
					<p>
						当鯖では企画中において以下のことを禁じます。
					</p>
					<div class="or_box">
						<ul>
							<li>萎え落ち</li>
							<li>バグの利用・拡散</li>
							<li>放置・途中退出<br>※試合終了後などであれば問題ありません。</li>
						</ul>
					</div>
					<h2 class="design">ミニゲーム企画共通 注意事項</h2>
					<div class="or_box">
						<ul>
							<li>手にアイテムを持ったまま扉を開けようとするとうまくいかない場合がございます。</li>
							<li>人数が少ないときにドタキャンをすると他の参加者に迷惑をかけることになるのでお気を付けください。</li>
							<li>遅刻者が多いと企画が中止になる場合がございます。</li>
						</ul>
					</div>
					<h2 class="design">ミニゲーム企画一覧</h2>

                    <article>
                        <figure class="samune">
							<img src="<?php echo $conf["url"]; ?>/assets/img/game_icon/aooni.png" alt="サムネイル画像">
							<p class="popular">人気</p>
                        </figure>
                        <div class="text_content">
                            <p class="text_date"><time datetime="2019-06-01">2019年6月1日</time></p>
                            <h2><a href="<?php echo $conf["url"]; ?>/game/aooni">青鬼ゲーム6.23</a></h2>
                            <p class="text_excerpt">青鬼ゲーム6.23はMonsterLifeServerで一番初めにできた企画です。フリーゲーム『青鬼』を元に作られた企画です。</p>
                        </div>
                    </article>
					
                    <article>
                        <figure class="samune">
							<img src="https://saiki-jokado.com/images/No_Image.png" alt="サムネイル画像">
                        </figure>
                        <div class="text_content">
                            <p class="text_date"><time datetime="2019-06-22">2019年6月22日</time></p>
                            <h2><a href="<?php echo $conf["url"]; ?>/game/ho">増え鬼ゲーム</a></h2>
                            <p class="text_excerpt">増え鬼ゲームはいくつかのアイテムを駆使しながら制限時間一杯逃げ切る企画です。</p>
                        </div>
                    </article>

                    <article>
                        <figure class="samune">
                            <img src="https://saiki-jokado.com/images/No_Image.png" alt="サムネイル画像">
                        </figure>
                        <div class="text_content">
                            <p class="text_date"><time datetime="2019-10-05">2019年10月5日</time></p>
                            <h2><a href="<?php echo $conf["url"]; ?>/game/online">青鬼ONLINE in MC</a></h2>
                            <p class="text_excerpt">青鬼ONLINE in MCはスマホゲーム『青鬼ONLINE』を元にMinecraftで遊べるように作られた企画です。</p>
                        </div>
                    </article>

                    <article>
                        <figure class="samune">
                            <img src="<?php echo $conf["url"]; ?>/assets/img/game_icon/dbd.png" alt="サムネイル画像">
                        </figure>
                        <div class="text_content">
                            <p class="text_date"><time datetime="2020-05-05">2020年05月05日</time></p>
                            <h2><a href="<?php echo $conf["url"]; ?>/game/dbd">DeadbyDaylight in MC</a></h2>
                            <p class="text_excerpt">DeadbyDaylight in MCは『Dead by Daylight』（デッド バイ デイライト）は、カナダのゲーム会社Behaviour Interactiveが開発し、Starbreeze Studios（英語版）より発売された非対称型対戦サバイバルホラーゲームを元にMinecraftで遊べるように作られた企画です。</p>
                        </div>
                    </article>
                    
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
