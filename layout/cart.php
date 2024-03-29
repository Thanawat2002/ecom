<?php 
// session_destroy();
    if(isset($_REQUEST['ac']) && $_REQUEST['ac'] == 'remove_order') {
        // for($i=0; $i<count($_SESSION['chart']); $i++) {
            
        // }
        unset($_SESSION['chart'][$_REQUEST['index']]);
        $_SESSION['chart'] = array_values($_SESSION['chart']);
        var_dump($_SESSION['chart']);
    } else {

    }
?>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-6">
                    <div class="page-header-left">
                        <h3>Cart</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Ecommerce</li>
                        </ol>
                    </div>
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
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Cart</h5>
                    </div>
                    <div class="card-body cart">
                        <div class="order-history table-responsive wishlist">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th>Prdouct</th>
                                        <th>Prdouct Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php 
                                    $total = 0;
                                    for($i=0; $i<count($_SESSION['chart']); $i++){
                                    $query = $conn->query("SELECT * FROM tb_product WHERE pro_id = '".$_SESSION['chart'][$i]->pro_id."' ");
                                    $fet = $query->fetch_object();
                                    $total_price = ($fet->pro_price*$_SESSION['chart'][$i]->amount);
                                ?>
                                  
                                    <tr>
                                        <td><img class="img-fluid img-60" src="images/product/<?php echo $fet->pro_pic ?>" alt="#"></td>
                                        <td>
                                            <div class="product-name"><a href="#"><?php echo $fet->pro_name ?></a></div>
                                        </td>
                                        <td>$ <?php echo number_format($fet->pro_price,2) ?></td>
                                        <td>
                                            <fieldset class="qty-box">
                                                <div class="input-group">
                                                    <input class="touchspin text-center" type="text" value="<?php echo $_SESSION['chart'][$i]->amount; ?>">
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><a href="index.php?p=cart&ac=remove_order&index=<?php echo $i; ?>"> <i data-feather="x-circle"> </i></a></td>
                                        <td><?php echo number_format($total_price,2); ?></span></td>
                                    </tr>
                                    
                                <?php
                                    $total += $total_price;
                                } ?>

                                    <tr>
                                        <td class="total-amount" colspan="5">
                                            <h6 class="m-0"> <span class="f-w-600">Total Price:</span></h6>
                                        </td>
                                        <td><span><?php echo number_format($total,2); ?></span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><a class="btn btn-primary cart-btn-transform" href="#">continue shopping</a></td>
                                        <td><a class="btn btn-primary cart-btn-transform" href="#">check out</a></td>
                                    </tr>

</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>