<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class products extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $primaryKey ='id';
    protected $fillable =[
                'productName',
                'selectUniteType',
                'productPrice',
                'updatedStock'

    ];
    public function uniteType()
    {
        return $this->hasMany(uniteType::class);
    }
}
