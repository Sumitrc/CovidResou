<!DOCTYPE hTML>
    <html lang="en">
        <?php include('link.php'); ?>
        <body>
        <?php include('header.php'); ?>
        
<!---home page start
<section class="home" id="home">
     <div class="content">
        <span>Covid-19 Awareness</span>
        <h3>stay safe, stay home</h3>
        <p>In the face of uncertainty, our actions can make a difference.</p>
        <a href="#" class="btn">protect now</a>
        <div class="image">
        <img src="img/logo.png" alt="">
    </div>
</section>
  
   <div>
       <b class="coronavirus-statistics">Coronavirus Statistics</b>
       <div class="coronavirus-covid-19-dashboa">
        coronavirus (COVID-19) Dashboard
      </div>
      <b class="b">92,52,365</b>
      <div class="active-cases">Active Case’s</div>
      <b class="b1">92,52,365</b>
      <div class="recovered-cases">recovered Case’s</div>
      <img class="vector-icon" alt="" src="./public/vector.svg">
--->
<!---home page start--->
            <div class="container-fluid " style="background-color:#9EF5F5;">
            <style>
                .container-fluid{
                         border-radius:0px 0px 150px 0px;
                }
                </style>
                <div class="row">
                    <div class="col-md-6">
                    <p style=" color:gray ; margin-top: 1rem;">covid-19 Awareness </p>
                            <div class="slider-content">  
                           
                                <style>
                                    .slider-content{
                                        text-align:center;
                                        margin-top: 5rem;
                                    }
                                    </style>
                                   
                                <h1 Style="color: blue;"><b>Stay Safe. Stay Home.</b></h1>
                                <p Style="color:gray;">In The Face Of Uncertainty, Our Actions Can Make A Difference. </p>
                                <a class="btn btn-primary" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" role="button">Learn More</a>
                               <!-- <button href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" style=
                                      " display: inline-block;
                                       margin-top: 1rem;
                                       padding:1rem 4rem;
                                       border-radius: 3rem;
                                       background:var(--red);
                                       color:#fff;
                                       overflow: hidden;
                                       font-size: 1.0rem;"
                                        >LEARN MORE</button>-->
                                <style>
                                    .btn{
                                       display: inline-block;
                                       margin-top: 1rem;
                                       padding:1rem 4rem;
                                       border-radius: 3rem;
                                       background:var(--red);
                                       color:#fff;
                                       overflow: hidden;
                                       font-size: 1.0rem;
                                        }
                                </style>
                            </div>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="img">
                    <img style="width:105%;   border-radius:0px 0px 150px 0px" src="./img/logo.png" alt="">
                </div>   
                </div>
                </div>
                </div>
<!---Coronavirus Statistics--->
            <div class="container pt-4">
                <div class="row">
                    <div class="col">
                        <style>
                            .col{
                                text-align:center;
                               
                            }
                            </style>
                        <h2  Style="color:blue";>Coronavirus Statistics</h2>
                        <h6 style="color:gray">coronavirus (COVID-19)  Dashboard</h6>
                    </div>
                </div>
                <?php
        
        // Initialize cURL session
        $ch = curl_init();
        
        // Set the cURL options
        curl_setopt($ch, CURLOPT_URL, 'https://data.covid19india.org/v4/min/data.min.json'); // Replace with the API URL you want to call
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string instead of outputting it
        
        // Optional: If the API requires authentication, you can set the username and password here
        // curl_setopt($ch, CURLOPT_USERPWD, 'username:password');
        
        // Optional: Set additional cURL options as needed, such as headers, request type, etc.
        
        // Execute the cURL session and store the result in $response
        $response = curl_exec($ch);
        
        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'cURL error: ' . curl_error($ch);
        }
        
        // Close the cURL session
        curl_close($ch);
        
        // Now, $response contains the API response data
        // You can parse and process the data as needed
    
        
        
        ?>
                <div class="container pb-4">
    <div class="row align-items-center justify-content-between">
        <div class="col-md-4">
            <div class="cases text-center">
                <i class="fa-solid fa-virus"></i>
                <h5><b><?php echo json_decode($response)->tested?></b></h5>
                <p>confirmed cases</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cases text-center">
                <i class="fa-solid fa-virus"></i>
                <h5><b><?php echo json_decode($response)->confirmed?></b></h5>
                <p>Death Case’s</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cases text-center">
                <i class="fa-solid fa-virus"></i>
                <h5><b><?php echo json_decode($response)->recovered?></b></h5>
                <p>Recovered Case’s</p>
            </div>
        </div>
    </div>
</div>

                  
        <style>
    .green-icon-list {
        list-style-type: none;
        padding-left: 0;
    }

    .green-icon {
        color: green;
        margin-right: 10px;
    }
</style>

<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <div class="img" style="position:relative; z-index:1;">
                <video style="border-radius:50px 50px 50px 50px" controls src="img/symp2.mp4" width="600">
                    <div style="position:absolute;left:30%;top:50%;z-index:3;">
                        <h3 style="color:#fff;">What is corona virus?</h3>
                    </div>
                </video>
            </div>
        </div>
        <div class="col-md-6">
            <h3 style="color:blue">Symptoms Of Coronavirus</h3>
            <ul class="green-icon-list">
                <li><i class="green-icon fas fa-circle"></i> Fever or chill</li>
                <li><i class="green-icon fas fa-circle"></i> Cough</li>
                <li><i class="green-icon fas fa-circle"></i> Shortness of breath or difficulty breathing</li>
                <li><i class="green-icon fas fa-circle"></i> Fatigue</li>
                <li><i class="green-icon fas fa-circle"></i> Muscle or body aches</li>
                <li><i class="green-icon fas fa-circle"></i> Loss of taste or smell</li>
            </ul>
            <a href="#prevent" class="btn">How to prevent</a>
        </div>
    </div>
</div>

<!--second section-->

                      <!--    <div class="container pt-2">-->
   <div class="container py-4"></div>
        <div class="row">
            <div class="col-md-6">
                <h3 style="color: blue;">Millions globally affected by COVID-19</h3>
                <ul class="col-md-6 list-unstyled"> <!-- Added "list-unstyled" class to remove bullets -->
                    <li><i class="green-icon fas fa-circle"></i> Pandemic Impact: COVID-19 affects millions worldwide through illness and disruption.</li>
                    <li><i class="green-icon fas fa-circle"></i> Health Strain: Global health systems strained by COVID-19's widespread impact.</li>
                    <li><i class="green-icon fas fa-circle"></i> Shortness of breath or difficulty breathing</li>
                </ul>
                <a href="#protect" class="btn">Protect Now</a>
            </div>
            <div class="col-md-6">
                <div class="img" >
                    <video style="border-radius:50px 50px 50px 50px"controls src="img/prevent.mp4" width="900"></video>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
                         <!--cards section-->
                         <prevent id="prevent">
                         <div class="container pt-4">
                <div class="row">
                    <div class="col">
                        <style>
                            .col{
                                text-align:center;
                               
                            }
                            </style>
                            <section id="section">
                        <h4 Style="color:blue";>How To Prevent Coronavirus?</h4>
                        <p style="color:gray;">Wearing a mask is not just a sign of caution; it's a symbol of compassion for the health of others.</p>

                        </div>
                        </div>
                        </div>
<style>
 .card {
    position:relative;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  margin: 1rem
        
 }


 .card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
 }

 .container {
  
 
 } 
 .main{
    position:relative;
    background-color:#C9FBFB;
    width:100%;
    height:120px;
    display:flex;
    align-items:center;
    justify-content:center;
    
 }
 .fa-solid
 {
    font-size:40px;
    color:blue;
 }
</style>





<div class="conatiner">
    <div class="row">
        <div class="col-md-3">
       

        <div class="card" style="width: 18rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
     
  <div class="main">
 
    <i class="fa-solid fa-house" ></i>

  </div>

  <div class="card-body">
    <h5 class="card-title">Stay at Home</h5>
    <p class="card-text">Stay-at-home measures during COVID-19 involved working remotely, essential outings only, distancing, masks,    and hygiene to curb virus spread, adapting to changing guidelines.</p> 
    </p>
  </div>
</div>
        </div>
        <div class="col-md-3">
       
<div class="card" style="width: 18rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
  <div class="main">
  <i class="fa-sharp fa-solid fa-people-arrows"></i>
  </div>
  <div class="card-body">
    <h5 class="card-title">Physical distance</h5>
    <p class="card-text"> The recommended distance for physical distancing varies by health authorities and circumstances, but a common guideline is to maintain at least 6 feet (about 2 meters) of distance from others. .</p> 
    </p>
  </div>
</div></div>
        <div class="col-md-3">
 
<div class="card" style="width: 18rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
  <div class="main">
  <i class="fa-solid fa-mask-face"></i>
  </div>
  <div class="card-body">
    <h5 class="card-title">Mask Usage</h5>
    <p class="card-text">Stay-at-home measures during COVID-19 involved working remotely,Wear masks in public settings, especially when maintaining physical distance is challenging.</p> 
    </p>
  </div>
</div></div>
<div class="col-md-3">

<div class="card" style="width: 18rem;">
  <div class="main">
  <i class="fa-solid fa-syringe"></i>
  </div>
  <div class="card-body">
    <h5 class="card-title">Vaccination</h5>
    <p class="card-text"> Vaccination for COVID-19 involves administering vaccines that have been developed to provide immunity against the virus responsible for the COVID-19 disease, </p> 
    </p>
  </div>
</div>
</div>
    </div>
</div>

<!--4 card section-->
<Symptoms id="Symptoms">
<div class="container pt-4">
<div  >
        
        <h3 style="color:blue;text-align:center;">Symptoms Of Coronavirus </h3>
    </div>
    </br>
    <p style="text-align:center; color:gray;"> COVID's invisible grip reveals itself through diverse symptoms, urging caution
        and care.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 30px 30px 30px 30px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/12.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">High Fever</h5>
                                <p class="card-text">High fever, often a sign of underlying infection, demands
                                    prompt medical attention to prevent complications and ensure proper treatment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 30px 30px 30px 30px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/sys.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Shortness of Breath</h5>
                                <p class="card-text">Caused by respiratory distress due to lung inflammation. Seek
                                    medical attention if you experience difficulty breathing, persistent chest pain, or
                                    bluish lips.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-4">
        <div class="col-md-6">
            <div class="" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 30px 30px 30px 30px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/34.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Cough</h5>
                            <p class="card-text">Characterized by a dry, persistent hacking cough. If you develop a new,
                                continuous cough, it could be a sign of infection; consider testing and self-isolation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 00px 30px 30px 00px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/45.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body;color:#9797ff;">
                            <h5 class="card-title">Respiratory Symptoms</h5>
                            <p class="card-text">
                            <p>COVID-19 respiratory symptoms include cough, especially if accompanied by chest pain or
                                bluish lips</p>
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

    
            </div>
            
           <!-- <div class="container pt-4">-->
    <div class="row">
        <div class="col-md-7">
            <p style="margin-left:10rem">If you or someone you know is experiencing symptoms that could be related to COVID-19, it's important to seek medical advice, especially if you have underlying health conditions .</p>
        </div>
        <div class="col-md-4 text-md-end">
            <a class="btn btn-primary" href="https://covid19.karnataka.gov.in/page/Helpline/en" role="button">HelpLine</a>
        </div>
    </div>
</div>

      
</div>
<!--end of 4 card section-->
<!--how to protect-->
<protect id="protect">
<div class="container pt-4"></div>
<h3 style="color: blue;text-align:center;">How To Protect Yourself?</h3> 
<p style="color:gray; text-align:center;"> In the face of COVID-19, protection begins with knowledge and ends with responsible action.</p>

<div class="container pt-2">
        <div class="col-md-6">
</div> 
        </div>
        <div class="row">  
        
        <br>
        <div class="col-md-3" Style="margin-left:7rem">
            <h4><b>You Should Do</b></h4>
            <ul>
                <li>Wear Mask</li>
                <li>Social Distance</li>
                <li>Wash Hands Frequently</li>
                <li>Travel Safety</li>
                <li>Vaccination</li>
            </ul>
        </div>
        
        <div class="col-md-4">
            <h4><b>You Should Not Do</b></h4>
            <ul>
                <li>Avoid Close Contact </li>
                <li>Avoid Crowded Places</li>
                <li>Avoid Non-Essential Travel</li>
                <li>Avoid Touching Your Face</li>
                <li>Avoid Handshakes And Hugs</li>
            </ul>
        </div>
</br>
        <div class="col-md-4">
            <div class="img">
                <img style="width: 60%;" src="./img/12" alt="">
            </div>
        </div>
    </div>
</div>

            <!--news and articale-->
        
            <!-- <div class="container pt-4">-->
            <div class="slider-content"> 
              <h3 Style="color:blue;">News And Articles</h3>
              <p Style="color:gray;">COVID's invisible grip reveals itself through diverse symptoms, urging caution and care.</p>
                          </div>
</div>
         
 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .video-container {
            display: flex;
            justify-content: space-between;
            gap: 20px; /* Adjust the spacing as needed */
            max-width: 1440px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .video-item {
            flex: 1;
            text-align: center;
        }

        video {
            width: 100%; /* Responsive video width */
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        h6 {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        .image-item {
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <div class="video-container">
        <div class="video-item">
            <video id="video1" controls>
                <source src="img/n1.mp4" type="video/mp4">
            </video>
            <h6>How Corona Virus Is Very Contagious</h6>
        </div>

        <div class="video-item">
            <video id="video2" controls>
                <source src="img/news2.mp4" type="video/mp4">
            </video>
            <h6>Additional Information about Video 2</h6>
        </div>

        <div class="image-item">
            <a href="https://www.gavi.org/vaccineswork/alpha-omicron-everything-you-need-know-about-coronavirus-variants-concern?gclid=Cj0KCQjwi7GnBhDXARIsAFLvH4mF0BwiBskYOXrzyT9Qm52ve0uJyZ-vuqGYWyf0pyf29xe0eqM1ssEaAnh9EALw_wcB">
                <img src="./img/article3.png" alt="Clickable Image">
            </a>
            <h6>
                <a href="https://www.gavi.org/vaccineswork/alpha-omicron-everything-you-need-know-about-coronavirus-variants-concern?gclid=Cj0KCQjwi7GnBhDXARIsAFLvH4mF0BwiBskYOXrzyT9Qm52ve0uJyZ-vuqGYWyf0pyf29xe0eqM1ssEaAnh9EALw_wcB">
                    Click The Image For Additional Information About COVID-19
                </a>
            </h6>
        </div>
    </div>
<!--user comment-->
<style>
        /* Style the comment icon */
        .comment-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Style the comment form (Initially Hidden) */
        #comment-form {
            position: fixed;
            bottom: 90px;
            right: 20px;
            display: none;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 400px;
        }

        /* Add more CSS styles for the comment form fields as needed */
    </style>

<!-- Comment Icon -->
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "comments";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection failed to database due to " . mysqli_connect_error());
}

$insert = false;

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $desc = mysqli_real_escape_string($con, $_POST['other']);

    // Perform input validation (you can add more validation as needed)
    if (empty($name) || empty($age) || empty($gender) || empty($email) || empty($phone)) {
        echo "All fields are required!";
    } else {
        // SQL query to insert data into the database
        $sql = "INSERT INTO `user` (`Name`,  `Other`,) 
                VALUES ('$name',  '$desc',)";

        // Execute the SQL query
        if ($con->query($sql) === true) {
            $insert = true;
        } else {
            echo "ERROR: " . $sql . "<br>" . $con->error;
        }
    }

    // Close the database connection
    $con->close();
}
?>
<div id="comment-icon" class="comment-icon">
    <i class="fas fa-comment"></i>
</div>
<style>/* Style the comment form */
#comment-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f4f4f4;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    display: none;
    position: fixed;
    bottom: 90px;
    right: 20px;
}

#comment-form label {
    font-weight: bold;
}

#comment-form input[type="text"],
#comment-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

#comment-form button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 3px;
    font-size: 16px;
}

#comment-form button:hover {
    background-color: #0056b3;
}

/* Add more CSS styles for the comment form fields as needed */
</style>
<!-- Comment Form (Initially Hidden) -->
<form id="comment-form">
   
    <input type="text" name="name" id="name" placeholder="Enter your name">


    <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter  your comments"></textarea>

    <button class="btn" type="submit" name="submit">Submit</button>
</form>

<!-- Comment Display Area -->
<div id="comment-list"></div>

<script>
    // Toggle comment form visibility when clicking the comment icon
    const commentIcon = document.getElementById('comment-icon');
    const commentForm = document.getElementById('comment-form');

    commentIcon.addEventListener('click', () => {
        commentForm.style.display = commentForm.style.display === 'none' ? 'block' : 'none';
    });
</script>

<!--user commnet end-->
<!--footer section-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <style>
        /* Styling for the footer box */
        .footer-box {
            background-color: #C9FBFB;
            /* Grey background color */
            padding: 40px 0;
            /* Adding padding for spacing */
        }

        /* Styling for the footer sections */
        .footer-section {
            color: #000;
            /* Black text color */
            padding: 0 20px;
            /* Adding padding for spacing */
        }

        /* Styling for the footer heading */
        .footer-heading {
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Styling for the footer links */
        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 8px;
        }

        .footer-links a {
            text-decoration: none;
            color: #000;
            /* Black link color */
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #007bff;
        }

        /* Styling for the entire footer */
        .bg-grey {
            background-color: #54547a;
            /* Grey background color */
        }

        /* Basic styling for the entire page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 40px;
        }

        /* Additional styling for larger screens */
        @media (min-width: 768px) {
            .container {
                margin-top: 60px;
            }
        }
    </style>
<div class="container pt-4"></div>
    <div class="footer-box">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-3 footer-section">
                    <h4 class="footer-heading">About COVID-19</h4>
                    <p>Explore insights into the symptoms, and preventive measures. Follow official guidelines and contribute to the collective effort to curb the spread of COVID-19.</p>
                </div>

                <!-- Links Section -->
                <div class="col-md-3 footer-section">
                    <h4 class="footer-heading">Links</h4>
                    <ul class="footer-links list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Reports</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <!-- Resources Section -->
                <div class="col-md-3 footer-section">
                    <h4 class="footer-heading">Resources</h4>
                    <ul class="footer-links list-unstyled">
                        <li><a href="https://covid19.india.gov.in/documents/">Documentation</a></li>
                        <li><a href="https://www.youtube.com/watch?v=bLfkYg4TUXY">Tutorials</a></li>
                        <li><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/donate">Support</a></li>
                    </ul>
                </div>

                <!-- Social Media Section -->
                <style>.footer-links i:hover {
    color: #ff5733; /* Change to a different color when hovered */
  
}
</style>
                <div class="col-md-3 footer-section">
    <h4 class="footer-heading"style="text-align:center">Social Media</h4>
    <ul class="footer-links list-unstyled" style="display: flex; justify-content: space-between;">
        <li><a href="https://www.facebook.com/LongCovidPage/"><i class="fab fa-facebook" style="font-size: 24px; color: #1877f2;"></i></a></li>
        <li><a href="https://www.instagram.com/preventcovid19/?hl=en"><i class="fab fa-instagram" style="font-size: 24px; color: #e4405f;"></i></a></li>
        <li><a href="https://www.longcovid.org/"><i class="fab fa-google" style="font-size: 24px; color: #4285f4;"></i></a></li>
    </ul>
</div>


            </div>
        </div>
    </div>
    <footer class="bg-grey text-white text-center py-3">
        <p>&copy; Copyright @ 2023 designed by VS. All rights reserved.</p>
    </footer>
<!--footer section end-->
        </body>
        </html>
    
