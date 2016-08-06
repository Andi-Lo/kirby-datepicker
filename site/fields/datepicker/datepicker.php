<?php

/*
 * Kirby Datepicker
 * v1.0.0
 * Issues: https://github.com/Andi-Lo/kirby-datepicker/issues
 * 
*/

class DatepickerField extends BaseField {
	static public $fieldname = 'datepicker';
	public $icon = 'calendar';

	/* init default options */
		static public $dp_options = array(
			"dp_enableTime" => false,
			"dp_altFormat" => 'F j, Y',
			"dp_altInput" => false,
			"dp_allowInput" => false,
			"dp_clickOpens" =>  true,
			"dp_dateFormat" => 'd-m-Y',
			"dp_enableTime" => false,
			"dp_enableSeconds" => false,
			"dp_noCalendar" => false,
			"dp_hourIncrement" => 1,
			"dp_minuteIncrement" =>  5,
			"dp_maxDate" =>  null,
			"dp_minDate" => null,
			"dp_shorthandCurrentMonth" => false,
			"dp_weekNumbers" => false,
			"dp_time_24hr" =>  false,
		);

	// Load assets
		static public $assets = array(
			'js' => array(
				'datepicker.js',
				'flatpickr.min.js'
			),
			'css' => array(
				'datepicker.css',
				'style.css'
			)
		);



	function __construct() {
		// Get the users configuration from config.php
			if(c::get('dp_altFormat')) {
				self::$dp_options["dp_altFormat"] = c::get("dp_altFormat");
			}
			if(c::get('dp_altInput')) {
				self::$dp_options["dp_altInput"] = c::get("dp_altInput");
			}
			if(c::get('dp_allowInput')) {
				self::$dp_options["dp_allowInput"] = c::get("dp_allowInput");
			}
			if(c::get('dp_clickOpens')) {
				self::$dp_options["dp_clickOpens"] = c::get("dp_clickOpens");
			}
			if(c::get('dp_dateFormat')) {
				self::$dp_options["dp_dateFormat"] = c::get("dp_dateFormat");
			}
			if(c::get('dp_enableTime')) {
				self::$dp_options["dp_enableTime"] = c::get("dp_enableTime");
			}
			if(c::get('dp_enableSeconds')) {
				self::$dp_options["dp_enableSeconds"] = c::get("dp_enableSeconds");
			}
			if(c::get('dp_noCalendar')) {
				self::$dp_options["dp_noCalendar"] = c::get("dp_noCalendar");
			}
			if(c::get('dp_hourIncrement')) {
				self::$dp_options["dp_hourIncrement"] = c::get("dp_hourIncrement");
			}
			if(c::get('dp_minuteIncrement')) {
				self::$dp_options["dp_minuteIncrement"] = c::get("dp_minuteIncrement");
			}
			if(c::get('dp_maxDate')) {
				self::$dp_options["dp_maxDate"] = c::get("dp_maxDate");
			}
			if(c::get('dp_minDate')) {
				self::$dp_options["dp_minDate"] = c::get("dp_minDate");
			}
			if(c::get('dp_shorthandCurrentMonth')) {
				self::$dp_options["dp_shorthandCurrentMonth"] = c::get("dp_shorthandCurrentMonth");
			}
			if(c::get('dp_weekNumbers')) {
				self::$dp_options["dp_weekNumbers"] = c::get("dp_weekNumbers");
			}
			if(c::get('dp_time_24hr')) {
				self::$dp_options["dp_time_24hr"] = c::get("dp_time_24hr");
			}
	}


	public function input() {
		// Load template with arguments
		$html = tpl::load( __DIR__ . DS . 'template.php', $data = array(
			'field' => $this,
			'page' => $this->page()
		));
		return $html;
	}


	// Connecting PHP to Javascript - https://forum.getkirby.com/t/panel-field-javascript-click-does-not-work-after-save/3474/7
	public function element() {
		// inject field properties from blueprint to the template
		$element = parent::element();
		$element->data('field', self::$fieldname);
		return $element;
	}


	// Routes - Makes Ajax possible - https://forum.getkirby.com/t/routing-in-custom-form-field/3101/7
	public function routes() {
		return array(
			array(
				'pattern' => 'ajax/(:any)/(:any)',
				'method'  => 'get',
				'action' => function($var1, $var2) {
					// pass options json-data back to javascript via ajax response
					return response::json( array( 
							'dp_options', self::$dp_options
					));
				}
			)
		);
	}


	// Default value fallback
	public function val() {

		if($this->value() == "" && $this->default() !== "") {
			$value = $this->default();
		} elseif($this->value() == "" && $this->default() == "") {
			$value = "";
		} else {
			$value = $this->value();
		}
		return $value;
	}


}

?>