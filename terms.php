<?php


$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
	<head>
		<?php echo $html["common_head"]; ?>
		<style>

		</style>
		<title>利用規約 | MonsterLifeServer</title>
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
							<a itemprop="item" href="<?php echo $conf["url"]; ?>/terms">
								<span itemprop="name">利用規約・ガイドライン</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<h1 class="design">利用規約・ガイドライン</h1>
					<!-- 目次 -->
						<ul class="mokuji">
							<li><a href="#ts">利用規約</a></li>
							<li><a href="#gl">ガイドライン</a></li>
							<li><a href="#gl_1">当鯖を利用するにあたって</a></li>
							<li><a href="#gl_2">当鯖はオープンコミュニティです</a></li>
							<li><a href="#gl_3">話題にあった適切なチャンネルを選びましょう</a></li>
							<li><a href="#gl_4">公用語は日本語です</a></li>
							<li><a href="#gl_5">質問するときには</a></li>
							<li><a href="log">更新履歴</a></li>
						</ul>
					<!-- 目次 -->
					<h2 id="ts" class="design">利用規約</h1>
					<p>
						ユーザーは、本サービスの利用にあたり、以下の行為をしてはなりません。
					</p>
					<div class="or_box" class="design">
						<ul>
							<li>法令または公序良俗に違反する行為を禁止</li>
							<li>無断での配信・宣伝を禁止</li>
							<li>運営が意図しないシステムの利用を禁止</li>
							<li>鯖内での荒らし・煽りなどの問題行為を禁止</li>
							<li>鯖内での口論を禁止</li>
							<li>当鯖のサービス運営を妨害する行為を禁止</li>
							<li>外部の漏らしてはいけない情報(IPなど)の公開を禁止</li>
							<li>配布物の所有権は当鯖に帰属する</li>
							<li>利用停止・BANなどで処罰されている期間中にサブ垢で参加する行為を禁止</li>
						</ul>
						<p>また、利用規約に違反し、処罰された場合の異議申し立ては原則３か月まで有効とし、それ以降は認めないものとする。</p>
					</div>

					<h2 id="gl" class="design">ガイドライン</h1>
					<h3 id="gl_1" class="design">当鯖を利用するにあたって</h2>
					<p>
						私達がMonsterLifeServer（以下「当鯖」）を運営するにあたって、当鯖のユーザーの皆様には守って頂かなければいけないことがあります。それらを列記いたしますので、こちらと<a href="terms">​利用規約</a>をよく読んだ上で、当鯖をご使用下さい。
					</p>
					<h3 id="gl_2" class="design">当鯖はオープンコミュニティです</h2>
					<p>
						あなただけでなく、他のユーザーも使用しています。言葉遣いに配慮し、他人と意見の相違があっても、尊重するようにしましょう。
					</p>
					<h3 id="gl_3" class="design">話題にあった適切なチャンネルを選びましょう</h2>
					<p>
						ただの雑談をするのに聞き専チャットを使うのではなく雑談チャンネルを使いましょう。話題にあったチャンネルを使うことで多くのユーザーがわかりやすく当鯖を利用することができます。</h3>
					</p>
					<h3 id="gl_4" class="design">公用語は日本語です</h2>
					<p>
						当鯖は日本語話者のユーザー向けに公開しています。ですが、英語やその他の言語も、正しい日本語の翻訳を一緒に書いていただければ、基本的に許可はしています。
					</p>
					<h3 id="gl_5" class="design">質問するときには</h2>
					<p>
						過去に同じ質問がないか、すでに当サイトやDiscordグループ等にて公開されてないかを確認しましょう。<br>
						※運営陣が夜中に起きてる可能性は少ないのでお気を付けください。（見つけ次第対応します）
					</p>
					<p>
						『<a href="#gl_2">当鯖はオープンコミュニティです</a>』で記述したように質問でも丁寧に書くことで回答者もいい気分で回答ができます。
					</p>
					
					<h3 id="log" class="design">更新履歴</h2>
					<div class="or_box">
						<div align="center">
							令和　元年　０７月２２日　策定<br>
							令和　元年　０８月０８日　改定<br>
							令和　元年　０８月２９日　改定<br>
							令和　元年　０９月０８日　改定<br>
							令和　二年　０１月０８日　改定<br>
							令和　二年　０５月２０日　改定<br>
							令和　二年　１０月１９日　改定
						</div>
					</div>
				</div>
			<?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
		</div>
		<?php echo $html["common_foot"]; ?>
	</body>
</html>