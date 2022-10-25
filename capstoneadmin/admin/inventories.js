
$(document).ready(()=>{
    ServiceAdded();
    
})


const UpdateStocks = (id) => {
    const sto = $(`#in-stocks-${id}`).val();
    $.ajax({
        method:'post',
        url:'updatestocks.php',
        data:{id:id, stocks:sto}
    }).done((res) => {
        if(parseInt(res) > 0) {
            location.reload();
        } else {
            alert(res);
        }
    });
}

const DeleteStocks = (el,id ) => {
    $.ajax({
        method:'post',
        url:'deleteproduct.php',
        data:{id:id}
    }).done((res) => {
        const u = parseInt(res);
        if(u > 0) {
            location.reload();
        }
    });
}
const ServiceAdded = () => {
    $('#services-container').empty();
    $('#sel-service').html('<option value="0" selected>---select service affected---</option>');
    $.ajax({
        method:'get',
        url:'getservices.php',
        dataType:'json'
    }).done((res) => {
        // res = JSON.parse(res);
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
        location.reload();
    });
});

