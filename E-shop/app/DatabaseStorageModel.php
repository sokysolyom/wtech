<?php
/**
 * Created by PhpStorm.
 * User: darryldecode
 * Date: 1/13/2018
 * Time: 2:13 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class DatabaseStorageModel extends Model
{
    protected $table = 'cart_storage';

   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'cart_data',
    ];

    public function setCartDataAttribute($value)
    {
        echo("jozo");
        echo($value);
        $this->attributes['cart_data'] =$value;
    }

    public function getCartDataAttribute($value)
    {   
        echo("tu3  ");
        
        echo("    <---");
        return $value;
    }
}
