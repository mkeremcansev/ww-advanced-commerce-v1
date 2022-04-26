<?php

namespace App\Helper;

use Illuminate\Support\Str;

class Helper
{
    public static function imageUpload($file, String $path)
    {
        $name = date('d-m-Y-H-i-s') . rand(1, 999) . '.' . $file->extension();
        $file->move(public_path($path), $name);
        $move = $path . '/' .  $name;
        return $move; 
    }

    public static function xmlUpload($file, String $path)
    {
        $name = date('d-m-Y-H-i-s') . rand(1, 999) . '.' . $file->extension();
        $file->move(public_path($path), $name);
        $move = $path . '/' .  $name;
        return $move;
    }

    public static function deleteOldImage(string $path)
    {
        return unlink(public_path($path));
    }

    public static function sku($return)
    {
        $return = mb_strtoupper(Str::random(3), "UTF-8") . "-" . mb_strtoupper(Str::random(3), "UTF-8") . "-" . rand(100, 999);
        return $return;
    }

    public static function slug(string $title)
    {
        return Str::slug($title) . '-' . rand(1, 9999);
    }

    public static function name($string){
        $data = Str::of($string)->explode(' ');
        $data->pop();
        return $data->implode(' ');
    }

    public static function surname($string){
        return Str::of($string)->explode(' ')->last();
    }
}
