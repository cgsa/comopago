<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre','url','image','actived'];
    
    
    
    public function getEstado()
    {
        $estado = "";
        
        switch ($this->actived)
        {
            case 0:
                $estado = "Inactivo";
                break;
            case 1:
                $estado = "Activo";
                break;
            case 2:
                $estado = "Pausado";
                break;
        }
        
        return $estado;
        
    }
}
