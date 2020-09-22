<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>
			#acMenu dt ul.ac, #acMenu dd ul.ac {
				list-style-type: none;
			}
			#acMenu dt ul.ac li:before {
				font-family: "Font Awesome 5 Free";
				content: '\f054';
				font-weight: 900;
			}
			#acMenu dt.active ul.ac li:before {
				font-family: "Font Awesome 5 Free";
				content: '\f078';
				font-weight: 900;
			}
			table.ban th {
				background-color: #a2a2a2;
				text-align: center;
				padding: 5px;
			}
			table.ban td {
				text-align: center;
				background-color: #ffffff;
				padding: 5px;
			}
			table.ban {
				text-align: center;
				background-color: #696969;
				padding: 5px;
			}
			table.ban caption {
				font-weight: bold;
			}
		</style>
		<title>MonsterBOX</title>
	</head>
	<body>
		<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.php"); ?>
		<div class="wrapper">
			<div class="contents">
				<div class="text_box">
                    <div id="langChenge">
                        <input type="radio" name="land" id="langJa" checked>
                        <input type="radio" name="land" id="langEn">
                            
                        <label for="langJa">
                            <span lang="ja"><img class="country" src="https://shutto-translation.com/wp-content/uploads/2018/02/Japan-3.png"></img>日本語</span>
                            <span lang="en"><img class="country" src="https://shutto-translation.com/wp-content/uploads/2018/02/Japan-3.png"></img>日本語</span>
                        </label>
                        <label for="langEn">
                            <span lang="ja"><img class="country" src="https://shutto-translation.com/wp-content/uploads/2018/02/United-States-3.png"></img>English</span>
                            <span lang="en"><img class="country" src="https://shutto-translation.com/wp-content/uploads/2018/02/United-States-3.png"></img>English</span>
                        </label>

                        <ol lang="ja" class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo $conf["url"]; ?>/">
                                    <span itemprop="name">ホーム</span>
                                </a>
                                <meta itemprop="position" content="1" />
                            </li>

                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo $conf["url"]; ?>/monsterbox/">
                                    <span itemprop="name">MonsterBOX</span>
                                </a>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>

                        <ol lang="en" class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo $conf["url"]; ?>/">
                                    <span itemprop="name">HOME</span>
                                </a>
                                <meta itemprop="position" content="1" />
                            </li>

                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo $conf["url"]; ?>/monsterbox/">
                                    <span itemprop="name">MonsterBOX</span>
                                </a>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>

                        <div lang="ja">

                            <h1 class="design">はじめに</h1>
                            <p>このページはMonster2408が開発力を上げるために作ったあらゆる作品の紹介ページです。</p>
                            
                            <h2 class="design">Minecraft プラグイン</h2>

                            <article>
                                <figure class="samune">
                                    <img src="https://www.spigotmc.org/data/resource_icons/76/76403.jpg?1585038968" alt="サムネイル画像">
                                </figure>
                                <div class="text_content">
                                    <p class="text_date"><time datetime="2020-03-23">2020年3月23日</time><span class="version">Ver.1.15</span></p>
                                    <h2><a href="https://www.spigotmc.org/resources/economiclandprotection-1-15.76403/" target="_blank">Economic Land Protection</a></h2>
                                    <p class="text_excerpt">Vaultの経済機能を使用して土地を保護するプラグインです。</p>
                                </div>
                            </article>

                            <article>
                                <figure class="samune">
                                    <img src="https://www.spigotmc.org/data/resource_icons/78/78168.jpg?1588256562" alt="サムネイル画像">
                                </figure>
                                <div class="text_content">
                                    <p class="text_date"><time datetime="2020-04-30">2020年4月30日</time><span class="version">Ver.1.15</span></p>
                                    <h2><a href="https://www.spigotmc.org/resources/randomautomessage.78168/" target="_blank">Random Auto Message</a></h2>
                                    <p class="text_excerpt">ランダムに任意のメッセージをX秒ごとに出力します。</p>
                                </div>
                            </article>

                            <h2 class="design">Discord BOT</h2>

                            <article>
                                <figure class="samune">
                                    <img src="<?php echo $conf["url"]; ?>/assets/img/server-icon.png" alt="サムネイル画像">
                                </figure>
                                <div class="text_content">
                                    <p class="text_date"><time datetime="2020-01-29">2020年1月29日</time></p>
                                    <h2><a href="<?php echo $conf["url"]; ?>/monsterbox/bot" target="_blank">MonsterBot</a></h2>
                                    <p class="text_excerpt">多くの機能を持ったDiscordBot</p>
                                </div>
                            </article>
                        
                        </div>


                        <div lang="en">

                            <h1 class="design">Overview</h1>
                            <p>This page is an introduction page of all works created by Monster 2408 to improve the development power.</p>

                            <h2 class="design">Minecraft Plugin</h2>

                            <article>
                                <figure class="samune">
                                    <img src="https://www.spigotmc.org/data/resource_icons/76/76403.jpg?1585038968" alt="サムネイル画像">
                                </figure>
                                <div class="text_content">
                                    <p class="text_date"><time datetime="2020-03-23">2020/3/23</time><span class="version">Ver.1.15</span></p>
                                    <h2><a href="https://www.spigotmc.org/resources/economiclandprotection-1-15.76403/" target="_blank">Economic Land Protection</a></h2>
                                    <p class="text_excerpt">A plugin to protect land using the economics of Vault.</p>
                                </div>
                            </article>

                            <article>
                                <figure class="samune">
                                    <img src="https://www.spigotmc.org/data/resource_icons/78/78168.jpg?1588256562" alt="サムネイル画像">
                                </figure>
                                <div class="text_content">
                                    <p class="text_date"><time datetime="2020-04-30">2020/4/30</time><span class="version">Ver.1.15</span></p>
                                    <h2><a href="https://www.spigotmc.org/resources/randomautomessage.78168/" target="_blank">Random Auto Message</a></h2>
                                    <p class="text_excerpt">Outputs a random message every X seconds.</p>
                                </div>
                            </article>

                            <h2 class="design">Discord BOT</h2>

                            <article>
                                <figure class="samune">
                                    <img src="<?php echo $conf["url"]; ?>/assets/img/server-icon.png" alt="サムネイル画像">
                                </figure>
                                <div class="text_content">
                                    <p class="text_date"><time datetime="2020-01-29">2020/1/29</time></p>
                                    <h2><a href="<?php echo $conf["url"]; ?>/monsterbox/bot" target="_blank">MonsterBot</a></h2>
                                    <p class="text_excerpt">DiscordBot with many features</p>
                                </div>
                            </article>
                        
                        </div>
                    
                    </div>


				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
