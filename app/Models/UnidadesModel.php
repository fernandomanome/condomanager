<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadesModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'condominio_id',
        'numero',
        'andar',
        'bloco',
    ];

    public function condominio()
    {
        return $this->belongsTo(CondominiosModel::class);
    }

    public function usuarios()
    {
        return $this->hasMany(UsuariosModel::class);
    }
}
