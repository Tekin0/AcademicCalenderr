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
        $release_date = $request->release_date;  // release_date değeri

        $calendar = new Calendar();
        $calendar->release_date = $request->release_date;
        $calendar->due_date = $request->due_date;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();



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



}
