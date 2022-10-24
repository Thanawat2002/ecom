<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-6">
                    <h3>Product list</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">ECommerce</li>
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
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Individual column searching (text inputs) </h5><span>The searching functionality provided by DataTables is useful for quickly search through the information in the table - however the search is global, and you may wish to present controls that search on specific columns.</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Details</th>
                                        <th>Amount</th>
                                        <th>Stock</th>
                                        <th>Start date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $sql = $conn->query("SELECT * FROM tb_categoty");
                                    // while ($fet = $sql->fetch_object()) {
                                    ?>

                                    <tr>
                                        <td><img src="../assets/images/ecommerce/product-table-1.png" alt=""></td>
                                        <td>
                                            <h6> Red Lipstick </h6><span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                        </td>
                                        <td>$10</td>
                                        <td class="font-success">In Stock</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <a class="btn btn-danger mr-3" href="index.php?p=edit_product">Delete</a>
                                            <a class="btn btn-success mr-3" href="index.php?p=edit_product">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="../assets/images/ecommerce/product-table-2.png" alt=""></td>
                                        <td>
                                            <h6> Pink Lipstick </h6>
                                            <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                        </td>
                                        <td>$10</td>
                                        <td class="font-primary">Low Stock</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <a class="btn btn-danger mr-3" href="index.php?p=edit_product">Delete</a>
                                            <a class="btn btn-success mr-3" href="index.php?p=edit_product">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="../assets/images/ecommerce/product-table-3.png" alt=""></td>
                                        <td>
                                            <h6> Gray Lipstick </h6>
                                            <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                                        </td>
                                        <td>$10</td>
                                        <td class="font-danger">out of stock</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <a class="btn btn-danger mr-3" href="index.php?p=edit_product">Delete</a>
                                            <a class="btn btn-success mr-3" href="index.php?p=edit_product">Edit</a>
                                        </td>
                                    </tr>
                                    <?php
                                    // } 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>