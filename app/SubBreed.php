<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Breed;

class SubBreed extends Model
{
    protected $fillable = [
        'breedId',
        'name'
    ];

    public function breed()
    {
        return $this->hasOne(App\Models\Breed::class);
    }   
}
