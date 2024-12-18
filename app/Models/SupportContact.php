<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportContact extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','email','support_motivations_id','description'];
}
