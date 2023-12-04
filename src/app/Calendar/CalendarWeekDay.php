<?php
namespace App\Calendar;
use Carbon\Carbon;

class CalendarWeekDay {
	public $carbon;

	function __construct($date){
		$this->carbon = new Carbon($date);
	}

	function getClassName(){
		return "day-" . strtolower($this->carbon->format("D"));
	}

	/**
	 * @return 
	 */
	function render(){
		// return '<p class="day">' . $this->carbon->format("j"). '</p>';
		return '<label class="day"><input type="radio" name="date" value="'. $this->carbon. '">' . $this->carbon->format("j"). '</label>';
	}
}