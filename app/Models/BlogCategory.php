<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected static $blogCategory;
    public static function addBlogCategory ($request)
    {
        self::$blogCategory = new BlogCategory();

        self::$blogCategory->category_name           = $request->category_name;
        self::$blogCategory->status                  = $request->status;
        self::$blogCategory->save();
    }

    public static function updateBlogCategory($request, $id)
    {
        self::$blogCategory = BlogCategory::find($id);

        self::$blogCategory->category_name           = $request->category_name;
        self::$blogCategory->status                  = $request->status;
        self::$blogCategory->save();
    }
}
