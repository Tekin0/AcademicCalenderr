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
        $category_id = $request->category;
        $period_id = $request->period;

        $dates = Calendar::all();
        $info = Info::orderBy('category_id', 'ASC')->get();
        $length = collect($info)->count();
        return view('calendar.calendarList', compact('dates', 'info', 'length','period_id','category_id'));
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


    public function listData($category = 1, $period = 1){
//        $question_packages = array();
//        for($i=1;$i<=11;$i++){
//            for($j=1;$j<=2;$j++){
//                array_push($question_packages,Info::where('category_id',$i)->where('period_id',$j)->get());
//            }
//        }
            $question_packages = Info::where('category_id',$category)->where('period_id',$period)->get();
            return Datatables::of($question_packages)
                ->editColumn('category_name',function ($data){
                    return $data->getCategories->name;
                })
                ->editColumn('period_name',function ($data){
                    return $data->getPeriod->period;
                })
                ->editColumn('release_date',function ($data){
                    return date("d F", strtotime($data->getDate->release_date));
                })
                ->addColumn('Update', function ($question_packages){
                    return '<a class="btn btn-primary" href="'. route('calendar_index', [$question_packages->id]) .'">'.'Update</a>';

                }
                )->rawColumns(['Update','category_name','period_name','release_date'])->make(true);
        }
}
