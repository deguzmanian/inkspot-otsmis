$(document).ready(()=>{
    GetPendingAccounts();
});
let userId=0;

$(document).on("click", "#btn-review", () => {
  $("#modal-bg").slideDown().css("display", "flex");
  userId = $("#btn-review").attr("data-userid");

  $.ajax({
    method: "post",
    dataType: "json",
    url: "getaccountdoc.php",
    data: { id: userId },
  })
    .done((data) => {
      document.querySelector(
        ".modal-htext"
      ).textContent = `${data.name}: document to be reviewed`;
      
      const files_ = data.doc.split(";");

      $("#doc-wraps").empty();
      for (let i = 1; i < files_.length; i++) {
        const file = `../uploads/documents/${files_[i]}`;
        const fileType = files_[i].split(".")[1];
        if (fileType === "pdf") {
          //pdf
          $("#doc-wraps").append(
            `<a href="${file}" target="_blank" style="font-size: 14pt;"><i class="fa fa-share"></i> Preview/Download PDF</a>`
          );
          // window.open(file,'_blank');
          // $('#doc-wraps').html(`<embed src="${file}" type="application/pdf" height="700px" width="500" style="pointer-events: none;" />`);
        } else {
          //images
          $("#doc-wraps").append(
            `<img src="${file}" class="img-doc" id="img-submitdoc"/>`
          );
        }
      }
    })
    .fail((err) => alert(err));
  // document.getElementById('modal-bg').style.display = 'flex';
});

document.getElementById('btn-close-modal').addEventListener('click', ()=>{
    GetPendingAccounts();
    $('#modal-bg').slideUp();
});


const GetPendingAccounts = () => {
    $.ajax({
        method:'get',
        url:'pendingaccounts.php'
    }).done((data) => {
        document.querySelector('#tbl-pending tbody').innerHTML = data;
    });
}

const accountConf = (x)=>{
    // const x = $($(this).attr('id')).attr('data-appr');

    $.ajax({
        method:'post',
        url:'approvedenyuser.php',
        data:{
            id:userId,
            approve: x
        }
    }).done((data) => {
        if(data == 1) {
            $('.modal-opt .btn_').fadeOut();
            $('.modal-opt').html((x == '1' ? '<span><i class="fa fa-check"></i> Account approved</span>' : '<span><i class="fa fa-times"></i> Account denied</span>'));
        } else {
            alert(data);
        }
    });
};