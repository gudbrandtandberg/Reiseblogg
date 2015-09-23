<?php
      function velg($valgmuligheter) {
       echo "<select>";
      
            foreach ($valgmuligheter as $valg){
                  echo "<option>".$valg."</option>";
            }
                              
       echo "</select>";
      }
      
      function galleri($navn) {
            echo '<div id="blueimp-gallery-'.$navn.'" class="blueimp-gallery blueimp-gallery-controls">
                  <div class="slides"></div>
                  <h3 class="title"></h3>
                  <a class="prev">‹</a>
                  <a class="next">›</a>
                  <a class="close">×</a>
                  <a class="play-pause"></a>
                  <ol class="indicator"></ol>
            </div>';
      }
?>

<!DOCTYPE html>
<html lang="en">
      <head>
            <?php include("head.php"); ?>
            <link rel="stylesheet" href="css/indexstyle.css">
            <script type="text/javascript">
                  
                  function midtstill(){
                        var bodyWidth = $("body").width();
                        var mainWidth = $("#main").width() + 30;
                        var margin = (bodyWidth - mainWidth) / 2;
                        $("#main").css({"margin-left": margin+"px"});
                  }
                  
                  function settHarTattHandling(){
                        if (typeof(localStorage !== "undefined")) {
                              localStorage.harTattHandling = true;
                        }
                  }
                  
                  $(document).ready(function(){
                        
                        $(".matbloggbody").hide();   
                        $(".matbloggknapp").click(function(){
                            if ($(".matbloggbody").is(":hidden")) {
                              $(".matbloggknapp").html("Read less");
                              $(".matbloggbody").show();
                            } else {
                              $(".matbloggknapp").html("Read more");
                              $(".matbloggbody").hide();
                            }
                        });
                        
                        $(window).resize(midtstill);
                        midtstill();
                        
                        if (typeof(localStorage !== "undefined")) {
                              if (!localStorage.harTattHandling) {
                                  $("#usynlig").click();
                              }
                        }
                        
                        $("#submitemail").click(function(){
                              settHarTattHandling();
                              var email = $("#emailinput").val();
                              $.ajax({url: "lagreepost.php?epost="+email});
                              $("#usynlig").click();
                        });
                        
                        $("#nothanks").click(function(){
                              settHarTattHandling();
                              $("#usynlig").click();   
                        });
                        
                  });
            </script>
      </head>
      
      <body>      
        
        <button id="usynlig" style="display: none;" data-toggle="modal" data-target="#popup"></button>
        
        <div class="modal fade" id="popup">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h2>Mailinglist!</h2>
                        </div>
                        
                        <div class="modal-body">
                              <p>
                                    Enter your email here to get notified about new blog posts
                              </p>
                              
                              <input type="text" id="emailinput">
                              
                              <div style="text-align: right;">
                                    <span id="nothanks">No thanks</span>
                                    <button class="btn btn-success" id="submitemail">Submit</button>
                              </div>
                        </div>  
                  </div>
            </div>
        </div>
        
        <!--    GALLERY-MAL   -->
        <?= galleri("arabia"); ?>
        <?= galleri("thailandI"); ?>
        <?= galleri("bali"); ?>
        <?= galleri("matblogg"); ?>
        
        <!--    HEADER    -->
        <div class="container">
          
          <img id="photo" src="bilder/diverse/sogg.jpg">
          
          <h1 id="header">Gudbrand &amp; Sarah's travelblog</h1>
          
          <p id="maintext">We are traveling through South-East Asia for 10 months. Follow our journey here.</p>
          
          <?php include("navmeny.php"); ?>
        
        </div>
      
      
        <!--      HER BEGYNNER BLOGGEN     -->
        
        <div class="col-md-8 col-xs-11" id="main">
          
          <?php //include("matblogg1.php"); ?>
          
          <!--   BALI        -->
          
          <h2>Indonesia</h2>
          
          <!--<h3>Mount Rinjani</h3>
          
          <h3>Gili Islands</h3>
          
          Padangbai m/ bilde <br>
          Fergeankomst med bilde <br>
          Nevne kjøretur <br>
          Bilde av Gili T. <br>
          Bildesekvens Gili T. +tekst (+tur) <br>
          Over til Meno <br>
          Meno Bilder <br>-->
          
          <!--<p>
            
          </p>
          
          <div class="row">
            <a href="bilder/bali/" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/" />
              </div>
            </a>
          </div>
          
          <p>
            
          </p>-->
          
          <h3>The Road to Ubud</h3>
          
          <p>
            Our next journey went from Lovina, over the mountainous centre and down into the lowland town of Ubud. The first <i>sehenswürdigkeit</i> on the way was the Gitgit waterfall. We took a dip in the fresh, cold mountain water.
          </p>
          
          <div class="row">
            <a href="bilder/bali/IMG_8308.JPG" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/IMG_8308.JPG" />
              </div>
            </a>
          </div>
          
          <p>
            Just having passed the hightest point of our ascent, we stopped to have a look at the map. We were greeted by a cheeky monkey, with whom Gudbrand had a moment. 
          </p>
          
          <div class="row">
            <a href="bilder/bali/IMG_8328.JPG" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-6 venstre">
                <img class="artpic" src="bilder/bali/IMG_8328.JPG" />
              </div>
            </a>
            <a href="bilder/bali/IMG_8329.JPG" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-6 hoyre">
                <img class="artpic" src="bilder/bali/IMG_8329.JPG" />
              </div>
            </a>
          </div>
          
          <div class="row">
            <a href="bilder/bali/IMG_8331.JPG" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-6 venstre">
                <img class="artpic" src="bilder/bali/IMG_8331.JPG" />
              </div>
            </a>
            <a href="bilder/bali/IMG_8333.JPG" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-6 hoyre">
                <img class="artpic" src="bilder/bali/IMG_8333.JPG" />
              </div>
            </a>
          </div>
          
          <p>
            After enough driving for the day, we parked our car in the village between the clouds &mdash; Bedugul. Here there was a lake and a great market with lots of local strawberries and other delicious treats. More photos from along the way in the Gallery, as usual.
          </p>
          
          <div class="row">
            <a href="bilder/bali/IMG_8339.JPG" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/IMG_8339.JPG" />
              </div>
            </a>
          </div>
          
          <p>
            Next day we made our way to Ubud in the early morning. Ubud is known as the cultural and spiritual centre of Bali. Lots of wood carving, statues, batik, temples, museums, dance etc. It is also the destination of Julia Roberts in the film <i>Eat, Pray, Love</i>. Our story would be called <i>Eat, Sleep, Love</i>. 
          </p>
          
          <p>
            We lived in a small outhouse of a typical Balinese stately home, very close to Ubud Palace and the city centre. We ate lots of really good food, thanks to a map of nice food places Nora had given us before we came. The best spot was without doubt Sari Organik &mdash; tucked away inbetween rice paddies and lush farmland we enjoyed a good lunch finished off with a large glass of homemade organic white wine.
          </p>
          
          <div class="row">
            <a href="bilder/bali/IMG_2590.JPG" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/IMG_2590.JPG" />
              </div>
            </a>
          </div>
          
          <h3>Lovina</h3>
          
          <p>
            Lovina is a <?= velg(["small", "lovely", "quaint"]); ?> fishing village on the north side of the island. Part of the reason for coming there were the <?= velg(["awesome", "legendary", "beautiful"]); ?> diving opportunities. Sarah had for some time been wanting to upgrade her diving licence, so we started asking around. Soon she struck a deal with a <?= velg(["great", "handsome", "blond", "balinese"]); ?> guy on the beach for the 'advanced diving' course, which, since the guy was so shocked we were living in our car, included two nights free accomodation at a <?= velg(["decent", "shabby"]); ?> hotel. 
          </p>
          
          <div class="row">
            <a href="bilder/bali/lovinasol.jpg" data-gallery="#blueimp-gallery-bali" title="This sunset happened every night!">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/lovinasol.jpg" />
              </div>
            </a>
          </div>
          
          <p>
            <small> *I, Gudbrand like to elaborate and use adjectives and creative wordings. Sarah prefers short and precise syntax. It is not always easy to cooperate. Jokingly, Sarah said to me: "why not write an adjective story instead!". I took her seriously. </small>
          </p>
          
          <h4>Diving With Sarah</h4>
          <p>
            My main motive for coming to Lovina was to get a chance to dive again, having read some where that Lovina was one of the best spots for this kind of activity. It turned out this wasn't entirely true but it did lay inbetween two other great diving spots on the north east and north west side of Bali wich was just as fine. I signed up for a Padi Advanced Diving course, expecting that I would get several more diving opportunities on our travels. Over the next two days I completed five dives: bouyancy control, navigation, wreck dive, deep dive and a night dive.
          </p>
          <p>  
            The spot for my first two dives was Menjangan Island. A national park on the north east tip of Bali just a stone throw away from Java. It was a long time since my last dive and I was a little nervous pulling on my wetsuit and prepering the equipment. My french dive instructor Arnold repeated some safety routines with me and as soon as we jumped into the water and went down under the surface all nerves dissappeared and I was exhilarated by the vast space of colorful corals and curious fish.
          </p>
          <p>
            In addition to diving around in these surroundings I had to complete some exercises. The more amusing ones were floating controlled upside down, and sitting in Lotus position breathing myself up and down in the water without touching either the sand or the surface.
          </p>
          
          <div class="row">
            <a href="bilder/diverse/klovn.jpg" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-6 venstre">
                <img class="artpic" src="bilder/diverse/klovn.jpg" />
              </div>
            </a>
            <a href="bilder/diverse/korall.jpg" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-6 hoyre">
                <img class="artpic" src="bilder/diverse/korall.jpg" />
              </div>
            </a>
          </div>
          
          <p>
            The second day of diving was quite intense, but also the most thrilling. We drove two hours westwards to Tulamben to do the deep dive (30m) and a wreck dive. This dive site is the most spectacular one in Bali. About 20m from shore lies a wreck 100m long. The ship, USAT Liberty, was a United States Army cargo ship torpedoed by a Japanese submarine in 1942. Most of the ship was taken over by the sea and the most beautiful corals and fish that I could imagine thrived on this now sunken paradise. There were tuna mating, sea horses, turtles, octopus, clown fish, eels, sting ray and many many more incredible sea creatures. 
          </p>
          
          <div class="row">
            <a href="bilder/diverse/vrak.jpg" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/diverse/vrak.jpg" />
              </div>
            </a>
          </div>
          
          <p>
            Later that day it was time for the night dive. This happened at a coral reef just outside of Lovina Beach. We went out in a local fishing boat just after dark. There wasn't really that much to see under water but the odd feeling of diving surrounded by the dark was worth the while. With nothing to see but pitch black except from where the flashlight showed the way was suprisingly relaxing. No dizzines from trying to take in all the impressions around me. It was just us and the sleeping ocean. The most amazing part was perhaps when we reached the surface, filled our BCDs, leaned back and looked at the clear starry sky waiting for the boat to pick us up.
          </p>
          
          <h4>Fishing With Gudbrand</h4>
          
          <p>
            The first days while Sarah was out diving, I enjoyed slow mornings and afternoons of walking on the beach, talking to locals, practising yoga, and reading. But one thing I really wanted to experience was the local fishing. So after a quick talk to the son of a fisherman, we agreed on a fair price and I was all set to come along. We set out for the open sea in the morning dark. The first hour of boating was dark, then gradually the sky started to change. As the sun rose and the waning full moon still high above and Venus bright in the east, the most magnificent colors spread accross the sky, changing every minute from dark, orange, golden, blue and pink. T'was a breathtaking sight. 
          </p>
          
          <div class="row">
            <a href="bilder/bali/IMG_2672.jpg" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/IMG_2672.jpg" />
              </div>
            </a>
          </div>
          
          <p>
            The boat was a traditional narrow, long <i>jukung</i> with spiderlike outriggers protruding from both sides.
          </p>
          
          <div class="row">
            <a href="bilder/bali/IMG_2674.jpg" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/IMG_2674.jpg" />
              </div>
            </a>
          </div>
          
          <p>
            After two hours we were far out and started to fish. We caught no fish in the first spot. We moved further out. Still no fish. But then, suddenly, I felt the familiar tug of the line and was overtaken by excitement. We had each hooked a fish, and we could see them frantically jumping in the distance. I did not land the first fish, but the fisherman did and it was a beautiful <i>Mahi Mahi</i> &mdash; <i>Gullmakrell</i> på norsk. Soon many more Mahi Mahi followed, and the next four hours we spent reeling them in. 
          </p>
          
          <a href="bilder/diverse/fiskefilm.mp4"
                    title="Fisking"
                    data-gallery="#blueimp-gallery-bali"
                    type="video/mp4"
                    data-poster="bilder/bali/fisker.png"
                    data-sources='[{"href": "bilder/diverse/fiskefilm.mp4", "type": "video/mp4"}]'>
                  <img class="artpic" src="bilder/bali/fisker.png"/>
          </a>
          
          <a href="bilder/bali/IMG_2675.jpg" data-gallery="#blueimp-gallery-bali"></a>
          <a href="bilder/bali/IMG_2677.jpg" data-gallery="#blueimp-gallery-bali"></a>
          <a href="bilder/bali/IMG_2679.jpg" data-gallery="#blueimp-gallery-bali"></a>
          <a href="bilder/bali/IMG_2680.jpg" data-gallery="#blueimp-gallery-bali" title="The view back towards Bali"></a>
          <a href="bilder/bali/IMG_2682.jpg" data-gallery="#blueimp-gallery-bali" title="Catch of the day. Around 30 fish"></a>
          <a href="bilder/bali/IMG_2685.jpg" data-gallery="#blueimp-gallery-bali"></a>
          <a href="bilder/bali/IMG_2687.jpg" data-gallery="#blueimp-gallery-bali"></a>
          <a href="bilder/bali/IMG_2689.jpg" data-gallery="#blueimp-gallery-bali" title="Fishermans wife"></a>
          
          <p>
            Later in the evening we ate dinner at the fisherman's house. The grilled Mahi Mahi tasted sublime, served with steamed rice and a <i>sambal</i> of chillies and coconut oil. We got to talk to the fishermans wife and play with their four puppies. Click the smiling fisherman for a video (sorry, it's upside down - flip your screen or stand on your head) and some more photos. Also, at any time press enter or click an image to toggle the controls. 
          </p>
          
          <h3>Balian Beach</h3>
          
          <p>
            We left Seminyak in our rental car. Driving in Bali is quite an experience. Getting used to driving on the wrong side of the road was nothing, getting past the extreme awkwardness of signaling with the right hand and gear-shifting with the left was a bit challanging, but getting to grips with the driving culture most difficult of all. Roads consist of one lane in each direction, each lane about 3/4 the width of a car. This implies 'lane-sharing' which can be quite startling to say the least. Lots of mopeds, lots of slow moving wide trucks and lots of eager drivers makes for a chaotic experience. Honking your horn can mean anything &mdash; "Watch out here I come", "I'm going to overtake you", "Overtake me, please", "Be careful", "F*** you", "Hello!". After a practice drive to Sanur, we headed northwest for Balian Beach, a simple surfer community off the beaten path on the desolate west coast. There was nothing there but a small village, a couple of beach huts, sand and the sound of the waves. 
            
          </p>
          <div class="row">
            <a href="bilder/bali/baliansurfcamp.jpg" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/baliansurfcamp.jpg" />
              </div>
            </a>
          </div>
          
          <p>
            Since this was a great spot for surfing we were eager to try for ourselves. After one hour, a nasty rash, a near-death experience and a displaced jaw we realized we were bathers, not surfers. However we weren't entirely discouraged, and didn't put the idea of us surfing quite behind us. In other words: to be continued... Here is Sarah with her surf instructor Ketut. 
          </p>
          
          <div class="row">
            <a href="bilder/bali/sarahsurfer.jpg" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/sarahsurfer.jpg" />
              </div>
            </a>
          </div>
          
          <p>
            Being on a budget we couldn't treat ourselves to both car and accomodation so we made a cozy little creep-inn in the back of our Toyota Avanza. This was actually quite fine. In spite of the awkward angles, lack of privacy, temperature regulation and facilities it was just fine. 
          </p>
          
          <div class="row">
            <a href="bilder/bali/foranbilen.jpg" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/foranbilen.jpg" />
              </div>
            </a>
          </div>
          <div>
            <a href="bilder/bali/soveibil.JPG" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/soveibil.JPG" />
              </div>
            </a>
          </div>
          
          <p>
            We stayed in Balian for 4 days, enjoying every second. We relaxed, read books, practiced languages, surfed, did yoga, ate at the food market, and mingled with folks. The drive-thru travel format is great here in Bali, we get to see so much of the island, in our own pace, at our own fancy. Lots of pictures from the drive in the gallery :)
          </p>
          
          <h3>At Georg's</h3>
          
          <p>
            Next stop: Bali! A magical Indonesian island with an inviting, relaxing, and mystical atmosphere. We started off together with Jørgen at his friend Georg's luxurious villa in Seminyak on the southwestern side of the island. 
          </p>
          
          <div class="row">
            <a href="bilder/bali/gul.jpg" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-6 venstre">
                <img class="artpic" src="bilder/bali/gul.jpg" />
              </div>
            </a>
            <a href="bilder/bali/kveld.JPG" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-6 hoyre">
                <img class="artpic" src="bilder/bali/kveld.JPG" />
              </div>
            </a>
          </div>
          
          <p>
            We dared only stay there for a couple of days, fearing we would get too used poolside chillin', fine dining and G&T's before bedtime. So we packed our bags, rented a car and hit the road hoping for some good waves up along the west coast. We will be sleeping in our car and living low, so probably no posts for a little while. 
          </p>
                   
          <p style="text-align: center; color: #fa6121; font-weight: bold;">
            G & S
          </p>
          
          <div class="row">
            <a href="bilder/bali/bil.JPG" data-gallery="#blueimp-gallery-bali">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/bali/bil.JPG" />
              </div>
            </a>
          </div>
          
          <!--   BANGKOK I   -->
          

          <h2>Bangkok</h2>

            <p>
              Finally we arived at our first stop in South East Asia - Bangkok. What a city! Streetlife, flashing neon, crowds of people, dirt, cars, food &mdash; oh the food! Our first stay lasted four wonderful days. We began by establishing our headquarters in Jørgen's stylish 23. floor apartment in downtown Bangkok, check out the awesome view from our bed!
            </p>
            <div class="row">
              <a href="bilder/thailand/dag.jpg" data-gallery="#blueimp-gallery-thailandI">
              <div class="col-sm-6 venstre">
                <img class="artpic" src="bilder/thailand/dag.jpg" />
              </div>
              </a>
              <a href="bilder/thailand/natt.jpg" data-gallery="#blueimp-gallery-thailandI">
              <div class="col-sm-6 hoyre">
                <img class="artpic" src="bilder/thailand/natt.jpg" />
              </div>
              </a>
            </div>
            <p>
              We spent our days exploring the streets of Bangkok. Knowing we would come back later, we took the time to check out the little things in our own pace. Here is us in a swan-shaped paddleboat on a lake in a park. 
            </p>
            <div class="row">
              <a href="bilder/thailand/svane.jpg" data-gallery="#blueimp-gallery-thailandI">
              <div class="col-sm-12">
                <img class="artpic" src="bilder/thailand/svane.jpg" />
              </div>
              </a>
            </div>
            
            <p>
              Of course we had to check out the notorious nightlife of Bangkok and it did not dissapoint! We had a cozy little 'vors' accompanied by the classic <a href="https://www.youtube.com/watch?v=R9cNtrrCP0E">One Night in Bangkok</a> before hitting the bars. Can you spot Sarah in these pictures?
            </p>
            
            <div class="row">
              <a href="bilder/thailand/vors.jpg" data-gallery="#blueimp-gallery-thailandI">
              <div class="col-sm-6 venstre">
                <img class="artpic" src="bilder/thailand/vors.jpg" />
              </div>
              </a>

              <a href="bilder/thailand/street.jpg" data-gallery="#blueimp-gallery-thailandI">
              <div class="col-sm-6 hoyre">
                <img class="artpic" src="bilder/thailand/street.jpg" />
              </div>
              </a>
            </div>
            
            <div class="row">
              <a href="bilder/thailand/gate.jpg" data-gallery="#blueimp-gallery-thailandI">
              <div class="col-sm-6 venstre">
                <img class="artpic" src="bilder/thailand/gate.jpg" />
              </div>
              </a>
              <a href="bilder/thailand/tiss.jpg" data-gallery="#blueimp-gallery-thailandI">
              <div class="col-sm-6 hoyre">
                <img class="artpic" src="bilder/thailand/tiss.jpg" />
              </div>
              </a>
            </div>
              <p style="text-align: right;">Didn't know people still did this!</p>
              <p>
                On our third day we took the skytrain to the river, and a longboat up the river to the 'Wat Pho' temple and the reclining Buddha.
              </p>
            <div class="row">
              <a href="bilder/thailand/budda.jpg" data-gallery="#blueimp-gallery-thailandI">
              <div class="col-sm-4 venstre">
                <img class="artpic" src="bilder/thailand/budda.jpg" />
              </div>
              </a>
              <a href="bilder/thailand/spiss.jpg" data-gallery="#blueimp-gallery-thailandI">
              <div class="col-sm-4 venstreoghoyre">
                <img class="artpic" src="bilder/thailand/spiss.jpg" />
              </div>
              </a>
              <a href="bilder/thailand/nonstop.jpg" data-gallery="#blueimp-gallery-thailandI">
              <div class="col-sm-4 hoyre">
                <img class="artpic" src="bilder/thailand/nonstop.jpg" />
              </div>
              </a>
            </div>
          
          <!--    ARABIA    -->
          <h2>Arabia</h2>
            <p>
              After a lovely farewell dinner with family and friends, we finally set off for the Arabian Peninsula.
              Our trip was a fine one, and we were very happy to finally be greeted by Nora and Steven at the airport.
              The first thing that hit us were the Dishdashas and Abayas, the local clothing. Made us
              think of <a href="https://media.snl.no/system/images/3750/standard_flaaklypa.jpg">Sheikh Ben Reddik Fy Fasan</a>. 
              The second thing that hit us was the hot and humid weather. 40+&deg;C! - say no more!
            </p>
            
            <p>
              On our first day in Abu Dhabi we went to friday brunch - a foodfeast without like! As all the muslims are
              off praying in the mosque, the expats and tourists enjoy unlimited food and drink in the city's hotels.
              We filled our bellies as we never have before, with food from almost every corner of the world. Among the
              winners were <a href="http://honestcooking.com/um-ali-egyptian-bread-pudding/">Um Ali</a>, <a href="https://en.wikipedia.org/wiki/Kanafeh">Kalafeh</a> and <a href="http://bennydoro.com/chef/recipes/moutabal-roasted-eggplant-dip/">Moutabal</a>.
            </p>
            
            <p>
              At 4:00 the next morning we hopped in a desert-bound Toyota Landcruiser driven by a friendly Indian gentleman.
              After an hours peaceful drive through the desert highway we took a sharp right into the sand dunes. Fear
              and panic filled the vehicle as the driver cranked the volume to the max and went bashing up and down and round
              and round in the dunes. <span style="text-decoration: underline;">Click the sunrise for a short video!</span>
            </p>
            
            
                <a href="bilder/diverse/bashing.mp4"
                    title="Dune Bashing"
                    data-gallery="#blueimp-gallery-arabia"
                    type="video/mp4"
                    data-poster="bilder/arabia/IMG_8045.JPG"
                    data-sources='[{"href": "bilder/diverse/bashing.mp4", "type": "video/mp4"}]'>
                  <img class="artpic" src="bilder/arabia/IMG_8045.JPG"/>
                </a>
            
            
            <p>
            Eventually we came to a pause on the top
            of a dune to enjoy an epic desert sunrise not unlike that of Tatooine.
            </p>
            
            <div class="row">
              <a href="bilder/arabia/IMG_8049.JPG" data-gallery="#blueimp-gallery-arabia">
                <div class="col-sm-6 venstre">
                  <img class="artpic" src="bilder/arabia/IMG_8049.JPG" />
                </div>
              </a>
              <div class="col-sm-6 hoyre">
                <img class="artpic" src="bilder/diverse/tatooine.jpg" />
              </div>
            </div>
            
            <p>
              Later we went for a drive around Abu Dhabi with our excellent tour guides - The Pottsbergs. After a tour
              of this most remarkable city we ended up at the Emirates Palace Hotel &mdash; one of only two seven star hotels
              in the world (the other being in Dubai) &mdash; for our afternoon tea. The thing about this hotel is gold.
              Gold-to-go ATM's, gold walls, gold paintings, gold furniture, gold food, but dissapointingly only silver spoons...
            </p>
            
            <div class="row">
              <a href="bilder/diverse/gold.jpg" data-gallery="#blueimp-gallery-arabia">
                <div class="col-sm-12">
                  <img class="artpic" src="bilder/diverse/gold.jpg" />
                </div>
              </a>
              <a href="bilder/diverse/gold2.jpg" data-gallery="#blueimp-gallery-arabia" title="Emirates Palace">
                <div class="col-sm-12">
                  <img class="artpic" src="bilder/diverse/gold2.jpg" />
                </div>
              </a>
            </div>

            <p>
              At this time, The Pottsbergs had to go back to work, so we headed north. And then west. First stop was
              Dubai. Dubai was unbearable in many ways. Because of the extreme heat we spent the day rushing between
              cafés and malls in complete cultural shock. Somewhere between the extremes of capitalism gone mad and
              outdated religious tradition sat we, wondering how this could even be possible. In the evening however
              we found the older parts of the city where we enjoyed walking around a maze of spice and gold markets
              among friendly locals in the Souq of Dubai. 
            </p>
            
            <div class="row">
              <a href="bilder/diverse/souq.jpg" data-gallery="#blueimp-gallery-arabia" title="Dubai Souq">
                <div class="col-sm-12">
                  <img class="artpic" src="bilder/diverse/souq.jpg" />
                </div>
              </a>
            </div>
            
            <p>
              At the end of the day we jumped on a flight to Muskat, the capital city of the Sultanate of Oman.
              Muskat stood in stark contrast to the city we had just left. Tucked away inbetween beautiful mountain
              scenery and the Arabian sea lies a city with a prominent cultural history and proud, hard-working,
              friendly people. Although we never got to use our background story, we pretended to be newlyweds on our
              honeymoon in the hotel we stayed at, in order to sleep in the same room. Thanks again to the Pottsbergs
              for the hotel gift.
            </p>
            
            <div class="row">
              <a href="bilder/diverse/muskat.jpg" data-gallery="#blueimp-gallery-arabia" title="Muskat">
                <div class="col-sm-12">
                  <img class="artpic" src="bilder/diverse/muskat.jpg" />
                </div>
              </a>
            </div>
            
            <p>
            During our day we went to the old city, where they had a cultural museum, several old
            portugese forts, and one of Sultan Qaboos' palaces. We ended up in a museum chronicling the long and
            complicated French-Omani relationship. Several rooms were dedicated solely to pictures of the state visit
            between Mitterrand and Sultan Qaboos of January '89. Later on we went to <a href="https://www.google.co.th/search?q=muscat+souq&espv=2&biw=1218&bih=679&source=lnms&tbm=isch&sa=X&ved=0CAYQ_AUoAWoVChMI1Nfum9G5xwIVShmOCh0_mQhV#tbm=isch&q=muttrah+souq">Muttrah Souq</a>, an intricate web of narrow market streets with shops selling antiques, jewlery, spices, clothing, fabrics, incence (Oman is famous for its frankincense, notably brought as a gift to baby Jesus back in the day), and much much more. We ended our day at a wonderful arabic restaurant with shish kebab, peppermint tea, shisha and Um Ali. 
            </p>
            
            <p>
              After heading back to Abu Dhabi to enjoy a few more days lazing indoors, we are setting of for the next
              leg of our journey - Bangkok, Thailand! Stay tuned for more updates coming soon
            </p>
            
            <p style="text-align: center; color: #fa6121; font-weight: bold;">XOXO G & S</p>
          
          <!--    GARDEMOEN    -->
          <h2>
            Take-off from Gardermoen <small> 13.8.2015</small>
          </h2>
          
          <div class="row">
            <div class="col-sm-12">
              <img class="artpic" src="bilder/diverse/avreise.jpg">
            </div>
          </div>
          
        </div> <!-- end #main -->
      

      <script src="<?=$blueimp_js;?>"></script>
      <script src="<?=$blueimp_jquery_js;?>"></script>
  </body>      
</html>
