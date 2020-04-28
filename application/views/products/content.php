<!-- ================ Subscribe section start ================= -->
<section class="lattest-product-area pb-40 category-list">
    <div class="container">

        <?php if($this->session->flashdata('success-msg')){ ?>
        <div class="alert alert-success" role="alert">
            บันทึกสำเร็จ
        </div>
        <?php } ?>
        <form method="get">
            <div class="row">
                <div class="col-md-2">
                    <a href="<?php echo base_url('products/create'); ?>" class="btn btn-success  btn-block"><i class="fas fa-plus-square"> </i> สร้างสินค้า</a>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="ค้นหาด้วยชื่อสินค้า" value="<?php echo $name; ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select class="form-control" name="categories_id">
                            <option value="">เลือกหมวดหมู่</option>
                            <?php foreach ($categories as $key => $row) { ?>
                                <option value="<?php echo $row['_id'] ?>" <?php echo ($categories_id == $row['_id']) ? 'selected' : ''; ?>><?php echo $row['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" name="search" class="btn btn-dark btn-block" value="search"><i class="fas fa-search"> </i> ค้นหาสินค้า</button>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ขื่อสินค้า</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">หมวดหมู่</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $key => $row) { ?>
                            <tr>
                                <th scope="row"><?php echo ($key + 1) ?></th>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo getCategoriesNameFromId($row['categories']['$oid']) ?></td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- ================ Subscribe section end ================= -->