const ServiceRemove = (el,id ) => {
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