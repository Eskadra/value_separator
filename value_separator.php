<?php
/**
 * value_separator
 *
 * @author Fedor Vyrzhykovsky
 */

namespace app\components;
use yii\base\Widget;

class value_separator extends Widget{

    public $number;

    public function init(){
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run(){
        parent::run(); // TODO: Change the autogenerated stub
        $errStr =  '[ Error: string is NULL ]';
        if ($this->number === null) {return $this->number = $errStr;
        }else{return $nStr = $this->isNumeric($this->number);}}

    public function isNumeric($number){
        if (is_numeric($number)) {return $this->numberWithSemicolon($number);
        }else{$nowIsNumeric = preg_replace('~[^0-9]+~','',$number);
        return $this->numberWithSemicolon($nowIsNumeric);}}

    public function numberWithSemicolon($number){
        $right_format_number = number_format($number, 2, '.', ',');
        return $right_format_number;}
}