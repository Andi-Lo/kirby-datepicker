# Kirby-Datepicker

The Kirby-Datepicker provides a datepicker field for the [Kirby-CMS](https://getkirby.com/). It is basically a wrapper for the wonderful [flatpickr](https://github.com/chmln/flatpickr).

## Setup

1. **Download and Unzip**
Download this repository and unzip it into the root of your project.

## Usage

### 1. Blueprint

Add Datepicker as a field to one of your blueprints like this:

```
    title: Some Site
    pages: false
    fields:
      datepicker:
        label: Datepicker
        type: datepicker
        width: 1/3

```

### 2. Config 

#### Options

| **Option** | **Default** | **Description** |
| -------- | -------- | -------- |
| dp_altFormat | 'F j, Y' | Exactly the same as date format, but for the altInput field |
| dp_altInput | false | Show the user a readable date (as per altFormat), but return something totally different to the server. |
| dp_allowInput | false | Allows the user to enter a date directly input the input field. By default, direct entry is disabled. |
| dp_clickOpens | true | Clicking on the input opens the date (time) picker. Disable this if you wish to open the calendar manually with .open() |
| dp_dateFormat | 'F j, Y' | A string of characters which are used to define how the date will be displayed in the input box. |
| dp_enableTime | false | Enables time picker |
| dp_enableSeconds | false | Enables seconds in the time picker. |
| dp_noCalendar | false | Hides the calendar. For use along with enableTime. Make sure to change the "Time Format Characters" |
| dp_hourIncrement | 1 | Adjusts the step for the hour input (incl. scrolling) |
| dp_minuteIncrement | 5 | Adjusts the step for the minute input (incl. scrolling) |
| dp_maxDate | null | The maximum date that a user can pick to, as a string. See [Date.parse()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/parse) |
| dp_minDate | null | The minimum date that a user can pick to, as a string. See [Date.parse()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/parse) |
| dp_shorthandCurrentMonth | false | Show the month using the shorthand version (ie, Sep instead of September). |
| dp_weekNumbers | false | Enables display of week numbers in calendar. |
| dp_time_24hr |  false | Displays time picker in 24 hour mode without AM/PM selection when enabled. |

#### Date Format Characters

| **Character** | **Description** | **Example** |
| -------- | -------- | -------- |
| d | Day of the month, 2 digits with leading zeros | 01 to 31 |
| D | A textual representation of a day | Mon through Sun |
| l | (lowercase 'L')   A full textual representation of the day of the week | Sunday through Saturday |
| j | Day of the month without leading zeros | 1 to 31 |
| J | Day of the month without leading zeros and ordinal suffix | 1st, 2nd, to 31st |
| w | Numeric representation of the day of the week | 0 (for Sunday) through 6 (for Saturday) |
| F | A full textual representation of a month | January through December |
| m | Numeric representation of a month, with leading zero | 01 through 12 |
| n | Numeric representation of a month, without leading zeros | 1 through 12 |
| M | A short textual representation of a month | Jan through Dec |
| U | The number of seconds since the Unix Epoch | 1413704993 |
| y | A two digit representation of a year | 99 or 03 |
| Y | A full numeric representation of a year, 4 digits | 1999 or 2003 |

#### Time Format Characters

| **Character** | **Description** | **Example** |
| -------- | -------- | -------- |
| H  | Hours (24 hours) | 00 to 23 |
| h  | Hours | 1 to 12 |
| i  | Minutes | 00 to 59 |
| S  | Seconds, 2 digits | 00 to 59 |
| s  | Seconds | 0, 1 to 59 |
| K  | AM/PM | AM or PM |

## Credits
[Flatpickr](https://github.com/chmln/flatpickr)  
[Kirby Custom Field Boilerplate](https://github.com/jenstornell/kirby-boiler-field)

## License
![https://creativecommons.org/licenses/by-sa/4.0/](https://licensebuttons.net/l/by-sa/3.0/88x31.png "CC BY-SA")  
[CC BY-SA](https://creativecommons.org/licenses/by-sa/4.0/)
