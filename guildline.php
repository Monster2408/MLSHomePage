<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>

		</style>
		<META http-equiv="Refresh" content="3;URL=terms">
		<title>ガイドライン | MonsterLifeServer</title>
	</head>

	<body>
		<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.php"); ?>
		<div class="wrapper">
			<div class="contents">
				<div class="text_box">
					<h1 class="design">当ページは移行されました。</h1>
					<p>
						当ページは移行されました。移行先に3秒後に移動します。移動しない場合は<a href="terms">コチラ</a>をクリックしてください。
					</p>
				</div>
			</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>
