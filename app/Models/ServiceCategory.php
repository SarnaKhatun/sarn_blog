<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected static $serviceCategory;
    public static function addServiceCategory ($request)
    {
        self::$serviceCategory = new ServiceCategory();

        self::$serviceCategory->service_category_name           = $request->service_category_name;
        self::$serviceCategory->status                  = $request->status;
        self::$serviceCategory->save();
    }

    public static function updateServiceCategory($request, $id)
    {
        self::$serviceCategory = ServiceCategory::find($id);

        self::$serviceCategory->service_category_name           = $request->service_category_name;
        self::$serviceCategory->status                  = $request->status;
        self::$serviceCategory->save();
    }
}
