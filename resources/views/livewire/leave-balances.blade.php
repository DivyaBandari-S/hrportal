<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Container Layout</title>
  
    <!-- Include Open Sans font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
    </style>
</head>
<body>
    <div class="buttons-container">
        <button class="button1">Apply</button>
        <button class="button2">Download</button>
        <select class="dropdown">
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select>
    </div>
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
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>

</div>