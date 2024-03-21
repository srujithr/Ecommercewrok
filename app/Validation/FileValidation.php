<?php

namespace App\Validation;

use CodeIgniter\Validation\Rules;

class FileValidation extends Rules
{
    /**
     * Checks if the uploaded file is an image.
     *
     * Usage: 'is_image[uploaded_file]'
     *
     * @param string $str
     * @param string $field
     * @param array $data
     * @return bool
     */
    public function is_image(string $str, string $field, array $data): bool
    {
        if (!empty($_FILES[$field]['tmp_name']) && is_uploaded_file($_FILES[$field]['tmp_name'])) {
            $mime_type = mime_content_type($_FILES[$field]['tmp_name']);
            return strpos($mime_type, 'image/') === 0;
        }
        return false;
    }
}
