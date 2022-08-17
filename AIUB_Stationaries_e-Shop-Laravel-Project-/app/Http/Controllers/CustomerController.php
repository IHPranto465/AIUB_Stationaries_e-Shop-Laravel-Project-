<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\product;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;

class CustomerController extends Controller
{
    public function myOrders(){
        $c_id = session()->get('customer');
        $orders = Order::where('c_id',$c_id)->get();
        return ('customer.myorders')->with('orders',$orders);
    }
    public function orderdetails(Request $request){
        $id = $request->id;
        $order = Order::where('id',$id)->first();
        
        //return $order->products[0]->order->customer;
        return ('customer.orderdetails')->with('order',$order);
    }
    
    public function deletedetails(Request $request){
        $id = $request->id;
        $order = Order::where('id',$id)->first();
        $result=Order::where('id','<',$id)->delete();
        // Order::delete('DELETE FROM Order WHERE id = ?', [$id]);
        //   echo ("User Record deleted successfully.");
        //  return redirect()->route('users.index');
        //return $order->products[0]->order->customer;
        return ('customer.orderdetails')->with('order',$order);

        
        
    }
    public function delivery(){
      
        return ('customer.deliverymandetails');
    }
    public function seller(){
      
        return ('customer.Sellerdetails');
    }

    public function signup(){
        return ('customer.signup');
    }
    public function signupsubmitted(Request $request){
        $validate = $request->validate([
            'name'=>'required|min:5|max:15',
            //'id'=>'required',
            'address'=>'required',
            'email'=>'email',
            //'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'pass'=>'required|min:5'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters'
        ]
    );

    $customer = new Customer();
    $customer->name = $request->name;
    //$student->student_id = $request->id;
    $customer->address = $request->address;
    $customer->email = $request->email;
    $customer->pass = $request->pass;

    $customer->save();
    return redirect()->route('login');
    }
    public function Profile(){
        $c = Profile::all();
        return $Profile;
        //$customer_id = session()->get('customer');
        //return $customer_id;
        //$c = Customer::where('c_id', $customer_id)->first();
        //return $c;
       // return ('Profile')->with('c',$c);
    }
    public function profileSubmit(Request $request){
        $customer_id = session()->get('customer');
        
        //$c = Customer::where('c_id', $customer_id)->first();
        //$c->name=$request->name;
        //$c->email=$request->email;
        $data = $request->except(['_token']);
        Customer::where('c_id', $customer_id)->update($data);
        return redirect()->back();
        // dd($customer_id);
        // //dd($request->all());
        //   if(!$c)
        //   {
        //     $c->save();
        //   }
        
        
        
    }
}
