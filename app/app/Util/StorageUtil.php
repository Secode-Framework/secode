<?php

namespace App\Util;

use Illuminate\Support\Facades\File;

class StorageUtil
{
    /**
     * @param  $file
     * @param string $pathName
     * @param string $nameImagen
     * @return string
     */
    public static function storeAs($file, string $pathName, string $nameImagen): string
    {
        $file->storeAs(self::getAbsolutePublicPathName($pathName), $nameImagen);

        return self::getAbsolutePublicPathName($pathName) . $nameImagen;
    }

    public static function getAbsolutePublicPathName(string $pathName): string
    {
        return '/storage/' . environmentId() . $pathName;
    }

    public static function delete(string $fileName): void
    {
        if (file_exists(public_path() . $fileName)) {
            File::delete(public_path() . $fileName);
        }
    }
}
