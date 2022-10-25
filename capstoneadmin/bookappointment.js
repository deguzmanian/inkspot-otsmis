$(document).ready(() => {
    CalendarData();
    GetSchedules();
    Cal();
});
let selected = false;
let shopi = $('#in-fullname').attr('data-shopid');
const userid = $('#in-fullname').attr('data-userid');

document.getElementById('btn-book').addEventListener('click', (e) => {
    e.preventDefault();

    const service = $('#select-service').val();
    const time_ = $('#in-dateappointment').val();
    const date_ = $('.cal-date-container-selected').attr('data-date');
    const dateappoint = `${date_} ${time_}`;
    const shopid = $('#in-fullname').attr('data-shopid');
    const phonenum = $('#phonenumber').val();

    $.ajax({
        method:'POST',
        url:'appointsched.php',
        data:{
            userid : userid,
            service: service,
            date_: dateappoint,
            shopid: shopid,
            phonenum: phonenum,
            mode: 'a'
        }
    }).then((res) => {
        console.log(res);
        if(res === 'Success') {
            $('#btn-book').prop('disabled', true);
            alert('You successfully booked your appointment. We will send you a confirmation shortly!');
            CalendarData();
        }else if(res === 'Failed'){
            alert('Not available. Someone already scheduled an appointment with the selected time.');
        }
    });
});
const Cal = () => {
    const cals = document.querySelectorAll('.cal-date-container');
    cals.forEach(i => {
        const dd = i.getAttribute('data-date');
        let l = dd.replace('-','');
        l = l.replace('-','');
        const a = parseInt(l);

        let dt = new Date();
        const days = parseInt(dt.getDate()) < 10 ? `0${dt.getDate()}` : dt.getDate();
        const m = dt.getMonth() +1;
        const mos = parseInt(m) < 10 ? `0${m}` : m;
        const yr = dt.getFullYear();

        const nw = parseInt(`${yr}${mos}${days}`);

        if(a < nw){
            i.onclick = null;
        }
    });
}
const CalendarData = (m, y) => {
    $('.cal-date-container').removeClass('cal-date-container-selected');
    if (m === undefined)
        m = document.getElementById('sel-month').value;
    if(y === undefined)
        y = document.getElementById('sel-year').value;
    $.ajax({
        method: 'post',
        url: 'lastday.php',
        data: { month: m, year: y }
    }).then((res) => {
        let calRow = 1;
        const days = [
            "Sun",
            "Mon",
            "Tue",
            "Wed",
            "Thu",
            "Fri",
            "Sat"
        ];
        $('.cal-date-container').css('visibility', 'hidden');
        for(let d = 1; d <= parseInt(res); d++){

            const id = `#cal-row-${calRow}`;
            const a = new Date(`${y}-${m}-${d}`);
            let dayName = days[a.getDay()];
            const dayNum = days.indexOf(dayName) + 1;
            $(id).find(`div[data-daynum="${dayNum}"] .day-num`).text(d);
            const idd = `#cal-daywk-${calRow}-${dayNum}`;

            const mm = parseInt(m) < 10 ? `0${m}` : m;
            const dd = parseInt(d) < 10 ? `0${d}` : d;

            $(idd).attr('data-date',`${y}-${mm}-${dd}`);
            $(idd).css('visibility', 'visible');

            if(dayNum === 7){
                calRow++;
            }
        }

        $.ajax({
            method:'post',
            url:'get_appointments.php',
            data:{shopid:shopi}
        }).then((res) => {
            if(res != ''){
            const rows = res.split('~');
            const l = rows.length;
            $('.cal-appointments').empty();
            for(let i = 1; i <= l; i++){
                const j = rows[i].split('_');
                const d = `${j[2]}-${(parseInt(j[1]) < 10 ? '0'+j[1] : j[1])}-${(parseInt(j[0]) < 10 ? '0'+j[0] : j[0])}`;
                const el = `div[data-date="${d}"]`;

                document.querySelector(el).onclick = null;
                $(el).find('.cal-appointments').append(`<div class="book-date" onclick="OpenAppoi('${j[7]}','${j[8]}','${j[6]}','${j[5]}','${j[4]}')">${j[4]}</div>`);
            }
        }
        Cal();
        });
        
    });
}

$('.date-opt').change(() => {
    let m = document.getElementById('sel-month').value;
    let y = document.getElementById('sel-year').value;
    CalendarData(m, y);
});

const SelectDate = (x/*, row, day*/) => {
    let id = x.id;
    $('.cal-date-container').removeClass('cal-date-container-selected');
    $(`#${id}`).addClass('cal-date-container-selected');
    selected = true;
    GuardButton();
}

const OpenAppoi = (id,userid_,service,client, time) => {
    $('#bg-mod #btnplace').empty();
    if(userid === userid_) {
        $('#bg-mod #btnplace').append(`<button id="btn-cancelappoi" data-id="${id}">Cancel appointment</button>`);
    }

    $('#bg-mod .mod-content .-service span').text(service);
    $('#bg-mod .mod-content .-time span').text(time);
    $('#bg-mod').fadeIn({
        start: function () {
            $(this).css({
                display: 'flex'
            })
        },
        duration: 100
    });
}
$(document).on('click','#btn-close', () => {
    $('#bg-mod').fadeOut();
});

$(document).on('click','#btn-cancelappoi', (e) => {
    const id = e.target.attributes[1].value;
    $.ajax({
        method:'post',
        url:'deleteappointment.php',
        data: {id:id}
    }).then((res) => {
        const aff = parseInt(res);
        if(aff > 0){
            $('#bg-mod').fadeOut();
            CalendarData();
        } else {
            alert('Something went wrong. Try again.');
        }
    });
});

const SelectTime = () => {
    GuardButton();
}

const GuardButton = () => {
    const ti = $('#in-dateappointment').val();
    if(!selected || ti == '' || ti === undefined){
        $('#btn-book').prop('disabled', true);
    } else {
        $('#btn-book').prop('disabled', false);
    }
}

const GetSchedules=()=>{
    let y = false;
    $.ajax({
        method:'post',
        url:'getschedules.php'
    }).done((res) => {
            const sc = res.split('_');
            for(let i = 1; i < sc.length; i++){
                const xx = sc[i].split(',');
                let indi = '';
                const from_ = xx[1];
                const to_ = xx[2];
                const fromto = from_ +'-'+ to_;
                if(xx[3] === '0' && xx[0] === '0'){
                    y = true;
                }
                if(xx[3] === '0') {//not void
                    if(xx[0] === '0'){
                        indi = 'Open';
                        
                    } else {
                        indi = fromto;
                    }
                } else {//void
                    indi = 'Closed';
                }
                if(y){
                    $(`.cal-date-container`).attr('onclick',`SelectDate(this)`);
                    $(`.cal-date-container .cal-details`).find('.time-range').text('Open');
                } else {
                    if(xx[3] === '0') {
                    $(`div[data-daynum="${xx[0]}"]`).attr('onclick',`SelectDate(this)`);
                    }
                    $(`div[data-daynum="${xx[0]}"]`).find('.time-range').text(indi);
                }
            }
    });
}