<?php include('include/header.php'); ?>

<div class="content-container">
<div class="row">
  <!-- Aesthetic column left -->
  <div class="column-side">
  </div>
  <section class="main"> 
    <h1>Countries & Their Capitals</h1> 
<!-- Table for Countires and Capitals -->
    <table class="table">
     <tr><th class="table-header">Country</th><th class="table-header">Capital</th></tr>
<!-- PHP For Loop to generate array keys and values into table -->
    <?php
      $geo_loc = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

      foreach($geo_loc as $countries => $capitals) {
      echo "<tr><td> $countries </td><td> $capitals </td></tr>";
      }
      ?>
    </table>
 </section>
<!-- Aesthetic column right -->
 <div class="column-side">
 </div>
 </div>

<?php include('include/footer.php'); ?>