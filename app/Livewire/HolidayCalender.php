<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HolidayCalendar as HolidayCalendarModel;
class HolidayCalender extends Component
{
    public $year = '2023'; // Default year

    public function render()
    {
        // Fetch the calendar data for the selected year
        $calendarData = HolidayCalendarModel::where('year', $this->year)->get();

        return view('livewire.holiday-calendar', [
            'calendarData' => $calendarData,
        ]);
    }
    
}
