<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestClient;
use App\Models\FormModel;
use App\Models\ProfileMdel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientControl extends Controller
{
    public function client(){
        //dd( $user->taggs()->name);
        return view('LesClients.client');

    }

    public function showUser(){
        return view('LesClients.showClient',[
            'clients'=>FormModel::with('taggs','monprofile')->paginate(5)
        ]);
    }

    public function clientStore(RequestClient $request){
        $client = FormModel::create($request->validated());
        return redirect()->route('Monblog')->with('success','Client ajouter!');

    }

    public  function clientEdit(FormModel $UnClient){
        return view('LesClients.editer',['UnClient'=>$UnClient]);
    }
    public function clientUpdate(FormModel $UnClient,RequestClient $request){
        $data = $request->validated();
        dd($data);
        $UnClient->update($request->validated());
        return redirect()->route('Monblog')->with('success','Client Modifier!') ;
    }
}
