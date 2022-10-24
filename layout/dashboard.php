<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-6">
                    <h3>Promotion</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Pages</li>
                    </ol>
                </div>
                <div class="col-6">
                    <!-- Bookmark Start-->
                    <div class="bookmark pull-right">
                        <ul>
                            <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                            <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                            <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                            <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                                <form class="form-inline search-form" action="#" method="get">
                                    <div class="form-group form-control-search">
                                        <div class="Typeahead Typeahead--twitterUsers">
                                            <div class="u-posRelative">
                                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search.." name="q" title="" autofocus>
                                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                                            </div>
                                            <div class="Typeahead-menu"></div>
                                            <script id="result-template" type="text/x-handlebars-template">
                                                <div class="ProfileCard u-cf">                        
                                <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                                <div class="ProfileCard-details">
                                <div class="ProfileCard-realName">{{name}}</div>
                                </div>
                                </div>
                              </script>
                                            <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- Bookmark Ends-->
                </div>

            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="owl-carousel owl-theme" id="owl-carousel-cus">
            <div class="item"><img src="assets/images/slider/1.jpg" alt=""></div>
            <div class="item"><img src="assets/images/slider/2.jpg" alt=""></div>
            <div class="item"><img src="assets/images/slider/3.jpg" alt=""></div>
            <div class="item"><img src="assets/images/slider/4.jpg" alt=""></div>
            <div class="item"><img src="assets/images/slider/5.jpg" alt=""></div>
            <div class="item"><img src="assets/images/slider/6.jpg" alt=""></div>
            <div class="item"><img src="assets/images/slider/7.jpg" alt=""></div>
            <div class="item"><img src="assets/images/slider/8.jpg" alt=""></div>
            <div class="item"><img src="assets/images/slider/9.jpg" alt=""></div>
            <div class="item"><img src="assets/images/slider/10.jpg" alt=""></div>
            <div class="item"><img src="assets/images/slider/11.jpg" alt=""></div>
        </div>
        <br>
    </div>
    <img class="img-fluid w-100" src="assets/images/blog/blog-single.jpg" alt="blog-main">
    <br>
    <br>
    <br>
    <div class="product-wrapper-grid">
        <div class="row">

            <?php

            $sql = $conn->query("SELECT * FROM tb_product");
            while ($fet = $sql->fetch_object()) {
            ?>

                <!-- Card Item start -->

                <div class="col-xl-2 col-sm-6 xl-4">
                    <div class="card">
                        <div class="product-box">
                            <div class="product-img"><img class="img-fluid" src="assets/images/ecommerce/<?php echo $fet->pro_pic; ?>" alt="" data-original-title="" title="">
                                <div class="product-hover">
                                    <ul>
                                        <li>
                                            <button class="btn" type="button" data-original-title="" title=""><a href="index.php?p=product_page&pro_id=<?php echo $fet->pro_id ?>" style="color:black"><i class="icon-shopping-cart"></a></i></button>
                                        </li>
                                        <li>
                                            <button class="btn" type="button" data-original-title="" title=""><a href="index.php?p=product_page&pro_id=<?php echo $fet->pro_id ?>" style="color:black"><i class="icofont icofont-law-alt-2"></a></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h4><?php echo $fet->pro_name; ?></h4>

                                <p><?php
                                    if (strlen($fet->pro_detail) > 20) {
                                        echo substr($fet->pro_detail, 0, 20) . " ...";
                                    } else {
                                        echo $fet->pro_detail;
                                    }
                                    ?></p>
                                <div class="product-price">
                                    <h5>$<?php echo $fet->pro_price; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Item end -->
            <?php } ?>

        </div>
    </div>
</div>


<!-- Page Body 2 start -->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-6">
                    <h3>Promotion</h3>
                    <!-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Pages</li>
                    </ol> -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php

        $sql = $conn->query("SELECT * FROM tb_product");
        while ($fet = $sql->fetch_object()) {
            
        ?>

            <div class="col-xl-2 col-sm-6 xl-4">
                <div class="card">
                    <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="assets/images/ecommerce/<?php echo $fet->pro_pic; ?>" alt="" data-original-title="" title="">
                            <div class="product-hover">
                                <ul>
                                    <li>
                                        <button class="btn" type="button" data-original-title="" title=""><a href="index.php?p=product_page&pro_id=<?php echo $fet->pro_id ?>" style="color:black"><i class="icon-shopping-cart"></a></i></button>
                                    </li>
                                    <li>
                                        <button class="btn" type="button" data-original-title="" title=""><a href="index.php?p=product_page&pro_id=<?php echo $fet->pro_id ?>" style="color:black"><i class="icofont icofont-law-alt-2"></a></i></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details">
                            <h4><?php echo $fet->pro_name; ?></h4>

                            <p><?php
                                if (strlen($fet->pro_detail) > 20) {
                                    echo substr($fet->pro_detail, 0, 20) . " ...";
                                } else {
                                    echo $fet->pro_detail;
                                }
                                ?></p>
                            <div class="product-price">
                                <h5>$<?php echo $fet->pro_price; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
<!-- Page Body 2 End -->