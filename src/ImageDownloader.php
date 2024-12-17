<?php

namespace src;

class ImageDownloader
{
    public static function downloadImage($imageUrl) {
        $imagePath = '/path/to/save/image.jpg'; // Путь для сохранения изображения
        file_put_contents($imagePath, file_get_contents($imageUrl)); // Сохранение изображения
        return $imagePath;
    }
}

?>