<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-page-wrapperwidth, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Charts</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font: 16px Arial;
        }

        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
            display: inline-block;
        }

        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }

        input[type=text] {
            background-color: #f1f1f1;
            width: 100%;
        }

        input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
            cursor: pointer;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
        .table-striped tbody tr.highlight td {
            background-color: red;
        }

    </style>

</head>



<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Delivery Test</a>

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

      <!-- Navigation -->
      <?php include("menu_master.php"); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Charts</li>
        </ol>

        <!-- Area input contract-->
        <div class="card mb-3">
          <div id="page-wrapper" class="p-4">

              <form method="post" id="frm_test1" enctype="multipart/form-data">
            <div class="row">
              <div class="col-xl-12">

                  
                <div class="card">
                  <div class="card-header">Form input product</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-6">

                          <div class="form-group">
                              <div class="autocomplete" style="width:300px;">
                            <input  id="contractno" type="text" name="contractno"  placeholder="Contract No." autocomplete="off">
                              </div>
                          </div>
                          <div class="form-group">
                            <div class="autocomplete" style="width:300px;">
                              <input id="myInput" type="text" name="myCountry" placeholder="Country" autocomplete="off">
                          </div>
                          </div>

                          <!--<div class="form-group">
                              <label>Main Product</label>
                              <select class="form-control" name="mainproduct" id="mainproduct">
                                  <option>มอเตอร์</option>
                                  <option>หม้อแปลง</option>
                                  <option>ตู้ไฟฟ้า</option>
                                  <option>กล่องไฟ</option>
                                  <option>สายไฟฟ้า</option>
                              </select>
                          </div>

                          <div class="form-group">
                            <label>Sub Product</label>
                            <select class="form-control" name="subproduct" id="subproduct">
                              <option>มอเตอร์ 110v</option>
                              <option>มอเตอร์ 220v</option>
                              <option>มอเตอร์ DC 5 V</option>
                              <option>มอเตอร์ Servol</option>
                              <option>สายไฟฟ้า</option>
                            <select>
                          </div>-->
                          <input type="button" onclick="doTestClick('add_data')" class="btn btn-success" value="เพิ่มข้อมูล" >
                          <!--  <input type="submit" name="action" id="action" class="btn btn-success" value="เพิ่มข้อมูล"/>-->
                         <!-- <button type="submit" class="btn btn-outline-secondary bg-white text-dark">
                            Submit Button
                          </button>-->
                          <button type="reset" class="btn btn-outline-secondary bg-white text-dark">Reset
                            Button
                          </button>
                          <!--<input type="submit" name="action2" id="action2" class="btn btn-success" value="ค้นหาข้อมูล"/>-->
                          <input type="button" onclick="doTestClick('search_data')" class="btn btn-success" value="ค้นหาข้อมูล" >

                      </div>
                      <!-- /.col-xl-6 (nested) -->
                      <div class="col-xl-6">

                            <div class="mb-3">
                                <div class="form-group">
                                    <label>Contract Date</label>
                                    <!--  <input class="form-control">-->
                                      <input class="form-control" name="contractdate" id="contractdate" placeholder="MM/DD/YYYY" type="text"
                                             style="width:80%"/>
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <div class="form-group">
                                      <label>Effciency Date</label>
                                      <!-- <input class="form-control"> -->
                                      <input class="form-control" name="contracteffec" id="contracteffec" placeholder="MM/DD/YYYY" type="text"
                                             style="width:80%" />
                                  </div>
                              </div>
                            <div class="mb-3">

                                <div class="form-group">
                                    <label>MEMO</label>
                                    <textarea class="form-control" rows="3" name="memo" id="memo" ></textarea>
                                </div>
                               <!-- <table id='district_data4' class="table table-order">
                                    <tr class="clickable-row">
                                        <th colspan ="1" align="center">Item</th>
                                        <th colspan ="1" align="center">mat_id</th>
                                        <th colspan ="1" align="center">mat_detail</th>

                                    </tr>
                                    <tbody>
                                    <tr class="clickable-row"><td colspan ="1">1</td>
                                    <tr class="clickable-row"><td colspan ="1">2</td>
                                    <tr class="clickable-row"><td colspan ="1">3</td>

                                    <tbody>
                                </table>-->
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
              </form>
              <!-- /.from -->
          </div>
          <!-- /#page-wrapper -->
        </div>

        </div>

<div id="addproduct">



</div>
        <div id="addproduct2">



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
  <script src="js/desc1.js"></script>


  <!-- Scrip Picker BEGIN-->
  <script>
      //   $('#district_data4 tbody tr').live('click', function(event) {
       //   $(this).addClass('highlight').siblings().removeClass('highlight');
    //  });
      $(document).ready(function () {
          var date_input = $('input[name="date"]'); //our date input has the name "date"
          var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
          var options = {
              format: 'mm/dd/yyyy',
              container: container,
              todayHighlight: true,
              autoclose: true,
          };
          date_input.datepicker(options);
      })
  </script>
  <!-- Scrip Picker End-->
</body>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css"/>

<!-- Bootstrap Date-Picker Plugin Begin -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script type="text/javascript" language="javascript">
    <!-- Bootstrap Date-Picker Plugin End -->
    $('#addproduct').on('click', '.clickable-row', function(event) {

        $(this).addClass('bg-info').siblings().removeClass('bg-info');
        //alert ($(this)[0].getElementsByClassName("idkey")[0].innerText);
        showdatable3($(this)[0].getElementsByClassName("idkey")[0].innerText);


    });
	
    $(document).ready(function () {

        autoselect();
        autoselect2();


    });

    var counter_row = 1;
    function myFunction2() {


        var element = document.getElementsByName('id_product');
        if (element.length==0) {
            var newRow = $("<tr>");
            var cols = "";

            //cols += '<td><input type="text" class="form-control" name="productno' + counter_row + '"/></td>';
            //cols += '<td><input type="text" class="form-control" name="productname' + counter_row + '"/></td>';
            //cols += '<td><input type="text" class="form-control" name="supplierid' + counter_row  + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="item"/></td>';
            cols += '<td><input type="text" class="form-control" name="id_product" id="id_product" /></td>';
            cols += '<td><input type="text" class="form-control" name="productdesc" id="productdesc" /></td>';
            cols += '<td><input type="text" class="form-control" name="amt"  id="amt"/></td>';
            cols += '<td><input type="text" class="form-control" name="priceunit" id="priceunit" /></td>';
            cols += '<td><input type="text" class="form-control" name="amttotal" id="amttotal" /></td>';
            cols += '<td><input type="text" class="form-control" name="lots"  id="lots"/></td>';

            cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  name="delinput" value="Delete"></td>';cols += '</tr>';
            newRow.append(cols);
            $("#district_data4").append(newRow);
            /* $("table.table-order").append(newRow); */
            counter_row++;
        }

    }
    var counter_row2 = 1;
    function myFunction3() {


        var element = document.getElementsByName('id_product');
        if (element.length==0) {
            var newRow = $("<tr>");
            var cols = "";

            //cols += '<td><input type="text" class="form-control" name="productno' + counter_row + '"/></td>';
            //cols += '<td><input type="text" class="form-control" name="productname' + counter_row + '"/></td>';
            //cols += '<td><input type="text" class="form-control" name="supplierid' + counter_row  + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="item"/></td>';
            cols += '<td><input type="text" class="form-control" name="productdesc" id="productdesc" /></td>';
            cols += '<td><input type="text" class="form-control" name="amt" id="amt" /></td>';
            cols += '<td><input type="text" class="form-control" name="time_amt"  id="time_amt"/></td>';
            cols += '<td><input type="text" class="form-control" name="time_unit" id="time_unit" /></td>';
            cols += '<td><input type="text" class="form-control" name="due_date" id="due_date" /></td>';
            cols += '<td><button class="ibtnDel btn btn-md btn-danger"  onclick="myFunction4()">Cal</button></td>';
            //cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  name="delinput" value="Delete"></td>';
            cols += '</tr>';
            newRow.append(cols);
            $("#district_data5").append(newRow);
            counter_row2++;
        }

    }
    function myFunction4() {

        var elementunit=0;
        var element1 = document.getElementsByName('time_unit')[0].value;


        var element2 = document.getElementsByName('time_amt')[0].value;
      // alert(element1[0].value+"-"+element2[0].value);
        if(element1=="M"){
            elementunit=30;
        }else if (element1=="Y"){
            elementunit=365;
        }else if (element1=="D"){
            elementunit=365;
        }

        var currentdate = Date.now();
        var plandate = addDays(currentdate,elementunit*element2);
        alert(plandate);
        var n = plandate.getDay();
        alert(n);
        if (n==6){
            plandate=addDays(plandate,2)
        }else if (n==7){
            plandate=addDays(plandate,1)
        }


        alert(plandate);
        daystr=plandate.getDate();
        monstr=plandate.getMonth()+1;
        yearstr=plandate.getFullYear();

        alert(daystr+"/"+monstr+"/"+yearstr);
        document.getElementById("due_date").value = yearstr+"-"+monstr+"-"+daystr;
        var oldchk=document.getElementById("due_date").value;


            chkDays(yearstr,monstr,daystr);





    }

    function chkDays(years,mons,days) {
        var check1='no have';
        $.ajax({
            type: "POST",
            url: "select_check_date.php",
            data: { days: days,
                    mons:mons,
                    years:years},
            error: function (xhr) {
                alert(xhr.statusText + "ข้อผิดพลาด");
            },
            success: function (data) {
                var obj = JSON.parse(data);
                var resukted='';
                if (obj !== null ) {
                    var old='';
                    var newss='';
                    resukted=9999;
                    for (var i = 0; i < obj.length; i++) {

                        var monin=obj[i].start.substring(6, 8);
                        var yesrin=obj[i].start.substring(0, 5);
                        if(i==0){old=obj[i].start.substring(8, 10);}
                        else if(i>0){
                            newss=obj[i].start.substring(8, 10);
                        }
                        if(newss!='' && i>0){resukted=newss-old;}
                        if(resukted==9999){
                            var counvar = parseInt(old, 10);
                            document.getElementById("due_date").value=yesrin+'-'+monin+'-'+(counvar+1);

                        }
                        else if(resukted==0){
                            var counvar = parseInt(old, 10);
                            document.getElementById("due_date").value=yesrin+'-'+monin+'-'+(counvar+1);

                        }
                        else if(resukted==1){
                            old=newss;
                            var counvar = parseInt(old, 10);
                            document.getElementById("due_date").value=yesrin+'-'+monin+'-'+(counvar+1);
                        }
                        else if(resukted>1){
                            old=newss;
                            var counvar = parseInt(newss, 10);
                            document.getElementById("due_date").value=yesrin+'-'+monin+'-'+(counvar);
                        }

                    }

                }
            }
        });

        return check1;
    }

    function addDays(date, days) {
        var result = new Date(date);
        result.setDate(result.getDate() + days);
        return result;
    }

    $("table.table-order").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });

    //*************AUTOCOMPLETE BEGIN**************************
    function autoselect() {
        var acn_id = "jack1";
        $.ajax({
            type: "POST",
            url: "select_autocomplete.php",
            data: {acn_id: acn_id},
            error: function (xhr) {
                alert(xhr.statusText + "ข้อผิดพลาด");
            },
            success: function (data) {
                var obj = JSON.parse(data);

                autocomplete(document.getElementById("myInput"), obj);
                var table11 = '';
                var tr3 = '';
                var query1='';
                var countque=0;

                if (obj !== null ) {
                    for (var i = 0; i < obj.length; i++) {
                        countque=countque+1;

                    }
                    //alert(countque);
                    product_g=obj;
                }

            }
        });
        return false;
    }
    function autoselect2() {
        var acn_id = "jack1";
        $.ajax({
            type: "POST",
            url: "select_autocomplete2.php",
            data: {acn_id: acn_id},
            error: function (xhr) {
                alert(xhr.statusText + "ข้อผิดพลาด");
            },
            success: function (data) {
                var obj = JSON.parse(data);

                autocomplete(document.getElementById("contractno"), obj);
                var table11 = '';
                var tr3 = '';
                var query1='';
                var countque=0;

                if (obj !== null ) {
                    for (var i = 0; i < obj.length; i++) {
                        countque=countque+1;

                    }
                    //alert(countque);
                    product_g=obj;
                }

            }
        });
        return false;
    }
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    //*************AUTOCOMPLETE END**************************

    var product_g = [];




    function doTestClick(strValue) {
        alert(strValue);
        if(strValue=='add_data'){
            insertdatatable();

        }else if  (strValue=='search_data'){
            search();
        }
        //frm_test1.btn_submit.click(); // ไปจำลองการกดปุ่มบน ปุ่ม submit แทน
    };

    function showdatable2() {
        var acn_id = $('#contractno').val();
        $.ajax({
            type: "POST",
            url: "select_loan_personal_easy2.php",
            data: {acn_id: acn_id},
            error: function (xhr) {
                alert(xhr.statusText + "ข้อผิดพลาด");
            },
            success: function (data) {

                var obj = JSON.parse(data);
                var table11 = '';
                var tr3 = '';
                tr3 = tr3+ '<div class="row">';
                tr3 = tr3+ '<div class="col-lg-11">';
                tr3 = tr3+ '<div class="card mb-3">';
                tr3 = tr3+ '<div class="card-header">';
                tr3 = tr3+ '<i class="fas fa-chart-bar"></i>';
                tr3 = tr3+ 'รายการ contract ทั้งหมด</div>';
                tr3 = tr3+ '<table id=\'district_data4\' class="table table-order">';



                tr3 = tr3+'';
                var query1='';
                var countque=0;
                tr3 = tr3 + ' <tr class="clickable-row">';
                tr3 = tr3 + '<th colspan ="1" align="center">Item</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">mat_id</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">mat_detail</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">amt</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">unitPrice</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">Total</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">lots</th>'
                tr3 = tr3 + '</tr>';
                if (obj !== null ) {
                    for (var i = 0; i < obj.length; i++) {
                        countque=countque+1;
                        tr3 = tr3 + '<tr class="clickable-row"><td colspan ="1">';
                        tr3 = tr3 + obj[i].itemcon;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td class="idkey" colspan ="1">';
                        tr3 = tr3 + obj[i].id_product;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td colspan ="1">';
                        tr3 = tr3 + obj[i].productdesc;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td colspan ="1">';
                        tr3 = tr3 + obj[i].amt;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td colspan ="1">';
                        tr3 = tr3 + obj[i].priceunit ;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td colspan ="1">';
                        tr3 = tr3 + obj[i].amttotal ;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td colspan ="1">';
                        tr3 = tr3 + obj[i].lots  ;
                        tr3 = tr3 + '</td>';





                        //var jackpm=obj[i].IDCARD;
                        //tr3 = tr3 +'<button id=bn2 type="button" class="btn btn-primary" style="width:100px" onclick="btn2Call(\''+obj[i].IDCARD+"+++++"+obj[i].PATHFILE+'\')">\''+obj[i].PATHFILE+'\'</button>';
                        //last tr3 = tr3 +'<button id=bn2 type="button" class="btn btn-primary" style="width:100px" onclick="btn2Call(\''+obj[i].IDCARD+'@@'+obj[i].ZYEAR+'\')">\''+obj[i].PATHFILE+'\'</button>';
                        //tr3 = tr3 +'<button id=bn2 type="button" class="btn btn-primary" style="width:100px" onclick="btn2Call(\''+obj[i].IDCARD+'\')">\''+"แนบไฟล์"+'\'</button>';
                        //tr3 = tr3 + '</td>';
                        //query1=obj[i].QUE;
                        tr3 = tr3 + '</tr>';
                    }

                }
                tr3 = tr3+'</table>';

                tr3 = tr3+'</div>';
                tr3 = tr3+'<button onclick="myFunction2()">Try it</button>';
                tr3 = tr3+'<button onclick="mysave()">Save</button>';
                tr3 = tr3+'<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>';
                tr3 = tr3+'</div>';
                tr3 = tr3+'</div>';
                tr3 = tr3+'</div>';


                table11 = table11 + '</br>';

                table11 = table11 + tr3;

                $('#addproduct').html(table11);
            }
        });

        return false;
    }

    $(document).on('submit', '#frm_test1', function (event) {
        event.preventDefault();
       // insertdatatable();

    });

  function insertdatatable() {
    var listloan = [];
    var listloanType = {};
    var flagno="no";
    var descflagno="";

    if($('#contractno').val()== ""){
      descflagno="ไม่ได้กรอกคำนำหน้า";
      flagno="yes";
    }else if($('#mainproduct').val()== ""){
        descflagno="ไม่ได้กรอกชื่อ";
        flagno="yes";
    }else if($('#subproduct').val()== ""){
      descflagno="ไม่ได้กรอกชื่อ";
      flagno="yes";
    }else if($('#contractdate').val()== ""){
        descflagno="ไม่ได้กรอกสกุล";
        flagno="yes";
    }else if($('#contracteffec').val()== ""){
      descflagno="ไม่ได้กรอกเอกสารออก";
      flagno="yes";
    }else if($('#mainproduct').val()== ""){
        descflagno="ไม่ได้กรอกวงเงิน";
        flagno="yes";
    }else if($('#memo').val()== ""){
      descflagno="ไม่ได้กรอกเลขประชาชน";
      flagno="yes";
    }

    if(flagno=="no"){

            listloanType["contractno"] = $('#contractno').val();
            listloanType["mainproduct"] = $('#mainproduct').val();
            listloanType["subproduct"] = $('#subproduct').val();
            listloanType["contractdate"] = $('#contractdate').val();
            listloanType["contracteffec"] = $('#contracteffec').val();
            listloanType["memo"] = $('#memo').val();



            listloan.push(listloanType);

            $.ajax({
              type: "POST",
              async : false,
              url: "insert_loan_coll.php",
              data:{listloanType:listloanType},
              error: function (xhr) {
                alert(xhr.statusText + "เกิดข้อผิดพลาด");
              },
              success: function (data) {


                  showdatable2();

              }


            });

    }else if(flagno=="yes"){
      alert(descflagno);

    }
  }
    function mysave() {
        var listloan = [];
        var listloanType = {};
        var flagno="no";
        var descflagno="";

        if($('#id_product').val()== ""){
            descflagno="ไม่ได้กรอกคำนำหน้า";
            flagno="yes";
        }else if($('#productdesc').val()== ""){
            descflagno="ไม่ได้กรอกชื่อ";
            flagno="yes";
        }else if($('#amt').val()== ""){
            descflagno="ไม่ได้กรอกชื่อ";
            flagno="yes";
        }else if($('#priceunit').val()== ""){
            descflagno="ไม่ได้กรอกชื่อ";
            flagno="yes";
        }else if($('#amttotal').val()== ""){
            descflagno="ไม่ได้กรอกชื่อ";
            flagno="yes";
        }else if($('#lots').val()== ""){
            descflagno="ไม่ได้กรอกชื่อ";
            flagno="yes";
        }

        if(flagno=="no"){


            listloanType["contractno"] = $('#contractno').val();
            listloanType["id_product"] = $('#id_product').val();
            listloanType["productdesc"] = $('#productdesc').val();
            listloanType["amt"] = $('#amt').val();
            listloanType["priceunit"] = $('#priceunit').val();
            listloanType["amttotal"] = $('#amttotal').val();
            listloanType["lots"] = $('#lots').val();



            listloan.push(listloanType);

            $.ajax({
                type: "POST",
                async : false,
                url: "insert_loan_coll2.php",
                data:{listloanType:listloanType},
                error: function (xhr) {
                    alert(xhr.statusText + "เกิดข้อผิดพลาด");
                },
                success: function (data) {


                    showdatable2();
                }


            });

        }else if(flagno=="yes"){
            alert(descflagno);

        }
    }
    function search() {
        var acn_id = $('#contractno').val();
        $.ajax({
            type: "POST",
            url: "select_loan_personal_easy2.php",
            data: {acn_id: acn_id},
            error: function (xhr) {
                alert(xhr.statusText + "ข้อผิดพลาด");
            },
            success: function (data) {

                var obj = JSON.parse(data);

                if (obj !== null ) {
                    for (var i = 0; i < obj.length; i++) {
                        //$('#contractdate').value=obj[i].contractdate;
                        document.getElementById("contractdate").value=obj[i].contractdate;

                       // $('#contracteffec').value=obj[i].contracteffec;
                        document.getElementById("contracteffec").value=obj[i].contracteffec;
                    }
                }






                var table11 = '';
                var tr3 = '';
                tr3 = tr3+ '<div class="row">';
                tr3 = tr3+ '<div class="col-lg-6">';
                tr3 = tr3+ '<div class="card mb-3">';
                tr3 = tr3+ '<div class="card-header">';
                tr3 = tr3+ '<i class="fas fa-chart-bar"></i>';
                tr3 = tr3+ 'รายการ contract ทั้งหมด</div>';
                tr3 = tr3+ '<table id=\'district_data4\' class="table table-order">';



                tr3 = tr3+'';
                var query1='';
                var countque=0;
                tr3 = tr3 + '<tr class="clickable-row">';
                tr3 = tr3 + '<th colspan ="1" align="center">Item</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">mat_id</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">mat_detail</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">amt</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">unitPrice</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">Total</th>';
                tr3 = tr3 + '<th colspan ="1" align="center">lots</th>';
                tr3 = tr3 + '</tr>';
                if (obj !== null && obj[0].contractdescdetail !== '') {
                    for (var i = 0; i < obj.length; i++) {
                        countque=countque+1;
                        tr3 = tr3 + ' <tr class="clickable-row"><td colspan ="1">';
                        tr3 = tr3 + obj[i].itemcon;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td class="idkey" colspan ="1">';
                        tr3 = tr3 + obj[i].id_product;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td colspan ="1">';
                        tr3 = tr3 + obj[i].productdesc;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td colspan ="1">';
                        tr3 = tr3 + obj[i].amt;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td colspan ="1">';
                        tr3 = tr3 + obj[i].priceunit ;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td colspan ="1">';
                        tr3 = tr3 + obj[i].amttotal ;
                        tr3 = tr3 + '</td>';
                        tr3 = tr3 + '<td colspan ="1">';
                        tr3 = tr3 + obj[i].lots  ;
                        tr3 = tr3 + '</td>';





                        //var jackpm=obj[i].IDCARD;
                        //tr3 = tr3 +'<button id=bn2 type="button" class="btn btn-primary" style="width:100px" onclick="btn2Call(\''+obj[i].IDCARD+"+++++"+obj[i].PATHFILE+'\')">\''+obj[i].PATHFILE+'\'</button>';
                        //last tr3 = tr3 +'<button id=bn2 type="button" class="btn btn-primary" style="width:100px" onclick="btn2Call(\''+obj[i].IDCARD+'@@'+obj[i].ZYEAR+'\')">\''+obj[i].PATHFILE+'\'</button>';
                        //tr3 = tr3 +'<button id=bn2 type="button" class="btn btn-primary" style="width:100px" onclick="btn2Call(\''+obj[i].IDCARD+'\')">\''+"แนบไฟล์"+'\'</button>';
                        //tr3 = tr3 + '</td>';
                        //query1=obj[i].QUE;
                        tr3 = tr3 + '</tr>';
                    }

                }
                tr3 = tr3+'</table>';

                tr3 = tr3+'</div>';
                tr3 = tr3+'<button onclick="myFunction2()">Try it</button>';
                tr3 = tr3+'<button onclick="mysave()">Save</button>';
                tr3 = tr3+'<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>';
                tr3 = tr3+'</div>';
                tr3 = tr3+'</div>';
                tr3 = tr3+'</div>';


                table11 = table11 + '</br>';

                table11 = table11 + tr3;

                $('#addproduct').html(table11);
            }
        });

        return false;


    }
    function showdatable3(x) {
        alert(x);
            var acn_id = x;
            var subacn_id = $('#contractno').val();
            $.ajax({
                type: "POST",
                url: "select_loan_personal_easy3.php",
                data: {acn_id: acn_id,
                    subacn_id: subacn_id},
                error: function (xhr) {
                    alert(xhr.statusText + "ข้อผิดพลาด");
                },
                success: function (data) {

                    var obj = JSON.parse(data);

                    if (obj !== null ) {
                        for (var i = 0; i < obj.length; i++) {
                            //$('#contractdate').value=obj[i].contractdate;
                            document.getElementById("contractdate").value=obj[i].contractdate;

                            // $('#contracteffec').value=obj[i].contracteffec;
                            document.getElementById("contracteffec").value=obj[i].contracteffec;
                        }
                    }






                    var table11 = '';
                    var tr3 = '';
                    tr3 = tr3+ '<div class="row">';
                    tr3 = tr3+ '<div class="col-lg-6">';
                    tr3 = tr3+ '<div class="card mb-3">';
                    tr3 = tr3+ '<div class="card-header">';
                    tr3 = tr3+ '<i class="fas fa-chart-bar"></i>';
                    tr3 = tr3+ 'รายการ contract ทั้งหมด</div>';
                    tr3 = tr3+ '<table id=\'district_data5\' class="table table-order">';



                    tr3 = tr3+'';
                    var query1='';
                    var countque=0;
                    tr3 = tr3 + '<tr class="clickable-row">';
                    tr3 = tr3 + '<th colspan ="1" align="center">Item</th>';
                    tr3 = tr3 + '<th colspan ="1" align="center">productdesc</th>';
                    tr3 = tr3 + '<th colspan ="1" align="center">amt</th>';
                    tr3 = tr3 + '<th colspan ="1" align="center">time_amt</th>';
                    tr3 = tr3 + '<th colspan ="1" align="center">time_unit</th>';
                    tr3 = tr3 + '<th colspan ="1" align="center">due_date</th>';
                    tr3 = tr3 + '</tr>';
                    if (obj !== null && obj[0].contractdescdetail !== '') {
                        for (var i = 0; i < obj.length; i++) {
                            countque=countque+1;
                            tr3 = tr3 + ' <tr class="clickable-row"><td colspan ="1">';
                            tr3 = tr3 + obj[i].itemcon;
                            tr3 = tr3 + '</td>';
                            tr3 = tr3 + '<td class="idkey" colspan ="1">';
                            tr3 = tr3 + obj[i].productdesc;
                            tr3 = tr3 + '</td>';
                            tr3 = tr3 + '<td colspan ="1">';
                            tr3 = tr3 + obj[i].amt;
                            tr3 = tr3 + '</td>';
                            tr3 = tr3 + '<td colspan ="1">';
                            tr3 = tr3 + obj[i].time_amt  ;
                            tr3 = tr3 + '</td>';
                            tr3 = tr3 + '<td colspan ="1">';
                            tr3 = tr3 + obj[i].time_unit  ;
                            tr3 = tr3 + '</td>';
                            tr3 = tr3 + '<td colspan ="1">';
                            tr3 = tr3 + obj[i].due_date  ;
                            tr3 = tr3 + '</td>';





                            //var jackpm=obj[i].IDCARD;
                            //tr3 = tr3 +'<button id=bn2 type="button" class="btn btn-primary" style="width:100px" onclick="btn2Call(\''+obj[i].IDCARD+"+++++"+obj[i].PATHFILE+'\')">\''+obj[i].PATHFILE+'\'</button>';
                            //last tr3 = tr3 +'<button id=bn2 type="button" class="btn btn-primary" style="width:100px" onclick="btn2Call(\''+obj[i].IDCARD+'@@'+obj[i].ZYEAR+'\')">\''+obj[i].PATHFILE+'\'</button>';
                            //tr3 = tr3 +'<button id=bn2 type="button" class="btn btn-primary" style="width:100px" onclick="btn2Call(\''+obj[i].IDCARD+'\')">\''+"แนบไฟล์"+'\'</button>';
                            //tr3 = tr3 + '</td>';
                            //query1=obj[i].QUE;
                            tr3 = tr3 + '</tr>';
                        }

                    }
                    tr3 = tr3+'</table>';

                    tr3 = tr3+'</div>';
                    tr3 = tr3+'<button onclick="myFunction3()">Try it2</button>';
                    tr3 = tr3+'<button onclick="mysave1()">Save2</button>';
                    tr3 = tr3+'<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>';
                    tr3 = tr3+'</div>';
                    tr3 = tr3+'</div>';
                    tr3 = tr3+'</div>';


                    table11 = table11 + '</br>';

                    table11 = table11 + tr3;

                    $('#addproduct2').html(table11);
                }
            });

            return false;



    }
</script>

</html>
