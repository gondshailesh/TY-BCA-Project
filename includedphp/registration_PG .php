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
  <body class="container brand-body">
    
      <!--php header file included-->
        <div class="container">
          <?php
        include'../includedphp/header.php';
         ?>
        </div>
     <!--End php header file included-->
    
    <!--input fields of students -->
    <div class="container mt-5">
      <form class=" row g-3 form-control text-dark bg-light bg-opacity-25" name="" action="" method="post" >
      <!-- course selection-->
      <div class="">
        <!-- row 1 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6">
          <label for="" class="mb-2 ms-1">Student Full Name <sup style="color:red">*</sup></label>
          <input type="text" class="form-control mmt-2"  placeholder="Student Full Name" required name="fname" autocomplete="off">
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6">
          <label for=""  class="mb-2 ms-1">Mother Name<sup style="color:red">*</sup></label>
          <input type="text" class="form-control" placeholder="Mother Name as par 12th marksheet" required autocomplete="off">
        </div>
      </div>
      <!-- row 2 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6">
          <label for="" class="mb-2 ms-1">Select Course<sup style="color:red">*</sup></label>
          <select class="form-select" aria-label="Default select example" required autocomplete="off"> 
        <option value="" selected>Select Course</option>       
        <option value="1">MCA(Master Of Computer Application)</option>
        <option value="2">MSC(Bio-Informatics)</option>
        <option value="3">MSC(CS)(Master Of Computer Science)</option>
        <option value="4">MS(Bio-Technology)</option>
      </select>
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6">
          <label for=""  class="mb-2 ms-1">Select Acadmic Year<sup style="color:red">*</sup></label>
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

      
          
      <!-- row 3 -->
         <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6">
            <label  class="form-label">Total Marks<sup style="color:red">*</sup></label>
            <input type="text" name="mothername" class="form-control" placeholder="Total Marks" required autocomplete="off">
          </div>
          <div class="col-sm-12 col-lg-6 col-md-6">
            <label  class="form-label">Obtained Marks<sup style="color:red">*</sup></label>
            <input type="number" name="" class="form-control" placeholder=" Obtained Marks" required autocomplete="off">
            </div>
            <div>

        <!-- row 4 -->
          <div class="row">
           <div class="col-sm-12 col-lg-6 col-md-6">
              <label  class="form-label">Marks in Percentile</label>
              <input type="text" name="mothername" class="form-control" placeholder="Marks in Percentile" required autocomplete="off">
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6">
            <label for="">Select Your Catogery<sup style="color:red">*</sup></label>
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
            <label  class="form-label">Enter Your Full Name<sup style="color:red">*</sup></label>
            <input type="text" name="Fullname" class="form-control" placeholder="Enter Your Full Name" required autocomplete="off">
          </div>
        <div class="col-sm-12 col-lg-6 col-md-6">
            <label  class="form-label">Name as par 12th marksheet<sup style="color:red">*</sup></label>
            <input type="text" name="mothername" class="form-control" placeholder="Name as par 12th marksheet" required autocomplete="off">
          </div>
          </div>
                 
         <!-- row 6 -->
           <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6">
              <label for="">Course Fees<sup style="color:red">*</sup></label>
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
            <div class="col-sm-12 col-lg-6 col-md-6">
              <label for=""> Passing Year<sup style="color:red">*</sup></label>
              <select class="form-select" aria-label="Default select example" required autocomplete="off"> 
                <option value="" selected>Select 12<sup>th</sup> Passing Year</option>       
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
              <div class="col-sm-12 col-lg-6 col-md-6">
                  <label  class="form-label">Enter Name of The Other Course<sup style="color:red">*</sup></label>
                  <input type="text" name="Fullname" class="form-control" placeholder="Enter Name of The Other Course "required autocomplete="off">
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                  <label  class="form-label">Enter your Email<sup style="color:red">*</sup></label>
                  <input type="text" name="studemail" class="form-control" placeholder="Enter your Email" required autocomplete="off">
                </div>
                </div>

                <hr>
                <strong>Parent Details</strong>
             <!-- row 8 -->
             <div class="row">
               <div class="col-sm-12 col-lg-6 col-md-6">
                   <label  class="form-label">Enter Your Father's Name<sup style="color:red">*</sup></label>
                   <input type="text" name="Fathername" class="form-control" placeholder="Enter Your Father's Name" required autocomplete="off">
                 </div>
               <div class="col-sm-12 col-lg-6 col-md-6">
                   <label  class="form-label">Father's Occupation<sup style="color:red">*</sup></label>
                   <input type="text" name="occupation" class="form-control" placeholder="Father's Occupation " required autocomplete="off">
                 </div>
             </div>

               <!-- row 8 -->
               <div class="row">
                 <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
                     <label  class="form-label">Father's Annual Income<sup style="color:red">*</sup></label>
                     <input type="number" name="Fatherincome" class="form-control" placeholder="Father's Annual Income" required autocomplete="off">
                   </div>
                 <div class="col-sm-12 col-lg-6 col-md-6  mb-2">
                     <label  class="form-label">Father's Contact no<sup style="color:red">*</sup></label>
                     <input type="number" name="fathercont" class="form-control" placeholder="Father's Contact no" required autocomplete="off">
                   </div>
               </div>
              </div>
              </div>


               <div class="row mt-2 mb-2">
            <div class="col-sm-12 col-lg-6 col-md-6  mb-2">
              <button class="btn btn-danger  w-100" type="reset" value="reset">Reset</button>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6  mb-2">
              <button class="btn btn-success w-100" type="Submit" value="submit" > Submit</button>
            </div>
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
       


    </script>



  </body>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
