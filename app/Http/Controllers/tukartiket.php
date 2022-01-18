<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fis8tickettransaction;
class tukartiket extends Controller
{
public function tukar(Request $request){
    $amount = $request->money;
    $currentuser = "";
    if($amount < $request->user()->myUser->money){
        $currentuser = User::find(auth()->user()->id)->myUser;
        $currentuser->update([
            'ticket' => $currentuser->ticket + ceil($amount/10),
            'money' => $currentuser->money - $amount
        ]);
        $currentuser = User::find(auth()->user()->id)->myUser;
       Fis8tickettransaction::create([
       
            'student_id' => auth()->user()->id,
            'add_ticket' => ceil($amount/10)
        ]);
    }
    
    return redirect(route('home'));
}
}
