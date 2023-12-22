<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MGM COLLEGE OF CS AND IT,NANDED</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="animate/animate.css-main/animate.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="https://www.mgmccsit.ac.in/img/logo-g.png" />
  </head>
  <body  class="" style="background: rgb(221,237,249);
background: linear-gradient(267deg, rgba(221,237,249,1) 0%, rgba(255,255,255,1) 50%, rgba(221,237,255,1) 100%);">
    <div class="container-fluid">

      
      <!-- Modal of registration ug pg -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Select Catogery</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="d-flex justify-content-between justify-content-center gap-1">
                    <div class="ms-5"><a href="includedphp/registration_PG .php"><button class="btn btn-warning">Post Graduate</button></a> </div>
                    <div class="me-5"><a href="includedphp/registration_UG.php"><button class="btn btn-primary">Under  Graduate</button></a> </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thankyou..!</button>
                </div>
              </div>
            </div>
          </div>
          <!--End  Modal -->
      
            <!--logo and name of college-->
      <center>
        <div class="container-fluid mhead">
          <img src="https://www.mgmccsit.ac.in/img/logo-g.png" alt="mgmlogo" />
          <h3>Mahatma Gandhi Missions's</h3>
          <h2>COLLEGE OF COMPUTER SCIENCE & INFORMATION TECHONOLOGY</h2>
          <strong
            >Affiliated to Swami Ramanand Teerth Marathwada University, Nanded,
            India</strong
          >
        </div>
      </center>
      <!-- End logo and name of college-->
           <!-- Header ofcanvas-->
  <nav class=" container shadow-sm navbar navbar-expand-lg bg-info mb-2 mt-2">
  <div class="container">
    <span class="navbar-brand" >

    </span>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ABOUT MGM'S</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
  <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
      <li class="nav-item">
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</button>
    </li>    
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MGM
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="menu_files/About college.php">About MGM</a></li>
              <li><a class="dropdown-item" href="menu_files/vision&mission.php">Vision & Mission</a></li>
              <li><a class="dropdown-item" href="menu_files/founder and managment.php">Founder & Management</a></li>
              <li><a class="dropdown-item" href="menu_files/acadmic excellnce.php">Adademic Excellence</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About Us
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="menu_files/About college.php">About College</a></li>
              <li><a class="dropdown-item" href="menu_files/chairman's message.php">Chairman's Message</a></li>
              <li><a class="dropdown-item" href="menu_files/Director's message.php">Director's Message</a></li>
              <li><a class="dropdown-item" href="menu_files/Principal's desk.php">Principal's Desk</a></li>
              <li><a class="dropdown-item" href="menu_files/HOD's desk.php">HOD's Desk</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Acadmics
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="menu_files/course offered.php">Courses Offered</a></li>
              <li><a class="dropdown-item" href="menu_files/Admission and Fees Structure">Admission and Free Structure</a></li>
              <li><a class="dropdown-item" href="menu_files/Acadmic calender.php">Academic Calender</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Departments
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="menu_files/computer science and it.php">Computer Science & IT</a></li>
              <li><a class="dropdown-item" href="menu_files/Biotechnology and bio informatics.php">Biotechnology & Bioinformatics</a></li>
              <li><a class="dropdown-item" href="menu_files/electronics.php">Electronics</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Campus Life
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="menu_files/arohan.php">Arohan</a></li>
              <li><a class="dropdown-item" href="menu_files/technical activities .php">Technical Activities</a></li>
              <li><a class="dropdown-item" href="menu_files/cultural activities.php">cultural Activities</a></li>
              <li><a class="dropdown-item" href="menu_files/sport activities.php">Sport Activities</a></li>
              <li><a class="dropdown-item" href="menu_files/event and festivals.php">EVent & Festivals</a></li>
              <li><a class="dropdown-item" href="menu_files/educational tour.php">Educational tour</a></li>
              <li><a class="dropdown-item" href="menu_files/TEch-life.php">Tech-Life</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Facilities
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="menu_files/library and reding room.php">Library & reding Room</a></li>
              <li><a class="dropdown-item" href="menu_files/scholarship.php">Scholarship</a></li>
              <li><a class="dropdown-item" href="menu_files/WIFI internet.php">WiFi Internet</a></li>
              <li><a class="dropdown-item" href="menu_files/water testing">Water Testing</a></li>
              <li><a class="dropdown-item" href="menu_files/cafearea.php">Cafteria</a></li>
              <li><a class="dropdown-item" href="menu_files/green and clean campus.php">Green & Clean Campus</a></li>
              <li><a class="dropdown-item" href="menu_files/Ro plant.php">RO Plant</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Placements
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="menu_files/placement cell.php">Placement Cell</a></li>
              <li><a class="dropdown-item" href="menu_files/campus placement.php">Campus Placement</a></li>
              <li><a class="dropdown-item" href="menu_files/alumini.php">Alumini</a></li>              
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Achivements
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="menu_files/students achivements.php">Students' Achivments</a></li>
              <li><a class="dropdown-item" href="menu_files/teacher's achivments.php">Teacher's Achivements</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Staff
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="menu_files/teaching staff.php">Teaching Staff</a></li>
              <li><a class="dropdown-item" href="menu_files/non teaching staff.php">Non-Teaching Staff</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
      <!-- Header ofcanvas-->
      <div class="container bg-transparent text-end">
      <!--news and Event-->
      <marquee behavior="" class="mqnews" direction="left" onmouseover="this.stop(); "onmouseout="this.start();">
      <p>
          <img src="img/new.gif" alt="">*<a href="doc\TT_Winter_2021 (1).pdf" class="mrq_ls">Time Table Winter</a> &nbsp;&nbsp;
          <img src="img/new.gif" alt="">* <strong>College Uniform & ID Card is Compulsory</strong> &nbsp;&nbsp;
          <img src="img/new.gif" alt="">*<a href="https://srtmun.ac.in/en/?option=com_content&view=article&id=1397" class="mrq_ls">University Ranker M.Sc.(SE)(Summer 2020)</a> &nbsp;&nbsp;
          <img src="img/new.gif" alt="">*<a href="https://srtmun.ac.in/en/?option=com_content&view=article&id=1397" class="mrq_ls">University Ranker B.Sc. BIOINFORMATICS (Summer 2020)</a> &nbsp;&nbsp;
          <img src="img/new.gif" alt="">*<a href="html\campus placement.php" class="mrq_ls">Recent Placements 19-20</a> &nbsp;&nbsp;
          <img src="img/new.gif" alt="">*<a href="https://www.srtmun.ac.in/en/syllabi.html" class="mrq_ls">SRTMUN Syllabi</a> &nbsp;&nbsp;
          <img src="img/new.gif" alt=""><strong>Admissions are  open for these courses</srtong> &nbsp;&nbsp;
          <img src="img/new.gif" alt=""><strong>B.SC.Computer Science</strong>  &nbsp;&nbsp;
          <img src="img/new.gif" alt=""><strong>B.SC.Biotechnology</strong> &nbsp;&nbsp;
          <img src="img/new.gif" alt=""><strong>B.SC.Bioinformatics</strong> &nbsp;&nbsp;
          <img src="img/new.gif" alt=""><strong>M.SC.Biotechnology</strong> &nbsp;&nbsp;
          <img src="img/new.gif" alt=""><strong>M.SC.Softwere Engg.</strong> &nbsp;&nbsp;
          <img src="img/new.gif" alt=""><strong>M.SC.Electronics</strong> &nbsp;&nbsp;
      </p>
      </marquee>
     </div>
     
      <!--slider of MGM -->
      <div class="container mb-3">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/sldr1.jpg" class="d-block w-100 rounded-2  shadow-sm " alt="slider 1">
          </div>
          <div class="carousel-item">
            <img src="img/sldr2.jpg" class="d-block w-100 rounded-2  shadow-sm " alt="slider 2">
          </div>
          <div class="carousel-item">
            <img src="img/sldr3.jpg" class="d-block w-100 rounded-2  shadow-sm " alt="slider 3">
          </div>
          <div class="carousel-item">
            <img src="img/sldr4.jpg" class="d-block w-100 rounded-2  shadow-sm " alt="slider 4">
          </div>
          <div class="carousel-item">
            <img src="img/sldr5.jpg" class="d-block w-100 rounded-2  shadow-sm " alt="slider 5">
          </div>
          <div class="carousel-item">
            <img src="img/sldr6.jpg" class="d-block w-100 rounded-2  shadow-sm " alt="slider 6">
          </div>
          <div class="carousel-item">
            <img src="img/sldr7.jpg" class="d-block w-100 rounded-2  shadow-sm " alt="slider 7">
          </div>
          <div class="carousel-item">
            <img src="img/sldr8.jpg" class="d-block w-100 rounded-2  shadow-sm " alt="slider 8">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
      <!-- end slider of MGM -->
      
      <!-- Har Ghar Tiranga -->
      <div class="container ">
        <img src="img/har-ghar-tiranga-web-banner-download-section.jpg" class="img-fluid    rounded-2 w-100" alt="">
      </div>
      <!--  End Har Ghar Tiranga -->


<center><hr style="width:80%;"></center>
<center><strong class="h4">Companies for Placements</strong></center>
      <center><hr size="" style="width:70%;"></center>

     

      <div class="container-fluid">
      <div class="container center">
          <div class="slider-jq  p-3 "><div class="shadow-lg rounded-2 bg-white shadow-sm p-3 slick-jq"><center><img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Tata_Consultancy_Services_Logo.svg" class="img-fluid mt-1" alt=""></center></div></div>
          <div class="slider-jq  p-3 "><div class="shadow-lg rounded-2 bg-white shadow-sm p-3 slick-jq"><center><img src="https://mma.prnewswire.com/media/1794711/Cognizant_Logo.jpg?p=facebook" class="img-fluid" alt=""></center></div></div>
          <div class="slider-jq  p-3 "><div class="shadow-lg rounded-2 bg-white shadow-sm p-3 slick-jq"><center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Infosys_logo.svg/600px-Infosys_logo.svg.png" alt="" class="img-fluid mt-1"></center></div></div>
          <div class="slider-jq  p-3 "><div class="shadow-lg rounded-2 bg-white shadow-sm p-3 slick-jq"><center><img src="img/qspiders.png" alt="" class="img-fluid mt-1"></center></div></div>
          <div class="slider-jq  p-3 "><div class="shadow-lg rounded-2 bg-white shadow-sm p-3 slick-jq"><center><img src="img/jio.png" alt="" class="img-fluid mt-3"></center></div></div>
          <div class="slider-jq  p-3 "><div class="shadow-lg rounded-2 bg-white shadow-sm p-3 slick-jq"><center><img src="img/fable.png" alt="" class="img-fluid"></center></div></div>
          <div class="slider-jq  p-3 "><div class="shadow-lg rounded-2 bg-white shadow-sm p-3 slick-jq"><center><img src="https://www.smartglobalgovernance.com/wp-content/uploads/Accenture-2.svg" alt="" class="img-fluid"></center></div></div>
        </div>
      </div>

      



      

       <!--welcome to MGM-->
       <section class=" container" >
        <div class="row justify-content-between">
          <div class="col-lg-8  mt-4">
           <div class="p-1 shadow-sm  animate ">
           <p class="p-2"> &nbsp; Mahatma Gandhi Mission's College of Computer Science and Information Technology is located at Nanded, a district place in Maharashtra. The College established in the year 2000. It is approved by Government of Maharashtra and is affiliated to Swami Ramanand Teerth Marathwada University, Nanded. Nanded city is well connected by road and rail to all-important cities in India. It has unique historical importance of being the place of Court and Congregation of 10th Guru of Sikhs Shri Guru Gobind Singhji. Pilgrims all over the world visits Nanded.</p>
           <center><strong >
            Click here to download tender form 2021-2022 <a href="doc\MGM_Tender.pdf"><button class="btn btn-outline-primary">download</button></a>
          </strong></center>
           </div>
          </div>
          <!--End welcome to MGM-->
          <!-- Online Payment -->
          <div class="col-lg-4 mt-4  shadow-sm animate ">
            
            <center><a href="doc/Final prospectus 2019-20.pdf"><button class="btn btn-outline-warning mb-3 mt-3">Download Brouchre</button> </a></center>
            <center><a href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm"><button class="btn btn-outline-success mb-4">ONLINE FEES PAYMENT</button></a></center>
          </div>
        </div>
       </section>     
           <!-- End Online Payment -->


        <!--Leaflet and no ragging part-->
       <article class="container">
       <div class="leaflet row justify-content-center gap-4 ">
        <div class="y-img mt-4  shadow-sm animate col-sm-12 col-lg-7  ">
          <img src="img/leflet.jpg" class="img-fluid w-100 " width="100%" alt="">
          </div>
        <div class="shadow-sm animate col-sm-12 col-lg-4 mt-4">
          <center><img src="img/Say-no-to-Ragging.gif" height="20%" width="40%"  class="img-fluid" alt=""></center>
          <p class="p-3">
            <center><strong>Say No to Ragging</strong></center>
            <p> Ragging - A violation of Human Rights. Ragging is strictly prohibited on campus & off campus. Join hands in making the college campus free from ragging. "Stop ragging. Stop this ... Thousands Say No to Ragging."</p>
            <b>
            <br><a href="doc/anti ragging.pdf" class="mt-2" ><button class="btn btn-outline-primary">Download</button></a> College Anti Ragging Policy - Student
          </b></p>
        </div>
       </div>
       </article>
        <!--End Leaflet and no ragging part-->

        <!--About collage section-->
        <div class="container">
          <div class="row m-2 gap-4 mt-3 justify-content-center"> 
          <div class="col-lg-6 col-md-12 col-sm-12  shadow-sm animate">
            <div class="">
            <div class=""><center><img src="img/mgm .jpg" class=" mt-4 img-fluid" width="500" height="250" alt=""></center></div>
              <p class="p-3">
                Since its inception in 1982 Mahatma Gandhi Mission developed a chain of more than 50 educational organizations, health care centres and social welfare units function under its umbrella at 5 centers wiz. Aurangabad, Nanded, Navi Mumbai, Noida and Parbhani. It is a quest of 3 decades MGM proves the deep faith of her management in the power of education that leads the society towards prosperity of the nation.
                <a href="menu_files/About college.php" class="hov-li">More Info..</a>
              </p>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12  shadow-sm animate">
            <p class="p-3 mt-2 ">
              <center><strong>Our Alumni Speaks</strong></center>
            <i class="">"The college is having good infrastructure and Faculty. The Environament of college is good and healthy. I got a strong support from my college. I felt lucky that i was a part of MGMCCSIT".</i><br>
            <b>Girish Sunil Agrawal (Assoc IT Applications Spec),Symantec,Pune.</b>
            </p>
            <div>
              <center>
                <a href="https://www.facebook.com/Mgmccsitned"><button class="btn btn-outline-warning mb-3"> Follow Us On Facebook</button></a>
              </center>
             <!-- carasoul item of success stories-->
             <center><strong style="color: rgb(88, 189, 0);">*Success Stories*</strong></center>
             <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
               <div class="carousel-inner">
                 <div class="carousel-item active">
                   <div class=" crsl">
                   <div class="">
                    <center><b>Miss.Rawat Shivani Rakesh</b></center>
                    <center><img src="img/miss.rawat.jpg" class="img-fluid" height="150" width="100" alt=""></center>
                    <center><b>University I st Rank M.Sc.(SE)</b></center>
                    <p class="p-3">Our college student Miss.Rawat Shivani Rakesh has got glorious success in PG level examinination 2020 as she stood Ist in University rank in M.Sc.(SE).</p>     
                   </div>
                   </div>
                 </div>
                 <div class="carousel-item">
                   <div class="crsl">
                   <div class="">
                   <center><b>Miss. T.DIVYA PURUSHOTTAM</b></center>
                    <center><img src="img/miss. Divya.jpeg" class="img-fluid" height="150" width="100" alt=""></center>
                    <center><b>University IIIrd Rank M.Sc.(SE)</b></center>
                    <p class="p-3">Our college student Miss. T.DIVYA PURUSHOTTAM has got glorious success in PG level examinination 2020 as she stood IIIrd in University rank in M.Sc.(SE).</p>     
                   </div>
                   </div>
                 </div>
                 <div class="carousel-item">
                  <div class="crsl">
                  <div class="">
                   <center><b>Miss. Gawalwad Pooja</b></center>
                    <center><img src="img/miss.Gawalwad Pooja.jpg" class="img-fluid" height="150" width="100" alt=""></center>
                    <center><b>University I Rank M.Sc (BI)</b></center>
                    <p class="p-3">Our college student Miss.Gawalwad Pooja has got glorious success in PG level examinination 2020 as she stood Ist in University rank in M.Sc(BI).</p>     
                   </div>
                  </div>
                 </div>
                 <div class="carousel-item">
                  <div class="crsl">
                  <div class="">
                   <center><b>Mr.VYAVHARE GUNAJI PRAKASH</b></center>
                    <center><img src="img/Gunaji Vyavahare.jpeg" class="img-fluid" height="150" width="100" alt=""></center>
                    <center><b>University IInd Rank M.Sc (BI)</b></center>
                    <p class="p-3">Our college student Mr.Vyavhare Gunaji P. has got glorious success in PG level examinination 2020 as he stood IInd in University rank in M.Sc(BI).</p>     
                   </div>
                  </div>               
                 </div>
                 <div class="carousel-item">
                  <div class="crsl">
                  <div class=" ">
                   <center><b>DOSALWAR SHWETA VIJAYKUMAR</b></center>
                    <center><img src="img/miss.Shweta Dosalwar.jpeg" class="img-fluid" height="150" width="100" alt=""></center>
                    <center><b>University IIIrd Rank M.Sc (BI)</b></center>
                    <p class="p-3">Our college student Dosalwar Shweta Vijaykumar has got glorious success in PG level examinination 2020 as she stood IIIrd in University rank in M.Sc(BI).</p>     
                   </div>
                  </div>
                 </div>
                 <div class="carousel-item">
                   <div class="crsl">
                   <div class="">
                   <center><b>Miss. Razvi Ummehani</b></center>
                    <center><img src="img/missRazvi Ummehani.jpg" class="img-fluid" height="150" width="100" alt=""></center>
                    <center><b>University Ist Rank M.Sc (BI)</b></center>
                    <p class="p-3">Our college student Miss. Razvi Ummehani has got glorious success in PG level examinination as she stood Ist in University rank in M.Sc(BI).</p>     
                   </div>
                   </div>
                 </div>
                 <div class="carousel-item">
                  <div class="crsl">
                  <div class="">
                  <center><b>Mr. Lodhe Ankush</b></center>
                    <center><img src="img/Lodhe Ankush.jpg" class="img-fluid" height="150" width="100" alt=""></center>
                    <center><b>University IInd Rank M.Sc (BI)</b></center>
                    <p class="p-3">Our college student Mr. Lodhe Ankush has got glorious success in PG level examinination as he stood IInd in University rank in M.Sc(BI).</p>     
                   </div>
                  </div>
                   
                 </div>
                 <div class="carousel-item">
                  <div class="crsl">
                  <div class="">
                   <center><b>Mr. Suryawanshi Avinash</b></center>
                    <center><img src="img/Suryawanshi Avinash.jpg" class="img-fluid" height="150" width="100" alt=""></center>
                    <center><b>University IInd Rank MSc (SE)</b></center>
                    <p class="p-3">Our college student Mr. Suryawanshi Avinash has got glorious success in PG level examinination as he stood IInd in University rank in M.Sc(BI).</p>     
                   </div>
                  </div>
                 </div>
                 <div class="carousel-item">
                   <div class="crsl">
                   <div class="">
                    <center><b>University Level Avishkar winners 2019</b></center>
                    <center><img src="img/Avishkar_University level 1 .jpg" class="img-fluid" height="180" width="300" alt=""></center>
                   </div>
                   </div>
                 </div>
                 <div class="carousel-item">
                  <div class="crsl">
                  <div class="">
                   <center><b>Avishkar Winner 2019</b></center>
                    <center><img src="img/Avishkar. 2jpg.jpg" class="img-fluid" height="180" width="300" alt=""></center>
                   </div>
                  </div>
                 </div>
                 <div class="carousel-item">
                  <div class="crsl">
                  <div class="">
                   <center><b>Hon.Vice Chairman sir in Tech-expo.</b></center>
                    <center><img src="img/techexpo_chairman.jpg" class="img-fluid" height="180" width="300" alt=""></center>
                   </div>
                  </div>
                 </div>
                 <div class="carousel-item">
                  <div class="crsl">
                  <div class="">
                   <center><b>Hon.Chairman sir visiting stalls in Tech-expo 2019 along with Prof. Kotgire S.L</b></center>
                    <center><img src="img/Techexpo chairman.jpg" class="img-fluid" height="180" width="300" alt=""></center>
                   </div>
                  </div>
                 </div>
                 <div class="carousel-item">
                  <div class="crsl">
                  <div class="">
                   <center><b>Zankar Fest</b></center>
                    <center><img src="img/Zankar2014.jpg" class="img-fluid"  height="180" width="300" alt=""></center>
                   </div>
                  </div>
                 </div>
                 <div class="carousel-item">
                   <div class="crsl">
                   <div class="">
                   <center><b>District Level AVSHKAR Winners-2019</b></center>
                    <center><img src="img/Avishkar-2019.jpg" class="img-fluid" height="180" width="300" alt=""></center>
                   </div>
                   </div>
                 </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
               </button>
              </div>
              </div>
             <!-- end carasoul item -->
          </div>
        </div>
        </div>
        <!--php footer-->
        <?php
        include'includedphp/footer.php';
        ?>
        <!--End php footer-->

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">


        $('.center').slick({
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 4,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
        });    </script>
  </body>
</html>
