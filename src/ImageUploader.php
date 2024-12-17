<?php

namespace src;

class ImageUploader
{
    public static function uploadImage($imagePath) {
        $targetDir = 'uploads/';
        $targetFile = $targetDir . basename($imagePath);

        if (move_uploaded_file($imagePath, $targetFile)) {
            return $targetFile;
        } else {
            return false;
        }
    }
}