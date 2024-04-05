<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Admin\ReviewModel;

class ReviewController extends BaseController
{
    public function index()
    {
        $reviewModel = new ReviewModel();
        $reviews = $reviewModel->findAll();

        return view('adminpage/review/index', compact('reviews'));
    }

    public function addNew()
    {
        return view('adminpage/review/add');
    }

    public function store(){
        $reviewModel = new ReviewModel();

        $dataReview = [
            'name' => $this->request->getPost('username'),
            'number_wa' => $this->request->getPost('wanumb'),
            'rating' => $this->request->getPost('rating'),
            'review' => $this->request->getPost('revcontent'),
        ];

        $reviewModel->insert($dataReview);

        return redirect()->to('admin/review-manager');
    }

    public function edit($id)
    {
        $reviewModel = new ReviewModel();
        $review = $reviewModel->find($id);

        return view('adminpage/review/edit', compact('review'));
    }

    public function update($id)
    {
        $reviewModel = new ReviewModel();

        $reviewModel->update($id, [
            'name' => $this->request->getPost('username'),
            'number_wa' => $this->request->getPost('wanumb'),
            'rating' => $this->request->getPost('rating'),
            'review' => $this->request->getPost('revcontent'),
        ]);

        return redirect()->to('admin/review-manager');
    }

}
