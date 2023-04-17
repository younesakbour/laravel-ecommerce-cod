<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name',
                        'price',
                        'description',
                        'specification',
                        'quantity',
                       
                        'category_id',
                        'reviews'];

   
    
    use HasFactory;

    public function commandes(){
        return $this->belongsToMany(Commande::class);
     }

     public function images(){
        return $this->hasMany(Image::class);
        

      
     }
     public function categorie(){
        return $this->belongsTo(Category::class);
        

      
     }
     public function oneImage()
{
    return $this->hasMany(Image::class)->limit(1);
}
}
