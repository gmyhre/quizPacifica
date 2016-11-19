<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="Kenneth Tin-Kin Hung at http://www..com/">
	<meta name="description" content="Which Characters Are You?">
	<meta name="keywords" content="Kenneth Tin-Kin Hung, HTML5, Canvas, Canvas Experiments">
	<link rel="author" href="http://www..com">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="apple-touch-icon" href="imgs/icon.png">
	<link rel="icon" sizes="192x192" href="imgs/icon.png">
	<meta name="HandheldFriendly" content="true">

	<meta property="og:url" content="http://www..com/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Which Characters Are You?" />
	<meta property="og:description" content="Official Personality Quiz" />
	<meta property="og:image" content="http://www..com/.jpg" />


	<title>What Character Are You? Quiz</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />





  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>

<body>

<!-- Load jquery and bootstrap js -->

	<script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>


<!-- Modal Dialog Windows -->
<!-- Modal Dialog Windows -->
<div id="theModal" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">

				<div class="modal-header">
        		<button id="closeModalBtn" type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">close</button>
				</div>

				<div class="modal-content">
						<iframe id="quizIframe" width="100%" height="100%" frameborder="0" scrolling="no" allowtransparency="true" src="" ></iframe>
      	</div>

  </div>
</div>
<!-- old
	  <div id="theModal" class="modal fade text-center">
	    <div class="modal-dialog">
	      <div class="modal-content">
	      </div>
	    </div>
	  </div>
-->

<!-- Questions -->

	<div id="page-wrap">

		<h1 class="transparent index-headline">Which Characters Are You?</h1>

		<form action="grade.php" method="post" id="quiz">

		<?php
		/**
	         * Each <li> holds a question. Follow the same pattern if you want to add more questions.
	         * If you add more questions, be sure to add more $answer variables in grade.php
	         * (See lines 26-30 in grade.php).
	         * The important values here: name value on the rasio buttons for each answer, .fwrd class on labels.
	         * You need the name value to store answers for grading.
	         * In this demo, the frwd class controls question advancement through jQuery.
	         */
            ?>
            <script>
            $('.modal').on('shown.bs.modal',function(e){      //correct here use 'shown.bs.modal' event which comes in bootstrap3
              // var url = $(this).attr('href');
              var invokerURL = $(e.relatedTarget);
              console.log(e.relatedTarget);
              $(this).find('iframe').attr('src', invokerURL.attr('data-iframe'))

            })

            //stop the iframe movie when it close
            $("#closeModalBtn, .modal-backdrop, #theModal .close, #theModal .btn").click(function(){
                $("#quizIframe").attr("src", "");
            });

            </script>

            <ul id="test-questions">

                <li>
                    <div class="quiz-overlay"></div>
                    <h3>1. You are on your first date in a romantic restaurant, your date ask what you want to order, and you answer:</h3>

										<div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-1-answers-A" class="fwrd labela">A.  Buffalo buffalo Buffalo buffalo buffalo buffalo Buffalo buffalo</label>
                    </div>

										<div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" data-iframe="http://www.tinkin.com/shitwars/3/index.html" data-toggle="modal" data-target="#theModal"/>
                        <label for="question-1-answers-B" class="fwrd labelb">B.  James while John had had had had had had had had had had had a better effect on the teacher</label>
                    </div>

										<div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-1-answers-C" class="fwrd labelc">C.  That that is is that that is not is not is that it it is</label>
                    </div>


										<div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" data-iframe="http://www.tinkin.com/shitwars/3/index.html" data-toggle="modal" data-target="#theModal"/>
                        <label for="question-1-answers-D" class="fwrd labeld">D.  Colorless green ideas sleep furiously</label>
                    </div>

                    <p class="quiz-progress">1 of 6</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3>You guzzled down a liter of protein shake, you put on on your spandex, warmed up good and ready to go… now what?</h3>


										<div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" data-iframe="http://www.tinkin.com/shitwars/3/index.html" data-toggle="modal" data-target="#theModal"/>
                        <label for="question-2-answers-A" class="fwrd labela">A.  You crash onto your couch vegging out to reruns of the Gilmore Girls </label>
                    </div>


										<div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-2-answers-B" class="fwrd labelb">B.  You get to your water aerobics class to catch up with your Golden gals, its been a minute</label>
                    </div>



										<div class="mtm">
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-2-answers-C" class="fwrd labelc">C.  You go to the gym, start grunting a lot working out your vocal cords </label>
                    </div>



										<div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-2-answers-D" class="fwrd labeld">D.  Finally the Chinese take out is here, food enough to feed a small village in Cambodia, turn on your self cam, and announce your MUKbang.</label>
                    </div>


                    <p class="quiz-progress">2 of 6</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3>You are working on an mobile app, and it enables user to:</h3>


                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" data-iframe="http://www.tinkin.com/shitwars/3/index.html" data-toggle="modal" data-target="#theModal"/>
                        <label for="question-3-answers-A" class="fwrd labela">A.  date ghosts or other supernatural beings around them</label>
                    </div>


                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-3-answers-B" class="fwrd labelb">B.  track how many pimples and blackhead they can pop in a minute</label>
                    </div>



                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-3-answers-C" class="fwrd labelc">C.  collect Chinese stinky tofu while Wingsuit flying over polluted Beijing skies</label>
                    </div>



                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-3-answers-D" class="fwrd labeld">D.  make pizza with Aliens via traversable Wormhole</label>
                    </div>


                    <p class="quiz-progress">3 of 6</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Tomorrow is the vacation you have been longing for, and you are going to:</h3>


                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" data-iframe="http://www.tinkin.com/shitwars/3/index.html" data-toggle="modal" data-target="#theModal"/>
                        <label for="question-4-answers-A" class="fwrd labela">A.  Llanfair­pwllgwyngyll­gogery­chwyrn­drobwll­llan­tysilio­gogo­goch</label>
                    </div>


                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-4-answers-B" class="fwrd labelb">B.  Taumatawhakatangihangakoauauotamateaturipukakapikimaungahoronukupokaiwhenuakitanatahu</label>
                    </div>



                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-4-answers-C" class="fwrd labelc">C.  Lake Chargoggagoggmanchauggagoggchaubunagungamaugg</label>
                    </div>



                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-4-answers-D" class="fwrd labeld">D.  Tweebuffelsmeteenskootmorsdoodgeskietfontein</label>
                    </div>


                    <p class="quiz-progress">4 of 6</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3>You run out of TP, but before you yell out for help, you can’t remember the correct word for #2, is it…</h3>


                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-5-answers-A" class="fwrd labela">A.  groundhogging</label>
                    </div>



                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-5-answers-B" class="fwrd labelb">B.  dingleberries</label>
                    </div>



                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-5-answers-C" class="fwrd labelc">C.  dookie</label>
                    </div>



                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-5-answers-D" class="fwrd labeld">D.  Thunder Down Under</label>
                    </div>


                    <p class="quiz-progress">5 of 6</p>
                </li>

								<li>
                    <div class="quiz-overlay"></div>
                    <h3>I didn’t fart for three days because:</h3>


                    <div class="mtm">
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-6-answers-A" class="fwrd labela">A.  One Man's Modus Ponens is Another Man's Modus Tollens</label>
                    </div>


                    <div class="mtm">
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-6-answers-B" class="fwrd labelb">B.  of my recent tapeworm diet</label>
                    </div>



                    <div class="mtm">
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-6-answers-C" class="fwrd labelc">C.  I am a narwhal</label>
                    </div>



                    <div class="mtm">
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" data-iframe="http://www.tinkin.com/shitwars/3/index.html"  data-toggle="modal" data-target="#theModal"/>
                        <label for="question-6-answers-D" class="fwrd labeld">D.  Big Apple is a melting pot</label>
                    </div>


                    <p class="quiz-progress">6 of 6</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">Now it&#8217;s time to see your results...</h3>
                    <input type="submit" value="Submit Quiz" id="submit-quiz" />
                </li>
            </ul>

		</form>

    </div>




	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
	<?php
	/**
         * This quiz uses jQuery to move the questions up each time you click an answer.
         * You can change the layout of the quiz, but you may need to adjust the $mt variable.
         * The $mt variable is the margin-top of the quiz.
         * This gives the illusion of each question being on a separate page.
         * It is actually one page, just this element moves.
         * Quiz-takers need to get to the end and hit the Submt button to see results.
         * The answers get stored and sent to grade.php for evaluation.
         *
         */
        ?>
    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){
                    $mt = $mt - 630;
                    $("#test-questions").css("margin-top", $mt);
                }, 333);
              });
           }(jQuery))
    </script>

		<div class="nomargin">
		 <div class="share lb"><a href="http://www.facebook.com/sharer.php?u=http://www.adultswim.com" title="Share on Facebook" target="_blank"><img src="imgs/fb.png" alt="Share this on Facebook" /></a></div>
			 <div class="share rb"><a href="http://twitter.com/home/?status=adultswim(http://www.adultswim.com)%20+via+@adultswim_" title="Share on Twitter" target="_blank"><img src="imgs/tw.png" alt="Share this on Twitter" /></a></div>
			 <p class="shareprompt">Share This Quiz</p>
			 <p class="designby shadow1"><span>Built by </span><a href="http://www.tinkin.com"><img src="imgs/tinkin-logo.png" alt="created by Kenneth Tin-Kin Hung" /></a></p>
		</div>

</body>
</html>
