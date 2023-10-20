
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
.


{{-- leave Tab --}}

<div class="col" style="border-radius: 5px;display: none;" id="leaveApply"  style="display: none; width: 100%; background: #fff; padding: 0; margin-top: -150px;">
   <!-- leave apply start -->
   <div class="container " style="border: 1px solid #DCDCDC; border-radius: 10px; box-shadow: 1px 2px 2px 2px #F5F5F5; width: 100%; margin: 0 auto; background: #FFFFFF;">
        <h5 style="margin-top: 25px;">Applying for Leave</h5>
                  <form style="margin-top: 30px;">
            <div class="form-group" style="margin-top: 10px;">
                <label for="leaveType" style="color: #778899; font-size: 14px; font-weight: 500;">Leave type</label>
                <select class="form-control" id="leaveType" name="leaveType" style="width: 50%; font-weight: 400; color: #778899;">
                    <option value="default">Select Type</option>
                    <option value="casual">Casual Leave</option>
                    <option value="lossOfPay">Loss of Pay</option>
                    <option value="maternity">Maternity Leaves</option>
                </select>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fromDate" style="color: #778899; font-size: 14px; font-weight: 500;">From date</label>
                <input type="date" class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
            </div>
            <div class="form-group col-md-6">
                <label for="session" style="color: #778899; font-size: 14px; font-weight: 500;">Sessions</label>
                <select class="form-control" id="session" name="session" style="font-weight: 500; ">
                    <option value="default">Select session</option>
                    <option value="Session 1">Session 1</option>
                    <option value="Session 2">Session 2</option>
                </select>
               
            </div>
        </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="toDate" style="color: #778899; font-size: 14px; font-weight: 500;">To date</label>
                    <input type="date" class="form-control" id="toDate" name="toDate" style="color: #778899;">
                </div>
                <div class="form-group col-md-6">
                    <label for="session" style="color: #778899; font-size: 14px; font-weight: 500;">Sessions</label>
                    <select class="form-control" id="session" name="session" style="font-weight: 500;">
                        <option value="default">Select session</option>
                        <option value="Session 1">Session 1</option>
                        <option value="Session 2">Session 2</option>
                    </select>
                </div>
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <div style="display:flex; flex-direction:row;">
                <label for="applyingToText" id="applyingToText" name="applyingTo" style="color: #778899; font-size: 14px; font-weight: 500; cursor: pointer;" onclick="toggleSearchBar()">
                    Applying To
                </label>
                <div class="custom-dropdown-arrow" style="color: #778899; font-size:12px; margin-top:3px; margin-right:15px;cursor:pointer;" onclick="toggleSearchBar()">&#9660;</div>
                </div>
                <input type="text" class="form-control" id="applyingToInput" name="applyingTo" style="display: none;">
                <ul class="custom-dropdown-search" id="searchBar" style="width: 20%; padding: 10px; background-color: #fff; border: 1px solid #ccc; display: none;">
                    <li>
                        <input type="text" class="custom-dropdown-search-input" placeholder="Search..." style="border: 1px solid #ccc; transition: border-color 0.3s; color: #778899; padding-left: 30px;">
                        <i class="fas fa-search" style="position: absolute; top: 50%; left: 20px; transform: translateY(-50%); color: #778899;"></i>
                        <i class="fas fa-times" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%); color: #778899; cursor: pointer;" onclick="toggleSearchBar()"></i>
                    </li>
                </ul>
            </div>
            <div class="form-group">
                <label for="applyingToText" id="applyingToText" name="applyingTo" style="color: #778899; font-size: 14px; font-weight: 500;">
                    CC to
                </label>
                <div class="control-wrapper" style="display: flex; flex-direction: row; gap: 10px;">
                    <a href="javascript:void(0);" class="text-3 text-secondary control" aria-haspopup="true" onclick="toggleCCField()" style="text-decoration: none;">
                    <div class="icon-container" style="height: 2rem; width: 2rem; background: #fff; border: 1px solid #778899; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                        <i class="fas fa-plus"></i>
                    </div>
                    </a>
                    <span class="text-5 text-secondary placeholder" id="ccPlaceholder" style="margin-top: 5px;background:transparent; color:#ccc;">Add</span>
                    <div id="addedEmails" class="added-emails" style="display: flex; flex-wrap: wrap; gap: 5px;"></div>
                    <div id="ccField" style="display: none;">
                    <input type="text" id="emailInput" placeholder="Enter email" style="color: #778899; border:1px solid #778899; border-radius:5px; outline:none;">
                    <button type="button" class="btn btn-primary" style="padding:3px; margin-bottom:3px;font-size:14px;"onclick="addEmail()">Add</button>
                </div>
                </div>
               
            </div>

            <div class="form-group">
                <label for="contactDetails" style="color: #778899; font-size: 14px; font-weight: 500;">Contact Details</label>
                <input type="text" class="form-control" id="contactDetails" name="contactDetails" style="color: #778899;width:50%;">
            </div>
            <div class="form-group">
                <label for="reason" style="color: #778899; font-size: 14px; font-weight: 500;">Reason for Leave</label>
                <textarea class="form-control" id="reason" name="reason" placeholder="Enter Reason" rows="4" ></textarea>
            </div>
            <div class="form-group">
                <div class="file-input" style="display: flex; flex-direction:row; align-items: center;">
                    <label for="file" class="file-label" style="display: inline-flex; align-items: center; padding: 5px 10px; border-radius: 5px; cursor: pointer; font-weight: 500; font-size: 14px;">
                        <i class="fas fa-link" style="margin-right: 5px;"></i> Attach File
                    </label>
                    <input type="file" id="file" name="attachment" accept=".pdf, .xls, .xlsx, .doc, .docx, .txt, .ppt, .pptx, .gif, .jpg, .jpeg, .png" class="file-input-field" style="display: none;">
                    <p style="color: #778899; font-size:12px; margin-top:10px; margin-left:50px;">File Types: pdf , xls , xlsx , doc , docx , txt , ppt , pptx , gif , jpg , jpeg , png</p>
                </div>
            </div>
            <div class="buttons1" style="display: flex; justify-content: center; gap: 10px; margin-top:20px; margin-bottom:10px;">
                <button type="submit" class="btn btn-primary" style="font-weight: 500;">Submit</button>
                <button type="button" class="btn btn-secondary" style="background: #fff; font-weight: 500; color: #1E90FF; border: 1px solid #1E90FF;">Cancel</button>
            </div>
        </form>
        
    </div>


   <!-- leave apply end -->
</div>

{{-- pending --}}
<div class="col" style="border-radius: 5px; display: none;" id="leavePending" style="display: none; width: 70%; background: #fff; padding: 0; ">
    @if($this->leaveRequests->isNotEmpty())
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
                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->from_date }}</span>
                                {{ $leaveRequest->from_session }} to
                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->to_date }}</span>
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
     <!-- leave history -->
     <div class="container mt-4">
        <div class="accordion">
            <div class="accordion-heading" onclick="toggleAccordion(this)">
                <div class="accordion-title">
                    <div class="accordion-content">
                        <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Category</span>
                        <span style="color: #36454F; font-size: 1rem; font-weight: 500;">Leave</span>
                    </div>
                    <div class="accordion-content">
                        <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Leave Type</span>
                        <span style="color: #36454F; font-size: 1rem; font-weight: 500;">Casual Leave Probation</span>
                    </div>
                    <div class="accordion-content">
                        <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">No. of Days</span>
                        <span style="color: #36454F; font-size: 1rem; font-weight: 500;">1</span>
                    </div>
                    
                    <div class="accordion-content">
                        <span style="margin-top:0.625rem;   font-size: 1rem; font-weight: 400;color:#32CD32;">APPROVED</span>
                    </div>
                    <div class="accordion-button" style="margin-top: 0.625rem; font-size: 1rem;  height: 0.625rem; width: 0.625rem; border-radius: 50%; background: #fff;  display: flex; justify-content: center; align-items: center; ">
                   <!-- Down arrow character -->
                    </div>

                </div>
                
            </div>
            <div class="accordion-body">
                <hr>
                <div class="content">
                    <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Duration:</span>
                    <span style=" font-size: 0.8125rem; "><span style=" font-size: 0.8125rem; font-weight: 500;">22 Aug 2023</span> (Session 1) to <span style=" font-size: 0.8125rem; font-weight: 500;">22 Aug 2023</span> (Session 2)</span>
                </div>
                <div class="content">
                    <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Reason:</span>
                    <span style=" font-size: 0.8125rem; ">
Hi Sir, I would like to inform you that I require a 2 days of absence on 31/08/2023 to 01/09/2023. I need to go my home...</span>
                </div>
                <hr>
                <div style="display:flex; flex-direction:row; justify-content:space-between;">
                <div class="content">
                    <span style="color: #778899; font-size: 0.875rem; font-weight: 400;">Applied on:</span>
                    <span style="color: #333; font-size: 1rem; font-weight: 500;">22 Aug, 2023</span>
                </div>
                <div class="content">
                   <a href="/view-details"> <span style="color: #3a9efd; font-size: 0.875rem; font-weight: 500;">View Details</span></a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- leave history accordian end -->
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

        // leave apply form script
        function toggleSearchBar() {
            const searchBar = document.getElementById('searchBar');
            const applyingToText = document.getElementById('applyingToText');
            const applyingToInput = document.getElementById('applyingToInput');

            if (searchBar.style.display === 'none' || searchBar.style.display === '') {
                // Open the search bar
                searchBar.style.display = 'block';
                applyingToText.style.display = 'block';
                applyingToInput.style.display = 'none';
            } else {
                // Close the search bar
                searchBar.style.display = 'none';
                applyingToText.style.display = 'block';
                applyingToInput.style.display = 'none';
            }
        }
          
        function toggleCCField() {
    const ccField = document.getElementById('ccField');
    const ccPlaceholder = document.getElementById('ccPlaceholder');

    if (ccField.style.display === 'none' || ccField.style.display === '') {
        ccField.style.display = 'block';
        ccPlaceholder.style.display = 'none';
    } else {
        ccField.style.display = 'none';
        ccPlaceholder.style.display = 'inline-block';
    }
}

function addEmail() {
    const emailInput = document.getElementById('emailInput');
    const addedEmails = document.getElementById('addedEmails');

    // Get the entered email address
    const email = emailInput.value;

    if (email.trim() !== '') {
        // Create a new element to display the added email address
        const emailElement = document.createElement('div');
        emailElement.textContent = email.substring(0, 2); // Display only the first two letters
        emailElement.className = 'added-email';
        emailElement.style.border = '2px solid #778899'; // You can style the circle here
        emailElement.style.color = '#778899'; // You can set text color
        emailElement.style.borderRadius = '70%';
         // Make it circular

        // Append the email element to the addedEmails container
        addedEmails.appendChild(emailElement);

        // Clear the input field
        emailInput.value = '';
        ccField.style.display = 'none'; 
    }
}
// function toggleDetails(tabId) {
//             const tabs = ['leaveApply', 'restricted-content', 'leaveCancel-content', 'compOff-content'];

//             tabs.forEach(tab => {
//                 const tabElement = document.getElementById(tab);
//                 if (tab === tabId) {
//                     tabElement.style.display = 'block';
//                 } else {
//                     tabElement.style.display = 'none';
//                 }
//             });
//         }
        //end of  leave apply form script

        // leave history script
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
@livewireScripts