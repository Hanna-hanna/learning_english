<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Vocabular extends Model
{
    protected $fillable = [
        'eng_word',
        'ru_word',
        'eng_description',
        'ru_description'
    ];
}