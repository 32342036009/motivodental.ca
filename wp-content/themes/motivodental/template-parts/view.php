<?php
        /*
        Template Name: View
        */
        //get_header();
        //error_reporting(1);
        ?>
<link href="<?= get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
<link href="<?= get_template_directory_uri(); ?>/assets/css/et-line.css" rel="stylesheet">
<link rel="stylesheet" href="http://webdevelopers1.com/motivodental/wp-content/themes/motivodental/style.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Source+Sans+Pro|Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
<script type="text/javascript" src="https://formsroostergrin.com/ortho-group/js/ink_signatures.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://formsroostergrin.com/ortho-group/js/label_text.js"></script>
<script>
 jQuery(function() {
	 jQuery(".datepicker").datepicker();
  });
  </script>

		<?php 
		//echo ABSPATH;
        $gender = $_POST['agree'];
        if($gender == 'male'){			
        $gender1 ="checked";			
        } elseif($gender == 'female'){
        $gender2 ="checked";
        }else{ }
		define('UPLOAD_DIR', '/home/webdevelopers1/public_html/motivodental/wp-content/themes/motivodental/assets/img/');
		$img = $_POST['sign'];
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data = base64_decode($img);
		$fname = uniqid() . '.png';
		$file = UPLOAD_DIR . $fname;
		$success = file_put_contents($file, $data);
		 $success ? $file : 'Unable to save the file.';
                if(!empty($_POST)){
                        $pname = $_POST['pname'];
                        $age = $_POST['age'];
                        $dob = $_POST['dob'];
                        $address = $_POST['address'];
                        $city = $_POST['city'];
                        $postal = $_POST['postal'];
                        $home = $_POST['home'];
                        $work = $_POST['work'];
                        $cell = $_POST['cell'];
                        $about = $_POST['about'];
                        $email = $_POST['email'];
                        $pholder = $_POST['pholder'];
                        $dbo = $_POST['dbo'];
                        $employer = $_POST['employer'];
                        $icompany = $_POST['icompany'];
                        $gplan = $_POST['gplan'];
                        $idcert = $_POST['idcert'];
                        $holder = $_POST['holder'];
                        $birthd = $_POST['birthd'];
                        $emp = $_POST['emp'];
                        $compi = $_POST['compi'];
                        $gp = $_POST['gp'];
                        $ici = $_POST['ici'];
                        $sign = $_POST['sign'];
                        $dates = $_POST['dates'];
                        $headers  = "From: ".$name."<".$email.">\n";   
                        $headers = 'MIME-Version: 1.0' . "\r\n";
                        //$headers. = "From: info@webdesigndemo1.com\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
                $headers .= 'From: Admin <info@webdevelopers1.com>' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $to = 'info@motivodental.ca';
                $subject = 'New patient info form';
         $message = "<div class='form-wrapper'>
                <div class='container'>	
        <div class='row row-bg-design'>
                <form action='view.php' method='POST' name='myform' id='app_form' class='form-bg-design sigpad'>
                <div class='row row_mgn'>    
                <div class=' col-sm-8 col-xs-12 text'>
                        <label>NAME:</label><input type='text' maxlength='' id='datepicker' name='pname' class='pname' value='$pname' />
                </div>
                <div class=' col-sm-4 col-xs-12 text'>
                        <label>AGE:</label><input type='text' maxlength='' id='age' name='age' class='' value='$age' />
                </div>						
                </div>
                <div class='row row_mgn'>    
                <div class=' col-sm-6 col-xs-12 text'>
                        <label>DATE OF BIRTH:</label><input type='text' maxlength='' id='datepicker' name='dob' class='' value=' $dob' />
                </div>
                <div class='col-sm-6 col-md-6 col-xs-12 text textH'>
                        <div class='row'>
                        <div class='col-sm-2 col-xs-3'><label>Sex:</label></div>
                                
                <div class='col-sm-3 col-xs-4'><input type='radio' name='agree' id='male' value='male'  $gender1 /> <label for='y4a1'>Male</label></div>
                <div class='col-sm-7 col-xs-5'><input type='radio' name='agree' id='femail' value='female'   $gender2/> <label for='y4a2'>Female</label></div>
                </div>

                                
                </div>					
                </div>
                <div class='row row_mgn'>    
                <div class=' col-sm-6 col-xs-12 text'>
                        <label>ADDRESS:</label><input type='text' maxlength='' id='address' name='address' class='' value='$address' />
                </div>
                <div class=' col-sm-6 col-xs-12 text'>
                        <label class=''>CITY:</label><input type='text' maxlength='' id='city' name='city' class='' value='$city' />
                </div>						
                </div>
                <div class='row row_mgn'>    
                <div class=' col-sm-6 col-xs-12 text'>
                        <label>POSTAL CODE:</label><input type='text' maxlength='' id='postal' name='postal' class='' value='$postal' />
                </div>
                <div class=' col-sm-6 col-xs-12 text'>
                        <label class=''>HOME#</label><input type='text' maxlength='' id='home' name='home' class='' value='$home' />
                </div>						
                </div>
                <div class='row row_mgn'>    
                <div class=' col-sm-6 col-xs-12 text'>
                        <label>WORK#</label><input type='text' maxlength='' id='work' name='work' class='' value='$work' />
                </div>
                <div class=' col-sm-6 col-xs-12 text'>
                        <label class=''>CELL#</label><input type='text' maxlength='' id='cell' name='cell' class='' value='$cell' />
                </div>						
                </div>
                <div class='row row_mgn'>    
                <div class=' col-sm-12 col-xs-12 text'>
                        <label>HOW DID YOU HEAR ABOUT US?</label><input type='text' maxlength='' id='about' name='about' class='' value=' $about' />
                </div>					
                </div>
                <div class='row row_mgn'>    
                <div class=' col-sm-12 col-xs-12 text'>
                        <label>EMAIL:</label><input type='text' maxlength='' id='email' name='email' class='' value='$email' />
                </div>					
                </div>
                <div class='row row_mgn'>    
                <div class=' col-sm-6 col-xs-12 text'>
                        <div class='row row_mgn'>    
                                <div class=' col-sm-12 text'>
                                        <h2 class='insurance-hdg'>INSURANCE #1</h2>
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>POLICY HOLDER:</label><input type='text' maxlength='' id='pholder' name='pholder' class='' value=' $pholder' />
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>DOB:</label><input type='text' maxlength='' id='dbo' name='dbo' class='' value='$dbo' />
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>EMPLOYER:</label><input type='text' maxlength='' id='employer' name='employer' class='' value='$employer' />
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>INS. COMPANY:</label><input type='text' maxlength='' id='icompany' name='icompany' class='' value='$icompany' />
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>GROUP/PLAN#</label><input type='text' maxlength='' id='gplan' name='gplan' class='' value='$gplan' />
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>ID/CERT.#</label><input type='text' maxlength='' id='idcert' name='idcert' class='' value='$idcert' />
                                </div>
                        </div>
                </div>					
                <div class=' col-sm-6 text'>
                        <div class='row row_mgn'>    
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <h2 class='insurance-hdg'>INSURANCE #2</h2>
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>POLICY HOLDER:</label><input type='text' maxlength='' id='holder' name='holder' class='' value='$holder' />
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>DOB:</label><input type='text' maxlength='' id='birthd' name='birthd' class='' value='$birthd' />
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>EMPLOYER:</label><input type='text' maxlength='' id='emp' name='emp' class='' value='$emp' />
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>INS. COMPANY:</label><input type='text' maxlength='' id='compi' name='compi' class='' value='$compi' />
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>GROUP/PLAN#</label><input type='text' maxlength='' id='gp' name='gp' class='' value='$gp' />
                                </div>
                        </div>
                        <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <label>ID/CERT.#</label><input type='text' maxlength='' id='ici' name='ici' class='' value='$ici' />
                                </div>
                        </div>
                </div>
                </div>
                <div class='row row_mgn'>
                                <div class=' col-sm-12 col-xs-12 text'>
                                        <p>If you do not wish to leave your credit card on file with us, you will be required to leave a 25% deposit following your appointment with us. This alternative may result in a small balance or credit on your account once insurance payment is received. It is important for you to understand that there may be a difference between our fees and what your insurance company will pay towards your treatment, and that you are responsible for any difference in fees.</p>
                                        <p>If you do not wish to leave your credit card on file with us, you will be required to leave a 25% deposit following your appointment with us. This alternative may result in a small balance or credit on your account once insurance payment is received. It is important for you to understand that there may be a difference between our fees and what your insurance company will pay towards your treatment, and that you are responsible for any difference in fees.</p>
                                        <p>Also I give consent to perform the dental and oral procedures deemed necessary for any treatment, including the use of local anesthetic and that I assume responsibility for the fees associated with those procedures.</p>
                                        <p>If you are in understanding with each statement, please indicate by signing below.</p>
                                </div>
                        </div>
                        <div class='row row_mgn'> 

                        <div class='col-md-2 col-sm-3 col-xs-12 text'>
                                <label>Patient Signature:</label>
                                
                        </div> 
                        <div class='col-md-7  col-sm-9 col-xs-12 text '>                   
                                <div class='signature' style='margin-top: 10px;'>
								<input type='hidden' name='sign' id='get_imgid' value='' >
								<img src='http://webdevelopers1.com/motivodental/wp-content/themes/motivodental/assets/img/$fname'>
								
                                </div>
                        </div>
                        <div class='col-md-3 col-sm-12 col-xs-12 text  '>
                                <label>Date:</label><input type='text' maxlength='' id='dates' name='dates' class='' value='$dates' />
                        </div>
                        </div>  
                        <div class='row row_mgn'>
                                <div class=' col-xs-12 text text-center'>					
                                </div>
                        </div>
                </form>
                </div>
                </div>
                </div>";
				$html_mailer = '
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Adventurous</title>

    </head><body style="background-image: url();"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td><table width="700" border="0" cellspacing="0" cellpadding="0"><tr><td height="120" align="center"><img src="http://webdevelopers1.com/motivodental/wp-content/uploads/2018/02/logo.jpg"  /></td></tr><tr><td height="1" bgcolor="#CCCCCC"></td></tr><tr><td style="font-size:18px; font-family:Arial, Helvetica, sans-serif; color:#000; line-height:18px;    background-color: #e0e6e8;
    opacity: 0.8;
    line-height: 33px;padding: 20px;"><p>'.$message.'</p></td></tr><tr><td height="45" align="center" bgcolor="#e5e5e5" style="font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#666; line-height:18px;">COPYRIGHT 2016 YCMP.ORG. ALL RIGHT RESERVED.</td></tr></table></body>';				
					
        $sent= mail( $to, $subject, $html_mailer, $headers);
                if($sent){ ?>
<script>window.location.href = 'http://webdevelopers1.com/motivodental/thank-you/'; </script>
       <?php  }
        else{
        echo "Failed Please Try Again!.";
        }

                }
                ?>

        <?php //get_footer(); ?>