<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <title>Cuba - Premium Admin Template</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/">
  <link rel="stylesheet" type="text/css" href="../../assets/css/fontawesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
  <!-- for development  -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <!-- for production   -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script> -->
  <!-- <script src="assets/js/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="../assets/js/sweetalert2.min.css"> -->
</head>

<body>
<!-- <div id="register"> -->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <!-- login page start-->
        <div class="authentication-main no-bg">
          <div class="row">
            <div class="col-md-12">
              <div class="auth-innerright">
                <div class="authentication-box">
                  <div class="mt-4">
                    <div class="card-body">
                      <div class="cont text-center">
                        <div>
                          <form class="theme-form">
                            <h4>LOGIN</h4>
                            <h6>Enter your Username and Password</h6>
                            <div class="form-group">
                              <label class="col-form-label pt-0">Your Name</label>
                              <input class="form-control" type="text" required="">
                            </div>
                            <div class="form-group">
                              <label class="col-form-label">Password</label>
                              <input class="form-control" type="password" required="">
                            </div>
                            <div class="checkbox p-0">
                              <input id="checkbox1" type="checkbox">
                              <label for="checkbox1">Remember me</label>
                            </div>
                            <div class="form-group row mt-3 mb-0">
                              <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                            </div>
                            <div class="login-divider"></div>
                            <div class="social mt-3">
                              <div class="row btn-showcase">
                                <div class="col-md-4 col-sm-6">
                                  <button class="btn social-btn btn-fb">Facebook</button>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                  <button class="btn social-btn btn-twitter">Twitter</button>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                  <button class="btn social-btn btn-google">Google + </button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="sub-cont">
                          <div class="img">
                            <div class="img__text m--up">
                              <h2>New User?</h2>
                              <p>Sign up and discover great amount of new opportunities!</p>
                            </div>
                            <div class="img__text m--in">
                              <h2>One of us?</h2>
                              <p>If you already has an account, just sign in. We've missed you!</p>
                            </div>
                            <div class="img__btn"><span class="m--up">Sign up</span><span class="m--in">Sign in</span></div>
                          </div>
                          <div>
                            <form class="theme-form">
                              <h4 class="text-center">NEW USER</h4>
                              <h6 class="text-center">Enter your Username and Password For Signup</h6>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input class="form-control" type="text"  placeholder="First Name">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Last Name">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email">
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="text"  placeholder="User Name">
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="password"  placeholder="Password">
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="password" placeholder="Password Confirm">
                              </div>
                              <div class="row">
                                <!-- <div v-if="checkData()">
                                <div class="col-sm-4">
                                  <button class="btn btn-primary" type="submit" @click.prevent="send_signin()">
                                    Sign Up
                                  </button>
                                </div>
                              </div>
                              <div v-else>
                                <div class="col-sm-4">
                                  <button class="btn btn-primary" type="submit">
                                    Sign Up
                                  </button>
                                </div>
                              </div> -->
                                <div class="col-sm-4">
                                  <button class="btn btn-primary" type="submit">Sign Up</button>
                                </div>
                                <div class="col-sm-8">
                                  <div class="text-left mt-2 m-l-20">Are you already user?  <a class="btn-link text-capitalize" href="login.html">Login</a></div>
                                </div>
                              </div>
                              <div class="form-divider"></div>
                              <div class="social mt-3">
                                <div class="row btn-showcase">
                                  <div class="col-sm-4">
                                    <button class="btn social-btn btn-fb">Facebook</button>
                                  </div>
                                  <div class="col-sm-4">
                                    <button class="btn social-btn btn-twitter">Twitter</button>
                                  </div>
                                  <div class="col-sm-4">
                                    <button class="btn social-btn btn-google">Google +</button>
                                  </div>
                                </div>
                              </div>
                            </form>
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
        <!-- login page end-->
      </div>
    </div>
  <!-- </div> -->

  <!-- latest jquery-->
  <script src="../../assets/js/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap js-->
  <script src="../../assets/js/bootstrap/popper.min.js"></script>
  <script src="../../assets/js/bootstrap/bootstrap.js"></script>
  <!-- feather icon js-->
  <script src="../../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../../assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- Sidebar jquery-->
  <script src="../../assets/js/sidebar-menu.js"></script>
  <script src="../../assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="../../assets/js/login.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../../assets/js/script.js"></script>
  <!-- login js-->
  <!-- Plugin used-->
  <!-- Axios CDN-->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    var reg = new Vue({
      el: "#register",
      data: {
        form_signin: {
          fname: '',
          lname: '',
          email: '',
          username: '',
          password: '',
          password_confirm: '',
        }
      },
      methods: {
        // send_signin() {
        //   if (this.form.signin.password == this.form.password_confirm) {
        //     axios.post("../api/api_user.php?ac=reg", {
        //       data: this.form_signin
        //     }).then((res) => {
        //       console.log(res);
        //       let {
        //         status,
        //         msg
        //       } = res.data;
        //       if (status) {
        //         Swal.fire({
        //           position: 'center',
        //           icon: 'success',
        //           title: msg,
        //           showConfirmButton: false,
        //           timer: 1500
        //         });
        //         window.location.replace('index.php');
        //       } else {
        //         Swal.fire({
        //           icon: 'error',
        //           title: msg,
        //           text: ''
        //         })
        //       }
        //     })
        //   } else {
        //     Swal.fire({
        //       icon: 'error',
        //       title: 'รหัสผ่านไม่ตรงกัน',
        //       text: 'โปรดตรวจสอบรหัสผ่านให้ตรงกัน'
        //     })
        //   }

        // },
        // checkData() {
        //   console.log('ok')
        //   if (this.form_signin.fname != '' && this.form_signin.lname != '' && this.form_signin.email != '' && this.form_signin.username != '' && this.form_signin.password != '' && this.form_signin.password_confirm != '') {
        //     return true;
        //   } else {
        //     return false;
        //   }
        // }
      },
      mounted() {
        console.log("Hello Vue ");
      }
    });
  </script>
</body>

</html>