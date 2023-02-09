<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'founded', 'description'];

    protected $table = 'cars';

    protected $primaryKey = 'id';

    public $timestamps = true;

    //protected $dateFormat = 'h:m:s';

}
