const card_body = document.querySelector('.card-body');
let codeVerify = 0;
//login button
document.getElementById('btn-login').addEventListener('click', () => {
    $('#btn-login').prop('disabled', true);
    const email = document.getElementById('input-email').value;
    const pass = document.getElementById('input-pass').value;
    const al = document.getElementById('div-alert');
    al.innerHTML = '';
    $.ajax({
        method:'post',
        url:'login_function.php',
        data:{
            email: email,
            password: pass
        }
    }).done((data) => {

        // alert(data);
        const y = data.substring(0,1);
        if(y == '1') {
            $('#btn-login').prop('disabled', false);
            al.style.display = 'block';
            al.innerHTML = 'Incorrect email!';
        } else if (y == '2') {
            $('#btn-login').prop('disabled', false);
            al.style.display = 'block';
            al.innerHTML = 'Incorrect password!';
        } else if (y == '3' || y == '4' || y == '5') {

            const roleAs = data.substring(1);
            const docUploaded = y == '3' ? true : false;
            let msg = 0;
            if(y == '3') msg = 1;
            else if (y == 4) msg = 0;
            else msg = 2;

            if(roleAs == '0') {//user
                codeVerify = Math.floor(1000 + Math.random() * 9000);
                $.ajax({
                    method:'post',
                    url:'email_verif.php',
                    dataType: 'json',
                    data: {
                        email: email,
                        code: codeVerify
                    }
                }).done((res) => {
                    console.log(res);
                    if(res.status === 'success') {
                    card_body.innerHTML = `<div class="div-legaldocs">
                <span class="span-alert-pos">We have sent a verification code to <b>${email}</b><br/> Please enter the code below to proceed.</span></div>
                <div class="wrap-verif">
                <input type="text" id="input-code" placeholder="Type code here" maxlength="4"/><button id="btn-verify" class="btn_">Verify</button>
                </div>`;
                    }
                }).fail((err) => {
                    console.log(err);
                });
            } else {//owner
                $.ajax({
                    method:'post',
                    url:'await_approval.php',
                    data: {
                        message: msg/*(docUploaded ? 1 : 0)*/,
                        btnVisible: !docUploaded/*(data == 3 ? false : true)*/
                    }
                }).done((data1) => {
                    card_body.innerHTML = data1;
                });
            }
        } else {
            const roleAs = data.substring(1);
            if(roleAs === '0'){
                window.location.href = 'userindex.php';
            } else {
                window.location.href = 'admin/index.php';
            }
            // window.location.href = `${(roleAs === '0' ? 'userindex' : 'admin/index')}.php`;//proceed to login
        }
        
    }).fail((err) => { 
        console.log(err);
        $('#btn-login').prop('disabled', false);
        al.style.display = 'block';
    });
});

//upload docs
$(document).on('click','#btn-upload', () => {
    const frmData = new FormData();
    const inputFile = document.getElementById('input-upload-docs');
    const fileData = inputFile.files[0];
    frmData.append('fileData', fileData);

    //disables upload button
    inputFile.disabled = true;
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
        inputFile.disabled = false;
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
            window.location.href = 'userindex.php';
        } else if (res == 0) {
            $('.span-alert-pos').attr('class','span-alert');
            $('.span-alert').html(`<div class="div-legaldocs">
            <span class="span-alert">Invalid code. Make sure you enter the code sent to your email.</span></div>`);
        } else {
            alert('Something went wrong. Please try again');
        }
    });
});