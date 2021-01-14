
<html>
    <head>
    <title>CODING</title>
    <link rel="stylesheet" type="text/css" href="style5.css">
    <script defer src="https://fontawesome.com/icons/search-dollar?style=solid"></script>
</head>
<body>
<header>
    <div class="main">
    <div class="inner_header">
      
      <div class="logoo_container">
          <h1><span>Fire</span>fury</h1>         
   </div>
  
    <ul>
    <li>
        <a href="NEW.php">NEW</a></li>
        <li><a href="OUTLET.php">OUTLET</a></li>
        <li><a href="PRODUCTS.php">PRODUCTS</a></li>
        <li><a href="HOME.php">HOME</a></li>     
        <li><a href="CART.php">CART</a></li>
        <li><a href="SERVICE.php">SERVICES</a></li>
        <li class="active"><a href="login.php">SIGN IN</a></li>
    </div>
    

      
        
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
   
    <div class="box2">   
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
        <h2>Login here</h2>
        <form action="validation.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"/>
</svg>

                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
            
                <label>Password</label>
                <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <rect width="11" height="9" x="2.5" y="7" rx="2"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd"/>
</svg>
                <input type="password" name="password" class="form-control" required>
            
            </div>

            <button type="submit" class="btn btn-primary"> Login </button>
</form>
</div>
            <div class="col-md-6 login-right">
            <h2>Register here</h2>
        <form action="Registration.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Register </button>
        </form>    
        </div>
        

    </div>
     
    </body>
</html>