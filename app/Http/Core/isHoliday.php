<?php namespace App\Http\Core;

use Carbon\Carbon;

trait isHoliday
{
    public function isHoliday()
    {
        $now = Carbon::now()->format('Y-m-d');

        $montDay = explode('-',$now,2)[1];

        $holidays = $this->holidays();

        foreach ($holidays as $holiday)
        {
            if ($holiday == $montDay)
                return true;
        }

        return false;

    }

    public function isWeekend()
    {
        $now = Carbon::now()->dayOfWeek;

        if ($now == 6 || $now == 7)
            return true;
        else
            return false;
    }


    /*
     *
     * CAMBIAR DIAS POR AÑO
     * VALIDADO ACTUALMENTE PARA EL 2019
     *
     */

    public function holidays()
    {
        return [
            '01-01',
            '01-07',
            '03-25',
            '04-18',
            '04-19',
            '05-01',
            '06-03',
            '06-24',
            '07-01',
            '08-07',
            '08-19',
            '10-14',
            '11-04',
            '11-11',
            '12-25',
        ];

    }

}