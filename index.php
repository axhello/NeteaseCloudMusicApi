<?php

require dirname(__FILE__) . '/v2/MusicAPI.php';

$api = new MusicAPI();

$keyword = 'tobu';
$song_id = 30089608;
$album_id = 18896;
$mv_id = 5341392;

//返回搜索结果
//传入参数（搜索内容，返回的条数，偏移量, 类型）
$result = $api->search($keyword, 10);
print_r($result);

//返回歌曲详情
// $detail = $api->detail($song_id);
// print_r($detail);

//返回歌曲链接
// $mp3url = $api->mp3url($song_id);
// print_r($mp3url);

//歌曲专辑（不可用）
// $albums = $api->albums($album_id, 30);
// print_r($albums);

//歌曲歌词
// $lyric = $api->lyric($song_id);
// print_r($lyric);

//歌曲MV (如果有)
// $mv = $api->mv($mv_id);
// print_r($mv);




