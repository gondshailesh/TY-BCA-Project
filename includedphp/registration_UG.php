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
          <label for="" class="form-label ms-2">Select Your Category<span style="color:red;">*</span></label>
          <select class="form-select form-control" aria-label="Default select example"   autocomplete="off" name="category" id="category">
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
            <span id="categoryerror"></span>

            </div>
            <div>

               <!-- row 5 -->
              <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">12<sup>th</sup> Marks in Percent<span style="color:red;">*</span></label>
            <input type="text" class="form-control" placeholder="12th  Percentile"   autocomplete="off" name="percentage" id="percentage" >
            <span id="percentageerror"></span>
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
            <span id="passingyearerror"></span>
        </div>
        </div>

          <!-- row 6 -->
      <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Enter First Name<span style="color:red;">*</span></label>
            <input type="text" class="form-control" placeholder="Only Your Name"   autocomplete="off" name="firstname" id="firstname">
            <span id="firstnameerror"></span>
          </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Enter Last name<span style="color:red;">*</span></label>
            <input type="text"  class="form-control" placeholder="Only Surname"   autocomplete="off" name="lastname" id="lastname">
            <span id="lastnameerror"></span>
          </div>
          </div>
                 
       <!-- row 7 -->
       <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="form-label ms-2">Enter City Name<span style="color:red;">*</span></label>
          <input type="text" class="form-control" placeholder="Enter your city name"   autocomplete="off" name="city" id="city"> 
          <span id="cityerror"></span>  
        </div>
          <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Your Permanant Address<span style="color:red;">*</span></label>
            <input type="text"  class="form-control" placeholder="Enter your address"   autocomplete="off" name="address" id="address">
            <span id="addresserror"></span>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="form-label ms-2">Select Gender<span style="color:red;">*</span></label>
          <select class="form-select" aria-label="Default select example"   autocomplete="off" name="gender" id="gender"> 
            <option value="" selected>Select Gender</option>       
              <option value="1">male</option>
              <option value="2">female</option>
              <option value="3">other</option>
            </select>
            <span id="gendererror"></span>
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
          <label for="" class="form-label ms-2">Enter your Contact no<span style="color:red;">*</span></label>
          <input type="number" class="form-control" placeholder="Enter Your Contact No"   autocomplete="off" name="studcont" id="studcont">
            <span id="studconterror"></span>
        </div>
        </div>
          <strong>Parent Details</strong>
          <!-- row 9 -->
          <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
                <label class="form-label ms-2">Enter Your Father's Name<span style="color:red;">*</span></label>
                <input type="text"  class="form-control" placeholder="Enter Your Father's Name"   autocomplete="off" name="fname" id="fname">
               <span id="fnameerror"></span>
              </div>
            <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
                <label  class="form-label ms-2">Father's Occupation <span style="color:red;">*</span></label>
                <input type="text"  class="form-control" placeholder="Father's Occupation "   autocomplete="off" name="foccupation" id="foccupation" >
                <span id="foccupationerror"></span>
              </div>
          </div>
          <!-- row 10 -->
          <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6 mb-2 mb-2">
                <label  class="form-label ms-2">Father's Annual Income<span style="color:red;">*</span></label>
                <input type="number"  class="form-control" placeholder="Father's Annual Income"   autocomplete="off" name="fanual" id="fanual">
                <span id="fanualerror"></span>
              </div>
            <div class="col-sm-12 col-lg-6 col-md-6  mb-2">
                <label  class="form-label ms-2">Father's Contact no<span style="color:red;">*</span></label>
                <input type="number"  class="form-control" placeholder="Father's Contact no"   autocomplete="off" name="fcontact" id="fcontact">
                <span id="fcontacterror"></span>
              </div>
          </div>
          
        <center><hr class=""></center>
          <div class="mb-2 mt-2">
            <b>Have you complited any Degree/Diploma/course</b> 
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="yesno" id="yes" value="yes">
              <label class="form-check-label" for="yes">yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio"  name="yesno" id="no" value="no">
              <label class="form-check-label" for="no">no</label>
            </div>
            <span id="yesnoerror"></span> 
        </div>
        
          <!-- row 8 -->
      <div class="row" id="degree">
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">Name of Other course<span style="color:red;">*</span></label>
            <input type="text" class="form-control" placeholder="Name Of Course"   autocomplete="off" name="othercourse" id="othercourse">
            <span id="othercourseerror"></span>
          </div>
        <div class="col-sm-12 col-lg-6 col-md-6 mb-2">
            <label  class="form-label ms-2">CGPA<span style="color:red;">*</span></label>
            <input type="number"  class="form-control" placeholder="CGPA"   autocomplete="off" name="cgpa" id="cgpa">
            <span id="cgpaerror"></span>
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

      $("#no").click(function(){
        $("#degree").hide();
        $("#degree").fadeOut();
        $("#degree").fadeOut("slow");
        $("#degree").fadeOut(6000);
      });
      $("#yes").click(function(){
        $("#degree").show();
        $("#degree").fadeIn();
        $("#degree").fadeIn("slow");
        $("#degree").fadeIn(6000);
      });
      
     });
  </script>
  <script>
            
        

          function validateForm() {
          //   let cgpa =parseFloat(document.getElementById('cgpa').value);
          //   let othercourse =document.getElementById('othercourse').value;
          // const yesRadio = document.getElementById("yes");
          // const noRadio = document.getElementById("no");
          // const errorSpan = document.getElementById("yesnoerror"); 
          //   let yes =document.getElementById('yes').value;
           
            var selectedOption = document.getElementById("degree").value; 
            let  fcontact=document.getElementById('fcontact').value;
            const regexPattern = /^[0-9]+$/;
            let studcont =document.getElementById('studcont').value;
            const studcontRegex = /^\d{10}$/;// Matches aadhar no
            let fanual =document.getElementById('fanual').value;
            let foccupation=document.getElementById('foccupation').value;
            let fname = document.getElementById('fname').value;
            let gender =document.getElementById('gender').value;
            let address =document.getElementById('address').value;
            let city =document.getElementById('city').value;
            let lastname =document.getElementById('lastname').value;
            let firstname =document.getElementById('firstname').value;
            let passingyear =document.getElementById('passingyear').value;
            let percentage =document.getElementById('percentage').value;
            let category =document.getElementById('category').value;
            let dob =document.getElementById('dob').value;
          const givenDate = new Date(dob);//date format 
          const currentDate = new Date(); ///for current date 
          const ageDifferenceInYears = currentDate.getFullYear() - givenDate.getFullYear();
          const dateRegex = /^\d{4}-\d{2}-\d{2}$/; // Matches YYYY-MM-DD format  
            let acadmicyear =document.getElementById('acadmicyear').value;
            let course =document.getElementById('course').value;
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
            }else if(regxcalltext(fullname)){
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
              document.getElementById('adharnoerror').innerHTML="Enter valid aadhar no";
              }else if(!adharRegex.test(adharno)){
              alert("Aadhar no invalid");
              }else if(email===""){
              document.getElementById('email').focus();
              document.getElementById('email').style.border="2px solid red";
              document.getElementById('emailerror').style.color="red";
              document.getElementById('emailerror').innerHTML="Enter a valid email";
              }else if(!emailRegex.test(email)){
                alert(" invalid Email ");
              }else if(course=="") {
              document.getElementById('course').focus();
              document.getElementById('course').style.border="2px solid red";
              document.getElementById('courseerror').style.color="red";
              document.getElementById('courseerror').innerHTML="Select a course";
              }else if (acadmicyear =="") {
              document.getElementById('acadmicyear').focus();
              document.getElementById('acadmicyear').style.border="2px solid red";
              document.getElementById('acadmicyearerror').style.color="red";
              document.getElementById('acadmicyearerror').innerHTML="Select a acadmic year";
              }else if(dob===""){
              document.getElementById('dob').focus();
              document.getElementById('dob').style.border="2px solid red";
              document.getElementById('doberror').style.color="red";
              document.getElementById('doberror').innerHTML="Select valid date of birth";
              }else if(!dateRegex.test(dob)){
                   alert("date is invalid")
              }else if (ageDifferenceInYears <=17) {
                alert("date of birth is invalid");
              }else if(category ==""){
              document.getElementById('category').focus();
              document.getElementById('category').style.border="2px solid red";
              document.getElementById('categoryerror').style.color="red";
              document.getElementById('categoryerror').innerHTML=" Select your category";
              }else if(percentage==""){
              document.getElementById('percentage').focus();
              document.getElementById('percentage').style.border="2px solid red";
              document.getElementById('percentageerror').style.color="red";
              document.getElementById('percentageerror').innerHTML="Enter your percent";
              }else if(!(percentage >= 60 ) && (percentage <= 100)){
                document.getElementById('percentage').focus();
                document.getElementById('percentage').style.border="2px solid red";
                document.getElementById('percentageerror').style.color="red";
                document.getElementById('percentageerror').innerHTML="Enter your percent";
                alert("your marks should be grater than 60.00 and less than 100");
              }else if(passingyear==""){
                document.getElementById('passingyear').focus();
                document.getElementById('passingyear').style.border="2px solid red";
                document.getElementById('passingyearerror').style.color="red";
                document.getElementById('passingyearerror').innerHTML="Select Passing Year";
              }else if(firstname== ""){
                document.getElementById('firstname').focus();
                document.getElementById('firstname').style.border="2px solid red";
                document.getElementById('firstnameerror').style.color="red";
                document.getElementById('firstnameerror').innerHTML="only your name";
              }else if(regxcalltext(firstname)){
              }else if(lastname== ""){
                document.getElementById('lastname').focus();
                document.getElementById('lastname').style.border="2px solid red";
                document.getElementById('lastnameerror').style.color="red";
                document.getElementById('lastnameerror').innerHTML="only your surname";
              }else if(regxcalltext(lastname)){
                alert("invalid last name");
              }else if(city== ""){
                document.getElementById('city').focus();
                document.getElementById('city').style.border="2px solid red";
                document.getElementById('cityerror').style.color="red";
                document.getElementById('cityerror').innerHTML="only your name";
              }else if(regxcalltext(city)){
              }else if(address == ""){
                document.getElementById('address').focus();
                document.getElementById('address').style.border="2px solid red";
                document.getElementById('addresserror').style.color="red";
                document.getElementById('addresserror').innerHTML="Enter your Address";
              }else if(regxcalltext(address)){
              }else if(gender==""){
                document.getElementById('gender').focus();
                document.getElementById('gender').style.border="2px solid red";
                document.getElementById('gendererror').style.color="red";
                document.getElementById('gendererror').innerHTML="Select Gender";              
              }else if(studcont==""){
                document.getElementById('studcont').focus();
                document.getElementById('studcont').style.border="2px solid red";
                document.getElementById('studconterror').style.color="red";
                document.getElementById('studconterror').innerHTML="Enter your contact no";              
              }else if(!studcontRegex.test(studcont)){
                alert("student's Phone no contain only 10 digit");
              }else if(fname==""){
                document.getElementById('fname').focus();
                document.getElementById('fname').style.border="2px solid red";
                document.getElementById('fnameerror').style.color="red";
                document.getElementById('fnameerror').innerHTML="fullname of father";
              }else  if(regxcalltext(fname)){
              }else  if(foccupation== ""){
                document.getElementById('foccupation').focus();
                document.getElementById('foccupation').style.border="2px solid red";
                document.getElementById('foccupationerror').style.color="red";
                document.getElementById('foccupationerror').innerHTML="father's occupation";
              }else  if(regxcalltext(foccupation)){
              }else  if(fanual== ""){
                document.getElementById('fanual').focus();
                document.getElementById('fanual').style.border="2px solid red";
                document.getElementById('fanualerror').style.color="red";
                document.getElementById('fanualerror').innerHTML="Father's Annual income in RS.";
              }else if (!regexPattern.test(fanual)) {
                alert("Enter only money in RS");
              }else if(fcontact ==""){
                document.getElementById('fcontact').focus();
                document.getElementById('fcontact').style.border="2px solid red";
                document.getElementById('fcontacterror').style.color="red";
                document.getElementById('fcontacterror').innerHTML="Enter a valid phone no";
              }else if(!studcontRegex.test(fcontact)){
                alert("invalid Father contact no ");
              }else  if (selectedOption === "yes") {
            // If "Yes" is selected, validate the fields
            var otherCourse = document.getElementById("othercourse").value;
            var cgpa = document.getElementById("cgpa").value;

            // Validate Name of Other Course
            if (otherCourse.trim() === "") {
                document.getElementById("othercourseerror").innerText = "Name of Other Course is required.";
                return false;
            } else {
                document.getElementById("othercourseerror").innerText = "";
            }

            // Validate CGPA
            if (cgpa.trim() === "") {
                document.getElementById("cgpaerror").innerText = "CGPA is required.";
                return false;
            } else {
                document.getElementById("cgpaerror").innerText = "";
            }
        }
              
          function regxcalltext(name){
              var regex = /^[a-zA-Z\s]+$/;
                if (!regex.test(name)) {
                  return true;
                 } 
            }
          }
  </script>
  </body>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</html>





