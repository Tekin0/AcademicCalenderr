<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Categories;
use App\Models\Info;
use App\Models\Period;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(){

        $category = Categories::all();
        $period = Period::all();
        return view('calendar.calendar', compact('category','period'));

    }

    public function ind(Request $request){
        calendar::create([
            'due_date'=>\request('due_date'),
            'release_date'=>\request('release_date')
        ]);

        return view('calendar.calendarList');
    }

    function getCalendar(){
        $info = Info::orderBy('id' , 'ASC')->get();
        $info[0] ->update([
            'asda' => 'create period'
        ]);
    }
}
