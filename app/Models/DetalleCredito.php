<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCredito extends Model
{
    use HasFactory;


    protected $table = 'DetalleCredito';


    protected $primaryKey = 'id_detalle_credito';


    public $timestamps = false;


    protected $fillable = [
        'codigo_barra_producto',
        'id_creditofiscal',
        'cantidad_producto_credito',
        'subtotal_detalle_credito',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'codigo_barra_producto', 'codigo_barra_producto');
    }

    public function creditoFiscal()
    {
        return $this->belongsTo(CreditoFiscal::class, 'id_creditofiscal', 'id_creditofiscal');
    }
}
