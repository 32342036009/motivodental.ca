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

		//print_R($_POST);

		$first = $_POST['6'];
        if($first == '6a'){
           $first1 ="checked";
        } elseif($first == '6b'){
        $first2 ="checked";
        }else{ }


         $second = $_POST['7'];
        if($second == '7a'){
           $sec ="checked";
        } elseif($second == '7b'){
        $sec2 ="checked";
        }else{ }



           $third = $_POST['8'];
        if($third == '8a'){
           $third1 ="checked";
        } elseif($third == '8b'){
        $third2 ="checked";
        }else{ }

 $four = $_POST['9'];
        if($four == '9a'){
           $four1 ="checked";
        } elseif($four == '9b'){
        $four2 ="checked";
        }else{ }


        $five = $_POST['10'];
        if($five == '10a'){
           $five1 ="checked";
        } elseif($five == '10b'){
        $five2 ="checked";
        }else{ }

        $f1b = $_POST['11'];
        if($f1b == '11a'){
           $f1b1 ="checked";
        } elseif($five == '11b'){
        $f1b2 ="checked";
        }else{ }


        $ev = $_POST['12'];
        if($ev == '12a'){
           $five11 ="checked";
        } elseif($ev == '12b'){
        	$five22 ="checked";
        }else{ }

        $tw = $_POST['13'];
        if($tw == '13a'){
           $tw1 ="checked";
        } elseif($tw == '13b'){
        $tw2 ="checked";
        }else{ }


        $th = $_POST['14'];
        if($th == '14a'){
           $ths1 ="checked";
        } elseif($th == '14b'){
        $ths2 ="checked";
        }else{ }


        $fo = $_POST['15'];
        if($fo == '15a'){
           $fo1 ="checked";
        } elseif($fo == '15b'){
        $tfo2 ="checked";
        }else{ }

				$six = $_POST['16'];
        if($six == '16a'){
           $six1 ="checked";
        } elseif($six == '16b'){
        $six2 ="checked";
        }else{ }


				$sev = $_POST['17'];
        if($sev == '17a'){
           $sev1 ="checked";
        } elseif($sev == '17b'){
        $sev2 ="checked";
        }else{ }


				$eig = $_POST['18'];
        if($eig == '18a'){
           $eig1 ="checked";
        } elseif($eig == '18b'){
        $eig2 ="checked";
        }else{ }


				$nin = $_POST['19'];
        if($nin == '19a'){
           $nin1 ="checked";
        } elseif($nin == '19b'){
        $nin2 ="checked";
        }else{ }


		$ten = $_POST['20'];
        if($ten == '20a'){
           $tens1 ="checked";
        } elseif($nin == '20b'){
        $tens2 ="checked";
        }else{ }

				$tow = $_POST['21'];
        if($tow == '21a'){
           $two1 ="checked";
        } elseif($tow == '21b'){
        $two2 ="checked";
        }else{ }



				$tow22 = $_POST['22'];
        if($tow22 == '22a'){
           $ten22 ="checked";
        } elseif($tow22 == '22b'){
        $tow22 ="checked";
        }else{ }



				$twss = $_POST['23'];
        if($twss == '23a'){
           $twss1 ="checked";
        } elseif($twss == '23b'){
        $twss2 ="checked";
        }else{ }


				$had = $_POST['24'];
				if($had == '24a'){
					 $had1 ="checked";
				} elseif($had == '24b'){
				$had2 ="checked";
				}else{ }

				$hads = $_POST['25'];
				if($hads == '25a'){
					 $hads1 ="checked";
				} elseif($hads == '25b'){
				$hads2 ="checked";
				}else{ }

				$has = $_POST['25'];
				if($has == '25a'){
					 $has1 ="checked";
				} elseif($has == '25b'){
				$has2 ="checked";
				}else{ }


				$sub = $_POST['26'];
				if($sub == '26a'){
					 $sub1 ="checked";
				} elseif($sub == '26b'){
				$sub2 ="checked";
				}else{ }

				$ss = $_POST['27'];
				if($ss == '27a'){
					 $ss1 ="checked";
				} elseif($ss == '27b'){
				$ss2 ="checked";
				}else{ }

				$ssa = $_POST['28'];
				if($ssa == '28a'){
					 $ssa1 ="checked";
				} elseif($ssa == '28b'){
				$ssa2 ="checked";
				}else{ }
				$ssas = $_POST['29'];
				if($ssas == '29a'){
					 $ssas1 ="checked";
				} elseif($ssas == '29b'){
				$ssas2 ="checked";
				}else{ }


				$dd = $_POST['30'];
				if($dd == '30a'){
					 $dd1 ="checked";
				} elseif($dd == '30b'){
				$dd2 ="checked";
				}else{ }


				$dds = $_POST['31'];
				if($dds == '31a'){
					 $dd1s ="checked";
				} elseif($dds == '31b'){
				$dd2s ="checked";
				}else{ }

				
				$gg1s = $_POST['33'];
				if($gg1s == '33a'){
					 $gg1ss ="checked";
				} elseif($gg1s == '33b'){
				$gg2ss ="checked";
				}else{ }

				$vv = $_POST['34'];
				if($vv == '34a'){
					 $vv1 ="checked";
				} elseif($vv == '34b'){
				$vv2 ="checked";
				}else{ }
 $one = $_POST['chest'];
 if($one[0] == 1){
	$ons ="checked";
}
$one2 = $_POST['chest'];
 if($one2[1] == 2){
	$ons2 ="checked";
}
$one3 = $_POST['chest'];
 if($one3[2] == 3){
	$ons3 ="checked";
}
$one4 = $_POST['chest'];
 if($one4[3] == 4){
	$ons4 ="checked";
}
$one5 = $_POST['chest'];
 if($one5[4] == 5){
	$ons5 ="checked";
}
$one6 = $_POST['chest'];
 if($one6[5] == 6){
	$ons6 ="checked";
}
$one7 = $_POST['chest'];
 if($one7[6] == 7){
	$ons7 ="checked";
}
$one8 = $_POST['chest'];
 if($one8[7] == 8){
	$onss8 ="checked";
}
$one9 = $_POST['chest'];
 if($one9[8] == 9){
	$ons9 ="checked";
}
$one10 = $_POST['chest'];
 if($one10[9] == 10){
	$ons10 ="checked";
}
$one11 = $_POST['chest'];
 if($one11[10] == 11){
	$ons11 ="checked";
}
$one12 = $_POST['chest'];
 if($one12[11] == 12){
	$ons12 ="checked";
}
$one13 = $_POST['chest'];
 if($one13[12] == 13){
	$ons13 ="checked";
}
$one14 = $_POST['chest'];
 if($one14[13] == 14){
	$ons14 ="checked";
}
$one15 = $_POST['chest'];
 if($one15[14] == 15){
	$ons15 ="checked";
}
$one16 = $_POST['chest'];
 if($one16[15] == 16){
	$ons16 ="checked";
}
$one17 = $_POST['chest'];
 if($one17[16] == 17){
	$ons17 ="checked";
}


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
                        $econt = $_POST['econt'];
                        $phone = $_POST['phone'];
                        $relation = $_POST['relation'];
                        $nofd = $_POST['nofd'];
                        $dphone = $_POST['dphone'];
                        $how_often = $_POST['how_often'];
                        $floss = $_POST['floss'];
                        $mouthwash = $_POST['mouthwash'];
                        $details = $_POST['details'];
                        $medical_check = $_POST['medical_check'];
                        $theres = $_POST['theres'];
                        $takings = $_POST['takings'];
                        $reactions = $_POST['reactions'];
                        $artificials = $_POST['artificials'];
                        $infection = $_POST['infection'];
                        $hepatitis = $_POST['hepatitis'];
                        $bleeding = $_POST['bleeding'];
                        $hospitalized = $_POST['hospitalized'];
                        $conditions = $_POST['conditions'];
                        $diseases = $_POST['diseases'];
                        $alcohol = $_POST['alcohol'];
                        $recreational = $_POST['recreational'];
                        $sign = $_POST['sign'];
                        $dates = $_POST['dates'];
                        $headers  = "From: ".$name."<".$email.">\n";   
                        $headers = 'MIME-Version: 1.0' . "\r\n";
                        //$headers. = "From: info@webdesigndemo1.com\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
                $headers .= 'From: Admin <info@webdevelopers1.com>' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $to = 'info@motivodental.ca';
                $subject = 'New patient info form';
         $message = "<div class='row row-bg-design'>
	<form class='form-bg-design paper' name='myform'>
		<div class='row row_mgn'>    
			<div class=' col-sm-12 col-xs-12 text'>
				<label>Patient Name:</label><input type='text' maxlength='85' id='pname' name='pname' class='' value='$pname' />
			</div>
									
		</div>
		<div class='row row_mgn'>    
			<div class=' col-sm-6 col-xs-12 text'>
				<label>Emergency Contact:</label><input type='text' maxlength='12' id='econt' name='econt' class='' value='$econt' />
			</div>
			<div class=' col-sm-6 col-xs-12 text'>
				<label>Phone:</label><input type='text' maxlength='12' id='phone' name='phone' class='' value='$phone' />
			</div>
		</div>
		<div class='row row_mgn'>    
			<div class=' col-sm-12 col-xs-12 text'>
				<label>Relationship:</label><input type='text' maxlength='85' id='relation' name='relation' class='' value='$relation' />
			</div>
									
		</div>
		
		<div class='row row_mgn'>    
			<div class=' col-sm-8 col-xs-12 text'>
				<label>Name of Family Doctor:</label><input type='text' maxlength='48' id='nofd' name='nofd' class='' value='$nofd' />
			</div>
			<div class=' col-sm-4 col-xs-12 text'>
				<label class=''>Phone:</label><input type='text' maxlength='12' id='dphone' name='dphone' class='' value='$dphone' />
			</div>						
		</div>
		<div class='row row_mgn'>    
			<div class='col-sm-12 col-md-12 col-xs-12 text textH'>
				<div class='row '>    
					<div class=' col-sm-12 text'>
						<h2 class='insurance-hdg'>Dental History</h2>
					</div>
				</div>
				<div class='row'>
					<div class='col-md-5 col-sm-8 col-xs-12'><label>Have you had regular dental exams in the past?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='6' id='6a' value='6a'  $first1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-6 col-sm-2  col-xs-9'><input type='radio' name='6' id='6b' value='6b' $first2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row'>
					<div class='col-md-5 col-sm-8 col-xs-12'><label>Have you had dental x-rays in past year?</label></div>
					<div class='col-md-1 col-sm-2  col-xs-3'><input type='radio' name='7' id='7a' value='7a' $sec /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-6 col-sm-2  col-xs-9'><input type='radio' name='7' id='7b' value='7b' $sec2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row'>
					<div class='col-md-5 col-sm-8 col-xs-12'><label>Have you had your teeth extracted in the past year?</label></div>
					<div class='col-md-1 col-sm-2  col-xs-3'><input type='radio' name='8' id='8a' value='8a' $third1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-6 col-sm-2  col-xs-9'><input type='radio' name='8' id='8b' value='8b' $third2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row'>
					<div class='col-md-5 col-sm-8 col-xs-12'><label>Do you have any fixed bridges, partial dentures, full dentures?</label></div>
					<div class='col-md-1 col-sm-2  col-xs-3'><input type='radio' name='9' id='9b' value='9a' $four1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-6 col-sm-2  col-xs-9'><input type='radio' name='9' id='9b' value='9b' $four2/> <label for='y4a2'>No</label></div>
				</div>
				<div class='row'>
					<div class='col-md-5 col-sm-8 col-xs-12'><label>Have the above replacements been satisfactory?</label></div>
					<div class='col-md-1 col-sm-2  col-xs-3'><input type='radio' name='10' id='10a' value='10a' $five1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-6 col-sm-2  col-xs-9'><input type='radio' name='10' id='10b' value='10b' $five2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row'>
					<div class='col-md-5 col-sm-8 col-xs-12'><label>Have you ever had root canal therapy?</label></div>
					<div class='col-md-1 col-sm-2  col-xs-3'><input type='radio' name='11' id='11a' value='11a' $f1b1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-6 col-sm-2  col-xs-9'><input type='radio' name='11' id='11b' value='11b' $f1b12 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row'>
					<div class='col-md-5 col-sm-8 col-xs-12'><label>Have you ever had periodontal (gum) disease?</label></div>
					<div class='col-md-1 col-sm-2  col-xs-3'><input type='radio' name='12' id='12a' value='12a' $five11 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-6 col-sm-2  col-xs-9'><input type='radio' name='12' id='12b' value='12b' $five12 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row'>
					<div class='col-md-5 col-sm-8 col-xs-12'><label>Have you ever had abscessed teeth, sore gums, sore mouth?</label></div>
					<div class='col-md-1 col-sm-2  col-xs-3'><input type='radio' name='13' id='13a' value='13a' $tw1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-6 col-sm-2  col-xs-9'><input type='radio' name='13' id='13b' value='13b' $tw2 /> <label for='y4a2'>No</label></div>
				</div> 
				<div class='row'>
					<div class='col-md-5 col-sm-8 col-xs-12'><label>Do you have any habits that may affect your teeth?<br>(Such as clenching, grinding, nail biting etc.)</label></div>
					<div class='col-md-1 col-sm-2  col-xs-3'><input type='radio' name='14' id='14a' value='14a' $ths1/> <label for='y4a1'>Yes</label></div>
					<div class='col-md-6 col-sm-2  col-xs-9'><input type='radio' name='14' id='14b' value='14b'$ths2 /> <label for='y4a2'>No</label></div>
				</div> 				
            </div>					
		</div>
		
		<div class='row row_mgn'>    
			<div class=' col-sm-12 col-xs-12 text'>
				<label>How often do you brush your teeth?</label><input type='text' maxlength='74' id='' name='how_often' class='' value='$how_often' />
			</div>						
		</div>
		<div class='row row_mgn'>    
			<div class=' col-sm-12 col-xs-12 text'>
				<label>How often do you floss your teeth? </label><input type='text' maxlength='74' id='floss' name='floss' class='' value='$floss' />
			</div>						
		</div>
		<div class='row row_mgn'>    
			<div class=' col-sm-12 col-xs-12 text'>
				<label>How often do you use mouthwash?</label><input type='text' maxlength='74' id='mouthwash' name='mouthwash' class='' value='$mouthwash' />
			</div>						
		</div>
		<div class='row row_mgn'>    
			<div class='col-sm-12 col-md-12 col-xs-12 text textH'>
				<div class='row '>    
					<div class=' col-sm-12 text'>
						<h2 class='insurance-hdg'>Medical History</h2>
					</div>
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Are you being treated for any medical condition at the present time or within the last year?</label></div>
					<div class='col-md-1  col-sm-2  col-xs-3'><input type='radio' name='15' id='15a' value='15a' $fo1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4  col-sm-2 col-xs-9'><input type='radio' name='15' id='15b' value='15b' $tfo2 /> <label for='y4a2'>No</label></div>
				</div> 
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='details' name='details' class='' value='$details' />
					</div>						
				</div>
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>When was your last<br class='visible-xs'> medical check up?:</label><input type='text' maxlength='70' id='medical_check' name='medical_check' class='' value='$medical_check' />
					</div>						
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Has there been any change in your general health in the past year?  </label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='16' id='16a' value='16a' $six1/> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='16' id='16b' value='16b' $six2 /> <label for='y4a2'>No</label></div>
				</div> 
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='theres' name='theres' class='' value='$theres' />
					</div>						
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Are you presently taking any medications? Please list below </label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='17' id='17a' value='17a' $sev1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='17' id='17b' value='17b' $sev2 /> <label for='y4a2'>No</label></div>
				</div> 
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='takings' name='takings' class='' value='$takings' />
					</div>						
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Do you have any allergies?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='18' id='18a' value='18a' $eig1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='18' id='18b' value='18b' $eig2 /> <label for='y4a2'>No</label></div>
				</div> 
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details (Please list reactions):</label><input type='text' maxlength='75' id='reactions' name='reactions' class='' value='$reactions' />
					</div>						
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Do you have or have you ever had asthma?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='19' id='19a' value='19a' $nin1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='19' id='19b' value='19b' $nin2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Do you have or have you ever had any heart or blood pressure problems?  </label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='20' id='20a' value='20a' $tens1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='20' id='20b' value='20b' $tens2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Do you have or have you ever had a heart murmur, mitral valve prolapsed or rheumatic fever?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='21' id='21a' value='21a' $two1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='21' id='21b' value='21b' $two2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Do you have a prosthetic or artificial joints</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='22' id='22a' value='22a' $ten22 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='22' id='22b' value='22b' $tow22 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='' name='$artificials' class='' value='$artificials' />
					</div>						
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Do you have any conditions or therapies that could affect your immune system? I.e. leukemia, Aids, HIV infection,  radiotherapy, chemotherapy?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='23' id='23a' value='23a' $twss1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='23' id='23b' value='23b' $twss2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='infection' name='infection' class='' value='$infection' />
					</div>						
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Have you ever had hepatitis, Jaundice, or liver disease?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='24' id='24a' value='24a' $had1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='24' id='24b' value='24b' $had2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='hepatitis' name='hepatitis' class='' value='$hepatitis' />
					</div>						
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Do you have a bleeding problem or bleeding disorder?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='25' id='25a' value='25a' $has1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='25' id='25b' value='25b' $has2/> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='bleeding' name='bleeding' class='' value='$bleeding' />
					</div>						
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Have you ever been hospitalized for any illness or operations?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='26' id='26a' value='26a' $sub1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='26' id='26b' value='26b' $sub2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='hospitalized' name='hospitalized' class='' value='$hospitalized' />
					</div>						
				</div>
				<div class='row '>    
					<div class=' col-sm-12 text'>
						<h2 class='insurance-hdg'>Do you have or have you ever had any of the following? Please Check</h2>
					</div>
				</div>
				<div class='row row_mgn row_mgn_mobile'>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='1' $ons  /> <label for='y4a1'>Chest Pain/Angina</label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='2'$ons2 /> <label for='y4a1'>Shortness of Breath </label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='3' $ons3 /> <label for='y4a1'>Pacemaker             </label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='3' $ons4 /> <label for='y4a1'>Steroid Therapy </label></div>
				</div>
				<div class='row row_mgn row_mgn_mobile'>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='5' $ons5 /> <label for='y4a1'>Seizures (epilepsy) </label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='6' $ons6 /> <label for='y4a1'>Heart Attack </label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='7' $ons7 /> <label for='y4a1'>Lung Disease      </label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='8' $onss8 /> <label for='y4a1'>Diabetes             </label></div>
				</div>
				<div class='row row_mgn row_mgn_mobile'>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='9' $ons9 /> <label for='y4a1'>Kidney Disease  </label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='10' $ons10 /> <label for='y4a1'>Stroke</label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='11' $ons11 /> <label for='y4a1'>Prosthetic Heart Valve</label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='12' $ons12 /> <label for='y4a1'>Tuberculosis          </label></div>
				</div>
				<div class='row row_mgn row_mgn_mobile'>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='13' $ons13 /> <label for='y4a1'>Stomach Ulcers   </label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='14' $ons14 /> <label for='y4a1'>Thyroid Disease </label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='15' $ons15 /> <label for='y4a1'>Cancer             </label></div>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='16' $ons16 /> <label for='y4a1'>Arthritis  </label></div>
				</div>
				<div class='row row_mgn row_mgn_mobile'>
					<div class='col-sm-3 col-xs-12'><input type='checkbox' name='chest[]' id='' value='17' $ons17 /> <label for='y4a1'>Diet Pill Therapy  </label></div>
					
				</div>
					<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Are there any conditions or disease not listed above that you have or have had? </label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='27' id='27a' value='27a' $ss1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='27' id='27b' value='27b'  $ss2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='conditions' name='conditions' class='' value='$conditions' />
					</div>						
				</div>
					<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Are there any diseases or medical problems that run into your family? </label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='28' id='28a' value='28a' $ssa1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='28' id='28b' value='28b' $ssa2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='diseases' name='diseases' class='' value='$diseases' />
					</div>						
				</div>
					<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Do you drink alcohol and if so, how often?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='29' id='29a' value='29a' $ssas1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='29' id='29b' value='29b' $ssas2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details:</label><input type='text' maxlength='87' id='alcohol' name='alcohol' class='' value='$alcohol' />
					</div>						
				</div>
					<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Do you or have you ever used recreational drugs? 	</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='30' id='30a' value='30a' $dd1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='30' id='30b' value='30b' $dd2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>    
					<div class=' col-sm-12 col-xs-12 text'>
						<label>Details (Please list):</label><input type='text' maxlength='75' id='recreational' name='recreational' class='' value='$recreational' />
					</div>						
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Do you smoke or chew tobacco products?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='31' id='31a' value='31a' $dd1s /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='31' id='31b' value='31b' $dd2s /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>Are you nervous during dental treatment?</label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='33' id='33a' value='33a' $gg1ss /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='33' id='33b' value='33b' $gg2ss /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>
					<div class='col-md-7 col-sm-8 col-xs-12'><label>For Women Only: Are you breast-feeding or pregnant?    </label></div>
					<div class='col-md-1 col-sm-2 col-xs-3'><input type='radio' name='34' id='34a' value='34a' $vv1 /> <label for='y4a1'>Yes</label></div>
					<div class='col-md-4 col-sm-2 col-xs-9'><input type='radio' name='34' id='34b' value='34b' $vv2 /> <label for='y4a2'>No</label></div>
				</div>
				<div class='row row_mgn'>
					<div class='col-sm-12 col-xs-12'>
						<p>To the best of my knowledge, the above information is correct:</p>
					</div>
				</div>
            </div>					
		</div>
		
				<div class='row row_mgn'> 
                <div class='col-md-2 col-sm-2 col-xs-12 text'>
                    <label>Signature:</label>
                    
                </div> 
                   <div class='col-md-7  col-sm-9 col-xs-12 text '>                   
                    <div class='signature' style='margin-top: 10px;'>
                      <input type='hidden' name='sign' id='get_imgid' value='' >
				        <img src='http://webdevelopers1.com/motivodental/wp-content/themes/motivodental/assets/img/$fname'>
                    </div>
                  </div>
                  <div class='col-md-3 col-sm-5 col-xs-12 text  '>
                      <label>Date:</label><input type='text' maxlength='12' id='dates' name='dates' class='datepicker' value='$dates' />
                  </div>
                </div>  
				<div class='row row_mgn'>
					<div class=' col-xs-12 text text-center'>					
					</div>
				</div>
				
		
		
		
		
		
		<div class='row row_mgn'>
		  <div class='col-sm-12 col-xs-12  text-center custom-arc'>
		
		  </div>
		</div>
	</form>
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