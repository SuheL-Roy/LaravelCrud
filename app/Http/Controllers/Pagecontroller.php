<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use File;

class Pagecontroller extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function display(){
        $customers = Customer::orderBy('id','desc')->get();
        return view('display', compact('customers'));
    }
    public function edit($id){
        $customer = Customer::find($id);
        return view('edit', compact('customer'));
    }

    public function delete($id){
        $customer = Customer::find($id);

        if(!is_null($customer)){
            if(File::exists('img/'.$customer->photo)){
                File::delete('img/'.$customer->photo);
            }

            $customer->delete();
            }
            Session()->flash('success', 'Customer data delete Successfully');
            return redirect()->route('display');

        
    }
   
    public function update(Request $request, $id){

        $request->validate([
            'CustomerName' => 'required',
                 'Address'=> 'required',
                   'email'=> 'required',
                   'Phone'=> 'required',

        ]);
        
        $customer = Customer::find($id);
        $customer->name = $request->CustomerName;
        $customer->adress = $request->Address;
        $customer->email = $request->email;
        $customer->phone = $request->Phone;

        if($request->hasfile('Photo')){
            if(File::exists('img/'.$customer->photo)){
                File::delete('img/'.$customer->photo);
            }
            $file =$request->file('Photo');
            $extention= $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('img/',$filename);
            $customer->photo = $filename;
        }
        $customer->save();
        Session()->flash('success', 'Customer data update Successfully');
        return redirect()->route('display');

    }



    public function store(Request $request){
        $request->validate([
            'CustomerName' => 'required',
                 'Address'=> 'required',
                   'email'=> 'required',
                   'Phone'=> 'required',

        ]);
        
        $customer = new Customer;
        $customer->name = $request->CustomerName;
        $customer->adress = $request->Address;
        $customer->email = $request->email;
        $customer->phone = $request->Phone;

        if($request->hasfile('Photo')){
            $file =$request->file('Photo');
            $extention= $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('img/',$filename);
            $customer->photo = $filename;
        }
        $customer->save();
        Session()->flash('success', 'Customer data insert Successfully');
        return redirect()->route('home');

    }

}
