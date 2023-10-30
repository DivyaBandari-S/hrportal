<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\LeaveHelper;
use App\Models\EmployeeDetails;
use App\Models\LeaveRequest;
use PDF;

class LeaveBalances extends Component
{
   
    public $employeeDetails;
    public $sickLeavePerYear = 12; // Assuming 12 days of sick leave per year
    public $casualLeavePerYear = 12; // Assuming 12 days of casual leave per year
    public $lossOfPayPerYear = 0;
    public $sickLeaveBalance;
    public $casualLeaveBalance;
    public $lossOfPayBalance;
    public $leaveTransactions;
    public $fromDateModal;
    public $toDateModal;
    public $leaveTypeModal = 'all';
    public $transactionTypeModal = 'all';
    public $sortBy;
    public $employeeId;
    public $leaveType;
    public $status;
    public $transactionType;
  

    public function mount() {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();
    
        // Check if employeeDetails is not null before accessing its properties
        if ($this->employeeDetails) {
            // Get the logged-in employee's approved leave days for sick, causal, and loss of pay leave
            $approvedLeaveDays = LeaveHelper::getApprovedLeaveDays($employeeId);

            // Use the returned values in your component
            $this->totalCausalDays = $approvedLeaveDays['totalCausalDays'];
            $this->totalSickDays = $approvedLeaveDays['totalSickDays'];
            $this->totalLossOfPayDays = $approvedLeaveDays['totalLossOfPayDays'];
    
            // Calculate leave balances
            $this->sickLeaveBalance = $this->sickLeavePerYear - $this->totalSickDays;
            $this->casualLeaveBalance = $this->casualLeavePerYear - $this->totalCausalDays;
            $this->lossOfPayBalance = $this->lossOfPayPerYear - $this->totalLossOfPayDays;
    
        }
    }

    public function render()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();
       
        $query = LeaveRequest::join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
            ->select('leave_applies.*', 'employee_details.*')
            ->where('leave_applies.emp_id', $this->employeeId);

            if ($this->fromDateModal && $this->toDateModal) {
                $query->whereBetween('leave_applies.from_date', [$this->fromDateModal, $this->toDateModal]);
            }
    
            if ($this->leaveType && $this->leaveType !== 'all') {
                $query->where('leave_applies.leave_type', $this->leaveType);
            }
    
            if ($this->transactionType && $this->transactionType !== 'all') {
                $query->where('leave_applies.status', $this->transactionType);
            }
                 // Apply sorting based on selected option
        switch ($this->sortBy) {
            case 'leave_type':
                $query->orderBy('leave_applies.leave_type');
                break;
            case 'transaction_type':
                $query->orderBy('leave_applies.status');
                break;
            case 'newest_first':
                $query->orderByDesc('leave_applies.created_at');
                break;
            default:
                $query->orderBy('leave_applies.created_at');
        }

        $this->leaveTransactions = $query->get();


        // Check if employeeDetails is not null before accessing its properties
        if ($this->employeeDetails) {
            $gender = $this->employeeDetails->gender;
            $grantedLeave = ($gender === 'Female') ? 90 : 05; 
        
            return view('livewire.leave-balances', [
                'gender' => $gender,
                'grantedLeave' => $grantedLeave,
                'sickLeaveBalance' => $this->sickLeaveBalance,
                'casualLeaveBalance' => $this->casualLeaveBalance,
                'lossOfPayBalance' => $this->lossOfPayBalance,
                'employeeDetails' => $this->employeeDetails,
                'leaveTransactions' => $this->leaveTransactions,
            ]);
        }
    }

    public static function getLeaveBalances($employeeId)
    {
        $employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();
    
        if (!$employeeDetails) {
            return null;
        }
    
        $sickLeavePerYear = 12; // Assuming 12 days of sick leave per year
        $casualLeavePerYear = 12; // Assuming 12 days of casual leave per year
        $lossOfPayPerYear = 0;
    
        // Get the logged-in employee's approved leave days for sick, causal, and loss of pay leave
        $approvedLeaveDays = LeaveHelper::getApprovedLeaveDays($employeeId);
    
        // Calculate leave balances
        $sickLeaveBalance = $sickLeavePerYear - $approvedLeaveDays['totalSickDays'];
        $casualLeaveBalance = $casualLeavePerYear - $approvedLeaveDays['totalCausalDays'];
        $lossOfPayBalance = $lossOfPayPerYear - $approvedLeaveDays['totalLossOfPayDays'];
    
        return [
            'sickLeaveBalance' => $sickLeaveBalance,
            'casualLeaveBalance' => $casualLeaveBalance,
            'lossOfPayBalance' => $lossOfPayBalance,
        ];
    }
    public function generatePdf()
    {
        
    // Fetch employee details (you might need to adjust this based on your actual database structure)
    $employeeId = auth()->guard('emp')->user()->emp_id;

    $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();
    
    $this->leaveTransactions = LeaveRequest::join('employee_details', 'employee_details.emp_id', '=', 'leave_applies.emp_id')
        ->where('employee_details.emp_id', $employeeId)
        ->where('employee_details.company_id', auth()->guard('emp')->user()->company_id)
        // Add more conditions as needed
        ->get();
        
    // Load the view with the fetched data
    $pdf = PDF::loadView('livewire.leave-balances', [
        'leaveTransactions' =>  $this->$leaveTransactions,
        'employeeDetails' => $employeeDetails,
    ]);
    return $pdf->download('generated-pdf.pdf');
    }
    }


