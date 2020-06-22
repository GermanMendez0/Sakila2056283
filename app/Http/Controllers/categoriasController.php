<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\make;
use Illuminate\Validation\Validator as ValidationValidator;

class categoriasController extends Controller
{
    //Los controladores se componen de acciones Metodos  

    public function index(){
        //instrucciones a ejecutar

        //selecionar datos atravez del modelo
        $categorias = Categoria::paginate(5);
        //Invocar una vista e ingresar a la vista el listado de categorias
        return view("categorias.index")->with("categorias",$categorias);

    }

    public function create(){
        return view("categorias.new");
    }

    public function store(){

        //validar datos
        //reglas para los campos en el formulario

        $reglas = [
            "nombre" => ["required", "alpha","min:4", "unique:category,name"]
        ];

        //mensajes: se hacen en edpañol

        $mensaje = [

            "required"=>"Campo obligatorio",
            "alpha"=>"Solo letras",
            "min"=>"Solo categorias de :min caracteres",
            "unique" => "Categoria repetida"

        ];

        $vr = Validator::make($_POST, $reglas,$mensaje); 

        //aplicar

        if($vr->fails()){

            //validacion fallo
            //redirigir con los mensajes de error 

            return redirect('categorias/add')->withErrors($vr)->withInput();

        }else{

            //validacion no fallo
            //seguimos en caso de uso

            //guardar la categoia desde el formulario

            $category = new Categoria;
            var_dump($_POST["nombre"]);
            $category->name=$_POST['nombre'];
            $category->save();
            return redirect('categorias/add')->with("exito","se registro correctamente");
        }
        
    }

    public function edit($idcategoria){

        $categoria = Categoria::find($idcategoria);
        return view("categorias.edit")->with("categoria",$categoria);
    }

    public function update($idcategoria){

        //validar datos
        //reglas para los campos en el formulario

        $reglas = [
            "nombre" => ["required", "alpha","min:4"]
        ];

        //mensajes: se hacen en edpañol

        $mensaje = [

            "required"=>"Campo obligatorio",
            "alpha"=>"Solo letras",
            "min"=>"Solo categorias de :min caracteres",

        ];

        $vr = Validator::make($_POST, $reglas,$mensaje); 

        //aplicar

        if($vr->fails()){

            //validacion fallo
            //redirigir con los mensajes de error 

            return redirect('categorias/edit/'.$idcategoria)->withErrors($vr)->withInput();

        }else{

            //validacion no fallo
            //seguimos en caso de uso

            //guardar la categoia desde el formulario

            
            //seleccionar categoria a editar
            $categoria = Categoria::find($idcategoria);
            //actualizar el name
            $categoria-> name = $_POST["nombre"];
            //guardar cambios
            $categoria->save();
            return redirect('categorias/edit/'.$idcategoria)->with("exito","se registro correctamente id:".$idcategoria);
        }

    }
}