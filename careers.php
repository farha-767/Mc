<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <!-- <meta name="theme-color" content="#33a16e" /> -->
  <title>Careers</title>
  <meta name="author" content="">
  <meta name="description" content="MCK KUTTY">
  <meta name="keywords"
    content="mck kutty, work">



  <!-- FAVICON FILES -->
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="144x144">
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/favicon/fav.png" rel="apple-touch-icon">
  <link href="images/favicon/fav.png" rel="shortcut icon">

  <!-- CSS FILES -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/slick.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/banner.css">
</head>

<body>

<?php
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $experience = $_POST['experience'];
    $department = $_POST['department'];

    // File upload
    $resume = $_FILES['resume'];
    $resume_name = $resume['name'];
    $resume_tmp = $resume['tmp_name'];
    $resume_size = $resume['size'];
    $resume_type = $resume['type'];

    // Check if file is a PDF
    if ($resume_type == 'application/pdf') {
        // Prepare email content
        $to = 'hr@mckkutty.com'; // Set recipient email address
        $subject = 'Job Application Submission';

        // Set headers
        $boundary = md5(time());
        $headers = "From: mckkutty.com <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

        // Email body
        $message = "--$boundary\r\n";
        $message .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= '<html><body>';
        $message .= '<h2>Job Application Submission</h2>';
        $message .= '<table style="width: 100%;">';
        $message .= "<tr><td style=\"padding: 8px;\"><strong>Name:</strong></td><td style=\"padding: 8px;\">$name</td></tr>";
        $message .= "<tr><td style=\"padding: 8px;\"><strong>Email:</strong></td><td style=\"padding: 8px;\">$email</td></tr>";
        $message .= "<tr><td style=\"padding: 8px;\"><strong>Phone:</strong></td><td style=\"padding: 8px;\">$phone</td></tr>";
        $message .= "<tr><td style=\"padding: 8px;\"><strong>Location:</strong></td><td style=\"padding: 8px;\">$location</td></tr>";
        $message .= "<tr><td style=\"padding: 8px;\"><strong>Years of Work Experience:</strong></td><td style=\"padding: 8px;\">$experience</td></tr>";
        $message .= "<tr><td style=\"padding: 8px;\"><strong>Department:</strong></td><td style=\"padding: 8px;\">$department</td></tr>";
        $message .= '</table>';
        $message .= '</body></html>';
        $message .= "\r\n\r\n";





        // PDF attachment
        $file_content = file_get_contents($resume_tmp);
        $file_content = chunk_split(base64_encode($file_content));
        $message .= "--$boundary\r\n";
        $message .= "Content-Type: application/pdf; name=\"$resume_name\"\r\n";
        $message .= "Content-Disposition: attachment; filename=\"$resume_name\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "\r\n" . $file_content . "\r\n";
        $message .= "--$boundary--";

        // Send email with attachment
        if (mail($to, $subject, $message, $headers)) {
            echo '<script>alert("Email sent successfully.");</script>';
        } else {
            echo '<script>alert("Email sending failed.");</script>';
        }
    } else {
        echo '<script>alert("Please upload a PDF file.");</script>';
    }
}
?>














  <div class="nav-a">
    <nav class="navbar navbar-1 navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery">Gallery</a>
          </li>
        </ul>
      </div>
      <a class="navbar-brand" href="index"><img src="images/logo-mckkutty-03.svg" alt="" height="30px"></a>
      <div class="collapse nav-1-3sec navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-1-bg" href="careers">Careers</a>
          </li>
        </ul>
      </div>

    </nav>
    <nav class="navbar navbar-2 navbar-expand-lg navbar-light nav-border-a">
      <a class="navbar-brand navbar-brand-2" href="index"><img src="images/logo-mckkutty-03.svg" alt=""
          height="30px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ourcompany">our company</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service">Services</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Projects
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="ongoingprojects">On Going Projects</a>
              <a class="dropdown-item" href="revampingprojects">Revamping projects</a>
              <a class="dropdown-item" href="completed-projects">Completed Projects</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clients">Clients</a>
          </li>
          <li class="nav-item nav-item-2">
            <a class="nav-link" href="gallery">Gallery</a>
          </li>
          <li class="nav-item nav-item-2">
            <a class="nav-link" href="javascript:void(0);">News</a>
          </li>
          <li class="nav-item nav-item-2">
            <a class="nav-link" href="careers">Careers</a>
          </li>
          <li class="nav-item nav-item-2">
            <a class="nav-link" href="contact">Contact</a>
          </li>
          
          <li class=" login nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              LOGIN
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="https://mckkutty.in/admin/login">ADMIN</a>
              <a class="dropdown-item" href="">BRANCHES</a>
            </div>
          </li>
        </ul>

      </div>

    </nav>
  </div>

  <main>
    <div class="pad-div"></div>
    <div class="container">
            <p class="navigation-p"><a href="index">Home</a> <strong>. Careers</strong></p>
    </div>

    <section>
        <div class="contact-form container">
            <h3>Join us</h3>
        </div>
    </section>


    <section class="section-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/contemporary-business-team.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <div class="abt-head career-h" >
                      <h3 >MCK Kutty is recruiting!
                      </h3>
                    </div>
                    <div class="abt-para">
                      <p>We place a high value on internal growth and employee learning and development. Each employee begins their journey with us with above-industry standard training, and is encouraged to grow their horizons with support from company infrastructure and leadership.
                        <br>
                        Collaboration and care are two driving forces of our culture. Our inclusive environment of discovery, support, and opportunity is ready for the next generation of leaders.
                      </p>
                    </div>
      
                  </div>
            </div>
        </div>
    </section>

    <section class="section-pad">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-6">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="validationDefault01">Name</label>
                                <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Phone</label>
                            <input type="text" class="form-control" id="inputAddress" name="phone" placeholder="Phone" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="validationDefault01">Location</label>
                                <input type="text" class="form-control" id="validationDefault01" name="location" placeholder="Location">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Years of Work Experience</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="experience">
                                    <option selected>Choose...</option>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                    <option>10+</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="validationDefault01">Department</label>
                                <input type="text" class="form-control" id="validationDefault01" name="department" placeholder="Department">
                            </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Resume (PDF)</label>
                            <input type="file" class="form-control form-control-file" id="exampleFormControlFile1" name="resume" accept="application/pdf" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

  </main>



  <footer class="mt-5">
    <div class=" footer">
      <div class="container-fluid">
        <div class="row">
          <div class=" col-md-3 col-12 about-company">
            <h2><img src="images/logo-mckkutty-03-white.svg" alt=""></h2>
            <p class="footer-para">An ISO Certified Company</p>
            <ul>
              <li><a href="https://www.facebook.com/mckkuttyengineers/" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path
                      d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"
                      fill="rgba(255,255,255,1)"></path>
                  </svg>
                </a></li>
              <li><a href="https://www.youtube.com/@mckkuttyengineerspvtltd927" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path
                      d="M12.2439 4C12.778 4.00294 14.1143 4.01586 15.5341 4.07273L16.0375 4.09468C17.467 4.16236 18.8953 4.27798 19.6037 4.4755C20.5486 4.74095 21.2913 5.5155 21.5423 6.49732C21.942 8.05641 21.992 11.0994 21.9982 11.8358L21.9991 11.9884L21.9991 11.9991C21.9991 11.9991 21.9991 12.0028 21.9991 12.0099L21.9982 12.1625C21.992 12.8989 21.942 15.9419 21.5423 17.501C21.2878 18.4864 20.5451 19.261 19.6037 19.5228C18.8953 19.7203 17.467 19.8359 16.0375 19.9036L15.5341 19.9255C14.1143 19.9824 12.778 19.9953 12.2439 19.9983L12.0095 19.9991L11.9991 19.9991C11.9991 19.9991 11.9956 19.9991 11.9887 19.9991L11.7545 19.9983C10.6241 19.9921 5.89772 19.941 4.39451 19.5228C3.4496 19.2573 2.70692 18.4828 2.45587 17.501C2.0562 15.9419 2.00624 12.8989 2 12.1625V11.8358C2.00624 11.0994 2.0562 8.05641 2.45587 6.49732C2.7104 5.51186 3.45308 4.73732 4.39451 4.4755C5.89772 4.05723 10.6241 4.00622 11.7545 4H12.2439ZM9.99911 8.49914V15.4991L15.9991 11.9991L9.99911 8.49914Z"
                      fill="rgba(255,255,255,1)"></path>
                  </svg>
                </a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-4 col-12 links footer-div">
            <h4 class="mt-lg-0 mt-sm-3">quick Links</h4>
            <ul class="m-0 p-0">
              <li> <a href="index">Home</a></li>
              <li> <a href="ourcompany">Our company</a></li>
              <li> <a href="Gallery">Gallery</a></li>
              <li> <a href="service">Services</a></li>
              <li> <a href="careers">Careers</a></li>
              <li> <a href="contact">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-4 col-12 links footer-div">
            <h4 class="mt-lg-0 mt-sm-3">projects</h4>
            <ul class="m-0 p-0">
              <li> <a href="ongoingprojects">On Going projects</a></li>
              <li> <a href="revampingprojects">Revamping projects</a></li>
              <li> <a href="completed-projects">Completed projects </a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-4 col-12 location footer-div">
            <h4 class="mt-lg-0 mt-sm-3">contact</h4>
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                <path
                  d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z"
                  fill="rgba(255,255,255,1)"></path>
              </svg>
              22/F , Heavy Industrial Area , Hathkhoj P.O, Bhilai, Durg Dist, Chhattisgarh,- 490024
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                <path
                  d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z"
                  fill="rgba(255,255,255,1)"></path>
              </svg>
              MCK Tower, A K Colony Road, Jannapura, Bhadravathi-577301, Shivamogga (Dist), Karnataka
            </p>
            <p class="mb-0"><a href="Tel:+91 9448137146"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  width="18" height="18">
                  <path
                    d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"
                    fill="rgba(255,255,255,1)"></path>
                </svg> +91 9448137146</a></p>
            <p class="mb-0"><a href="Tel:+91 8010900726"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  width="18" height="18">
                  <path
                    d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"
                    fill="rgba(255,255,255,1)"></path>
                </svg> +91 8010900726</a></p>
            <br>
            <p><a href="mailto:info@mckkutty.com"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                  height="16">
                  <path
                    d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z"
                    fill="rgba(255,255,255,1)"></path>
                </svg> info@mckkutty.com</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col copyright">
            <p class=""><small class="text-white-50">© 2023 MCKkutty. Powered by <a href="https://dostudio.co.in/">DO
                  Studio</a></small></p>
          </div>
        </div>
      </div>
    </div>
  </footer>














  <!-- JS FILES -->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/slick-animation.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
  <script src='js/jquery.parallax.min.js'></script>



  <script src="js/scripts.js"></script>



</body>

</html>