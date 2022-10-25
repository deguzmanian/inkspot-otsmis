
const ServiceAdded = () => {
    $('#services-container').empty();
    $('#sel-service').empty();
    $.ajax({
        method:'get',
        url:'getservices.php',
        dataType:'json'
    }).done((res) => {
        location.reload();
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
            location.reload();
        }
    });
}
const UpdateServices = (id) => {
    const pr = $(`#in-price-${id}`).val();
    $.ajax({
        method:'post',
        url:'updateservice.php',
        data:{
            id:id,
            price: pr
        }
    }).done((res) => {
        const u = parseInt(res);
        if(u > 0) {
            location.reload();
        }
    });
}

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
