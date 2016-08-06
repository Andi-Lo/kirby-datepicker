<?php

/*

---------------------------------------
EXAMPLE DATEPICKER CONFIG
---------------------------------------

*/


/* 
 * European Format: 'd-m-Y'
 * American Format: 'm/d/Y'
 * Fancy Format: 		'l,F j,Y' e.g.: Friday, August 12, 2016
 * See list of all available date formats: https://chmln.github.io/flatpickr/#dateformat
*/
c::set('dp_dateFormat', 'd-m-Y');

/*
 * Set a custom datepicker styling by copying one of the themes locatet in "assets/css/themes"
 * to your "assets/css/datepicker" 
*/

// c::set("panel.stylesheet", "assets/css/datepicker/yourThemeFile.css");

/*
 * Example default: Settings
 * Feel free to delete unused 
 * For better understanding see: https://chmln.github.io/flatpickr/#options
*/
c::set('dp_enableTime', 'true');
c::set('dp_noCalendar', 'true');
c::set('dp_enableTime', false);
c::set('dp_altFormat', 'F j, Y');
c::set('dp_altInput', false);
c::set('dp_altInputClass', '');
c::set('dp_allowInput', false);
c::set('dp_clickOpens',  true);
c::set('dp_defaultDate', '');
c::set('dp_enableTime', false);
c::set('dp_enableSeconds', false);
c::set('dp_noCalendar', false);
c::set('dp_hourIncrement', 1);
c::set('dp_minuteIncrement',  5);
c::set('dp_inline', false);
c::set('dp_static',  false);
c::set('dp_wrap', false);
c::set('dp_maxDate',  null);
c::set('dp_minDate', null);
c::set('dp_onChange',  null);
c::set('dp_onOpen', null);
c::set('dp_onClose',  null);
c::set('dp_parseDate', false);
c::set('dp_shorthandCurrentMonth', false);
c::set('dp_weekNumbers', false);
c::set('dp_time_24hr',  false);
c::set('dp_utc', false);
c::set('dp_prevArrow',  '&lt;');
c::set('dp_nextArrow', '&at;');


