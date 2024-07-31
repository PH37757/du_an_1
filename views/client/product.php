
<h1 class="my-5 text-center">Sản Phẩm Mới Nhất</h1>
<div class="container text-center">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    

    <?php foreach($list_products as $key => $value){
            extract($value);?>
           <div class="col">
        <a href="index.php?act=detail_pro&id=<?php echo $id?>">
            <div><img class="border-4  border mt-5" style="width:100%; height:382px " src="../../upload/<?=$img?>" alt=""></div>
        </a>
        <div class="">
            <p class=""><?=$name_pro?></p>
            <!-- <p class="">Tees & Polo shirts</p> -->
            <p class="vnd"><?=$price?></p>
            
            <div class="hidden group-hover:block ml-[-183px] mt-[50px]">
       
    <form action="index.php?act=addtocart" method="post">
        <input type="hidden" name="img" value="<?=$img?>">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="price" value="<?=$price?>">
        <input type="hidden" name="name_pro" value="<?=$name_pro?>">
        <input type="hidden" name="description" value="<?=$description?>">
  
        <input class="btn btn-success" type="submit" onclick="return addCart()" name="addtocart" value="ADD TO CART">
    </form>
</div>

            <!-- <input class="btn btn-success" type="submit" name="addtocard" value="ADD TO CARD"> -->
        </div>
    </div>
        <?php }?>
</div>
</div>