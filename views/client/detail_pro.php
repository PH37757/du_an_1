<?php foreach ($list_products as $key => $value) {
    extract($value); ?>
    <!-- content -->
    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class=" mb-3 d-flex justify-content-center">
                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="#">
                            <img style="max-width: 100%; max-height: 70vh; margin: auto;" class="rounded-4 fit" src="../../upload/<?= $img ?>" />
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <?php foreach ($list_img_library as $key => $value) {
                            extract($value); ?>
                            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="" class="item-thumb">
                                <img width="60" height="60" class="rounded-2" src="../../img_library/<?= $path ?>" />
                            </a>
                        <?php } ?>
                    </div>
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            <?= $name_pro ?>
                        </h4>
                        <div class="d-flex flex-row my-3">
                            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i><?= $count ?> sản phẩm</span>
                            <span class="text-success ms-2">Có Sẵn</span>
                        </div>

                        <div class="mb-3">

                            <span class="h5">Giá : </span>
                            <span class="h5 vnd"><?= $price ?>đ</span>
                        </div>

                        <p>
                            Mô Tả : <?= $description ?>
                        </p>

                        <div class="row">
                            <!-- <dt class="col-3">Kiểu dáng:</dt>
                            <dd class="col-9">Áo Phông</dd>

                            <dt class="col-3">Màu sắc</dt>
                            <dd class="col-9">Đen</dd>

                            <dt class="col-3">Chất liệu</dt>
                            <dd class="col-9">Cotton</dd> -->

                            <dt class="col-3">Thương Hiệu</dt>
                            <dd class="col-9">Clowz</dd>
                        </div>

                        <hr />

                        <div class="row mb-4">
                            <div class="col-md-4 col-6">
                                <label class="mb-2">Size</label>
                                <select class="form-select border border-secondary" style="height: 35px;">
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                </select>
                            </div>
                            <!-- col.// -->
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Số Lượng</label>
                                <div class="input-group mb-3" style="width: 170px;">
                                    <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />

                                    <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                        <!-- <a href="index.php?act=checkout" ><button class="btn btn-warning shadow-0" type="submit" name="muangay">Mua ngay</button></a> -->
                        <div class="ml-3 hidden group-hover:block">
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="img" value="<?= $img ?>">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="hidden" name="price" value="<?= $price ?>">
                                <input type="hidden" name="name_pro" value="<?= $name_pro ?>">
                                <input type="hidden" name="description" value="<?= $description ?>">

                                <input class="btn btn-success" type="submit" name="addtocart" value="ADD TO CART">
                            </form>
                        </div></div>
                    </div>
                </main>
            </div>
        <?php } ?>


        </div>
        </div>
    </section>
    <!-- content -->

    <section class="bg-light border-top py-4">
        <div class="container">
            <div class="row gx-4">
                <div class="col-lg-8">
                    <section style="">
                        <div class="container ">
                            <h1>Bình Luận</h1>
                            <div class="row d-flex justify-content-center">
                                <div class="">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-start align-items-center">
                                                <img class="rounded-circle shadow-1-strong me-3" src="../../upload/<?=$img?>" alt="avatar" width="60" height="60" />
                                        </div>
                                        <!-- <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                                            <div class="d-flex flex-start w-100">
                                                <img class="rounded-circle shadow-1-strong me-3" src="https://bizweb.dktcdn.net/100/414/728/products/5-4-e25eb73a-1779-4ded-a53a-90594fe87c4a.jpg?v=1695699917960" alt="avatar" width="40" height="40" />
                                                <div class="form-outline w-100">
                                                    <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
                                                </div>
                                            </div>
                                            <div class="float-end mt-2 pt-1">
                                                <button type="button" class="btn btn-primary btn-sm">Bình luận</button>
                                                <button type="button" class="btn btn-outline-primary btn-sm">Hủy bỏ</button>
                                            </div>
                                        </div> -->
                                        <iframe src="binhluan/binhluan.php?idpro=<?=$_GET['id']?>" width="100%" frameborder="0" style="border: none; height: 70vh;"></iframe>

                                             
</iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4">
                    <div class="px-0 border rounded-2 shadow-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sản Phẩm Liên Quan</h5>

                                <?php foreach ($related_products as $key => $list) {
                                    extract($list);
                                ?>
                                    <div class="d-flex mb-3">
                                        <a href="index.php?act=detail_pro&id=<?php echo $id ?>" class="me-3">
                                            <img src="../../upload/<?= $img ?>" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                        </a>
                                        <div class="info">
                                            <a href="#" class="nav-link mb-1">
                                                <?= $name_pro ?> <br />
                                                Clowz
                                            </a>
                                            <strong class="text-dark">Giá : <?= $price ?></strong>
                                        </div>
                                    </div>
                                <?php } ?>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>