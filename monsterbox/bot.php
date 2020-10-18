<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>
			div.text_box ul.design {
				padding: 5px 20px;
				background: #f3fbff;
				border: 2px skyblue dashed;
			}

			div.text_box ul.design li {
				color: #43acff;
			}
			
			div.text_box ul.design li.none {
				list-style-type: none;
				color: #43acff;
				padding-left: 300px;
			}
			div.text_box ul.design li.movie {
				list-style-type: none;
			}
			table.bot th.c {
				background-color: #a2a2a2;
				text-align: center;
				padding: 5px;
				width: 30%;
			}
			table.bot th.d {
				background-color: #a2a2a2;
				text-align: center;
				padding: 5px;
				width: 70%;
			}
			table.bot td {
				text-align: center;
				background-color: #ffffff;
				padding: 5px;
			}
			table.bot {
				text-align: center;
				background-color: #696969;
				padding: 5px;
			}
		</style>
		<title>MonsterBOT | MonsterLifeServer</title>
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

						<ol lang="ja"  class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
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

							<li itemprop="itemListElement" itemscope
								itemtype="https://schema.org/ListItem">
								<a itemprop="item" href="<?php echo $conf["url"]; ?>/monsterbox/bot">
									<span itemprop="name">MonsterBOT</span>
								</a>
								<meta itemprop="position" content="3" />
							</li>
						</ol>

						<ol lang="en"  class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
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

							<li itemprop="itemListElement" itemscope
								itemtype="https://schema.org/ListItem">
								<a itemprop="item" href="<?php echo $conf["url"]; ?>/monsterbox/bot">
									<span itemprop="name">MonsterBOT</span>
								</a>
								<meta itemprop="position" content="3" />
							</li>
						</ol>

						<div lang="ja">

							<h1 class="design">MonsterBOT</h1>
							<h2 class="design">MonsterBOTについて</h2>
							<p>
								MonsterBOTとはMonster2408が作ったDiscord専用BOTです。
								元々はMLSBOTという名前でしたが現在はMonsterBOTという名前で一般配布されています。
							</p>
							<p>
								MonsterBOTは多機能BOTであり開発者が欲しいと思った機能や作りたいと思った機能がふんだんに詰め込まれております。
							</p>
							<h2 class="design">地震速報機能</h2>
							<p>
								<code>🗾緊急地震速報受信チャンネル</code>という名前のチャンネルを用意して
								MonsterBOTを招待すると日本各地で発生した地震を即座に通知します。
							</p>
							<h2 class="design">MonsterBOTで使用できる機能</h2>
							<ul class="design">
								<li>豊富なコマンドの使用</li>
								<li>AIによるメッセージの返信</li>
								<li>規定文への返答</li>
								<li>リプライ機能 (以下参照)</li>
								<li class="movie">
									<video autoplay loop muted controls poster="https://i.gyazo.com/795cf84c4aa266827dbfbd693065cdd1.png"  width="100%">
										<source src="https://i.gyazo.com/ef7a3f21d8727b22ad7ef445ed94976e.mp4" type="video/mp4" />
										<img src="https://i.gyazo.com/795cf84c4aa266827dbfbd693065cdd1.png" />
									</video>
								</li>
								<li class="none">etc...</li>
							</ul>
							<p>
								MonsterBOTのprefix（=接頭詞）は!?です。<br>
								<font color=#0000EE>#🤖bot操作</font>にて豊富なコマンドを使用できます。<br>
								コマンド一覧は!?helpで表示可能です。<br>
								<font color=#0000EE>#🗣おしゃべり</font>やMonsterBOTとのDMにメッセージを送るとMonsterBOTに搭載されたAIによりMonsterBOT返信が届きます。
							</p>
							<h2 class="design">MonsterBOTを招待する</h2>
							<p>
								個人のDiscordグループにMonsterBOTを導入するには
								<a href="https://discordapp.com/api/oauth2/authorize?client_id=602129473084588044&permissions=8&scope=bot" target="_blank">ここをクリック</a>
								してください。
							</p>
							<h2 class="design">MonsterBOTの特殊チャンネル</h2>
							<table border="1" cellpadding="5" width="100%" class="bot">
								<tr>
									<th class="c"><b>チャンネル名</b></th>
									<th class="d"><b>概要</b></th>
								</tr>
								<tr>
									<td>MonsterBOTのDM</td>
									<td>
										おしゃべりできます。<br>
										また、頭に以下の文字をつけることでサポートに報告できます。<br>
										/24h - 24H鯖について<br>
										/kikaku - 企画について<br>
										/web - ホームページについて<br>
										/else - その他
									</td>
								</tr>
								<tr>
									<td>🗾緊急地震速報受信チャンネル</td>
									<td>地震速報を受信します。</td>
								</tr>
								<tr>
									<td>🤖bot操作</td>
									<td>多種多様のコマンドが使えます。</td>
								</tr>
								<tr>
									<td>🗣おしゃべり</td>
									<td>MonsterBOTとお話ができます。</td>
								</tr>
							</table>
						</div>

						<div lang="en">

							<h1 class="design">MonsterBOT</h1>
							<h2 class="design">About MonsterBOT</h2>
							<p>
								Monster BOT is a Discord BOT made by Monster2408.
								Originally named MLSBOT, it is now generally distributed under the name MonsterBOT.<br>
							</p>
							<p>
								MonsterBOT is a multi-functional BOT, and it is packed with functions that developers wanted or wanted to create.
							</p>
							<p>
								<span style="color: red;">※This BOT is a BOT made for a Japanese server and has not been developed for foreign countries.</span>
							</p>
							<h2 class="design">Earthquake early warning function</h2>
							<p>
								Prepare a channel named <code>🗾緊急地震速報受信チャンネル</code>.
								Invite Monster BOT to instantly notify you of earthquakes in various parts of Japan.
							</p>
							<p>
								MonsterBOT's prefix is '!?'.<br>
								A wealth of commands are available on the channel named <font color=#0000EE>#bot操作</font>.<br>
								You can display the command list with the command '!?help'.<br>
								When you send a message to the channel named <font color=#0000EE>#🗣おしゃべり</font> or DM with MonsterBOT, the MonsterBOT reply will be sent by the AI ​​installed in MonsterBOT.
							</p>
							<h2 class="design">Functions available in Monster BOT</h2>
							<ul class="design">
								<li>Rich command usage</li>
								<li>Responding to messages with AI</li>
								<li>Reply to regulations</li>
								<li>Reply function (see below)</li>
								<li class="none"><video src="https://i.gyazo.com/ef7a3f21d8727b22ad7ef445ed94976e.mp4" width="100%"></li>
								<li class="none">etc...</li>
							</ul>
							<h2 class="design">Invite MonsterBOT</h2>
							<p>
								<a href="https://discordapp.com/api/oauth2/authorize?client_id=602129473084588044&permissions=8&scope=bot" target="_blank">Click here</a> to deploy Monster BOT in your personal Discord group.
							</p>
							<h2 class="design">MonsterBOT special channel</h2>
							<table border="1" cellpadding="5" width="100%" class="bot">
								<tr>
									<th class="c"><b>Channel name</b></th>
									<th class="d"><b>Overview</b></th>
								</tr>
								<tr>
									<td>MonsterBOT DM</td>
									<td>
										You can talk.<br>
										You can also report it to Support by prefixing the following characters:<br>
										/24h - About 24H server<br>
										/kikaku - About planning<br>
										/web - About homepage<br>
										/else - Other
									</td>
								</tr>
								<tr>
									<td>🗾緊急地震速報受信チャンネル</td>
									<td>Receive the Earthquake Bulletin.</td>
								</tr>
								<tr>
									<td>🤖bot操作</td>
									<td>A wide variety of commands can be used.</td>
								</tr>
								<tr>
									<td>🗣おしゃべり</td>
									<td>You can talk to MonsterBOT.</td>
								</tr>
							</table>
							<h2 class="design">When will the English version be available?</h2>
							<p>
								Well, the English version is not impossible to develop.
							</p>
							<p>
								However, it will be difficult to use because there is insufficient server to run BOT after development.
							</p>
							<p>
								If you like it, financial support may help.
							</p>
						</div>

					</div>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
