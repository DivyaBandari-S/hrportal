<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Grey HR Portal</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="{{ mix('js/app.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="path/to/your.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/app.js') }}" defer data-turbolinks-track="reload"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>

    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
    <!-- Add these links to your HTML -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="{{ asset('livewire/livewire.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" data-turbolinks-track="reload">

    <livewire:styles />

</head>

@guest
<livewire:emplogin />
@else

<body>
    <div>

    </div>

    <div>

        <style>
            .profile-container {

                display: flex;

                align-items: center;

                padding: 10px;

                background-color: rgb(2, 17, 79);

                box-shadow: 2px 4px 4px 4px rgba(0, 0, 0, 0.1);

                border-radius: 5px;

            }



            .profile-image {

                height: 32px;

                width: 32px;

                background-color: green;

                border-radius: 50%;

                margin-right: 10px;

            }



            .username {

                font-size: 16px;

                margin: 0;

            }



            .nav-item {

                font-size: 14px;

                margin-bottom: 5px;

                border-radius: 5px;

            }



            .nav-item-1 {

                font-size: 12px;

            }



            .fas {

                width: 30px;

                color: black;

            }



            .emp-name {

                margin-right: 20px;

            }



            .profile-image {

                margin-right: 15px;

            }


            .nav-link {

                color: black;

            }

            #leave-options a {
                text-decoration: none;
                color: #778899;

            }

            #leave-options a:hover {
                text-decoration: none;
                color: #3a9efd;

            }

            #salary-options a {
                text-decoration: none;
                color: #778899;

            }

            #salary-options a:hover {
                text-decoration: none;
                color: #3a9efd;

            }

        
        </style>



        <div class="row" style="height: auto;width:auto;background-color: #f0f0f0;">

            <div class="card" style="border-radius:0px;height: auto; width: auto; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

                <div class="card-body" style="height: auto;width:auto;margin-top:0px">

                    <ul class="nav flex-column">

                        <div style="margin-bottom: 10px;margin-top:0px">

                           @livewire('company-logo')
                        </div>

                        @livewire('profile-card')



                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle1()">

                            <a class="nav-link" href="/">

                                <i class="fas fa-home"></i> Home

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle2()">

                            <a class="nav-link" href="/Feeds">

                                <i class="fas fa-rss"></i> Feeds

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle3()">

                            <a class="nav-link" href="/tasks">


                                    <i class="fas fa-tasks"></i> To do

        </a>

                        </li>
           <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle6()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-clock"></i> Attendance</a>
            </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle5(item)">
                            <a class="nav-link"  onclick="toggleLeaveDropdown()">
                                <i class="fas fa-file-alt" id="leave-icon"></i> Leave <i class="fas fa-caret-down" id="leave-caret"></i>
                            </a>
                            <div id="leave-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle5('apply')">
                                        <a class="nav-link" href="/leave-page" id="itdeclaration" onclick="selectOption(this, 'Leave Apply')">
                                           Leave Apply
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle5('balances')">
                                        <a class="nav-link" href="/leave-balances" id="itstatement" onclick="selectOption(this, 'Leave Balances')">
                                            Leave Balances
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle5('calendar')">
                                        <a class="nav-link" href="  /view-pending-details" id="slip" onclick="selectOption(this, 'Leave Calender')">
                                            Leave Calendar
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle5('holiday')">
                                        <a class="nav-link" href="/holiday-calender" id="slip" onclick="selectOption(this, 'Holiday Calender')">
                                            Holiday Calendar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>





                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle7()">

                            <a class="nav-link" href="/document">

                                <i class="fas fa-folder"></i> Document Center

                            </a>

                        </li>
                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle11(item)">
                            <a class="nav-link" href="#" onclick="toggleSalaryDropdown()">
                                <i class="fas fa-solid fa-money-bill-transfer" id="salary-icon"></i> Salary <i class="fas fa-caret-down" id="salary-caret"></i>
                            </a>
                            <div id="salary-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle11('itdeclaration')">
                                        <a class="nav-link" href="/itdeclaration" id="itdeclaration" onclick="selectOption(this, 'IT Declaration')">
                                            IT Declaration
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle11('itstatement')">
                                        <a class="nav-link" href="/itstatement" id="itstatement" onclick="selectOption(this, 'IT Statement')">
                                            IT Statement
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle11('slip')">
                                        <a class="nav-link" href="/slip" id="slip" onclick="selectOption(this, 'Pay Slip')">
                                            Payslips
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle11('salary-revision')">
                                        <a class="nav-link" href="/salary-revision" id="slip" onclick="selectOption(this, 'Salary Revision')">
                                            Salary Revision
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle8()">

                            <a class="nav-link" href="/PeoplesList">

                                <i class="fas fa-users"></i> People

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle9()">

                            <a class="nav-link" href="/HelpDesk">

                                <i class="fas fa-headset"></i> Helpdesk

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle10()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-user-friends"></i> Workflow Delegates

                            </a>

                        </li>

                    </ul>

                </div>

            </div>

            <div class="col" style="height: 60px; width: auto; background-color:rgb(2, 17, 79)">

                <div class="col" style="display: flex; align-items: center; margin-top:2%;justify-content: start;">

                    <i style="margin-bottom: 5px; color: white" id="pageIcon"></i>

                    <h6 style="color: white; width: 300px; margin-right: 50%;" id="pageTitle">Home</h6>

                    <h6 style="color: grey; margin-right: 20px;margin-top:5px;width:150px">Quick Links</h6>

                    <div class="notification-icon" style="margin-right: 10px;">

                        <i style="color: white;" class="fas fa-bell"></i>

                    </div>

                    <div class="notification-icon">

                        @livewire('log-out')
                    </div>

                </div>

                <div style="margin-top: 3%; margin-left: 1%; height: 490px; overflow-y: auto;overflow-x:auto">

                    {{ $slot }}

                </div>

            </div>

        </div>

        @livewireScripts

        <script>
            if (localStorage.getItem("pageIcon") && localStorage.getItem("pageTitle")) {

                var storedIcon = localStorage.getItem("pageIcon");

                var storedTitle = localStorage.getItem("pageTitle");

                document.getElementById("pageIcon").innerHTML = storedIcon;

                document.getElementById("pageTitle").textContent = storedTitle;

            }



            function changePageTitle() {

                var newIcon = '<i style="color: white;" class="fas fa-address-card"></i>'

                var newTitle = "Employee Information";

                document.getElementById("pageTitle").textContent = newTitle;

                document.getElementById("pageIcon").innerHTML = newIcon;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle1() {

                var newTitle = "Home";

                var newIcon = '<i style="color: white;" class="fas fa-home"></i>'

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle2() {

                var newIcon = '<i style="color: white;" class="fas fa-rss"></i>'

                var newTitle = "Feeds";

                document.getElementById("pageTitle").textContent = newTitle;

                document.getElementById("pageIcon").innerHTML = newIcon;

                localStorage.setItem("pageTitle", newTitle);

                localStorage.setItem("pageIcon", newIcon);

            }



            function changePageTitle3() {

                var newIcon = '<i style="color: white;" class="fas fa-tasks"></i>'

                var newTitle = "To do";

                document.getElementById("pageTitle").textContent = newTitle;

                document.getElementById("pageIcon").innerHTML = newIcon;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle4() {

                var newIcon = '<i style="color: white;" class="fas fa-money-bill-wave"></i>'

                var newTitle = "Salary";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle5() {

                var newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>'

                var newTitle = "Leave";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle6() {

                var newIcon = '<i style="color: white;" class="fas fa-clock"></i>'

                var newTitle = "Attendence";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle7() {

                var newIcon = '<i style="color: white;" class="fas fa-folder"></i>'

                var newTitle = "Document Center";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle8() {

                var newIcon = '<i style="color: white;" class="fas fa-users"></i>'

                var newTitle = "People";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle9() {

                var newIcon = '<i style="color: white;" class="fas fa-headset"></i>'

                var newTitle = "Help Desk";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle10() {

                var newIcon = '<i style="color: white;" class="fas fa-user-friends"></i>'

                var newTitle = "WorkFlow Delegates";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle11() {
                var newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                var newTitle = "Salary";

                if (item === 'itdeclaration') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "IT Declaration";
                } else if (item === 'itstatement') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "IT Statement";
                } else if (item === 'slip') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Pay Slip";
                }

                document.getElementById("pageIcon").innerHTML = newIcon;
                document.getElementById("pageTitle").textContent = newTitle;
                localStorage.setItem("pageIcon", newIcon);
                localStorage.setItem("pageTitle", newTitle);

            }

            function changePageTitle5(item) {
                var newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                var newTitle = "Leave";

                if (item === 'apply') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Leave Apply";
                } else if (item === 'balances') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Leave Balances";
                } else if (item === 'calendar') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Leave Calendar";
                } else if (item === 'holiday') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Holiday Calendar";
                }

                document.getElementById("pageIcon").innerHTML = newIcon;
                document.getElementById("pageTitle").textContent = newTitle;
                localStorage.setItem("pageIcon", newIcon);
                localStorage.setItem("pageTitle", newTitle);
            }

            function toggleLeaveDropdown() {
                const leaveOptions = document.getElementById("leave-options");
                const leaveCaret = document.getElementById("leave-caret");

                if (leaveOptions.style.display === "block") {
                    leaveOptions.style.display = "none";
                    leaveCaret.classList.remove("fa-caret-up");
                    leaveCaret.classList.add("fa-caret-down");
                } else {
                    leaveOptions.style.display = "block";
                    leaveCaret.classList.remove("fa-caret-down");
                    leaveCaret.classList.add("fa-caret-up");
                }
            }
            function toggleSalaryDropdown() {
                const salaryOptions = document.getElementById("salary-options");
                const salaryCaret = document.getElementById("salary-caret");

                if (salaryOptions.style.display === "block") {
                    salaryOptions.style.display = "none";
                    salaryCaret.classList.remove("fa-caret-up");
                    salaryCaret.classList.add("fa-caret-down");
                } else {
                    salaryOptions.style.display = "block";
                    salaryCaret.classList.remove("fa-caret-down");
                    salaryCaret.classList.add("fa-caret-up");
                }
            }







            function selectOption(option, pageTitle) {
                const accordionItems = document.querySelectorAll('.nav-link');
                // Update the pageTitle
                updatePageTitle(pageTitle);
                // Close the dropdown if open
                toggleLeaveDropdown();
                toggleSalaryDropdown();
            }

            function updatePageTitle(newTitle) {
                document.getElementById("pageTitle").textContent = newTitle;
                localStorage.setItem("pageTitle", newTitle);
            }
        </script>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@endguest




</html>
