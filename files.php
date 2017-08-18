<?php
// 定義要開啟的目錄
$dir = "html/";

// 用 opendir() 開啟目錄，開啟失敗終止程式
$handle = @opendir($dir) or die("Cannot open " . $dir);

echo "<b>目錄:</b><br/>";

// 用 readdir 讀取檔案內容
while($file = readdir($handle)){
    // 將 "." 及 ".." 排除不顯示
    if($file != "." && $file != ".." && $file != ".DS_Store"){
        echo "<a href=\"$file\" target=\"_blank\">$file</a><br/>";
    }
}

// 關閉目錄
closedir($handle);
?>