<?php
    if(isset($_POST['send']) === true){
        $tmp_image = $_FILES['image'];
        var_dump($tmp_image);
        if($tmp_image['error'] === 0 && $tmp_image['size'] !== 0){
            if(is_uploaded_file($tmp_image['tmp_name']) === true){

                $image_info = getimagesize($tmp_image['tmp_name']);
                $image_mime = $image_info['mime'];

                if($tmp_image['size'] > 1048576){
                    echo "アップロードできる画像サイズは1MBまでです。";
                }else if(preg_match('/^image¥/jpeg$/', $image_mime) === 0){
                    echo "アップロードできる画像形式はJPEGのみです";
                }else if(move_uploaded_file($tmp_image['tmp_name'], './upload_'. time() . 'jpeg') === true){
                    echo "画像のアップロードが完成しました";
                }
            }else{
                echo "何かおかしい";
            }
        }else{
            echo "失敗";
        }
    }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>画像アップロード</title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" value=""><br>
            <input type="submit" name="send" value="画像を送信">
        </form>
    </body>
</html>
