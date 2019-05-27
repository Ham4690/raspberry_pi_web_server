<?php
    $rss = simplexml_load_file('http://feeds.feedburner.com/hatena/b/hotentry.css'); //取得先のRSSフィードを指定

    echo "<pre>";
    var_dump($rss);
    echo "</pre>";
?>