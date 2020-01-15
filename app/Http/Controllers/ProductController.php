<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Product;
use Session;

class ProductController extends Controller
{
    function index(){
      // $productos = Product::paginate(4);
      return view('index');
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
        'price' => 'required|numeric',
        'description' => 'max:255',
        'image' => 'required|file|image',
        'category' => 'max:255',
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
      $productoNuevo->category = $datos['category'];

      $productoNuevo->save();

      return redirect('/index');
    }

    public function actualizar(Request $datos){
      $validaciones = [
        'id' => 'required',
        'nombre' => 'required|max:71',
        'precio' => 'required|decimal',
        'descripcion' => 'max:255',
        'foto' => 'required|file|image',
        'category' => 'max:255',
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
      $productoEditado->category = $datos['category'];

      $productoEditado->save();

      return redirect('/index');

    }

    public function borrar($id){

    $borrarproducto = Product::find($id);
    $borrarproducto->delete();

    return redirect('/index');


    }

    public function buscar(Request $request){
    $search = $request->input( 'search' );
    $productos = Product::where('name','LIKE','%'.$search.'%')->orWhere('price','LIKE','%'.$search.'%')->paginate(100);
    if(count($productos) > 0)
    return view('lista',compact('productos'));
    else
    return view('mensajeerror');
    }

    public function cart(Request $request, $id){
      $productoBD = Product::find($id);
      $producto=[
        'id'=>$id,
        'name'=>$productoBD['name'],
        'price'=>$productoBD['price'],
        'description'=>$productoBD['description'],
        'image'=>$productoBD['iamge'],
      ];
      $request->session()->put('cart', array_merge((array)Session::get('cart',[]), $producto));
      session()->push('cart',$producto);
      return redirect ('/index');

    }

    public function carrito(){
      $productos = session('cart');
      $productos = Product::find($productos);
      return view('cart', compact('productos'));
    }

    public function jeans(){
     $productos = Product::all()->where('category','JN');
     return view('lista',compact('productos'));
    }

    public function remeras(){
     $productos = Product::all()->where('category','RM');
     return view('lista',compact('productos'));
    }

    public function calzados(){
     $productos = Product::all()->where('category','CL');
     return view('lista',compact('productos'));
    }

    public function buzos(){
     $productos = Product::all()->where('category','BZ');
     return view('lista',compact('productos'));
    }


}
