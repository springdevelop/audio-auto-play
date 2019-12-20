<template>
<div>
    <div class="card p-3">
        <full-calendar :events="events" @event-selected="eventSelected" :config="config"></full-calendar>
    </div>
</div>
</template>
<script>
import 'fullcalendar/dist/locale/vi'
import { FullCalendar } from 'vue-full-calendar'
import 'fullcalendar/dist/fullcalendar.css'
import moment from 'moment';
export default {
    components: {
        FullCalendar
     },
     data() {
         return {
            config: {
                locale: 'vi',
                timeZone: 'Asia/Ho_Chi_Minh',
            },
            events: [
               {
                    id: 1,
                    title: 'Thiết bị 1',
                    start: moment("20191220 12:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191220  13:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: 'red',
                },
                {
                    id: 2,
                    title  : 'Thiết bị 2',
                    start: moment("20191221 8:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191221  11:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#bb7777',
                },
                 {
                    id: 3,
                    title  : 'Thiết bị 3',
                    start: moment("20191222 11:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191222  15:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#0026ff',
                },
                 {
                    id: 1,
                    title: 'Thiết bị 4',
                    start: moment("20191218 11:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191218  15:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#fcc630',
                },
                {
                    id: 5,
                    title  : 'Thiết bị 5',
                    start: moment("20191217 7:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191217  14:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#c03b25',
                },
                 {
                    id: 6,
                    title  : 'Thiết bị 3',
                    start: moment("20191219 9:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191219  12:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#418bca',
                },
                  {
                    id: 7,
                    title  : 'Thiết bị 8',
                    start: moment("20191216 6:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191216  10:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#90278e',
                },
                
            ],
            eventColor: '#ccffff'
         }
     },
    computed: {
       
    },
    created() {
    },
    methods: {
        eventSelected(event) {
            console.log(event)
        }
    }
}
</script>
