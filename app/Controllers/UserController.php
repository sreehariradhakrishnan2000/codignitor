<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        
        return view('index', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $model = new UserModel();

        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[test.email]',
            'image' => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',

        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        } else {
            $image = $this->request->getFile('image');
            $newName = $image->getRandomName();
        
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'image' => $newName,
        ];

        $model->insert($data);
        $image->move('./uploads/', $newName);
        return redirect()->to('userslist');
    }
}


    public function upload()
{
    $file = $this->request->getFile('userfile');

    $rules = [
        'userfile' => [
            'uploaded[userfile]',
            'mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png]'
            
        ]
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    if ($file->isValid() && !$file->hasMoved()) {
        $file->move('./public/uploads/');
        echo 'File uploaded successfully!';
    } else {
        echo 'Failed to upload file.';
    }
}



    public function edit($id = null)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);

        return view('edit', $data);
    }

    public function update()
    {
        $model = new UserModel();

        $id = $this->request->getVar('id');

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];

        $model->update($id, $data);

        return redirect()->to('userslist');
    }

    public function delete($id = null)
    {
        $model = new UserModel();

        $model->delete($id);

        return redirect()->to('userslist');
    }

    public function pageindex($page = 1) 
    {
        $model = new UserModel();

        $data['users'] = $model->paginate(10);

        $data['pager'] = $model->pager;

        return view('index', $data);
    }
}
