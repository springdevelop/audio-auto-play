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
                    title: 'event1',
                    start: moment("20191031", "YYYYMMDD"),
                },
                {
                    title  : 'event2',
                    start  : moment("20191217", "YYYYMMDD"),
                    end    : moment("20191231", "YYYYMMDD"),
                },
            ]
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
