<?php

namespace App\Controllers;
use App\Models\SettingModel;
use App\Models\ItemModel;
use App\Models\ProductModel;
use App\Models\PaymentMethodModel;
use App\Models\InvoiceModel;
use App\Models\SliderModel;
use App\Models\FavouriteModel;
use App\Models\Admin\ReviewModel;

class Home extends BaseController
{
    private $setting;
    private $reviews;

    public function __construct(){
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();

        $reviewModel = new ReviewModel();
        $this->reviews = $reviewModel->findAll();
    }

    public function index(): string
    {
        $setting = $this->setting;
        $reviews = $this->reviews;

        $itemModel = new ItemModel();
        $sliderModel = new SliderModel();
        $favouriteModel = new FavouriteModel();

        $sliders = $sliderModel->get()->getResult();

        $favourites = $favouriteModel
            ->join('items', 'items.id = favourites.section')
            ->join('categories', 'categories.id = items.id_cats')
            ->get()->getResult();

        $items = $itemModel
            ->join('categories', 'categories.id = items.id_cats')
            ->where('status', 'enable')
            ->findAll();

        $dataItems = [];

        foreach ($items as $item) {
            $dataItems[$item['category']][] = [
                'name' => $item['item_name'],
                'slug' => $item['slug'],
                'category' => $item['category'],
                'image' => $item['image'],
            ];
        }

        $session = session();
        $user_id = $session->get('user_id');


        return view('home', compact('setting', 'user_id', 'sliders', 'favourites', 'dataItems', 'reviews'));
    }

    public function orderProduct($category, $slug): string
    {
        $setting = $this->setting;
        $reviews = $this->reviews;

        $itemModel = new ItemModel();
        $productModel = new ProductModel();
        $payMethods = new PaymentMethodModel();

        $products = $productModel->join('items', 'items.id = products.id_item')->where('slug', $slug)->findAll();
        $detailProduct = $itemModel->where('slug', $slug)->first();
        $methods = $payMethods->findAll();
        // dd($detailProduct);
        $session = session();
        $user_id = $session->get('user_id');

        return view('order', compact('setting', 'user_id', 'detailProduct', 'products', 'methods', 'reviews'));
    }

    public function trackInvoice(){
        $setting = $this->setting;
        $reviews = $this->reviews;

        $session = session();
        $user_id = $session->get('user_id');

        return view('tracking', compact('setting', 'user_id', 'reviews'));
    }

    public function trackInv(){
        $invoiceCode = $this->request->getPost('invoice');

        $invoiceModel = new InvoiceModel();
        $invoice = $invoiceModel->where('hash_transaction', $invoiceCode)->first();

        if ($invoice) {
            // Jika invoice ditemukan, tampilkan informasinya
            return redirect()->to('invoice/' . $invoiceCode)->with('invoice', $invoice);
        } else {
            // Jika tidak ditemukan, tampilkan pesan error
            return redirect()->to('tracking')->back()->with('notif', 'Invoice tidak di temukan.');
        }
    }

    public function priceList(){
        $setting = $this->setting;
        $reviews = $this->reviews;

        $session = session();
        $user_id = $session->get('user_id');
        $itemModel = new ItemModel();
        $productModel = new ProductModel();

        $prices = $productModel->findAll();

        return view('pricelist', compact('setting', 'user_id', 'prices', 'reviews'));
    }

    public function about(){

    }

    public function policy(){
        $setting = $this->setting;
        $reviews = $this->reviews;

        $session = session();
        $user_id = $session->get('user_id');

        return view('eula/policy', compact('setting', 'user_id', 'reviews'));
    }

    public function terms(){
        $setting = $this->setting;
        $reviews = $this->reviews;

        $session = session();
        $user_id = $session->get('user_id');

        return view('eula/terms-condition', compact('setting', 'user_id', 'reviews'));
    }

}
