export default {
    setGetCalendarsStatus: ( state, status ) => state.getCalendarsStatus = status,
    setGetCalendarStatus: ( state, status ) => state.getCalendarStatus = status,
    setCalendars: ( state, calendars ) => state.calendars = calendars,
    setCalendar: ( state, calendar ) => state.calendar = calendar,
    setCreateCalendarStatus: ( state, status) => state.createCalendarStatus = status, 
    setUpdateCalendarStatus: ( state, status) => state.updateCalendarStatus = status,
    deleteCalendarStatus: ( state, status) => state.deleteCalendarStatus = status,
}
