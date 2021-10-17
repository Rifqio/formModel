<?php

namespace App\Controllers;
use App\Models\FormModel;
class Form extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->formModel = new FormModel();
    }
    public function index()
    {
        $form = $this->formModel->findAll();
        $data = ['form'=>$form];
        return view('pages/home',$data); 

    }
    public function create()
    {
        helper(['form', 'url']);
        $periksa = $this -> validate([
            'nama' => 'required',
            'status' => 'required',
            'jurusan' => 'required',
            'gender' => 'required',
            'kejujuran' => 'required'
        ]);
        if (! $periksa) {
            return view('pages/signup', [
                'validation' => $this->validator,
            ]);
        } else {
            $form = $this->formModel->findAll();
            $data = ['form'=>$form];
            return view('pages/success',$data);
        }
     }
    public function save()
    {
        $this->formModel->save([
           'nama' => $this->request->getVar('username'),
           'gender' =>$this->request->getVar('gender'),
           'jurusan' =>$this->request->getVar('jurusan'),
           'status' => $this->request->getVar('status'),
           'kota' => $this->request->getVar('kota')

       ]);
    return redirect()->to('/form/index');
    }
}
