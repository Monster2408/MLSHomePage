<<<<<<< HEAD
<a href="" class="topBtn" id="topBtn">TOP</a><!--/固定ボタン-->
<footer>
	<script>
		/**
		 * 確認ダイアログの返り値によりフォーム送信
		*/
		function submitChk () {
			/* 確認ダイアログ表示 */
			var flag = confirm ( "送信してもよろしいですか？\n\n送信したくない場合は[キャンセル]ボタンを押して下さい");
			/* send_flg が TRUEなら送信、FALSEなら送信しない */
			return flag;
		}
	</script>
	<?php 
		$page_flag = 0; 
	?>
	<div class="contents">
		<div class="flexbox">
			<div class="box1">
				<span class="footer-menu-title">MLS</span>
				<ul>
					<li class="itm"><a href="<?php echo $conf["url"]; ?>/">トップページ</a></li>
					<li class="itm"><a href="<?php echo $conf["url"]; ?>/terms">利用規約・ガイドライン</a></li>
					<!--<li class="itm"><a href="<?php //echo $conf["url"]; ?>/guildline">ガイドライン</a></li>-->
				</ul>
				<div class=pc_cm>
					<?php
						$today = date("Y/m/d");
						$target_day = "2020/03/16";
						if(strtotime($today) < strtotime($target_day)) {
							echo "<a href=\"https://px.a8.net/svt/ejp?a8mat=35S7PJ+G0X1YQ+3O26+6FWRL\" rel=\"nofollow\" target=\"_blank\">";
							echo "<img border=\"0\" width=\"300\" height=\"250\" alt=\"\" src=\"https://www22.a8.net/svt/bgt?aid=191112967969&wid=001&eno=01&mid=s00000017115001082000&mc=1\"></a>";
							echo "<img border=\"0\" width=\"1\" height=\"1\" src=\"https://www10.a8.net/0.gif?a8mat=35S7PJ+G0X1YQ+3O26+6FWRL\" alt=\"\">";
						} else {
							echo "<a href=\"https://px.a8.net/svt/ejp?a8mat=35S7PJ+G0X1YQ+3O26+6LWTD\" rel=\"nofollow\" target=\"_blank\">";
							echo "<img border=\"0\" width=\"95%\" alt=\"\" src=\"https://www26.a8.net/svt/bgt?aid=191112967969&wid=001&eno=01&mid=s00000017115001110000&mc=1\"></a>";
							echo "<img border=\"0\" width=\"1\" height=\"1\" src=\"https://www18.a8.net/0.gif?a8mat=35S7PJ+G0X1YQ+3O26+6LWTD\" alt=\"\">";
						}
					?>
				</div>
				<hr class="vertical">
			</div>
			<div class="box2">
				<span class="footer-menu-title">SNS</span>
				<ul>
					<li class="itm"><a href="https://discordapp.com/invite/gaGB6Mm" target="_blank">Discordグループ</a></li>
					<li class="itm"><a href="https://www.youtube.com/channel/UC_qBcdSquUkmuhhvEazpYMg" target="_blank">公式YouTube</a></li>
					<li class="itm"><a href="https://www.twitch.tv/monsterlifeserver" target="_blank">公式Twitch</a></li>
				</ul>
				<div class="pc_cm">
					<a href="https://px.a8.net/svt/ejp?a8mat=35JY3D+CLOCII+50+5SM2NL" rel="nofollow" target="_blank">
					<img border="0" width="95%" alt="" src="https://www26.a8.net/svt/bgt?aid=190727257762&wid=002&eno=01&mid=s00000000018035039000&mc=1"></a>
					<img border="0" width="1" heiお問い合わせt="1" src="https://www10.a8.net/0.gif?a8mat=35JY3D+CLOCII+50+5SM2NL" alt="">
				</div>
				<div class="pc_cm">
					<a href="https://px.a8.net/svt/ejp?a8mat=35JY3D+CM9RCI+1WP2+66H9D" rel="nofollow" target="_blank">
					<img border="0" width="95%" alt="" src="https://www23.a8.net/svt/bgt?aid=190727257763&wid=001&eno=01&mid=s00000008903001038000&mc=1"></a>
					<img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=35JY3D+CM9RCI+1WP2+66H9D" alt="">
				</div>
				<hr class="vertical">
			</div>
			<div class="box3">
				<span class="footer-menu-title">お問い合わせ</span>
				<ul>
					<li class="itm"><a href="<?php echo $conf["url"]; ?>/form">お問い合わせページ</a></li>
					<li class="itm"><a href="<?php echo $conf["url"]; ?>/faq">FAQ</a></li>
					<li class="itm"><a href="https://twitter.com/MLServer2408" target="_blank">Twitter</a></li>
				</ul>
				<div class="pc_cm">
					<a href="https://px.a8.net/svt/ejp?a8mat=35JY3D+CL2W4Y+50+2I3YEP" rel="nofollow" target="_blank">
					<img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=35JY3D+CL2W4Y+50+2I3YEP" alt="">
					<img border="0" width="95%" alt="" src="https://www24.a8.net/svt/bgt?aid=190727257761&wid=001&eno=01&mid=s00000000018015135000&mc=1"></a>
				</div>
				<div class="access">
					<?php
						$keta = 6; //カウンタの最低桁数 ※カウントがこの桁を超えても大丈夫（ちゃんと自動で桁が上がります）
						$base_day = date("Y/m/d"); //日付の取得
						$remoteAddr = $_SERVER['REMOTE_ADDR']; //IP取得
						$filepath = $_SERVER["DOCUMENT_ROOT"] . "/assets/data/count.dat";
						$fp = fopen($filepath,"r+b");
						flock ($fp,LOCK_EX);
						$line = fgets($fp);
						//fclose($fp);
						list($reg_day, $total, $today, $yesterday, $reg_remoteAddr) = explode(",", $line);
						if ($base_day != $reg_day){
							$yesterday = $today;
							$today = 0;
						}
						if ($remoteAddr!=$reg_remoteAddr) {
							$total++;
							$today++;
							ftruncate($fp,0);
							rewind($fp);
							fwrite($fp,"$base_day,$total,$today,$yesterday,$remoteAddr");
							fclose($fp);
						}
						echo "<table class=\"access\" border=\"1\" width=\"100%\" cellspacing=\"0\" cellpadding=\"5\" bordercolor=\"#333333\" id=\"total\">";
						echo "<tr>";
						echo "<th align=\"left\">累計来場者数:</th>";
						echo "<td align=\"right\" style=\"padding-right: 25px;\">".$total."人</td>";
						echo "</tr>";

						echo "<tr>";
						echo "<th align=\"left\">本日の来場者数:</th>";
						echo "<td align=\"right\" style=\"padding-right: 25px;\">".$today."人</td>";
						echo "</tr>";

						echo "<tr>";
						echo "<th align=\"left\">昨日の来場者数:</th>";
						echo "<td align=\"right\" style=\"padding-right: 25px;\">".$yesterday."人</td>";
						echo "</tr>";

						echo "<tr>";
						echo "<th align=\"left\">カウント開始日:</th>";
						echo "<td>2020年02月23日</td align=\"right\">";
						echo "</tr>";

						echo "</table>";
					?>
				</div>
				<hr class="vertical">
			</div>
		</div>
	</div>
	<hr />
    <p id="copyright"><small>&copy; 2018-2020 MonsterLifeServer All Rights Reserved.</small></p>
</footer>
=======
<a href="" class="topBtn" id="topBtn">TOP</a><!--/固定ボタン-->
<footer>
    <p>footer</p>
</footer>
>>>>>>> b0e70e6dcd736e9a1825497e781df8c51dcadfa6
<script type="text/javascript" charset="utf-8" src="<?php echo $conf["url"]; ?>/assets/js/footer.js"></script>