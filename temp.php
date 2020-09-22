<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>

		</style>
		<title>MonsterLifeServer | ホームページ</title>
	</head>
	<body>
		<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.php"); ?>
		<div class="wrapper">
			<div class="contents">
				<div class="text_box">
				<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/slider.php"); ?>
					<h1 class="design">test</h1>
					<h2 class="design">test</h2>
					<!-- ############################
							JSON
						 ############################-->
					<?php
						$base_day = date("Y/m/d"); //日付の取得

						$url = $_SERVER["DOCUMENT_ROOT"] . "/assets/data.json";
						$json = file_get_contents($url);
						$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
						$arr = json_decode($json,true);
						echo $arr->res->blogData->id;
						
						if ($arr === NULL) {
								return;
						} else {
							$json_data = reset(array_keys($arr["access"]["user"])); //配列のキーから最初のものを取得
							$json_today = $arr["access"]["data"]["today"];
							$json_yesterday = $arr["access"]["data"]["yesterday"];
							$json_total = $arr["access"]["data"]["total"];
							if ($json_data != $base_day) {
								$json_count = 0;
								$json_yesterday = $json_today;
								$json_today = 0;
							} else {
								$json_users = reset(array_keys($arr["access"]["user"][$base_day])); //配列のキーから最初のものを取得
								$json_count = count($json_users);
							}
							echo "<table class=\"access\" border=\"1\" width=\"100%\" cellspacing=\"0\" cellpadding=\"5\" bordercolor=\"#333333\" id=\"total\">";
							echo "<tr>";
							echo "<th align=\"left\">累計来場者数:</th>";
							echo "<td align=\"right\" style=\"padding-right: 25px;\">".$json_total."</td>";
							echo "</tr>";
	
							echo "<tr>";
							echo "<th align=\"left\">本日の来場者数:</th>";
							echo "<td align=\"right\" style=\"padding-right: 25px;\">".$json_today."</td>";
							echo "</tr>";
	
							echo "<tr>";
							echo "<th align=\"left\">昨日の来場者数:</th>";
							echo "<td align=\"right\" style=\"padding-right: 25px;\">".$json_yesterday."</td>";
							echo "</tr>";
	
							echo "<tr>";
							echo "<th align=\"left\">カウント開始日:</th>";
							echo "<td align=\"right\" style=\"padding-right: 25px;\">2020年02月23日</td align=\"right\">";
							echo "</tr>";

							echo "<tr>";
							echo "<th align=\"left\">本日の日付:</th>";
							echo "<td align=\"right\" style=\"padding-right: 25px;\">".$json_data."</td align=\"right\">";
							echo "</tr>";
	
							echo "</table>";
						}
					?>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
