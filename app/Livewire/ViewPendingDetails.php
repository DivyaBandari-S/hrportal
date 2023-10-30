<?php

namespace App\Livewire;
use App\Models\LeaveRequest;
use App\Models\EmployeeDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Livewire\Component;

class ViewPendingDetails extends Component
{
    public $employeeDetails = [];
    public $employeeId;
    public $leaveRequests;

    public function mount()
    {
        // Get the logged-in user's ID
        $employeeId = auth()->guard('emp')->user()->emp_id;
        // Fetch employee details by joining employeedetails and leave_applies tables
        $this->employeeDetails = EmployeeDetails::join('leave_applies', 'employee_details.emp_id', '=', 'leave_applies.emp_id')
            ->where('employee_details.emp_id', $employeeId)
            ->select(
                DB::raw('CONCAT(employee_details.first_name, " ", employee_details.last_name) as fullname'),
                'employee_details.image',
                'leave_applies.*'
            )
            ->first();
    
        // Check if employeeDetails is not null
        if ($this->employeeDetails) {
            // Fetch only pending leave requests for the logged-in user
            $this->leaveRequests = LeaveRequest::where('emp_id', $employeeId)
                ->where('status', 'pending')
                ->orderBy('created_at', 'desc')
                ->get();
               
        } else {
            // Handle the case where employeeDetails is null
            $this->leaveRequests = collect(); // or any other appropriate handling
        }
    }
    
    
    
    
    public function hasPendingLeave()
    {
        // Check if there are pending leave requests
        return $this->leaveRequests->where('status', 'pending')->isNotEmpty();
    }
    public  function calculateNumberOfDays($fromDate, $fromSession, $toDate, $toSession)
    {
        try {
            $startDate = Carbon::createFromFormat('Y-m-d H:i:s', $fromDate . ' 00:00:00');
            $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $toDate . ' 00:00:00');
            // Check if the start and end sessions are different on the same day
            if (
                $startDate->isSameDay($endDate) &&
                $this->getSessionNumber($fromSession) === $this->getSessionNumber($toSession)
            ) {
                // Inner condition to check if both start and end dates are weekdays
                if (!$startDate->isWeekend() && !$endDate->isWeekend()) {
                    return 0.5;
                } else {
                    // If either start or end date is a weekend, return 0
                    return 0;
                }
            }
            if (
                $startDate->isSameDay($endDate) &&
                $this->getSessionNumber($fromSession) !== $this->getSessionNumber($toSession)
            ) {
                // Inner condition to check if both start and end dates are weekdays
                if (!$startDate->isWeekend() && !$endDate->isWeekend()) {
                    return 1;
                } else {
                    // If either start or end date is a weekend, return 0
                    return 0;
                }
            }
            

            $totalDays = 0;

            while ($startDate->lte($endDate)) {
                // Check if it's a weekday (Monday to Friday)
                if ($startDate->isWeekday()) {
                    $totalDays += 1;
                }

                // Move to the next day
                $startDate->addDay();
            }

            // Deduct weekends based on the session numbers
            if ($this->getSessionNumber($fromSession) > 1) {
                $totalDays -= $this->getSessionNumber($fromSession) - 1; // Deduct days for the starting session
            }
            if ($this->getSessionNumber($toSession) < 2) {
                $totalDays -= 2 - $this->getSessionNumber($toSession); // Deduct days for the ending session
            }
            // Adjust for half days
            if ($this->getSessionNumber($fromSession) === $this->getSessionNumber($toSession)) {
                // If start and end sessions are the same, check if the session is not 1
                if ($this->getSessionNumber($fromSession) !== 1) {
                    $totalDays += 0.5; // Add half a day
                }
            }elseif($this->getSessionNumber($fromSession) !== $this->getSessionNumber($toSession)){
                if ($this->getSessionNumber($fromSession) !== 1) {
                    $totalDays += 1; // Add half a day
                }
            }
            else {
                $totalDays += ($this->getSessionNumber($toSession) - $this->getSessionNumber($fromSession) + 1) * 0.5;
            }

            return $totalDays;

        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }


    private function getSessionNumber($session)
    {
        // You might need to customize this based on your actual session values
        return (int) str_replace('Session ', '', $session);
    }

    public function approveLeave($leaveRequestId)
    {
        // Find the leave request by ID
        $leaveRequest = LeaveRequest::find($leaveRequestId);

        // Update status to 'approved'
        $leaveRequest->status = 'approved';
        $leaveRequest->save();
        $leaveRequest->touch();

        session()->flash('message', 'Leave application approved successfully.');
    }

    public function rejectLeave($leaveRequestId)
    {
        // Find the leave request by ID
        $leaveRequest = LeaveRequest::find($leaveRequestId);

        // Update status to 'rejected'
        $leaveRequest->status = 'rejected';
        $leaveRequest->save();
        $leaveRequest->touch();

        session()->flash('message', 'Leave application rejected.');
    }

    public function render()
    {
        return view('livewire.view-pending-details');
    }
}
