<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\customer;
use App\Models\Order;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{

    
    function search(Request $req)
    {
        $data= Product::where('name','like' , '%'.$req->input('query').'%') ->get();
        return view('product.search',['product'=>$data]);
    }
    function productlist()
    {
        $products = product::all();
        return view('product.list')->with('products',$products);
        
    }

    public function addtocart(Request $req){
        $id = $req->id;
        $p = Product::where('id',$id)->first();
        $cart=[];
        //$jsonCart = $req->session()->get('cart'); to get session value
        //session()->get('cart')
        if(session()->has('cart')){
            $cart = json_decode(session()->get('cart'));
        }
        $product = array('id'=>$id,'qty'=>1,'name'=>$p->name,'price'=>$p->price,'image'=>$p->image);
        $cart[] = (object)($product);
        $jsonCart = json_encode($cart);
        session()->put('cart',$jsonCart);
        //return session()->get('cart');
        return redirect()->route('product');
    }

    public function emptycart(){
        session()->forget('cart');
        if(!session()->has('cart')){
            return "Cart is empty";
        }
        return session('cart');
        
    }
    public function mycart(){
        $cart = json_decode(session()->get('cart'));
        return view('product.cart')
        ->with('cart',$cart);
    }

    public function checkout(Request $req){
        //let when logged in there will be a field in session
        $products = json_decode(session()->get('cart'));
        //creating order
        $c_id = session()->get('customer');
        $order = new Order();
        $order->c_id = $c_id;
        $order->status="Ordered";
        $order->price = $req->total_price;
        $order->save();

        //creating order details
        foreach($products as $p){
            $o_d = new Orderdetail();
            $o_d->o_id = $order->id;
            $o_d->p_id = $p->id;
            $o_d->qty = $p->qty;
            $o_d->unit_price = $p->price;
            $o_d->save();
        }

        session()->forget('cart');

        //return "Order done";
        return redirect()->route('product');

    }      
    public function chat(){
        return view('customer.chat');
    }

   public function report(){
        return view('product.report');
    }

    public function reportSubmit(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

      
    
        // public function mes(Request $request){
        //     $request->validate([
        //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     ]);



        $p = new Product();
        $p->name=$request->name;
        $p->price=$request->price;
    
        if($request->hasFile('image')){
            $imageName = time()."_".$request->file('image')->getClientOriginalName();
            // return $imageName;
            $request->image->move(public_path('images'), $imageName);
            $p->image=$imageName;
            $p->save();
            return $request;
            //return redirect(route('home'));
        }
        
        /* Store $imageName name in DATABASE from HERE */
        return "No file";
    
       

    }
}


