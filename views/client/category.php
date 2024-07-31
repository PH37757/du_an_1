
<h1 class="my-5 text-center">Danh Mục Các Sản Phẩm</h1>
<div class="container text-center">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    

    <?php foreach($list_cate as $key => $value){
            extract($value);?>
           <div class="col">
        <a href="index.php?act=list_category&id=<?php echo $id?>">
            <div><img class="border-4 rounded-circle" style="width:100%; height:382px " src="../../upload/<?=$img?>" alt=""></div>
        </a>
        <div class="">
            <h2 class=""><?=$name_cate?></h2>
        </div>
    </div>
        <?php }?>
</div>
</div>