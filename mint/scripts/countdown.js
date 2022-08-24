// Initalize 
$(document).ready(() => {
    const countdowntimer = new CountDownTimer('.countdown', 2022, 8, 31, 17, 0, 0);
    // const countdowntimer = new CountDownTimer('.countdown', 2022, 8, 23, 22, 18, 0);
    countdowntimer.Render();
})


class CountDownTimer {
    selector;
    launch_year;
    launch_month
    launch_day;
    launch_hour;
    launch_min;
    launch_sec;
    clock_freq;
    start_date;
    // Holds HTML Components
    clocks;

    constructor(_selector, _launch_year, _launch_month, _launch_day, _launch_hour, _launch_min, _launch_sec, _clock_freq=1000) {
        this.selector = _selector;
        this.launch_year = _launch_year;
        this.launch_month = _launch_month;
        this.launch_day = _launch_day;
        this.launch_hour = _launch_hour;
        this.launch_min = _launch_min;
        this.launch_sec = _launch_sec;
        this.clock_freq = _clock_freq;
        this.start_date = new Date(this.launch_year, this.launch_month - 1, this.launch_day, this.launch_hour, this.launch_min, this.launch_sec);
    }

    Render() {
        this.clocks = document.querySelectorAll(this.selector);
        setInterval(() => {
            this.clocks.forEach( clock => {
                clock.innerHTML = this.Display();
                if (this.TimeBetween() < 0) {
                    // window.location.reload(true);
                }
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
        let months = 0;
        let weeks = 0;
        let days = 0;
        let hours = 0;
        let mins = 0;
        let secs = 0;
        // Breaking Apart by Seconds
        const seconds_per_min = 60;
        const seconds_per_hour = 3600;
        const seconds_per_day = 60 * 60 * 24;
        const seconds_per_week = seconds_per_day * 7;
        const seconds_per_month = seconds_per_day * 30;

        while(time_between > 0) {
            if (time_between >= seconds_per_month) {
                time_between -= seconds_per_month;
                months++;
            }
            else if(time_between >= seconds_per_week) {
                time_between -= seconds_per_week;
                weeks++;
            }
            else if (time_between >= seconds_per_day) {
                time_between -= seconds_per_day;
                days++;
            }
            else if (time_between >= seconds_per_hour) {
                time_between -= seconds_per_hour;
                hours++;
            }
            else if (time_between >= seconds_per_min) {
                time_between -= seconds_per_min;
                mins++;
            }  else {
                secs = Math.floor(time_between);
                time_between = 0;
                break;
            }
        }
        // Return Object 
        return {
            months: months,
            weeks: weeks,
            days: days,
            hours: hours,
            mins: mins,
            secs: secs
        };
    }

    FmtTimeStr(diff) {
        return `Months: ${diff.months} | Weeks: ${diff.weeks} | Days: ${diff.days} | Hours: ${diff.hours} | Mins: ${diff.mins} | Secs: ${diff.secs}`;
    }

    GetDiffStr() {
        return this.FmtTimeStr(this.GenerateDiff());
    }
}

