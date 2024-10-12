<?= $this->extend('layouts/main') ?>

<?= $this->section('appbar') ?>
<header class="appbar">
    <div class="appbar-title">Calendar</div>
    <div class="appbar-links">
        <a href="/dashboard" class="btn btn-outline-primary mr-3"><i class="fas fa-chevron-left"></i> Back</a>
        <a href="/logout" class="btn btn-danger ml-3">Logout</a>
    </div>
</header>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div id="calendar"></div>
        </div>
        <div class="col-md-4">
            <div id="event-summary-container" class="mt-3">
                <ul class="nav nav-tabs" id="event-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="all-events-tab" data-toggle="tab" href="#all-events">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="past-events-tab" data-toggle="tab" href="#past-events">Past</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="during-events-tab" data-toggle="tab" href="#during-events">During</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="next-events-tab" data-toggle="tab" href="#next-events">Next</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all-events">
                        <div id="event-summary">
                            <!-- Event summary for All events will be displayed here -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="past-events">
                        <div id="event-summary-past">
                            <!-- Event summary for Past events will be displayed here -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="during-events">
                        <div id="event-summary-during">
                            <!-- Event summary for During events will be displayed here -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="next-events">
                        <div id="event-summary-next">
                            <!-- Event summary for Next events will be displayed here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: '/calendar/fetchEvents'
        });

        calendar.render();

        // Fetch events for each tab and update the content
        document.querySelectorAll('.nav-link').forEach(function(tab) {
            tab.addEventListener('click', function() {
                var category = tab.getAttribute('href').replace('#', '');
                fetchEvents(category);
            });
        });

        function fetchEvents(category) {
            fetch('/calendar/fetchEvents')
                .then(response => response.json())
                .then(events => {
                    var summary = '';
                    var today = new Date();
                    events.forEach(event => {
                        var eventStart = new Date(event.start);
                        var eventEnd = new Date(event.end);
                        if (category === 'all' ||
                            (category === 'past' && eventEnd < today) ||
                            (category === 'during' && eventStart <= today && eventEnd >= today) ||
                            (category === 'next' && eventStart > today)) {
                            summary += '<div>' + event.title + ' - ' + event.start + '</div>';
                        }
                    });
                    document.getElementById('event-summary-' + category).innerHTML = summary;
                })
                .catch(error => console.error('Error fetching events:', error));
        }
    });
</script>
<?= $this->endSection() ?>
