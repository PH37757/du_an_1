<div class="container text-center">
    <h1 class="my-5">Sản phẩm yêu thích</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <?php foreach($list_products as $value){
            extract($value);?>
           <div class="col ">
        <a href="http://localhost/duan1_nhom8-main/views/client/detail_product.php">
            <div><img class="border-4 mt-3" style="width:100%; height:382px " src="../../img/<?=$img?>" alt=""></div>
        </a>
        <div class="">
            <p class=""><?=$name_pro?></p>
            <p class="">Tees & Polo shirts</p>
            <p class=""><?=$price?> đ</p>
            
            <input class="btn btn-success" type="submit" name="addtocard" value="ADD TO CARD">
        </div>
    </div>
        <?php }?>
</div>
</div>