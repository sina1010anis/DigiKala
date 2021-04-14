<?php


namespace App\Payment;


use App\Models\factor;

class zarinPal
{
    public $id = '246f5f57-79c3-4968-91e7-25ccc4f1e099';

    public function request($price)
    {
        $zarinpal = new \Zarinpal\Zarinpal($this->id);
        $zarinpal->enableSandbox();
        $results = $zarinpal->request(
            route('user.bankVerify'),          //required
            $price,                                  //required
            'testing',                             //required
            'me@example.com',                      //optional
            '09000000000',                         //optional
            [                          //optional
                "Wages" => [
                    "zp.1.1" => [
                        "Amount" => 120,
                        "Description" => "part 1"
                    ]
                ]
            ]
        );
        //echo json_encode($results);
        if (isset($results['Authority'])) {
            file_put_contents('Authority', $results['Authority']);
            $zarinpal->redirect();
        }
    }
    public function verify(){
        $zarinpal = new \Zarinpal\Zarinpal($this->id);
        $authority = file_get_contents('Authority');
        //echo json_encode($zarinpal->verify('OK', 1000, $authority));
        if (isset($_GET['Status']) && $_GET['Status'] == 'OK') {
            $factor = factor::where('user_id' , auth()->user()->id)->orderBy('id' , 'desc')->first();
            factor::whereId($factor->id)->update(['status_buy' => 200]);
            return view('user.include.bank.successful');
        }else{
            $factor = factor::where('user_id' , auth()->user()->id)->orderBy('id' , 'desc')->first();
            factor::whereId($factor->id)->update(['status_buy' => 404]);
            return view('user.include.bank.unsuccessful');
        }
    }
}
