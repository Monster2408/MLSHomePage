<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<title>サーバー資料 | MonsterLifeServer</title>
		<?php echo $html["common_head"]; ?>
		<style>
            table.pdf {
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
            }

            table.pdf th,table.pdf td {
                padding: 10px 0;
                text-align: center;
            }

            table.pdf tr:nth-child(odd) {
                background-color: #eee
            }
		</style>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/pdf/">
								<span itemprop="name">サーバー資料</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<!-- パンくずリスト終 -->

					<!-- ↓↓↓↓↓ ここから本文 ↓↓↓↓↓ -->
					<h1 class="design">サーバー資料</h1>
					<h2 class="design">運営会議報告書</h2>

                    <table class="pdf">
					
                    <?php

                        $xml = $_SERVER["DOCUMENT_ROOT"] . "/assets/data/pdf.xml";//ファイルを指定
                        $xmlData = simplexml_load_file($xml);

                        $i = 0;

                        foreach ($xmlData->items->item as $data) {
                            
                            $n = 1;
                            $ys = 0;

                            $x = array();

                            $x["date"] = (string)$data->date;
                            $x["urls"] = (array)$data->urls;

                            echo '<tr><th>'.$x["date"].'</th><td>';

                            //print_r($x);
                            $str = '';
                            $i = 0;
                            if (is_array($x["urls"]["value"])) {
                                foreach ($x["urls"]["value"] as $y) {
                                    if ($i < 2) {
                                        $i++;
                                        $str = $str . "<a href='".$y."'>"."FILE.".$n."</a> ";
                                    } else {
                                        $i = 0;
                                        $str = $str . "<a href='".$y."'>"."FILE.".$n."</a><br>";
                                    }
                                    $n++;
                                    $ys++;
                                }
                            } else {
                                $str = "<a href='".$x["urls"]["value"]."'>"."FILE.1</a>";
                            }

                            print_r($str.'</td></th>');
                            $n++;
                        }
                        echo '</tr>';
                    ?>
                    </table>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
