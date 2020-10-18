<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/module/include/strm/youtubedataapi_v3_list/style.css">
    <title>YouTubeAPIv3サンプル | 複数のチャンネル情報取得</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="948842587569-9p4s6g6fsmbiabifkrfgeqq05r18kge9.apps.googleusercontent.com">
</head>
<body>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
</body>
<script>
function onSignIn(googleUser) {
    var id_token = googleUser.getAuthResponse().id_token;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://yourbackend.example.com/tokensignin');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        console.log('Signed in as: ' + xhr.responseText);
    };
    xhr.send('idtoken=' + id_token);
}
</script>
</html>
