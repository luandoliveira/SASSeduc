<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerUser extends Controller
{


    public function profile(Request $request) 
    {
        return view('editaperfil');
    }

    public function profileupdate(Request $request) 
    {

        $data = $request->all();

        if ($data['password'] != null)  //verificando se o campo senha não esta vazio
            $data['password'] = bcrypt($data['password']); //encriptogranfando senha
        else
            unset($data['password']);

        $update = auth()->user()->update($data);
        
        if ($update) {
            //return redirect()->route('profile')->with('success', 'Dados Atualizados com sucesso!');
            $edit['success'] = true;
            $edit['message'] = 'Dados Atualizados com sucesso!';
            echo json_encode($edit);
            return;
        }else {
            //return redirect()->back()->with('error', 'Falha ao editar registro...');
            $edit['success'] = false;
            $edit['message'] = 'Falha ao editar registro...';
            echo json_encode($edit);
            return;
        }
    }  
             
}
