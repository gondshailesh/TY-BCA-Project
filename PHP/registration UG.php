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
  <body class="">
    
      <!--php header file included-->
        <?php
        include'../PHP/header.php';
         ?>
    <!--End php header file included-->

    <!--input fields of students -->
    <div class="container mt-5">
      <form class="row g-3 needs-validation form-control  bg-info bg-opacity-25" action="" method="post">
      <!-- course selection-->
      <!-- row 1 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6">
          <label for="">Select Course</label>
          <select class="form-select" aria-label="Default select example" required> 
        <option value="" selected>Select Course</option>       
        <option value="1">BCA(Bachlors Of Computer Application)</option>
        <option value="2">BI(Bio-Informatics)</option>
        <option value="3">BSC(CS)(Bachlor Of Computer Science)</option>
        <option value="4">BT(Bio-Technology)</option>
      </select>
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6">
          <label for="">Select Acadmic Year</label>
          <select class="form-select" aria-label="Default select example" required> 
            <option value="" selected>Acadmic Year</option>       
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
        <div class="col-sm-12 col-lg-6 col-md-6">
          <label for="">Student Full Name</label>
          <input type="text" class="form-control" placeholder="Enter Your Full Name" required>
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6">
          <label for="">Mother Name</label>
          <input type="text" class="form-control" placeholder="Name as par 12th marksheet" required>
        </div>
      </div>
                  <!-- row 3 -->

         <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6">
            <label  class="form-label">Total Marks</label>
            <input type="text" name="mothername" class="form-control" placeholder="Total Marks" required>
          </div>
          <div class="col-sm-12 col-lg-6 col-md-6">
            <label  class="form-label">Obtained Marks</label>
            <input type="number" name="" class="form-control" placeholder="Total Obtained" required>
            </div>
            <div>

               <!-- row 4 -->
              <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6">
            <label  class="form-label">Marks in percent</label>
            <input type="text" name="mothername" class="form-control" placeholder="Marks in Percentile" required>
          </div>
          <div class="col-sm-12 col-lg-6 col-md-6">
          <label for="">Category</label>
          <select class="form-select form-control" aria-label="Default select example" required> 
            <option value="" selected>Select Your Catogery</option>       
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
        <div class="col-sm-12 col-lg-6 col-md-6">
            <label  class="form-label">Full Name</label>
            <input type="text" name="Fullname" class="form-control" placeholder="Enter Your Full Name" required>
          </div>
        <div class="col-sm-12 col-lg-6 col-md-6">
            <label  class="form-label">Mother Name</label>
            <input type="text" name="mothername" class="form-control" placeholder="Name as par 12th marksheet" required>
          </div>
          </div>
                 
               <!-- row 6 -->
               <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6">
          <label for="">course Fees</label>
          <select class="form-select" aria-label="Default select example" required> 
            <option value="" selected>Course Fees</option>       
              <option value="1">20040</option>
              <option value="2">20040</option>
              <option value="3">20040</option>
              <option value="4">20040</option>
              <option value="5">20040</option>
              <option value="6">20040</option>
            </select>
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6">
          <label for="">12th  Passing Year</label>
          <select class="form-select" aria-label="Default select example" required> 
            <option value="" selected>Select Passing year</option>       
              <option value="1">2020-21</option>
              <option value="2">2021-22</option>
              <option value="3">2022-23</option>
              <option value="4">2023-24</option>
              <option value="5">2024-25</option>
              <option value="6">2025-26</option>
            </select>
        </div>
      </div>
          <!-- row 5 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6">
            <label  class="form-label">Name of Other Course</label>
            <input type="text" name="Fullname" class="form-control" placeholder="Enter Name of The Other Course " required>
          </div>

          </div>

        
        </form>
         </div>   
    <!--End input fields of students -->

      

        
      <!--php footer-->
        <?php
        include'../PHP/footer.php';
        ?>
        <!--End php footer-->
  </body>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
