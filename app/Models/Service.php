<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    protected static $service;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function addService ($request)
    {
        self::$image = $request->file('image');

        Service::uploadImage(self::$image);

        self::$service = new Service();

        self::$service->service_category_id   = $request->service_category_id;
        self::$service->title   = $request->title;
        self::$service->description   = $request->description;
        self::$service->image            = self::$imageUrl  ;
        self::$service->status       = $request->status;
        self::$service->save();

    }

    public static function updateService ($request,$id)
    {
        self::$image = $request->file('image');
        self::$service = Service::find($id);
//        self::$service = Service::where('id', $id)->first();

        Service::uploadImage(self::$image, self::$service);

        self::$service->service_category_id   = $request->service_category_id;
        self::$service->title   = $request->title;
        self::$service->description   = $request->description;
        self::$service->image            = self::$imageUrl  ;
        self::$service->status       = $request->status;
        self::$service->save();
    }


    public static function uploadImage ($image, $service = null)
    {
        if ($image)
        {
            if (isset($service))
            {
                if (file_exists($service->image))
                {
                    unlink($service->image);
                }
            }

            self::$imageName = time().rand(10,1000).'.'.$image->getClientOriginalExtension();
            self::$imageDirectory = 'assets/img/service/';
            $image->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else {
            self::$imageUrl = $service->image;
        }

        return self::$imageUrl;
    }


    public function serviceCategory ()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
