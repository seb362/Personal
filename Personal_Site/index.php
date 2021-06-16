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
  <h1> Hey There! </h1>
  <div id = "IndexOverall">

    <div id = "IndexDesc">
      <p> Hi, I'm Sean: I'm a software engineer, web designer, and all around nerd.
         graduated from Cornell University in 2020 with a BA in Information Science.
         Now, I'm looking for a home where I can development my skills as a software developer and solve some interesting problems.
      </p>
    </div>

    <div id = "IndexImg">
      <figure>
        <!-- Image taken by myself-->
        <img src="images/sean1.png" alt="My picture" class="IndexPortrait" />
        <figcaption> My face but cuter </figcaption>
      </figure>
   </div>

     <h2> What can I do? </h2>
     <div id = "ResumeOverall">
       <div id = "ResumeLeft">
         <figure>
             <!-- Image uploaded from my personal phone. Photo credit: Jamie Schug -->
             <img src="images/Sean_Chess.jpg" alt="Sean Chess" class="chessImg" />
         </figure>
       </div>
       <div id = "ResumeRight">
         <p>
           I'm <b> strategic </b>, I'm good at breaking problems into smaller pieces, and have a good instinct for structuring desgin.
         </p>
       </div>
       <div id = "ResumeLeft">
         <p>
           I'm <b> team oriented </b>, I'm good at slotting into a role in a team and work well with others.
         </p>
       </div>
       <div id = "ResumeRight">
         <figure>
             <!-- Image uploaded from my personal phone. Photo credit: Jamie Schug -->
             <img src="images/SSO.png" alt="Student Science and Surface Operations Team" class="vastsImg" />
         </figure>
       </div>
       <div id = "ResumeLeft">
         <figure>
             <!-- Image uploaded from my personal phone. Photo credit: Jamie Schug -->
             <img src="images/Sean2.png" alt="Sean again" class="vastsImg" />
         </figure>
       </div>
       <div id = "ResumeRight">
         <p>
           I'm <b> adaptable </b>, I'm familiar with a large breadth of langauges and pick up new skills quickly.
         </p>
       </div>
     </div>

   <h2> What have I done? </h2>

   <h3> This Website! </h3>
   <div id = WebsiteImgFormat>
     <figure>
         <!-- Image uploaded from my personal phone. Photo credit: Jamie Schug -->
         <img src="images/Website.png" alt="This website" class="WebsiteImg" />
     </figure>
   <h3> Runecasters </h3>
   <div id = RCFormat>
     <figure>
         <!-- Image uploaded from my personal phone. Photo credit: Jamie Schug -->
         <img src="images/RC.jpg" alt="Runecasters" class="RCImg" />
     </figure>
   </div>

   <h3> Taco maker (Design) </h3>
     <div id = tacoVideo>
       <iframe  width="888" height="538" src="https://www.youtube.com/embed/15hTBYPNjBQ"
         title="YouTube video player"
         frameborder="0"
         allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
      </iframe>
    </div>

     <h2> Hire Me! </h2>

     <div id = "index_button">
       <input class = "index_button" name "Contact" type = "button" value = "Get in touch" onclick="location ='contact.php'"/>
     </div>

<!--
    <div id = "IndexNav">
      <nav>
        <ul>
          <div id = "index_button">
            <input class = "button" name "About" type = "button" value = "About Me" onclick="location ='about.php'"/>
          </div>
          <div id = "index_button">
            <input class = "button" name "Resume" type = "button" value = "My Resume" onclick="location ='resume.php'"/>
          </div>
          <div id = "index_button">
            <input class = "button" name "Contact" type = "button" value = "Get in touch" onclick="location ='contact.php'"/>
          </div>
        </ul>
      </nav>
    </div>
  -->
  </div>

  <!-- TODO buttons for Navigation -->
  <?php include("includes/footer.php"); ?>
</body>
</html>
