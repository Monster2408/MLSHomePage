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
		<title>BAN情報 | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/ban">
								<span itemprop="name">BAN情報</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<h1 class="design">BAN情報</h1>
					<dl id="acMenu">
						<dt>
							<ul class="ac">
								<li>
									MCBans
								</li>
							</ul>
						</dt>
						<dd>
							<ul class="ac">
								<li>
									<div><iframe src="http://mcbans.com/server/62321/monsterlifeserver-2020.work:25566/bans/page/1/embed" width="100%" height="600px"></iframe></div>
								</li>
							</ul>
						</dd>

						<dt>
							<ul class="ac">
								<li>
									総合BAN情報
								</li>
							</ul>
						</dt>
						<dd>
							<ul class="ac">
								<li>
									<table class="ban" border="1" cellpadding="5">
										<caption>BANユーザー一覧</caption>
										<tr>
											<th><b>ユーザーID</b></th>
											<th><b>BAN内容</b></th>
											<th><b>備考</b></th>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/9173ba28-59c7-462c-8024-b35f2d5ff9c7?q=9173ba28-59c7-462c-8024-b35f2d5ff9c7">Aburi_saba</a></td>
											<td>権限乱用 による荒らし, なりすまし行為による荒らし行為</td>
											<td>[<a href="<?php echo $conf["url"]; ?>/assets/img/ban_img/Aburi_saba.png" data-lightbox="ban">証拠画像1</a>]<br>[<a href="<?php echo $conf["url"]; ?>/assets/img/ban_img/Aburi_saba1.png" data-lightbox="ban">証拠画像2</a>]</td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/e9e38388-0f80-4023-93dc-2d4859f011a9?q=e9e38388-0f80-4023-93dc-2d4859f011a9">_Miyachan_</a></td>
											<td>上記, さばの共犯</td>
											<td> </td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/9cbfef39-1126-4c8a-8923-2050def7abd1?q=9cbfef39-1126-4c8a-8923-2050def7abd1">miz_Anet</a></td>
											<td>上記, さばの共犯, 運営への迷惑行為</td>
											<td>[<a href="<?php echo $conf["url"]; ?>/assets/img/ban_img/miz_Anet.jpg" data-lightbox="ban">証拠画像1</a>]</td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/ca509be2-26d1-4e86-a316-ea8b0a900f4d?q=ca509be2-26d1-4e86-a316-ea8b0a900f4d">kaakin</a></td>
											<td>上記, さばの共犯</td>
											<td> </td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/4d9f3dc6-669b-4305-8447-cac20c2f9719?q=4d9f3dc6-669b-4305-8447-cac20c2f9719">haruhiro26</a></td>
											<td>運営に迷惑をかける行為</td>
											<td> </td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/3775cbc2-6299-4b19-851b-adf2156c7887?q=3775cbc2-6299-4b19-851b-adf2156c7887">Baakun</a></td>
											<td>サーバー乗っ取り による荒らし</td>
											<td>[<a href="<?php echo $conf["url"]; ?>/assets/img/ban_img/Baakun.png" data-lightbox="ban">証拠画像1</a>]</td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/3aa57a2e-6f41-499a-8f39-99e366df507d?q=3aa57a2e-6f41-499a-8f39-99e366df507d">84ql_HiMiTsu</a></td>
											<td>上記, Baakunの共犯, 過剰なルールの変更依頼</td>
											<td>[<a href="<?php echo $conf["url"]; ?>/assets/img/ban_img/HiMiTsu.png" data-lightbox="ban">証拠画像1</a>]<br>※証拠画像はBaakunが運営する鯖の非公式Wikiの編集者が記録される部分です</td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/9d12f304-f09d-4c5d-a5e5-1578062f7aee?q=9d12f304f09d4c5da5e51578062f7aee">outa1234</a></td>
											<td>上記, Baakunの共犯, スキンなりすまし<br>※過去のMCIDを含むとMCIDのなりすましの疑いとされるものあり。</td>
											<td> </td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/251b61ea-dbe3-4a6f-bce1-b45dd8d44eec?q=251b61ea-dbe3-4a6f-bce1-b45dd8d44eec">maikukosyou</a></td>
											<td>上記, Baakunの共犯</td>
											<td> </td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/e544b4f6-254b-4390-a5f0-a5d2c60c9ea4?q=e544b4f6-254b-4390-a5f0-a5d2c60c9ea4">umetaro323</a></td>
											<td>上記, Baakunの共犯</td>
											<td> </td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/c2cc1b69-e514-44fa-8f69-eeab3bc0b60d?q=c2cc1b69-e514-44fa-8f69-eeab3bc0b60d">DramStar</a></td>
											<td>オープンサーバーでのルール違反</td>
											<td>[<a href="<?php echo $conf["url"]; ?>/assets/img/ban_img/dramstar.png" data-lightbox="ban">証拠画像1</a>]<br>[<a href="<?php echo $conf["url"]; ?>/assets/img/ban_img/dramstar1.png" data-lightbox="ban">証拠画像2</a>]</td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/cf055f94-985d-4853-862e-85b3232ef4fe?q=cf055f94-985d-4853-862e-85b3232ef4fe">rabichaan_yt</a></td>
											<td>Discordグループにて, 無断な宣伝活動とSPAM行為</td>
											<td> </td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/992ced7d-21a8-486c-a933-90f8d7147ed4?q=992ced7d-21a8-486c-a933-90f8d7147ed4">Miyato1771</a></td>
											<td>運営に迷惑をかける行為</td>
											<td> </td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/0449268f-3a96-4a06-845f-577330dc5300?q=0449268f-3a96-4a06-845f-577330dc5300">kanoshui</a></td>
											<td>運営に迷惑をかける行為</td>
											<td> </td>
										</tr>
										<tr>
											<td>や連邦国家安全省</td>
											<td>Discordグループにて, SPAM行為</td>
											<td>DiscordID：567274836616019969</td>
										</tr>
										<tr>
											<td>dont_like_water</td>
											<td>Discordグループにて, SPAM行為</td>
											<td>DiscordID：417945980915286019</td>
										</tr>
										<tr>
											<td><a href="https://ja.namemc.com/profile/759245d8-8f8b-4422-90d0-8fd8e12f6361?q=759245d8-8f8b-4422-90d0-8fd8e12f6361">McDonaldJP_V3</a></td>
											<td>OP権限の乱用による荒らし行為</td>
											<td> </td>
										</tr>


									</table>
								</li>
							</ul>
						</dd>
					</dl>

				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
