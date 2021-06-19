<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php';?>

<?php

 $brand = new brand();

 // if this form use post method then do
 if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Take value of adminUser and adminPass from form after click login
    $brandName = $_POST['brandName'];

    $insertBrand = $brand->insert_brand($brandName);  

 }
 ?> 

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Thêm thương hiệu mới</h2>

               <div class="block copyblock"> 
                 <?php 
                if(isset($insertBrand)){
                    echo $insertBrand;
                }
                ?> 
                 <form action="brandadd.php" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="brandName" placeholder="Nhập tên thương hiệu" class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>