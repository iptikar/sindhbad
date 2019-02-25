<?php
	require 'controller/controller.php';
	
	// Get object 
	$obj = new MarketPlace();
// This page required some paramaters to post 
	
$postRequired  = ["firstname",
				"lastname",
				"orderNumber",
				"phonenumber",
				"address",
				"cartItems",
				"taxOrvat",
				"cartTotalAmount",
				"orderdate",
				'shippingcost',
				"to"
			];

$keys = array_keys($_POST);

// If any different 
$diff = array_diff($postRequired, $keys);

// Check everything is poted 
if(count($diff) > 0 ) {
	
		// Die with error message 
		die('Can not process the page');
}


	 
foreach($_POST as $key => $value) {
	
		${$key} = $_POST[$key];
}
	
?>

<!doctype html>
<html lang="en">
   <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="custom.css">
   </head>
   <body class="bg-danger pt-5">
      <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#eeeeee;padding:0px;margin:0px" align="center">
         <tbody>
            <tr>
               <td>
                  <table width="650" cellpadding="0" cellspacing="0" align="center">
                     <tbody>
                        <tr>
                           <td colspan="2" height="50">
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <table width="630" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="background-color:#ffffff;border-bottom:dashed 1px #ddd ">
                                 <tbody>
                                    <tr>
                                       <td width="20">
                                          &nbsp;
                                       </td>
                                       <td height="60">
                                          <a href="https://mandrillapp.com/track/click/30214477/www.awok.com?p=eyJzIjoiWF9wd1N3RXhRWVo2enpiNC11ZXc1T1Z0dUpJIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmF3b2suY29tXFxcLz91dG1fY2FtcGFpZ249MV9SZWNlaXZlZCZ1dG1fc291cmNlPUNSTSZ1dG1fbWVkaXVtPUVtYWlsXCIsXCJpZFwiOlwiNjU1Mzg2MDBjYzFiNDBlY2JlZDk2OTcxNzk4YzViMzdcIixcInVybF9pZHNcIjpbXCIxNTZhZTEwYjJhNDI0NGRhZmUwMzYzNDk3YjU3MWUyMTE1M2Y3Mjc0XCJdfSJ9" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/www.awok.com?p%3DeyJzIjoiWF9wd1N3RXhRWVo2enpiNC11ZXc1T1Z0dUpJIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmF3b2suY29tXFxcLz91dG1fY2FtcGFpZ249MV9SZWNlaXZlZCZ1dG1fc291cmNlPUNSTSZ1dG1fbWVkaXVtPUVtYWlsXCIsXCJpZFwiOlwiNjU1Mzg2MDBjYzFiNDBlY2JlZDk2OTcxNzk4YzViMzdcIixcInVybF9pZHNcIjpbXCIxNTZhZTEwYjJhNDI0NGRhZmUwMzYzNDk3YjU3MWUyMTE1M2Y3Mjc0XCJdfSJ9&amp;source=gmail&amp;ust=1537185316607000&amp;usg=AFQjCNHnxnt-c9R0F3tRV08Flgy28nMDCA"> <img width="168" alt="Awok" src="http://localhost/themes/sm_market2/pub/media/logo/default/logo_21.png" height="35" style="border:0" class="CToWUd"> </a>
                                       </td>
                                       <td height="60" align="right" valign="middle" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#777">
                                          <a href = "http://localhost/account" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#777;text-decoration:underline" target="_blank">My Account</a>
                                      
                                       </td>
                                       <td width="20">
                                          &nbsp;
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;line-height:25px">
                              <table width="630" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" style="padding:10px;border-bottom:none">
                                 <tbody>
                                    <tr>
                                       <td height="5">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td align="right" valign="top">
                                          <b style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#777;line-height:16px">TRN : </b> <span style="font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#777;line-height:16px">100484871700003</span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td align="right" valign="top">
                                          <b style="font-family:Arial,Helvetica,sans-serif;font-size:16px;color:#eb4e01;line-height:16px">Order Received</b><br>
                                          <span style="font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#777;line-height:16px">Order Number: <?= $orderNumber; ?></span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <span style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold">Hello Bharat Shah,</span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td height="10">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="font-family:Arial,Helvetica,sans-serif;line-height:20px">
                                          Great news! Your order’s been successfully placed.<br>
                                          <br>
                                          For any information regarding your latest order, you can visit the <b><a href="https://mandrillapp.com/track/click/30214477/www.awok.com?p=eyJzIjoiajF2RTlWNS1TN0Y4UGlMTzJKWEtISWYyNGwwIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5hd29rLmNvbVxcXC90cmFjay1vcmRlclxcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiY2Y1OWM3YjEyNDkxOGZhZGZlMWEyYzQ5MmY3MjQ5MWMyY2M4MWQ5N1wiXX0ifQ" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#e62e04;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/www.awok.com?p%3DeyJzIjoiajF2RTlWNS1TN0Y4UGlMTzJKWEtISWYyNGwwIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5hd29rLmNvbVxcXC90cmFjay1vcmRlclxcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiY2Y1OWM3YjEyNDkxOGZhZGZlMWEyYzQ5MmY3MjQ5MWMyY2M4MWQ5N1wiXX0ifQ&amp;source=gmail&amp;ust=1537185316607000&amp;usg=AFQjCNEYIZKp0L2OIvnTgb79zcVcqE9WXQ">Track Order</a></b>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td height="10">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <b style="font-family:Arial,Helvetica,sans-serif;color:#555;font-size:13px">Please find below the brief of your order :</b>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="background-color:#efefef;font-family:Arial,Helvetica,sans-serif;color:#333333" align="center" valign="middle">
                                          <table width="96%" cellspacing="0" cellpadding="0">
                                             <tbody>
                                                <tr>
                                                   <td height="10">
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td valign="top" width="48%" style="border-right:1px solid #ccc">
                                                      <b style="font-family:Arial,Helvetica,sans-serif;color:#555;font-size:13px">Order Details</b><br>
                                                      <span style="font-family:Arial,Helvetica,sans-serif;color:#555;font-size:11px;line-height:18px">Order ID: <?= $orderNumber; ?></span><br>
                                                      <span style="font-family:Arial,Helvetica,sans-serif;color:#555;font-size:11px;line-height:18px">Order Date: <?= $orderdate; ?></span><br>
                                                   </td>
                                                   <td style="width:10px">
                                                   </td>
                                                   <td valign="top" width="48%">
                                                      <b style="font-family:Arial,Helvetica,sans-serif;color:#555">Delivery Details</b><br>
                                                      <span style="font-family:Arial,Helvetica,sans-serif;color:#555;font-size:11px;line-height:18px">Full Name: <?= $firstname.' '.$lastname; ?></span><br>
                                                      <span style="font-family:Arial,Helvetica,sans-serif;color:#555;font-size:11px;line-height:18px">Phone Number: <?= $phonenumber ?></span><br>
                                                      <span style="font-family:Arial,Helvetica,sans-serif;color:#555;font-size:11px;line-height:18px">Address: <?= $address; ?><br>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td height="10">
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td height="10">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td valign="top">
                                          <b style="font-family:Arial,Helvetica,sans-serif;color:#555;font-size:13px">Product Details</b>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="border-bottom:solid 2px #777;height:20px" valign="middle">
                                          <table width="100%" cellspacing="0" cellpadding="0">
                                             <tbody>
                                                <tr>
                                                   <td width="5%" style="padding-left:5px">
                                                      <b>#</b>
                                                   </td>
                                                   
                                                   <td width="70%">
                                                      <b>Item</b>
                                                   </td>
                                                   <td width="10%" align="center">
                                                      <b>Qty</b>
                                                   </td>
                                                   <td width="20%" align="center">
                                                      <b>Price</b>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="border-bottom:solid 1px #ddd" valign="middle">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="border-bottom:solid 1px #ddd" valign="middle">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                             <tbody>
                                                <tr>
                                                   <td height="5"></td>
                                                </tr>
                                                <?php 
													$cartItemsInarray = json_decode($cartItems,true);
													$i = 1;
                                                ?>
                                                
                                                <?php if(is_array($cartItemsInarray)):?>
                                                
                                                
                                                <!-- Cart items will be shown here --->
                                                <?php foreach ( $cartItemsInarray as $eachitems) :?>
                                                <tr>
                                                   <td width="5%" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#333;padding-left:5px"><?= $i ?></td>
                                                   <td width="70%" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#333;line-height:16px"><?= $eachitems['name']; ?></td>
                                                   <td width="10%" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#333" align="center"><?= $eachitems['qty']; ?></td>
                                                   <td width="20%" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#333" align="center"><b><?= $obj->getPriceFormate($eachitems['price']); ?> AED </b></td>
                                                </tr>
                                                
                                                <?php $i++ ?>
                                                <?php endforeach; ?>
                                                
                                                <?php endif; ?>
                                                
                                                
                                                
                                               
                                               
                                               
                                               
                                               
                                                <tr>
                                                   <td height="5"></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <table width="100%" cellspacing="0" cellpadding="0">
                                          </table>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td align="right" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666">
                                          Delivery Price: <b style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#333"><?= $shippingcost?> <span></span></b>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td align="right" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666">
                                          VAT Applicable: <b style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#333"><?= $taxOrvat?> AED</b>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td align="right" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666">
                                          Sub Total: <b style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666"><?= $cartTotalAmount ?> AED</b>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                       </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                       <td height="10">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="width:100%;height:2px;border-bottom:dashed 1px #ccc">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td height="10">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#666">
                                          Kindly remember to add us to your address book. If you are a gmail user please move our emails to primary tab.
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="font-size:14px">
                                          <strong>Best Regards,</strong>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td height="5">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="font-size:13px">
                                          Sales Team,
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="font-size:12px">
                                          <a href="https://mandrillapp.com/track/click/30214477/www.awok.com?p=eyJzIjoiWF9wd1N3RXhRWVo2enpiNC11ZXc1T1Z0dUpJIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmF3b2suY29tXFxcLz91dG1fY2FtcGFpZ249MV9SZWNlaXZlZCZ1dG1fc291cmNlPUNSTSZ1dG1fbWVkaXVtPUVtYWlsXCIsXCJpZFwiOlwiNjU1Mzg2MDBjYzFiNDBlY2JlZDk2OTcxNzk4YzViMzdcIixcInVybF9pZHNcIjpbXCIxNTZhZTEwYjJhNDI0NGRhZmUwMzYzNDk3YjU3MWUyMTE1M2Y3Mjc0XCJdfSJ9" style="color:#333;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/www.awok.com?p%3DeyJzIjoiWF9wd1N3RXhRWVo2enpiNC11ZXc1T1Z0dUpJIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmF3b2suY29tXFxcLz91dG1fY2FtcGFpZ249MV9SZWNlaXZlZCZ1dG1fc291cmNlPUNSTSZ1dG1fbWVkaXVtPUVtYWlsXCIsXCJpZFwiOlwiNjU1Mzg2MDBjYzFiNDBlY2JlZDk2OTcxNzk4YzViMzdcIixcInVybF9pZHNcIjpbXCIxNTZhZTEwYjJhNDI0NGRhZmUwMzYzNDk3YjU3MWUyMTE1M2Y3Mjc0XCJdfSJ9&amp;source=gmail&amp;ust=1537185316608000&amp;usg=AFQjCNGTlvaDYylG3IPDFSZnoIa_7ZlDAA">SINDHBAD.com</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td height="20">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#555">
                                          <b>Terms &amp; Conditions:</b>
                                       </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                       <td height="10">
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#666;line-height:18px">
                                          1. Customer is advised to check or verify the delivered product for any damage immediately at the time of delivery and return the product to the delivery personnel in case of damaged product.<br>
                                          2. Customer will bear the additional delivery charge if the request to replace the damaged product is raised post-delivery of the product
                                       </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                       <td>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2">
                               <table width="650" align="center" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <tr>
                                       <td colspan="2" align="center">
                                          <br>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">
                                          <table width="100%" cellspacing="0" cellpadding="0">
                                             <tbody>
                                                <tr>
                                                   <td colspan="2" width="650" style="line-height:0px">
                                                      <img width="650" src="https://ci5.googleusercontent.com/proxy/XHKDfa3WR7wOhoZlSvT6FNgeZW8EWXLU8I8ujKgPPQKuv2koi_QwiENr2sHvBlJxK3sogS4Y8fkAQ5EJhQ8vVgo=s0-d-e1-ft#http://m1.sindhbadcdn.com/nl/new/en-mid-top.png" height="104" alt="" class="CToWUd">
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td colspan="2">
                                                      <table width="100%" cellspacing="0" cellpadding="0">
                                                         <tbody>
                                                            <tr>
                                                               <td width="201">
                                                                  <img width="201" src="https://ci4.googleusercontent.com/proxy/BmRjLZuo1tVp1PYWibML1xGU2xJeOC0dSWUITTz4onjW1eV4GR_b9_wCApt3OP9p9VdwoA_mu9818KE9kX4=s0-d-e1-ft#http://m1.sindhbadcdn.com/nl/new/en-left.png" height="126" alt="" class="CToWUd">
                                                               </td>
                                                               <td bgcolor="#f7f7f7" style="border-bottom:solid 1px #e5e5e5">
                                                                  <table cellspacing="0" cellpadding="0" align="center" width="100%">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td colspan="6" align="center" height="40" style="text-transform:uppercase;font-weight:bold;color:#666666">
                                                                              connect with us
                                                                           </td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td align="left" width="25">
                                                                              <a href="https://mandrillapp.com/track/click/30214477/www.facebook.com?p=eyJzIjoiUU9fMWRVZnpUamxNVndPbEhMLWxkeGpCT0owIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5mYWNlYm9vay5jb21cXFwvYXdva1xcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiMjM4ZTBjMWJmNzQxZjIyYzY5OTBiZjI0YTM5OGM0ZDYzMjA4ZTUyMlwiXX0ifQ" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/www.facebook.com?p%3DeyJzIjoiUU9fMWRVZnpUamxNVndPbEhMLWxkeGpCT0owIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5mYWNlYm9vay5jb21cXFwvYXdva1xcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiMjM4ZTBjMWJmNzQxZjIyYzY5OTBiZjI0YTM5OGM0ZDYzMjA4ZTUyMlwiXX0ifQ&amp;source=gmail&amp;ust=1537185316608000&amp;usg=AFQjCNE1m0_oa4CuKG2lgoM_UMN8vUFntQ"><img width="30" alt="Youtube" src="https://ci5.googleusercontent.com/proxy/SD1d4P5XhpuJyLPDtBwXjHgUgWtkfp_Y0pbORF7EcdQqnPQ_pdo933S07w5hHgD-GtVZQHd7gg8R=s0-d-e1-ft#http://m1.sindhbadcdn.com/nl/new/fb.jpg" height="30" vspace="0" hspace="0" border="0" class="CToWUd"></a>
                                                                           </td>
                                                                           <td align="left" width="25">
                                                                              <a href="https://mandrillapp.com/track/click/30214477/plus.google.com?p=eyJzIjoiRFc0cmRpYU9qZFh2aFVxNjNfU1BkUlB0dHY0IiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3BsdXMuZ29vZ2xlLmNvbVxcXC8rQWxpZmNhVUFFXFxcL3ZpZGVvc1xcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiYWFmY2JjMDZmOWY1YTMxMjU5YzhiOTIyZjYwNjVkNTgzYTRkNmI4MFwiXX0ifQ" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/plus.google.com?p%3DeyJzIjoiRFc0cmRpYU9qZFh2aFVxNjNfU1BkUlB0dHY0IiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3BsdXMuZ29vZ2xlLmNvbVxcXC8rQWxpZmNhVUFFXFxcL3ZpZGVvc1xcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiYWFmY2JjMDZmOWY1YTMxMjU5YzhiOTIyZjYwNjVkNTgzYTRkNmI4MFwiXX0ifQ&amp;source=gmail&amp;ust=1537185316608000&amp;usg=AFQjCNHfmrZTtNYWUP98a9pNfdaNgXWZPg"><img width="30" alt="Youtube" src="https://ci6.googleusercontent.com/proxy/srR_WlNIuRSlkry85dbfEsy6SZIz604CNI5bD9DBiHv5GpYrbwFtJLAeZF9bG1yBt1qunhmwQscnbWUd=s0-d-e1-ft#http://m1.sindhbadcdn.com/nl/new/gplus.jpg" height="30" vspace="0" hspace="0" border="0" class="CToWUd"></a>
                                                                           </td>
                                                                           <td align="left" width="25">
                                                                              <a href="https://mandrillapp.com/track/click/30214477/www.linkedin.com?p=eyJzIjoiMWc3Z1ZkRzBWOUh2NUFtb081Qzc2dXgtQ084IiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5saW5rZWRpbi5jb21cXFwvY29tcGFueVxcXC9hd29rXFxcLz91dG1fY2FtcGFpZ249MV9SZWNlaXZlZCZ1dG1fc291cmNlPUNSTSZ1dG1fbWVkaXVtPUVtYWlsXCIsXCJpZFwiOlwiNjU1Mzg2MDBjYzFiNDBlY2JlZDk2OTcxNzk4YzViMzdcIixcInVybF9pZHNcIjpbXCJiZDllMDBkZmQ5ZjYzMTAxZGFmNmRlMGM1NjQ3MGZiYTY1MzBhYjk5XCJdfSJ9" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/www.linkedin.com?p%3DeyJzIjoiMWc3Z1ZkRzBWOUh2NUFtb081Qzc2dXgtQ084IiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5saW5rZWRpbi5jb21cXFwvY29tcGFueVxcXC9hd29rXFxcLz91dG1fY2FtcGFpZ249MV9SZWNlaXZlZCZ1dG1fc291cmNlPUNSTSZ1dG1fbWVkaXVtPUVtYWlsXCIsXCJpZFwiOlwiNjU1Mzg2MDBjYzFiNDBlY2JlZDk2OTcxNzk4YzViMzdcIixcInVybF9pZHNcIjpbXCJiZDllMDBkZmQ5ZjYzMTAxZGFmNmRlMGM1NjQ3MGZiYTY1MzBhYjk5XCJdfSJ9&amp;source=gmail&amp;ust=1537185316609000&amp;usg=AFQjCNFfNDll4A6Lm0JrE58BgfDf9VTGcw"><img width="30" alt="Youtube" src="https://ci4.googleusercontent.com/proxy/xjshzOo2hKPK2G7hux_w2OSgXNMp198CgbjNKO3zlRGCVJttLQ8i7TCzk60o7wbaaYGN8gRVPc9D=s0-d-e1-ft#http://m1.sindhbadcdn.com/nl/new/ln.jpg" height="30" vspace="0" hspace="0" border="0" class="CToWUd"></a>
                                                                           </td>
                                                                           <td align="left" width="25">
                                                                              <a href="https://mandrillapp.com/track/click/30214477/twitter.com?p=eyJzIjoiZEZsVkVOUlBRQ1VGN08zcWliM20zSm5sM3hRIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3R3aXR0ZXIuY29tXFxcL2F3b2tjb21cXFwvP3V0bV9jYW1wYWlnbj0xX1JlY2VpdmVkJnV0bV9zb3VyY2U9Q1JNJnV0bV9tZWRpdW09RW1haWxcIixcImlkXCI6XCI2NTUzODYwMGNjMWI0MGVjYmVkOTY5NzE3OThjNWIzN1wiLFwidXJsX2lkc1wiOltcIjBjMTYzYTUxOGMzNDlkMDgyY2NiNWMzNzQ4MzkyOTZhN2JkZWRmMWFcIl19In0" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/twitter.com?p%3DeyJzIjoiZEZsVkVOUlBRQ1VGN08zcWliM20zSm5sM3hRIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3R3aXR0ZXIuY29tXFxcL2F3b2tjb21cXFwvP3V0bV9jYW1wYWlnbj0xX1JlY2VpdmVkJnV0bV9zb3VyY2U9Q1JNJnV0bV9tZWRpdW09RW1haWxcIixcImlkXCI6XCI2NTUzODYwMGNjMWI0MGVjYmVkOTY5NzE3OThjNWIzN1wiLFwidXJsX2lkc1wiOltcIjBjMTYzYTUxOGMzNDlkMDgyY2NiNWMzNzQ4MzkyOTZhN2JkZWRmMWFcIl19In0&amp;source=gmail&amp;ust=1537185316609000&amp;usg=AFQjCNGeXnWFwzYLKanSCL-v1KGIU8mC3w"><img width="30" alt="Youtube" src="https://ci4.googleusercontent.com/proxy/6xI__Amn35EN6JI4Dcl1exIrZHmjnvfSGLviiyuWKJaMlWuXA7vujCAhIRTgygY0Rq3baosoGsZn=s0-d-e1-ft#http://m1.sindhbadcdn.com/nl/new/tw.jpg" height="30" vspace="0" hspace="0" border="0" class="CToWUd"></a>
                                                                           </td>
                                                                           <td align="left" width="25">
                                                                              <a href="https://mandrillapp.com/track/click/30214477/www.youtube.com?p=eyJzIjoiam9DMmZOQW5YR05PLWQ4N0otWFJ6cHBvZXpnIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy55b3V0dWJlLmNvbVxcXC91c2VyXFxcL0FXT0tjb21cXFwvP3V0bV9jYW1wYWlnbj0xX1JlY2VpdmVkJnV0bV9zb3VyY2U9Q1JNJnV0bV9tZWRpdW09RW1haWxcIixcImlkXCI6XCI2NTUzODYwMGNjMWI0MGVjYmVkOTY5NzE3OThjNWIzN1wiLFwidXJsX2lkc1wiOltcIjk0Zjk0ZTc4MWY2ZmNhOTdiYTVlNDBhYmRhY2QxNTZkMjkyNDJhOGZcIl19In0" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/www.youtube.com?p%3DeyJzIjoiam9DMmZOQW5YR05PLWQ4N0otWFJ6cHBvZXpnIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy55b3V0dWJlLmNvbVxcXC91c2VyXFxcL0FXT0tjb21cXFwvP3V0bV9jYW1wYWlnbj0xX1JlY2VpdmVkJnV0bV9zb3VyY2U9Q1JNJnV0bV9tZWRpdW09RW1haWxcIixcImlkXCI6XCI2NTUzODYwMGNjMWI0MGVjYmVkOTY5NzE3OThjNWIzN1wiLFwidXJsX2lkc1wiOltcIjk0Zjk0ZTc4MWY2ZmNhOTdiYTVlNDBhYmRhY2QxNTZkMjkyNDJhOGZcIl19In0&amp;source=gmail&amp;ust=1537185316609000&amp;usg=AFQjCNEvNQBTGV99DL60lv-tD1yqQq72nQ"><img width="30" alt="Youtube" src="https://ci6.googleusercontent.com/proxy/979BdeCyZVP9hfECEEtkCk2VoZIM097sLTdXMqrE1o7UBUm4Oar7US2YM7wLBjBRNIzZiMnRxv8YmA=s0-d-e1-ft#http://m1.sindhbadcdn.com/nl/new/tub.jpg" height="30" vspace="0" hspace="0" border="0" class="CToWUd"></a>
                                                                           </td>
                                                                           <td align="left" width="25">
                                                                              <a href="https://mandrillapp.com/track/click/30214477/www.pinterest.com?p=eyJzIjoiYUlUaU5mLW9TOFk5eWlMM254UWFvM01RWFhzIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LnBpbnRlcmVzdC5jb21cXFwvYXdva2NvbVxcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiMzdhOWZmMTQ4ZjI4Y2UxZjQ4NWIxYWMzODdkN2E5ZTM1MDBmM2I3YVwiXX0ifQ" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/www.pinterest.com?p%3DeyJzIjoiYUlUaU5mLW9TOFk5eWlMM254UWFvM01RWFhzIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LnBpbnRlcmVzdC5jb21cXFwvYXdva2NvbVxcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiMzdhOWZmMTQ4ZjI4Y2UxZjQ4NWIxYWMzODdkN2E5ZTM1MDBmM2I3YVwiXX0ifQ&amp;source=gmail&amp;ust=1537185316609000&amp;usg=AFQjCNFZd2yH6Y7U4fd2rakDx_MfeqvZOw"><img width="30" alt="Youtube" src="https://ci6.googleusercontent.com/proxy/WPxKsn4Ie03Q0dLp00g3Bi0xyGvswFtqyQKOn9qQaq5zhs_vYRcd86G_DrN9NwHBEx3zXFTSjR0KLw=s0-d-e1-ft#http://m1.sindhbadcdn.com/nl/new/pin.jpg" height="30" vspace="0" hspace="0" border="0" class="CToWUd"></a>
                                                                           </td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td colspan="6" height="40" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666">
                                                                              © 2018&nbsp;<a href="https://mandrillapp.com/track/click/30214477/www.sindhbad.com?p=eyJzIjoiWF9wd1N3RXhRWVo2enpiNC11ZXc1T1Z0dUpJIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmF3b2suY29tXFxcLz91dG1fY2FtcGFpZ249MV9SZWNlaXZlZCZ1dG1fc291cmNlPUNSTSZ1dG1fbWVkaXVtPUVtYWlsXCIsXCJpZFwiOlwiNjU1Mzg2MDBjYzFiNDBlY2JlZDk2OTcxNzk4YzViMzdcIixcInVybF9pZHNcIjpbXCIxNTZhZTEwYjJhNDI0NGRhZmUwMzYzNDk3YjU3MWUyMTE1M2Y3Mjc0XCJdfSJ9" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/www.sindhbad.com?p%3DeyJzIjoiWF9wd1N3RXhRWVo2enpiNC11ZXc1T1Z0dUpJIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmF3b2suY29tXFxcLz91dG1fY2FtcGFpZ249MV9SZWNlaXZlZCZ1dG1fc291cmNlPUNSTSZ1dG1fbWVkaXVtPUVtYWlsXCIsXCJpZFwiOlwiNjU1Mzg2MDBjYzFiNDBlY2JlZDk2OTcxNzk4YzViMzdcIixcInVybF9pZHNcIjpbXCIxNTZhZTEwYjJhNDI0NGRhZmUwMzYzNDk3YjU3MWUyMTE1M2Y3Mjc0XCJdfSJ9&amp;source=gmail&amp;ust=1537185316609000&amp;usg=AFQjCNHJHn-xAGt2m_doulu58Fi_cG0N4g">sindhbad.com</a>. All rights reserved.
                                                                           </td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                               <td width="201">
                                                                  <img width="201" src="https://ci6.googleusercontent.com/proxy/SVT2PmJc6PWXpJ_gZz2t04d_ulPqiXJ4kygvsGD0a0JC9hpA1uaa9Gq6VXgwtfIMmkAVBCKrZLjOYDNx0iDx=s0-d-e1-ft#http://m1.sindhbadcdn.com/nl/new/en-right.png" height="126" alt="" class="CToWUd">
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td colspan="3">
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td height="5">
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td align="center">
                                                      <a href="https://mandrillapp.com/track/click/30214477/www.sindhbad.com?p=eyJzIjoicDVzZUR5OHlIM0RZWXQzMTZxZ2k1Rmt2RmhVIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmF3b2suY29tXFxcL2hlbHAtaW5mb1xcXC9wcml2YWN5LXBvbGljeVxcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiZTYyMjgxZTAzOTc3M2QxMjIzMmUwNDE2YTYxMzQ4MDNjNmFlOTgzNVwiXX0ifQ" style="font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#999;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/www.sindhbad.com?p%3DeyJzIjoicDVzZUR5OHlIM0RZWXQzMTZxZ2k1Rmt2RmhVIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmF3b2suY29tXFxcL2hlbHAtaW5mb1xcXC9wcml2YWN5LXBvbGljeVxcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiZTYyMjgxZTAzOTc3M2QxMjIzMmUwNDE2YTYxMzQ4MDNjNmFlOTgzNVwiXX0ifQ&amp;source=gmail&amp;ust=1537185316609000&amp;usg=AFQjCNFfet4Bxpphja67w8Lq944dXLSihg">Privacy Policy</a> <span style="color:#999;font-size:10px">|</span> <a href="https://mandrillapp.com/track/click/30214477/www.sindhbad.com?p=eyJzIjoicFJrSnpoRjhqZlRlZFJyY3BTc3dIQ1pZeERRIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmF3b2suY29tXFxcL2hlbHAtaW5mb1xcXC90ZXJtc1xcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiZjdkODQ0ZWVmZWRiODNlOWJjZDBjMDNmNjRjODViYzc4MDA0MDBhY1wiXX0ifQ" style="font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#999;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/30214477/www.sindhbad.com?p%3DeyJzIjoicFJrSnpoRjhqZlRlZFJyY3BTc3dIQ1pZeERRIiwidiI6MSwicCI6IntcInVcIjozMDIxNDQ3NyxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmF3b2suY29tXFxcL2hlbHAtaW5mb1xcXC90ZXJtc1xcXC8_dXRtX2NhbXBhaWduPTFfUmVjZWl2ZWQmdXRtX3NvdXJjZT1DUk0mdXRtX21lZGl1bT1FbWFpbFwiLFwiaWRcIjpcIjY1NTM4NjAwY2MxYjQwZWNiZWQ5Njk3MTc5OGM1YjM3XCIsXCJ1cmxfaWRzXCI6W1wiZjdkODQ0ZWVmZWRiODNlOWJjZDBjMDNmNjRjODViYzc4MDA0MDBhY1wiXX0ifQ&amp;source=gmail&amp;ust=1537185316609000&amp;usg=AFQjCNEyMrGzOTbayZ3DsJGNPOD-g38rmQ">Terms &amp; Conditions</a>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td height="10">
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           
                           
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
         </tbody>
      </table>
   </body>
</html>
