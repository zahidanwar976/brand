<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'status', 'created_at', 'updated_at'];
    protected $dates = [ 'deleted_at' ];
    use HasFactory;
}
