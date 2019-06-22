<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::paginate(6);
        return view('producto.mostrar',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('producto.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $productos = Producto::create($request->all());
        
        Session::flash('message', $productos['nombre'] . ' agregado con exito');
        return redirect()->route('producto.index');

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
        $productos = Producto::find($id);
        return view('producto.vista',compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productos = Producto::find($id);
        return view('producto.editar',compact('productos'));
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
        //
        $productos = Producto::find($id);
        $productos->update($request->all());

        Session::flash('message', $productos['nombre'] . ' actualizado con exito');
        return redirect()->route('producto.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $productos = Producto::find($id);
        $productos->delete();
        //$productos = Producto::delete('delete from producto where id=?',[$id]);

        Session::flash('message', $productos['nombre'] . ' eliminado con exito');
        return redirect()->route('producto.index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $productos = Producto::where('nombre','like','%'.$search.'%')
        ->orwhere('presentacion','like','%'.$search.'%')
        ->orwhere('unidad','like','%'.$search.'%')
        ->orwhere('precio','like','%'.$search.'%')->paginate(6);
        return view('producto.mostrar',compact('productos'));
    }
}
