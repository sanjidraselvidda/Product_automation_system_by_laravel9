<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materialsProduct extends Model
{
    use HasFactory;
    protected $table ='materials_products';
    protected $primarykey ='id';
    protected $fillable =[
                'selectSupplier',
                'selectMaterials',
                'uniteType',
                'unitePrice',
                'quantity',
                'totalPrice',

    ];
    public function suppliers()
{
    return $this->hasMany(suppliers::class );
}
public function materials(){
    return $this->hasMany(materials::class );
}
}
