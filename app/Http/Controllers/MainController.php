<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use App\Models\Laptop;
use App\Models\People;
use App\Models\Phone;
use App\Models\Post;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Post::all();
        
        
        return view('navigation.nav',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    //Add Product
    public function product()
    {
        return view('products.home');
    }
    public function ProductCreate(Request $request)
    {
        $data=$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
            'title' => 'required|string|max:255',
            'cost' => 'required|string',
        ]);
        $image = $request->file('image');
        $imagePath = $image->store('images', 'public');
        Post::create([
            'image' => $imagePath,
            'title' => $request->title,
            
            'cost'=>$request->cost
        ]);
        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('images', $filename);
        } else {
            $filename = 'default_image.jpg';
        }
        return redirect()->route('post')->with('success', 'News created successfully');
        
    }
    public function Clothes()
    {
        return view('products.clothes');

    }
    public function Phones()
    {
        return view('products.phone');
        
    }
    public function Laptops()
    {
        return view('products.laptop');
        
    }
    public function AddClothes(Request $request)
    {
        $data=$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
            'title' => 'required|string|max:255',
            'cost' => 'required|string',
        ]);
        $image = $request->file('image');
        $imagePath = $image->store('images', 'public');
        Post::create([
            'image' => $imagePath,
            'title' => $request->title,
            
            'cost'=>$request->cost
        ]);
        Clothes::create([
            'image' => $imagePath,
            'title' => $request->title,
            
            'cost'=>$request->cost
        ]);
        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('images', $filename);
        } else {
            $filename = 'default_image.jpg';
        }
        return redirect()->route('post')->with('success', 'News created successfully');
    }
    public function AddPhone(Request $request)
    {
        $data=$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
            'title' => 'required|string|max:255',
            'cost' => 'required|string',
        ]);
        $image = $request->file('image');
        $imagePath = $image->store('images', 'public');
        Post::create([
            'image' => $imagePath,
            'title' => $request->title,
            
            'cost'=>$request->cost
        ]);
        Phone::create([
            'image' => $imagePath,
            'title' => $request->title,
            
            'cost'=>$request->cost
        ]);
        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('images', $filename);
        } else {
            $filename = 'default_image.jpg';
        }
        return redirect()->route('post')->with('success', 'News created successfully');
    }
    public function AddLaptop(Request $request)
    {
        $data=$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
            'title' => 'required|string|max:255',
            'cost' => 'required|string',
        ]);
        $image = $request->file('image');
        $imagePath = $image->store('images', 'public');
        Post::create([
            'image' => $imagePath,
            'title' => $request->title,
            
            'cost'=>$request->cost
        ]);
        Laptop::create([
            'image' => $imagePath,
            'title' => $request->title,
            
            'cost'=>$request->cost
        ]);
        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('images', $filename);
        } else {
            $filename = 'default_image.jpg';
        }
        return redirect()->route('post')->with('success', 'News created successfully');
    }
    public function ViewClothes()
    {       
        $product_image=Clothes::all();
        
        $a=[];
        $b=[];
        $c=[];
        foreach ($product_image as $y){
            array_push($a,$y->image);
        }

        foreach ($product_image as $y){
            array_push($b,$y->title);
        }
        foreach ($product_image as $y){
            array_push($c,$y->id);
        }
        
        $arr = [];
        $dc1 = [];
        $p = 0;

        for ($i = 0; $i <= count($a) - 3; $i += 3) {
            $dc = [];

            for ($j = $i; $j < $i + 3; $j++) {
                $dc[$b[$j]] = [$a[$j],$c[$j]];
            }

            array_push($arr,$dc);
        }

        for ($i = floor(count($a) / 3) * 3; $i < floor(count($a) / 3) * 3 + (count($a) % 3); $i++) {
            $dc1[$b[$i]] = [$a[$i],$c[$i]];
        }
        array_push($arr,$dc1);
        
        
        // dd($arr);
        return view('shop.clothes',compact('arr'));
    }
    public function ViewPhones()
    {
        $product_image=Phone::all();
        
        $a=[];
        $b=[];
        $c=[];
        foreach ($product_image as $y){
            array_push($a,$y->image);
        }

        foreach ($product_image as $y){
            array_push($b,$y->title);
        }
        foreach ($product_image as $y){
            array_push($c,$y->id);
        }
        
        $arr = [];
        $dc1 = [];
        $p = 0;

        for ($i = 0; $i <= count($a) - 3; $i += 3) {
            $dc = [];

            for ($j = $i; $j < $i + 3; $j++) {
                $dc[$b[$j]] = [$a[$j],$c[$j]];
            }

            array_push($arr,$dc);
        }

        for ($i = floor(count($a) / 3) * 3; $i < floor(count($a) / 3) * 3 + (count($a) % 3); $i++) {
            $dc1[$b[$i]] = [$a[$i],$c[$i]];
        }
        array_push($arr,$dc1);
        
        
        // dd($arr);
        return view('shop.phones',compact('arr'));
    }
    public function ViewLaptops()
    {
        $product_image=Laptop::all();
        
        $a=[];
        $b=[];
        $c=[];
        foreach ($product_image as $y){
            array_push($a,$y->image);
        }

        foreach ($product_image as $y){
            array_push($b,$y->title);
        }
        foreach ($product_image as $y){
            array_push($c,$y->id);
        }
        
        $arr = [];
        $dc1 = [];
        $p = 0;

        for ($i = 0; $i <= count($a) - 3; $i += 3) {
            $dc = [];

            for ($j = $i; $j < $i + 3; $j++) {
                $dc[$b[$j]] = [$a[$j],$c[$j]];
            }

            array_push($arr,$dc);
        }

        for ($i = floor(count($a) / 3) * 3; $i < floor(count($a) / 3) * 3 + (count($a) % 3); $i++) {
            $dc1[$b[$i]] = [$a[$i],$c[$i]];
        }
        array_push($arr,$dc1);
        
        
        // dd($arr);
        return view('shop.laptops',compact('arr'));
    }
    public function about(string $id)
    {
        $product=Post::findOrFail($id);
        return view('aboutProduct.about',compact('product'));
    }
    public function aboutClothes(string $id)
    {
        $product=Clothes::findOrFail($id);
        return view('aboutProduct.about',compact('product'));
    }
    public function aboutPhones(string $id)
    {
        $product=Phone::findOrFail($id);
        return view('aboutProduct.about',compact('product'));
    }
    public function aboutLaptops(string $id)
    {
        $product=Laptop::findOrFail($id);
        return view('aboutProduct.about',compact('product'));
    }
    public function buy(string $id)
    {
        return view('Registr.buy',compact('id'));
    }
    public function PersonRegistr(Request $request,string $id)
    {
      
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>['required','numeric', new PhoneNumber],
            'location'=>'required',
            
            
        ]);
        // dd($request);
        $person = new People(); // Create a new instance of the model
        $person->name = $data['name'];
        $person->email = $data['email'];
        $person->phone = $data['phone'];
        $person->location = $data['location'];
        $person->product_id=$id;
        $person->save();
        
        return redirect()->route('post');
    }
    public function people()
    {
        $people=People::orderByDesc('created_at')->paginate(20);

        return view('Registr.total',compact('people'));
    }
    public function xaqida()
    {
        return view('navigation.xaqida');
    }
    public function search()
    {
          
    }
    
}
