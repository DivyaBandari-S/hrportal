<?php

use App\Livewire\EmpLogin;
use App\Livewire\Feeds;
use App\Livewire\HelpDesk;
use App\Livewire\Home;
use App\Livewire\Peoples;
use App\Livewire\ProfileInfo;
use App\Livewire\Settings;
use App\Livewire\Review;
use App\Livewire\Tasks;
use App\Livewire\SalaryRevisions;
use App\Livewire\Itdeclaration;
use App\Livewire\Itstatement1;
use App\Livewire\Payroll;
use App\Livewire\Payslip;
use App\Livewire\PlanA;
use App\Livewire\Documents;
use App\Livewire\Documentcenter;
use App\Livewire\LeaveApply;
use App\Livewire\LeavePending;
use App\Livewire\LeavePage;
use App\Livewire\ViewPendingDetails;
use App\Livewire\LeaveBalances;
use App\Livewire\LeaveCalendar;
use App\Livewire\HolidayCalender;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'checkAuth'], function () {
    Route::get('/emplogin', EmpLogin::class)->name('emplogin');
    Route::get('/Login&Register', function () {
        return view('login_and_register_view');
    });
    Route::get('/CompanyLogin', function () {
        return view('company_login_view');
    });
    Route::get('/CreateCV', function () {
        return view('create_cv_view');
    });
});
Route::middleware(['auth:web'])->group(function () {
    Route::get('/Jobs', function () {
        return view('jobs_view');
    });
});
Route::middleware(['auth:com'])->group(function () {
    Route::get('/PostJobs', function () {
        return view('post_jobs_view');
    });
});


Route::middleware(['auth:emp'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/ProfileInfo', ProfileInfo::class)->name('profile.info');
    Route::get('/Feeds', Feeds::class);
    Route::get('/PeoplesList', Peoples::class);
    Route::get('/HelpDesk', HelpDesk::class);
    Route::get('/Settings', Settings::class);
    Route::get('/review', Review::class)->name('review');
    Route::get('/tasks', Tasks::class)->name('task');


    Route::get('/payslip', Payroll::class);
    Route::get('/slip', Payslip::class);
    Route::get('/itdeclaration', Itdeclaration::class);
    Route::get('/itstatement', Itstatement1::class);
    Route::get('/document', Documentcenter::class);
    Route::get('/documents', Documents::class);
    Route::get('/delegatesddb', function () {
        return view('delegate');
    });
    Route::get('/plan-A', PlanA::class)->name('plan-a');

    Route::get('/leave-page', LeavePage::class)->name('leave-page');
    Route::get('/leave-apply', LeaveApply::class)->name('leave-apply');
    Route::get('/holiday-calender', HolidayCalender::class)->name('holiday-calender');
    Route::get('/leave-balances', LeaveBalances::class)->name('leave-balances');
    Route::get('/leave-calendar', LeaveCalendar::class)->name('leave-calendar');
    Route::get('/salary-revision', SalaryRevisions::class)->name('salary-revision');
    Route::get('/leave-page', LeavePage::class)->name('leave-page');
    Route::get('/leave-apply', LeaveApply::class)->name('leave-apply');
    Route::get('/holiday-calender', HolidayCalender::class)->name('holiday-calender');
    Route::get('/leave-balances', LeaveBalances::class)->name('leave-balances');
    Route::get('/salary-revision', SalaryRevisions::class)->name('salary-revision');
});




Route::get('/your-download-route', function () {
    return view('download-pdf');
});
Route::get('/v2/employee/addemployeworkflowdelegates', function () {
    return view('submitdelegate');
});
