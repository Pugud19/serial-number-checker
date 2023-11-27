<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all();

        return view('dashboard', compact('product'))
        ->with('no', (request()->input('page', 1) - 1) * 5);
    }
    public function muncul()
    {
        //
        $products = Product::all();

        return view('welcome', compact('products'))
        ->with('no', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
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
        $request->validate([
            'product_name' => 'required',
            'tahun_dibuat' => 'required|date',
            'foto_url' => 'required',
            'serial_number' => 'required|max:60',
        ]);
        $input = $request->all();

        if ($image = $request->file('foto_url')) {
            $destinationPath = 'foto_url/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto_url'] = "$profileImage";
        }

        Product::create($input);

        return redirect()->route('dashboard')
                        ->with('success','Product created successfully.');
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
        //
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
    }
    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
    	// mengambil data dari table product sesuai pencarian data
		$products = Product::where('serial_number', 'like', "%" . $search . "%")->paginate(50);

		return view('welcome', compact('products'))->with('no', (request()->input('page', 1) - 1) * 5);

    }
}
