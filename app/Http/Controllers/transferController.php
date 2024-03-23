<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;

class transferController extends Controller
{
    public function create_trf(){
        return view('transfer');
    }

    public function store_trf(Request $request){
       // dd($request->all());
  
        // Retrieve data from the form
        $type_trf      = $request->input('type_trf');
        $acct_num      = $request->input('acct_num');
        $acct_name     = $request->input('acct_name');
        $bk_name       = $request->input('bk_name');
        $swf_code      = $request->input('swf_code');
        $iban          = $request->input('iban');
        $recpt_name    = $request->input('recpt_name');
        $recpt_address = $request->input('recpt_address');
        $amount        = $request->input('amount');
        $description   = $request->input('description');
        $narrative     = $request->input('narrative');
        $user_id       = $request->input('user_id');
        $status        = 0;
        // Store the data in the database
        $transfer = Transfer::create([
            'type_trf'  => $type_trf,
            'acct_num'  => $acct_num,
            'acct_name' => $acct_name,
            'bk_name'   => $bk_name,
            'swf_code'       => $swf_code,
            'iban'          => $iban,
            'recpt_name'    => $recpt_name,
            'recpt_address' => $recpt_address,
            'amount'        => $amount,
            'description'   => $description,
            'narrative'     => $narrative,
            'user_id'       => $user_id,
            'status'       => $status,
        ]);

        if($transfer){ // Optionally, you can redirect the user after storing the data
            return redirect()->route('reciept_trf',['user_id'=>$user_id])->with('success', 'Transfer created successfully!');
        // return 'stored successfully';
        }
        else{
             // Optionally, you can redirect the user after storing the data
        return 'not stored';
        }
    }

    public function update_trf(){
        return "update_trf form";
    }

    public function reciept_trf($user_id){
      // Get the transfer record where User_id matches the provided $id
      $transfer = Transfer::where('user_id', $user_id)->first();

      // Pass the $id and $transfer to the view
      return view('reciept', ['user_id' => $user_id, 'transfer' => $transfer]);
  }


    public function after_trf_dashboard($user_id){
 // Get the transfer record where User_id matches the provided $id
 $transfer = Transfer::where('user_id', $user_id)->get();
        // return 'welcome to the dashboard page';
        return view('dashboard',['user_id' => $user_id, 'transfer' => $transfer]);
    }
}
