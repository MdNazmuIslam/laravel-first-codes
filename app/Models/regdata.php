<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regdata extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded =[];
    // protected $fillable = [
    //     'name', 'email', 'subject', 'number', 'age', 'city', 'country', 'address', 'post_code', 'message', 'condition', 
    // ];
}
