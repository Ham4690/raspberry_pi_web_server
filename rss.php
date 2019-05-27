<?php
    $rss = simplexml_load_file('http://feeds.feedburner.com/hatena/b/hotentry.css'); //取得先のRSSフィードを指定
    foreach($rss -> item as $item){
        echo $item-> title;
        echo '<br>';
    }
?>