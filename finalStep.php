<?php
include("finalStepHeader.html");


session_start();

// Display passenger's first name
echo "First Name: " . $_SESSION['passengerFN'];

echo "<BR>";

// Display passenger's surname
echo "Surname: " . $_SESSION['passengerSN'];

echo "<BR>";

// Check if luggage was selected
if ($_SESSION['luggage'] == 1) {

    echo "Bags under 10 KG: " . $_SESSION['subTenKG'];

    echo "<BR>";

    echo "Bags between 10 and 20 KG: " . $_SESSION['overTenKG'];

}


?>
</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</input>
        </div>
    </div>
   
        
      <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
    
</form>
