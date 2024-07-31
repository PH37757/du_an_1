
<h1 class="my-5 text-center">Danh sách sản phẩm </h1>
<div class="container text-center">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    

    <?php foreach($list_cate as $key => $value){
            extract($value);?>
           <div class="col">
        <a href="index.php?act=detail_pro&id=<?php echo $id?>">
            <div><img class="border-4" style="width:100%; height:382px " src="../../upload/<?=$img?>" alt=""></div>
        </a>
        <div class="">
            <p class=""><?=$name_pro?></p>
            <p class="">Tees & Polo shirts</p>
            <p class="vnd"><?=$price?> đ</p>
            
            <div class="hidden group-hover:block ml-[-183px] mt-[50px]">
    <form action="index.php?act=addtocart" method="post">
        <input type="hidden" name="img" value="<?=$img?>">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="price" value="<?=$price?>">
        <input type="hidden" name="name_pro" value="<?=$name_pro?>">
        <input type="hidden" name="description" value="<?=$description?>">
  
        <input class="btn btn-success" type="submit" name="addtocart" value="ADD TO CART">
    </form>
</div>
        </div>
    </div>
        <?php }?>
</div>
</div>