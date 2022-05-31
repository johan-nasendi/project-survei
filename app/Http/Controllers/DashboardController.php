<?php

namespace App\Http\Controllers;

use App\Exports\TransactionExport;
use App\Models\RespondentIdentitiy;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $allData =  RespondentIdentitiy::all()->count();
        $male = RespondentIdentitiy::where('gender','Pria')->count();
        $female = RespondentIdentitiy::where('gender','Wanita')->count();

        if(Auth::user()->hasRole('admin')){
            $data['data'] = RespondentIdentitiy::orderBy('id','DESC')->paginate(4);
            return view('admin.dashboard',$data,[
                'allData' => $allData,
                'male' => $male,
                'female' => $female,
            ]);
        }

        elseif(Auth::user()->hasRole('')){
            return 'hello Member';
        }

        elseif(Auth::user()->hasRole('')){
            return 'Hello Guest';
        }

    }

    public function export_mapping() {

        return Excel::download(new TransactionExport(), 'Data-kuesioner.xlsx');
    }

    public function form()
    {
        return view('forms');
    }
    public function profile()
    {
        return view('admin.profile.index');
    }
}
