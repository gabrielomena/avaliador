<?php

namespace App\Http\Controllers;

use App\FuncaoCargo;
use App\Profile;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        $funcao = FuncaoCargo::all();
        return view('welcome')->with('funcao',$funcao);
    }

    public function candidatos()
    {
        $profiles = Profile::all();
        return view('profiles.candidatos')->with('profiles',$profiles);

    }

    public function avaliar($id){
        $profiles = Profile::where ('id',$id)->first();

        if (empty($profiles)){
            return "Candidato não encontrado";
        }
        return view('profiles.form')->with('p',$profiles);
    }

    public function novo(Request $request)
    {
        $profile = Profile::all();
        $cpf = $request->cpf;
        return view('profiles.novo',['profile'=> $profile,'cpf'=>$cpf]);
    }

    public function adiciona()
    {
        Profile::create(Request::all());
        return redirect()
            ->action('ProfileController@index');
    }
}
