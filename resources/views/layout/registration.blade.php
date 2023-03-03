<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div id="registration" class="col-md-4 col-md-offset-4 bg-light rounded">
                <h2>Registration</h2>
                <hr>
                <form action="{{route('register-voter')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <!-- Voter Name Credentials -->
                    <p>Already have an Account? Click <a href="login">here</a> to sign in.</p>
                    <h5>Fullname</h5>
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" name ="fname" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Middle Name</label>
                        <input type="text" class="form-control" placeholder="Enter Middle Name" name ="mname" value="" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" name ="lname" value="" required>
                    </div>
                    <hr>
                    <!-- Male or Female -->
                    <h5>Gender</h5>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="M" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="F" required>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                    </div>
                    
                    <!-- Height and Weight -->
                    <div class=container>
                        <div class="row">
                            <div class="col-sm">
                                <label for="height">Height</label>
                                <input type="text" class="form-control" placeholder="" name ="height" value="" required>
                            </div>
                            <div class="col-sm">
                                <label for="weight">Weight</label>
                                <input type="text" class="form-control" placeholder="" name ="weight" value="" required>
                            </div> 
                        </div> 
                    </div>
                    <hr>
                    <!-- Date of Birth -->
                    <h5>Date of Birth</h5>
                    <div class=container>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Day/Month/Year" name ="birthMonth" value="" required>
                            </div>
                    </div>
                    <hr>
                    <!-- Place of Birth -->
                    <h5 class = "mt-2">Place of Birth</h5>
                    <div class="form-group">
                        <label for="cityB">City/Municipality</label>
                        <input type="text" class="form-control" placeholder="Enter City of Birth" name ="birthCity" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="provinceB">Province</label>
                        <input type="text" class="form-control" placeholder="Enter Province of Birth" name ="birthProvince" value="" required>
                    </div>
                    <hr>
                    <!-- Voter Address -->
                    <h5>Residence/Address</h5>
                    <div class="form-group">
                        <label for="province">Province</label>
                        <input type="text" class="form-control" placeholder="Enter Province" name ="province" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="city">City/Municipality</label>
                        <input type="text" class="form-control" placeholder="Enter City/Municipality" name ="city" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="barangay">Barangay</label>
                        <input type="text" class="form-control" placeholder="Enter Barangay" name ="barangay" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="house">House #/Street</label>
                        <input type="text" class="form-control" placeholder="Enter House No./Street" name ="houseNo" value="" required>
                    </div>
                    <hr>
                    <!-- Citizenship -->
                    <div class="form-group">
                        <label for="citizenship">Citizenship</label>
                        <input type="text" class="form-control" placeholder="Enter Citizenship" name ="citizenship" value="" required>
                    </div>
                    <br>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="typeOfCitizenship" id="flexRadioDefault3" value="Birth" required>
                            <label class="form-check-label" for="flexRadioDefault3">
                                By birth
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="typeOfCitizenship" id="flexRadioDefault4" value="Naturalized" required>
                            <label class="form-check-label" for="flexRadioDefault4">
                                Naturalized
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="typeOfCitizenship" id="flexRadioDefault5" value="Reaquired" required>
                            <label class="form-check-label" for="flexRadioDefault5">
                                Reaquired
                            </label>
                        </div>
                    </div>
                    <hr>
                    <h5>Civil Status</h5>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="civilStatus" id="flexRadioDefault6" value="Single" required>
                            <label class="form-check-label" for="flexRadioDefault6">
                                Single
                            </label>
                            </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="civilStatus" id="flexRadioDefault7" value="Married" required>
                            <label class="form-check-label" for="flexRadioDefault7">
                                Married
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="civilStatus" id="flexRadioDefault8" value="Widow/er" required>
                            <label class="form-check-label" for="flexRadioDefault8">
                                Widow/er
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="civilStatus" id="flexRadioDefault9" value="Legally Separated" required>
                            <label class="form-check-label" for="flexRadioDefault9">
                                Legally Separated
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="job">Occupation/Profession</label>
                        <input type="text" class="form-control" placeholder="Job" name ="job" value="" required>
                    </div>
                    <hr>
                    <!-- Parents -->
                    <h5>Name of Father</h5>
                        <div class="form-group">
                            <label for="fathername">Full Name</label>
                            <input type="text" class="form-control" placeholder="Lastname, Firstname, Middlename" name ="fathername" value="" required>
                        </div>
                        <br>
                    <h5>Name of Mother</h5>
                        <div class="form-group">
                            <label for="mothername">Full Name</label>
                            <input type="text" class="form-control" placeholder="Lastname, Firstname, Middlename" name ="mothername" value="" required>
                    </div>
                    <hr>
                    <!-- Voter Email Registration -->
                    <h5>Email</h5>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name ="email" value="" required>
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name ="password" value="" required>
                    </div>
                    <hr>
                    <!-- Register Button -->
                    <div class="form-group">
                       <button class="btn btn-block btn-primary" type= "submit">Register</button>
                    </div>
                    <br>
                    <p>Already have an Account? Click <a href="login">here</a> to sign in.</p>
                </form>
            </div>  
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>