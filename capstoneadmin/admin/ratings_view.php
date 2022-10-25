<?php
    include('authentication.php');
    include('includes/header.php');
?>

<style>
    .review_container {
        width: 100%;
        padding: 10px 20px;
        box-sizing: border-box;
        margin: 0 auto 20px;
        border: 2px gray solid;
        border-radius: 15px;
    }
    .review_container .fa-star {
        color: #FDCC0D;
    }
    .reviewdBy p span {
        font-weight: bold;
        font-size: 15px;
        margin: 0 !important;
        line-height: 200%;
        text-align: right;
    }
    .reviewed_by p span {
        font-size: 18px;
    }
    .review_text p {
        font-size: 16px;
        margin: 0 !important;
        line-height: 200%;
    }
</style>

<div class="container-fluid px-4 mt-4">
    <h2 style="font-weight: bold">RATINGS</h2>
    <br/>
    <table class="table table-bordered" id="ratingsTbl">
        <thead>
            <?php 
                if($_SESSION['auth_role'] == '1') {
            ?>
            <tr  style="background-color: #FFB200">
                <th class="text-center">Reviewer Name</th>
                <th class="text-center">Review Message</th>
                <th class="text-center">Stars Given</th>
            </tr>
            <?php
                } else if ($_SESSION['auth_role'] == '2') {
            ?>
            <tr  style="background-color: #FFB200">
                <th class="text-center">Tattoo Shop</th>
                <th class="text-center">Reviewer Name</th>
                <th class="text-center">Review Message</th>
                <th class="text-center">Stars Given</th>
            </tr>
            <?php
                }
            ?>
        </thead>
        <tbody>
            <?php
                $whereShopId = '';
                if($_SESSION['shopId'] && $_SESSION['auth_role'] == '1'){
                    $reviewQuery = "SELECT reviews.user_name, reviews.user_review, reviews.user_rating
                    FROM `review_table` reviews WHERE reviews.shopid='".$_SESSION["shopId"]."'";
                }
                else if($_SESSION['auth_role'] == '2'){
                    $reviewQuery = "SELECT reviews.user_name, reviews.user_review, reviews.user_rating, shop.name as shopname FROM `review_table` reviews JOIN tattooshops shop ON reviews.shopid=shop.id ORDER BY shopname";
                }

                if ($result = $con->query($reviewQuery)) {
                    /* fetch associative array */
                    while ($row = $result->fetch_assoc()) {
                        if($_SESSION['auth_role'] == '1') {
                            echo '<tr>
                                <td>'.$row['user_name'].'</td>
                                <td>'.$row['user_review'].'</td>
                                <td class="text-center">'.$row['user_rating'].'</td>
                            </tr>';
                        }else if($_SESSION['auth_role'] == '2') {
                            echo '<tr>
                                <td>'.$row['shopname'].'</td>
                                <td>'.$row['user_name'].'</td>
                                <td>'.$row['user_review'].'</td>
                                <td class="text-center">'.$row['user_rating'].'</td>
                            </tr>';
                        }
                    }
                }else{
                    echo '<tr>
                        <td></td>
                        <td class="text-center">This shop has no reviews yet.</td>
                        <td></td>
                    </tr>';
                }
            ?>
        </tbody>
    </table>
</div>