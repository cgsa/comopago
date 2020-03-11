<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    
    protected $fillable = ['tipo','titulo','subtitulo','boton_titulo','descripcion','link','imagen','status'];
    
    
    public function getDescripcionTipo()
    {
        $tipo = "";
        
        switch ($this->tipo)
        {
            case 1:
                $tipo = "Principal";
            break;
            case 2:
                $tipo = "Carrusel Medio";
            break;
            case 3:
                $tipo = "Footer";
                break;
            case 4:
                $tipo = "Interna";
                break;
        }
        
        return $tipo;
    }
    
    
    public function getEstado()
    {
        $estado = "";
        
        switch ($this->status)
        {
            case 1:
                $estado = "Activo";
                break;
            case 2:
                $estado = "Pausado";
                break;
            case 0:
                $estado = "Inactivo";
                break;
        }
        
        return $estado;
    }
}
