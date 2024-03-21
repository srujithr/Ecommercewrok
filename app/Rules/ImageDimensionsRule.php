<?php


namespace App\Validators;

use CodeIgniter\Validation\Rules;

class ImageDimensionsRule extends Rules
{
    public function imageDimensionsCheck(string $value, string $options, array $data): bool
    {
        // Add your logic to check image dimensions here
        // Example:
        // Get the uploaded image file
        $file = new \CodeIgniter\Files\File($value);

        // Get image dimensions
        $imageInfo = getimagesize($file->getRealPath());
        $width = $imageInfo[0];
        $height = $imageInfo[1];

        // Check if width and height exceed 400 pixels
        return $width <= 400 && $height <= 400;
    }

    // Optionally, you can provide a custom error message
    public function imageDimensionsError(string $field): string
    {
        return 'The image width and height must not exceed 400 pixels.';
    }
}

