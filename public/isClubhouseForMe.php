<?php 

$acceptableDiagnosis = [
      "Schizophrenia",
      "Schizoaffective Disorder",
      "Bipolar I Disorder",
      "Bipolar II Disorder",
      "Cyclothymic Disorder",
      "Substance/Medication-Induced Bipolar and Related Disorder",
      "Other Specified Bipolar and Related Disorder",
      "Unspecified Bipolar and Related Disorder",
      "Disruptive Mood Dysregulation Disorder",
      "Major Depressive Disorder, Single and Recurrent Episodes",
      "Persistent Depressive Disorder AKA Dysthymia",
      "Premenstrual Dysphoric Disorder",
      "Substance/Medication-Induced Depressive Disorder",
      "Depressive Disorder Due to Another Medical Condition",
      "Other Specified Depressive Disorder",
      "Unspecified Depressive Disorder",
      "Generallized Axiety Disorder",
      "Substance/Medication-Induced Anxiety Disorder",
      "Anxiety Disorder due to another Medical Condition",
      "Other Specified Anxiety Disorder",
      "Obsessive-Compulsive Disorder",
      "Body Dismorphic Disorder",
      "Hoarding Disorder",
      "Excoriation Disorder/Skin-Picking",
      "Substance/Medication-Induced Obsessive-Compulsive and Related Disorder",
      "Other Specified Obsessive-Compulsive and Related Disorder",
      "Unspecified Obsessive-Compulsive and Related Disorder",
      "Reactive Attachment Disorder",
      "Disinhibited Social Engagement Disorder",
      "Posttraumatic Stress disorder",
      "PTSD",
      "Acute Stress Disorder",
      "Adjustment Disorders",
      "Other Specified Trauma-and Stressor-Related Disorder",
      "Unspecified Trauma-and Stressor-Related Disorder"
    ];



    // element is the shape name
    // index is the iterator
    // array is the shapes array itself

    


// $count = $acceptableDiagnosis;
// $output = '';
//     if(isset($_POST['q'])) {
//     	$search = $_POST['q'];

//     	if($count == 0){
//     		$output = 'There were no search results';
//     	}else{ 
//     		$output = '<div>'.$count.[''].'</div>';
//     	}
    	

//     }

?>

<!DOCTYPE html>
<html>
<head>
    <title>isClubhouseForMe?</title>
    <link href="https://fonts.googleapis.com/css?family=Orbitron|Play" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/isClubhouseForMe.css">
    <script type="text/javascript"  src="/js/isClubhouseForMe.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
 	crossorigin="anonymous"></script>
 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script tpye="text/javascript"></script>
</head>
<body>
	<!-- Jumbotron -->
	<div class="container">
  		<div class="jumbotron">
    		<h1>Is Clubhouse For Me?</h1>      
    		<p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, 		mobile-first projects on the web.</p>
  		</div>
  			<p>This is some text.</p>      
  			<p>This is another text.</p>      
	</div>
	
    <!-- Acceptable diagnosis' -->
    <section>
    <div id="box">
	    <h1>Our acceptable diagnosis' are: </h1>
		    <ol>
		    <?php foreach ($acceptableDiagnosis as $diagnosis) { ?>
		        <li><?php echo $diagnosis; ?></li>
		    <?php } ?>
		    </ol>
		   
	</div>
    <!-- Scrolling Div -->
    <div class="scrolling" style="overflow-y:scroll; height:400px; background:gray">
    <h1>Our Story</h1>
	  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	  </p>
	  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	  </p>
	  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	  </p>
	  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	  </p>
	  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	  </p>
	  
 	</div>
 	<div id="box2">

 	</div>
	</section>
	<section id="box">
		<!-- Second Questionnaire -->
		<p class="question">1. Are you at least 18 yrs old?</p>
		<ul class="answers">
			<input type="radio" name="q1" value="a" id="q1a"><label for="q1a">Yes</label><br/>
			<input type="radio" name="q1" value="b" id="q1b"><label for="q1b">No</label><br/>
			<!-- <input type="radio" name="q1" value="c" id="q1c"><label for="q1c">Answer 3</label><br/>
			<input type="radio" name="q1" value="d" id="q1d"><label for="q1d">Answer 4</label><br/> -->
		</ul>
			<div id="category1">
				<p><strong>Question 1:</strong> The correct answer is the <strong>Answer 1</strong>.</p>
			</div>
		<p class="question">2. Do you have accesss to reliable transportation?</p>
		<ul class="answers">
			<input type="radio" name="q1" value="a" id="q1a"><label for="q1a">Yes</label><br/>
			<input type="radio" name="q1" value="b" id="q1b"><label for="q1b">No</label><br/>
			<input type="radio" name="q1" value="c" id="q1c"><label for="q1c">Sometimes</label><br/>
			<!-- <input type="radio" name="q1" value="d" id="q1d"><label for="q1d">Answer 4</label><br/> -->
		</ul>

		<div id="category1">
			<p><strong>Question 2:</strong> The correct answer is the <strong>Answer 1</strong>.</p>
		</div>

		<p class="question">3. Are you able to refrain from Alcohol/other nonprescription drug use while at The Clubhouse?</p>
		<ul class="answers">
			<input type="radio" name="q1" value="a" id="q1a"><label for="q1a">Yes</label><br/>
			<input type="radio" name="q1" value="b" id="q1b"><label for="q1b">No</label><br/>
			<!-- <input type="radio" name="q1" value="c" id="q1c"><label for="q1c">Answer 3</label><br/>
			<input type="radio" name="q1" value="d" id="q1d"><label for="q1d">Answer 4</label><br/> -->
		</ul>

		<div id="category1">
			<p><strong>Question 3:</strong> The correct answer is the <strong>Answer 1</strong>.</p>
		</div>

		<p class="question">4. Are you willing to be an active participant in a personal wellness and recover plan?</p>
		<ul class="answers">
			<input type="radio" name="q1" value="a" id="q1a"><label for="q1a">Yes</label><br/>
			<input type="radio" name="q1" value="b" id="q1b"><label for="q1b">No</label><br/>
			<input type="radio" name="q1" value="c" id="q1c"><label for="q1c">Sometimes</label><br/>
			<!-- <input type="radio" name="q1" value="d" id="q1d"><label for="q1d">Answer 4</label><br/> -->
		</ul>

		<div id="category1">
			<p><strong>Question 4:</strong> The correct answer is the <strong>Answer 1</strong>.</p>
		</div>

		<p class="question">5. Do you pose a threat to yourself or others at The Clubhouse Community?</p>
		<ul class="answers">
			<input type="radio" name="q1" value="a" id="q1a"><label for="q1a">Yes</label><br/>
			<input type="radio" name="q1" value="b" id="q1b"><label for="q1b">No</label><br/>
			<!-- <input type="radio" name="q1" value="d" id="q1d"><label for="q1d">Answer </label><br/>
			<input type="radio" name="q1" value="d" id="q1d"><label for="q1d">Answer 4</label><br/> -->
			
		</ul>

		<div id="category1">
			<p><strong>Question 5:</strong> The correct answer is the <strong>Answer 1</strong>.</p>
		</div>

		<!-- Button Feature -->
		<button id="results">
			Show me the answers!
		</button>
	</section>

</body>
</html>