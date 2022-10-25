const ApproveAppointment = (id,phonenum, shopname, schedule) => {
    $.ajax({
        method:'POST',
        url:'../approveappoint.php',
        data: {id:id,phonenum:phonenum, shopname:shopname, schedule:schedule}
    }).then((res) => {
        const aff = parseInt(res);
        if(aff > 0){
            location.reload();
        } else {
            alert('Approve appointment?');
        }
    });
}
const CancelAppointment = (id, phonenum, shopname, schedule) => {
   
    $.ajax({
        method:'POST',
        url:'../deleteappointment.php',
        data: {id:id, phonenum:phonenum, shopname:shopname, schedule:schedule}
    }).then((res) => {
        const aff = parseInt(res);
        if(aff > 0){
            location.reload();
        } else {
            alert('Are your sure you want to cancel the appointment?');
        }
    });
}


