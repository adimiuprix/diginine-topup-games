<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\Admin\ReviewModel;

class WinrateController extends BaseController
{
    private $setting;
    private $reviews;

    public function __construct(){
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();

        $reviewModel = new ReviewModel();
        $this->reviews = $reviewModel->findAll();
    }

    public function index()
    {
        $setting = $this->setting;
        $reviews = $this->reviews;

        $session = session();
        $user_id = $session->get('user_id');

        return view('winrate', compact('setting', 'user_id', 'reviews'));
    }

    public function checkWR(){
        $text1 = 'Kamu memerlukan sekitar ';
        $text2 = ' Win Tanpa Lose Untuk Mendapatkan Winrate ';

        $tPer = $this->request->getVar('tot_match');
        $tWr = $this->request->getVar('tot_wr');
        $reqWr = $this->request->getVar('req_wr');

        if ($tPer <= 0 || $tPer != intval($tPer)) {
            return redirect()->to('/winrate')->with('match', 'Total Pertandingan Harus Bilangan Bulat')->withInput();
        }
        if ($tWr == 100) {
            return redirect()->to('/winrate')->with('wr_now', 'Mau Pamer Masbro?')->withInput();
        }
        if ($reqWr == 100) {
            return redirect()->to('/winrate')->with('req_wr', 'Mana Bisa Masbro')->withInput();
        }
        if ($reqWr > 100 || $tWr > 100) {
            return redirect()->to('/winrate')->with('req_wr', 'WR nya kegedean masbro')->withInput();
        }
        if ($tWr > $reqWr) {
            return redirect()->to('/winrate')->with('wr_now', 'WR lu kegedean Masbro ')->withInput();
        }

        // rumus
        $tWin = $tPer * (intval($tWr) / 100);
        $tLose = $tPer - $tWin;
        $calcWr = 100 - intval($reqWr);
        $sumWr = 100 / intval($calcWr);
        $calcLR = $tLose * $sumWr;
        $finalCalc = $calcLR - $tPer;
        $total = round($finalCalc);
        
        return redirect()->to('winrate')->with('data', $text1 . $total . $text2 . $reqWr . '%')->withInput();
    }
}
