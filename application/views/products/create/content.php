<!-- ================ Subscribe section start ================= -->
<section class="lattest-product-area pb-40 category-list">
    <div class="container">

        <h3>สร้างสินค้า</h3>
        <form method="post" action="<?php echo base_url('products/save'); ?>">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>ชื่อสินค้า</label><span class="text-danger"> *</span>
                                <input type="text" class="form-control" name="name" placeholder="ชื่อสินค้า" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ราคาสินค้า/ชิ้น</label><span class="text-danger"> *</span>
                                <input type="number" class="form-control" name="price" placeholder="ราคาสินค้า/ชิ้น" min="0" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>หมวดหมู่</label><span class="text-danger"> *</span></br>
                                <select class="form-control" name="categories" required>
                                    <option value="">เลือกหมวดหมู่สินค้า</option>
                                    <?php foreach ($categories as $key => $row) { ?>
                                        <option value="<?php echo $row['_id'] ?>"><?php echo $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-center"><button type="submit" class="btn btn-warning"><i class="far fa-save"> </i> บันทึก</button></p>
        </form>
    </div>
</section>
<!-- ================ Subscribe section end ================= -->