<?php include ('include/header.php'); ?>

<div class="content-container">
<div class="row">
<!-- Aesthetic column left -->
<div class="column-side">
</div>
<!-- Duplicated array into this page to use variables -->
<section class="main">
<?php
      $geo_loc = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
      ?>

<p class="search-text-space">You wanted to search for the capital of : <?php echo $_POST["country"]; ?></p>

<!-- PHP IF/ELSE Statement to display capital or error -->
<p>
<?php
      $user_input = $_POST["country"];
      if (array_key_exists($_POST["country"], $geo_loc))
      {
            echo ("The capital of ". $_POST["country"]. " is : ". $geo_loc[$_POST["country"]] );
      }
      else if (empty($_POST["country"]))
      {
            echo "Textfield can not be left blank. Return to search and enter in the name of the country you would like to find it's capital.";
      }
      else{
         echo "This doesn't match any of the countries in our database. Check your spelling and try again or refer to the 'Countries & Capitals' section for a full list of countries and their corresponding Capitals. Entry is case sensitive.";   
      }
?> 
</p>
<br>
<!-- Button to return user back to capital search page -->
<button class="search-return-btn">
      <a href="page3.php">Return to search</a>
</button>
</section>
<!-- Aesthic column right -->
<div class="column-side">
</div>
</div>


<?php include ('include/footer.php'); ?>