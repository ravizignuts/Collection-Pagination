<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerModel extends Model
{
    use HasFactory;
    protected $dateFormat = 'd-m-y';
    protected $fillable = ['fname','lname','dob','email','gender','phone','city'];
    protected $casts = [
        'gender' => 'encrypted',
        // 'dob'    => 'date_format:d-m -yyyy',
        // 'created_at'  =>'datetime:d-m-y'
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
    //set mutator for dob
    // protected function dob():Attribute{
    //     return Attribute::make(
    //         set: fn($value) => (new Carbon($value))->format('d/m/y'),
    //     );
    // }
    protected function setDobAttribute($value){
        $this->attributes['dob'] = (new Carbon($value))->format('d/m/y');
    }
}



