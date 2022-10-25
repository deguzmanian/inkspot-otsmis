<?php
// echo ($_POST["btnVisible"] ? 1:0);
$msg = "";
if($_POST["message"] == 0)
    $msg = "Account awaiting approval. Please upload license certificate or business permit as a proof of your business.";
    
else if ($_POST["message"] == 1)
    $msg = "Account awaiting approval. Please wait while the admin reviews your submitted document and details.";
    
else 
   $msg=  "Your registration has been denied. Please try again";
    

// $msg = $_POST["message"] == 0 ? "Account awaiting approval. Please upload certificate or any legal document as a proof of your business." : $_POST["message"];
$dat = "";
$dat .= '<div class="div-legaldocs">
    <span class="span-alert">'.$msg.'</span>';
    if($_POST["btnVisible"] == "true"){
        $dat .= '<div id="uptools" style="display:flex;flex-direction: column;row-gap:10px;">
            <input type="file" name="doc_upload1" id="input-upload-docs1" accept=".pdf,.jpg,.png,.jpeg,.docx" />
            <button id="btn-upload">Upload</button>
        </div>';
    }

$dat .= "</div>";
echo $dat;


?>