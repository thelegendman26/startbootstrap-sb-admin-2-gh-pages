<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Charts</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


</head>



<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Charts</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div id="page-wrapper" class="p-4">
            <div class="row">
              <div class="col-xl-12">
                <h1 class="page-header">Forms</h1>
              </div>
              <!-- /.col-xl-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-header">Basic Form Elements</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-6">
                        <form method="post" id="frm_test1" enctype="multipart/form-data">
                          <div class="form-group">
                            <label>Contract No.</label>
                            <input class="form-control">
                            <p class="form-text">Example block-level help text here.</p>
                          </div>
                          <div class="form-group">
                            <label>Text Input with Placeholder</label>
                            <input class="form-control" placeholder="Enter text">
                          </div>
                          <div class="form-group">
                            <label>Static Control</label>
                            <p class="form-control-plaintext">email@example.com</p>
                          </div>
                          <div class="form-group">
                            <label>File input</label>
                            <input type="file">
                          </div>
                          <div class="form-group">
                            <label>Text area</label>
                            <textarea class="form-control" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Checkboxes</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                Checkbox 1</label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                Checkbox 2</label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                Checkbox 3</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Inline Checkboxes</label>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> 1</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> 2</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> 3</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Radio Buttons</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="optionsRadios"
                                       id="optionsRadios1" value="option1"
                                       checked>
                                Radio 1</label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="optionsRadios"
                                       id="optionsRadios2" value="option2">
                                Radio 2</label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="optionsRadios"
                                       id="optionsRadios3" value="option3">
                                Radio 3</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Inline Radio Buttons</label>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio"
                                       name="optionsRadiosInline" id="optionsRadiosInline1"
                                       value="option1" checked> 1</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio"
                                       name="optionsRadiosInline" id="optionsRadiosInline2"
                                       value="option2"> 2</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio"
                                       name="optionsRadiosInline" id="optionsRadiosInline3"
                                       value="option3"> 3</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Selects</label>
                            <select class="form-control">
                              <option>มอเตอร์</option>
                              <option>หม้อแปลง</option>
                              <option>ตู้ไฟฟ้า</option>
                              <option>กล่องไฟ</option>
                              <option>สายไฟฟ้า</option>
                            </select>
                          </div>

                            <input type="submit" name="action" id="action" class="btn btn-success" value="เพิ่มข้อมูล"/>
                         <!-- <button type="submit" class="btn btn-outline-secondary bg-white text-dark">
                            Submit Button
                          </button>-->
                          <button type="reset" class="btn btn-outline-secondary bg-white text-dark">Reset
                            Button
                          </button>
                        </form>
                      </div>
                      <!-- /.col-xl-6 (nested) -->
                      <div class="col-xl-6">
                        <div class="mb-3">
                          <h1>Disabled Form States</h1>
                            <form role="form">
                            <fieldset disabled>
                              <div class="form-group">
                                <label for="disabledSelect">Disabled input</label>
                                <input class="form-control" id="disabledInput" type="text"
                                       placeholder="Disabled input" disabled>
                              </div>
                              <div class="form-group">
                                <label for="disabledSelect">Disabled select menu</label>
                                <select id="disabledSelect" class="form-control">
                                  <option>Disabled select</option>
                                </select>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox"> Disabled
                                  Checkbox</label>


                             <button type="submit" class="btn btn-primary disabled">Disabled Button
                              </button>
                                  <!--     <input type="submit" name="action" id="action" class="btn btn-success" value="เพิ่มข้อมูล"/>-->
                                </fieldset>
                              </form>
                            </div>
                            <div class="mb-3">
                              <h1>Form Validation States</h1>
                              <form role="form">
                                <div class="form-group">
                                  <label class="form-control-label" for="inputSuccess">Input with
                                    success</label>
                                  <input type="text" class="form-control is-valid" id="inputSuccess">
                                </div>
                                <div class="form-group has-error">
                                  <label class="form-control-label" for="inputError">Input with
                                    error</label>
                                  <input type="text" class="form-control is-invalid" id="inputError">
                                </div>
                              </form>
                            </div>
                            <div class="mb-3">
                              <h1>Input Groups</h1>
                              <form role="form">
                                <div class="form-group input-group"><span class="input-group-addon">@</span>
                                  <input type="text" class="form-control"
                                         placeholder="Username">
                                </div>
                                <div class="form-group input-group">
                                  <input type="text" class="form-control"> <span
                                        class="input-group-addon">.00</span>
                                </div>
                                <div class="form-group input-group"> <span class="input-group-addon"><i
                                        class="fa fa-eur"></i>

                                                </span>
                                  <input type="text"
                                         class="form-control" placeholder="Font Awesome Icon">
                                </div>
                                <div class="form-group input-group"><span class="input-group-addon">$</span>
                                  <input type="text" class="form-control"> <span
                                          class="input-group-addon">.00</span>
                                </div>
                                <div class="form-group input-group">
                                  <input type="text" class="form-control"> <span class="input-group-btn">

                                                    <button class="btn btn-outline-secondary bg-white" type="button"><i
                                                            class="fa fa-search"></i>

                                                    </button>

                                                </span>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!-- /.col-xl-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.panel -->
              </div>
              <!-- /.col-xl-12 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /#page-wrapper -->
        </div>
        </div>

        <div class="row">
          <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Bar Chart Example</div>
              <div class="card-body">
                <canvas id="myBarChart" width="100%" height="50"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Pie Chart Example</div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More chart examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>
<script type="text/javascript" language="javascript">
    $(document).on('submit', '#frm_test1', function (event) {
        event.preventDefault();
        setdataloan();

    });

  function setdataloan() {
    //alert("setdataloan");
    var listloan = [];

    var listloanType = {};

    var file = $('#fileUpload')[0];
    var myFormData = new FormData();
    myFormData.append('fileUpload2', file);
    var myFormData2 = new FormData();
    var flagno="no";
    var descflagno="";

    if($('#titleout').val()== ""){
      descflagno="ไม่ได้กรอกคำนำหน้า";
      flagno="yes";
    }else if($('#fnameout').val()== ""){
      descflagno="ไม่ได้กรอกชื่อ";
      flagno="yes";
    }else if($('#nobookout').val()== ""){
      descflagno="ไม่ได้กรอกเอกสารออก";
      flagno="yes";
    }else if($('#lnameout').val()== ""){
      descflagno="ไม่ได้กรอกสกุล";
      flagno="yes";
    }else if($('#idcard').val()== ""){
      descflagno="ไม่ได้กรอกเลขประชาชน";
      flagno="yes";
    }else if($('#balance').val()== ""){
      descflagno="ไม่ได้กรอกวงเงิน";
      flagno="yes";
    }else if($('#nobook').val()== ""){
      descflagno="ไม่ได้กรอกเอกสารเข้า";
      flagno="yes";
    }
    if(flagno=="no"){

      var arrayreturn0=$('#branch').val().split(":");
      var arrayreturn1=$('#province').val().split(":");
      if( arrayreturn1[0]!="เลือกจังหวัด"){

        var provinceno=arrayreturn1[0];
        var provincedes=arrayreturn1[1];

        if( arrayreturn0[0]!="เลือกสาขา"){

          var branchno=arrayreturn0[1];
          var branchdes=arrayreturn0[2];
          if($('.fileinfo').text()== " - Completed"){
            // Show alert dialog if value is not blank  fileinfo  filename
            //alert($('.filename').text());



            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear()+543;

            //alert(dd);
            // alert(mm);
            // alert(yyyy);

            // $('#mothly').text=mm;
            // $('#yearly').text=yyyy;

            var x = $('#balance').val();

            if (x < parseFloat(300001.00)) {
              listloanType["nobooksection"]= $('#nobookout').val();
              listloanType["nobookprovince"]= "";
              listloanType["nobookmain"]= "";
            } else
            if ((x > parseFloat(300000.00)) && (x < parseFloat(500001.00))){
              listloanType["nobooksection"]= "";
              listloanType["nobookprovince"]= $('#nobookout').val();
              listloanType["nobookmain"]= "";
            } else
            if ((x > parseFloat(500000.00)) &&(x < parseFloat(1500001.00))){
              listloanType["nobooksection"]= "";
              listloanType["nobookprovince"]= "";
              listloanType["nobookmain"]= $('#nobookout').val();
            }











            listloanType["titleout"] = $('#titleout').val();
            listloanType["fnameout"] = $('#fnameout').val();
            listloanType["lnameout"] = $('#lnameout').val();
            listloanType["idcard"] = $('#idcard').val();
            listloanType["province"] = provinceno;
            listloanType["provincedes"] = provincedes;
            listloanType["branch"] = branchno;
            listloanType["branchdes"] = branchdes;
            listloanType["balance"] = $('#balance').val();
            listloanType["mothly"] = mm;
            listloanType["yearly"] = yyyy;
            listloanType["nobook"] = $('#nobook').val();
            listloanType["fileUpload"] = $('#fileUpload').val();
            listloanType["filepath"] = $('.filename').text();









            //= $('#fileUpload').val();
            //var arrayfileUpload = $('#fileUpload').val().split("\\");
            // var tempcount = arrayfileUpload.length-1;
            // listloanType["fileUpload"] = arrayfileUpload[tempcount];
            //let formData = new FormData();
            //let req = new XMLHttpRequest();
            //let photo = document.getElementById("fileUpload").files[0];  // file from input

            // formData.append("photo", photo);
            // req.open("POST", 'http://localhost//COLL_LOAN//pages//UP_FILES');
            // req.send(formData);

            listloan.push(listloanType);
            // alert(myFormData);
            //var jack=listloanType.serialize();
            //myFormData.append('array2',listloanType);
            //alert("listloan"+listloan);
            $.ajax({
              type: "POST",
              async : false,
              url: "insert_loan_coll.php",
              data:{listloanType:listloanType},
              error: function (xhr) {
                alert(xhr.statusText + "jjjjjj");
              },
              success: function (data) {

                var arrayreturn = data.split("+++");
                var arrayID="";
                if (arrayreturn[1]=="complete") {
                  arrayID=arrayreturn[2]

                  //document.getElementById("test_default").onclick();
                  //document.getElementById("add_test3").onclick();
                  //$('#edit_model3').modal('toggle');


                }else if(arrayreturn[1]=="incomplete"){
                  alert("มีการยื่นเรื่องก่อนหน้านี้")
                }
                $('#edit_model2').modal('hide');

                // alert("jack" + data);
                //window.location.href = "tables_car.php?m=2";


              },complete: function (data) {
                test555();
              }


            });


          }else{alert("ยังไม่มีเอกสารแนบ");

          }
        }else{alert("กรุณาเลือกสาขา");
        }
      }else{alert("กรุณาเลือกจังหวัด");
      }

    }else if(flagno=="yes"){
      alert(descflagno);

    }
  }


</script>

</html>
