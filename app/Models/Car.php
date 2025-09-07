<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars'; // Table name

    protected $primaryKey = 'id'; // Primary key column
    public $incrementing = true;
    protected $keyType = 'integer';

    public $timestamps = true;

    protected $connection = 'mysql';

    protected $attributes = [ // Default attribute values
        'make' => '',
        'model' => '',
        'year' => null,
        'body_type' => '',
        'colour' => '',
        'mileage_km' => 0,
        'price' => 0,
        'fuel_type' => '',
        'condition_id' => null,
        'description' => '',
        'image' => '',
    ];

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn() => "{$this->year} {$this->make} {$this->model}"
        );
    }
}
