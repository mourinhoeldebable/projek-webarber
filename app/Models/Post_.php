<?php

namespace App\Models;

class Post
{
   private static $blog_bear = 
    [
        [
        "tipe" => "Beruang Madu",
        "nama" => "Ipul",
        "pengalaman" => "340 Jam"
        ],
        [
        "tipe" => "Beruang Salju",
        "nama" => "Dani",
        "pengalaman" => "270 Jam"
        ]
    ];
       public static function all()
       {
            return self::$blog_bear;
        }
}
