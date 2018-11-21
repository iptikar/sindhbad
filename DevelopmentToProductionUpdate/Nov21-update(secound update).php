1. Create model 
model/business-seller.php
model/individual-seller.php


2. In controller add the following line 
/* Third phase of development ends here */ From this line

Add this lines 
// require select store procedure
require 'SelectStoreProcedure.php';

// company seller required 
require 'CompanySeller.php';

// Require individual seller 
require 'IndividaulSeller.php';

// preparedInsertStatement.php
require 'InsertPreparedStatement.php';


3. Add the views 

/var/www/html/user-admin-14e1813e3d0cf9da1a9dafc6afadff37my-profile.php

4. Not sure if you have to update js folder 
/var/www/html/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/custom.js

