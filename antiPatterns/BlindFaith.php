<?php
// Слепая вера / Антипаттерны в коде
// проверять данные, переданные пользователем
if ($_POST['submit']) {
    $name = trim(strip_tags($_POST['name_item']));
    $category = trim(strip_tags($_POST['category']));
    $brand = trim(strip_tags($_POST['brand']));
    $designer = trim(strip_tags($_POST['designer']));
    $material = trim(strip_tags($_POST['material']));
    $color = trim(strip_tags($_POST['color']));
    $size = trim(strip_tags($_POST['size']));
    $description = trim(strip_tags($_POST['desc_item']));
    $price = (int)trim(strip_tags($_POST['price']));
    $quantity = (int)trim(strip_tags($_POST['quantity']));