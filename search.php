<?php get_header() ?>

<div class="menus-wrapper">
    <section class="menu-searchbox">
        <div class="container">
            <?php echo get_search_form() ?>
        </div>
    </section>
    <section class="menu-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-wrapper">
                        <div class="sidebar-item">
                            <ul>
                                <li><a href="">เมนูเครื่องดื่ม</a></li>
                                <li><a href="">อาหารเช้า</a></li>
                                <li><a href="">เมนูคุณหนู</a></li>
                            </ul>
                        </div>
                        <p>บอกให้รู้เอาไว้ว่า ราคาและสินค้าอาจ แตกต่างกันในบางสาขา</p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="menu-content-wrapper">
                        <div class="menu-type">
                            <h3>คำที่คุณค้นหา: <?php echo  get_search_query(); ?></h3>
                          
                            <div class="menu-list">
                                <div class="menu-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/drink-1.jpg" alt="" class="menu-image">
                                    <p class="menu-name">ลาเต้ วิปปิ้งพอร์ตโต้</p>
                                    <p class="menu-description">วิปครีมสูตรพิเศษผสมกลิ่นมาร์ชแมลโลว์ด้านล่าง ราดด้วยซอสมอคค่า สลับชั้นด้วยกาแฟปั่น ท็อปด้วยวิปครีมมาร์ชแมลโลว์และมาร์ชแมลโลว์เต็มคำ</p>
                                    <div class="menu-action">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="menu-stock ">In Stock</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="menu-price">80 บาท</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/drink-2.jpg" alt="" class="menu-image">
                                    <p class="menu-name">ลาเต้ วิปปิ้งพอร์ตโต้</p>
                                    <p class="menu-description">วิปครีมสูตรพิเศษผสมกลิ่นมาร์ชแมลโลว์ด้านล่าง ราดด้วยซอสมอคค่า สลับชั้นด้วยกาแฟปั่น ท็อปด้วยวิปครีมมาร์ชแมลโลว์และมาร์ชแมลโลว์เต็มคำ</p>
                                    <div class="menu-action">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="menu-stock">In Stock</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="menu-price">80 บาท</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/drink-3.jpg" alt="" class="menu-image">
                                    <p class="menu-name">ลาเต้ วิปปิ้งพอร์ตโต้</p>
                                    <p class="menu-description">วิปครีมสูตรพิเศษผสมกลิ่นมาร์ชแมลโลว์ด้านล่าง ราดด้วยซอสมอคค่า สลับชั้นด้วยกาแฟปั่น ท็อปด้วยวิปครีมมาร์ชแมลโลว์และมาร์ชแมลโลว์เต็มคำ</p>
                                    <div class="menu-action">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="menu-stock">In Stock</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="menu-price">80 บาท</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/drink-3.jpg" alt="" class="menu-image">
                                    <p class="menu-name">ลาเต้ วิปปิ้งพอร์ตโต้</p>
                                    <p class="menu-description">วิปครีมสูตรพิเศษผสมกลิ่นมาร์ชแมลโลว์ด้านล่าง ราดด้วยซอสมอคค่า สลับชั้นด้วยกาแฟปั่น ท็อปด้วยวิปครีมมาร์ชแมลโลว์และมาร์ชแมลโลว์เต็มคำ</p>
                                    <div class="menu-action">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="menu-stock">In Stock</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="menu-price">80 บาท</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer() ?>