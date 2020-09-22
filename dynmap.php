<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>
			.dynmap {
				width: 100%;
				height: 1000px;
			}
		</style>
		<title>MonsterLifeServer | ホームページ</title>
	</head>
	<body onContextmenu="return false">
		<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.php"); ?>
		<div class="wrapper">
			<div class="contents">
				<?php 
					$IP = $_SERVER['REMOTE_ADDR'];
					$serverIP = gethostbyname( $conf["server_ip"] );
					//echo $IP . ' | ' . $serverIP;
					if ("$IP" == "$serverIP") {
						echo '<object class="dynmap" data=' . $localmap . '>このサイトは現在表示できません。<!-- 埋め込みできない場合の代替データ --></object>';
					} else {
						echo '<object class="dynmap" data=' . $dynmap . '>このサイトは現在表示できません。<!-- 埋め込みできない場合の代替データ --></object>';
					}
				?>

			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
