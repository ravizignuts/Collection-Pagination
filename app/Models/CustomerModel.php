<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerModel extends Model
{
    use HasFactory;
    protected $fillable = ['fname','lname','dob','email','gender','phone','city'];
    protected $casts = [
        'gender' => 'encrypted',
    ];

    //==================Accessor=================//
    //method one
    public function getFnameAttribute($value){
        return strtoupper($value);
    }
    //Second Method
    protected function city():Attribute{
        return Attribute::make(
            get: fn ($value) => $value.", Gujarat",
        );

    }
    // protected function gender():Attribute{
    //     return Attribute::make(
    //         get: fn ($value) => decrypt($value),
    //     );
    // }

    //==================Mutators=================//
    //method one
    protected function setCityAttribute($value){
        $this->attributes['city'] = $value.", India";
    }
    //Second Method
    protected function lname():Attribute{
        return Attribute::make(
        set: fn ($value) => strtoupper($value), );
    }

}

