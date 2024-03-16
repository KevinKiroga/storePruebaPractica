<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $products = Product::where( 'stock', '>', 0 )->get();
        return view ( 'product/index', [ 'products' => $products ] );
    }

    public function searchById( Request $request ) {

        if ( $request->filled( 'product_id' ) ) {
            $productId = $request->input( 'product_id' );
            $product = Product::find( $productId );
            if ( $product ) {
                // Si se encontró el producto, se retorna solo ese producto
                $products = collect( [ $product ] );
            } else {
                // Si no se encontró el producto, se muestra un mensaje de error
                return redirect()->route( 'products.index' )->with( 'error', 'No se encontró ningún producto con el ID proporcionado.' );
            }
        } else {
            // Si no se proporciona un ID, se muestran todos los productos con stock mayor que 0
            $products = Product::where( 'stock', '>', 0 )->get();
        }

        // Renderizar la vista con los resultados de la búsqueda
        return view( 'product.index', [ 'products' => $products ] );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */

    public function show( Product $product ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */

    public function edit( Product $product ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Product $product ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */

    public function destroy( Product $product ) {
        //
    }
}
