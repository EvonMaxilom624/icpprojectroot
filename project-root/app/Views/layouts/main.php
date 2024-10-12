<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">

    <style>
        body {
            background-image: url('<?= base_url('images/bg.png') ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .appbar {
            background: rgba(106, 45, 114, 255);
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer {
            background: rgb(38, 34, 98);
            color: white;
            padding: 10px 20px;
            text-align: center;
            width: 100%;
            margin-top: auto; 
        }
        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: black; 
        }
        .card {
            border-radius: 15px; 
            overflow: hidden;
        }
        .card-body {
            background-size: cover;
            background-position: center;
            color: white; 
        }
        .card-title {
            background-color: rgba(0, 0, 0, 0.5); 
            padding: 5px;
            border-radius: 5px;
        }
        .notifications {
            background-image: url('/images/2.png');
        }

        .recent-activities {
            background-image: url('/images/3.png');
        }

        .important-announcements {
            background-image: url('/images/4.png');
        }

        .organization-files {
            background-image: url('/images/5.png');
        }
        #calendar {
            width: 70%; 
            max-width: 800px; 
            height: 70vh; 
            max-height: 600px; 
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px; 
            padding: 20px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
            overflow: hidden; 
        }


    </style>
</head>
<body>
    <?= $this->renderSection('appbar') ?>

    <div class="content">
        <?= $this->renderSection('content') ?>
    </div>
    
    <footer class="footer">
        &copy; <?= date('Y') ?> USTP Integrated Organizations' System - IOS. All rights reserved.
    </footer>
    <?= $this->renderSection('scripts') ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: '/calendar/events'
            });

            calendar.render();
        });
    </script>

</body>
</html>
