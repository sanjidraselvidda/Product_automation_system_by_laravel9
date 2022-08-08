<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productMaking extends Model
{

    use HasFactory;
    protected $table ='product_makings';
    protected $primaryKey ='id';
    protected $fillable =[
                'selectProduct',
                'selectMaterials',
                'materialsQuantity',

    ];
    public function product()
    {
        return $this->hasMany(products::class);
    }
    public function material()
    {
        return $this->hasMany(materials::class);
    }
}
