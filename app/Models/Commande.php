<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['last_name','first_name','phone','email','qte','adresse','country','city','zip_code','idProduit'];
    protected $primaryKey = 'id';
    protected $table = 'commandes';
    

    public function produits(){
        return $this->belongsToMany(Product::class)
        // this allowing you to access data from pivot table (foreing key table)
        ->withPivot(['qte','size']);
      
     }
 
   
}
