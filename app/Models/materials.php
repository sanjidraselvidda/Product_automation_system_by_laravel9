<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materials extends Model
{
    use HasFactory;
    protected $table = 'materials';
    protected $primaryKey = 'id';
    protected $fillable = [
        'materialsName',
        'materialsCode',
        'materialsUnite',
        'materialsUnitePrice',
        'updateStock',
    ];
    public function unitTye()
    {
        return $this->belongsTo(uniteType::class, 'uniteName');
    }
}
