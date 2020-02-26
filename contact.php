<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/mdb.css" rel="stylesheet" type="text/css" />
        <link href="css/mdb.min.css" rel="stylesheet" type="text/css" />
        <link href="css/mdb.lite.css" rel="stylesheet" type="text/css" />
        <link href="css/mdb.lite.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="roboto/Roboto-Medium.woff2">
        <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>

        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/mdb.js" type="text/javascript"></script>
        <script src="js/mdb.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
    
    </head>

    <body>
            <?php include("header.php"); ?>

            <div class="container" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                <div class="row" style="margin-top:5%;">
                    <div class="col-md-5">
                        <strong>Address</strong>
                        <p>
                            12 Great St Helen's <br>
                            London <br>
                            EC3A 6HX <br>
                            United Kingdom <br>
                        </p>

                        <p>
                            <strong>Fax</strong> <br>
                            +44 703-199-6337
                        </p>

                        <p>
                            <strong>Phone</strong> <br>
                            +44 703-199-6337
                        </p>

                        <p>
                            <strong>Email</strong> <br>
                            binginsurancelondon@diplomats.com <br>
                            customercare@binginsurance.com
                        </p>
                    </div>
                    
                    <div class="col-md-4">
                        <form action="" method="POST">
                            <label for="">Name</label>
                            <input type="text" class="form-inline" name="namex" required>
                            <p></p>
                            <label for="">Email</label>
                            <input type="email" class="form-inline" name="emailx" required>
                            <p></p>
                            <label for="">Message</label>
                            <textarea name="messagex" id="messagex" class="form-inline" cols="28" rows="5"> </textarea>
                            <p></p>
                            <input type="submit" class="btn btn-md btn-rounded btn-inverse float-right" required value="Submit" style="color:black; font-size: 15px; font-weight: bold;">
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
                <div style="background-image: url('images/map.png'); height: 230px; width: 100%; background-position:center; margin-top: 1%; margin-bottom: 3%;"></div>
            

             <?php include("footer.php"); ?>
    </body>
    </html>
