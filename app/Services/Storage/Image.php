<?php

namespace App\Services\Storage;

interface Image
{
    public function save($model, $files);
}
