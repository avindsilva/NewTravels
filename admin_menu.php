<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin_menu</title>

<link rel="stylesheet" href="style.css" />
</head>

<body>
<div id="menu-bar">
  <ul>
     <li class="has-sub"><a href="#">Masters</a>
    <ul>
      <li><a href="master/sector.php">Sectors</a></li>
      <li><a href="master/airlines.php">Airlines</a></li>
      <li><a href="master/accounts.php">Accounts</a></li>
      <li><a href="master/users.php">Users</a></li>
      <li><a href="master/customers.php">Customers</a></li>
      <li><a href="master/country.php">Country</a></li>
      <li><a href="master/company_setup.php">Company Setup</a></li>
    </ul>
  </li>
  <li class="has-sub"><a href="#" title="Ticket Sales" >Transactions</a>
    <ul>
      <li><a href="#">Ticket Sales</a></li>
      <li><a href="#">Payment Entry</a></li>
      <li><a href="#">Refund of Ticket</a></li>
      <li><a href="#">Reissue of Ticket</a></li>
      <li><a href="#">Journal Entry</a></li>
      <li><a href="#">Quotation</a></li>
      <li><a href="#">Excahnge Offer</a></li>
      
    </ul>
  </li>
  <li class="has-sub"><a href="#">Reports</a>
    <ul>
      <li><a href="#">Ticket Sales</a>      </li>
      <li><a href="#">Cash/Bank Balance</a></li>
      <li><a href="#">Account Wise</a></li>
    </ul>
  </li>
  
  </ul>
  <div style="margin-left:800px;color:white;margin-top:10px;"><a href="logout.php" style="color:#ffffff;text-decoration:none;">
  	<?php print(mktimeLogout</a></div>
</div>
</body>

</html>