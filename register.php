<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

    if(isset($_POST['create']))
    {
        $company_name=$conn->real_escape_string($_POST['name']);
        $address=$conn->real_escape_string($_POST['address']);
        $postCode=$conn->real_escape_string($_POST['postCode']);
        $vat=$conn->real_escape_string($_POST['vat']);
        $fname=$conn->real_escape_string($_POST['fname']);
        $lname=$conn->real_escape_string($_POST['lname']);
        $email=$conn->real_escape_string($_POST['email']);
        $vemail=$conn->real_escape_string($_POST['vemail']);
        $password=md5($_POST['pass']);
        $vpassword=md5($_POST['Vpass']);

        $sql="insert into register(company_name,address,post_code,vat,first_name,last_name,email,verify_email,password,verify_password)
         value('$company_name','$address','$postCode','$vat','$fname','$lname','$email','$vemail','$password','$vpassword')";

         if($conn->query($sql))
         {
             $resBlog=true;   
         }
         else
         {
             echo $conn->error;
         }  
    }

?>





<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/register.css">

        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>Pg</title>
    </head>
    <body id="main_body" >
        <div class="container-fluid">
            <div class="row" id="signin_form">
                <div class="col-md-7">
                    <h2 style="margin-left: 5%;padding-top:40px;color:  rgb(81,169,115);">Register Your Company</h2>
                    <form method="post" enctype="multipart/form-data">
                        <p style="margin-left:11%;font-size: 14px;margin-top: 30px;">Company Registerd Name(If any)</p>
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4" style="margin-left:10%;width:80%;">
                            <div class="input-group">
                              <input type="search"  aria-describedby="button-addon1" class="form-control border-0 bg-light">
                              <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>

                        <div class="form-group" style="margin-left:11%;margin-top: 30px;width:80%;">
                            <label style="font-size:14px;">Company Name</label>
                            <input type="text" class="form-control" id="name" name="name" style="border-radius:25px;background-color: #e6f5eb;">    
                        </div>
                        <div class="form-group" style="margin-left: 11%;width:80%;">
                            <label style="font-size:14px;">Address</label>
                            <textarea class="form-control" name="address" id="address" rows="5" style="border-radius:25px;background-color: #e6f5eb;resize: none;"></textarea>
                        </div>
                        <div class="form-group" style="margin-left: 11%;width:80%;">
                            <label style="font-size:14px;">Post Code</label>
                            <input type="text" class="form-control" id="postCode" name="postCode" style="border-radius:25px;background-color: #e6f5eb">    
                        </div>
                        <div class="form-group" style="margin-left: 11%;width:80%;">
                            <label style="font-size:14px;">VAT</label>
                            <input type="text" class="form-control" id="vat" name="vat" style="border-radius:25px;background-color: #e6f5eb">    
                        </div>


                        <h2 style="margin-left: 5%;padding-top:60px;color:  rgb(81,169,115);">Register Your Administrator</h2>


                        <div class="form-group" style="margin-left:11%;margin-top: 30px;width:80%;">
                            <label style="font-size:14px;">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" style="border-radius:25px;background-color: #e6f5eb;">    
                        </div>

                        <div class="form-group" style="margin-left:11%;margin-top: 30px;width:80%;">
                            <label style="font-size:14px;">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" style="border-radius:25px;background-color: #e6f5eb;">    
                        </div>
                        <div class="form-group" style="margin-left:11%;margin-top: 30px;width:80%;">
                            <label style="font-size:14px;">Email Id</label>
                            <input type="email" class="form-control" id="email" name="email" style="border-radius:25px;background-color: #e6f5eb;">    
                        </div>
                        <div class="form-group" style="margin-left:11%;margin-top: 30px;width:80%;">
                            <label style="font-size:14px;">Verify Email</label>
                            <input type="email" class="form-control" id="vemail" name="vemail" style="border-radius:25px;background-color: #e6f5eb;">    
                        </div>
                        <div class="form-group" style="margin-left:11%;margin-top: 30px;width:80%;">
                            <label style="font-size:14px;">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass" style="border-radius:25px;background-color: #e6f5eb;">    
                        </div>
                        <div class="form-group" style="margin-left:11%;margin-top: 30px;width:80%;">
                            <label style="font-size:14px;">Verify Password</label>
                            <input type="password" class="form-control" id="Vpass" name="Vpass" style="border-radius:25px;background-color: #e6f5eb;">    
                        </div>
                      
                          <div style="text-align:center;margin-top: 30px;margin-bottom:20px;">
                            <button type="submit" name="create" id="create"class="btn" style="background-color: rgb(81,169,115);width:40%;border-radius: 20px;">Create</button>
                        </div>
                     </form>
                </div>
    
            </div>


        </div>
        
    </body>
    </html>
        
        