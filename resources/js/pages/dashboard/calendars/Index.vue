<template>
<div>
    <full-calendar :events="events" @event-selected="eventSelected" :config="config"></full-calendar>
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
                    title: 'event1',
                    start: moment("20191031", "YYYYMMDD"),
                },
                {
                    title  : 'event2',
                    start  : '01/11/2019',
                    end    : '01/12/2019',
                },
            ]
         }
     },
    computed: {
       
    },
    created() {
        // moment().locale('vi')
        console.log(moment().locale())
    },
    methods: {
        eventSelected(event) {
            console.log(event)
        }
    }
}
</script>
