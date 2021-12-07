<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Slider extends Model
{
	use SoftDeletes;
    protected $fillable = ['image', 'status', 'created_at', 'updated_at'];
    protected $dates = [ 'deleted_at' ];
}
