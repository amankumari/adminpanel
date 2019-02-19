<?php

namespace App\Modal;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table='sliders';
    protected $fillable=['image_name','image_alt','description','file'];
}
