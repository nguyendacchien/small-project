<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all()->sortByDesc('created_at');
        return view('admin.foods.list', compact('foods',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.foods.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Food $food, FoodRequest $request)
    {
        $path = $request->file('image')->store('images', 'public');
        $food->image = $path;
        $food->name = $request->input('name');
        $food->category_id = $request->category;
        $food->price = $request->input('price');
        $food->desc = $request->input('desc');
        $food->save();
        toastr()->success('Bạn đã thêm mới thành công', 'Create');
        return redirect()->route('food.list');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $foods = Food::all();
        return view('shop.layout.content', compact('foods',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::findOrFail($id);
        $categories = Category::all();
        return view('admin.foods.update', compact('food', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FoodRequest $request, $id)
    {
        $food = Food::findOrFail($id);
        $food->name = $request->name;
        $food->category_id = $request->category;
        $food->image = $request->image;
        $food->price = $request->price;
        $food->desc = $request->desc;
        $food->save();
        toastr()->success('Bạn đã sửa thành công', 'Update');
        return redirect()->route('food.list');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);
//        $food->delete();
        toastr()->success('đã xóa thành công', 'Delete');
        return redirect()->route('food.list');
    }

    public function cart()
    {
        $carts = session()->get('cart');
//        dd($carts);
        return view('shop.cart', compact('carts'));
    }

    public function addToCart($id)
    {
        $food = Food::findOrFail($id);
        $carts = session()->get('cart');
        if (!$carts) {
            $carts = [
                $id => [
                    'id' => $food->id,
                    'image' => $food->image,
                    'name' => $food->name,
                    'price' => $food->price,
                    'quantity' => 1,
                ]
            ];
        }
        $carts[$id] = [
            'id' => $food->id,
            'image' => $food->image,
            'name' => $food->name,
            'price' => $food->price,
            'quantity' => 1,
        ];
        session()->put('cart', $carts);
//        session()->flush();
        toastr()->success('Bạn đã thêm vào giỏ hàng', 'Cart');
        return redirect()->back();
    }

    public function deleteCart($id)
    {


        $cart=session()->get('cart');
        unset($cart[$id]);
//        dd($cart);
//        print_r($cart);
        return redirect()->back();




    }
}
