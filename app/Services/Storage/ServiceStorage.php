<?php

namespace App\Services\Storage;


use Illuminate\Support\Facades\Storage;

class ServiceStorage implements Image
{
    public function save($model, $files)
    {
        if($files && $model)
        {
            foreach ($files as $file){
                $filename = uniqid().'.'.$file->getClientOriginalExtension();
                Storage::putFileAs('/public/images/services/origin', $file, $filename);
                $model->image()->create(['filename' => $filename]);
            }
        }
    }
}
