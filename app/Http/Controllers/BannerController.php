<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Http\Requests\bannerRequest;
use App\LogAction;
use App\Http\Requests\bannerUpdateRequest;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
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
        $banners = Banner::all();
        return view('banners.index',compact('banners'));
    }
    
    /***
     * Formulario de registro
     * @param Request $request
     */
    public function create(Request $request)
    {
        return view('banners.create');
    }
    
    
    /***
     * 
     * @param bannerRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(bannerRequest $request)
    {
        
        $banner = Banner::create( $request->all() );
        
        $md5Name = md5_file($request->file('image')->getRealPath());
        $guessExtension = $request->file('image')->guessExtension();
        $banner->image = $request->file('image')->storeAs('/uploads/banners', $md5Name.'.'.$guessExtension  ,'public');
        $banner->save();
        
        $oLog = new LogAction;
        $oLog->setLog( 1, $request->all() );
        return redirect()->route('banners.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::findOrFail($id);
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
        $banner = Banner::findOrFail($id);
        return view('banners.edit', compact('banner'));
    }
    
    
    
    /**
     * Update
     * */
    public function update( bannerUpdateRequest $request, $id )
    {
        $banner = Banner::findOrFail($id);
        $oldImagen = $banner->image;
        //dd($request->all());
        $banner->update( $request->all() );
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
            $banner->image = $request->file('image')->storeAs('/uploads/banners', $md5Name.'.'.$guessExtension  ,'public');
        }
        
        $banner->save();
        $oLog = new LogAction;
        $oLog->setLog( 2, $request->all() );
        
        return redirect()->route('banners.index');
    }
    
    /**
     * View the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $banner = Banner::findOrFail($id);
        return view('banners.view2', compact('banner'));
    }
    
}
