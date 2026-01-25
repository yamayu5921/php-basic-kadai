<?php
$item = array(
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
);

foreach ($item as $index => $value) {
    echo "{$index}：{$value}<br>";
}
?>