<?php

require dirname(__FILE__) . '/MusicAPI.php';

$api = new MusicAPI();

$keyword = 'Tobu';
$song_id = 407044249;
$album_id = 18896;

//返回搜索结果
//传入参数（搜索内容，返回的条数，偏移量）
$result = $api->search($keyword, 1, 0);

//返回歌曲详情
$detail = $api->detail($song_id);

//歌曲专辑（不可用）
$albums = $api->albums($album_id, 30);

//歌曲歌词
$lyric = $api->lyric($song_id);


print_r($result);
// print_r($detail);
// print_r($albums);
// print_r($lyric);

