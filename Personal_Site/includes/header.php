<header>
    <nav>
        <ul>
        <div id = "headerNav">
        <?php
        $current_file = basename($_SERVER['PHP_SELF']);?>
        <div id = "other_button">
            <input class = "buttonOther" name "Home" type = "button" value = "Home" onclick="location ='index.php'"/>
        </div>
          <?php
          if($current_file == "about.php"){ ?>
          <div id = "other_button">
            <input class = "specialButton" name "About" type = "button" value = "About Me" onclick="location ='about.php'"/>
          </div>
          <?php } else { ?>
            <div id = "other_button">
            <input class = "buttonOther" name "About" type = "button" value = "About Me" onclick="location ='about.php'"/>
          </div>
          <?php }
          if($current_file == "resume.php"){ ?>
            <div id = "other_button">
            <input class = "specialButton" name "Resume" type = "button" value = "My Resume" onclick="location ='resume.php'"/>
            </div>
          <?php } else { ?>
            <div id = "other_button">
            <input class = "buttonOther" name "Resume" type = "button" value = "My Resume" onclick="location ='resume.php'"/>
            </div>
          <?php }
          if($current_file == "contact.php"){ ?>
            <div id = "other_button">
            <input class = "specialButton" name "Contact" type = "button" value = "Get in touch" onclick="location ='contact.php'"/>
            </div>
          <?php } else { ?>
            <div id = "other_button">
            <input class = "buttonOther" name "Contact" type = "button" value = "Get in touch" onclick="location ='contact.php'"/>
            </div>
          <?php } ?>
          </div>
        </ul>
    </nav>
</header>

<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
