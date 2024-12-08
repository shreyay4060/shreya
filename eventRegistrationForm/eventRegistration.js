document.getElementById('eventForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const eventDate = document.getElementById('event-date').value;
    const session = document.getElementById('session').value;

    // Validation
    if (!name || !email || !eventDate || !session) {
        alert('Please fill out all required fields.');
        return;
    }

    // Simulate integration with a calendar
    const calendarEventLink = generateGoogleCalendarLink(name, eventDate, session);
    document.getElementById('form-status').innerHTML = `
        Registration successful! <br>
        <a href="${calendarEventLink}" target="_blank">Add to Google Calendar</a>
    `;

    // Reset form
    document.getElementById('eventForm').reset();
});

/**
 * Generates a Google Calendar event link
 * @param {string} name - Name of the attendee
 * @param {string} date - Event date
 * @param {string} session - Event session
 * @returns {string} - Google Calendar link
 */
function generateGoogleCalendarLink(name, date, session) {
    const eventTitle = encodeURIComponent(`Event Registration for ${name}`);
    const startTime = getSessionStartTime(date, session);
    const endTime = getSessionEndTime(date, session);
    const calendarLink = `https://calendar.google.com/calendar/render?action=TEMPLATE&text=${eventTitle}&dates=${startTime}/${endTime}&details=Thank you for registering!`;
    return calendarLink;
}

/**
 * Returns the start time in Google Calendar format
 * @param {string} date - Event date
 * @param {string} session - Event session
 * @returns {string} - Start time in UTC format (YYYYMMDDTHHmmSSZ)
 */
function getSessionStartTime(date, session) {
    const times = {
        morning: 'T090000Z',
        afternoon: 'T130000Z',
        evening: 'T180000Z',
    };
    return `${date.replace(/-/g, '')}${times[session]}`;
}

/**
 * Returns the end time in Google Calendar format
 * @param {string} date - Event date
 * @param {string} session - Event session
 * @returns {string} - End time in UTC format (YYYYMMDDTHHmmSSZ)
 */
function getSessionEndTime(date, session) {
    const times = {
        morning: 'T120000Z',
        afternoon: 'T160000Z',
        evening: 'T210000Z',
    };
    return `${date.replace(/-/g, '')}${times[session]}`;
}
