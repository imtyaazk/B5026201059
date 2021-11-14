<html>
    <head>
        <title>Register Form 5026201059</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
    </head>


    <body>
        <div class="container">
            <h1>Registration Form</h1><br>
            <form class="form-horizontal" id="myForm" action="/action_page.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="userid">User Id:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="userid" placeholder="Enter User Id" name="userid" maxlength="12" minlength="5" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" maxlength="12" minlength="7" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" pattern="[A-Za-z].{1,}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Address:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="country">Country:</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="country" name="country" required>
                            <option>Indonesia</option>
                            <option>Malaysia</option>
                            <option>China</option>
                            <option>Jepang</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="zipcode">Zip Code:</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="zipcode" name="zipcode" placeholder="Enter Zip Code" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="sex">Sex:</label>
                    <div class="col-sm-10">
                        <div class="form-check-inline">
                            <label class="form-check-label" for="male">
                              <input type="radio" class="form-check-input" id="male" name="male" value="male">Male
                            </label>
                          </div>
                          <div class="form-check-inline">
                            <label class="form-check-label" for="female">
                              <input type="radio" class="form-check-input" id="female" name="female" value="female">Female
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="language" class="col-sm-2 control-label">Language:</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="English" id="language">
                        <label for="English">English</label>
                        <input type="checkbox" name="Non English" id="language" >
                        <label for="Non English">Non English</label><br>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="about">About:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="about" name="about"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <script>
            function myFunction() {
              document.getElementById("myForm").submit();
            }
        </script>
    </body>
</html>
