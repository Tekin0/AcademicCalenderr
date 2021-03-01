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

        $calendar = new Calendar();
        $calendar1_new1 = $calendar1_new->addDays(10);
        $calendar->release_date = $calendar1_new1;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        $calendar = new Calendar();
        $calendar1_new2 = $calendar1_new->addDays(10);
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
        $calendar1_new4 = $calendar1_new->addDays(11);
        $calendar->release_date = $calendar1_new4;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();
    }
    elseif ($request->category == 2){

    }
    elseif ($request->category == 3){

    }
    elseif ($request->category == 4){

    }
    elseif ($request->category == 5){

    }
    elseif ($request->category == 6){

    }
    elseif ($request->category == 7){

    }
    elseif ($request->category == 8){

    }
    elseif ($request->category == 9){

    }
    elseif ($request->category == 10){

    }
    elseif ($request->category == 11){

    }



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
