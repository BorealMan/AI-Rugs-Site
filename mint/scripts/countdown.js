// Initalize 
$(document).ready(() => {
    const countdowntimer = new CountDownTimer('.countdown', 2022, 8, 31, 17, 0, 0);
    countdowntimer.Render();
});
/* 
    Takes a launch date and will countdown until it's reached.
    On reaching it will refresh the page and stop counting. 
    Backend should switch components before refresh. 
*/
class CountDownTimer {
    selector;
    launch_year;
    launch_month
    launch_day;
    launch_hour;
    launch_min;
    launch_sec;
    clock_freq;
    reload;
    start_date;
    // Holds HTML Components
    clocks;

    constructor(_selector, _launch_year, _launch_month, _launch_day, _launch_hour, _launch_min, _launch_sec, _clock_freq=1000, _reload=true) {
        this.selector = _selector;
        this.launch_year = _launch_year;
        this.launch_month = _launch_month;
        this.launch_day = _launch_day;
        this.launch_hour = _launch_hour;
        this.launch_min = _launch_min;
        this.launch_sec = _launch_sec;
        this.clock_freq = _clock_freq;
        this.reload = _reload;
        this.start_date = new Date(this.launch_year, this.launch_month - 1, this.launch_day, this.launch_hour, this.launch_min, this.launch_sec);
    }

    Render() {
        if (this.TimeBetween() < 0) return
        this.clocks = document.querySelectorAll(this.selector);
        setInterval(() => {
            this.clocks.forEach( clock => {
                if (this.TimeBetween() < 0) {
                    window.location.reload(this.reload);   
                    return
                }
                clock.innerHTML = this.Display();
            })
        }, this.clock_freq);
    }

    Display() {
        const diff = this.GenerateDiff();
        // Displays if greater than zero
        // Adds S if Greater than 1
        return (`
            <div class='countdowntimer-display'>
                <div class='countdowntimer-content'>
                    ${diff.months > 0 ? `<p>${diff.months} Month${diff.months != 1 ? 's' : ''}</p>` : ''}
                    ${diff.weeks > 0 ? `<p>${diff.weeks} Week${diff.weeks != 1 ? 's' : ''}</p>` : ''}
                    ${diff.days > 0 ? `<p>${diff.days} Day${diff.days != 1 ? 's' : ''}</p>` : ''}
                    ${diff.hours > 0 ? `<p>${diff.hours} Hour${diff.hours != 1 ? 's' : ''}</p>` : ''}
                    ${diff.mins > 0 ? `<p>${diff.mins} Min${diff.mins != 1 ? 's' : ''}</p>` : ''}
                    <p>${diff.secs} Sec${diff.secs != 1 ? 's' : ''}</p>
                </div>
            </div>
        `);
    }

    TimeBetween() {
        const now = new Date()
        return this.start_date - now;
    }

    GenerateDiff() {
        let time_between = this.TimeBetween() / 1000;
        let diff = {}
        // Breaking Apart by Seconds
        const seconds_per_min = 60;
        const seconds_per_hour = 3600;
        const seconds_per_day = 60 * 60 * 24;
        const seconds_per_week = seconds_per_day * 7;
        const seconds_per_month = seconds_per_day * 30;
        while(time_between > 0) {
            if (time_between >= seconds_per_month) {
                time_between -= seconds_per_month;
                diff.months === undefined ? diff.months = 1 : diff.months++;
            }
            else if(time_between >= seconds_per_week) {
                time_between -= seconds_per_week;
                diff.weeks === undefined ? diff.weeks = 1 : diff.weeks++;
            }
            else if (time_between >= seconds_per_day) {
                time_between -= seconds_per_day;
                diff.days === undefined ? diff.days = 1 : diff.days++;
            }
            else if (time_between >= seconds_per_hour) {
                time_between -= seconds_per_hour;
                diff.hours === undefined ? diff.hours = 1 : diff.hours++;
            }
            else if (time_between >= seconds_per_min) {
                time_between -= seconds_per_min;
                diff.mins === undefined ? diff.mins = 1 : diff.mins++;
            }  else {
                diff.secs = Math.floor(time_between);
                time_between = 0;
                break;
            }
        }
        return diff
    }

    FmtTimeStr(diff) {
        return `Months: ${diff.months} | Weeks: ${diff.weeks} | Days: ${diff.days} | Hours: ${diff.hours} | Mins: ${diff.mins} | Secs: ${diff.secs}`;
    }

    GetDiffStr() {
        return this.FmtTimeStr(this.GenerateDiff());
    }
}

