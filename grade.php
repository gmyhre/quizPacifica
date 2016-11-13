<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Which Character Are You? Quiz Results</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-lg-1 col-centered">
	<div>

		<h1 class="transparent index-headline" >Here&#8217;s What Character You Are</h1>

        <?php

           /**
            * Make a new variable for each question, so we can grab the answers from them.
            * If you have more than five questions, add answer variables as appropriate.
            */

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
						$answer6 = $_POST['question-6-answers'];

            /**
            * Now, make outcome variables, and set those values to zero.
            * These variables represent our four outcome screens.
            * Whatever outcome variable has the most points at the end, "wins".
            */

						$totalA = 0;
            $totalB = 0;
            $totalC = 0;
            $totalD = 0;
            $totalE = 0;
            $totalF = 0;
            $totalG = 0;
            $totalH = 0;

            /**
            * For each question, look at the answers, and add points to the outcome variables as indicated.
            * You may ask, "Why aren't we giving one point to A, one point to B, etc?".
            * Good question. It has to do with tie breakers.
            * In a five question test, what if someone "votes" twice each for A and B, and once for C?
            * How do you determine what wins between A and B in that scenario?
            * There has to be at least one unevenly weighted question to break ties, but you can have more than one.
            * For this quiz, I also wanted to add give points to different outcomes for certain answers.
            *
            */

            if ($answer1 == "A") { $totalA = $totalA + 1.17; $totalE = $totalE + .012; $totalD = $totalD + .06; }
            if ($answer1 == "B") { $totalB = $totalB + 1.15; $totalF = $totalF + .065; $totalC = $totalC + .05; }
            if ($answer1 == "C") { $totalC = $totalC + 1.13; $totalG = $totalG + 1.11; $totalA = $totalA + .05; }
            if ($answer1 == "D") { $totalD = $totalD + 1.16; $totalH = $totalH + 1.39; $totalA = $totalA + .07; }

            if ($answer2 == "A") { $totalA = $totalA + 1.23; $totalE = $totalE + 1.012; }
            if ($answer2 == "B") { $totalB = $totalB + 1.15; $totalF = $totalF + 1.065; }
            if ($answer2 == "C") { $totalC = $totalC + 1.13; $totalG = $totalG + .11; }
            if ($answer2 == "D") { $totalD = $totalD + 1.16; $totalH = $totalH + .39; }

            if ($answer3 == "A") { $totalA = $totalA + 1.17; $totalE = $totalE + .05; }
            if ($answer3 == "B") { $totalB = $totalB + 1.15; $totalF = $totalF + .03; }
            if ($answer3 == "C") { $totalC = $totalC + 1.13; $totalG = $totalG + .07; }
            if ($answer3 == "D") { $totalD = $totalD + 1.16; $totalH = $totalH + .39; }

            if ($answer4 == "A") { $totalA = $totalA + 1.17; $totalE = $totalE + .79; }
            if ($answer4 == "B") { $totalB = $totalB + 1.15; $totalF = $totalF + .24; }
            if ($answer4 == "C") { $totalC = $totalC + 1.13; $totalG = $totalG + 1.98; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
            if ($answer4 == "D") { $totalD = $totalD + 1.16; $totalH = $totalH + 1.29; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }

            if ($answer5 == "A") { $totalA = $totalA + 1.17; $totalE = $totalE + .11; $totalD = $totalD + .08; }
            if ($answer5 == "B") { $totalB = $totalB + 1.15; $totalF = $totalF + .12; }
            if ($answer5 == "C") { $totalC = $totalC + 1.14; $totalG = $totalG + .08; $totalA = $totalA + .06; $totalD = $totalD + .08; }
            if ($answer5 == "D") { $totalD = $totalD + 1.16; $totalH = $totalH + .09; $totalC = $totalC + .04; }

						if ($answer6 == "A") { $totalA = $totalA + 1.17; $totalE = $totalE + 1.31; $totalD = $totalD + .08; }
            if ($answer6 == "B") { $totalB = $totalB + 1.15; $totalF = $totalF + 1.45; }
            if ($answer6 == "C") { $totalC = $totalC + 1.14; $totalG = $totalG + 1.28; $totalA = $totalA + .06; $totalD = $totalD + .08; }
            if ($answer6 == "D") { $totalD = $totalD + 1.16; $totalH = $totalH + 1.09; $totalC = $totalC + .04; }

            ?>

            <div class="results-overlay">

            <?php
            /**
             * Now we compare our outcome variables.
             * I used AND (&&) in the if statements. You can also use OR (||).
             */
            ?>

            <?php
            if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD && $totalA > $totalE && $totalA > $totalF && $totalA > $totalG && $totalA > $totalH) {
                  echo '<div class="quiz-overlay result priest"></div>
												<div class="results-text">
															<p class="you-chose">You Are:</p>
																		<img src="imgs/ericandre.jpg" alt="Eric Andre" class="results-img" />
																		<div class="results test-results2">
																				<p class="score">Eric Andre</p>
																				<p class="score-details">
																						You are...
																				</p>
																		<a id="replay" class="take-quiz-btn" href="test.php">Play Again?</a>
												</div>';
            }
            elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD && $totalB > $totalE && $totalB > $totalF && $totalB > $totalG && $totalB > $totalH) {
                  echo '<div class="quiz-overlay result megadeth"></div>
												<div class="results-text">
															<p class="you-chose">You Are:</p>
																		<img src="imgs/timeric.jpg" alt="Tim and Eric" class="results-img" />
																		<div class="results test-results2">
																				<p class="score">Tim from Tim and Eric</p>
																				<p class="score-details">
																						You are...
																				</p>
																		<a id="replay" class="take-quiz-btn" href="test.php">Play Again?</a>
												</div>';
            }
            elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD && $totalC > $totalE && $totalC > $totalF && $totalC > $totalG && $totalC > $totalH) {
                  echo '<div class="quiz-overlay result maiden"></div>
												<div class="results-text">
															<p class="you-chose">You Are:</p>
																		<img src="imgs/rick.jpg" alt="Rick and Morty" class="results-img" />
																		<div class="results test-results2">
																				<p class="score">Rick from Rick and Morty</p>
																				<p class="score-details">
																						You are...
																				</p>
																		<a id="replay" class="take-quiz-btn" href="test.php">Play Again</a>
												</div>';
            }
            elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC && $totalD > $totalE && $totalD > $totalF && $totalD > $totalG && $totalD > $totalH) {
                  echo '<div class="quiz-overlay result dio"></div>
												<div class="results-text">
															<p class="you-chose">You Are:</p>
																		<img src="imgs/mrpickles.jpg" alt="Mr Pickles" class="results-img" />
																		<div class="results test-results2">
																				<p class="score">Mr Pickles</p>
																				<p class="score-details">
																						You are...
																				</p>
																		<a id="replay" class="take-quiz-btn" href="test.php">Play Again</a>
												</div>';
            }
						elseif ($totalE > $totalA && $totalE > $totalB && $totalE > $totalC && $totalE > $totalD && $totalE > $totalF && $totalE > $totalG && $totalE > $totalH) {
                  echo '<div class="quiz-overlay result dio"></div>
												<div class="results-text">
															<p class="you-chose">You Are:</p>
																		<img src="imgs/henry.jpg" alt="Henry from Your Pretty face is Going to Hell" class="results-img" />
																		<div class="results test-results2">
																				<p class="score">Henry from Your Pretty face is Going to Hell</p>
																				<p class="score-details">
																						You are...
																				</p>
																		<a id="replay" class="take-quiz-btn" href="test.php">Play Again</a>
												</div>';
            }
						elseif ($totalF > $totalA && $totalF > $totalB && $totalF > $totalC && $totalF > $totalD && $totalF > $totalE && $totalF > $totalG && $totalF > $totalH) {
                  echo '<div class="quiz-overlay result dio"></div>
												<div class="results-text">
															<p class="you-chose">You Are:</p>
																		<img src="imgs/blackjesus.jpg" alt="Black Jesus" class="results-img" />
																		<div class="results test-results2">
																				<p class="score">Black Jesus</p>
																				<p class="score-details">
																						You are...
																				</p>
																		<a id="replay" class="take-quiz-btn" href="test.php">Play Again</a>
												</div>';
            }
						elseif ($totalG > $totalA && $totalG > $totalB && $totalG > $totalC && $totalG > $totalD && $totalG > $totalE && $totalG > $totalF && $totalG > $totalH) {
									echo '<div class="quiz-overlay result dio"></div>
												<div class="results-text">
															<p class="you-chose">You Are:</p>
																		<img src="imgs/squidbillies.jpg" alt="Squidbillies" class="results-img" />
																		<div class="results test-results2">
																				<p class="score">Squidbillies</p>
																				<p class="score-details">
																						You are...
																				</p>
																		<a id="replay" class="take-quiz-btn" href="test.php">Play Again</a>
												</div>';
						}
						elseif ($totalH > $totalA && $totalH > $totalB && $totalH > $totalC && $totalGH > $totalD && $totalH > $totalE && $totalH > $totalF && $totalH > $totalG) {
									echo '<div class="quiz-overlay result dio"></div>
												<div class="results-text">
															<p class="you-chose">You Are:</p>
																		<img src="imgs/morty.jpg" alt="Morty from Rick and Morty" class="results-img" />
																		<div class="results test-results2">
																				<p class="score">Morty from Rick and Morty</p>
																				<p class="score-details">
																						You are...
																				</p>
																		<a id="replay" class="take-quiz-btn" href="test.php">Play Again</a>
												</div>';
						}

        ?>
                </div>
            </div>

           <?php
           /**
            * Modal window, in case people wan to share your quiz.
            * Virality!!!
            */
           ?>
	   <p class="embed"><button class="embed-btn" onclick="modalshow()">Embed This Quiz</button></p>
          <div id="modalbg"></div>
          <div id="modalwindow">
               <p id="modalmsg">Copy the code below to embed it into your own website.</p>
               <textarea class="c-p"><iframe src="http://www.adultswim.com/" height="450" width="600"></iframe></textarea>
               <button class="close-btn" onclick="modalhide()">Close</button>
          </div>

				</div>

		</div>
	</div>
	</div>
</div>

  <script type="text/javascript">
      function modalshow(){

        modalbg = document.getElementById("modalbg");
        modalbg.style.display = "block";
        modalwindow = document.getElementById("modalwindow");
        modalwindow.style.display = "block";
      }
      function modalhide(){
        document.getElementById("modalbg").style.display = "none";
        document.getElementById("modalwindow").style.display = "none";
      }
  </script>

	<div class="nomargin">
	 <div class="share lb"><a href="http://www.facebook.com/sharer.php?u=http://www.metalquiz.sacramentowebdesigns.com/&amp;p%5bsummary%5d=What%20Metal%20Band%20Are%20You?%20Quiz%20Take%20this%20quiz%20to%20find%20out." title="Share on Facebook" target="_blank"><img src="imgs/fb.png" alt="Share this on Facebook" /></a></div>
		 <div class="share rb"><a href="http://twitter.com/home/?status=What%20Metal%20Band%20Are%20You?%20Quiz%20Take%20this%20quiz%20to%20find%20out.%20(http://www.metalquiz.sacramentowebdesigns.com)%20+via+@Lockedown_" title="Share on Twitter" target="_blank"><img src="imgs/tw.png" alt="Share this on Twitter" /></a></div>
		 <p class="shareprompt">Share This Quiz</p>
		 <p class="designby shadow1"><span>Built by </span><a href="https://www.tinkin.com"><img src="imgs/tinkin-logo.png" alt="created by Kenneth Tin-Kin Hung" /></a></p>
	</div>

</body>
</html>
