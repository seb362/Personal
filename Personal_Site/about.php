<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
?>
<!DOCTYPE html>
<html lang="en">

<?php
    include("includes/head.php");
?>

<body>
  <?php include("includes/header.php"); ?>
  <h1> About me </h1>
  <div id = "aboutOverall">
    <div id = "missionStatement">
        <p>I started programming my Junior year of high school when I took an introduction to java class as an experiment. It was easily one of the best decisions of my life and lead me to persue Information Science in college.</p>
        <p> One of my favorite activities in high school and college has been math modeling. Working with a team to come up with intuitive solutions to complex problems is not only satisfying, but fun as well. </p>
    </div>
    <!-- Mission statement -->

    <!--images and captions-->
    <div id = "ImageSection">
        <div id = "aboutRest">
            <div id = "left">
                <figure id = "aboutFigure">
                    <!-- Image uploaded from my personal phone. Photo credit: Jamie Schug -->
                    <img src="images/SSO.png" alt="Student Science and Surface Operations Team" class="aboutItem" />
                    <div id = "caption">
                        <p> Lead a student team at NASA in planning a pseudo-mission to Mars</p>
                    </div>
                </figure>
            </div>
        </div>
        <div id = "aboutRest">
            <div id = "left">
                <figure id = "aboutFigure">
                    <!-- https://www.comap.com/highschool/contests/himcm/2014results.pdf -->
                    <img src="images/himcm-results.png" alt="HiMCM Outstanding Teams"
                    class ="aboutItem" />
                    <div id = "caption">
                        <p> Placed Outstanding in HiMCM's Math Modeling Contest - The highest possible honor! Screenshot taken from the HiMCM website </p>
                     </div>
                </figure>
            </div>
         </div>
       </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>
