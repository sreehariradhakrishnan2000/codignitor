<?php

namespace App\Controllers;

use App\Models\Usermodel;
use App\Controllers\BaseController;

class Crud extends BaseController
{
    public function index()
    {
         $users = new Usermodel();
         $data['users']=$users->findAll();
         return view('codeview',$data);
    }
    public function create()
    {
        
         return view('userform');
    }
    public function save()
    {
        $data=[

        'name'=> $this->request->getPost('name') 
        ];
        $users = new Usermodel();
        $users->insertUser($data);
        session()->setFlashdata('success','inserted successfully');
        return redirect()->to('/users');
    }

    public function update($id = null)
    {
        $model = new Usermodel();
        $data = [
            'name' => $this->request->getVar('name'),
        
        ];
        $model->updateUser($id, $data);

        session()->setFlashdata('success','updated successfully');
        return redirect()->to('/users');
    }

    public function edit($id = null)
    {
        $model = new UserModel();
        $data['user'] = $model->where('id', $id)->first();
        return view('users/edit', $data);
    }
    public function delete($id = null)
    {
        $model = new UserModel();
        $model->where('id', $id)->delete();
        return redirect()->to('/users');
    }

}
