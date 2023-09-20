<?php 
	/*Template Name: Pay Your Rates Online*/
	get_header();
?>




    <!-- Start User Area -->
    <section class="user-area ptb-100">
      <div class="container" style="text-align:center;"> 
        <h2 class="text-center">Pay Online Using PayNow</h2><br>
        <iframe src="https://www.topup.co.zw/billpay/widget/municipality-of-beitbridge?iframe=true" style="width: 150vh;padding: 15px;border: 3px solid lightgrey;border-radius: 6px;height: 550px;"></iframe>
      </div>
    </section>


    <!-- Start User Area -->
    <section class="user-area ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <style>
              table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
              }

              td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
              }

              tr:nth-child(even) {
                background-color: #dddddd;
              }
          </style>

          <h2 class="text-center">Or Pay Using Direct Bank Transfer</h2><br>
          <table>
            <tr>
              <th>Service</th>
              <th>Bank Account Name</th>
              <th>Account Number</th>
              <th>Bank</th>
            </tr>
            <tr>
              <td>Rates and service charges</td>
              <td>MOB rates and General</td>
              <td>09325579220015 (ZWL)</td>
              <td>CBZ</td>
            </tr>
            <tr>
              <td>Rates and service charges</td>
              <td>MOB rates and General</td>
              <td>09325579220025 (USD)</td>
              <td>CBZ</td>
            </tr>
            <tr>
              <td>Rates and service charges</td>
              <td>MOB rates and General</td>
              <td>09325579220035 (ZAR)</td>
              <td>CBZ</td>
            </tr>
            <tr>
              <td>Water</td>
              <td>BTC Water Account</td>
              <td>4570520583201 (ZWL)</td>
              <td>ZB Bank</td>
            </tr>
            <tr>
              <td>Water</td>
              <td>BTC Water Account</td>
              <td>4570520583200 (ZAR)</td>
              <td>ZB Bank</td>
            </tr>
          </table><br>

          <h2 class="text-center">Or Pay Using Ecocash</h2><br>
          <table>
            <tr>
              <th>Merchant Name</th>
              <th>Merchant Code</th>
            </tr>
              <tr>
              <td>Municipality Of Beitbridge</td>
              <td>84590</td>
            </tr>
          </table>            
          </div>
        </div>
      </div>
    </section>
    <!-- End User Area -->

    
    <section class="faq-area pt-100 pb-70">
      <div class="container">
        <div class="section-title">
          <h2>Frequently asked questions</h2>
        </div>

        <div class="faq-bg">
          <div class="faq-accordion">
            <ul class="accordion">
              <li class="accordion-item">
                <a class="accordion-title active" href="javascript:void(0)"><i class="ri-add-line"></i>01. How do I submit my proof of payment after making a payment using direct bank transfer or Ecocash?</a>  
                <div class="accordion-content show">
                  <p>After you have successfully made a payment, you will need to send the proof of payment (POP) to the municipality email accounts@beitbridgemun.co.zw. You can also alternatively submit the POP through this website on the Submit Your POP page</p>
                </div>
              </li>
              
              <li class="accordion-item">
                <a class="accordion-title" href="javascript:void(0)"><i class="ri-add-line"></i>02. Which details do I need to provide if I have made a payment using RTGS as method of transfer?</a>  
                <div class="accordion-content">
                  <p>If you have used RTGS transfers to pay your rates, you will need to provide the municipality with your name, municipality account number, transaction date, transaction amount, name of the bank from which the funds were transferred, the transaction reference number and the PDF POP. <b>Please note the transaction reference number has to be requested from your bank after your payment has been successfully processed.</b></p>
                </div>
              </li>

              <li class="accordion-item">
                <a class="accordion-title" href="javascript:void(0)"><i class="ri-add-line"></i>
                  03. Which details do I need to provide if I have made a payment using ZIPIT as method of transfer? 
                </a>
  
                <div class="accordion-content">
                  <p>If you have used ZIPIT transfers to pay your rates, you will need to provide the municipality with your name, municipality account number, transaction date, transaction amount, name of the bank from which the funds were transferred, the transaction reference numbers (STAN & RRN) and the PDF POP. Please note the transaction reference number has to be requested from your bank after your payment has been successfully processed</p>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </section>
 <?php get_footer();?>