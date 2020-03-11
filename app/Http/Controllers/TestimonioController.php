<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonio;
use App\Http\Requests\TestimonioRequest;
use App\LogAction;

class TestimonioController extends Controller
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
        $testimonios = Testimonio::all();
        return view('testimonio.index',compact('testimonios'));
    }
    
    
    /***
     * formulario de registro
     * @param Request $request
     ***/
    public function create( Request $request )
    {
        
        return view('testimonio.create');
    }
    
    
    /***
     *
     * @param TestimonioRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TestimonioRequest $request)
    {
        
        Testimonio::create( $request->all() );
        
        $oLog = new LogAction;
        $oLog->setLog( 1, $request->all() );
        return redirect()->route('testimonios.index');
    }
    
    /**
     * Form for edit the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonio = Testimonio::findOrFail($id);
        return view('testimonio.edit', compact('testimonio'));
    }
    
    
    
    /**
     * Update
     * */
    public function update( TestimonioRequest $request, $id )
    {
        $testimonio = Testimonio::findOrFail($id);
        //dd($request->all());
        $testimonio->update( $request->all() );
        $oLog = new LogAction;
        $oLog->setLog( 2, $request->all() );
        
        return redirect()->route('testimonios.index');
    }
    
    
    /**
     * View the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $testimonio = Testimonio::findOrFail($id);
        return view('testimonio.view', compact('testimonio'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonio::findOrFail($id)->delete();
        
        return redirect()->route('testimonios.index');
    }
    
    
}
