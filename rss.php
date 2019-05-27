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
        <div class="row"></div>
    </div>
</body>
</html>
<?php 
$rss = simplexml_load_file('http://feeds.feedburner.com/hatena/b/hotentry.css'); //取得先のRSSフィードを指定
foreach ($rss -> item as $item) {
    echo $item -> title;
    echo "<br>";
}
?>
