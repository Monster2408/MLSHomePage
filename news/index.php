<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<title>新着情報 | MonsterLifeServer</title>
		<?php echo $html["common_head"]; ?>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/news/">
								<span itemprop="name">新着情報</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<!-- パンくずリスト終 -->

					<!-- ↓↓↓↓↓ ここから本文 ↓↓↓↓↓ -->
					<h1 class="design">新着情報</h1>
                    <div id="news-text-wrap">
                        <?php
                            $xml = $_SERVER["DOCUMENT_ROOT"] . "/assets/data/news.xml";//ファイルを指定
                            $xmlData = simplexml_load_file($xml);//xmlを読み込む
                            foreach ($xmlData->blog->item as $data) { 
                        ?>
                        <ul class="newsList">
                            <li>
                                <?php 
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
                                <?php echo $data->category; ?>
                            </li>
							<li><a href="<?php echo $data->link; ?>"<?php 
								if (strpos($data->link,'mlserver.php.xdomain.jp') === false) {
									echo ' target="_blank"';
								}
							?>><?php echo $data->title; ?></a></li>
                        </ul>

                        <?php } ?>
                    </div>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>