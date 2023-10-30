<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <livewire:styles />
    <style>
                   /* Your custom styles here */
        .file-label:hover {
            color: #1E90FF;
        }
        .file-label {
            color: #778899;
        }
        .custom-dropdown {
            position: relative;
            display: inline-block;
            width: 200px;
        }
        .custom-dropdown-label {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-dropdown-label-text {
            flex-grow: 1;
            color: #333;
            font-size: 14px;
            font-weight: bold;
        }

        .custom-dropdown-arrow {
            margin-left: 10px;
            transition: transform 0.3s;
        }
        .custom-dropdown.open .custom-dropdown-arrow {
            transform: rotate(180deg);
        }

        .custom-dropdown-search {
            position: absolute;
            top: 45%;
            left: 20;
            background-color: #fff;
            border: 1px solid #ccc;
            border-top: none;
            list-style: none;
            padding: 0;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
        }
        .custom-dropdown .custom-dropdown-search-input {
            width: 100%;
            padding: 5px;
            border: none;
            border-bottom: 1px solid #ccc; /* Add a bottom border to make it look like an input field */
        }
        .custom-dropdown.open .custom-dropdown-search {
            display: block;
        }

        .custom-dropdown-search-input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .added-email {
        border: 2px solid #778899; /* Background color of the elliptical container */
        color: #778899; /* Text color */
        border-radius: 50%; /* Make it circular */
        width: 2rem; /* Adjust the width to make it elliptical */
        height: 2rem; /* Adjust the height to make it elliptical */
        display: flex;
        text-transform: uppercase;
        justify-content: center;
        align-items: center;
        text-align: center;
        overflow: hidden; /* Hide overflow if the email is too long */
        white-space: nowrap; /* Prevent text from wrapping */
    }
    
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
    .links:hover {
    color: blue;
    text-decoration:none;

    }
    .card{
        width: 30%; height:45%;  background:transparent; padding:10px; border:none;
    }
    .active-link {
    font-size: 14px;
    color: blue;
    }
    .wrap-content{
        display:flex; background:transparent; width:100%; flex-direction:row; margin-top:30px;
    }
    .buttons1{
            display: flex; 
            justify-content: center; 
            gap: 10px; 
            margin-top:20px;
            font-weight:500;
            margin-bottom:10px;
        }
        .buttons1 .btn-secondary{
            background: #fff; 
            font-weight: 500; 
            color: #1E90FF;
             border: 1px solid #1E90FF;
        }
        .applyContainer{
            border: 1px solid #DCDCDC;
             border-radius: 10px;
              box-shadow: 1px 2px 2px 2px #F5F5F5; 
              width: 100%; 
              margin: 10px auto; 
              background: #FFFFFF;
              padding:10px 15px;
        }
    .reporting{
        display:flex; 
        flex-direction:row; 
        justify-content: space-between;
        padding: 15px 12px 15px 12px;
        border-radius: 30px; 
        align-items:center;
        width: 180px; 
        height: 55px; 
    }
        .reporting:hover{

       border: 1px solid #ccc;
   }
   .searchContainer{
    background:#fff;
    border:1px solid #ccc;
    border-radius:3px;
    box-shadow: 2px 0 5px 0 #ccc;
    padding:12px 15px;
    width:30%;
    margin-top:15px;
    max-height: 100px; /* Adjust the maximum height as needed */
    overflow-y: auto;

   }
   .ccContainer{
    background:#fff;
    border:1px solid #ccc;
    border-radius:3px;
    box-shadow: 2px 0 5px 0 #ccc;
    padding:12px 15px;
    width:30%;
    margin-top:15px;
    max-height: 100px; /* Adjust the maximum height as needed */
    overflow-y: auto;

   }
    .ellipsis {
        font-size:0.875rem;
        margin-top:15px;
         font-weight:500;
         white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 70px; /* Adjust the value based on your container width */
        display: inline-block;
    }
    .reporting:hover .details {
        display: block;
    }
    .reporting.active {
    background-color: #D9ECFF;
    border:1px solid #ccc; /* Light blue color */
    /* Add any other styles you want for the active state */
}
.icon-container.active{
    background-color: #D9ECFF;
}
.icon-container{
    height: 2rem;
     width: 2rem;
    background: #fff; 
    padding: 7px; 
    border: 1px solid #778899; 
    border-radius: 50%; 
    display: flex; 
    justify-content: center; 
    align-items: center;
}
    .details {
        display: none;
        position: absolute;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 5px 10px;
        z-index: 1;
        width:100px;
        margin-top: -150px; /* Adjust the value to position it above the reporting container */
        margin-left: 50px;
        transform: translateX(-50%);
    }
    .cc-Container{
        height: 2rem;
        width: 2rem;
        background: #fff;
        padding: 7px; 
        border: 1px solid #778899;
        border-radius: 50%; 
        display: flex; 
        justify-content: center; 
        align-items: center;
    }
        @media screen and (max-width: 1060px) {
        /* Apply styles for screens 960px or less in width */
        .wrap-content {
            flex-direction: column;
            align-items: start;
        }
        .wrap-content > .card {
            width: 100%; /* Adjust the width for smaller screens */
        }
        .container  {
            width: 100%; /* Adjust the width for smaller screens */
        }
     }
    </style>
</head>
<body>

<div class="applyContainer">
    <h6 >Applying for Leave</h6>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    <form wire:submit.prevent="leaveApply" enctype="multipart/form-data">
    <div class="form-group" >
                <label for="leaveType"  style="color: #778899; font-size: 14px; font-weight: 500;">Leave type</label>
                <select class="form-control" wire:model="leave_type" id="leaveType" name="leaveType" style="width: 50%; font-weight: 400; color: #778899;" onchange="toggleReporting()">
                    <option value="default">Select Type</option>
                    <option value="Causal Leave Probation">Casual Leave</option>
                    <option value="Loss of Pay">Loss of Pay</option>
                    <option value="Maternity Leave">Maternity Leaves</option>
                    <option value="Sick Leave">Sick Leave</option>
                </select>
                  @error('from_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
             <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fromDate" style="color: #778899; font-size: 14px; font-weight: 500;">From date</label>
                <input type="date" wire:model="from_date" class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
            </div>
            <div class="form-group col-md-6">
                <label for="session" style="color: #778899; font-size: 14px; font-weight: 500;">Sessions</label>
                <select class="form-control" wire:model="from_session" id="session" name="session" style="font-weight: 500; ">
                    <option value="default">Select session</option>
                    <option value="Session 1">Session 1</option>
                    <option value="Session 2">Session 2</option>
                </select>
            </div>
            @error('from_date') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="toDate" style="color: #778899; font-size: 14px; font-weight: 500;">To date</label>
                    <input type="date" wire:model="to_date" class="form-control" id="toDate" name="toDate" style="color: #778899;">
                </div>
                <div class="form-group col-md-6">
                    <label for="session" style="color: #778899; font-size: 14px; font-weight: 500;">Sessions</label>
                    <select class="form-control" wire:model="to_session" id="session" name="session" style="font-weight: 500;">
                        <option value="default">Select session</option>
                        <option value="Session 1">Session 1</option>
                        <option value="Session 2">Session 2</option>
                    </select>
                </div>
                @error('to_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
       
            <div>
                <div class="form-group" style="margin-top: 10px;">
                    <div style="display:flex; flex-direction:row;">
                        <label for="applyingToText" id="applyingToText" name="applyingTo" style="color: #778899; font-size: 14px; font-weight: 500; cursor: pointer;" >
                            Applying To
                        </label>
                    </div>
                </div>

                <div class="reporting" style="display:none;" >
                    <div>
                        <img src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars.png" alt="Default User Image" style="width: 40px; height: 40px; border-radius: 50%;">
                    </div>
                    <div class="center"  >
                        <p id="reportToText" class="ellipsis" >{{$reportTo}}</p>
                        <p style="margin-top:-20px; color:#778899; font-size:0.69rem;" id="managerIdText"><span class="remaining" >#{{$managerId}}</span></p>
                    </div>
                    <div class="downArrow" onclick="toggleSearchContainer()">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                       <!-- Details to show on hover -->
                   
                </div>
                <div class="searchContainer" style="display:none;">
                    <!-- Content for the search container -->
                    <div class="row" style="padding: 0 15px; margin-bottom: 10px;">
                        <div class="col" style="margin: 0px; padding: 0px">
                            <div class="input-group">
                                <input wire:model="searchTerm" style="font-size: 10px; border-radius: 5px 0 0 5px; cursor: pointer; width:50%;" type="text" class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button style="height: 29px; border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none; align-items: center; display: flex;" class="btn" type="button" wire:click="searchOnClick">
                                        <i style="margin-right: 5px;" class="fa fa-search"></i> <!-- Adjust margin-right as needed -->
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @foreach($employeeDetails as $employee)
                        <div style="display:flex; gap:10px;" onclick="updateApplyingTo('{{ $employee['report_to'] }}', '{{ $employee['manager_id'] }}')">
                              <input type="checkbox" wire:model="selectedManager" value="{{ $employee['manager_id'] }}">
                               <img src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars.png" alt="Default User Image" style="width: 40px; height: 40px; border-radius: 50%;">
                            <div class="center">
                                <p style=" font-size:0.875rem; font-weight:500;"value="{{ $employee['report_to'] }}">{{ $employee['report_to'] }}</p>
                                <p style="margin-top:-15px; color:#778899; font-size:0.69rem;" value="{{ $employee['manager_id'] }}">#{{ $employee['manager_id'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                @error('applying_to') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        <div class="form-group">
            <label for="ccToText" wire:model="from_date" id="applyingToText" name="applyingTo" style="color: #778899; font-size: 14px; font-weight: 500;">
                CC to
            </label>
            <div class="control-wrapper" style="display: flex; flex-direction: row; gap: 10px;">
                <a href="javascript:void(0);" class="text-3 text-secondary control" aria-haspopup="true" onclick="toggleCCField()" style="text-decoration: none;">
                    <div class="icon-container" >
                        <i class="fas fa-plus" style="color: #778899;"></i>
                    </div>
                </a>
                <span class="text-2 text-secondary placeholder" id="ccPlaceholder" style="margin-top: 5px; background: transparent; color: #ccc;">Add</span>   
    
               <div id="addedEmails" style="display: flex; gap: 10px; "></div>
            
            </div>
            <div class="ccContainer" style="display:none;">
                    <!-- Content for the search container -->
                    <div class="row" style="padding: 0 15px; margin-bottom: 10px;">
                        <div class="col" style="margin: 0px; padding: 0px">
                            <div class="input-group">
                                <input wire:model="searchTerm" style="font-size: 10px; border-radius: 5px 0 0 5px; cursor: pointer; width:50%;" type="text" class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button style="height: 29px; border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none; align-items: center; display: flex;" class="btn" type="button" wire:click="searchOnClick">
                                        <i style="margin-right: 5px;" class="fa fa-search"></i> <!-- Adjust margin-right as needed -->
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @foreach($ccRecipients as $employee)
                        <div style="display:flex; gap:10px;"onclick="addEmail('{{ $employee['full_name'] }}')">
                        <input type="checkbox" wire:model="selectedPeople" value="{{ $employee['emp_id'] }}">
                            <img src="{{ $employee['image'] ? $employee['image'] : 'https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars.png' }}" alt="User Image" style="width: 40px; height: 40px; border-radius: 50%;">
                            <div class="center">
                                <p style="font-size: 0.875rem; font-weight: 500;">{{ $employee['full_name'] }}</p>
                                <p style="margin-top: -15px; color: #778899; font-size: 0.69rem;">#{{ $employee['emp_id'] }}</p>
                            </div>
                       
                        </div>
                    @endforeach
                </div>
                @error('cc_to') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
            <div class="form-group">
                <label for="contactDetails" style="color: #778899; font-size: 14px; font-weight: 500;">Contact Details</label>
                <input type="text" wire:model="contact_details" class="form-control" id="contactDetails" name="contactDetails" style="color: #778899;width:50%;">
                @error('contact_details') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="reason" style="color: #778899; font-size: 14px; font-weight: 500;">Reason for Leave</label>
                <textarea class="form-control" wire:model="reason" id="reason" name="reason" placeholder="Enter Reason" rows="4" ></textarea>
                @error('reason') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
            <input type="file" wire:model="files" wire:loading.attr="disabled" multiple />
                 @error('file_paths') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        
            <div class="buttons1">
              <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" >Cancel</button>
            </div>
    </form>
</div>
<script>
       function toggleReporting() {
        const leaveType = document.getElementById('leaveType');
        const reportingDiv = document.querySelector('.reporting');
        const applyingToTextDiv = document.getElementById('applyingToText');

        // Show or hide the reporting div based on the selected leave type
        if (leaveType.value !== 'default') {
            reportingDiv.style.display = 'flex';
            applyingToTextDiv.style.display = 'none';
        } else {
            reportingDiv.style.display = 'none';
            applyingToTextDiv.style.display = 'flex';
        }
    }
    function toggleSearchContainer() {
        const searchContainer = document.querySelector('.searchContainer');
        const reportingContainer = document.querySelector('.reporting');
        // Toggle the display of the search container
        searchContainer.style.display = searchContainer.style.display === 'none' ? 'block' : 'none';
        if (searchContainer.style.display === 'block') {
        reportingContainer.classList.add('active');
    } else {
        reportingContainer.classList.remove('active');
    }
    }
    function toggleCCField() {
        const ccContainer = document.querySelector('.ccContainer');
        const iconContainer = document.querySelector('.icon-container');

        // Toggle the display of the search container
        ccContainer.style.display = ccContainer.style.display === 'none' ? 'block' : 'none';
        if (ccContainer.style.display === 'block') {
            iconContainer.classList.add('active');
    } else {
        iconContainer.classList.remove('active');
    }
    }
    function addEmail(fullName) {
    const addedEmails = document.getElementById('addedEmails');
    const addSpan = document.getElementById('ccPlaceholder');

    // Split the full name into first and last names
    const names = fullName.split(' ');

    // Get the first letter of the first name
    const firstNameAbbreviation = names.length > 0 ? names[0].charAt(0) : '';

    // Get the first letter of the last name
    const lastNameAbbreviation = names.length > 1 ? names[names.length - 1].charAt(0) : '';

    // Combine the first letters of both names to create the email abbreviation
    const emailAbbreviation = firstNameAbbreviation + lastNameAbbreviation;

    // Check if the email abbreviation is already added
    if (isEmailAlreadyAdded(emailAbbreviation)) {
        return; // Do nothing if the email is already added
    }

    // Create a new element to display the added email abbreviation
    const emailElement = document.createElement('div');
    emailElement.textContent = emailAbbreviation;
    emailElement.className = 'added-email';
    emailElement.style.border = '2px solid #778899';
    emailElement.style.color = '#778899';
    emailElement.style.borderRadius = '50%';

    // Add hover effect
    emailElement.addEventListener('mouseover', function() {
        emailElement.style.cursor = 'pointer';
        emailElement.innerHTML = '&#9587;'; // Change the color to black
    });

    emailElement.addEventListener('mouseout', function() {
        emailElement.innerHTML = emailAbbreviation; // Restore the email abbreviation on mouseout
    });

    // Remove on click
    emailElement.addEventListener('click', function() {
        emailElement.remove();
        removeAddedEmail(emailAbbreviation); // Remove from the list of added emails
        if (addedEmails.children.length === 0) {
            addSpan.style.display = 'block';
        }
    });

    // Append the email element to the addedEmails container
    addedEmails.appendChild(emailElement);
    addSpan.style.display = 'none';
    // Add the email to the list of added emails
    addedEmailList.push(emailAbbreviation);
}

// Array to keep track of added emails
const addedEmailList = [];

// Function to check if an email is already added
function isEmailAlreadyAdded(email) {
    return addedEmailList.includes(email);
}

// Function to remove an email from the list of added emails
function removeAddedEmail(email) {
    const index = addedEmailList.indexOf(email);
    if (index !== -1) {
        addedEmailList.splice(index, 1);
    }
}

    function updateApplyingTo(reportTo, managerId) {
        // Update the values in the reporting container
        document.getElementById('reportToText').innerText = reportTo;
        document.getElementById('managerIdText').innerText = '#' + managerId;

        // Optionally, you can also hide the search container here
        toggleSearchContainer();
    }

function toggleDetails(tabId) {
            const tabs = ['leaveApply', 'restricted-content', 'leaveCancel-content', 'compOff-content'];

            tabs.forEach(tab => {
                const tabElement = document.getElementById(tab);
                if (tab === tabId) {
                    tabElement.style.display = 'block';
                } else {
                    tabElement.style.display = 'none';
                }
            });
        }

    </script>
@livewireScripts
</body>
</html>
</div>