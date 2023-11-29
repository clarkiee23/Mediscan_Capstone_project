<?php

namespace App\Http\Controllers;
use App\Models\PatientProfile;
use App\Models\Visitor;
use App\Models\HealthEvaluation;
use App\Models\Position;
use App\Models\Department;
use App\Models\YearLevel;
use App\Models\MedicalSupply;
use App\Models\MedType;
use App\Models\Complaint;
use App\Models\Users;

use App\Charts\SampleChart;
use App\Charts\WeeklyReportChart;
use App\Charts\MonthlyReportChart;
use App\Charts\YearlyReportChart;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Carbon\Carbon;


class ChartController extends Controller
{
    public function adminchart(){
        $users = Users::get();
        $users->count();
        
        return redirect()->route('getUserupdate');
    }
}
