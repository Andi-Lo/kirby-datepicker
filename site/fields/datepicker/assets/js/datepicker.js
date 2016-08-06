/*
 * Kirby Datepicker
 * v1.0.0
 * Issues: https://github.com/Andi-Lo/kirby-datepicker/issues
 * 
*/

(function($) {
	$.fn.datepicker = function() {
		return this.each(function() {
			var field = $(this);
			var fieldname = 'datepicker';
			var dpDateFormat = field;

			console.log(field);

			if(field.data( fieldname )) {
				return true;
			} else {
				field.data( fieldname, true );
			}
			// Put you code here

			// Ajax call - Ajax is optional
			$.fn.ajax(fieldname);
		});
	};

	// Ajax function - Ajax is optional
	$.fn.ajax = function(fieldname) {
		var blueprint_key = $('[data-field="' + fieldname + '"]').find('[name]').attr('name');
		var base_url = window.location.href.replace('/edit', '/field') + '/' + blueprint_key + '/' + fieldname + '/ajax/';
		$.ajax({
			url: base_url + '1/value',
			type: 'GET',
			success: function(options) {
				
				console.log(options[1]);

				new flatpickr('#form-field-datepicker', 
					{
						"altFormat": options[1].dp_altFormat,
						"altInput": options[1].dp_altInput,
						"allowInput": options[1].dp_allowInput,
						"clickOpens": options[1].dp_clickOpens,
						"dateFormat": options[1].dp_dateFormat,
						"defaultDate": options[1].dp_defaultDate,
						"enableTime": options[1].dp_enableTime,
						"enableSeconds": options[1].dp_enableSeconds,
						"noCalendar": options[1].dp_noCalendar,
						"hourIncrement": options[1].dp_hourIncrement,
						"minuteIncrement": options[1].dp_minuteIncrement,
						"maxDate": options[1].dp_maxDate,
						"minDate": options[1].dp_minDate,
						"shorthandCurrentMonth": options[1].dp_shorthandCurrentMonth,
						"weekNumbers": options[1].dp_weekNumbers,
						"time_24hr": options[1].dp_time_24hr
					} 
				);
			}
		});
	};
})(jQuery);