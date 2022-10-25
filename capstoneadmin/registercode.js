const card_body = document.querySelector('.card-body');
let codeVerify = 0;
let email = '';
let pass = '';
let always = true;

const role_ = document.getElementById('sel-role');
role_.addEventListener('change', () => {
    const roleas = role_.value;
    if(roleas === '0'){
        // $('.hd').show();
        $('.is-shop').hide();
    } else {
        
        $('#nameshop').text((roleas === '3' ? 'Name of Freelance Artist': 'Name of Shop' ));
        $('.is-shop').show();
    }
});

const alwaysOpen = document.getElementById('chk-0');
alwaysOpen.addEventListener('change', (e) => {
    const isChecked = e.target.checked;
    if(isChecked){
        $('.d7').hide();
    } else {
        $('.d7').show();
    }
});

let days = [];
const SelectDay = (e, day, dayName) => {
  const isChecked = e.checked;
  const fr = $(`#from-${day}`).val();
  const to = $(`#to-${day}`).val();
  const count = days.indexOf(day);

  if (isChecked) {
    if (day == "0") {
      days = [];
      days.push('0');
      always = true;
    } else {
      if (count < 0) {
        days.push(day);
      }
      always = false;
    }
  } else {
    if (count >= 0) {
      days.splice(count, 1);
    }
    always = false;
  }
  const y = days.length;
  if (y == 0) {
    days.push('0');
    // $('#chk-always').prop('checked', true);
  } else {
    // $('#chk-always').prop('checked', false);
  }
//    $('#hahaha').text(JSON.stringify(days));
  //   console.log(days);
  $(`#from-${day},#to-${day}`).prop("disabled", !isChecked);
};
//register account/shop
document.getElementById('btn-register').addEventListener('click', () => {
    $('#btn-register').text('Registering...');
    const frmData = new FormData();
    const fn = document.querySelector('input[name="fname"]').value;
    const ln = document.querySelector('input[name="lname"]').value;
    const em = document.querySelector('input[name="email"]').value;
    const ph = document.querySelector('input[name="phonenumber"]').value;
    const rl = document.querySelector('select[name="role_as"]').value;
    const ps = document.querySelector('input[name="password"]').value;
    const psc = document.querySelector('input[name="cpassword"]').value;
    const nam = (rl != '0' ? document.querySelector('input[name="shopname"]').value : '' );
    const add = (rl != '0' ? document.querySelector('input[name="address"]').value : '' );
    const map = (rl != '0' ? document.querySelector('input[name="map"]').value : '' );
    const descr = (rl != '0' ? $('#txta-descr').val() : '');
    // const dyJson = (rl === '1' ? JSON.stringify(days) : '' );
    let times = [];
    let fileData = '';
    let strTimes = '';
    if(rl === '1' || rl === '3') {
        const inputFile = document.getElementById('inp-logo');
        fileData = inputFile.files[0];
        const gg = days.length;
        const io = days.indexOf('0');
        if(io > -1){
            days.splice(io, 1);
        }
        const v = times.length;
        if(v === 0){
            times.push({
                id: '0',
                from: $(`#from-0`).val(),
                to: $(`#to-0`).val()
            });
        }
        days.forEach(d => {
            times.push({
                id: d,
                from: $(`#from-${d}`).val(),
                to: $(`#to-${d}`).val()
            });
        });
        strTimes = JSON.stringify(times);

        const _works = document.getElementById('inp-works');
        const worksCount = _works.files.length;
        for(let p = 0; p < worksCount; p++){
            frmData.append(`shopwork${p}`, _works.files[p]);
        }
        frmData.append('worksC', worksCount);


        const services_ = JSON.stringify(serviceList);
        frmData.append('services', services_);
    }

    frmData.append('fname', fn);
    frmData.append('lname', ln);
    frmData.append('email', em);
    frmData.append('phonenumber', ph);
    frmData.append('role_as', rl);
    frmData.append('password', ps);
    frmData.append('cpassword', psc);
    frmData.append('shopname_', nam);
    frmData.append('address', add);
    frmData.append('map', map);
    frmData.append('descr', descr);
    frmData.append('fileData', fileData);
    frmData.append('times', strTimes);

    // const namesh = document.getElementById('sel-role').value;
    $.ajax({
        method:'post', 
        url:'register_function.php',
        dataType: 'script',
        contentType: false,
        processData: false,
        cache: false,
        data: frmData
    }).done(data => {
        data = parseInt(data);
        const al = document.getElementById('div-alert');
        
        if(data === 0){
            al.style.display = 'block';
            al.textContent = 'Password do not match!';
        } else if (data === -1) {
            al.style.display = 'block';
            al.textContent = 'Email already registered!';
        } else if (data === -2) {
            al.style.display = 'block';
            al.textContent = 'Something went wrong while registering your account. Please try again.';
        } else if (data === 1){
            al.style.display = 'none';
            //send email code
            if(rl == '0') {//user
                codeVerify = Math.floor(1000 + Math.random() * 9000);
                $.ajax({
                    method:'post',
                    url:'email_verif.php',
                    dataType: 'json',
                    data: {
                        email: em,
                        code: codeVerify
                    }
                }).done((res) => {
                    console.log(res);
                    if(res.status === 'success') {
                        //to be used by verify button
                        email = em;
                        pass = ps;
                        //show verify button
                    card_body.innerHTML = `<div class="div-legaldocs">
                <span class="span-alert-pos">We have sent a verification code to <b>${em}</b><br/> Please enter the code below to proceed.</span></div>
                <div class="wrap-verif">
                <input type="text" id="input-code" placeholder="Type code here" maxlength="4"/><button id="btn-verify" class="btn_">Verify</button>
                </div>`;
                    }
                }).fail((err) => {
                    $('#div-alert').show();
                    $('#div-alert').html(err);
                    // console.log(err);
                });
            } else {//owner/supadmin
                card_body.innerHTML = '';
                $.ajax({
                    method:'post',
                    url:'await_approval.php',
                    data: {
                        message: 0,
                        btnVisible: true
                    }
                }).done((data1) => {
                    card_body.innerHTML = data1;
                });
            }
        }
    }).fail((err) =>{
        $('#div-alert').show();
        $('#div-alert').html(err);
    }).always(() => {
        $('#btn-register').text('Register now');
    });
});


//upload docs
$(document).on('click','#btn-upload', () => {
    var frmData = new FormData();

    const inFile = document.querySelectorAll('input[type="file"]');
    const cc = inFile.length;
    alert(cc);
    for(let i = 0; i < cc; i++){
        frmData.append(`fileData${i+1}`, inFile[i].files[0]);
    }
    // frmData.append(`fileData1`, `${inFile[i].files[0]}`);
    // frmData.append(`fileData2`, `${inFile[i].files[0]}`);
    frmData.append('c',cc);
    // const inputFile1 = document.getElementById('input-upload-docs1');
    // const inputFile2  = document.getElementById('input-upload-docs2');
    // const inputFile3 = document.getElementById('input-upload-docs3');
    // const fileData1 = inputFile1.files[0];
    // const fileData2 = inputFile2.files[0];
    // const fileData3 = inputFile3.files[0];


    // frmData.append('fileData1', fileData1);
    // frmData.append('fileData2', fileData2);
    // frmData.append('fileData3', fileData3);

    //disables upload button
    // inputFile1.disabled = true;
    //     inputFile2.disabled = true;
        // inputFile3.disabled = true;
    document.getElementById('btn-upload').disabled = true;

    $.ajax({
        method:'post',
        url:'upload_file.php',
        dataType: 'script',
        contentType: false,
        processData: false,
        cache: false,
        data: frmData
    }).done((data) => {
        if(data == 1){
            $.ajax({
                method:'post',
                url:'await_approval.php',
                data: {
                    message: 1,
                    btnVisible: false
                }
            }).done((data1) => {
                card_body.innerHTML = data1;
            });
        } else if (data == 2) {
            alert('Something went wrong with database');
        } else {
            alert(data);
        }

        // const card_body = document.querySelector('.card_body');
        // card_body.innerHTML = '';
    }).fail(err => alert(err))
    .always(()=>{
        // inputFile1.disabled = false;
        // inputFile2.disabled = false;
        // inputFile3.disabled = false;
        document.getElementById('btn-upload').disabled = false;
    });
});
//verify email
$(document).on('click','#btn-verify', () => {
    const enteredCode = $('#input-code').val();
    $.ajax({
        method:'post',
        url:'verify.php',
        data:{
            enteredCode: enteredCode,
            code: codeVerify
        }
    }).done((res) => {
        if(res == 1) {
            $.ajax({
                method:'post',
                url:'login_function.php',
                data:{
                    email: email,
                    password: pass
                }
            }).done((data) => {
                window.location.href = 'userindex.php';//proceed to login
            }).fail((err) => { 
                console.log(err);
                $('#btn-login').prop('disabled', false);
            });
        } else if (res == 0) {
            $('.span-alert-pos').attr('class','span-alert');
            $('.span-alert').html(`<div class="div-legaldocs">
            <span class="span-alert">Invalid code. Make sure you enter the code sent to your email.</span></div>`);
        } else {
            alert('Something went wrong. Please try again');
        }
    });
});

//phone 
$('#in-phone').on('keypress keydown keyup', () => {
// Allow only backspace and delete
if ( event.keyCode == 46 || event.keyCode == 8 ) {
    // let it happen, don't do anything
}
else {
    // Ensure that it is a number and stop the keypress
    if (event.keyCode < 48 || event.keyCode > 57 ) {
        event.preventDefault(); 
    }   
}
});

//apply to all
const ApplyToAll = (el, day_) => {
  if (el.target.checked) {
    const fr = $(`#from-${day_}`).val();
    const to = $(`#to-${day_}`).val();
    const all = document.querySelectorAll(".chk-days");
    const c = all.length;
    for (let i = 0; i < c; i++) {
      const chkd = all[i].checked;
      const daynum = all[i].getAttribute("data-dayno");
      if (chkd) {
        $(`#from-${daynum}`).val(fr);
        $(`#to-${daynum}`).val(to);
      }
    }
  }
};

$(document).on('hover','.day_helper', () => {
    $(this).css('visibility','visible');
});
let serviceList = [];
$('#btn-add').click(()=>{
    const servName = $('#in-serv').val();
    const servPrice = $('#in-price').val();
    const c = serviceList.indexOf(servName);
    const exists = c > 0 ? true:false;
    if(!exists){
        serviceList.push({
            servName: servName,
            servPrice: servPrice 
        });
    }

    $('#in-serv').val('');
    $('#in-price').val('');
    ServiceAdded();
    
});

const ServiceAdded = () => {
    $('#services-container').empty();
    let y = 0;
    serviceList.forEach(s => {
        y++;
        $('#services-container').append(`<div class="added-service" id="servi-${y}"><span class='sname'>${s.servName}</span><span class='sprice'>&#8369;${s.servPrice}</span><button class="remove-serv" onclick="ServiceRemove(this,'${y}','${s.servName}')">&times;</button></div>`);
    });

}

const ServiceRemove = (el,id, sname) => {
    // const par = el.parentElement;
    // const id_ = par.getAttribute('id');

    // $(id_).remove();
    const i = serviceList.findIndex(x => x.servName === sname);
    serviceList.splice(i, 1);
    ServiceAdded(serviceList);
}