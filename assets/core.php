<?php
date_default_timezone_set("Asia/Tokyo");
const INDENT = '    ';
$html['head'] = '<meta charset="utf-8">'.PHP_EOL;
$html['head'] .= '<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">'.PHP_EOL;
if(isset($description)) {
    $html['head'] .= '<meta name="description" content="'.$description.'">'.PHP_EOL;
}
if(isset($type) && $type === 'top') {
    $html['head'] .= '<meta property="og:type" content="website">'.PHP_EOL;
} else {
    $html['head'] .= '<meta property="og:type" content="article">'.PHP_EOL;
}
if(isset($title)) {
    $html['head'] .= '<meta property="og:title" content="'.$title.'">'.PHP_EOL;
} else {
    $html['head'] .= '<meta property="og:title" content="'.$conf['name'].'">'.PHP_EOL;
}
if(isset($url)) {
    $html['head'] .= '<meta property="og:url" content="'.$url.'">'.PHP_EOL;
}
if(isset($thumbnail)) {
    $html['head'] .= '<meta property="og:image" content="'.$thumbnail.'">'.PHP_EOL;
} else {
    if(isset($conf['icons']['apple-touch-icon'])) {
        $html['head'] .= '<meta property="og:image" content="'.$conf['icons']['apple-touch-icon'].'">'.PHP_EOL;
    }
}
if(isset($description)) {
    $html['head'] .= '<meta property="og:description" content="'.$description.'">'.PHP_EOL;
}
if(isset($thumbnail)) {
    $html['head'] .= '<meta name="twitter:card" content="summary_large_image">'.PHP_EOL;
} else {
    $html['head'] .= '<meta name="twitter:card" content="summary">'.PHP_EOL;
}
if(isset($conf['twitter'])) {
    $html['head'] .= '<meta name="twitter:site" content="@MLServer2408">'.PHP_EOL;
}

if(isset($url)) {
    $html['head'] .= '<link rel="canonical" href="'.$url.'">'.PHP_EOL;
}
foreach ($conf['styles'] as $value) {
    $html['head'] .= '<link rel="stylesheet" href="'.$value.'">'.PHP_EOL;
}
foreach ($conf['icons'] as $key => $value) {
    if($key === 'icon') {
        $html['head'] .= '<link rel="icon" href="'.$value.'">'.PHP_EOL;
    } elseif($key === 'apple-touch-icon') {
        $html['head'] .= '<link rel="apple-touch-icon" href="'.$value.'" sizes="180x180">'.PHP_EOL;
    } elseif($key === 'android-icon') {
        $html['head'] .= '<link rel="icon" type="image/png" href="'.$value.'" sizes="192x192">'.PHP_EOL;
    }
}
if(isset($html['append_css'])) {
    $html['head'] .= '<style>'.$html['append_css'].'</style>'.PHP_EOL;
}

if(isset($title)) {
    if(isset($type) && $type === 'top') {
        $html['head'] .= '<title>'.$conf['name'].'</title>'.PHP_EOL;
    } else {
        $html['head'] .= '<title>'.$title.' | '.$conf['name'].'</title>'.PHP_EOL;
    }
} else {
    $html['head'] .= '<title>'.$conf['name'].'</title>'.PHP_EOL;
}

$html['head'] .= $html['append_head'];
$html['head'] = preg_replace('/^/m', '    ', $html['head']);

$html['scripts'] = '';
foreach ($conf['scripts'] as $value) {
    $html['scripts'] .= '    <script type="text/javascript" src="'.$value.'"></script>'.PHP_EOL;
}