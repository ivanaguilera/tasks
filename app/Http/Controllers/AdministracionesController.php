<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Administracion;

use Laracasts\Flash\Flash;

class AdministracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administraciones = Administracion::orderBy('id','ASC')->paginate(5);
        return view('administracion.index')->with('administraciones',$administraciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administracion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $administracion = new Administracion($request->all());
       $administracion->save();

       Flash::success($administracion->nombre." se ha registrado correctamente");
       return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administracion = Administracion::find($id);

        return view('administracion.edit')->with('administracion',$administracion);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $administracion=Administracion::find($id);
        $administracion->nombre = $request->nombre ;
        $administracion->rut = $request->rut ;
        $administracion->email = $request->email ;
        $administracion->telefono = $request->telefono ;
        $administracion->save() ;

        Flash::success($administracion->nombre." se ha modificado correctamente");
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administracion = Administracion::find($id);
        $administracion -> delete();

        Flash::success('La administracion '.$administracion->nombre.' se eliminó exitosamente !' );

        return redirect()->route('admin.index');
    }
}
