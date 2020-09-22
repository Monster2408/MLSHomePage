<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
        <?php echo $html["common_head"]; ?>
		<style>
            table.list {
                border: solid 1px black;
            }
            table.list th {
                background-color: #808080;
                border: solid 1px black;
                text-align: center;
                text-weight: bold;
            }
            table.list tr {
                border: solid 1px black;
            }
            table.list td {
                border: solid 1px black;
            }
            h3.design {
                position: relative;
                padding: 1em 15px;
                margin: 10px 0;
            }
            h3.design::before,
            h3.design::after {
                position: absolute;
                left: 0;
                content: '';
                width: 100%;
                height: 6px;
                box-sizing: border-box;
            }
            h3.design::before {
                top: 0;
                border-top: 2px solid #ccc;
                border-bottom: 1px solid #ccc;
            }
            h3.design::after {
                bottom: 0;
                border-top: 1px solid #ccc;
                border-bottom: 2px solid #ccc;
            }
            th.item {
                width: 30%;
            }
            th.desc {
                width: 50%;
            }
            th.ver {
                width: 20%;
            }
		</style>
		<title>Skripter向け | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/dev/skript">
								<span itemprop="name">Skripter向け</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
                    <h1 class="design">Skripter向け開発ページ</h1>
                    <h2 class="design">はじめに</h2>
                    <p>
                        MLSの変数は基本的に<code>{接頭辞.変数名}</code>という形で生成されます。
                    </p>
                    <h2 class="design">企画変数共通</h2>
                    <p>
                        使わないものは使わない。
                    </p>
                    <table class="list" width="100%" >
                        <tr>
                            <th>変数</th><th>概要</th>
                        </tr>
                        <tr>
                            <td>{nige::*}</td>
                            <td>逃走者やサバイバーを格納</td>
                        </tr>
                        <tr>
                            <td>{oni::*}</td>
                            <td>鬼やハンターを格納</td>
                        </tr>
                        <tr>
                            <td>{gametime}</td>
                            <td>ゲーム中であればTRUEでそうでなければ、存在しない。</td>
                        </tr>
                        <tr>
                            <td>{time}</td>
                            <td>ゲーム時間。</td>
                        </tr>
                    </table>
                    <h2 class="design">DeadByDaylight in MC</h2>
					<p>
                        接頭辞『dbd』
                    </p>
                    <h3 class="design">企画変数</h3>
                    <table class="list" width="100%">
                        <tr>
                            <th>変数</th><th>概要</th>
                        </tr>
                        <tr>
                            <td>{dbd.prefix}</td>
                            <td>全ログ・システムメッセージの頭に設置</td>
                        </tr>
                    </table>
                    <h3 class="design">環境</h3>
                    <table class="list" width="100%">
                        <tr>
                            <th>鯖・プラグイン</th><th>概要</th><th>バージョン</th>
                        </tr>
                        <tr>
                            <td>サーバー</td>
                            <td>Minecraft1.12.2</td>
                            <td>paper-1613</td>
                        </tr>
                        <tr>
                            <td>Skript</td>
                            <td></td>
                            <td>2.4</td>
                        </tr>
                    </table>
                    <h2 class="design">BedWars</h2>
					<p>
                        接頭辞『bw』
                    </p>
                    <h3 class="design">企画変数</h3>
                    <table class="list" width="100%">
                        <tr>
                            <th>変数</th><th>概要</th>
                        </tr>
                        <tr>
                            <td>{bw.prefix}</td>
                            <td>全ログ・システムメッセージの頭に設置</td>
                        </tr>
                        <tr>
                            <td>{blue.team::*}</td>
                            <td>青チームを格納</td>
                        </tr>
                        <tr>
                            <td>{red.team::*}</td>
                            <td>赤チームを格納</td>
                        </tr>
                    </table>
                    <h3 class="design">環境</h3>
                    <table class="list" width="100%">
                        <tr>
                            <th class="item">鯖・プラグイン</th><th class="desc">概要</th><th class="ver">バージョン</th>
                        </tr>
                        <tr>
                            <td>サーバー</td>
                            <td>Minecraft1.12.2</td>
                            <td>paper-1613</td>
                        </tr>
                        <tr>
                            <td>Skript</td>
                            <td></td>
                            <td>2.4</td>
                        </tr>
                        <tr>
                            <td>SkQuery</td>
                            <td></td>
                            <td>3.6.5</td>
                        </tr>
                        <tr>
                            <td>SK-NBeeT</td>
                            <td></td>
                            <td>2.11.0</td>
                        </tr>
                        <tr>
                            <td>skRayFall</td>
                            <td></td>
                            <td>1.9.12</td>
                        </tr>
                        <tr>
                            <td>HolographicDisplays</td>
                            <td></td>
                            <td>2.3.2</td>
                        </tr>
                        <tr>
                            <td>HolographicDisplaysAddon</td>
                            <td></td>
                            <td>1.0.0b</td>
                        </tr>
                        <tr>
                            <td>Skellett</td>
                            <td></td>
                            <td>1.9.6b</td>
                        </tr>
                        <tr>
                            <td>skDragon</td>
                            <td></td>
                            <td>0.16</td>
                        </tr>
                        <tr>
                            <td>TuSKe</td>
                            <td></td>
                            <td>1.8.2-Pikachu-Patch-3</td>
                        </tr>
                    </table>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
