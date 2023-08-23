<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestClient;
use App\Models\FormModel;
use App\Models\ProfileMdel;
use Illuminate\Http\Request;

class ClientControl extends Controller
{
    public function client(){
        $user = FormModel::find(1);
        dd($user->monprofile); 
        return view('LesClients.client');


    }

    public function clientStore(RequestClient $request){
        $client = FormModel::create($request->validated());
        return redirect()->route('Monblog')->with('success','Client ajouter!');

    }

    public  function clientEdit(FormModel $UnClient){
        return view('LesClients.editer',['UnClient'=>$UnClient]);
    }
    public function clientUpdate(FormModel $UnClient,RequestClient $request){
        $UnClient->update($request->validated());
        return redirect()->route('Monblog')->with('success','Client Modifier!') ;
    }
}
