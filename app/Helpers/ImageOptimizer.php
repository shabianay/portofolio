<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageOptimizer
{
    public static function optimizeAndStore(UploadedFile $file, string $path, string $disk = 'public'): string
    {
        $tempPath = sys_get_temp_dir() . '/' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(dirname($tempPath), basename($tempPath));
        
        return self::optimizePath($tempPath, $path, $disk);
    }

    public static function optimizePath(string $sourcePath, string $destFolder, string $disk = 'public'): string
    {
        if (!file_exists($sourcePath)) {
            return $sourcePath;
        }

        $extension = strtolower(pathinfo($sourcePath, PATHINFO_EXTENSION));
        $filename = pathinfo($sourcePath, PATHINFO_FILENAME);
        $uniqueName = $filename . '-' . uniqid() . '.webp';

        $image = match ($extension) {
            'png' => @imagecreatefrompng($sourcePath),
            'gif' => @imagecreatefromgif($sourcePath),
            'webp' => @imagecreatefromwebp($sourcePath),
            default => @imagecreatefromjpeg($sourcePath),
        };

        if (!$image) {
            return $sourcePath;
        }

        $width = imagesx($image);
        $height = imagesy($image);

        // Convert palette images to true color (required for WebP)
        if (!imageistruecolor($image)) {
            $trueColor = imagecreatetruecolor($width, $height);
            imagealphablending($trueColor, false);
            imagesavealpha($trueColor, true);
            imagecopy($trueColor, $image, 0, 0, 0, 0, $width, $height);
            imagedestroy($image);
            $image = $trueColor;
        }

        // Resize if too large (max 1920px width)
        $maxWidth = 1920;
        if ($width > $maxWidth) {
            $ratio = $maxWidth / $width;
            $newWidth = $maxWidth;
            $newHeight = (int)($height * $ratio);
            $resized = imagecreatetruecolor($newWidth, $newHeight);
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            imagecopyresampled($resized, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagedestroy($image);
            $image = $resized;
        }

        // Save as WebP with quality 80
        $tempWebP = sys_get_temp_dir() . '/' . $uniqueName;
        imagewebp($image, $tempWebP, 80);
        imagedestroy($image);

        // Move to storage
        $fullDestPath = storage_path('app/public/' . $destFolder . '/' . $uniqueName);
        if (!is_dir(dirname($fullDestPath))) {
            mkdir(dirname($fullDestPath), 0755, true);
        }
        
        copy($tempWebP, $fullDestPath);
        unlink($tempWebP);

        return $destFolder . '/' . $uniqueName;
}
}
