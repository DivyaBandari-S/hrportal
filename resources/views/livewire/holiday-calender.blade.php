<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Container with 4 Inner Containers</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Include Open Sans font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            .inner-container {
                padding: 10px 10px;
                border: 1px solid #ccc;
                border-radius: 7px;
                background: #fff;
                overflow: hidden;
                color: #778899;
                width:100%;
                height: 220px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                margin-bottom: 10px;
                margin-top: 20px;
                overflow-y: auto;
            }
/* Styling for WebKit (Chrome, Safari) */
.inner-container::-webkit-scrollbar {
    width: 5px; /* Set the width of the scrollbar */
}

.inner-container::-webkit-scrollbar-thumb {
    background-color: #fcfcfc; /* Color of the scrollbar thumb */
    border-radius: 2px; /* Rounded corners of the thumb */
}

.inner-container::-webkit-scrollbar-track {
    background-color: #E0FFFF; /* Color of the scrollbar track */
}

/* Styling for Firefox */
.inner-container {
    scrollbar-width: thin; /* Set the width of the scrollbar */
}

.inner-container::-webkit-scrollbar-thumb {
    background-color: #c8cfd6; /* Color of the scrollbar thumb */
    border-radius: 4px; /* Rounded corners of the thumb */
}

.inner-container::-webkit-scrollbar-track {
    background-color: #f1f1f1; /* Color of the scrollbar track */
}

            .inner-container:hover {
                transform: scale(1.05);
                cursor: pointer;
                background-color: #fff;
            }
            .inner-container h6 {
                font-weight: 600;
                font-size: 0.875rem;
                margin-bottom: 20px;
            }
            .inner-container .fest h5 {
                font-weight: 500;
                font-size: 1.15rem;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .inner-container span {
                font-weight: 400;
            }
            .inner-container .group {
                display: flex;
                flex-direction:column;
                justify-content:space-between;
                 margin: 0 auto;
                /* Center items vertically */
            }
            p {
                font-size: 0.825rem;
            }
            img {
                max-width: 100%;
            }
            .date {
                font-size: 0.9rem; /* Adjust the font size as needed */
            }
            #aloneContainer {
                width: 100%;
            }
            .alone-cont {
                padding: 10px 15px;
                border: 1px solid #ccc;
                border-radius: 7px;
                background: #fff;
                overflow: hidden;
                color: #778899;
                width: 100%;
                display: flex;
                flex-direction: column;
                text-align: center;
                justify-content: center;
                height: 250px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                margin-top: 20px;
            }
            .no-holidays{
                padding: 10px 15px;
                background: #fff;
                overflow: hidden;
                color: #778899;
                width: 100%;
                display: flex;
                flex-direction: column;
                text-align: center;
                justify-content: center; 
                margin-top:50px;
            }
            .alone-cont h6 {
                font-weight: 600;
                font-size: 0.875rem;
            }
            #yearSelect {
                padding: 5px; /* Add padding to the select */
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px; /* Adjust font size as needed */
                background-color: #fff; /* Background color */
                color: #333; /* Text color */
                cursor: pointer; /* Change cursor on hover */
                width: 150px; /* Adjust width as needed */
            }

            /* Style for the select when it's hovered */
            #yearSelect:hover {
                border-color: #007BFF; /* Change border color on hover */
            }

            /* Style for the select when it's focused */
            #yearSelect:focus {
                outline: none; /* Remove the outline when focused (you can customize this) */
                border-color: #007bff; /* Change border color when focused */
                box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Add a box shadow when focused (you can customize this) */
            }
            select .yearSelect {
                padding: 10px;
                font-size: 16px;
                line-height: 2;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            /* Create a grid system for months */
            .month {
                display: flex;
                flex-wrap: wrap;
                width:100%;
                /* background:yellow; */
                gap: 20px; /* Adjust the gap between containers */
            }
            .month-container {
                display:flex;
                flex: 0 0 calc(25% - 20px); /* Each month container takes 25% of the width with a gap of 20px */
                width:50%;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-right">
                <select id="yearSelect">
                    <option class="dropdown" value="2022">2022</option>
                    <option class="dropdown" value="2023" selected>2023</option>
                    <option class="dropdown" value="2024">2024</option>
                </select>
            </div>
        </div>
    </div>
    @php
        // Filter the data based on the selected year
        $filteredData2023 = $calendarData->where('year', 2023)->sortBy('date');
        $currentMonth = '';
    @endphp
    <div class="hol-container" id="calendar2023"> <!-- Start the grid -->
    <div class="month"> <!-- Create a flex container for months -->
            @foreach($filteredData2023->groupBy(function($entry) {
                return date('F Y', strtotime($entry->date));
            }) as $month => $entries)
                <div class="month-container">
                    <div class="inner-container">
                        <h6>{{ $month }}</h6>
                        @if($entries->isEmpty() || $entries->every(function ($entry) {
                                return empty($entry->festivals);
                            }))
                            <div class="no-holidays">
                                <h6>No holidays</h6>
                            </div>
                        @else
                            <div class="group" style="">
                                @foreach($entries as $entry)
                                    <div class="fest" style="display:flex; gap:10px;">
                                        <h5>{{ date('d', strtotime($entry->date)) }}<span><p style="font-size: 0.7rem;">{{ substr($entry->day, 0, 3) }}</p></span></h5>
                                        <p style=" font-size: 0.856rem;">{{ $entry->festivals }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
        <div id="calendar2024" class="hol-container col-lg-12 col-md-12 col-sm-12 text-center" style="display: none;">
            @php
                // Check if the current year is 2024
                $currentYear = date('Y');
                $isCurrentYear2024 = $currentYear == 2024;

                // Filter the data based on the selected year
                $filteredData2024 = $calendarData->where('year', 2024)->sortBy('date');
                $hasHolidays2024 = !$filteredData2024->isEmpty() && !$filteredData2024->every(function ($entry) {
                    return empty($entry->festivals);
                });
            @endphp

            @if($isCurrentYear2024)
                @if($hasHolidays2024)
                    <div class="month"> <!-- Create a flex container for months -->
                        @foreach($filteredData2024->groupBy(function($entry) {
                            return date('F Y', strtotime($entry->date));
                        }) as $month => $entries)
                            <div class="month-container">
                                <div class="inner-container">
                                    <h6>{{ $month }}</h6>
                                    @if($entries->isEmpty() || $entries->every(function ($entry) {
                                            return empty($entry->festivals);
                                        }))
                                        <div class="no-holidays">
                                            <h6>No holidays</h6>
                                        </div>
                                    @else
                                        <div class="group" style="">
                                            @foreach($entries as $entry)
                                                <div class="fest" style="display:flex; gap:10px;">
                                                    <h5>{{ date('d', strtotime($entry->date)) }}<span><p style="font-size: 0.7rem;">{{ substr($entry->day, 0, 3) }}</p></span></h5>
                                                    <p style=" font-size: 0.856rem;">{{ $entry->festivals }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alone-cont">
                        <div>
                            <h6>It’s lonely here!</h6>
                        </div>
                        <p>Your HR department is yet to publish the holiday list for 2024. Check again later.</p>
                    </div>
                @endif
            @else
                <div class="alone-cont">
                    <div>
                        <h6>It’s lonely here!</h6>
                    </div>
                    <p>Your HR department is yet to publish the holiday list for 2024. Check again later.</p>
                </div>
            @endif
        </div>

        @php
            // Filter the data based on the selected year
            $filteredData2022 = $calendarData->where('year', 2022)->sortBy('date');
            $currentMonth = '';
            $key = 0; // Reset the loop counter
        @endphp

        <div class="hol-container" id="calendar2022" style="display: none;"> <!-- Start the grid -->
            <div class="month"> <!-- Create a flex container for months -->
            @foreach($filteredData2022->groupBy(function($entry) {
                return date('F Y', strtotime($entry->date));
            }) as $month => $entries)
                <div class="month-container">
                    <div class="inner-container">
                        <h6>{{ $month }}</h6>
                        @if($entries->isEmpty() || $entries->every(function ($entry) {
                                return empty($entry->festivals);
                            }))
                            <div class="no-holidays">
                                <h6>No holidays</h6>
                            </div>
                        @else
                            <div class="group" style="">
                                @foreach($entries as $entry)
                                    <div class="fest" style="display:flex; gap:10px;">
                                        <h5>{{ date('d', strtotime($entry->date)) }}<span><p style="font-size: 0.7rem;">{{ substr($entry->day, 0, 3) }}</p></span></h5>
                                        <p style=" font-size: 0.856rem;">{{ $entry->festivals }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        </div>

        <!-- Include Bootstrap and jQuery JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script>
            $(document).ready(function() {
                // Initially, show the calendar for the selected year
                var selectedYear = $("#yearSelect").val();
                $("#calendar" + selectedYear).show();

                $("#yearSelect").change(function() {
                    var selectedYear = $(this).val();
                    // Hide all calendars
                    $(".hol-container").hide();
                    // Show the calendar based on the selected year
                    $("#calendar" + selectedYear).show();
                });
            });
        </script>

    </body>
    </html>
</div>
