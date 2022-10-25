// $(document).ready(()=>{
//     alert('');
// });
const ViewShop = (obj, id, name) => {
    // e.preventDefault();
 window.location.href = `shopdetails.php?shopid=${id}&name_=${name}`;

// obj.disabled = true;
//     $.ajax({
//         method:'post',
//         url:'shopdetails.php',
//         data:{
//             shopid:id,
//             name_:name
//         }
//     }).then((res) => {
//         $('html').html(res);
//         obj.disabled = false;
//     }).fail(err => alert(err)).always(()=>{obj.disabled = false;});
}
