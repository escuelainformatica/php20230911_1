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

