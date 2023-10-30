<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .accordion {
            border: 0.0625rem solid #ccc;
            margin-bottom: 0.625rem;
            width:90%;
            margin:0 auto;
        }
      

        .accordion-heading {
            background-color: #fff;
            padding: 0.625rem;
            cursor: pointer;
        }

        .accordion-body {
            display: none;
            background-color: #fff;
            padding: 0.625rem;
        }

        .accordion-content {
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            align-items:center;
            margin:auto 0;
        }
        .content {
            display: flex;
            justify-content:start;
            align-items: center;
            gap:0.625rem;
            margin-bottom: 0.3125rem;
        }

        .accordion-title {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .active .container {
            border-color: #3a9efd; /* Blue border when active */
        }
       .accordion-button{
        color:#DCDCDC;
        border: 0.0625rem solid #DCDCDC;
       }

        .active .accordion-button {
            color: #3a9efd;
            border: 0.0625rem solid #3a9efd;
         /* Blue arrow when active */
        }
        .approveBtn{
            background:green;
            border:none;
            padding:5px 10px;
            color:white;
            font-weight:500;
            border-radius:5px;
        }
        .rejectBtn{
            background:#fff;
            border:1px solid #007BFF;
            padding:5px 10px;
            color:#007BFF;
            font-weight:500;
            border-radius:5px;
        }

</style>
<body>
<div class="col" style="border-radius: 5px; " id="leavePending" style="width: 70%; background: #fff; padding: 0; ">
    @if($this->leaveRequests->isNotEmpty())
        @foreach($this->leaveRequests as $leaveRequest)
            <div class="container mt-4">
                <div class="accordion">
                    <div class="accordion-heading" onclick="toggleAccordion(this)">
                        <div class="accordion-title">
                            <!-- Display leave details here based on $leaveRequest -->
                            
                            <div class="accordion-content">
                             <div class="accordion-profile" style="display:flex; gap:10px; margin:auto 0;">
                            @if($this->employeeDetails->image)
                                    <img src="{{ $this->employeeDetails->image }}" alt="User Profile Image" style="width: 40px; height: 40px; border-radius: 50%;">
                                @else
                                    <img src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars.png" alt="Default User Image" style="width: 40px; height: 40px; border-radius: 50%;">
                                @endif
                                <div class="center">
                                    <p style=" font-size:0.875rem; font-weight:500;">{{$this->employeeDetails->fullname  }}</p>
                                    <p style="margin-top:-15px; color:#778899; font-size:0.69rem;">#{{ $this->employeeDetails->emp_id }}</p>
                                </div>
                            </div>
                            </div>
                         
                            <div class="accordion-content">
                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Leave Type</span>
                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->leave_type}}</span>
                            </div>
                            <div class="accordion-content">
                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Period</span>
                                <span style="color: #333; font-size: 0.9rem; font-weight: 500;">{{ $leaveRequest->created_at->format('d M, Y') }}</span>
                                <span style="color: #36454F; font-size: 0.675rem; font-weight: 400;">
                                    @php
                                        $numberOfDays = $this->calculateNumberOfDays($leaveRequest->from_date, $leaveRequest->from_session, $leaveRequest->to_date, $leaveRequest->to_session);
                                    @endphp

                                    @if($numberOfDays == 1)
                                        <p style=" color:#778899; font-size:0.69rem;">Fullday</p>
                                    @elseif($numberOfDays == 0.5)
                                        <p style=" color:#778899; font-size:0.69rem;">Halfday</p>
                                    @else
                                        <span style="color: #36454F; font-size: 0.675rem; font-weight: 400;">{{ $numberOfDays }} days</span>
                                    @endif
                                </span>
                            </div>


                            <!-- Add other details based on your leave request structure -->

                            <div class="accordion-button" style="margin-top: 0.625rem; font-size: 1rem;  height: 0.625rem; width: 0.625rem; border-radius: 50%; background: #fff;  display: flex; justify-content: center; align-items: center; ">
                                <!-- Down arrow character -->
                            </div>
                        </div>
                    </div>
                    <div class="accordion-body">
                        <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>
                        <div class="content">
                                <span style="color: #333; font-size: 0.875rem; font-weight: 500;">No.of days:</span>
                                <span style="color: #778899; font-size: 1rem; font-weight: 400;">
                                    {{ $this->calculateNumberOfDays($leaveRequest->from_date, $leaveRequest->from_session, $leaveRequest->to_date, $leaveRequest->to_session) }}
                                </span>
                            </div>
                        <div class="content">
                            <span style="color: #333; font-size: 0.875rem; font-weight: 500;">Reason:</span>
                            <span style="font-size: 0.8125rem; color:#778899">{{ $leaveRequest->reason }}</span>
                        </div>
                         <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>
                        <div style="display:flex; flex-direction:row; justify-content:space-between;">
                            <div class="content">
                                <span style="color: #778899; font-size: 0.875rem; font-weight: 400;">Applied on:</span>
                                <span style="color: #333; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->created_at->format('d M, Y') }}</span>
                            </div>
                            <div class="content">
                                <a href="" style="color:#007BFF">View Details</a>
                                <button class="btn btn-primary" wire:click="approveLeave({{ $leaveRequest->id }})">Approve</button>
                                <button class="rejectBtn"wire:click="rejectLeave({{ $leaveRequest->id }})">Reject</button>
                                <button class="rejectBtn"wire:click="rejectLeave({{ $leaveRequest->id }})">Forward</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="leave-pending" style="margin-top:30px; background:#fff; margin-left:120px; display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">
            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">
            <p style="color:#969ea9; font-size:13px; font-weight:400; ">There are no pending records of any leave transaction to Review</p>
        </div>
    @endif
</div>
<script>
      function toggleAccordion(element) {
            const accordionBody = element.nextElementSibling;
            if (accordionBody.style.display === 'block') {
                accordionBody.style.display = 'none';
                element.classList.remove('active'); // Remove active class
            } else {
                accordionBody.style.display = 'block';
                element.classList.add('active'); // Add active class
            }
        }
</script>
</body>
</html>
</div>