# modelos

Crear el modelo (en el terminal ejecutar), cambiar Producto por su modelo.

```
    php artisan make:model Producto 
```

Crear instancia

```php
// un producto con dato:
$producto=new Producto();
$producto->nombre="pepsi"; // si no se pueden llenar, modificar la propiedad $fillable
$producto->precio=555;
$producto->cantidad=55;
// un producto vacio
$producto=new Producto();
// un producto con dato:
$producto=new Producto(['nombre'=>'pepsi','precio'=>555,'cantidad'=>555]);

```

# formulario

## en la vista:
el tag form deberia ser post y deberia tener dentro un @csrf

```html
<form method="post">
  @csrf
```
## En el enrutamiento, puedo tener lo siguiente:

```php
// una funcion para el metodo get y una funcion para el post
Route::get('/formulario',[ProductoController::class,'formularioGET']);
Route::post('/formulario',[ProductoController::class,'formularioPOST']);
// misma pagina:
Route::any('/formulario',[ProductoController::class,'formulario']);
```

## En la funcion del controlador

```php
    public function formularioPOST(Request $request ) { 
        $producto=new Producto($request->all());
        return view('paginas.formulario',['producto'=>$producto]);
    }
```

# Ejercicio 1

* Cree un proyecto nuevo de Laravel
* Vamos a crear un controlador LibroController y un modelo Libro con los siguientes campos
    * Libro: autor,precio,editorial
* Vamos a crear una vista de estilo plantilla para poderla extender. En la vista vamos a usar bootstrap
* Vamos a crear un vista de formulario para agregar el libro, esta vista tiene que extender la plantilla
* En el controlador, cree dos metodos, uno para get y otro para post (similares a los de este ejemplo)    
* En la ruta (web.php), vamos a crear los enrutamientos necesarios.

