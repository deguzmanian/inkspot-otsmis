<?php
include('authentication.php');
include('middleware/superadminAuth.php');
include('includes/header.php');
?>
<style>
#modal-bg {
    display: none;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    /* opacity: 60%; */
    background: #000000a1;
    z-index: 10000;
    padding: 2% 0;
    overflow-y: auto;
}
.modal-bod {
    height: auto;
    width: auto;
    background: white;
    padding: 0 30px 20px 30px;
    border-radius: 3px;
    /* position: absolute; */
}
img.img-doc {
    max-height: 600px;
}
.modal-opt {
    margin-top: 15px;
    display: flex;
    column-gap: 10px;
    justify-content: flex-end;
}
.btn_ {
    border: none;
    padding: 10px 20px;
    font-size: 14pt;
    border-radius: 3px;
    color: white;
    cursor: pointer;
}
.btnpos {
    background-color: #2196f3;
}
.btnpos:hoveR{
    background-color: #006fc7;
}
.btnneg {
    background-color: #f44336;
}
.btnneg:hover{
    background-color: #ca2215;
}
.modal-cont {
    display: flex;
    flex-direction: column;
}
#btn-close-modal {
    align-self: flex-end;
    background: none;
    color: #f44336;
    padding: 0;
    font-size: 25pt;
}
#btn-close-modal:hover{
    color: black;
}
.modal-heads {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.modal-htext {
    font-size: 14pt;
    font-weight: bold;
}
#btn-review {
    background-color: #707070;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
}
.tr-admin{
    background-color: #ececec;
    color: grey;
}
#doc-wraps{
    display: flex;
    row-gap: 10px;
    flex-direction: column;
    align-items: center;
}
#doc-wraps > *:not(:last-child){
    border-bottom: solid 1px grey;
}
</style>
<div id="modal-bg">
    <div class="modal-bod">
        <div class="modal-cont">
            <div class="modal-heads">
                <span class="modal-htext"></span>
                <button id="btn-close-modal" class="btn_ btnskeletal">&times;</button>
            </div>
            <div id="doc-wraps">

            </div>
        </div>
        <div class="modal-opt">
            <button id="btn-approve" class="btn_ btnpos" onclick="accountConf(1)">Approve</button>
            <button id="btn-decline" class="btn_ btnneg" onclick="accountConf(2)">Deny</button>
        </div>
    </div>
</div>

<div class="container-fluid px-4">
    <h4 class="mt-4">Users</h4>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">

    <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card">

            <div class="card-header">
                <h4>PENDING ACCOUNTS
                    <a href="register-add.php" class="btn btn-primary float-end">Add Admin</a>
                </h4>              
            </div>
            <div class="card-body">

            <table id="tbl-pending" class="table table-bordered">
                <thead style="font-weight:bold;">
                    <tr style="background-color: #FFB200; text-align: center">
                        <td>User ID</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email</td>
                        <td>Phone Number</td>
                        <td>Role</td>
                       <td>Submitted document</td>
                        
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
            </div>

        </div>

    </div>
    </div>
</div>
<script src="pending.js" defer></script>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>