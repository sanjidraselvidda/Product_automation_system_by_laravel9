<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productSale extends Model
{
    use HasFactory;
    protected $table ='productsales';
    protected $primarykey ='id';
    protected $fillable =[
                'selectCustomer',
                'selectProduct',
                'productPrice',
                'entryQuantity',
                'totalAmount',
                'entryDate'


    ];
    public $timestamps = false;
    public function customer()
    {
        return $this->hasMany(customers::class );
    }
    public function product()
    {
        return $this->hasMany(products::class );
    }
}
