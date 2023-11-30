<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'telephone_number',
        'postcode',
        'address',
        'start',
        'end',
        'max_group',
        'minimum_budget_for_lunch',
        'maximum_budget_for_lunch',
        'minimum_budget_for_dinner',
        'maximum_budget_for_dinner',
        'title',
        'overview',
        'path',
    ];
}
