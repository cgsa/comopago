<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreguntaFrecuente;
use App\Http\Requests\preguntasFrecuentesRequest;
use App\LogAction;

class PreguntaFrecuenteController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verifica.role');
        
    }
    
    
    /***
     * Vista principal
     * */
    public function index()
    {
        $preguntas = PreguntaFrecuente::all();
        return view('preguntafrecuente.index', compact('preguntas'));
    }
    
    /***
     * Formulario de registro
     * @param Request $request
     */
    public function create(Request $request)
    {
        return view('preguntafrecuente.create');
    }
    
    
    /***
     *
     * @param preguntasFrecuentesRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(preguntasFrecuentesRequest $request)
    {
        
        PreguntaFrecuente::create( $request->all() );
        
        
        $oLog = new LogAction;
        $oLog->setLog( 1, $request->all() );
        return redirect()->route('preguntas.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = PreguntaFrecuente::findOrFail($id);
        return view('banners.view', compact('banner'));
    }
    
    /**
     * Update the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pregunta = PreguntaFrecuente::findOrFail($id);
        return view('preguntafrecuente.edit', compact('pregunta'));
    }
    
    
    
    /**
     * Update
     * */
    public function update( preguntasFrecuentesRequest $request, $id )
    {
        $pregunta = PreguntaFrecuente::findOrFail($id);
        //dd($request->all());
        $pregunta->update( $request->all() );
        $oLog = new LogAction;
        $oLog->setLog( 2, $request->all() );
        
        return redirect()->route('preguntas.index');
    }
    
    
    /**
     * View the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $pregunta = PreguntaFrecuente::findOrFail($id);
        return view('preguntafrecuente.view', compact('pregunta'));
    }
    
    
    /**
     * Delete the specified resource.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        PreguntaFrecuente::findOrFail($id)->delete();
        return redirect()->route('preguntas.index');
    }
    
}
