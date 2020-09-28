<?php

// configファイルを変数に代入
$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<title>トップページ | 第73回生 課題研究</title>
		<?php echo $html["common_head"]; ?>
		<style>
            table.siken,
            td.siken {
                border: 1px solid #333;
            }

            th.siken,
            tfoot.siken {
                background-color: #333;
                color: #fff;
            }
            .menu {
                padding-left: 30px;
            }
            .menu li {
                display: list-item;  /* 縦に並べる */
                text-transform: uppercase;
                list-style-type: katakana-iroha;
                vertical-align: top;
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
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/2syu-denki">
								<span itemprop="name">第二種電気工事士</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<!-- パンくずリスト終 -->

					<!-- ↓↓↓↓↓ ここから本文 ↓↓↓↓↓ -->
					<h1 class="design"></h1>
					<h2 class="design"></h2>
                    <table class="siken">
                        <tbody class="siken">
                            <tr class="siken">
                                <td colspan="2" class="siken">問い</td>
                                <td class="siken">答え</td>
                            </tr>
                            <tr>
                            <?php 
                                $xml = $_SERVER["DOCUMENT_ROOT"] . "/assets/data/2syu-denki/H29kamiki1-30.xml";//ファイルを指定
                                $xmlData = simplexml_load_file($xml);//xmlを読み込む
                                $i = 1;
                                $order = array("\r\n", "\n", "\r", "\N");
                                $replace = '<br>';
                                foreach ($xmlData->item as $data) { 
                                    $n = 1;
                                    $list = array((String)$data->answer,(String)$data->answer1,(String)$data->answer2,(String)$data->answer3);
                                    shuffle($list);
                                    echo '<td class="siken">'.$i.'</td>';
                                    if (strpos((String) $data->question, "https://") !== false) {echo '<td class="siken"><img src="'.$data->question.'"><img></td>';}
                                    else {echo '<td class="siken">'.$data->question.'</td>';}
                                    echo '<td class="siken"><ol class="menu">';
                                    foreach ($list as $item) {
                                        if (strpos($item, "https://") !== false) {
                                            echo '<input type="radio" name="'.$i.'"> <li><img src="' . $item . '"></img></li>';
                                        } else {
                                            $a = '<input type="radio" name="'.$i.'"> <li>' . $item . '</li>';
                                            $newstr = str_replace($order, $replace, $a);
                                            echo $newstr;
                                        }
                                        $n++;
                                    }
                                    echo '</ol></td></tr>';
                                    $i++;
                                }
                            ?>
                        </tbody>
                    </table>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>