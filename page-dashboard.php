<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/21274dacb7.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Dashboard</title>
</head>
<body style="margin:20px;background:#F7F7F7;">

<?php 
  include 'config.php';
  if ($AccountNo == null){
    ?>
      <script>
        window.location.href = 'https://beitbridgemun.co.zw/login/';
      </script>
    <?php
  } else if (strlen($AccountNo) < 8) {
    ?>
      <script>
        window.location.href = 'https://beitbridgemun.co.zw/login/';
      </script>
    <?php
  } else { 
    $ses_sql=mysqli_query($conn,"SELECT * FROM wp_bal_table b, wp_pas_user p WHERE (p.acc_num = b.Account) and p.acc_num = '$AccountNo'");
    
    while($rows=mysqli_fetch_array($ses_sql, MYSQLI_ASSOC)){
      if ($rows['Account'] == $AccountNo){
    ?>

    <div class="container mt-5 mb-5" style="background:green;padding:0;border-radius: 8px;">
        <center><h3 class="pt-3 pb-3 pl-2 pr-2" style="color:white;">Municipality Of Beitbridge</h3></center>
      <div class="form-control p-4">
        <div class="row">
          <!--<div class="col-md-1"></div>-->
        <div class="col-md-6 mt-3">
            <h3>PayNow</h3>
            <iframe src="https://www.topup.co.zw/billpay/widget/municipality-of-beitbridge?iframe=true" style="background:#F7F7F7; width: 100%;height:356px;"></iframe>
         </div>
          <div class="col-md-6 mt-3">
              <section>
                <h3>Account Details</h3>
                <div class="login-form-bd">
                  <div class="form-wrapper">
                    <div class="form-container">
                        <form method='post' action="">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>: <?php echo $rows['Name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number</td>
                                        <td>: <?php if ($rows['Telephone'] == "") {echo "null";} else {echo $rows['Telephone'];} ?></td>
                                    </tr>
                                    <tr>
                                        <td>House Number</td>
                                        <td>: <?php echo $rows['Physical1']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Location</td>
                                        <td>: <?php echo $rows['Physical2']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Town</td>
                                        <td>: <?php echo $rows['Physical3']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Account Number</td>
                                        <td>: <?php echo $rows['acc_num']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Balance</td>
                                        <td>: <?php $currency = $rows['DCBalance']; if ($currency <= 0){ echo "<sec style='color:green'>ZWL&nbsp;".number_format($currency,2,'.',',')."</sec>"; } else { echo "<sec style='color:red'>ZWL&nbsp;".number_format($currency,2,'.',',')."</sec>"; }; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <center><button class="btn btn-warning mt-3" style="width:100%;" type="submit" value="Logout" name="logout">Logout</button></center>
                            <?php
                              if(isset($_POST['logout'])){
                                session_destroy();
                                ?>
                                  <script>
                                    window.location.href = 'https://beitbridgemun.co.zw/login/';
                                  </script>
                                <?php
                              }
                            ?>
                        </form>
                        
                    </div>
                  </div>
                </div>
              </section>
          </div>
        </div>
      </div>
     </div>
     



  <?php
      } else {
        session_destroy();
        ?>
          <script>
            window.location.href = 'https://beitbridgemun.co.zw/login/';
          </script>
        <?php
      }
    }
  }
$conn->close;
?>

</body>
</html>