<?php

namespace src;

class ImageProcessor
{
    public static function processImage($imagePath, $imageText) {
        $image = imagecreatefromjpeg($imagePath); // Создание изображения из файла
        $width = imagesx($image);
        $height = imagesy($image);

        // Уменьшение высоты до 200px и обрезка по ширине до 200px
        $newImage = imagecreatetruecolor(200, 200);
        imagecopyresampled($newImage, $image, 0, 0, 0, 0, 200, 200, $width, $height);

        // Наложение текста на изображение
        $textColor = imagecolorallocate($newImage, 255, 255, 255); // Белый цвет текста
        imagettftext($newImage, 12, 0, 10, 20, $textColor, 'arial.ttf', $imageText); // Добавление текста

        $processedImagePath = '/path/to/save/processed_image.jpg'; // Путь для сохранения обработанного изображения
        imagejpeg($newImage, $processedImagePath); // Сохранение обработанного изображения

        imagedestroy($image);
        imagedestroy($newImage);

        return $processedImagePath;
    }
}