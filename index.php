<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Home </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
    <link rel="stylesheet" href="./style.css">
    <link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">

        <form class="well form-horizontal" action="function/addObj.php" method="post" id="contact_form">
            <fieldset>

                <!-- Form Name -->
                <legend>Customer Info! 2147483647 </legend>

                <!-- Text input-->


                
                <div class="form-group">
                    <label class="col-md-4 control-label">Phone</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i> </span>
                            <input name="phone" placeholder="(977)555-1212" class="form-control" type="int" required="required">
                        </div>
                    </div>
                </div>
                  <!-- Text input-->

                  <div class="form-group">
                    <label class="col-md-4 control-label">Address</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i> </span>
                            <input name="address" placeholder="eg. Pokhara-07, Ratna-chowk" class="form-control" type="text" required="required">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Qty</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-sort-numeric-down"></i></span>
                            <input name="qty" placeholder="Enter quentity" class="form-control" type="number" required="required">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Rate</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="rate" placeholder="Rate of product" class="form-control" type="number" required="required">
                        </div>
                    </div>
                </div>

             

                <!-- Text input-->

           

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning">Add <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-warning" href="report/index.php">View report </a>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    </div>
    <!-- /.container -->
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>