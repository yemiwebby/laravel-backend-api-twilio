<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CEO extends Model
{
    protected $fillable = [
        'name', 'company_name', 'year', 'company_headquarters', 'what_company_does'
    ];
}
