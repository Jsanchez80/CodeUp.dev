<?php

$name = 'Jake';

$diagnosedIllness = [
	  'Schizophrenia',
      'Schizoaffective Disorder',
      'Bipolar I Disorder',
      'Bipolar II Disorder',
      'Cyclothymic Disorder',
      'Substance/Medication-Induced Bipolar Related Disorder',
      'Other Specified Bipolar and Related Disorder',
      'Unspecified Bipolar and Related Disorder',
      'Disruptive Mood Dysregulation Disorder',
      'Major Depressive Disorder, Single and Recurrent Episodes',
      'Persistent Depressive Disorder AKA Dysthymia',
      'Premenstrual Dysphoric Disorder',
      'Substance/Medication-Induced Depressive Disorder',
      'Depressive Disorder Due to Another Medical Condition',
      'Other Specified Depressive Disorder',
      'Unspecified Depressive Disorder',
      'Generallized Axiety Disorder',
      'Substance/Medication-Induced Anxiety Disorder',
      'Anxiety Disorder due to another Medical Condition',
      'Other Specified Anxiety Disorder',
      'Obsessive-Compulsive Disorder',
      'Body Dismorphic Disorder',
      'Hoarding Disorder',
      'Excoriation Disorder/Skin-Picking',
      'Substance/Medication-Induced Obsessive-Compulsive and Related Disorder',
      'Other Specified Obsessive-Compulsive and Related Disorder',
      'Unspecified Obsessive-Compulsive and Related Disorder',
      'Reactive Attachment Disorder',
      'Disinhibited Social Engagement Disorder',
      'Posttraumatic Stress disorder',
      'PTSD',
      'Acute Stress Disorder',
      'Adjustment Disorders',
      'Other Specified Trauma-and Stressor-Related Disorder',
      'Unspecified Trauma-and Stressor-Related Disorder'];

      $query = 'Obsessive-Compulsive Disorder';
      $result = array_search($query, $diagnosedIllness);
      if ($result) {
      	// echo $diagnosedIllness[$result];
      	$guestSearchedDiagnosis = $diagnosedIllness[$result];

      } else {
      	echo 'Not found';
      }


      // $response1 = 'Okay ' + $name + ' now we are getting somewhere.  Just to confirm, you said you most identify with ' + $guestSearchedDiagnosis + 'Is that correct?';

      // $response2 = 'Unfortunately, we did not find that ' + $name;

      // if ($guestSearchedDiagnosis) {
      // 	echo $response1;
      // } else {
      // 	echo $response2;
      // }
      
      
?>
<!DOCTYPE HTML>
	<html>
	<head>
	<title>DIAGNOSIS</title>
	<link href="https://fonts.googleapis.com/css?family=Exo+2|Shadows+Into+Light" rel="stylesheet">
	<style> 
		input[type=text] {
		    width: 130px;
		    box-sizing: border-box;
		    border: 2px solid #ccc;
		    border-radius: 4px;
		    font-size: 16px;
		    background-color: white;
		    /*background-image: url('http://www.iconarchive.com/show/colorful-long-shadow-icons-by-graphicloads/Search-icon.html');*/
		    background-position: 10px 10px; 
		    background-repeat: no-repeat;
		    padding: 12px 20px 12px 40px;
		    -webkit-transition: width 0.4s ease-in-out;
		    transition: width 0.4s ease-in-out;
		}

		input[type=text]:focus {
		    width: 40%;
		}
		</style>
	</head>
		<body>

		<h1 style="font-family: 'Exo 2', sans-serif;">Is Clubhouse For Me?</h1>
		<p style="font-family: 'Shadows Into Light', cursive; font-size: 25px;"><?php echo $name; ?>, to better understand how SA Clubhouse may help you, please tell me more about your diagnosis...</p>
		<div>
		<input type="text" name="search" placeholder="Search..">
		</div>
		<div>
			<p style="font-family: 'Shadows Into Light', cursive; font-size: 25px;">Okay <?php echo $name; ?> now we're getting somewhere.  Just to confirm, you said you most identify with <?php echo $guestSearchedDiagnosis; ?>.  Is that correct?</p>

			<!-- <p><?php echo $response1; ?></p>
			<p><?php echo $response2; ?></p> -->
			

		</div>

		</body>
	</html>
