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
                    title: 'Dãy nhà X1',
                    start: moment("20191224 12:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191220  13:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: 'red',
                },
                {
                    id: 2,
                    title  : 'Dãy nhà D1',
                    start: moment("20191225 8:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191221  11:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#bb7777',
                },
                 {
                    id: 3,
                    title  : 'Dãy nhà E',
                    start: moment("20191226 11:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191222  15:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#0026ff',
                },
                 {
                    id: 4,
                    title: 'Dãy nhà L',
                    start: moment("20191227 11:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191218  15:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#fcc630',
                },
                {
                    id: 5,
                    title  : 'Dãy nhà M',
                    start: moment("20191228 7:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191217  14:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#c03b25',
                },
                 {
                    id: 6,
                    title  : 'Dãy nhà N',
                    start: moment("20191225 9:35:11", "YYYYMMDD HH:mm:ss"),
                    end: moment("20191219  12:35:11", "YYYYMMDD HH:mm:ss"),
                    backgroundColor: '#418bca',
                },
                  {
                    id: 7,
                    title  : 'Dãy nhà D1',
                    start: moment("20191228 6:35:11", "YYYYMMDD HH:mm:ss"),
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
