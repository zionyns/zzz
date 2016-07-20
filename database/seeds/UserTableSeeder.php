<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
 
class UserTableSeeder extends Seeder {
 

    public function run()
    {
        
        App\sucursal::create([
            'CodSucursal' => 'suc01',
            'NombreSucursal'  => 'sonesta',
            'Direccion'        =>  'cultura'
        ]);


        App\sucursal::create([
            'CodSucursal' => 'suc02',
            'NombreSucursal'  => 'jose antonio',
            'Direccion'        =>  'imperial'
        ]);


        App\sucursal::create([
            'CodSucursal' => 'suc04',
            'NombreSucursal'  => 'sonesta',
            'Direccion'        =>  'cultura'
        ]);


        App\sucursal::create([
            'CodSucursal' => 'suc05',
            'NombreSucursal'  => 'jose antonio',
            'Direccion'        =>  'imperial'
        ]);


        App\user::create([
            'first_name' => 'Jhon',
            'last_name'  => 'Zea',
            'rol'        =>  'administrador',
            'username'   => 'admin',
            'email'      => 'postmaster@domain.com',
            'password'   =>  Hash::make('secret'),
            'sucursal'   =>  'suc01'
        ]);

        App\user::create([
            'first_name' => 'Oscar',
            'last_name'  => 'Condori',
            'rol'        =>  'administrador',
            'username'   => 'admin2',
            'email'      => 'postmasterr@domain.com',
            'password'   =>  Hash::make('secret'),
            'sucursal'   =>  'suc02'
        ]);




        App\user::create([
            'first_name' => 'fffff',
            'last_name'  => 'ggggggg',
            'rol'        =>  'vendedor',
            'username'   => 'adminnn',
            'email'      => 'postmasterrrr@domain.com',
            'password'   =>  Hash::make('secret2'),
            'sucursal'   =>  'suc01'
        ]);

        App\venta::create([
            'CodVenta' => 'venta-01',
            'fecha'  => '2016-06-01 13:40:11',
            'vendedor'        =>  'admin',
            'preciototal'   =>  50000,
            'descuento'  => 10,
        ]);

         App\proveedor::create([
            'CodProveedor'=>'pro1',
            'nombre'=>'proveedor de anillos 1'
        ]);

        App\proveedor::create([
            'CodProveedor'=>'pro2',
            'nombre'=>'proveedor de aretes 1'
        ]);

        App\proveedor::create([
            'CodProveedor'=>'pro3',
            'nombre'=>'proveedor de collares 1'
        ]);

        App\proveedor::create([
            'CodProveedor'=>'pro4',
            'nombre'=>'proveedor de imagenes 1'
        ]);

        App\producto::create([
            'CodProducto' => 'ART-AC-1',
            'nombre'  => 'argolla 30',
            'tipo'=>'argolla',
            'peso'        =>  65,
            'stock' => 4,
            'precio' => 53,
            'sucursal'   =>  'suc01'
        ]);

        App\producto::create([
            'CodProducto' => 'ANI-AC-1',
            'nombre'  => 'marquesita Nro1',
            'tipo'=>'anillo',
            'peso'        =>  16,
            'stock' => 3,
            'precio' => 72,
            'sucursal'   =>  'suc01'
        ]);

        App\producto::create([
            'CodProducto' => 'ART-AC-3',
            'nombre'  => 'argolla 30',
            'tipo'=>'argolla',
            'peso'        =>  65,
            'stock' => 4,
            'precio' => 53,
            'sucursal'   =>  'suc01'
        ]);

        App\producto::create([
            'CodProducto' => 'ANI-AC-10',
            'nombre'  => 'marquesita',
            'tipo'=>'anillo',
            'peso'        =>  16,
            'stock' => 5,
            'precio' => 72,
            'sucursal'   =>  'suc01'
        ]);




        App\ingresoproducto::create([
            'CodIngreso' => 'Ing01',
            'sucursal'  => 'suc01',
            'usuario' =>  'admin',
            'fecha' => ''
        ]);

        App\detalleingreso::create([
            'producto' => 'ART-AC-3',
            'cantidad'  => 3,
            'PrecioUnitario'=>12,
            'total'        =>  36,
            
            'ingreso' => 'Ing01'
        ]);


        App\detalleingreso::create([
            'producto' => 'ART-AC-1',
            'cantidad'  => 4,
            'PrecioUnitario'=>15,
            'total'        =>  60,
            
            'ingreso' => 'Ing01'
        ]);


        App\moneda::create([
            'CodMoneda'=>'soles',
            'nombre' => 'soles',
            'tipo'  => 'efectivo',
            
        ]);

        App\moneda::create([
            'CodMoneda'=>'euros',
            'nombre' => 'euros',
            'tipo'  => 'efectivo',
            
        ]);

        App\moneda::create([
            'CodMoneda'=>'dolares',
            'nombre' => 'dolares',
            'tipo'  => 'efectivo',
            
        ]);

        App\moneda::create([
            'CodMoneda'=>'visaplanium',
            'nombre' => 'visaplatinum',
            'tipo'  => 'targeta',
            
        ]);

        App\moneda::create([
            'CodMoneda'=>'visaexpress',
            'nombre' => 'visavisaexpress',
            'tipo'  => 'targeta',
            
        ]);

        App\pagoventa::create([
            'venta' => 'venta-01',
            'moneda'  => 'soles',
            'monto'=>1000,
        ]);


        App\pagoventa::create([
            'venta' => 'venta-01',
            'moneda'  => 'dolares',
            'monto'=>1000,
        ]);


        App\ventausuario::create([
            'venta' => 'venta-01',
            'usuario'  => 'admin',
            'moneda'=>'dolares',
            'comision'=>10,
        ]);


        App\ventausuario::create([
            'venta' => 'venta-01',
            'usuario'  => 'admin',
            'moneda'=>'soles',
            'comision'=>10,
        ]);


        App\ventausuario::create([
            'venta' => 'venta-01',
            'usuario'  => 'admin2',
            'moneda'=>'soles',
            'comision'=>10,
        ]);


        App\ventausuario::create([
            'venta' => 'venta-01',
            'usuario'  => 'admin2',
            'moneda'=>'dolares',
            'comision'=>10,
        ]);








    }
 
}