<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ClienteRequest;
use App\LogAction;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ClienteUpdateRequest;

class ClienteController extends Controller
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
        $clientes = Cliente::all();
        return view('cliente.index',compact('clientes'));
    }
    
    /***
     * Formulario de registro
     * @param Request $request
     */
    public function create(Request $request)
    {
        return view('cliente.create');
    }
    
    
    /***
     *
     * @param ClienteRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ClienteRequest $request)
    {
        
        $cliente = Cliente::create( $request->all() );
        
        $md5Name = md5_file($request->file('image')->getRealPath());
        $guessExtension = $request->file('image')->guessExtension();
        $cliente->image = $request->file('image')->storeAs('/uploads/clientes', $md5Name.'.'.$guessExtension  ,'public');
        $cliente->save();
        
        $oLog = new LogAction;
        $oLog->setLog( 1, $request->all() );
        return redirect()->route('clientes.index');
    }
    
    
    /**
     * Update the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }
    
    
    
    /**
     * Update
     * */
    public function update( ClienteUpdateRequest $request, $id )
    {
        $cliente = Cliente::findOrFail($id);
        $oldImagen = $cliente->image;
        //dd($request->all());
        $cliente->update( $request->all() );
        if($request->hasFile('image'))
        {
            //dd($request->all());
            //$path = Storage::url('public');
            $pathImagen = "/storage/".$oldImagen;
            
            if( File::exists( public_path($pathImagen) ))
            {
                File::delete( public_path($pathImagen) );
            }
            
            $md5Name = md5_file($request->file('image')->getRealPath());
            $guessExtension = $request->file('image')->guessExtension();
            $cliente->image = $request->file('image')->storeAs('/uploads/clientes', $md5Name.'.'.$guessExtension  ,'public');
        }
        
        $cliente->save();
        $oLog = new LogAction;
        $oLog->setLog( 2, $request->all() );
        
        return redirect()->route('clientes.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.view', compact('cliente'));
    }
    
    /**
     * Delete the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        
        $pathImagen = "/storage/".$cliente->image;
        
        if( File::exists( public_path($pathImagen) ))
        {
            File::delete( public_path($pathImagen) );
        }
        
        $cliente->delete();
        
        return redirect()->route('clientes.index');
    }
    
}
