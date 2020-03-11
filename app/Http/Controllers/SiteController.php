<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\PreguntaFrecuente;
use App\Testimonio;
use App\Cliente;

class SiteController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','help']]);
        $this->middleware('verifica.role',['except'=>['index','help']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banner = Banner::where(['status'=>1, 'tipo'=>1])->first();
        $carrusels = Banner::where(['status'=>1, 'tipo'=>2])->get();
        $footer = Banner::where(['status'=>1, 'tipo'=>3])->first();
        $preguntas = PreguntaFrecuente::where(['tipo'=>1])->get();
        $testimonios = Testimonio::all();
        $clientes = Cliente::where(['actived'=>'1'])->get();
        
        return view('site.index2', compact('banner', 'carrusels', 'footer', 'preguntas','testimonios', 'clientes'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function help()
    {
        //
        $banner = Banner::where(['status'=>1, 'tipo'=>4])->first();
        $preguntas = PreguntaFrecuente::where(['tipo'=>2])->get();
        
        return view('site.help', compact('banner','preguntas'));
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vista()
    {
        //
        return view('site.index');
    }

    
}
