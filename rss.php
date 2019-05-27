<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RSS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .list-group-margin {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <p class="navbar-brand">RSS</p>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php createRssList("http://feeds.feedburner.com/hatena/b/hotentry.css"); ?>
        </div>
    </div>
</body>
</html>
<?php
function createRssList(string $url) {
    $count    = 0;  // カウント保持用
    $count_mx = 20; // 表示する行数

    $rss = simplexml_load_file($url);   // RSSファイルを取得
    if ($rss === false) return false;   // 取得失敗時、処理を終了

    echo("<div class=\"col-sm-12 col-md-6\">");
    echo("<div class=\"list-group list-group-margin\">");
    echo("<a href=\"" . $rss -> channel -> link  . "\" class=\"list-group-item active\">" . $rss -> channel -> title . "</a>");

    // 記事一覧の処理
    foreach ($rss -> item as $item) {
        if ($count >= $count_mx) break; // 最大数に達したら終了

        echo("<a href=\"" . $item -> link . "\" class=\"list-group-item\">" . $item -> title . "</a>");
        $count++;
    }

    echo("</div></div>");
}
?>
