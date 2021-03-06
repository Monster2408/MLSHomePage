<?php
	//処理内容を定義

    $config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');
    //処理内容を定義

    function send_to_discord($message, $ip) {
        $webhook_url = 'https://discordapp.com/api/webhooks/754263398656507946/Dm-JXavOHrMIRHWjIRDYud80k9WPz2btsSl57F_Rj4E5y8W3ALn-47Wt2Eeq70Zs4m5F';
        if ((string)$ip !== "::1") {
            $webhook_url = 'https://discordapp.com/api/webhooks/735374816751648850/4nDy1AzfN1tINghoW-goQRQZT-lb0Hnmx8UmmMDFbik9CYD6a0DoxNDiOvOahqZ9Nuwl';
        }
        $hookObject = json_encode($message);
        $ch = curl_init();
        curl_setopt_array( $ch, [
            CURLOPT_URL => $webhook_url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $hookObject,
            CURLOPT_HTTPHEADER => [
                "Length" => strlen($hookObject),
                "Content-Type" => "application/json"
            ]
        ]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json'
        ));
        $response = curl_exec( $ch );
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
        curl_close($ch);
        return TRUE; //$responseの値がokならtrueを返す
    }

    // 変数の初期化
    $page_flag = 0;
    if( !empty($_POST['btn_confirm']) ) {

        $page_flag = 1;
    
    } elseif( !empty($_POST['btn_submit']) ) {
    
        $page_flag = 2;
        if (!empty($_POST['email'])) $email = $_POST['email'];
        if (!empty($_POST['contact'])) $contact = $_POST['contact'];

        $genre = 'その他';
        if( !empty($_POST['age']) && $_POST['age'] === "1" ){ $genre = 'Discordグループ'; } 
        if( !empty($_POST['age']) && $_POST['age'] === "2" ){ $genre = 'Minecraft鯖（24H）'; } 
        if( !empty($_POST['age']) && $_POST['age'] === "3" ){ $genre = 'Minecraft鯖（企画）'; } 
        if( !empty($_POST['age']) && $_POST['age'] === "4" ){ $genre = 'MonsterBOT'; } 
        if( !empty($_POST['age']) && $_POST['age'] === "5" ){ $genre = 'ホームページ'; } 
        if( !empty($_POST['age']) && $_POST['age'] === "6" ){ $genre = 'ブログ'; } 
        if( !empty($_POST['age']) && $_POST['age'] === "7" ){ $genre = '非公式Wiki'; } 
        if( !empty($_POST['age']) && $_POST['age'] === "8" ){ $genre = 'その他'; }

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        
        $text = '>>> **__IP__**';
        if (!empty($ip)) $text = $text . '```' . $ip . '```';
        else $text = $text . '```IDK```';

        if (!empty($email)) $text = $text . '**__連絡先__** ```' . $email . '```';
        else $text = $text . '**__連絡先__** ```無記入```';

        if (!empty($genre)) $text = $text . '**__ジャンル__** ```' . $genre . '```';
        else $text = $text . '**__ジャンル__** ```' . $genre . '```';

        if (!empty($contact)) $text = $text . '**__内容__** ```' . $contact . '```';
        else $text = $text . '**__内容__** ```無記入```';
							 
		//メッセージの内容を定義
		$message = array(
			'username' => '総合お問い合わせ', 
			'content' => $text, 
		);
		send_to_discord($message, $ip); //処理を実行
    }

    ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
    <html lang="ja">
        <head>
            <title>お問い合わせ | MonsterLifeServer</title>
            <?php echo $html["common_head"]; ?>
            <style rel="stylesheet" type="text/css">
    
                .element_wrap h1 {
                    margin-bottom: 20px;
                    padding: 20px 0;
                    color: #209eff;
                    font-size: 122%;
                    border-top: 1px solid #999;
                    border-bottom: 1px solid #999;
                }

                .element_wrap p.optional {
                    color: #696969;
                    margin-left: 5px;
                }

                .element_wrap p.help {
                    color: #696969;
                    width: 100%;
                    margin: 0;
                }
    
                .element_wrap input[type=text] {
                    padding: 5px 10px;
                    font-size: 86%;
                    border: none;
                    border-radius: 3px;
                    border: 2px solid #960202;
                    background: #F5A9A9;
                }

                .element_wrap input[type=text]:focus {
                    outline: none;
                }

                .element_wrap textarea[name=contact] {
                    max-width: 100%;
                    min-width: 100%;
                    width: 100%;
                    height: 200px;
                    padding: 5px;
                    border: 2px solid #960202;
                    background: #F5A9A9;
                    border-radius: 0.67em; 
                }

                .element_wrap textarea[name=contact]:focus {
                    outline: none;
                }
    
                input[name=btn_confirm],
                input[name=btn_submit],
                input[name=btn_back] {
                    margin-top: 10px;
                    padding: 5px 20px;
                    font-size: 100%;
                    color: #fff;
                    cursor: pointer;
                    border: none;
                    border-radius: 3px;
                    box-shadow: 0 3px 0 #2887d1;
                    background: #4eaaf1;
                }

                a.form {
                    margin-top: 10px;
                    padding: 5px 20px;
                    font-size: 100%;
                    color: #fff;
                    cursor: pointer;
                    border: none;
                    border-radius: 3px;
                    box-shadow: 0 3px 0 #2887d1;
                    background: #4eaaf1;
                    text-decoration: none;
                }
    
                input[name=btn_back] {
                    margin-right: 20px;
                    box-shadow: 0 3px 0 #777;
                    background: #999;
                }
    
                .element_wrap {
                    margin-bottom: 10px;
                    padding: 10px 0;
                    border-bottom: 1px solid #ccc;
                    text-align: left;
                }
    
                .element_wrap label {
                    display: inline-block;
                    margin:  0;
                    font-weight: bold;
                    width: 100%;
                }
    
                .element_wrap p {
                    display: inline-block;
                    margin:  0;
                    text-align: left;
                }
            </style>
        </head>
        <body>
            <?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/header.php"); ?>
            <div class="wrapper">
                <div class="contents">
                    <div class="text_box">
                        <!-- パンくずリスト始 -->
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
                                <a itemprop="item" href="<?php echo $conf["url"]; ?>/form">
                                    <span itemprop="name">お問い合わせ</span>
                                </a>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                        <!-- パンくずリスト終 -->
    
                        <!-- ↓↓↓↓↓ ここから本文 ↓↓↓↓↓ -->
                        <h1 class="design">お問い合わせ</h1>

                        <?php if ( $page_flag === 1): ?>

                        <form method="post" action="">
                            <div class="element_wrap">
                                <label>連絡先</label>
                                <p><?php echo $_POST['email']; ?></p>
                            </div>
                            <?php 
                                $genre = 'その他';
                                if( !empty($_POST['age']) && $_POST['age'] === "1" ){ $genre = 'Discordグループ'; } 
                                if( !empty($_POST['age']) && $_POST['age'] === "2" ){ $genre = 'Minecraft鯖（24H）'; } 
                                if( !empty($_POST['age']) && $_POST['age'] === "3" ){ $genre = 'Minecraft鯖（企画）'; } 
                                if( !empty($_POST['age']) && $_POST['age'] === "4" ){ $genre = 'MonsterBOT'; } 
                                if( !empty($_POST['age']) && $_POST['age'] === "5" ){ $genre = 'ホームページ'; } 
                                if( !empty($_POST['age']) && $_POST['age'] === "6" ){ $genre = 'ブログ'; } 
                                if( !empty($_POST['age']) && $_POST['age'] === "7" ){ $genre = '非公式Wiki'; } 
                                if( !empty($_POST['age']) && $_POST['age'] === "8" ){ $genre = 'その他'; }
                            ?>
                            <div class="element_wrap">
                                <label>問い合わせジャンル</label>
                                <p><?php echo $genre; ?></p>
                            </div>
                            <div class="element_wrap">
                                <label>問い合わせ内容</label>
                                <p><?php echo $_POST['contact']; ?></p>
                            </div>
                            <input type="submit" name="btn_back" value="戻る">
                            <input type="submit" name="btn_submit" value="送信">
                            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
                            <input type="hidden" name="age" value="<?php echo $_POST['age']; ?>">
                            <input type="hidden" name="contact" value="<?php echo $_POST['contact']; ?>">
                        </form>

                        <?php elseif( $page_flag === 2 ): ?>
                        <div class="element_wrap">
                            <p>送信が完了しました。</p>
                        </div>
                        <a href="<?php echo $conf["url"]; ?>/form" class="form">はじめに戻る</a>

                        <?php else: ?>
    
                        <form method="post" action="">
                            <div class="element_wrap">
                                <label>連絡先<p class="optional">- 任意</p></label>
                                <p class="help">返信が必須の方はTwitterかDiscordのIDを記述してください。</p>
                                <input name="email" type="text" value="<?php if( !empty($_POST['email']) ){ echo $_POST['email']; } ?>">
                            </div>

                            <div class="element_wrap">
                                <label>お問い合わせジャンル</label>
                                <select name="age" required="required">
                                    <option value="">選択してください</option>
                                    <option value="1" <?php if( !empty($_POST['age']) && $_POST['age'] === "1" ){ echo 'selected'; } ?>>Discordグループ</option>
                                    <option value="2" <?php if( !empty($_POST['age']) && $_POST['age'] === "2" ){ echo 'selected'; } ?>>Minecraft鯖（24H）</option>
                                    <option value="3" <?php if( !empty($_POST['age']) && $_POST['age'] === "3" ){ echo 'selected'; } ?>>Minecraft鯖（企画）</option>
                                    <option value="4" <?php if( !empty($_POST['age']) && $_POST['age'] === "4" ){ echo 'selected'; } ?>>MonsterBOT</option>
                                    <option value="5" <?php if( !empty($_POST['age']) && $_POST['age'] === "5" ){ echo 'selected'; } ?>>ホームページ</option>
                                    <option value="6" <?php if( !empty($_POST['age']) && $_POST['age'] === "6" ){ echo 'selected'; } ?>>ブログ</option>
                                    <option value="7" <?php if( !empty($_POST['age']) && $_POST['age'] === "7" ){ echo 'selected'; } ?>>非公式Wiki</option>
                                    <option value="8" <?php if( !empty($_POST['age']) && $_POST['age'] === "8" ){ echo 'selected'; } ?>>その他</option>
                                </select>
                            </div>
                            <div class="element_wrap">
                                <label>お問い合わせ内容</label>
                                <textarea name="contact" required="required"><?php if( !empty($_POST['contact']) ){ echo $_POST['contact']; } ?></textarea>
                            </div>
                            <div class="popup-wrap">
                                <div class="element_wrap">
                                    <input type="submit" class="open" name="btn_confirm" value="入力内容を確認する">
                                </div>
                            </div>
                        </form>
                        <?php endif; ?>
    
                    </div>
                </div>
                <?php include( $_SERVER["DOCUMENT_ROOT"] . "/assets/include/footer.php"); ?>
            </div>
            <?php echo $html["common_foot"]; ?>
        </body>
    </html>
    