<?php

namespace Workdo\Tags\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'created_by'
    ];
}
