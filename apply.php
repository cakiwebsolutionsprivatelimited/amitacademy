
<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require __DIR__ . '/PHPMailer/src/Exception.php';

// Make sure this path is correct based on your setup



if (isset($_POST['submit'])) {
    // Collect and sanitize form data
    $firstName = isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : '';
 
    $course = isset($_POST['course']) ? htmlspecialchars($_POST['course']) : '';
 
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';

    // Validation
    if (empty($firstName)) exit("First Name is required.");
 
    if (empty($course)) exit("Stream Applied For is required.");
 
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) exit("Invalid email format.");
    if (empty($phone)) exit("Phone Number is required.");
    if (empty($address)) exit("Address is required.");

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
      // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'subha.cloudjiffy@gmail.com'; // ✅ Remove newline from here
    $mail->Password   = 'ffdqluwnnexqcfza';            // ✅ Remove spaces or hidden characters
    $mail->SMTPSecure = 'tls';                         // or use PHPMailer::ENCRYPTION_STARTTLS
    $mail->Port       = 587;       // Port for TLS (usually 587), SSL is usually 465

        //Recipients
        // Recipients
    $mail->setFrom('subha.cloudjiffy@gmail.com', 'Academy of Management & Information Technology');
    $mail->addAddress(' amiteducation.ordc@gmail.com ');  // Add a recipient


        // Content
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = 'Academy of Management & Information Technology';
        $mail->Body    = "You have received a new message from the Academy of Management & Information Technology.\r\n\r\n" .
                         "First Name: $firstName\r\n" .
                       
                         "Stream Applied For: $course\r\n" .
                  
                         "Email: $email\r\n" .
                         "Phone: $phone\r\n" .
                         "Address: $address\r\n";

        $mail->send();
        echo "<script>alert('Message has been sent successfully');</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Animate.css for animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        :root {
            --primary-color: #2faadc;
            --secondary-color:#0096FF;
            --accent-color: #e91e63;
        }
        
        .banner {
            background:   var(--primary-color) ;
            color: white;
            padding: 2rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .banner-logo {
            height:500px;
             width: 100%;
        }
        
        .form-section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-top: -30px;
            position: relative;
            z-index: 10;
            padding: 2rem;
        }
        
        .form-title {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 0.5rem;
        }
        
        .footer {
            background-color: #343a40;
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }

            .accordion-button{

background-color: var(--secondary-color);
border: none !important;
color: white;




            }
        
        .accordion-button:not(.collapsed) {
            background-color: var(--primary-color);
            color: white;
            
            border: none !important;
        }
        
        .btn-primary {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #0d47a1;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        

        .bg-primary{

    background-color: var(--primary-color) !important;




        }
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(26, 118, 210, 0.25);
        }
        
        .floating-card {
            transition: all 0.3s ease;
        }
        
        .floating-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
      
       .logo{
            
            height:100px; width: 100%;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .banner {
                text-align: center;
            }
            
            .banner-info h1 {
                font-size: 1.5rem;
            }
            
            .form-section {
                margin-top: 0;

            }

             .banner-logo {
            height:300px;
             width: 100%;
        }
           .logo{
            
            height:100px; width: 100px;
        }
        
        }

        @media(max-width:450px){




      .banner-logo {
            height:200px;
             width: 100%;
        }
          
          .logo{
            
            height:100%;
            width: 100px;
        }
          
      }
      
   



 

    </style>
</head>
<body>
    <!-- Banner Section -->
 

    <div class="banner">

        
        <div class="container">



            <div class="row align-items-center">
                <div class="col-md-2 col-sm-12 text-center text-md-start mb-3 mb-md-0">
                    <img src="img/img/logo2.png" alt="University Logo" class="logo " style="">
                </div>
                <div class="col-md-10 col-sm-12 text-center text-md-start banner-info">


                    <center>   
<h2 class="animate__animated animate__fadeInDown">Academy of Management & Information Technology</h2>
                    <p class="lead animate__animated animate__fadeInUp">Academic Year 2025-2026</p>
                     </center>
                    
                </div>
            </div>
        </div>
    </div>

        <div class="row"><img src="img/ad-banner.jpg" alt="University Logo" class="banner-logo"></div>

    <!-- Main Content -->
    <main class="container my-4 pt-2">
        <div class="row">
            <!-- Form Section -->
            <div class="col-lg-8">
                <div class="form-section animate__animated animate__fadeIn">
    <form method="POST" action="apply.php">
        <div class="row mb-3 mt-4">
            <div class="col-md-12 mb-3">
                <label for="firstName" class="form-label">  Name <sup class="text-danger">* </sup> </label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
           
        </div>

        <div class="row mb-3">
            <div class="col-md-12 mb-3">
            






 














 

 

 




 
                <label for="course" class="form-label">Stream Applied For <sup class="text-danger">* </sup></label>
                <select class="form-select" id="course" name="course" required>
                    <option value="" selected disabled>Select Course</option>
                    <option value="MBA">MBA</option>
                    <option value="MJMC ">MJMC </option>
                    <option value="M.Sc Biotechnology ">M.Sc Biotechnology </option>
                     <option value="M.Sc Computer Science">M.Sc Computer Science</option>
                    <option value="BBA ">BBA </option>
                    <option value="BCA">BCA</option>
                     <option value="B.Sc Biotechnology ">B.Sc Biotechnology </option>
                    <option value="+3 Science  ">+3 Science  </option>
                    <option value="+3 Commerce ">+3 Commerce </option>
                     <option value="DMLT">DMLT</option>
                      <option value="BMLT">BMLT</option>
                  <option value="+2 Science">+2 Science</option>
             
                </select>
            </div>
          
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email   <sup class="text-danger">* </sup></label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number <sup class="text-danger">* </sup></label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address <sup class="text-danger">* </sup></label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
        </div>
    </form>
</div>

            </div>
       
            <!-- Sidebar -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                     <div class="d-flex justify-content-center my-3">
                       <button   class="btn btn-danger"  ><a href="https://amitcollege.org.in" class="text-light text-decoration-none"> Go To College Website </a></button>
        </div>
              
          
                <div class="card mb-4   floating-card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-bullhorn me-2"></i>Important Announcements</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <h6 class="text-primary">Application Deadline</h6>
                            <p>Last date to apply: June 30, 2025</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-primary">Entrance Exam Date</h6>
                            <p>July 15, 2025</p>
                        </div>
                        <div>
                            <h6 class="text-primary">Results</h6>
                            <p>August 5, 2025</p>
                        </div>
                    </div>
                </div>
                
                <div class="card floating-card  ">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-question-circle me-2"></i>Need Help?</h5>
                    </div>
                    <div class="card-body">
                        <p>If you have any queries regarding the application process, please contact:</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-envelope me-2 text-primary"></i>   amiteducation.ordc@gmail.com
</li>
                            <li><i class="fas fa-phone me-2 text-primary"></i> +91 8018890756 </li>
                            <li><i class="fas fa-clock me-2 text-primary"></i> Mon-Fri: 9:00 AM - 5:00 PM</li>
                          			<li><i class="far fa-clock me-2 text-primary"></i> Saturday - 9am to 2pm</li>
								<li><i class="far fa-clock me-2 text-primary"></i> Sunday - Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Accordions Section -->
        <section class="my-5 animate__animated animate__fadeIn">
            <h2 class="mb-4 text-primary">Frequently Asked Questions</h2>
            
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What documents do I need to apply?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You will need to submit the following documents with your application:
                            <ul>
                                <li>Recent passport-sized photograph</li>
                                <li>Scanned copy of your signature</li>
                                <li>ID proof (Passport/Driver's License/National ID)</li>
                                <li>Undergraduate degree certificate and transcripts</li>
                                <li>Statement of purpose (for specific programs)</li>
                                <li>Two letters of recommendation (for specific programs)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What are the eligibility criteria?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The general eligibility criteria include:
                            <ul>
                                <li>Bachelor's degree with minimum 55% marks or equivalent CGPA</li>
                                
                                <li>For MBA: Bachelor's degree in any discipline with 50% marks</li>
                                <li>For M.Sc.  programs: Bachelor's degree in relevant subject</li>
                            </ul>
                            Specific programs may have additional requirements.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How can I pay the application fee?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The application fee can be paid online through:
                            <ul>
                                <li>Credit/Debit Card</li>
                                <li>Net Banking</li>
                                <li>UPI Payment</li>
                                <li>Mobile Wallets</li>
                            </ul>
                            The application fee is non-refundable under any circumstances.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How will I know if my application is successful?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            After submitting your application:
                            <ul>
                                <li>You will receive a confirmation email with your application reference number</li>
                                <li>You can check your application status through the student portal</li>
                                <li>Shortlisted candidates will receive an email for further steps</li>
                                <li>Final results will be announced on the university website</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

 

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
         
    </script>
</body>
</html>




