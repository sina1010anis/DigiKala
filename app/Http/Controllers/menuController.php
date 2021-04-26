<?php

namespace App\Http\Controllers;

use App\Filter\sort;
use App\Models\down_all_menu;
use App\Models\factor;
use App\Models\product;
use App\Models\User;
use App\Repository\repository;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use function Symfony\Component\String\b;

class menuController extends Controller
{
    public function index(down_all_menu $slug)
    {
        //$data=resolve(repository::class)->menu_view($slug->sub_all_menu_id);
        return view('front.section.view_menu')
            ->with([
                'data' => resolve(repository::class)->menu_view($slug->sub_all_menu_id),
                'title_filter' => resolve(repository::class)->title_filter($slug->sub_all_menu_id),
                'attr_filter' => resolve(repository::class)->attr_filter(),
                'menu_id' => $slug->sub_all_menu_id
            ]);
    }

    public function test_2($id, Request $request)
    {
        if (!$request->hasValidSignature()) {
            abort(404);
        }
        return 'hello word : ' . $id;
    }

    public function test()
    {
        // پیدا کردن یک عدد در لیست و موقعیت ان در ارایه
/*        $arr_1=[5,9,7,6,4,3,11];
        $number = 3;
        $status = 0;
        $location ='';
        for ($i=0;$i<count($arr_1);$i++){
            if ($arr_1[$i] == $number){
                $status = 1;
                $location.=$i;
                break;
            }
        }
        echo $location;*/
        // حذف مقدار تکراری در دو ارایه
/*                $arr_1=[5,9,7,6,4,3,11];
                $arr_2=[8,2,1,4,6,12,7];
                foreach ($arr_1 as $k1=>$v1){
                    foreach ($arr_2 as $k2=>$v2){
                        if ($v1 == $v2){
                            unset($arr_1[$k1]);
                            unset($arr_2[$k2]);
                        }
                    }
                }
                echo '<pre>';
                print_r($arr_2);
                echo '</pre>';*/
        // مهمونی مهدی عباسی
        /*        $number = [8,9,6,4,3,10,5,7,2,1];
                $text=[];
                $j=1;
                $sum = 0;
                for ($i=0;$i<count($number)-1;$i++){
                        if ($number[$i]>$number[$j]){
                            $text[]=$number[$i].'->'.$number[$i];
                            $sum+=$number[$i];
                        }if ($number[$i]<$number[$j]){
                            $text[]=$number[$j].'->'.$number[$j];
                            $sum+=$number[$j];

                        }
                        $j++;
                }
                echo '<pre>';
                print_r($text);
                echo '</pre>';
                echo '<pre>';
                print_r($sum);
                echo '</pre>';*/
        // حذف مقدار تکراری در ارایه
/*        $number = [1, 8, 7, 9, 3, 4, 6, 2, 4, 2, 1, 3, 6, 7, 6, 5, 8, 9, 3, 2, 1, 4, 5, 9, 8, 7, 7];
        foreach ($number as $key => $val) {
            $one = @$number[$key];
            foreach ($number as $key2 => $val2) {
                if ($one == @$number[$key2]) {
                    if ($key2 != $key) {
                        unset($number[$key2]);
                    }
                }
            }
        }
            echo '<pre>';
            print_r($number);
            echo '</pre>';*/
            /*        $numbers = [7, 8, 15, 75, 36, 20, 45, 01, 95, 15, 36, 24, 27, 15, 98, 11, 35, 19, 64, 5];
                    $min = 0;
                    $max = 1;
                    for ($i = 0; $i < 10; $i++) {
                        $rand_min = rand(1, 10);
                        $rand_max = rand(11, 20);
                        $numbers[$min] = $rand_min;
                        $numbers[$max] = $rand_max;
                        $min += 2;
                        $max += 2;
                    }
                    echo '<pre>';
                    print_r($numbers);
                    echo '</pre>';*/
            //گرفتن عدد فرد و کوچکتر از 200
            /*        $numbers = [];
                    for ($i=0;$i<100;$i++){
                        $rand = rand(10,500);
                        if ($rand%2==1&&$rand<200){
                            $numbers[]=$rand;
                        }
                    }
                    echo '<pre>';
                    print_r($numbers);
                    echo '</pre>';*/
            //  جا به جابی عدد اول با عدد اخر اریه دوم
            /*        $arrey_1 = [1,2,3,4,5];
                    $arrey_2 = [6,7,8,9,10];
                    $count=count($arrey_2)-1;
                    for ($i=0;$i<count($arrey_1);$i++){
                        $tmp=$arrey_1[$i];
                        $arrey_1[$i] = $arrey_2[$count];
                        $arrey_2[$count] = $tmp;
                        $count--;
                    }
                    echo '<pre>';
                        print_r($arrey_2);
                    echo '</pre>';*/
            // عوض کردن عدد اخری با اولی ودومی با یکی مونده به اخر تا انتها
            /*        $arrey = [1,2,3,4,5];
                    $count = count($arrey)-1;
                    for ($i=0;$i<$count;$i++){
                        if ($count<$i){
                            break;
                        }
                        $temp = $arrey[$i];
                        $arrey[$i] = $arrey[$count];
                        $arrey[$count] = $temp;
                        $count--;
                    }
                    print_r($arrey);*/
        }
    }
