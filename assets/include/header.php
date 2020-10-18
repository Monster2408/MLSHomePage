<header>
	<div class="header-logo-menu">
		<div id="nav-drawer">
			<input id="nav-input" type="checkbox" class="nav-unshown">
			<label id="nav-open" for="nav-input"><span></span></label>
			<label class="nav-unshown" id="nav-close" for="nav-input"></label>
			<div id="nav-content">
				<div id="nav-title-box">
					<div class="nav-title">
						MENU
					</div>
					<label class="nav-close-img" for="nav-input">
						<i class="fas fa-times"></i>
					</label>
				</div>
				<div class="cssCloseBox">
					<!-- main -->
					<input type="checkbox" id="main" class="acc" />
					<label for="main">メイン</label>
					<div class="main">
					<!--ここに隠す中身-->
						<ul>
							<a href="<?php echo $conf["url"]; ?>/"><li>HOME</li></a>
							<a href="<?php echo $conf["url"]; ?>/24h/"><li>24H鯖</li></a>
							<a href="<?php echo $conf["url"]; ?>/admin"><li>運営陣一覧</li></a>
							<a href="<?php echo $conf["url"]; ?>/donation"><li>寄付方法</li></a>
							<a href="<?php echo $conf["url"]; ?>/staff"><li>スタッフ募集</li></a>
						</ul>
					</div>
					<!-- main -->
				</div>
				<div class="cssOpenBox">
					<!-- minigame -->
					<input type="checkbox" id="minigame" class="acc" />
					<label for="minigame">ミニゲーム企画</label>
					<div class="minigame">
					<!--ここに隠す中身-->
						<ul>
							<a href="<?php echo $conf["url"]; ?>/game/"><li>ミニゲーム企画一覧</li></a>
							<a href="<?php echo $conf["url"]; ?>/game/aooni"><li>青鬼ゲーム6.23</li></a>
							<a href="<?php echo $conf["url"]; ?>/game/online"><li>青鬼ONLINE in MC</li></a>
							<a href="<?php echo $conf["url"]; ?>/game/dbd"><li>DBD in MC</li></a>
							<a href="<?php echo $conf["url"]; ?>/game/ho"><li>増え鬼ゲーム</li></a>
							<!-- 未公開企画 -->
							<a href="<?php echo $conf["url"]; ?>/game/bed"><li>BedWars</li></a>
							<a href="<?php echo $conf["url"]; ?>/game/cbg"><li>コア破壊ゲーム</li></a>
							<a href="<?php echo $conf["url"]; ?>/game/ctw"><li>Capture the Wool</li></a>
						</ul>
					</div>
					<!-- minigame -->

					<!-- surport -->
					<input type="checkbox" id="surport" class="acc" />
					<label for="surport">サポート</label>
					<div class="surport">
					<!--ここに隠す中身-->
						<ul>
							<a href="<?php echo $conf["url"]; ?>/faq"><li>よくある質問</li></a>
							<a href="<?php echo $conf["url"]; ?>/problem"><li>問題解決・解消・改善</li></a>
							<a href="<?php echo $conf["url"]; ?>/ban"><li>BAN情報</li></a>
						</ul>
					</div>
					<!-- surport -->

					<!-- cm -->
					<input type="checkbox" id="cm" class="acc" />
					<label for="cm">宣伝</label>
					<div class="cm">
					<!--ここに隠す中身-->
						<ul>
							<a href="<?php echo $conf["url"]; ?>/monsterbox/"><li>MonsterBOX</li></a>
							<a href="https://monocraft.net/servers/4o9NgWsXjtrIVtds0Igw" target="_blank"><li>Monocraft</li></a>
							<a href="https://minecraft.jp/servers/5d51f624a9b0bd7e0e00834e" target="_blank"><li>JapanMinecraftServers</li></a>
							<a href="https://mineidea.net/projects/47" target="_blank"><li>Mineidea</li></a>
							<a href="http://seesaawiki.jp/monsterlifeserver" target="_blank"><li>非公式Wiki</li></a>
							<a href="http://monsterlifeserver.blog.jp/" target="_blank"><li>ブログ</li></a>
						</ul>
					</div>
					<!-- cm -->

					<!-- dev -->
					<input type="checkbox" id="dev" class="acc" />
					<label for="dev">開発者向け</label>
					<div class="dev">
						<!--ここに隠す中身-->
						<ul>
							<a href="<?php echo $conf["url"]; ?>/dev/plugin"><li>PluginDeveloper向け</li></a>
							<a href="<?php echo $conf["url"]; ?>/dev/skript"><li>Skripter向け</li></a>
						</ul>
					</div>
					<!-- dev -->
				</div>
				<div class="TwitterBox">
					<!--ラベル Twitter-->
					<input type="checkbox" id="twitter" class="acc" />
					<label for="twitter">MLS Twitter</label>
					<div class="twitter">
					<!--ここに隠す中身-->
						<ul>
							<a class="twitter-timeline" height="700px" width="100%" data-chrome="noscrollbar noheader nofooter" href="https://twitter.com/MLServer2408?ref_src=twsrc%5Etfw">Tweets by MLServer2408</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</ul>
					</div>
					<!--ラベル Twitter-->
				</div>
				<div class="DiscordBox">
					<!--ラベル Discord-->
					<input type="checkbox" id="discord" class="acc" />
					<label for="discord">MLS Discord</label>
					<div class="discord">
					<!--ここに隠す中身-->
						<ul>
							<iframe src="https://discordapp.com/widget?id=556844677115150366&theme=dark" width="100%" height="600px" allowtransparency="true" frameborder="0"></iframe>
						</ul>
					</div>
					<!--ラベル Discord-->
					<?php
					$today = date("Y/m/d");
					$target_day = "2020/03/16";
					if(strtotime($today) < strtotime($target_day)) {
						echo "<a href=\"https://px.a8.net/svt/ejp?a8mat=35S7PJ+G0X1YQ+3O26+6FWRL\" rel=\"nofollow\">";
						echo "<img border=\"0\" width=\"300\" height=\"250\" alt=\"\" src=\"https://www22.a8.net/svt/bgt?aid=191112967969&wid=001&eno=01&mid=s00000017115001082000&mc=1\"></a>";
						echo "<img border=\"0\" width=\"1\" height=\"1\" src=\"https://www10.a8.net/0.gif?a8mat=35S7PJ+G0X1YQ+3O26+6FWRL\" alt=\"\">";
					} else {
						echo '<a href="https://px.a8.net/svt/ejp?a8mat=35S7PJ+G0X1YQ+3O26+601S1" rel="nofollow">';
						echo '<img border="0" width="300" height="250" alt="" src="https://www21.a8.net/svt/bgt?aid=191112967969&wid=001&eno=01&mid=s00000017115001008000&mc=1"></a>';
						echo '<img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=35S7PJ+G0X1YQ+3O26+601S1" alt="">';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</header>