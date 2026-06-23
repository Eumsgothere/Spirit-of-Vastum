<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DevlogModel;

class Devlog extends BaseController
{
    public function index()
    {
        $model = new DevlogModel();
        $posts = $model->findAll();

        // point to updates view
        return view('user/updates', ['posts' => $posts]);
    }

    public function create()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/updates')->with('error', 'Unauthorized');
        }

        return view('user/updates_create');
    }

    public function store()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/updates')->with('error', 'Unauthorized');
        }

        $model = new DevlogModel();
        $model->insert([
            'title'   => $this->request->getPost('title'),
            'date'    => $this->request->getPost('date'),
            'content' => $this->request->getPost('content'),
        ]);

        return redirect()->to('/updates')->with('success', 'Update created');
    }

    public function delete($id)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/updates')->with('error', 'Unauthorized');
        }

        $model = new DevlogModel();
        $model->delete($id);

        return redirect()->to('/updates')->with('success', 'Update deleted');
    }
}
