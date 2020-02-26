<style>
        .poli{
            background-image: url("images/trans.png");
            background-repeat: no-repeat;
           
            padding-top: 1%;
            padding-bottom: 1%;
        }

        .nave{
            background-color:#11114E; 
            margin-top:5%; 
            height:50px; 
            padding-top: 10px;
            padding-bottom: 10px;
            width: 10%; 
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 
            font-weight: bold;
            
        }

        .bggx{
            background-image: url("images/imggg.png");
            background-repeat: no-repeat;  
            background-size: cover;
            margin-top: 2%;
            padding-top: 10%;
            padding-bottom: 10%;
      
            padding-right: 10%;
            height: 350px;
            
        }

        .foot{
            background-image: url("images/cros.jpg");
            
            height:100px;
        }

        a{
            color: white;
        }

        a:link {
            color: white;
        }

        a:hover {
            color: rgb(220, 235, 19);
        }

        a:active {
            color: yellow;
        }

        .wordings{
            background: rgba(54, 54, 47, 0.144); 
            left: -20px;
            border-radius: 0;
            padding: 2%;
            word-spacing: 20%;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        @media (max-width: 1000px) {
            .nave {
            display: none;
            }

            .fa-bars{
                display: block;
            }
            
        }
        @media (min-width: 1001px) {
            .fa-bars {
            display: none;
            }

            .navbar-nav{
                display: none;
            }
            
        }

        /* .navbar-nav > li > a {padding-top:5px !important; padding-bottom:5px !important; width: 500px;} */
        
    </style>

<div class="container-fluid poli">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3">             
                    <img src="images/logo.png" alt="binginsurancelondon">
                </div>
               
                <div class="col-md-8 nave" style="text-decoration:none;">
                        <a href="index.php" style="padding-right: 5%;">Home</a>     
                        <a href="about.php" style="padding-right: 5%">About Us</a>     
                        <a href="contact.php">Contact Us</a>     
                    
                    
                </div>
            </div>
                              <span data-toggle="collapse" data-target="#myNavbar" style="color:white;"> <span class="fa fa-3x fa-bars "></span> </span>
                              <div  class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav">

                                    <li style="font-weight:bold;"> <a href="index.php">Home</a> </li>
                                     <li style="font-weight:bold;"><a href="about.php">About Us</a> </li>
                                     <li style="font-weight:bold;"><a href="contact.php">Contact Us</a></li>
                                </ul>

                            </div>
                    
        </div>