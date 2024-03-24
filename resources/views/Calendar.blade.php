@extends('dashboard')

@section('title', 'Power Gym - Calendar')

@section('content')

<div class="cal-modal-container">
  <div class="calendar-section">
    <div id="calendar" class="transparent-calendar">
      <!-- Calendar will be rendered here -->
    </div>
  </div>
  <div class="events-section">
    <h3>UPCOMING EVENTS</h3>
    <div class="upcoming-events" style="height: 300px; overflow-y: scroll;">
      {{-- Loop through formatted events --}}
      @foreach($formattedEvents as $event)
      <div class="upcoming-event">
        <div class="event-date">{{ \Carbon\Carbon::parse($event['start'])->format('M d') }}</div>
        <div class="event-title">{{ $event['title'] }}</div>
      </div>
      @endforeach
    </div>
  </div>
</div>



{{-- Include FullCalendar's CSS and JS from CDN --}}
<link href='https://unpkg.com/fullcalendar@5.9.0/main.min.css' rel='stylesheet' />
<script src='https://unpkg.com/fullcalendar@5.9.0/main.min.js'></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<style>
body {
  background-image: url('https://zynkdesign.com/wp-content/uploads/2019/10/fusion-lifestyle-gym.jpg');
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
}

.cal-modal-container {
  display: flex;
  flex-direction: row; /* Ensures a horizontal layout */
  align-items: stretch; /* Makes children stretch to fill the container's height */
  justify-content: space-between; /* Adjusts spacing between items */
  gap: 20px; /* Provides space between flex items */
  padding: 20px;
}

.calendar-section, .events-section {
  background-color: rgba(192, 57, 43, 0.4);
  color: #fff;
  border-radius: 15px;
  padding: 20px;
  margin-bottom: 20px; /* Adjust as needed */
  overflow: auto;
  height: auto; /* Adjust this value as needed */
  max-height: 600px; /* Example max height */
}

.calendar-section {
  flex: 7; /* Takes up 70% of the space */
  background-size: cover;
  background-position: center;
}

.events-section {
  flex: 3; /* Takes up 30% of the space */
}

#calendar {
  width: 100%;
}

/* Style for headings, events, and descriptions unchanged */
.events-section h3 {

font-size: 37px;
font-weight: 900;
margin: 0 0 1rem;
}

.upcoming-events {

margin-top: 20px;
}

.upcoming-event {
background-color: rgba(0, 0, 0, 0.6);
color: #fff;
padding: 10px;
margin-bottom: 10px;
border-left: 5px solid #ff0000;
cursor: pointer;
}

.upcoming-event:hover {
background-color: rgba(0, 0, 0, 0.8);
}

.event-date {
font-weight: bold;
font-size: 18px;
color: #fff;
}

.event-title {
font-size: 18px;
color: #fff;
}

.event-description {
font-size: 14px;
color: #ccc;
}

/* Additional calendar styling */
.fc-toolbar-title {
    color: #fff; /* White color for the calendar title */
  }

  .fc-daygrid-day {
    background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent cells */
    border-color: #fff; /* White borders for cells */
    color: #fff; /* White color for cell numbers */
  }

  .fc-daygrid-day.fc-day-today {
    background-color: rgba(255, 0, 0, 0.5); /* More visible color for today */
  }
  .fc-event-title {
    color: #fff; /* Ensure text is white for better visibility */
  }

  .fc-event {
    background-color: #28a745; /* Green background for events */
    border: none;
  }

  .fc-event .event-icon {
    margin-right: 5px; /* Space between icon and text */
  }
.fc-day-today {
  position: relative;
}

.fc-day-today::after {
  content: '';
  position: absolute;
  bottom: 5px;
  right: 5px;
  height: 10px;
  width: 10px;
  background-color: blue;
  border-radius: 50%;
  display: block;
}

/* Responsive adjustments */
@media (min-width: 576px) {
  .cal-modal-container {
    flex-direction: row;
  }

  .calendar-section, .events-section {
    flex: 1;
    margin: 0 10px;
  }
}
</style>



<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: @json($formattedEvents), // This works directly in a Blade template
    });
    calendar.render();
});

// Helper function to check if a date is today
function isToday(date) {
    var today = new Date();
    today.setHours(0,0,0,0);
    date.setHours(0,0,0,0);
    return date.getTime() === today.getTime();
}



// generate events
var eventDates = {}
let day1 = formatDate(new Date(new Date().setMonth(new Date().getMonth() + 1)))
eventDates[day1] = [
  'Event 1, Location',
  'Event 2, Location 2'
]
let day2 = formatDate(new Date(new Date().setDate(new Date().getDate() + 40)))
eventDates[day2] = [
  'Event 2, Location 3',
]

// set maxDates
var maxDate = {
  1: new Date(new Date().setMonth(new Date().getMonth() + 11)),
  2: new Date(new Date().setMonth(new Date().getMonth() + 10)),
  3: new Date(new Date().setMonth(new Date().getMonth() + 9))
}

var flatpickr = $('#calendar .placeholder').flatpickr({
  inline: true,
  minDate: 'today',
  maxDate: maxDate[3]
,
  showMonths: 1,
  enable: Object.keys(eventDates),
  disableMobile: "true",
  onChange: function(date, str, inst) {
    var contents = '';
    if(date.length) {
        for(i=0; i < eventDates[str].length; i++) {
        contents += '<div class="event"><div class="date">' + flatpickr.formatDate(date[0], 'l J F') + '</div><div class="location">' + eventDates[str][i] + '</div></div>';
      }
    }
    $('#calendar .calendar-events').html(contents)
  },
  locale: {
    weekdays: {
      shorthand: ["S", "M", "T", "W", "T", "F", "S"],
      longhand: [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
      ]
    }
  }
})

eventCaledarResize($(window));
$(window).on('resize', function() {
  eventCaledarResize($(this))
})

function eventCaledarResize($el) {
  var width = $el.width()
  if(flatpickr.selectedDates.length) {
    flatpickr.clear()
  }
  if(width >= 992 && flatpickr.config.showMonths !== 3) {
    flatpickr.set('showMonths', 3)
    flatpickr.set('maxDate', maxDate[3])
  }
  if(width < 992 && width >= 768 && flatpickr.config.showMonths !== 2) {
    flatpickr.set('showMonths', 2)
    flatpickr.set('maxDate', maxDate[2])
  }
  if(width < 768 && flatpickr.config.showMonths !== 1) {
    flatpickr.set('showMonths', 1)
    flatpickr.set('maxDate', maxDate[1])
    $('.flatpickr-calendar').css('width', '')
  }
}

function formatDate(date) {
    let d = date.getDate();
    let m = date.getMonth() + 1; //Month from 0 to 11
    let y = date.getFullYear();
    return '' + y + '-' + (m<=9 ? '0' + m : m) + '-' + (d <= 9 ? '0' + d : d);
}


document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    eventContent: function(arg) { // Custom rendering function for events
      let arrayOfDomNodes = []

      // Standard event title
      let title = document.createElement('div')
      title.innerHTML = arg.event.title;
      arrayOfDomNodes.push(title)

      return { domNodes: arrayOfDomNodes }
    },
    events: @json($formattedEvents) // Your events data
  });
  calendar.render();
});

</script>

@endsection