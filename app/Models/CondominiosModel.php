<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondominiosModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'cidade',
        'estado',
        'cep',
        'telefone',
    ];

    public function unidades()
    {
        return $this->hasMany(UnidadesModel::class);
    }
}
