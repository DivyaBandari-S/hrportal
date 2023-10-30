<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HolidayCalendar;
class HolidayCalender extends Component
{
    public $year = '2023'; // Default year

    public function render()
    {
        try {
            // Attempt to fetch the calendar data for the selected year
            $calenderData = HolidayCalendar::where('year', $this->year)->get();

            // Optionally, you can fetch data for 2022 as well
            $calendarData2022 = HolidayCalendar::where('year', '2022')->get();

            // Merge the data for both years
            $calendarData = $calenderData->concat($calendarData2022);
        } catch (\Exception $e) {
            // Handle the exception, you can log it or display an error message
            // For example, you can log the error message
            \Log::error('Error fetching calendar data: ' . $e->getMessage());
    
            // Provide a default value or an error message to display
            $calendarData = [];
    
            // You can also redirect to an error page or show a notification to the user
        }
    
        return view('livewire.holiday-calender', [
            'calendarData' => $calendarData,
        ]);
    }
    
}
