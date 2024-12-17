<?php
// Обработка загруженного изображения
include 'src/ImageDownloader.php';
include 'src/ImageProcessor.php';
include 'src/ImageUploader.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imageUrl = $_POST['imageUrl'];
    $imageText = $_POST['imageText'];

    // Загрузка изображения по ссылке
    $downloadedImagePath = ImageDownloader::downloadImage($imageUrl);

    // Обработка изображения
    $processedImagePath = ImageProcessor::processImage($downloadedImagePath, $imageText);

    // Загрузка обработанного изображения на сервер
    $uploadedImagePath = ImageUploader::uploadImage($processedImagePath);

    echo $uploadedImagePath;
}
?>

