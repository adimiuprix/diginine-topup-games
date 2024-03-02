<?php

namespace App\Controllers;
use App\Models\SettingModel;
use App\Models\ItemModel;
use App\Models\ProductModel;
use App\Models\PaymentMethodModel;
use App\Models\InvoiceModel;

use ShortCode\Random;
use ShortCode\Code;

class Home extends BaseController
{
    private $setting;
    public function __construct(){
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();
    }

    public function index(): string
    {
        $setting = $this->setting;
        $itemModel = new ItemModel();

        $items = $itemModel
            ->join('categories', 'categories.id = items.id_cats')
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

        return view('home', compact('setting', 'dataItems'));
    }

    public function orderProduct($category, $slug): string
    {
        $setting = $this->setting;
        $itemModel = new ItemModel();
        $productModel = new ProductModel();
        $payMethods = new PaymentMethodModel();

        $detailProduct = $itemModel->join('categories', 'categories.id = items.id_cats')->where('slug', $slug)->first();
        $products = $productModel->join('items', 'items.id = products.id_item')->where('slug', $slug)->findAll();
        $methods = $payMethods->findAll();

        return view('order', compact('setting', 'detailProduct', 'products', 'methods'));
    }

    public function confirmInvoice(){
        $random = Random::get(15, Code::FORMAT_ALNUM_CAPITAL);
        $categoryProduct = $this->request->getPost('category');
        $serviceName = $this->request->getPost('service');
        $IdSendTo = $this->request->getPost('player');
        $payMethod = $this->request->getPost('payment');
        $price = $this->request->getPost('pricing');

        $dataPost = [
            'hash_transaction'  => $random,
            'category'  => $categoryProduct,
            'service'   => $serviceName,
            'id_player' => $IdSendTo,
            'methods_pay'   => $payMethod,
            'price'  => $price,
            'status'  => "0",
        ];

        $invoiceModel = new InvoiceModel();
        $invoiceModel->insert($dataPost);

        return redirect()->to('invoice/' . $random);
    }

    public function purchase($random)
    {
        $setting = $this->setting;
        $invoiceModel = new InvoiceModel();
        $random;    // String CIS77PMVG1I3A5F
        $invoiceResult = $invoiceModel
            ->join('categories', 'categories.id = invoices.category')
            ->join('items', 'items.id = invoices.service')
            ->join('payment_methods', 'payment_methods.id = invoices.methods_pay')
            ->where('hash_transaction', $random)
            ->first();

        return view('purchase', compact('setting', 'invoiceResult'));
    }

}
