<?php
// 定義要開啟的目錄
$dir = "html/";

// 用 opendir() 開啟目錄，開啟失敗終止程式
$handle = @opendir($dir) or die("Cannot open " . $dir);

echo "<b>目錄:</b><br/>";

// 用 readdir 讀取檔案內容
$ckdir = glob($dir.'*.php');
// print_r($ckdir);

while($ckdir){
    // $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$dir.$ckdir;
    // $fp = file_get_contents($url);
    //       preg_match("/<title>(.*)<\/title>/s", $fp, $match);
    // $title = $match[1];

    echo "Title: $ckdir<br>";
}
// while($file = readdir($handle)){
//     // 排除不顯示
//     if($file != "." && $file != ".." && $file != ".DS_Store" && $file != "css"){
//         echo "<a href=\"$dir$file\" target=\"_blank\">$file</a><br/>";


//     $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$dir.$file;
//     $fp = file_get_contents($url);
//           preg_match("/<title>(.*)<\/title>/s", $fp, $match);
//     $title = $match[1];

//     echo "Title: $title<br>";

//     }
// }

// // 關閉目錄
// closedir($handle);
?>

<?php foreach($ckdir as $value) {?>
<a href="<?php echo $value;?>" title=""><?php echo $value;?></a><br>
<?php }?>
