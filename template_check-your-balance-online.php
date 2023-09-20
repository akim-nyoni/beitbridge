<?php 
	/*Template Name: Check Your Balance Online*/
	get_header();
?>
	 
    



	<section class="find-courses-area pb-100">
      <div class="find-courses-bg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">

              <div class="col s12">
                  
				<?php
                $conn = mysqli_connect ("localhost", "beitbrid_wp221", "!2l(7pSi55") or die(mysqli_error($conn));
                mysqli_select_db($conn, 'beitbrid_wp221') or die(mysqli_error($conn));
                $output = '';

                //if "account_number" variable is filled out, display account balance 
                if (isset($_POST['submit']))  {
                  $searchq = $_POST['account_number'];
                  $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

                  $searchq2 = $_POST['security_code'];
                  $searchq2 = preg_replace("#[^0-9a-z]#i", "", $searchq2);

                  $query = mysqli_query($conn, "SELECT * FROM uploaded_balances WHERE account_number LIKE '$searchq' AND security_code LIKE '$searchq2' ") or die(mysqli_error($conn));
                  $count = mysqli_num_rows($query);
                  if($count == 0){
                    $output = '<br><br><br><form class="find-courses-from-bg mr-15 alert alert-danger"><hr>
                    <h2 class="text-center" style="color:red">Ooops, we have a problem! <i class="fa fa-frown-o"></i></h2>
                    <h4 class="text-center" style="color:red">The details your entered did not match our records. <br><br><a href="" style="color:green">Click Here to try again <i class="fa fa-refresh" aria-hidden="true"></i></a></h4>
                      
                  </form>';
                  } else{
                    while($row = mysqli_fetch_array($query)){
                      $acc = $row['account_number'];
                      $adr1 = $row['physical1'];
                      $adr2 = $row['physical2'];
                      $adr3 = $row['physical3'];
                      $bal = $row['balance'];

                      $output .= '<br><br><br><br><form class="find-courses-from-bg mr-15 alert alert-success"><hr>
                    <h2 class="text-center" style="color:green">Thank you for using our online service. <i class="fa fa-thumbs-up"></i></h2>
                    <h3 class="text-center" style="color:green">The balance for '.$adr1 .' '.$adr2 .' '.$adr3 .' is currently (ZWL) '.$bal .'! <i class="fa fa-smile-o"></i></h3>
                  </form>';
                    }
                  }
                }

                //if "account_number" variable is not filled out, display the form 
                else  {
                  ?><br><br><br><br>
                  <form class="find-courses-from-bg mr-15" method="post" action="">
                    <h2 class="text-center">Check Your Balance Online</h2>
                    <div class="row">
                      <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control validate" name="account_number" id="account_number" placeholder="Enter Your Account Number" required>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                          <input type="password" class="form-control validate" name="security_code" id="security_code" placeholder="Enter Your Security Code" required>
                        </div>
                      </div>
                      
                      <div class="col-lg-4 col-md-6">
                        <button type="submit" class="default-btn" name="submit" id="submit">
                          Submit Your Request
                        </button>
                      </div>
                    </div>
                  </form>
                  <?php
                } ?>

                <?php print("$output");?>

				
            </div>

          </div>
        </div>
      </div>
    </section>
    

 <?php get_footer();?>