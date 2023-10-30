<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Container Layout</title>
  
    <!-- Include Open Sans font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Container row */
      .bal-container{
        margin-top: 20px; 
        width: 100%;
      }

        /* Buttons and dropdown */
        .buttons-container {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Align buttons to the right */
            margin-top: 20px; /* Add some distance from the top */
            margin-right: 20px; /* Add some distance from the right */
        }

        .button2 {
            margin-right: 10px;
            padding:5px 5px ;
            width: 100px;
            text-align:center;
            border: none;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
        }

        .button1 {
            margin-right: 10px;
            padding: 5px 5px;
            width: 100px;
            border: 1px solid #007BFF;
            background-color: #fff;
            color: #007BFF;
            border-radius: 5px;
            text-align:center;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
        }

        .buttons-container .dropdown {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 5px;
            width: 100px; /* Set the width of the dropdown */
            border-radius: 5px; /* Add some rounded corners */
            font-size: 14px; /* Adjust font size */
        }

        /* Style for hover effect on options */
        .buttons-container .dropdown:hover {
            cursor: pointer;
            border: 1px solid #00BFFF;
            padding: 5px; /* Add space between options */
        }

        .dropdown option {
            padding: 5px 10px; /* Add space around the text in each option */
        }

        .view {
            text-decoration: none;
        }

        .view:hover {
            color: #007BFF;
        }
        .leave-bal{
            border: 1px solid #bfcee3;
             padding: 5px 10px; 
             border-radius: 5px;
              text-align: center; 
              height: 200px; 
              background-color:#fff;
        }
        .balance{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        /* Tube-like container */
        .tube-container {
            position: relative;
            width: 100%;
            height: 7px;
            margin-top: 52px;
            background:#fff;
            border:1px solid #ccc;
            border-radius:10px;
        }

        .tube {
            position: absolute;
            bottom: 0;
            left: 0;
            border-radius:7px;
            height: 100%;
            /* Green color for leaves */
            transition: width 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }
        .center h5{
            color:#778899;
            font-size: 22px;
            font-weight:600;
        }
        .center{
            text-align: center;
            align-items:center;
             margin-top: 20px; 
             font-size: 16px;
        }
        .center span{
            color: #778899; 
            font-size: 12px; 
            font-weight: 400;
             text-transform: capitalize;
        }
        .leave-type{
            color: #778899;
             font-size: 14px; 
             font-weight: 500;
        }
        .leave-gran{
            color: #778899; 
            font-size: 14px; 
            font-weight: 500; 
            text-transform: capitalize;
        }
        .remaining{
            color: #778899;
             font-size: 12px;
              font-weight: 400;
               text-transform: capitalize;
        }
        .view-bal{
            font-size:1.2rem;
            color:#00BFFF;
        }
        .btn-cancel{
            background:#fff;
            border:1px solid #1E90FF;
            color:#1E90FF;
            border-radius:5px;
        }
        .modal-title{
            font-size:0.975rem;
        }
        .modal-header{
            background: #F2F2F2;
        }
        .form-group label{
           font-size:0.825rem;
           font-weight:500;
           color:#778899;
        }
        .form-control option{
         font-weight:600;
         font-size:0.9rem;
        }
    </style>
</head>
<body>
    <div class="buttons-container">
        <button class="button1">Apply</button>
        <button type="button" class="button2" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fa-solid fa-download"></i>
       </button>
        <select class="dropdown">
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select>
    </div>
    <!-- modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Download Leave Transaction Report</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form novalidate class="ng-valid ng-touched ng-dirty" wire:submit.prevent="generatePdf">
            @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required-field label-style">From date</label>
                                <div class="input-group date">        
                                    <input type="date"wire:model="fromDateModal" class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
                                </div>
                                <small class="text-danger" hidden="">From date should be less than to date</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required-field label-style">To date</label>
                                <div class="input-group date">
                                   <input type="date" wire:model="toDateModal" class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
                                </div>
                                <small class="text-danger" hidden="">To date should be greater than from date</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                            <div class="form-group">
                                <label class="label-style">Leave type</label>
                                <select name="leaveType" wire:model="leaveType" class="form-control">
                                    <option value="all"  selected>All Leaves</option>
                                    <option value="casual">Casual Leave</option>
                                    <option value="lop">Loss of Pay</option>
                                    <option value="maternity">Maternity</option>
                                    <option value="paternity">Paternity</option>
                                    <option value="sick">Sick Leave</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="label-style">Transaction</label>
                                <select name="transactionType" wire:model="transactionType" class="form-control">
                                    <option value="all"  selected>All Transactions</option>
                                    <option value="casual">Granted</option>
                                    <option value="lop">Availed</option>
                                    <option value="maternity">Cancelled</option>
                                    <option value="paternity">Withdrawn</option>
                                    <option value="sick">Rejected</option>
                                    <option value="sick">Approved</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="label-style">Sort by</label>
                                <select name="sortBy" class="form-control" wire:model="sortBy">
                                    <option value="all"  selected>Date(Oldest First)</option>
                                    <option value="casual">Leave Type</option>
                                    <option value="lop">Transction Type</option>
                                    <option value="sick">Date(Newest First)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary text-capitalize ng-star-inserted">Download</button>
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                    <button hidden=""></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- leave  -->
    <div class="bal-container" >
        <div class="row" style="margin:0 auto;">
            <div class="col-md-3">
                <div class="leave-bal" >
                    <div class="balance">
                        <div class="field">
                            <span class="leave-type" >Loss Of Pay</span>
                        </div>
                        <div>
                            <span class="leave-gran">Granted:0</span>
                        </div>
                    </div>
                    <div class="center" >
                        <h5 >{{$lossOfPayBalance}} </h5>
                        <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                    </div>
                </div>
            </div>
         <!-- ... (previous code) ... -->
            <div class="col-md-3">
               <div class="leave-bal">
                <div class="balance">
                    <div class="field">
                        <span class="leave-type">
                            @if($gender === 'Female')
                                Maternity Leave
                            @elseif($gender === 'Male')
                                Paternity Leave
                            @else
                                Leave Type
                            @endif
                        </span>
                    </div>
                    <div>
                        <span class="leave-gran">Granted:{{ $grantedLeave }}</span>
                    </div>
                </div>
                <div class="center">
                    <h5>{{ $grantedLeave }}</h5>
                    <p style="margin-top:-15px;"><span class="remaining">balance</span></p>
                    <a href="#" class="view">View Details</a>
                </div>
                <div class="tube-container">
                    <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of {{ $grantedLeave }} Consumed</p>
                    <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                </div>
            </div>
              </div>


                <div class="col-md-3">
                    <div class="leave-bal">
                        <div class="balance">
                                <div class="field">
                                    <span class="leave-type">Casual Leave 
                                </div>
                                <div>
                                    <span class="leave-gran">Granted:{{ $casualLeavePerYear }}</span>
                                </div>
                         </div>
                         <div class="center" >
                             <h5 >{{ $casualLeaveBalance }}</h5>
                             <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                            <a href="#" >View Details</a>
                        </div>
                            <div class="tube-container">
                                <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of 3 Consumed</p>
                                <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-md-3">
                    <div class="leave-bal">
                        <div class="balance">
                                <div class="field">
                                    <span class="leave-type">Sick Leave
                                </div>
                                <div>
                                    <span class="leave-gran">Granted:{{ $sickLeavePerYear }}</span>
                                </div>
                         </div>
                            <div class="center" >
                                <h5 >{{ $sickLeaveBalance }}</h5>
                                <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                                <a href="#" >View Details</a>
                            </div>
                            <div class="tube-container">
                                <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of 3 Consumed</p>
                                <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal container -->
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- Initialize Datepicker -->
<script>
    $(document).ready(function() {
        console.log("Document ready!");

        // Check if jQuery is loaded
        if (typeof jQuery == 'undefined') {
            console.error('jQuery is not loaded!');
        } else {
            console.log('jQuery is loaded!');
        }

        // Check if Bootstrap is loaded
        if (typeof bootstrap == 'undefined') {
            console.error('Bootstrap is not loaded!');
        } else {
            console.log('Bootstrap is loaded!');
        }

        // Check if Bootstrap Datepicker is loaded
        if (typeof $.fn.datepicker == 'undefined') {
            console.error('Bootstrap Datepicker is not loaded!');
        } else {
            console.log('Bootstrap Datepicker is loaded!');
        }

        // Initialize Datepicker
        $('.date input').datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy'
        });
    });
</script>

<!-- Include Bootstrap Datepicker CSS -->


    </body>
    </html>

</div>