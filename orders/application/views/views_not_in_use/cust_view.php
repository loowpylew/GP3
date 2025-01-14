<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
  <!--Boostrap css file is linked before the custom css file to overwrite the default properties of the bootstrap file-->
  <!--Bootsrap css file-->
  <link rel="stylesheet" href="../../assets/grocery_crud/css/added_css/bootstrap.min.css" type="text/css"/>
  <link rel="stylesheet" href="../../../assets/grocery_crud/css/added_css/bootstrap.min.css" type="text/css"/> 
  <link rel="stylesheet" href="../../../../assets/grocery_crud/css/added_css/bootstrap.min.css" type="text/css"/> 
  <!--font awesome items-->
  <!--Custom css file-->
  <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/style.css?v=2"/>
  <link rel="stylesheet" type="text/css" href="../../../assets/grocery_crud/css/added_css/style.css?v=2"/>
  <link rel="stylesheet" type="text/css" href="../../../../assets/grocery_crud/css/added_css/style.css?v=2"/>
  
  <link rel="stylesheet" type="text/css" href="../../../assets/grocery_crud/css/added_css/orders-pages/addOrder.css?v=2"/>
  <link rel="stylesheet" type="text/css" href="../../../../assets/grocery_crud/css/added_css/orders-pages/view.css?v=2"/>
  <link rel="stylesheet" type="text/css" href="../../../../assets/grocery_crud/css/added_css/orders-pages/edit.css?v=2"/>


  

  
  <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/partials/_variables.css?v=2"/> 
  <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/partials/_global.css?v=2"/> 
	<style>
		h1 { text-align: center; 	font-family: Calibri; }

    .apple-link > img {
    height: 63px; 
    width: 10%; 
    margin-top: 40%;
    margin-left: 80%; 
    margin-bottom: 10%;
  }
   .call-now {
    margin-top: 21% ; 
    margin-bottom: 10%; 
    margin-left: 1%
   }
   #customers { 
     margin-top: 5%;
   }
   #customers > h1{
    font-size: 50px;  
    text-transform: uppercase;
    font-weight: bold;
    
   }
   #para { 
    margin-top: 5%; 
    margin-left: 10%;
   }
   #customers_dbtable {
     margin-top: 5%; 
   }
   #image-one > img {
    margin-top: 5%; 
    margin-bottom: -100%; 
  }
  .navbar-toggler{
    margin-top: -25%;
    margin-left: 105%;
  }

	</style>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
<header class="header_area">
    <div class="main-menu">
      <div class="navbar-static-top">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <div class="navbar-nav">
            <li><a onclick="home()" class="nav-item nav-link active" href='<?php echo site_url('')?>'>Home<span class="sr-only">(current)</span></a></li>
                  <li><a onclick="orders()" class="nav-item nav-link" href='<?php echo site_url('main/orders')?>'>Orders</a></li>
                  <li><a onclick="items()" class="nav-item nav-link" href='<?php echo site_url('main/items')?>'>Items</a></li>
                  <li><a onclick="customers()" class="nav-item nav-link" href='<?php echo site_url('main/customers')?>'>Customers</a></li>
                  <li><a onclick="orderline()" class="nav-item nav-link" href='<?php echo site_url('main/orderline')?>'>OrderLine</a></li>
                  <li><a onclick="appleVariety()" class="nav-item nav-link" href='<?php echo site_url('main/applevariety')?>'>Apple Variety</a></li>
                  <li><a onclick="trees()" class="nav-item nav-link" href='<?php echo site_url('main/trees')?>'>Trees</a></li>
                  <li><a onclick="orchard()" class="nav-item nav-link" href='<?php echo site_url('main/orchard')?>'>Orchard</a></li>
                  <li><a onclick="treesPlanted()" class="nav-item nav-link" href='<?php echo site_url('main/treesPlanted')?>'>Trees Planted</a></li>
            </div>
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="#">
            <div id="image-one">
              <img  src="../../assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top one" alt="logo" loading="lazy"/>
            </div> 
            <div id="image-two">
              <img  src="../../../assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy"/>
            </div>
            <div id="image-three">
              <img  src="../../../../assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy"/>
            </div>
            <div id="image-four">
              <img  src="../../../../assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy"/>
            </div> 

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            
              <span class="navbar-toggler-icon"></span>
            </button>
          </a>
        </nav>
      </div>
    </div>
  </header>

  <textarea id="home" cols="0" rows="0">Home.</textarea>
  <textarea id="orders" cols="0" rows="0">Orders.</textarea>
  <textarea id="items" cols="0" rows="0">Items.</textarea>
  <textarea id="customers" cols="0" rows="0">Customers.</textarea>
  <textarea id="orderline" cols="0" rows="0">OrderLine.</textarea>
  <textarea id="apple-variety" cols="0" rows="0">Apple Variety.</textarea>
  <textarea id="trees" cols="0" rows="0">Trees.</textarea>
  <textarea id="orchard" cols="0" rows="0">Orchard</textarea>
  <textarea id="trees-planted" cols="0" rows="0">Trees Planted.</textarea>

  <textarea id="phoneNumber" cols="0" rows="0">(+44)07634212074</textarea>

                    
  <textarea id="customersPara" cols="0" rows="0">Here in the 'Customers' page, you can enter details about the customer such as assigning a unique ID to name, address, 
  phone number and email. You can add  new customers to the list via the 'Add customer' button on the top left of the orders table, you can individual customer details via the 'view' button,
  you can change details about customers via the 'edit' button and you can delete details about customers 
  by simply clicking on the 'delete' button </textarea>

  <div id="customers"> 
   <h1>Customers</h1>
</div> 

<div id="para"> 
<p>Here in the 'Customers' page, you can enter details about the customer such as assigning a unique ID to name, address, phone number and email. You can add  new customers to the list 
   via the 'Add customer' <br> button on the top left of the orders table, you can individual customer details via the 'view' button, you can change details about customers via the 'edit' 
   button and you can delete details about customers by <br> simply clicking on the 'delete' button<input onclick="customersPara()" type="button" value="Speak"></p></div> 

    <div id="customers_dbtable">
		<?php echo $output; ?>
    </div>


     <!-- Links To --> 
     <section class="links"> 
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="http://localhost:8080/orders/index.php">
                 <div class="apple-link">
                  <img src="../../assets/images/apple.png" alt="link-1">
                 </div>
                </a>
              </div>
              <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="details">
                  <div class="d-flex flex-row call-area"> 
                    <span><i class="fas fa-mobile fa-3x"></i></span>
                    <div class="call-now">
                      <a href="#" class="text-uppercase h4 font-Cormorant"> Call Now </a>
                      <span class="font-Cormorant py-2">(+44)07634212074</span>
                      <input onclick="phoneNumber()" type="button" value="Speak">
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </section>

    <script type="text/javascript" src="https://code.responsivevoice.org/responsivevoice.js"></script>
    <script> 
             document.getElementById('home').style.display = "none";
             document.getElementById('orders').style.display = "none";
             document.getElementById('items').style.display = "none";
             document.getElementById('customers').style.display = "none";
             document.getElementById('orderline').style.display = "none";
             document.getElementById('apple-variety').style.display = "none";
             document.getElementById('trees').style.display = "none";
             document.getElementById('orchard').style.display = "none";
             document.getElementById('trees-planted').style.display = "none";

             document.getElementById('phoneNumber').style.display = "none";

             document.getElementById('customersPara').style.display = "none";

             function home(){
              var text = document.getElementById('home').value;
              responsiveVoice.speak(text);
            }
            function orders(){
              var text = document.getElementById('orders').value;
              responsiveVoice.speak(text);
            }
            function items(){
              var text = document.getElementById('items').value;
              responsiveVoice.speak(text);
            }
            function customers(){
              var text = document.getElementById('customers').value;
              responsiveVoice.speak(text);
            }
            function orderline(){
              var text = document.getElementById('orderline').value;
              responsiveVoice.speak(text);
            }
            function treesPara(){
              var text = document.getElementById('trees-Para').value;
              responsiveVoice.speak(text);
            }
            function appleVariety(){
              var text = document.getElementById('apple-variety').value;
              responsiveVoice.speak(text);
            }
            function trees(){
              var text = document.getElementById('trees').value;
              responsiveVoice.speak(text);
            }
            function orchard(){
              var text = document.getElementById('orchard').value;
              responsiveVoice.speak(text);
            }
            function treesPlanted(){
              var text = document.getElementById('trees-planted').value;
              responsiveVoice.speak(text);
            }

            function phoneNumber(){
              var text = document.getElementById('phoneNumber').value;
              responsiveVoice.speak(text);
            }
            function customersPara(){
              var text = document.getElementById('customersPara').value;
              responsiveVoice.speak(text);
            }
    </script> 
    <script src="../../assets/grocery_crud/js/added_js/bootstrap.min.js"></script>
    <script src="../../../assets/grocery_crud/js/added_js/bootstrap.min.js"></script>
    <script src="../../../../assets/grocery_crud/js/added_js/bootstrap.min.js"></script>
    <script>
        //document.getElementsById("test")[0].click();
        window.onload = function(){
            if(window.location.href == "http://localhost:8080/orders/index.php/main/customers"){
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";

            }
            if(window.location.href == "http://localhost:8080/orders/index.php/main/customers/add"){
              document.getElementById('image-one').style.display = "none"; 
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
            if(window.location.href == "http://localhost:8080/orders/index.php/main/customers/read/2"){
              document.getElementById('image-one').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
            if(window.location.href == "http://localhost:8080/orders/index.php/main/customers/edit/2"){
              document.getElementById('image-one').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
            }
            /////////////////////////////////////////////////////////////////////////////////////////////
            if(location.href == "http://localhost:8080/orders/index.php/main/customers#"){
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
            if(window.location.href == "http://localhost:8080/orders/index.php/main/customers/add#"){
              document.getElementById('image-one').style.display = "none"; 
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
            if(window.location.href == "http://localhost:8080/orders/index.php/main/customers/read/2#"){
              document.getElementById('image-one').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
            if(window.location.href == "http://localhost:8080/orders/index.php/main/customers/edit/2#"){
              document.getElementById('image-one').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
            }

        }
    </script> 
</body>
</html>
