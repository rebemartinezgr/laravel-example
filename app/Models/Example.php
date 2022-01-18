<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
