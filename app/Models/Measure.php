<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected $table = 'measure';
    protected $primaryKey = 'id';
    public $incrementing = true;
    use HasFactory;
}
