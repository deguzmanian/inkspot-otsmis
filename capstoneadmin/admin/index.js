$(document).ready(() => {
    // alert('hello');
    // ServiceAdded();
    // GetProducts();
    GetSchedules();
});

let serviceList = [];
$('#btn-add').click(()=>{
    const servName = $('#in-serv').val();
    const servPrice = $('#in-price').val();
    // const c = serviceList.indexOf(servName);
    // const exists = c > 0 ? true:false;
    // if(!exists){
    //     serviceList.push({
    //         servName: servName,
    //         servPrice: servPrice 
    //     });
    // }
    $.ajax({ 
        method:'post',
        url:'addservice.php',
        data:{
            name_:servName,
            price: servPrice
        }
    }).done((res) => {
        const u = parseInt(res);
        if(u > 0){
            $('#in-serv').val('');
            $('#in-price').val('');
            ServiceAdded();
        } else {
            alert('something went wrong. try again');
        }
    });
});

const ServiceAdded = () => {
    $('#services-container').empty();
    $('#sel-service').empty();
    $.ajax({
        method:'get',
        url:'getservices.php',
        dataType:'json'
    }).done((res) => {
        const c = res.length;
        for(let i = 0; i < c; i++){
            const y = i + 1;
            $('#services-container').append(`<div class="added-service" id="servi-${y}"><span class='sname'>${res[i].name_}</span><span class='sprice'>&#8369;${res[i].price}</span><button class="remove-serv" onclick="ServiceRemove(this,'${res[i].id}')">&times;</button></div>`);
            $('#sel-service').append(`<option value="${res[i].id}">${res[i].name_}</option>`);
        }
    }).fail((err) => {
        console.log(err);
    });
}

const ServiceRemove = (el,id ) => {
    $.ajax({
        method:'post',
        url:'deleteservice.php',
        data:{id:id}
    }).done((res) => {
        const u = parseInt(res);
        if(u > 0) {
            ServiceAdded();
        }
    });
}


$('#btn-add-prod').click(() => {
    const prodn = $('#in-prod').val();
    const sto = $('#in-stocks').val();
    const serv = $('#sel-service').val();
    $.ajax({
        method:'post',
        url:'addproduct.php',
        data:{
            name_: prodn,
            stocks: sto,
            service: serv
        }
    }).done((res) => {
        GetProducts();
    });
});

const GetProducts = () => {
    $('#prods-container').empty();
    $.ajax({
        method:'get',
        url:'getproducts.php',
        dataType:'json'
    }).done((res) => {
        const c = res.length;
        for(let i = 0; i < c; i++){
            const y = i + 1;
            $('#prods-container').append(`<div class="added-service" onclick="ProductUpdate('prod-${y}','${res[i].id}','${res[i].name_}','${res[i].stocks}')" id="prod-${y}"><span class='sname'>${res[i].name_} -&gt; ${res[i].serv}</span><span class='sprice'>${res[i].stocks}</span><button class="remove-serv" onclick="ProductRemove(this,'${res[i].id}')">&times;</button></div>`);
        }
    });
}

const ProductRemove = (el,id) => {
    $.ajax({
        method:'post',
        url:'deleteproduct.php',
        data:{id:id}
    }).done((res) => {
        const u = parseInt(res);
        if(u > 0) {
            GetProducts();
        }
    });
}

const ProductUpdate = (elId, id, prod, sto) => {
    const cur = $('.prod-selected').attr('id');

    if(cur === elId){
        $('#in-prod').val('');
        $('#in-stocks').val('');
        $('#btn-add-prod').text('+');
        $(`#${elId}`).removeClass('prod-selected');
    } else {
    $(`#prods-container > div`).removeClass('prod-selected');
    $(`#${elId}`).addClass('prod-selected');

    
    $('#in-prod').val(prod);
    $('#in-stocks').val(sto);
    $('#btn-add-prod').text('Update');
    $(`#sel-service > option[value="${id}"]`).prop('selected', true);
    }
}

const GetSchedules=()=>{
    $.ajax({
        method:'get',
        url:'getschedules.php',
        dataType:'json'
    }).done((res) => {
        const c = res.length;
  
        for(let i=0;i<c;i++){
            const fr = res[i].from_;
            const t =res[i].to_;
            const day = res[i].day_;
            if(day === '0') {
                $(`#chk-0`).prop('checked',true);
                $(`#from-0,#to-0`).prop('disabled',false);

                $(`#to-0`).val(t);
                $(`#from-0`).val(fr);
            } else {

                $(`#chk-${day}`).prop('checked',true);

                $(`#from-${day}`).val(fr);
                $(`#to-${day}`).val(t);

                $(`#from-${day}`).prop('disabled', false);
                $(`#to-${day}`).prop('disabled', false);
            }
            // $('.d7 .day_time').find
        }
    
    });
}

let days = [];
const SelectDay = (e, day, dayName) => {
  const isChecked = e.checked;
  const g = document.querySelectorAll('.chk-days');
  g.forEach(i => {
    i.checked = false;
  });
  if(!isChecked){

        $('.d7').show();
      } else {
        $('.d7').hide();
      }

  

//    $('#hahaha').text(JSON.stringify(days));
  //   console.log(days);
  $(`#from-${day},#to-${day}`).prop("disabled", !isChecked);
}

const SelectWkDay = (e, day, dayName) => {
    const isChecked = e.checked;
    if(isChecked){
        $(`#chk-0`).prop('checked',false);
        $(`#from-0,#to-0`).prop('disabled',true);
    }
    $(`#from-${day},#to-${day}`).prop("disabled", !isChecked);
}

const UpdateSchedule = () => {
    const always = $('#chk-0').prop('checked');
    let scheds = [];

    // if(always) {
    //     scheds.push({
    //         void: 0,
    //         day_: '0',
    //         from_: $('#from-0').val(),
    //         to_:$('#to-0').val()
    //     });
    // } else {
    const weekdays = document.querySelectorAll('.chk-days');
   if(always){
    scheds.push({
        void: (always ? 0:1),
        day_: '0',
        from_: $('#from-0').val(),
        to_:$('#to-0').val()
    });
   }
    weekdays.forEach(i => {
        
        // if(i.checked) {
            const dayno = i.getAttribute('data-dayno');
            const from = document.getElementById(`from-${dayno}`).value;
            const to = document.getElementById(`to-${dayno}`).value;
            scheds.push({
                void: (i.checked ? 0:1),
                day_: dayno,
                from_: from,
                to_:to
            });
        // }
    });
// }

    $.ajax({
        method:'post',
        url:'updatesched.php',
        dataType:'json',
        data:{
            days:JSON.stringify(scheds)
        }
    }).done((res) => {
        location.reload();
    });
}