<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Categories;
use App\Models\Info;
use App\Models\Period;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function index(){

        $category = Categories::all();
        $period = Period::all();
        return view('calendar.calendar', compact('category','period'));

    }

    public function ind(Request $request){

        //$release_date = $request->release_date;  // release_date değeri

        //$carbon_now = Carbon::now()->addDays(10)->format('d-m-Y');
        //$release_date = Carbon::parse($request->release_date)->format('d-m-Y');;
        //$deger2 = Carbon::make($release_date)->addDays(14);
        //dd($deger2);

        //$newDate = $calendar->release_date->addDays(13)->format('Y-m-d H:i:s');
        //$calendar->release_date = $newDate;
        //$release_date = Carbon::parse($request->release_date)->format('Y-m-d H:i:s');
        //$deger2 = Carbon::make($release_date)->addDays(14);
        //$calendar->release_date = $deger2;


        //Blade üzerinden gelenler alınıyor
        $calendar = new Calendar();
        $calendar->release_date = $request->release_date;
        $calendar->due_date = $request->due_date;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        //------------------------------------------------------------------

        $calendar1 = Calendar::all()->first();
        $calendar1_new = Carbon::make($calendar1-> release_date);

        if ($request->category == 1){
            if($request->period == 1){
        $calendar = new Calendar();
        $calendar1_new1 = $calendar1_new->addDays(16);
        $calendar->release_date = $calendar1_new1;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar1_new2 = $calendar1_new->addDays(-16);
        $calendar->release_date = $calendar1_new2;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar1_new3 = $calendar1_new->addDays(10);
        $calendar->release_date = $calendar1_new3;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar1_new4 = $calendar1_new->addDays(0);
        $calendar->release_date = $calendar1_new4;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

            $calendar = new Calendar();
            $calendar1_new5 = $calendar1_new->addDays(-10);
            $calendar->release_date = $calendar1_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new6 = $calendar1_new->addDays(7);
            $calendar->release_date = $calendar1_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new7 = $calendar1_new->addDays(11);
            $calendar->release_date = $calendar1_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new8 = $calendar1_new->addDays(-18);
            $calendar->release_date = $calendar1_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new9 = $calendar1_new->addDays(21);
            $calendar->release_date = $calendar1_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new10 = $calendar1_new->addDays(-7);
            $calendar->release_date = $calendar1_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new11 = $calendar1_new->addDays(7);
            $calendar->release_date = $calendar1_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new12 = $calendar1_new->addDays(4);
            $calendar->release_date = $calendar1_new12;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new13 = $calendar1_new->addDays(7);
            $calendar->release_date = $calendar1_new13;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new14 = $calendar1_new->addDays(0);
            $calendar->release_date = $calendar1_new14;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new15 = $calendar1_new->addDays(5);
            $calendar->release_date = $calendar1_new15;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new16 = $calendar1_new->addDays(12);
            $calendar->release_date = $calendar1_new16;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new17 = $calendar1_new->addDays(69);
            $calendar->release_date = $calendar1_new17;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new18 = $calendar1_new->addDays(-1);
            $calendar->release_date = $calendar1_new18;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new19 = $calendar1_new->addDays(0);
            $calendar->release_date = $calendar1_new19;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new20 = $calendar1_new->addDays(2);
            $calendar->release_date = $calendar1_new20;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new21 = $calendar1_new->addDays(11);
            $calendar->release_date = $calendar1_new21;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new22 = $calendar1_new->addDays(6);
            $calendar->release_date = $calendar1_new22;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new23 = $calendar1_new->addDays(4);
            $calendar->release_date = $calendar1_new23;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new24 = $calendar1_new->addDays(9);
            $calendar->release_date = $calendar1_new24;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new25 = $calendar1_new->addDays(5);
            $calendar->release_date = $calendar1_new25;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar1_new26 = $calendar1_new->addDays(1);
            $calendar->release_date = $calendar1_new26;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();
            }
            else{
                $calendar2 = Calendar::all()->first();
                $calendar2_new = Carbon::make($calendar2-> release_date);

                $calendar = new Calendar();
                $calendar2_new1 = $calendar2_new->addDays(-7);
                $calendar->release_date = $calendar2_new1;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new2 = $calendar2_new->addDays(-7);
                $calendar->release_date = $calendar2_new2;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new3 = $calendar2_new->addDays(7);
                $calendar->release_date = $calendar2_new3;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new4 = $calendar2_new->addDays(14);
                $calendar->release_date = $calendar2_new4;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new5 =$calendar2_new->addDays(2);
                $calendar->release_date = $calendar2_new5;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new6 = $calendar2_new->addDays(2);
                $calendar->release_date = $calendar2_new6;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new7 = $calendar2_new->addDays(24);
                $calendar->release_date = $calendar2_new7;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new8 = $calendar2_new->addDays(72);
                $calendar->release_date = $calendar2_new8;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new9 =$calendar2_new->addDays(-5);
                $calendar->release_date = $calendar2_new9;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new10 = $calendar2_new->addDays(10);
                $calendar->release_date = $calendar2_new10;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new11 = $calendar2_new->addDays(0);
                $calendar->release_date =$calendar2_new11;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new12 = $calendar2_new->addDays(6);
                $calendar->release_date = $calendar2_new12;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new13 = $calendar2_new->addDays(4);
                $calendar->release_date = $calendar2_new13;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new14 = $calendar2_new->addDays(3);
                $calendar->release_date = $calendar2_new14;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new15 = $calendar2_new->addDays(1);
                $calendar->release_date = $calendar2_new15;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new16 = $calendar2_new->addDays(2);
                $calendar->release_date = $calendar2_new16;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new17 = $calendar2_new->addDays(5);
                $calendar->release_date = $calendar2_new17;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new18 = $calendar2_new->addDays(9);
                $calendar->release_date = $calendar2_new18;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new19 = $calendar2_new->addDays(2);
                $calendar->release_date = $calendar2_new19;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar2_new20 = $calendar2_new->addDays(10);
                $calendar->release_date = $calendar2_new20;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();
            }
        } //genel akademik takvim
    elseif ($request->category == 2){
            if ($request->period ==1){
                $calendar3 = Calendar::all()->first();
                $calendar3_new = Carbon::make($calendar3-> release_date);

                $calendar = new Calendar();
                $calendar3_new1 = $calendar3_new->addDays(4);
                $calendar->release_date = $calendar3_new1;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new2 = $calendar3_new->addDays(7);
                $calendar->release_date = $calendar3_new2;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new3 = $calendar3_new->addDays(108);
                $calendar->release_date = $calendar3_new3;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new4 = $calendar3_new->addDays(116);
                $calendar->release_date = $calendar3_new4;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new5 = $calendar3_new->addDays(12);
                $calendar->release_date = $calendar3_new5;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new6 = $calendar3_new->addDays(5);
                $calendar->release_date = $calendar3_new6;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new7 = $calendar3_new->addDays(1);
                $calendar->release_date = $calendar3_new7;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new8 = $calendar3_new->addDays(1);
                $calendar->release_date = $calendar3_new8;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new9 = $calendar3_new->addDays(2);
                $calendar->release_date = $calendar3_new9;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new10 = $calendar3_new->addDays(10);
                $calendar->release_date = $calendar3_new10;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new11 = $calendar3_new->addDays(1);
                $calendar->release_date = $calendar3_new11;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new12 = $calendar3_new->addDays(1);
                $calendar->release_date = $calendar3_new12;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new13 = $calendar3_new->addDays(2);
                $calendar->release_date = $calendar3_new13;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();



                $calendar = new Calendar();
                $calendar3_new14 = $calendar3_new->addDays(-284);
                $calendar->release_date = $calendar3_new14;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new15 = $calendar3_new->addDays(1);
                $calendar->release_date = $calendar3_new15;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new16 = $calendar3_new->addDays(125);
                $calendar->release_date = $calendar3_new16;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new17 = $calendar3_new->addDays(116);
                $calendar->release_date = $calendar3_new17;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new18 = $calendar3_new->addDays(18);
                $calendar->release_date = $calendar3_new18;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new19 = $calendar3_new->addDays(6);
                $calendar->release_date = $calendar3_new19;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new20 = $calendar3_new->addDays(0);
                $calendar->release_date = $calendar3_new20;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new21 = $calendar3_new->addDays(1);
                $calendar->release_date = $calendar3_new21;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new22 = $calendar3_new->addDays(3);
                $calendar->release_date = $calendar3_new22;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new23 = $calendar3_new->addDays(10);
                $calendar->release_date = $calendar3_new23;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new24 = $calendar3_new->addDays(0);
                $calendar->release_date = $calendar3_new24;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new25 = $calendar3_new->addDays(2);
                $calendar->release_date = $calendar3_new25;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new26 = $calendar3_new->addDays(2);
                $calendar->release_date = $calendar3_new26;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();



                $calendar = new Calendar();
                $calendar3_new27 = $calendar3_new->addDays(-284);
                $calendar->release_date = $calendar3_new27;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new28 = $calendar3_new->addDays(2);
                $calendar->release_date = $calendar3_new28;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new29 = $calendar3_new->addDays(117);
                $calendar->release_date = $calendar3_new29;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new30 = $calendar3_new->addDays(130);
                $calendar->release_date = $calendar3_new30;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new31 = $calendar3_new->addDays(17);
                $calendar->release_date = $calendar3_new31;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new32 = $calendar3_new->addDays(1);
                $calendar->release_date = $calendar3_new32;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new33 = $calendar3_new->addDays(6);
                $calendar->release_date = $calendar3_new33;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new34 = $calendar3_new->addDays(16);
                $calendar->release_date = $calendar3_new34;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();



                $calendar = new Calendar();
                $calendar3_new35 = $calendar3_new->addDays(-296);
                $calendar->release_date = $calendar3_new35;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new36 = $calendar3_new->addDays(4);
                $calendar->release_date = $calendar3_new36;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new37 = $calendar3_new->addDays(136);
                $calendar->release_date = $calendar3_new37;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new38 = $calendar3_new->addDays(144);
                $calendar->release_date = $calendar3_new38;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new39 = $calendar3_new->addDays(14);
                $calendar->release_date = $calendar3_new39;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();



                $calendar = new Calendar();
                $calendar3_new40 = $calendar3_new->addDays(-312);
                $calendar->release_date = $calendar3_new40;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new41 = $calendar3_new->addDays(147);
                $calendar->release_date = $calendar3_new41;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new42 = $calendar3_new->addDays(130);
                $calendar->release_date = $calendar3_new42;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new43 = $calendar3_new->addDays(7);
                $calendar->release_date = $calendar3_new43;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();



                $calendar = new Calendar();
                $calendar3_new44 = $calendar3_new->addDays(-340);
                $calendar->release_date = $calendar3_new44;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();

                $calendar = new Calendar();
                $calendar3_new45 = $calendar3_new->addDays(365);
                $calendar->release_date = $calendar3_new45;
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();



            }
            else{

            }

    } //tıp fakültesi
    elseif ($request->category == 3){
        if ($request->period ==1){
                $calendar4 = Calendar::all()->first();
                $calendar4_new = Carbon::make($calendar4-> release_date);

            $calendar = new Calendar();
            $calendar4_new1 = $calendar4_new->addDays(4);
            $calendar->release_date = $calendar4_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new2 = $calendar4_new->addDays(7);
            $calendar->release_date = $calendar4_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new3 = $calendar4_new->addDays(101);
            $calendar->release_date = $calendar4_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new4 = $calendar4_new->addDays(123);
            $calendar->release_date = $calendar4_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new5 = $calendar4_new->addDays(12);
            $calendar->release_date = $calendar4_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new6 = $calendar4_new->addDays(5);
            $calendar->release_date = $calendar4_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new7 = $calendar4_new->addDays(1);
            $calendar->release_date = $calendar4_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new8 = $calendar4_new->addDays(-8);
            $calendar->release_date = $calendar4_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new9 = $calendar4_new->addDays(5);
            $calendar->release_date = $calendar4_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new10 = $calendar4_new->addDays(16);
            $calendar->release_date = $calendar4_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new11 = $calendar4_new->addDays(1);
            $calendar->release_date = $calendar4_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new12 = $calendar4_new->addDays(-8);
            $calendar->release_date = $calendar4_new12;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new13 = $calendar4_new->addDays(5);
            $calendar->release_date = $calendar4_new13;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();



            $calendar = new Calendar();
            $calendar4_new14 = $calendar4_new->addDays(-285);
            $calendar->release_date = $calendar4_new14;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new15 = $calendar4_new->addDays(147);
            $calendar->release_date = $calendar4_new15;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new16 = $calendar4_new->addDays(116);
            $calendar->release_date = $calendar4_new16;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new17 = $calendar4_new->addDays(4);
            $calendar->release_date = $calendar4_new17;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new18 = $calendar4_new->addDays(6);
            $calendar->release_date = $calendar4_new18;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new19 = $calendar4_new->addDays(0);
            $calendar->release_date = $calendar4_new19;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new20 = $calendar4_new->addDays(1);
            $calendar->release_date = $calendar4_new20;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new21 = $calendar4_new->addDays(4);
            $calendar->release_date = $calendar4_new21;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new22 = $calendar4_new->addDays(9);
            $calendar->release_date = $calendar4_new22;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new23 = $calendar4_new->addDays(0);
            $calendar->release_date = $calendar4_new23;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new24 = $calendar4_new->addDays(1);
            $calendar->release_date = $calendar4_new24;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new25 = $calendar4_new->addDays(4);
            $calendar->release_date = $calendar4_new25;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();



            $calendar = new Calendar();
            $calendar4_new26 = $calendar4_new->addDays(-292);
            $calendar->release_date = $calendar4_new26;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new27 = $calendar4_new->addDays(147);
            $calendar->release_date = $calendar4_new27;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new28 = $calendar4_new->addDays(109);
            $calendar->release_date = $calendar4_new28;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new29 = $calendar4_new->addDays(17);
            $calendar->release_date = $calendar4_new29;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new30 = $calendar4_new->addDays(1);
            $calendar->release_date = $calendar4_new30;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new31 = $calendar4_new->addDays(4);
            $calendar->release_date = $calendar4_new31;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new32 = $calendar4_new->addDays(14);
            $calendar->release_date = $calendar4_new32;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();



            $calendar = new Calendar();
            $calendar4_new33 = $calendar4_new->addDays(-299);
            $calendar->release_date = $calendar4_new33;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new34 = $calendar4_new->addDays(140);
            $calendar->release_date = $calendar4_new34;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new35 = $calendar4_new->addDays(144);
            $calendar->release_date = $calendar4_new35;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new36 = $calendar4_new->addDays(-4);
            $calendar->release_date = $calendar4_new36;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new37 = $calendar4_new->addDays(21);
            $calendar->release_date = $calendar4_new37;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();



            $calendar = new Calendar();
            $calendar4_new38 = $calendar4_new->addDays(-301);
            $calendar->release_date = $calendar4_new38;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new39 = $calendar4_new->addDays(140);
            $calendar->release_date = $calendar4_new39;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new40 = $calendar4_new->addDays(144);
            $calendar->release_date = $calendar4_new40;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new41 = $calendar4_new->addDays(-4);
            $calendar->release_date = $calendar4_new41;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new42 = $calendar4_new->addDays(21);
            $calendar->release_date = $calendar4_new42;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar4_new43 = $calendar4_new->addDays(18);
            $calendar->release_date = $calendar4_new43;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();




            }
        else{

        }

    } //diş hekimliği
    elseif ($request->category == 4){

        $calendar8 = Calendar::all()->first();
        $calendar8_new = Carbon::make($calendar8-> release_date);

        $calendar = new Calendar();
        $calendar8_new1 = $calendar8_new->addDays(14);
        $calendar->release_date = $calendar8_new1;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar8_new2 = $calendar8_new->addDays(9);
        $calendar->release_date = $calendar8_new2;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar8_new3 = $calendar8_new->addDays(8);
        $calendar->release_date = $calendar8_new3;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar8_new4 = $calendar8_new->addDays(4);
        $calendar->release_date = $calendar8_new4;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar8_new5 = $calendar8_new->addDays(0);
        $calendar->release_date = $calendar8_new5;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar8_new6 = $calendar8_new->addDays(53);
        $calendar->release_date = $calendar8_new6;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar8_new7 = $calendar8_new->addDays(1);
        $calendar->release_date = $calendar8_new7;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar8_new8 = $calendar8_new->addDays(5);
        $calendar->release_date = $calendar8_new8;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();


    } //yaz okulu
    elseif ($request->category == 5){
        if ($request->period ==1){

            $calendar10 = Calendar::all()->first();
            $calendar10_new = Carbon::make($calendar10-> release_date);

            $calendar = new Calendar();
            $calendar10_new1 = $calendar10_new->addDays(7);
            $calendar->release_date = $calendar10_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new2 = $calendar10_new->addDays(2);
            $calendar->release_date = $calendar10_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new3 = $calendar10_new->addDays(5);
            $calendar->release_date = $calendar10_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new4 = $calendar10_new->addDays(3);
            $calendar->release_date = $calendar10_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new5 = $calendar10_new->addDays(4);
            $calendar->release_date = $calendar10_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new6 = $calendar10_new->addDays(11);
            $calendar->release_date = $calendar10_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new7 = $calendar10_new->addDays(0);
            $calendar->release_date = $calendar10_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new8 = $calendar10_new->addDays(17);
            $calendar->release_date = $calendar10_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new9 = $calendar10_new->addDays(69);
            $calendar->release_date = $calendar10_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new10 = $calendar10_new->addDays(0);
            $calendar->release_date = $calendar10_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new11 = $calendar10_new->addDays(1);
            $calendar->release_date = $calendar10_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new12 = $calendar10_new->addDays(17);
            $calendar->release_date = $calendar10_new12;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new13 = $calendar10_new->addDays(4);
            $calendar->release_date = $calendar10_new13;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new14 = $calendar10_new->addDays(9);
            $calendar->release_date = $calendar10_new14;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new15 = $calendar10_new->addDays(-5);
            $calendar->release_date = $calendar10_new15;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar10_new16 = $calendar10_new->addDays(0);
            $calendar->release_date = $calendar10_new16;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }
        else{

            $calendar11 = Calendar::all()->first();
            $calendar11_new = Carbon::make($calendar11-> release_date);

            $calendar = new Calendar();
            $calendar11_new1 = $calendar11_new->addDays(0);
            $calendar->release_date = $calendar11_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new2 = $calendar11_new->addDays(0);
            $calendar->release_date = $calendar11_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new3 = $calendar11_new->addDays(14);
            $calendar->release_date = $calendar11_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new4 = $calendar11_new->addDays(-16);
            $calendar->release_date = $calendar11_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new5 = $calendar11_new->addDays(11);
            $calendar->release_date = $calendar11_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new6 = $calendar11_new->addDays(16);
            $calendar->release_date = $calendar11_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new7 = $calendar11_new->addDays(0);
            $calendar->release_date = $calendar11_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new8 = $calendar11_new->addDays(17);
            $calendar->release_date = $calendar11_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new9 = $calendar11_new->addDays(65);
            $calendar->release_date = $calendar11_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new10 = $calendar11_new->addDays(4);
            $calendar->release_date = $calendar11_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new11 = $calendar11_new->addDays(8);
            $calendar->release_date = $calendar11_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new12 = $calendar11_new->addDays(16);
            $calendar->release_date = $calendar11_new12;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new13 = $calendar11_new->addDays(5);
            $calendar->release_date = $calendar11_new13;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new14 = $calendar11_new->addDays(9);
            $calendar->release_date = $calendar11_new14;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new15 = $calendar11_new->addDays(14);
            $calendar->release_date = $calendar11_new15;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar11_new16 = $calendar11_new->addDays(44);
            $calendar->release_date = $calendar11_new16;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();



        }

    } //lisansüstü
    elseif ($request->category == 6){
        if ($request->period ==1){

            $calendar12 = Calendar::all()->first();
            $calendar12_new = Carbon::make($calendar12-> release_date);

            $calendar = new Calendar();
            $calendar12_new1 = $calendar12_new->addDays(11);
            $calendar->release_date = $calendar12_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar12_new2 = $calendar12_new->addDays(80);
            $calendar->release_date = $calendar12_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar12_new3 = $calendar12_new->addDays(14);
            $calendar->release_date = $calendar12_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar12_new4 = $calendar12_new->addDays(14);
            $calendar->release_date = $calendar12_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar12_new5 = $calendar12_new->addDays(4);
            $calendar->release_date = $calendar12_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar12_new6 = $calendar12_new->addDays(7);
            $calendar->release_date = $calendar12_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar12_new7 = $calendar12_new->addDays(3);
            $calendar->release_date = $calendar12_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar12_new8 = $calendar12_new->addDays(7);
            $calendar->release_date = $calendar12_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar12_new9 = $calendar12_new->addDays(2);
            $calendar->release_date = $calendar12_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar12_new10 = $calendar12_new->addDays(-9);
            $calendar->release_date = $calendar12_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar12_new11 = $calendar12_new->addDays(14);
            $calendar->release_date = $calendar12_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }
        else{

            $calendar13 = Calendar::all()->first();
            $calendar13_new = Carbon::make($calendar13-> release_date);

            $calendar = new Calendar();
            $calendar13_new1 = $calendar13_new->addDays(11);
            $calendar->release_date = $calendar13_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar13_new2 = $calendar13_new->addDays(17);
            $calendar->release_date = $calendar13_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar13_new3 = $calendar13_new->addDays(14);
            $calendar->release_date = $calendar13_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar13_new4 = $calendar13_new->addDays(8);
            $calendar->release_date = $calendar13_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar13_new5 = $calendar13_new->addDays(2);
            $calendar->release_date = $calendar13_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar13_new6 = $calendar13_new->addDays(1);
            $calendar->release_date = $calendar13_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar13_new7 = $calendar13_new->addDays(3);
            $calendar->release_date = $calendar13_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar13_new8 = $calendar13_new->addDays(2);
            $calendar->release_date = $calendar13_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar13_new9 = $calendar13_new->addDays(1);
            $calendar->release_date = $calendar13_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar13_new10 = $calendar13_new->addDays(-3);
            $calendar->release_date = $calendar13_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar13_new11 = $calendar13_new->addDays(7);
            $calendar->release_date = $calendar13_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }

    } //kurumiçi
    elseif ($request->category == 7){
        if ($request->period ==1){

            $calendar14 = Calendar::all()->first();
            $calendar14_new = Carbon::make($calendar14-> release_date);

            $calendar = new Calendar();
            $calendar14_new1 = $calendar14_new->addDays(11);
            $calendar->release_date = $calendar14_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new2 = $calendar14_new->addDays(42);
            $calendar->release_date = $calendar14_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new3 = $calendar14_new->addDays(31);
            $calendar->release_date = $calendar14_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new4 = $calendar14_new->addDays(21);
            $calendar->release_date = $calendar14_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new5 = $calendar14_new->addDays(14);
            $calendar->release_date = $calendar14_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new6 = $calendar14_new->addDays(3);
            $calendar->release_date = $calendar14_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new7 = $calendar14_new->addDays(1);
            $calendar->release_date = $calendar14_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new8 = $calendar14_new->addDays(7);
            $calendar->release_date = $calendar14_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new9 = $calendar14_new->addDays(3);
            $calendar->release_date = $calendar14_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new10 = $calendar14_new->addDays(7);
            $calendar->release_date = $calendar14_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new11 = $calendar14_new->addDays(2);
            $calendar->release_date = $calendar14_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new12 = $calendar14_new->addDays(-9);
            $calendar->release_date = $calendar14_new12;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar14_new13 = $calendar14_new->addDays(14);
            $calendar->release_date = $calendar14_new13;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();


        }
        else{

            $calendar15 = Calendar::all()->first();
            $calendar15_new = Carbon::make($calendar15-> release_date);

            $calendar = new Calendar();
            $calendar15_new1 = $calendar15_new->addDays(11);
            $calendar->release_date = $calendar15_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new2 = $calendar15_new->addDays(14);
            $calendar->release_date = $calendar15_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new3 = $calendar15_new->addDays(17);
            $calendar->release_date = $calendar15_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new4 = $calendar15_new->addDays(14);
            $calendar->release_date = $calendar15_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new5 = $calendar15_new->addDays(8);
            $calendar->release_date = $calendar15_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new6 = $calendar15_new->addDays(2);
            $calendar->release_date = $calendar15_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new7 = $calendar15_new->addDays(1);
            $calendar->release_date = $calendar15_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new8 = $calendar15_new->addDays(3);
            $calendar->release_date = $calendar15_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new9 = $calendar15_new->addDays(2);
            $calendar->release_date = $calendar15_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new10 = $calendar15_new->addDays(1);
            $calendar->release_date = $calendar15_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new11 = $calendar15_new->addDays(-3);
            $calendar->release_date = $calendar15_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar15_new12 = $calendar15_new->addDays(7);
            $calendar->release_date = $calendar15_new12;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }

    } //kurumlararası
    elseif ($request->category == 8){
        if ($request->period ==1){

            $calendar16 = Calendar::all()->first();
            $calendar16_new = Carbon::make($calendar16-> release_date);

            $calendar = new Calendar();
            $calendar16_new1 = $calendar16_new->addDays(25);
            $calendar->release_date = $calendar16_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar16_new2 = $calendar16_new->addDays(16);
            $calendar->release_date = $calendar16_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar16_new3 = $calendar16_new->addDays(7);
            $calendar->release_date = $calendar16_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar16_new4 = $calendar16_new->addDays(5);
            $calendar->release_date = $calendar16_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar16_new5 = $calendar16_new->addDays(0);
            $calendar->release_date = $calendar16_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar16_new6 = $calendar16_new->addDays(7);
            $calendar->release_date = $calendar16_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }
        else{

            $calendar17 = Calendar::all()->first();
            $calendar17_new = Carbon::make($calendar17-> release_date);

            $calendar = new Calendar();
            $calendar17_new1 = $calendar17_new->addDays(11);
            $calendar->release_date = $calendar17_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar17_new2 = $calendar17_new->addDays(17);
            $calendar->release_date = $calendar17_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar17_new3 = $calendar17_new->addDays(14);
            $calendar->release_date = $calendar17_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar17_new4 = $calendar17_new->addDays(8);
            $calendar->release_date = $calendar17_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar17_new5 = $calendar17_new->addDays(2);
            $calendar->release_date = $calendar17_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar17_new6 = $calendar17_new->addDays(1);
            $calendar->release_date = $calendar17_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar17_new7 = $calendar17_new->addDays(3);
            $calendar->release_date = $calendar17_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar17_new8 = $calendar17_new->addDays(2);
            $calendar->release_date = $calendar17_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar17_new9 = $calendar17_new->addDays(1);
            $calendar->release_date = $calendar17_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar17_new10 = $calendar17_new->addDays(-3);
            $calendar->release_date = $calendar17_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar17_new11 = $calendar17_new->addDays(7);
            $calendar->release_date = $calendar17_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }

    } //merkezi yerleştirme
    elseif ($request->category == 9){
        if ($request->period ==1){

            $calendar18 = Calendar::all()->first();
            $calendar18_new = Carbon::make($calendar18-> release_date);

            $calendar = new Calendar();
            $calendar18_new1 = $calendar18_new->addDays(11);
            $calendar->release_date = $calendar18_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar18_new2 = $calendar18_new->addDays(73);
            $calendar->release_date = $calendar18_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar18_new3 = $calendar18_new->addDays(21);
            $calendar->release_date = $calendar18_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar18_new4 = $calendar18_new->addDays(14);
            $calendar->release_date = $calendar18_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar18_new5 = $calendar18_new->addDays(4);
            $calendar->release_date = $calendar18_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar18_new6 = $calendar18_new->addDays(7);
            $calendar->release_date = $calendar18_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar18_new7 = $calendar18_new->addDays(3);
            $calendar->release_date = $calendar18_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar18_new8 = $calendar18_new->addDays(7);
            $calendar->release_date = $calendar18_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar18_new9 = $calendar18_new->addDays(2);
            $calendar->release_date = $calendar18_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar18_new10 = $calendar18_new->addDays(-9);
            $calendar->release_date = $calendar18_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar18_new11 = $calendar18_new->addDays(14);
            $calendar->release_date = $calendar18_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }
        else{

            $calendar19 = Calendar::all()->first();
            $calendar19_new = Carbon::make($calendar19-> release_date);

            $calendar = new Calendar();
            $calendar19_new1 = $calendar19_new->addDays(11);
            $calendar->release_date = $calendar19_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar19_new2 = $calendar19_new->addDays(24);
            $calendar->release_date = $calendar19_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar19_new3 = $calendar19_new->addDays(7);
            $calendar->release_date = $calendar19_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar19_new4 = $calendar19_new->addDays(9);
            $calendar->release_date = $calendar19_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar19_new5 = $calendar19_new->addDays(1);
            $calendar->release_date = $calendar19_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar19_new6 = $calendar19_new->addDays(1);
            $calendar->release_date = $calendar19_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar19_new7 = $calendar19_new->addDays(3);
            $calendar->release_date = $calendar19_new7;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar19_new8 = $calendar19_new->addDays(2);
            $calendar->release_date = $calendar19_new8;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar19_new9 = $calendar19_new->addDays(1);
            $calendar->release_date = $calendar19_new9;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar19_new10 = $calendar19_new->addDays(-3);
            $calendar->release_date = $calendar19_new10;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar19_new11 = $calendar19_new->addDays(7);
            $calendar->release_date = $calendar19_new11;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }

    } //çift anadal yandal
    elseif ($request->category == 10){
        if ($request->period ==1){

            $calendar20 = Calendar::all()->first();
            $calendar20_new = Carbon::make($calendar20-> release_date);

            $calendar = new Calendar();
            $calendar20_new1 = $calendar20_new->addDays(7);
            $calendar->release_date = $calendar20_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar20_new2 = $calendar20_new->addDays(28);
            $calendar->release_date = $calendar20_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar20_new3 = $calendar20_new->addDays(7);
            $calendar->release_date = $calendar20_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar20_new4 = $calendar20_new->addDays(21);
            $calendar->release_date = $calendar20_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar20_new5 = $calendar20_new->addDays(0);
            $calendar->release_date = $calendar20_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar20_new6 = $calendar20_new->addDays(7);
            $calendar->release_date = $calendar20_new6;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }
        else{

            $calendar21 = Calendar::all()->first();
            $calendar21_new = Carbon::make($calendar21-> release_date);

            $calendar = new Calendar();
            $calendar21_new1 = $calendar21_new->addDays(15);
            $calendar->release_date = $calendar21_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar21_new2 = $calendar21_new->addDays(2);
            $calendar->release_date = $calendar21_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar21_new3 = $calendar21_new->addDays(14);
            $calendar->release_date = $calendar21_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar21_new4 = $calendar21_new->addDays(0);
            $calendar->release_date = $calendar21_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar21_new5 = $calendar21_new->addDays(7);
            $calendar->release_date = $calendar21_new5;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }

    } //özel öğrenci
    elseif ($request->category == 11){
        if ($request->period ==1){

            $calendar22 = Calendar::all()->first();
            $calendar22_new = Carbon::make($calendar22-> release_date);

            $calendar = new Calendar();
            $calendar22_new1 = $calendar22_new->addDays(21);
            $calendar->release_date = $calendar22_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar22_new2 = $calendar22_new->addDays(9);
            $calendar->release_date = $calendar22_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar22_new3 = $calendar22_new->addDays(5);
            $calendar->release_date = $calendar22_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar22_new4 = $calendar22_new->addDays(9);
            $calendar->release_date = $calendar22_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }
        else{

            $calendar23 = Calendar::all()->first();
            $calendar23_new = Carbon::make($calendar23-> release_date);

            $calendar = new Calendar();
            $calendar23_new1 = $calendar23_new->addDays(21);
            $calendar->release_date = $calendar23_new1;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar23_new2 = $calendar23_new->addDays(9);
            $calendar->release_date = $calendar23_new2;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar23_new3 = $calendar23_new->addDays(5);
            $calendar->release_date = $calendar23_new3;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

            $calendar = new Calendar();
            $calendar23_new4 = $calendar23_new->addDays(9);
            $calendar->release_date = $calendar23_new4;
            $calendar->category_id = $request->category;
            $calendar->period_id = $request->period;
            $calendar->save();

        }

    } //önlisans ek sınav



        $dates = Calendar::all();
        $info = Info::orderBy('category_id','ASC')->get();
        $lenght = collect($info)->count();
        return view('calendar.calendarList',compact('dates','info','lenght'));

    }

    function getCalendar(){
        $info = Info::orderBy('id' , 'ASC')->get();
        $info[0] ->update([
            'asda' => 'create period'
        ]);
    }

    function createDate(Request $request){

    }



}
