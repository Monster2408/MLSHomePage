<?php

function isNearDate($text){
    $date = new DateTime();
    $date->setTimeZone( new DateTimeZone('Asia/Tokyo'));
    $str = $date->format('Y/m/d');
    for ($i = 1; $i <= 7; $i++) {
        if ($str === $text) {
            return true;
        }
        $str = date('Y/m/d', strtotime('+' . $i . ' day'));
    }
    return false; 
}

function getCategoryColorCode($text) {
    if (strpos($text, "青鬼ゲーム") !== false) {
        return "#6354A5";
    } 

    else if (strpos($text, "DbD") !== false) {
        return "#2D343B";
    }

    else if ("MonsterBOT" === $text || "Discord" === $text) {
        return "#7289DA";
    }
    else if ("重要" === $text) {
        return "#ff0000";
    }
    
    else { return "#F5A9A9; color: #000000";}
}

/*
    サイト設定などはここで出来ます。
    何かあったら連絡してください。
*/

$url = empty($_SERVER["HTTPS"]) ? "http://" : "https://";
$url .= $_SERVER["HTTP_HOST"];
$dynmap = "http://monsterlifeserver-2020.work:4206/?worldname=survival&mapname=surface&zoom=1";
$localmap = "http://192.168.0.8:4206/?worldname=survival&mapname=surface&zoom=1";

$conf = [
    "textures" => [
        "aooni" => "https://github.com/Monster2408/texture/raw/master/MLS%E9%9D%92%E9%AC%BCver1.zip",
        "dbd" => "https://github.com/Monster2408/texture/raw/master/DeadbyDaylight_in_MC.zip"
    ],
    "url" => $url,
    "server_ip" => "monsterlifeserver-2020.work",
    "server_port" => "25565",
    // サイトの名前
    "name" => "MonsterLifeServer",
    // キャッチコピー
    "catch_copy" => "ミニゲーム企画サーバー",
    // サイトの説明
    "description" => "ミニゲーム企画鯖『MonsterLifeServer』のホームページです。",
    // SNS
    "sns" => [
        "twitter" => "https://twitter.com/MLServer2408",
        "twitter_id" => "@MLServer2408",
        "youtube" => "https://www.youtube.com/channel/UC_qBcdSquUkmuhhvEazpYMg",
        // "discord" => "https://discord.gg/...",
    ],
    // 読み込むCSSファイル
    "styles" => [
        "https://fonts.googleapis.com/icon?family=Material+Icons",
        "/assets/css/style.css",
        "/assets/css/header.css",
        "/assets/css/footer.css",
        "/assets/css/slider.css",
        "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css",
    ],
    // 読み込むスクリプトファイル
    "scripts" => [
        "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js",
        "/assets/js/header.js",
        "/assets/js/slider.js",
        "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js",
    ],
    // アイコンやファビコンの設定
    "icons" => [
        "icon" => "/assets/img/favicon.ico",
        "apple-touch-icon" => "/assets/img/apple-touch-icon.png",
        "android-icon" => "/assets/img/android-icon.png",
    ],
];


// 全ページ共通ヘッダー
$html["common_head"] = <<<__EOM__
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=Shift_Jis">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <!-- ホームページアイコン -->
    <meta name="keywords" content="minecraft,ミニゲーム,企画,青鬼,増え鬼,青鬼ONLINE,マルチ,サーバー" />
    <link rel="icon" href="{$conf["url"]}/assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="{$conf["url"]}/assets/img/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" type="image/png" href="{$conf["url"]}/assets/img/android-touch-icon.png" sizes="192x192">
    <!-- ホームページアイコン -->
    <!-- Twitter用カード設定 -->
    <meta name="twitter:card" content="summary_large_image" /> <!--①-->
    <meta name="twitter:site" content="@MLServer2408" /> <!--②-->
    <meta property="og:url" content="{$conf["url"]}/" /> <!--③-->
    <meta property="og:title" content="MonsterLifeServer" /> <!--④-->
    <meta property="og:description" content="ミニゲーム企画鯖『MonsterLifeServer』のホームページです。" /> <!--⑤-->
    <meta property="og:image" content="https://mineidea.net/storage/images/eHNLuswuMqZBet4jXgR0w9FrZdj4LYM8XqW8Fc0Z.png" /> <!--⑥-->
    <!-- Twitter用カード設定 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="{$conf["url"]}/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="{$conf["url"]}/assets/css/header.css" type="text/css">
    <link rel="stylesheet" href="{$conf["url"]}/assets/css/footer.css" type="text/css">
    <link rel="stylesheet" href="{$conf["url"]}/assets/css/lightbox.css" type="text/css">
__EOM__;

$html["common_foot"] = <<<__EOM__
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{$conf["url"]}/assets/js/lightbox.js"></script>
    <script>
        lightbox.option({
            'wrapAround': true,
            'albumLabel': '全部で%2枚あって今%1枚目の画像 '
        })
        $(function(){
            $("#acMenu dt").on("click", function() {
                $(this).next().slideToggle();
                $(this).toggleClass('active');
                if($(this).hasClass('active')){
                    var text = $(this).data('text-clicked');
                } else {
                    var text = $(this).data('text-default');
                }
                $(this).html(text);
            });
        });
    </script>
__EOM__;

// 全ページ共通ヘッダーの最後に追記する場合
$html["append_head"] = <<<__EOM__
__EOM__;
