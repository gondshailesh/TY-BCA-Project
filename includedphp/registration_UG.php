<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register UG</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../animate/animate.css-main/animate.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" type="image/x-icon" href="../img/logo-g.png" />

  </head>
  <body class="container-fluid">
    
      <!--php header file included-->
        <div class="container-fluid">
          <?php
        include'../includedphp/header.php';
         ?>
        </div>
     <!--End php header file included-->

    <!--input fields of students -->
    <div class="container mt-5">
      <form class="row g-3 needs-validation form-control  bg-info bg-opacity-25" action="" method="post">
      <!-- course selection-->
      <!-- row 1 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="ms-2">Select Course <span style="color:red;">*</span></label>
          <select class="form-select" aria-label="Default select example" required autocomplete="off"> 
        <option value="" selected>Select Course</option>       
        <option value="1">BCA(Bachlors Of Computer Application)</option>
        <option value="2">BI(Bio-Informatics)</option>
        <option value="3">BSC(CS)(Bachlor Of Computer Science)</option>
        <option value="4">BT(Bio-Technology)</option>
      </select>
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="ms-2">Select Acadmic Year<span style="color:red;">*</span></label>
          <select class="form-select" aria-label="Default select example" required autocomplete="off"> 
            <option value="" selected>Select Acadmic Year</option>       
              <option value="1">2020-21</option>
              <option value="2">2021-22</option>
              <option value="3">2022-23</option>
              <option value="4">2023-24</option>
              <option value="5">2024-25</option>
              <option value="6">2025-26</option>
            </select>
        </div>
      </div>

      <!-- row 2 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="ms-2">Student Full Name<span style="color:red;">*</span></label>
          <input type="text" class="form-control" placeholder="Student Full Name" required autocomplete="off">
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="">Mother Name as par 12th marksheet<span style="color:red;">*</span></label>
          <input type="text" class="form-control" placeholder="Mother Name as par 12th marksheet" required autocomplete="off"> 
        </div>
      </div>
                  <!-- row 3 -->

         <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Total Marks<span style="color:red;">*</span></label>
            <input type="text" name="mothername" class="form-control" placeholder="Total Marks" required autocomplete="off">
          </div>
          <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Obtained Marks<span style="color:red;">*</span></label>
            <input type="number" name="" class="form-control" placeholder=" Obtained Marks" required autocomplete="off">
            </div>
            <div>

               <!-- row 4 -->
              <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Marks in Percentile<span style="color:red;">*</span></label>
            <input type="text" name="mothername" class="form-control" placeholder="Marks in Percentile" required autocomplete="off">
          </div>
          <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="ms-2">Select Your Catogery<span style="color:red;">*</span></label>
          <select class="form-select form-control" aria-label="Default select example" required autocomplete="off" >
            <option value="" selected > Select Your Catogery</option>       
              <option value="1">SC</option>
              <option value="2">ST</option>
              <option value="3">OBC</option>
              <option value="4">SBC</option>
              <option value="5">SEBC</option>
              <option value="6">VJ</option>
              <option value="7">VJ-NT-A</option>
              <option value="8">NT-B</option>
              <option value="9">NT-C</option>
            </select>
        </div>
        </div>

          <!-- row 5 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Enter Your Full Name<span style="color:red;">*</span></label>
            <input type="text" name="Fullname" class="form-control" placeholder="Enter Your Full Name" required autocomplete="off">
          </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Name as par 12th marksheet<span style="color:red;">*</span></label>
            <input type="text" name="mothername" class="form-control" placeholder="Name as par 12th marksheet" required autocomplete="off">
          </div>
          </div>
                 
       <!-- row 6 -->
       <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="ms-2">Course Fees<span style="color:red;">*</span></label>
          <select class="form-select" aria-label="Default select example" required autocomplete="off"> 
            <option value="" selected>Course Fees</option>       
              <option value="1">20040</option>
              <option value="2">20040</option>
              <option value="3">20040</option>
              <option value="4">20040</option>
              <option value="5">20040</option>
              <option value="6">20040</option>
            </select>
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="ms-2">12th Passing Year<span style="color:red;">*</span></label>
          <select class="form-select" aria-label="Default select example" required autocomplete="off"> 
            <option value="" selected>Select 12<sup>th</sup>12th Passing Year</option>       
              <option value="1">2020-21</option>
              <option value="2">2021-22</option>
              <option value="3">2022-23</option>
              <option value="4">2023-24</option>
              <option value="5">2024-25</option>
              <option value="6">2025-26</option>
            </select>
        </div>
      </div>
          <!-- row 7 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Enter Name of The Other Course <span style="color:red;">*</span></label>
            <input type="text" name="Fullname" class="form-control" placeholder="Enter Name of The Other Course "required autocomplete="off">
          </div>
          <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2" >Enter your Email<span style="color:red;">*</span></label>
            <input type="text" name="studemail" class="form-control" placeholder="Enter your Email" required autocomplete="off">
          </div>
          </div>
          
          <hr>
          <strong>Parent Details</strong>
          <!-- row 8 -->
          <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
                <label  class="form-label ms-2">Enter Your Father's Name<span style="color:red;">*</span></label>
                <input type="text" name="Fathername" class="form-control" placeholder="Enter Your Father's Name" required autocomplete="off">
              </div>
            <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
                <label  class="form-label ms-2">Father's Occupation <span style="color:red;">*</span></label>
                <input type="text" name="occupation" class="form-control" placeholder="Father's Occupation " required autocomplete="off">
              </div>
          </div>
          <!-- row 8 -->
          <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6 mb-2 mb-2">
                <label  class="form-label ms-2">Father's Annual Income<span style="color:red;">*</span></label>
                <input type="number" name="Fatherincome" class="form-control" placeholder="Father's Annual Income" required autocomplete="off">
              </div>
            <div class="col-sm-12 col-lg-6 col-md-6  mb-2">
                <label  class="form-label ms-2">Father's Contact no<span style="color:red;">*</span></label>
                <input type="number" name="fathercont" class="form-control" placeholder="Father's Contact no" required autocomplete="off">
              </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm-12 col-lg-6 col-md-6  mb-2">
              <button class="btn btn-outline-warning w-100" type="reset" value="reset">Reset</button>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6  mb-2">
              <button class="btn btn-outline-danger w-100" type="Submit" value="submit" > Submit</button>
            </div>
          </div>
        </form>
         </div>   
         </div>
         </div>
    <!--End input fields of students -->

      

        
      <!--php footer-->
        <div class="container-fluid">
          <?php
        include'../includedphp/footer.php';
         ?>
        </div>
    <!--End php footer-->
  <script>
    "use strict";
    try(err){
     

    }
    console.log(err);

  </script>
  </body>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
