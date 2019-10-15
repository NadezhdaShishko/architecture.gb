<?php
//Спагетти-код /Антипаттерны в коде

if($file_type == 'image/jpeg' || $file_type == 'image/png' || $file_type == 'image/gif') {
    if($file_size > 0 and $file_size < 1000000) {
        if(move_uploaded_file($file_tmp_name, "../public/".$upload_dir.$file_name)) {
            if(isset($_POST['edit'])) {
                $id = (int)trim(strip_tags($_POST['edit']));
                var_dump($mysqli);
                editGoods($mysqli, $id, $name, $category, $brand, $designer, $material, $color, $size, $description, $price, $quantity, $upload_dir.$file_name);
                // var_dump($brand);
                header ("Location: ../admin/index.php");
            } else {
                addGoods($mysqli, $name, $category, $brand, $designer, $material, $color, $size, $description, $price, $quantity, $upload_dir.$file_name);
                header ("Location: ../admin/index.php");
            }
            // var_dump($brand);
            $message = "<h3>Файл успешно загружен на сервер!</h3>";
        } else {
            // var_dump($brand);
            $message = "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
            die;
        }
    } else {
        // var_dump($brand);
        $message = "<b>Ошибка! Картинка превышает 1Мб.</b>";
    }
    // var_dump($brand);
} else {
    $message = "<b> Картинка не подходит по типу! Картинка должна быть в формате jpag, png или gif! </b>";
}