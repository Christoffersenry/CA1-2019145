<?php include('include/header.php'); ?>

<div class="content-container">
<div class="row">
<div class="column-side">
</div>

<section class="main">
<h1>Capital Search</h1>
<h2>Find the capital of a country by entering the name below.</h2>
  
<div class="form-container">
<form action="search.php" method="post">
    <p>Country: <input type="text" name="country" placeholder="eg: Ireland"></p>
    <input type="submit">
</form>
</div>
<h4>***Please Note***</h4>
<p>Not all countries are stored in the database. Therefore the capital will not be known if an unknown country is chosen. Refer to <a href="page2.php">Countries & Capitals</a> to see a full list of countries included and their capitals.</p>
</section>
<div class="column-side">
</div>
</div>

<?php include('include/footer.php'); ?>