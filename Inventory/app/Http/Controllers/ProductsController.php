<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="L5 Documentación de la aplicación Laravel Inventory",
 *     description="API creada con el fin de aprender la autenticación de JWT, y el funcionamiento de SWAGGER"
 * )
 *
 * @OA\SecurityScheme (
 *     securityScheme="bearer_token",
 *     type="http",
 *     scheme="bearer"
 * )
 *
 */
class ProductsController extends Controller
{
    /**
     *  Create a new ProductController instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => 'login']);
    }

    /**
     * Display a listing of the resource.
     *
     *
     * @OA\Get (
     *     path="/api/auth/products",
     *     tags={"products"},
     *     summary="Mostrar el listado de productos almacenados",
     *     @OA\Response (
     *     response=200,
     *     description="Mostrar todos los productos"
     *  ),
     *     @OA\Response (
     *     response="default",
     *     description="Algo ha fallado"
     *  ),
     *     security={{"apiBearer" : {} }}
     * )
     */
    public function index()
    {
        $products = Products::all();

        if (auth()->user()->rolesId !== 3){
            $products->makeVisible('price_on_buy')->toArray();
        }

        return response()->json([
            'dataProduct' => $products,
            'status' => 200
        ], 200);
    }

    /**
     * @OA\Post (
     *     path="/api/auth/products/add",
     *     summary="Agregar Productos",
     *     @OA\Request (
     *     name,
     *     stock,
     *     long_description,
     *     price_at_sell,
     *     price_on_buy,
     *     assignmentId
     * )
     *     @OA\Response(
     *         response=200,
     *         description="Agregar un producto."
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Ha ocurrido un error."
     *     )
     *)
     *
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request)
    {
        $product= Products::all();
        $product->makeVisible('price_on_buy')->toArray();
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'stock' => 'required',
            'long_description' => '',
            'price_at_sell' => 'required',
            'price_on_buy' => 'required',
            'assignmentId' => ''
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $product = Products::create(array_merge(
            $validator->validate()
        ));

        return response()->json([
            'message' => 'Product added',
            'products' => $product
        ], 201);
    }

    /**
     * Show the specified resource.
     *
     * @param Products $products
     * @return void
     *
     * @OA\Get (
     *     path="/api/auth/products/{id}",
     *     tags={"products"},
     *     summary="Mostrar info de un producto.",
     *     @OA\Parameter (
     *      description="Parámetro para consultar los datos de un producto",
     *      in="path",
     *      name="id",
     *      required=true,
     *      @OA\Schema (type="string"),
     *     @OA\Examples(example="int", value="1",summary="Introduce un numero de producto")
     *  ),
     *     @OA\Response (
     *     response=200,
     *     description="Mostrar Info del producto",
     *  ),
     *     @OA\Response (
     *     response=404,
     *     description="No se ha encontrado el Producto"
     *  ),
     *     @OA\Response (
     *     response="default",
     *     description="Ha ocurrido un error."
     *  ),
     *     security={{ "apiBearer" : {} }}
     * )
     */
    public function show($id)
    {
        $product = Products::find($id);

        if ($product === null){
            return response()->json([
                'data' => 'no existe el producto seleccionado',
                'status' => 200
            ], 200);
        }
        return response()->json([
            'id' => $id,
            'data' => $product,
            'status' => 200
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Products $products
     * @return void
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Products $products
     * @return void
     */
    public function destroy(Products $products)
    {
        //
    }

}
