<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Product;

class ProductController extends Controller
{
    function products(){
      $productos = Product::paginate(2);
      return view('index',compact('productos'));
    }

    function detalle($id){
      $productos = Product::find($id);
      return view('detalleProducto',compact('productos'));
    }

    public function editar($id){
      $producto = Product::find($id);
      return view('admin.editarProducto', compact('producto'));
    }



    public function add(Request $datos){
      $validaciones = [
        'name' => 'required|max:71',
        'price' => 'required|integer',
        'description' => 'max:153',
        'image' => 'required|file|image',
      ];
      // $mensajes = [];

      $this->validate($datos, $validaciones);

      $ruta = $datos->file('image')->store('public');
      $imagen = basename($ruta);

      $productoNuevo = new Product();
      $productoNuevo->name = $datos['name'];
      $productoNuevo->price = $datos['price'];
      $productoNuevo->description = $datos['description'];
      $productoNuevo->image = $imagen;

      $productoNuevo->save();

      return redirect('/index');
    }

    public function actualizar(Request $datos){
      $validaciones = [
        'id' => 'required',
        'nombre' => 'required|max:71',
        'precio' => 'required|integer',
        'descripcion' => 'max:153',
        'foto' => 'required|file|image',
      ];
      // $mensajes = [];

      $this->validate($datos, $validaciones);

      $ruta = $datos->file('foto')->store('public');
      $imagen = basename($ruta);

      $productoEditado = Product::find($datos["id"]);

      $productoEditado->name = $datos['nombre'];
      $productoEditado->price = $datos['precio'];
      $productoEditado->description = $datos['descripcion'];
      $productoEditado->image = $imagen;

      $productoEditado->save();

      return redirect('/index');

    }

    public function borrar($id){

    $borrarproducto = Product::find($id);
    $borrarproducto->delete();

    return redirect('/index');


    }
}
