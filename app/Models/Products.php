<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use App\Models\ProductsController;


class Products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price'
    ];
}
