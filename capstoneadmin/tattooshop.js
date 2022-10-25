$(document).ready(function(){
    $(document).on('click','#btn-sub', () => {
        const id = $('#btn-sub').attr('data-id');
const name = $('#btn-sub').attr('data-name');
        $.ajax({
            type:'post',
            url: 'shopdetails.php',
            dataType: 'json',
            data:{
                'shopid': id,
                'name_': name
            },
            success: function(data) {
                alert(data)
                window.location.href = `shopdetails.php?shopid=${id}&name_=${name}`;
            }
        })
    })
})