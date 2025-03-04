<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class StoreHelper
{
    public static function store($file, string $type)
    {
        try {
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            if ($type == 'thumbnails') {

                $folderPath = public_path('assets/images/thumbnails');

                self::createDirectoryIfNotExists($folderPath);
                $file->move($folderPath, $filename);

                return '/assets/images/thumbnails/' . $filename;
            } elseif ($type == 'ads') {
                $folderPath = public_path('assets/images/ads');

                self::createDirectoryIfNotExists($folderPath);
                $file->move($folderPath, $filename);

                return '/assets/images/ads/' . $filename;
            } else {

                throw new \Exception('Invalid type');
            }
        } catch (\Throwable $th) {
            Log::error('store file : ' . $th->getMessage());
            throw new \Exception($th->getMessage());
        }
    }

    private static function createDirectoryIfNotExists($folderPath)
    {
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }
    }
}
