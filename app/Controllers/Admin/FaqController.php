<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\FaqModel;

class FaqController extends BaseController
{
    public function index()
    {
        $faqModel = new FaqModel();
        $faqs = $faqModel->findAll();

        return view('adminpage/faqs/index', compact('faqs'));
    }

    public function addNew(){
        return view('adminpage/faqs/add');
    }

    public function store(){
        $faqModel = new FaqModel();


        $dataPost = [
            // Ambil data dari form yang diposting
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
        ];

        $faqModel->insert($dataPost);

        return redirect()->to('admin/faqs/');
    }

    public function edit($id){
        $faqModel = new FaqModel();
        $faq = $faqModel->find($id);

        return view('adminpage/faqs/edit', compact('faq'));
    }

    public function update($id)
    {
        $faqModel = new FaqModel();

        $faqModel->update($id, [
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
        ]);

        return redirect()->to(base_url('admin/faqs/'));
    }

    public function remove($id)
    {
        $faqModel = new FaqModel();
        $data = $faqModel->find($id);

        if ($data) {
            $faqModel->delete($id);

            return redirect()->to('admin/faqs/')->with('success', 'Data deleted');
        } else {
            return redirect()->to('admin/faqs/')->with('error', 'Data error, cant delete specified data');
        }

    }

}
