<!-- Style -->
<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" >
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultView: 'month',
            selectable: true,
            events: [
                {
                    title: 'Làng ĐH',
                    start: '2023-04-12T10:00:00',
                    end: '2023-04-12T11:30:00',
                    color: 'purple'
                },
                {
                    title: 'Ngã 4 Thủ Đức',
                    start: '2023-04-12T12:00:00',
                    end: '2023-04-12T14:30:00',
                    color: 'purple'
                },
                {
                    title: 'DH Bách Khoa',
                    start: '2023-04-14T14:30:00',
                    end: '2023-04-14T16:00:00',
                    color: 'green'
                }
            ],
            eventClick: function (event) {
                alert('Event: ' + event.title + '\nStart: ' + moment(event.start).format('YYYY-MM-DD HH:mm') + '\nEnd: ' + moment(event.end).format('YYYY-MM-DD HH:mm'));
            },
        });
    });
</script>

<div id="calendar"></div>
