<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function categories(){
         
        return $this->belongsToMany('App\Category');
    }

    // public function presentPrice(){
    //     return money_format('$%i', $this->price / 100);
    // }
    // function formatcurrency($floatcurr, $curr = "USD"){
    // $currencies['PKR'] = array(2,'.',','); 
    // }         //  Pakistan Rupee

    // public function scopeRelatedProducts($query){
    //     return $query->inRandomOrder()->take(4);
    // }
}
