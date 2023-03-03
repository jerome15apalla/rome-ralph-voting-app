@extends('layout.homeLayout')

@section('content')
<div class="container">
        <p class='display-5 mb-0 mt-3 text-light'>Voter's Profile</p>
        <p></p>

        <br>
        <div class="row">
            <div class="col">
            <div class="card">
                <div class="card-header h4 mt-1">
                    Ralph Jay Jamison Rivera
                </div>
                <div class="card-body">
                    <div class="container">
                    <div class="row pt-3 pb-3">
                    <div class="col-12 col-md-6">
                    <table class="table">
                        <tbody>
                             <tr>
                             <td>Email: </td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>First Name: </td>
                                <td>{{$user->fName}}</td>
                            </tr>
                            <tr>
                                <td>Middle Name: </td>
                                <td>{{$user->mName}}</td>
                            </tr>
                            <tr>
                                <td>Last Name: </td>
                                <td>{{$user->lName}}</td>
                            </tr>
                            <tr>
                                <td>Gender: </td>
                                <td>{{$user->gender}}</td>
                            </tr>
                            <tr>
                                <td>Height: </td>
                                <td>{{$user->height}}</td>
                            </tr>
                            <tr>
                                <td>Weight: </td>
                                <td>{{$user->weight}}</td>
                            </tr>
                            <tr>
                                <td>Birth Date: </td>
                                <td>{{$user->birthMonth}}</td>
                            </tr>
                            <tr>
                                <td>Birth City: </td>
                                <td>{{$user->birthCity}}</td>
                            </tr>
                            <tr>
                                <td>Birth Province: </td>
                                <td>{{$user->birthProvince}}</td>
                            </tr>
                            <tr>
                                <td>Address: </td>
                                <td>{{$user->province}}</td>
                            </tr>
                            <tr>
                                <td>  </td>
                                <td><{{$user->city}}</td>
                            </tr>
                            <tr>
                                <td>  </td>
                                <td>{{$user->barangay}}</td>
                            </tr>
                            <tr>
                                <td>  </td>
                                <td>{{$user->houseNo}}</td>
                            </tr>
                            <tr>
                                <td>Citizenship: </td>
                                <td>{{$user->citizenship}}</td>
                            </tr>
                            <tr>
                                <td>Type of Citizenship: </td>
                                <td>{{$user->typeOfCitizenship}}</td>
                            </tr>
                            <tr>
                                <td>Civil Status: </td>
                                <td>{{$user->civilStatus}}</td>
                            </tr>
                            <tr>
                                <td>Occupation: </td>
                                <td>{{$user->job}}</td>
                            </tr>
                            <tr>
                                <td>Father's Name: </td>
                                <td>{{$user->fatherName}}</td>
                            </tr>
                            <tr>
                                <td>Mother's Name: </td>
                                <td>{{$user->motherName}}</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="col-12 col-md-6">
                        <center>
                            <img src="../../images/icon.jpeg"/>
                        </center>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <br>
        
    </div>
@endsection

