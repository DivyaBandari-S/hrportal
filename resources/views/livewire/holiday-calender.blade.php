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
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 7px;
            background: #fff;
            overflow: hidden;
            color: #778899;
            height: 220px;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            margin-top: 20px;
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
        .inner-container h5 {
            font-weight: 500;
            font-size: 1.05rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-top: 10px;
        }
        .inner-container span {
            font-weight: 400;
        }
        .inner-container .group {
            display: flex;
            flex-direction: row;
            gap: 10px;
            align-items: center; /* Center items vertically */
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
   /* Adjust the height as needed */
}
.alone-cont {
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 7px;
            background: #fff;
            overflow: hidden;
            color: #778899;
            width: 100%;
            display:flex;
            flex-direction:column;
            text-align:center;
            justify-content:center;
            height:250px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
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
    select  .yearSelect{
        padding: 10px;
        font-size: 16px;
        line-height:2;
        border: 1px solid #ccc;
        border-radius: 5px;
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

        <div class="row" id="calendarRow">
            <!-- Calendar content for the selected year will be inserted here -->
        </div>

        <div id="aloneContainer" class="col-lg-12 col-md-12 col-sm-12 text-center" style="display: none;">
            <div class="alone-cont">
                <div>
                    <h6>It’s lonely here !</h6>
                </div>
                <p>Your HR department is yet to publish the holiday list, check again later.</p>
            </div>
        </div>
    </div>
    
    <!-- Include Bootstrap and jQuery JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Function to generate the calendar for a given year and update the calendar container
            function generateCalendar(year) {
                // Calendar data for each year should be defined here
                var calendarData = {
                            '2022': {
                                'JAN': [
                                    { date: '01', day: 'Sat', festivals: ['New Year\'s Day'] },
                                    { date: '26', day: 'Wed', festivals: ['Republic Day'] },
                                    { date: '15', day: 'Mon', festivals: ['Makara Sankranti'] },
                                    // Add more festivals for January 2022
                                ],
                                'FEB': [
                                    { date: '12', day: 'Mon', festivals: ['Maha Shivaratri'] },
                                ],
                                'MAR': [
                                    { date: '08', day: 'Wed', festivals: ['Holi'] },
                                    // Add more festivals for February 2023
                                ],
                                'APR': [
                                    { date: '22', day: 'Sat', festivals: ["Ramzan Idu'l Fitr"] },
                                    // Add more festivals for February 2023
                                ],
                                'MAY': [
                                    { festivals: ['No Holidays'] },
                                    // Add more festivals for February 2023
                                ],
                                'JUN': [
                                    {  festivals: ['No Holidays'] },
                                    // Add more festivals for February 2023
                                ],
                                'JUL': [
                                    {  festivals: ['No Holidays'] },
                                    // Add more festivals for February 2023
                                ],
                                'AUG': [
                                    { date: '15', day: 'Tue', festivals: ['Independence Day'] },
                                    { date: '30', day: 'Wed', festivals: ['Raksha Bandhan'] },
                                    // Add more festivals for February 2023
                                ],
                                'SEP': [
                                    { date: '06', day: 'Wed', festivals: ['Krishna Janmashtami'] },
                                    { date: '19', day: 'Mon', festivals: ['Ganesh Chaturthi'] },
                                    // Add more festivals for February 2023
                                ],
                                'OCT': [
                                    { date: '02', day: 'Mon', festivals: [' Gandhi Jayanti'] },
                                    { date: '22', day: 'Tue', festivals: [' Dussehra'] },
                                    // Add more festivals for February 2023
                                ],
                                'NOV': [
                                    { date: '14', day: 'Tue', festivals: [' Diwali'] },
                                    { date: '13', day: 'Mon', festivals: [' Diwali'] },
                                    // Add more festivals for February 2023
                                ],
                                'DEC': [
                                    { date: '25', day: 'Tue', festivals: ['Christams'] },
                                    // Add more festivals for February 2023
                                ],
                                // Add more months and festivals for 2022
                            },
                            '2023': {
                                'JAN': [
                                    { date: '01', day: 'Wed', festivals: ['New Year\'s Day', ] },
                                    { date: '15', day: 'Sun', festivals: ['Makara Sankranti '] },
                                    { date: '26', day: 'Tue', festivals: ['Republic Day'] },
                                    // Add more festivals for January 2023
                                ],
                                'FEB': [
                                    { date: '19', day: 'Tuesday', festivals: ['Maha Shivaratri'] },
                                    // Add more festivals for February 2023
                                ],
                                'MAR': [
                                    { date: '08', day: 'Wed', festivals: ['Holi'] },
                                    // Add more festivals for February 2023
                                ],
                                'APR': [
                                    { date: '22', day: 'Sat', festivals: ["Ramzan Idu'l Fitr"] },
                                    // Add more festivals for February 2023
                                ],
                                'MAY': [
                                    { festivals: ['No Holidays'] },
                                    // Add more festivals for February 2023
                                ],
                                'JUN': [
                                    {  festivals: ['No Holidays'] },
                                    // Add more festivals for February 2023
                                ],
                                'JUL': [
                                    {  festivals: ['No Holidays'] },
                                    // Add more festivals for February 2023
                                ],
                                'AUG': [
                                    { date: '15', day: 'Tue', festivals: ['Independence Day'] },
                                    { date: '30', day: 'Wed', festivals: ['Raksha Bandhan'] },
                                    // Add more festivals for February 2023
                                ],
                                'SEP': [
                                    { date: '06', day: 'Wed', festivals: ['Krishna Janmashtami'] },
                                    { date: '19', day: 'Mon', festivals: ['Ganesh Chaturthi'] },
                                    // Add more festivals for February 2023
                                ],
                                'OCT': [
                                    { date: '02', day: 'Mon', festivals: [' Gandhi Jayanti'] },
                                    { date: '22', day: 'Tue', festivals: [' Dussehra'] },
                                    // Add more festivals for February 2023
                                ],
                                'NOV': [
                                    { date: '14', day: 'Tue', festivals: [' Diwali'] },
                                    { date: '13', day: 'Mon', festivals: [' Diwali'] },
                                    // Add more festivals for February 2023
                                ],
                                'DEC': [
                                    { date: '25', day: 'Tue', festivals: ['Christams'] },
                                    // Add more festivals for February 2023
                                ],
                                // Add more months and festivals for 2023
                            },
                            '2024': {
                                
                            } // Empty data for 2024
                        };


                // Get the calendar data for the selected year
                var yearData = calendarData[year];
                var calendarRow = $('#calendarRow');

                if (yearData) {
                    calendarRow.empty(); // Clear existing content
                    for (var month in yearData) {
                        if (yearData.hasOwnProperty(month)) {
                            var innerContainer = $('<div class="col-lg-3 col-md-6 col-sm-12"></div>');
                            var innerHtml = '<div class="inner-container">';
                            innerHtml += '<h6>' + month + ' ' + year + '</h6>';

                            if (yearData[month].length === 0) {
                                innerHtml += '<div class="group">';
                                innerHtml += '<div class="text-center">'; // Center-align the text
                                innerHtml += '<p>No Holidays</p>';
                                innerHtml += '</div>';
                                innerHtml += '</div>';
                            } else {
                                for (var i = 0; i < yearData[month].length; i++) {
                                    var festivalData = yearData[month][i];
                                    innerHtml += '<div class="group">';
                                    innerHtml += '<div>';

                                    if (festivalData.date && festivalData.day) {
                                        // Display the date and day with smaller font size
                                        innerHtml += '<h5>' + festivalData.date + ' <span style="font-size:0.65rem;">' + festivalData.day + '</span></h5>';
                                    }
                                    
                                    innerHtml += '</div>';
                                    
                                    for (var j = 0; j < festivalData.festivals.length; j++) {
                                        innerHtml += '<p style="margin-left: 20px; margin-top: 15px; font-size:0.826rem;">' + festivalData.festivals[j] + '</p>';
                                    }
                                    
                                    innerHtml += '</div>';
                                }
                            }

                            innerHtml += '</div>';
                            innerContainer.html(innerHtml);
                            calendarRow.append(innerContainer);
                        }
                    }

                }  if (year === '2024') {
                // Display "Alone here" container for 2024
                calendarRow.empty();
                $('#aloneContainer').show();
            } else {
                // Hide "Alone here" container for other years
                $('#aloneContainer').hide();

                // Rest of the code for handling other years as it is...
            }
                    
            }

            // Initial calendar to show is for 2022
            generateCalendar('2023');

            // Handle year selection change
            $('#yearSelect').change(function () {
                var selectedYear = $(this).val();
                generateCalendar(selectedYear);
            });
        });
    </script>
</body>
</html>
