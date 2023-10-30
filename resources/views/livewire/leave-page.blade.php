<style>

 

.links {

 

    font-size: 13px;

     line-height: 2;

    font-family: 'Open Sans', sans-serif;

 

    text-decoration: none;

 

    cursor: pointer;

    font-weight:600;

    color: #778899;

 

    transition: color 0.3s;

 

}

.buttons {

    display: flex;

    margin:0 auto;

    justify-content: center;

    align-items: center;

    max-width: 400px;

    width:40%;

    border:1px solid #ccc;

    border-radius:5px;

 

}

 

.button1 {

    background-color: transparent;

    border-left: none;

    border-top:none;

    border-bottom:none;

    border-right:1px solid #ccc;

    width: 150px;

    color: #778899;

    flex-grow: 1;

    padding: 5px;

    font-weight:500;

    cursor: pointer;

    transition: background-color 0.3s, color 0.3s;

}

.button2 {

    background-color: transparent;

    border-left: none;

    border-top:none;

    border-bottom:none;

    border-right:1px solid #ccc;

    width: 150px;

    flex-grow: 1;

    color: #778899;

    font-weight:500;

    padding: 5px;

    cursor: pointer;

    transition: background-color 0.3s, color 0.3s;

}

.button3 {

    background-color: transparent;

    border-left: none;

    border-top:none;

    border-bottom:none;

    border-right:none;

    width: 150px;

    flex-grow: 1;

    color: #778899;

    font-weight:500;

    padding: 5px;

    cursor: pointer;

    transition: background-color 0.3s, color 0.3s;

}

 

 

.button1:hover {

    color: #007BFF;

    border: 1px solid #007BFF;

}

.button2:hover {

    color: #007BFF;

    border: 1px solid #007BFF;

}

.button3:hover {

    color: #007BFF;

    border: 1px solid #007BFF;

}

#apply-button.clicked {

    background-color: #007BFF;

    color: #fff;

    border:none;

}

 

#pending-button.clicked,

#history-button.clicked {

    background-color: #007BFF;

    color: #fff;

    border:none;

}

.card{

        width: 25%;

        height:45%;  background:transparent;

        padding:10px;

        border:none;

    }

.links:hover {

    color: blue;

    text-decoration:none;

 

}

.active-link {

    font-size: 14px;

    color: blue;

}

/* leave history styles */

.accordion {

            border: 0.0625rem solid #ccc;

            margin-bottom: 0.625rem;

            width:90%;

            margin:0 auto;

        }

.accordion:hover{
    border:1px solid #3a9efd;
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

            justify-content: space-between;

            align-items: center;

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

/* end of leave history styles */

/* Media query for smaller screens */

@media screen and (max-width: 760px) {

    .buttons {

        flex-direction: column; /* Stack buttons vertically on smaller screens */

        width: 50%; /* Adjust the width to your preference */

    }

 

    .button1, .button2 {

        width: 100%; /* Make buttons full width on smaller screens */

        border-bottom:1px solid #ccc;/* Add some spacing between buttons */

    }

    .button3 {

        width: 100%; /* Make buttons full width on smaller screens */

   

    }

}

 

 

</style>

<div class="leave-page" style=" width:100%; display:flex;">

 

<div class="main-layout" style=" width:100%;  ">

<div class="buttons">

    <button class="button1" id="apply-button" onclick="toggleDetails('leaveApply')">Apply</button>

    <button class="button2" id="pending-button" id="pendingLink"onclick="toggleDetails('leavePending')">Pending</button>

    <button class="button3" id="history-button" onclick="toggleDetails('leaveHistory')">History</button>

</div>

 

 

        <!-- Content for "Restricted Holiday" -->

        <div class="col" id="leave" style="border-radius: 5px; display: none; width: 65%; background: #fff; padding: 10px; margin-left: 20px;">

            <div>helloo</div>


        </div>


        <!-- Content for "Leave Cancel" -->

        <div class="col" id="leaveCancel-content" style="border-radius: 5px; display: none; width: 65%; background: #fff; padding: 10px; margin-left: 20px;">

            Leave Cancel Content

        </div>

 

        <!-- Content for "Comp Off Grant" -->

        <div class="col" id="compOff-content" style="border-radius: 5px; display: none; width: 65%; background: #fff; padding: 10px; margin-left: 20px;">

            Comp Off Grant Content

        </div>

 

 

        {{-- leave Tab --}}

    <div class="col" style="border-radius: 5px; display: none;" id="leaveApply" style="display: none; width: 100%; background: #fff; padding: 0; margin-top: -150px;">

        <div class="apply" style="display:flex; flex-direction:row;  ">

            <div class="card col-md-3" id="cardElement" >

                <div>

                    <a onclick="toggleDetails('leave')" id="leave-link" class="links">Leave</a>

                </div>

                <div>

                    <a onclick="toggleDetails('restricted-content')" class="links">Restricted Holiday</a>

                </div>

                <div>

                    <a onclick="toggleDetails('leaveCancel-content')" class="links">Leave Cancel</a>

                </div>

                <div>

                    <a onclick="toggleDetails('compOff-content')" class="links">Comp Off Grant</a>

                </div>

            </div>

            <div class="col-md-9">

                @livewire('leave-apply')

            </div>

        </div>

    </div>

 

 

{{-- pending --}}

<div class="col" style="border-radius: 5px; display: none;" id="leavePending" style="display: none; width: 70%; background: #fff; padding: 0; ">

    @if($this->leavePending->isNotEmpty())

        @foreach($this->leavePending as $leaveRequest)

            <div class="container mt-4">

                <div class="accordion">

                    <div class="accordion-heading" onclick="toggleAccordion(this)">

                        <div class="accordion-title">

                            <!-- Display leave details here based on $leaveRequest -->

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Category</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">Leave</span>

                            </div>

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Leave Type</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->leave_type}}</span>

                            </div>

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">No. of Days</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">

                                    {{ $this->calculateNumberOfDays($leaveRequest->from_date, $leaveRequest->from_session, $leaveRequest->to_date, $leaveRequest->to_session) }}

                                </span>

                            </div>

 

                            <!-- Add other details based on your leave request structure -->

 

                            <div class="accordion-content">

                                <span style="margin-top:0.625rem; font-size: 1rem; font-weight: 400; color:#cf9b17;">{{ strtoupper($leaveRequest->status) }}</span>

                            </div>

                            <div class="accordion-button" style="margin-top: 0.625rem; font-size: 1rem;  height: 0.625rem; width: 0.625rem; border-radius: 50%; background: #fff;  display: flex; justify-content: center; align-items: center; ">

                                <!-- Down arrow character -->

                            </div>

                        </div>

                    </div>

                    <div class="accordion-body">

                        <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                        <div class="content">

                            <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Duration:</span>

                            <span style="font-size: 0.8125rem;">

                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->formatted_from_date }} </span>

                               ( {{ $leaveRequest->from_session }} )to

                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->formatted_to_date }}</span>

                               ( {{ $leaveRequest->to_session }} )

                            </span>

                        </div>

                        <div class="content">

                            <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Reason:</span>

                            <span style="font-size: 0.8125rem;">{{ $leaveRequest->reason }}</span>

                        </div>

                         <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                        <div style="display:flex; flex-direction:row; justify-content:space-between;">

                            <div class="content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 400;">Applied on:</span>

                                <span style="color: #333; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->created_at->format('d M, Y') }}</span>

                            </div>

                            <div class="content">

                                <a href="/view-details">

                                    <span style="color: #3a9efd; font-size: 0.875rem; font-weight: 500;">View Details</span>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        @endforeach

    @else

        <div class="leave-pending" style="margin-top:30px; background:#fff; margin-left:120px; display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

            <p style="color:#969ea9; font-size:13px; font-weight:400; ">There are no pending records of any leave transaction</p>

        </div>

    @endif

</div>

 

 

{{-- history --}}

 

<div class="col" style="border-radius: 5px;display: none;" id="leaveHistory"  style="display: none; width: 65%; background: #fff; padding: 0; margin-left: 150px; margin-top: -150px;">

@if($this->leaveRequests->isNotEmpty())

@foreach($this->leaveRequests->whereIn('status', ['approved', 'rejected']) as $leaveRequest)

<div class="container mt-4">

                <div class="accordion">

                    <div class="accordion-heading" onclick="toggleAccordion(this)">

                        <div class="accordion-title">

                            <!-- Display leave details here based on $leaveRequest -->

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Category</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">Leave</span>

                            </div>

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Leave Type</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->leave_type}}</span>

                            </div>

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">No. of Days</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">

                                    {{ $this->calculateNumberOfDays($leaveRequest->from_date, $leaveRequest->from_session, $leaveRequest->to_date, $leaveRequest->to_session) }}

                                </span>

                            </div>

 

                            <!-- Add other details based on your leave request structure -->

 

                            <div class="accordion-content">

                                @if(strtoupper($leaveRequest->status) == 'APPROVED')

                                    <span style="margin-top:0.625rem; font-size: 1rem; font-weight: 500; color:#32CD32;">{{ strtoupper($leaveRequest->status) }}</span>

                                @elseif(strtoupper($leaveRequest->status) == 'REJECTED')

                                    <span style="margin-top:0.625rem; font-size: 1rem; font-weight: 500; color:#FF0000;">{{ strtoupper($leaveRequest->status) }}</span>

                                @else

                                    <span style="margin-top:0.625rem; font-size: 1rem; font-weight: 500; color:#778899;">{{ strtoupper($leaveRequest->status) }}</span>

                                @endif

                            </div>

                            <div class="accordion-button" style="margin-top: 0.625rem; font-size: 1rem;  height: 0.625rem; width: 0.625rem; border-radius: 50%; background: #fff;  display: flex; justify-content: center; align-items: center; ">

                                <!-- Down arrow character -->

                            </div>

                        </div>

                    </div>

                    <div class="accordion-body">

                        <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                        <div class="content">

                            <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Duration:</span>

                            <span style="font-size: 0.8125rem;">

                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->formatted_from_date }}</span>

                                ({{ $leaveRequest->from_session }} ) to

                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->formatted_to_date }}</span>

                               ( {{ $leaveRequest->to_session }} )

                            </span>

                        </div>

                        <div class="content">

                            <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Reason:</span>

                            <span style="font-size: 0.8125rem;">{{ $leaveRequest->reason }}</span>

                        </div>

                         <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                        <div style="display:flex; flex-direction:row; justify-content:space-between;">

                            <div class="content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 400;">Applied on:</span>

                                <span style="color: #333; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->created_at->format('d M, Y') }}</span>

                            </div>

                            <div class="content">

                            <a href="{{ route('leave-pending', ['leaveRequestId' => $leaveRequest->id]) }}">
                                <span style="color: #3a9efd; font-size: 0.875rem; font-weight: 500;">View Details</span>
                            </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

 

        @endforeach

    @else

        <div class="leave-pending" style="margin-top:30px; background:#fff; margin-left:120px; display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

            <p style="color:#969ea9; font-size:13px; font-weight:400; ">There are no history records of any leave transaction</p>

        </div>

    @endif

</div>

</div>

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

 

function toggleDetails(tabId) {

 console.log('Function is being called with tabId:', tabId);

const tabs = ['leaveApply', 'leavePending', 'leaveHistory','leave', 'restricted-content', 'leaveCancel-content', 'compOff-content'];

 

tabs.forEach(tab => {

 

    if (tab === tabId) {

 

        document.getElementById(tab).style.display = 'block';

 

    } else {

 

        document.getElementById(tab).style.display = 'none';

 

    }

 

});

    }

 

    const applyButton = document.getElementById("apply-button");

    const pendingButton = document.getElementById("pending-button");

    const historyButton = document.getElementById("history-button");

    const leaveLink = document.getElementById("leave-link");

 

    applyButton.addEventListener("click", () => {

        applyButton.classList.add("clicked");

        pendingButton.classList.remove("clicked");

        historyButton.classList.remove("clicked");

        toggleTab('leaveApply'); // Load the Apply Leave section

    });

 

    pendingButton.addEventListener("click", () => {

        applyButton.classList.remove("clicked");

        pendingButton.classList.add("clicked");

        historyButton.classList.remove("clicked");

        toggleTab('leavePending'); // Example: Load a different section

    });

 

    historyButton.addEventListener("click", () => {

        applyButton.classList.remove("clicked");

        pendingButton.classList.remove("clicked");

        historyButton.classList.add("clicked");

        toggleTab('leaveHistory'); // Example: Load a different section

    });

 

    leaveLink.addEventListener("click", () => {

        applyButton.classList.remove("clicked");

        pendingButton.classList.remove("clicked");

        historyButton.classList.remove("clicked");

        leave-link.classList.add("clicked");

        toggleTab('leave'); // Example: Load a different section

    });

 

    //cardlinks hiding

    const cardElement = document.getElementById("cardElement");

 

        function toggleCardVisibility() {

            if (cardElement.style.display === 'none' || cardElement.style.display === '') {

                cardElement.style.display = 'block';

            } else {

                cardElement.style.display = 'none';

            }

        }

 

        // Attach click event listeners to your "Pending" and "History" elements

        const pendingLink = document.getElementById("pendingLink");

        const historyLink = document.getElementById("historyLink");

 

        pendingLink.addEventListener("click", toggleCardVisibility);

        historyLink.addEventListener("click", toggleCardVisibility);

 

       

</script>

@livewireScripts