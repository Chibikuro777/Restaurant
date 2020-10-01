<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


date_default_timezone_set('Asia/Tokyo');

class Calendar extends Model
{
    public static function getWeeks()
    {
        $weeks = [];
        $week = '';

        $dt = new Carbon(self::getYm_firstday());
        $day_of_week = $dt->dayOfWeek;     // 曜日
        $days_in_month = $dt->daysInMonth; // その月の日数

        // 第 1 週目に空のセルを追加
        $week .= str_repeat('<td></td>', $day_of_week);

        for ($day = 1; $day <= $days_in_month; $day++, $day_of_week++) {
            $date = $day  . '/' . self::getYm();
            if (Carbon::now()->format('d/m/Y') === $date) {
                $week .= '<td class="today booking">' . $day . '<a href="' . route('restaurant.booking_input', [ 'date' => $date ]) . '"><div class="d-flex justify-content-center align-middle"><span> Choose';
            } else {
                $week .= '<td class="booking">' . $day . '<a href="' . route('restaurant.booking_input', [ 'date' => $date ]) . '"><div class="d-flex justify-content-center align-middle"><span> Choose';
            }
            $week .= '</span></div></a></td>';

            // 週の終わり、または月末
            if (($day_of_week % 7 === 6) || ($day === $days_in_month)) {
                if ($day === $days_in_month) {
                    $week .= str_repeat('<td class="booking"></td>', 6 - ($day_of_week % 7));
                }
                $weeks[] = '<tr>' . $week . '</tr>';
                $week = '';
            }
        }
        return $weeks;
    }

    /**
     * month 文字列を返却する
     *
     * @return string
     */
    public static function getMonth()
    {
        return Carbon::parse(self::getYm_firstday())->format('M Y');
    }

    /**
     * prev 文字列を返却する
     *
     * @return string
     */
    public static function getPrev()
    {
        return Carbon::parse(self::getYm_firstday())->subMonthsNoOverflow()->format('m/Y');
    }

    /**
     * next 文字列を返却する
     *
     * @return string
     */
    public static function getNext()
    {
        return Carbon::parse(self::getYm_firstday())->addMonthNoOverflow()->format('m/Y');
    }

    /**
     * GET から Y-m フォーマットを返却する
     *
     * @return string
     */
    private static function getYm()
    {
        if (isset($_GET['ym'])) {
            return $_GET['ym'];
        }
        return Carbon::now()->format('m/Y');
    }

    /**
     * 2019-09-01 のような月初めの文字列を返却する
     *
     * @return string
     */
    private static function getYm_firstday()
    {
        return '01/' . self::getYm();
    }
}
