<?php
namespace App\Calendar;
use Carbon\Carbon;

class CalendarWeekDay {
	public $carbon;
	public $style;

	function __construct($date, $style){
		$this->carbon = new Carbon($date);
		$this->style = $style;
	}

	function getClassName(){
		return "day-" . strtolower($this->carbon->format("D"));
	}

	/**
	 * @return 
	 */
	function render(){
		// return '<p class="day">' . $this->carbon->format("j"). '</p>';
		if($this->style == "half"){
			return '<label class="day"><input type="radio" name="date" value="'. $this->carbon. '">' . $this->carbon->format("j"). '</label>';
		}else{
			// dd($this->carbon->format('Y-m-d'));
			return '<a class="day" href="/shop/reservation?date='. $this->carbon->format('Y-m-d').'">' . $this->carbon->format("j"). '</a>';
		}
	}
}