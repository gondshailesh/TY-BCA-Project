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
  <body class="container-fluid brand-body">
    
      <!--php header file included-->
        <div class="">
        <?php
        include'../includedphp/header.php';
        ?>
        </div>
     <!--End php header file included-->

    <!--input fields of students -->
    <div class="container mt-5">
      <form class="row g-3 needs-validation form-control  bg-light bg-opacity-75" action=""  method="post">
      <!-- course selection-->
      
       <!-- row 1 -->
       <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="form-label ms-2">Student Full Name<span style="color:red;">*</span></label>
          <input type="text" class="form-control" placeholder="Student Full Name"   autocomplete="off" name="fullname" id="fullname">
          <span id="fullnameerror"></span>
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="form-label ms-2">Mother Name as par 12th marksheet<span style="color:red;">*</span></label>
          <input type="text" class="form-control" placeholder="Mother Name as par 12th marksheet"   autocomplete="off" name="mothername" id="mothername">
          <span id="mothernameerror"></span>

        </div>
      </div>
         <!-- row 2 -->
         <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Adhar card No. <span style="color:red;">*</span></label>
            <input type="number"  class="form-control" placeholder="Enter Adhar card No"   autocomplete="off" name="adharno" id="adharno">
            <span id="adharnoerror"></span>

          </div>
          <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2" >Enter your Email<span style="color:red;">*</span></label>
            <input type="text" class="form-control" placeholder="Enter your Email"   autocomplete="off" name="email" id="email">
          <span id="emailerror"></span>
          </div>
          </div>
      <!-- row 3 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="form-label ms-2">Select Course <span style="color:red;">*</span></label>
          <select class="form-select" aria-label="Default select example"   autocomplete="off" name="lcourse" id="course"> 
        <option value="" selected>Select Course</option>       
        <option value="1">BCA(Bachlors Of Computer Application)</option>
        <option value="2">BI(Bio-Informatics)</option>
        <option value="3">BSC(CS)(Bachlor Of Computer Science)</option>
        <option value="4">BT(Bio-Technology)</option>
      </select>
      <span id="courseerror"></span>
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="form-label ms-2">Select Acadmic Year<span style="color:red;">*</span></label>
          <select class="form-select" aria-label="Default select example"   autocomplete="off" name="acadmicyear" id="acadmicyear"> 
            <option value="" selected>Select Acadmic Year</option>       
              <option value="1">2020-21</option>
              <option value="2">2021-22</option>
              <option value="3">2022-23</option>
              <option value="4">2023-24</option>
              <option value="5">2024-25</option>
              <option value="6">2025-26</option>
            </select>
          <span id="acadmicyearerror"></span>
            
        </div>
      </div>

     
                  <!-- row 4 -->

         <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Select Date of Birth<span style="color:red;">*</span></label>
            <input type="date"   class="form-control" placeholder="Date of Birth"   autocomplete="off" name="dob" id="dob">
          <span id="doberror"></span>
          </div>
          <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="form-label ms-2">Select Your Catogery<span style="color:red;">*</span></label>
          <select class="form-select form-control" aria-label="Default select example"   autocomplete="off" name="catogery" id="catogery">
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
            <div>

               <!-- row 5 -->
              <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Marks in Percent<span style="color:red;">*</span></label>
            <input type="text" class="form-control" placeholder="Marks in Percentile"   autocomplete="off" name="percentage" id="percentage" >
          </div>
          <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="form-label ms-2">12th Passing Year<span style="color:red;">*</span></label>
          <select class="form-select" aria-label="Default select example"   autocomplete="off" name="passingyear" id="passingyear"> 
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

          <!-- row 6 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Enter First Name<span style="color:red;">*</span></label>
            <input type="text" class="form-control" placeholder="Only Your Name"   autocomplete="off" name="firstname" id="firstname">
          </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Enter Middle name<span style="color:red;">*</span></label>
            <input type="text"  class="form-control" placeholder="Only Father name"   autocomplete="off" name="midname" id="midname">
          </div>
          </div>
                 
       <!-- row 7 -->
       <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="form-label ms-2">Enter Last Name<span style="color:red;">*</span></label>
          <input type="text" class="form-control" placeholder="Only Last Name"   autocomplete="off" name="lastname" id="lastname"> 
          </div>
          <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Your Permanant Address<span style="color:red;">*</span></label>
            <input type="text"  class="form-control" placeholder=" Obtained Marks"   autocomplete="off" name="address" id="address">
          </div>
        </div>
        <div class="mb-2 mt-2"> 
          <b>Select Gender</b><br>
            <input type="radio" class="form-check-input" id="male" name="gender" value="Female" >
            <label for="male" class="form-check-label">Male</label><br>
            <input type="radio" class="form-check-input" id="female" name="gender" value="male" >
            <label for="css">Female</label><br>
            <input type="radio" class="form-check-input" id="other" name="gender" value="other" >
            <label for="other" class="form-check-label">Other</label>
        </div>
        <div class="mb-2 mt-2">
            <b>Have you complited any Degree/Diploma/course</b> 
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="show" value="yes">
              <label class="form-check-label" for="inlineRadio1">yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio"  name="inlineRadioOptions" id="hide" value="no">
              <label class="form-check-label" for="inlineRadio2">no</label>
             </div>
        </div>
        
          <!-- row 8 -->
      <div class="row" id="degree">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Name of Other course<span style="color:red;">*</span></label>
            <input type="text" class="form-control" placeholder="Name Of Course"   autocomplete="off" name="othercoursename" id="othercoursename">
          </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">CGPA<span style="color:red;">*</span></label>
            <input type="number"  class="form-control" placeholder="CGPA"   autocomplete="off" name="cgpa" id="cgpa">
          </div>
          </div>
          
          <hr>
          <strong>Parent Details</strong>
          <!-- row 9 -->
          <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
                <label class="form-label ms-2">Enter Your Father's Name<span style="color:red;">*</span></label>
                <input type="text"  class="form-control" placeholder="Enter Your Father's Name"   autocomplete="off" name="fname">
              </div>
            <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
                <label  class="form-label ms-2">Father's Occupation <span style="color:red;">*</span></label>
                <input type="text"  class="form-control" placeholder="Father's Occupation "   autocomplete="off" name="foccupation" id="foccupation" >
              </div>
          </div>
          <!-- row 10 -->
          <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6 mb-2 mb-2">
                <label  class="form-label ms-2">Father's Annual Income<span style="color:red;">*</span></label>
                <input type="number"  class="form-control" placeholder="Father's Annual Income"   autocomplete="off" name="fanual" id="fanual">
              </div>
            <div class="col-sm-12 col-lg-6 col-md-6  mb-2">
                <label  class="form-label ms-2">Father's Contact no<span style="color:red;">*</span></label>
                <input type="number"  class="form-control" placeholder="Father's Contact no"   autocomplete="off" name="fcontact" id="fcontact">
              </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm-12 col-lg-6 col-md-6  mb-2">
              <button class="btn btn-outline-warning w-100" type="reset" value="reset">Reset</button>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6  mb-2">
              <button class="btn btn-outline-danger w-100" type="button" value="submit" onclick="validateForm()"> Submit</button>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){

      $("#hide").click(function(){
        $("#degree").hide();
        $("#degree").fadeOut();
        $("#degree").fadeOut("slow");
        $("#degree").fadeOut(6000);
      });
      $("#show").click(function(){
        $("#degree").show();
        $("#degree").fadeIn();
        $("#degree").fadeIn("slow");
        $("#degree").fadeIn(6000);
      });
      
     });
  </script>
  <script>
            
          // let  catogery =document.getElementById('catogery').value;
          // let  percentage =document.getElementById('percentage').value;
          // let  passingyear =document.getElementById('passingyear').value;
          // let  firstname =document.getElementById('firstname').value;
          // let  midname =document.getElementById('midname').value;
          // let  lastname =document.getElementById('lastname').value;
          // let  address =document.getElementById('address').value;
          // let  =document.getElementById('').value;
          // let  =document.getElementById('').value;
          // let  =document.getElementById('').value;
          // let  =document.getElementById('').value;
          // let  =document.getElementById('').value;

          function validateForm() {
          const dateRegex = /^\d{4}-\d{2}-\d{2}$/; // Matches YYYY-MM-DD format  
            let  dob =document.getElementById('dob').value;
            let  acadmicyear =document.getElementById('acadmicyear').value;
            let  course =document.getElementById('course').value;
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;//Matches Email: abc@abc.abc format
            let email =document.getElementById('email').value;
          const adharRegex = /^\d{12}$/;// Matches aadhar no
            let adharno =document.getElementById('adharno').value;
            let mothername =document.getElementById('mothername').value;
            let fullname=document.getElementById('fullname').value;
            if(fullname===""){
              document.getElementById('fullname').focus();
              document.getElementById('fullname').style.border="2px solid red";
              document.getElementById('fullnameerror').style.color="red";
              document.getElementById('fullnameerror').innerHTML="Enter a valid name";
            }
              else if(regxcalltext(fullname)){
              }else if(mothername ===""){
              document.getElementById('mothername').focus();
              document.getElementById('mothername').style.border="2px solid red";
              document.getElementById('mothernameerror').style.color="red";
              document.getElementById('mothernameerror').innerHTML="Enter a valid mother name";
            }
              else if(regxcalltext(mothername)){
              document.getElementById('mothernameerror').style.display="none";
              }else if(adharno===""){
              document.getElementById('adharno').focus();
              document.getElementById('adharno').style.border="2px solid red";
              document.getElementById('adharnoerror').style.color="red";
              document.getElementById('adharnoerror').innerHTML="Enter a valid adhar no";
              }else if(!adharRegex.test(adharno)){
              alert("Adhar invalid");
              }else if(email===""){
              document.getElementById('email').focus();
              document.getElementById('email').style.border="2px solid red";
              document.getElementById('emailerror').style.color="red";
              document.getElementById('emailerror').innerHTML="Enter a valid email";
              }else if(!emailRegex.test(email)){
                alert("Email is invalid");
              }else if(course=="") {
              document.getElementById('course').focus();
              document.getElementById('course').style.border="2px solid red";
              document.getElementById('courseerror').style.color="red";
              document.getElementById('courseerror').innerHTML=" Select a course";
              }else if (acadmicyear =="") {
              document.getElementById('acadmicyear').focus();
              document.getElementById('acadmicyear').style.border="2px solid red";
              document.getElementById('acadmicyearerror').style.color="red";
              document.getElementById('acadmicyearerror').innerHTML=" Select a course";
              }else if(dob===""){
              document.getElementById('dob').focus();
              document.getElementById('dob').style.border="2px solid red";
              document.getElementById('doberror').style.color="red";
              document.getElementById('doberror').innerHTML=" Select your date of birth";
              } else if(!dateRegex.test(dob)){
                alert("date of birth is valid");
              }  
              

            
          }
          function regxcalltext(name){
              var regex = /^[a-zA-Z\s]+$/;
                if (!regex.test(name)) {
                  return true;
                 } 
            }
  </script>
  </body>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
