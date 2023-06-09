<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected static $blog;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function addBlog ($request)
    {
        self::$image = $request->file('image');
        Blog::uploadImage(self::$image);

        self::$blog = new Blog();

        self::$blog->blog_category_id    = $request->blog_category_id;
        self::$blog->title    = $request->title;
        self::$blog->author_id    = auth()->id();
        self::$blog->short_description    = $request->short_description;
        self::$blog->long_description    = $request->long_description;
        self::$blog->image     = self::$imageUrl;
        self::$blog->status    = $request->status;
        self::$blog->save();
    }

    public static function updateBlog ($request, $id)
    {
        self::$blog = Blog::find($id);
        self::$image = $request->file('image');
        Blog::uploadImage(self::$image, self::$blog);

        self::$blog->blog_category_id                   = $request->blog_category_id;
        self::$blog->title                              = $request->title;
        self::$blog->author_id                          = auth()->id();
        self::$blog->short_description                  = $request->short_description;
        self::$blog->long_description                   = $request->long_description;
        self::$blog->image                              = self::$imageUrl;
        self::$blog->status                             = $request->status;
        self::$blog->save();
    }


    public static function uploadImage ($image, $blog = null)
    {
        if ($image)
        {
            if (isset($blog))
            {
                if (file_exists($blog->image))
                {
                    unlink($blog->image);
                }
            }

            self::$imageName = time().rand(10,1000).'.'.$image->getClientOriginalExtension();
            self::$imageDirectory = 'admin-assets/assets/img/blogs/';
            $image->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else {
            self::$imageUrl = $blog->image;
        }
        return self::$imageUrl;
    }

    public function blogCategory ()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
