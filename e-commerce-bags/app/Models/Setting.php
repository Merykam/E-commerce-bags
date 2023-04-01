<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'description', 'logo', 'email', 'adress', 'facebook', 'instagram', 'WhatsApp', 'created_at', 'updated_at'];

}
