
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Amit College - Bhubaneswar  </title>	

		<meta name="keywords" content="Amit  College Bhubaneswar" />
		<meta name="description" content="Amit  College Bhubaneswar">
		<meta name="author" content="Amit  College Bhubaneswar">
        <link rel="canonical" href="https://amitcollege.org.in/admissionform.php" />

<?php include"header.php";?>
<?php
 
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
    $firstName = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
      $lastName = isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : '';
     $dob = isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : '';
    $course = isset($_POST['course']) ? htmlspecialchars($_POST['course']) : '';
 
    $email = isset($_POST['mail']) ? filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phn']) ? htmlspecialchars($_POST['phn']) : '';
    $address = isset($_POST['adds']) ? htmlspecialchars($_POST['adds']) : '';

    // Validation
    if (empty($firstName)) exit("First Name is required.");
 
    if (empty($course)) exit("Stream Applied For is required.");
   if (empty($dob)) exit("Dob  is required.");
    if (empty($lastName)) exit("last Name is required.");
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

<div role="main" class="main">
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background:linear-gradient(to left, #d22523 0%, #592776 100%) !important;">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-dark font-weight-bold text-8" style="color:#fff !important;">Admission For 2025-2026</h1>

							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active" style="color:#000 !important;">Admission</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
    	<section class="section bg-color-light border-0 m-0">
					<div class="container">
						<div class="row">
						<div class="col-lg-3 order-2 order-lg-1">
							<aside class="sidebar mt-2">
								<h5 class="font-weight-bold">Admission</h5>
								<ul class="nav nav-list flex-column">
									<li class="nav-item"><a class="nav-link" href="http://amitcollege.org.in/page.php?page=177">Admission Procedure</a></li>
									<li class="nav-item"><a class="nav-link text-dark active" href="admissionform.php">Admission For 2025-2026</a></li>
									<li class="nav-item"><a class="nav-link" href="http://amitcollege.org.in/page.php?page=179">Fee Structure</a></li>
								</ul>
							</aside>
						</div>
						<div class="col-lg-9 order-1 order-lg-2">
							
							<div class="row justify-content-md-center">
								<div class="col-md-9">
									<div class="featured-box featured-box-primary text-left mt-0">
										<div class="box-content">
											<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Admission Enquiry!!!</h4>
											<form action="admissionform.php" id="frmSignUp" method="post" class="needs-validation">
												
										<div class="form-row">
										<div class="form-group col-lg-6">
										<label class="font-weight-bold text-dark text-2">First Name</label>
										<input type="text" value="" name="fname" class="form-control" required>
										</div>
										<div class="form-group col-lg-6">
										<label class="font-weight-bold text-dark text-2">Last Name</label>
										<input type="text" value="" name="lname"  class="form-control" required>
										</div>
										</div>
										<div class="form-row">
										    <div class="form-group col">
										       <label class="font-weight-bold text-dark text-2">DOB</label> 
										       <input type="date" value="" name="dob" class="form-control" required>
										    </div>
										</div>
										<div class="form-row">
										    <div class="form-group col">
										       <label class="font-weight-bold text-dark text-2">Email</label> 
										       <input type="email" name="mail" value=""  class="form-control" required>
										    </div>
										</div>
										<div class="form-row">
										    <div class="form-group col">
										       <label class="font-weight-bold text-dark text-2">Mobile</label> 
										       <input type="tel" value="" name="phn" class="form-control" required>
										    </div>
										</div>
										<div class="form-row">
										    <div class="form-group col">
										       <label class="font-weight-bold text-dark text-2">Address</label> 
										       <input type="text" value="" name="adds" class="form-control" required>
										    </div>
										</div>
								<div class="form-row">
										<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Stream Applied For</label>
								    	<select class="form-control" placeholder="Stream Applied for" name="course" >
								    	    <option value="" selected disabled>Select</option>
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
									 
									 
									 
									 
										
								 
											<div class="form-group col">
										<center> <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button></center>
														</div>	
											</form>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
						</div>
					</div>
				</section> 
    </div>

<?php include "footer.php";?>

