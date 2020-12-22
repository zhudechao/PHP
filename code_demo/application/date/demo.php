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
    }

    private function day(){
        //获取当前年月日 2020-12-22
        echo Carbon::now()->toDateString();
    }
}