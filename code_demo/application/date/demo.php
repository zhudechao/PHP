<?php


namespace app\date;


use Carbon\Carbon;

/**
 * 参考文档
 * https://www.jianshu.com/p/37084f1f7cc1
 * https://www.cnblogs.com/x-x-j/p/9377338.html
 * Class demo
 * @package app\date
 */
class demo
{
    public function main(){
        $this->day();
//        $this->month();
    }

    private function day(){
        //获取当前年月日 2020-12-22
        echo Carbon::now()->toDateString();
        echo "</br>";

        $dt = Carbon::parse("2020-12-22 11:43:00");
        //减三个工作日(会把周六周日排除)
        echo $dt->subWeekday(3);
        echo "</br>";

        //日期减一天
        echo "</br>日期减一天:2020-11-30 to ";
        $dt = Carbon::parse("2020-11-30");
        echo $dt->subDay();
        echo "</br>";
    }

    private function month(){

    }
}