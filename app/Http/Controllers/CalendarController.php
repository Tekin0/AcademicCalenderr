<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Categories;
use App\Models\Info;
use App\Models\Pattern;
use App\Models\Period;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;
use function GuzzleHttp\Promise\all;

class CalendarController extends Controller
{
    public function index(){
        $category = Categories::all();
        $period = Period::all();
        return view('calendar.calendar', compact('category', 'period'));
    }

    public function ind(Request $request){
//        $request->validate([
//            ''=>'',
//        ]);

        $calendar = new Calendar();
        $calendar->release_date = $request->release_date;
        $calendar->due_date = $request->due_date;
        $calendar->category_id = $request->category;
        $calendar->period_id = $request->period;
        $calendar->save();

        //------------------------------------------------------------------

        $calendar1 = Calendar::all()->first();
        $calendar1_new = Carbon::make($calendar1->release_date);

        if(Pattern::where('category_id',$request->category)->where('period_id',$request->period)->first()){
            $tarih = Pattern::where('category_id',$request->category)->where('period_id',$request->period)->first()->pattern;
            $dizi = explode(',',$tarih);
            foreach ($dizi as $item){
                $calendar = new Calendar();
                $calendar->release_date = $calendar1_new->addDays($item);
                $calendar->category_id = $request->category;
                $calendar->period_id = $request->period;
                $calendar->save();
            }
            $this->updateInfo();
        }
        else{
            return 'HATAAAA';
        }

        $dates = Calendar::all();
        $info = Info::orderBy('category_id', 'ASC')->get();
        $length = collect($info)->count();
        return view('calendar.calendarList', compact('dates', 'info', 'length'));
    }

    public function updateInfo(){

        for ($i = 1; $i <= 11; $i++) {
            for ($j = 1; $j <= 2; $j++) {
                if (Info::where('category_id', '=', $i)->where('period_id', $j)->get()) {
                    $info = Info::where('category_id', '=', $i)
                        ->where('period_id', '=', $j)
                        ->orderBy('id', 'ASC')->get();

                    $calendar = Calendar::where('category_id', '=', $i)
                        ->where('period_id', '=', $j)
                        ->orderBy('id', 'ASC')->get();
                    if ($calendar->count() > 1) {
                        for ($l = 0; $l < count($info); $l++) {
                            $info[$l]->update([
                                'date_id' => $calendar[$l]->id,
                            ]);
                        }
                    }
                }
            }
        }
    }


    public function listData(){
        $question_packages = Info::query()->where('category_id',1);

       return Datatables::of($question_packages)
            ->addColumn('Detail', function ($question_packages){
                return '<a class="btn btn-success" href="'. route('calendar_index', [$question_packages->id]) .'">'.'Detail</a>';

            })
            ->addColumn('Update', function ($question_packages){
                return '<a class="btn btn-primary" href="'. route('calendar_index', [$question_packages->id]) .'">'.'Update</a>';

            })
            ->addColumn('Delete', function ($question_packages){
                return '<a class="btn btn-danger" href="'. route('calendar_index', [$question_packages->id]) .'">'.'Delete</a>';

            }
            )->rawColumns(['Detail','Update','Delete'])->make();
    }


}
