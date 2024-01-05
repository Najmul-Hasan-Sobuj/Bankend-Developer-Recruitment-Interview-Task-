<?php

use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManager;

if (!function_exists('customUpload')) {

    /**
     * The function `customUpload` uploads a file to a specified path and resizes it if it is an image.
     * 
     * @param UploadedFile mainFile The main file that is being uploaded. It is an instance of the
     * UploadedFile class.
     * @param string uploadPath The path where the uploaded file will be stored.
     * @return array an array containing information about the uploaded file, such as the file name, file
     * extension, and file size. The array is also being sanitized using the `array_map` function with the
     * `htmlspecialchars` function as the callback.
     */
    function customUpload(UploadedFile $mainFile, string $uploadPath): array
    {
        $output = [];

        $fileName = $mainFile->hashName();

        if (strpos($mainFile->getMimeType(), 'image') === 0) {

            $mainFile->storeAs('public/', $fileName);
        } else {
            $mainFile->storeAs('public/files/', $fileName);
        }

        $output = [
            'status'         => 1,
            'file_name'      => $fileName,
            'file_extension' => $mainFile->getClientOriginalExtension(),
            'file_size'      => $mainFile->getSize(),
            'file_type'      => $mainFile->getMimeType(),
        ];

        return array_map('htmlspecialchars', $output);
    }
}
