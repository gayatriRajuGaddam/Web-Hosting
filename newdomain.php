<?php 
include('header.php');
?>
<style>
    .col1{
        border: 1px solid gray;
        border-radius: 5px;
    }
    .col2{
        border: 1px solid gray;
        border-radius: 5px;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container" style="margin-top:30px">
    <div class="row" >
        <div class="col-5 col2">
            <div class="row" >
                <div class="col-12" >
                    <label style="font-size:18px;">Search extensions by keyword</label>
                </div>
            </div>
            <div class="row" style="background:#DCDCDC; padding:25px 25px 25px 0px">
                <div class="col-12">
                    <input type=text style=" padding:15px 10px 15px 15px; width:100%; margin-left:10px">
                </div>
            </div>
            <div class="row" style="font-size:22px; color:gray;  padding:25px 25px 5px 0px">
                <div class="col-12">
                    <p>Status</p>
                </div>
            </div>
            <div class="row pt-3" style="background:#DCDCDC;">
                <div class="form-check" >
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" style="font-size:18px; margin-left:10px;  " checked>
                  <p class="form-check-label" style="font-size:15px; font-weight:unbold">Available Now (497)</p>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" style="font-size:18px; margin-left:10px; " checked>
                  <p class="form-check-label" style="font-size:15px; font-weight:unbold; margin-top:5px; margin-left:3px">Pre-Register (0)</p>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" style="font-size:18px; margin-left:10px;" checked>
                  <p class="form-check-label" style="font-size:15px; font-weight:unbold; ">Coming Soon (12)</p>
                </div>
                <div class="row" style="font-size:22px; color:gray;  padding:25px 25px 5px 0px">
                    <div class="col-12">
                        <p>Categories</p>
                    </div>
                </div>
            </div>
            <div class="row" style="background:#DCDCDC;">
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked style="font-size:18px; margin-left:10px;  ">View All (509)
                  <p class="form-check-label" for="radio1" style="font-size:20px; font-weight:unbold"></p>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" style="font-size:18px; margin-left:10px;  ">Following (0)
                  <p class="form-check-label" for="radio2" style="font-size:20px; font-weight:unbold"></p>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" disabled style="font-size:18px; margin-left:10px;  "> Featured (19)
                  <p class="form-check-label" style="font-size:20px; font-weight:unbold"></p>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" disabled style="font-size:18px; margin-left:10px;  ">Business (44)
                  <p class="form-check-label" style="font-size:20px; font-weight:unbold"></p>
                </div>
              
            </div>
        </div>
        <div class="col-7 col1" >
            <div class="row" style="margin-left:40px; margin-top:40px">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">
                            <a href="#" style="font-size:18px;">ac</a>
                        </div>
                        <div class="col-6">
                            <p style="font-size:18px;">Now available for registration</p>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary" style="width:100%"><a href="register.php" style="font-size:18px; color:white; text-decoration:none">Register Now</a></button>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row" style="margin-left:40px; margin-top:40px">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <a href="#" style="font-size:18px;">academy</a>
                                </div>
                                <div class="col-6">
                                    <p style="font-size:18px;">Now available for registration</p>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary" style="width:100%"><a href="http://localhost:8080/manu/register.php" style="font-size:18px; color:white; text-decoration:none">Register Now</a></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row" style="margin-left:40px; margin-top:40px">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <a href="#" style="font-size:18px;">accountant</a>
                                </div>
                                <div class="col-6">
                                    <p style="font-size:18px;">Now available for registration</p>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary" style="width:100%"><a href="http://localhost:8080/manu/register.php" style="font-size:18px; color:white; text-decoration:none">Register Now</a></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row" style="margin-left:40px; margin-top:40px">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <a href="#" style="font-size:18px;">accountants</a>
                                </div>
                                <div class="col-6">
                                    <p style="font-size:18px;">Now available for registration</p>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary" style="width:100%"><a href="http://localhost:8080/manu/register.php" style="font-size:18px; color:white; text-decoration:none">Register Now</a></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row" style="margin-left:40px; margin-top:40px">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <a href="#" style="font-size:18px;">actor</a>
                                </div>
                                <div class="col-6">
                                    <p style="font-size:18px;">Now available for registration</p>
                                </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary" style="width:100%"><a href="http://localhost:8080/manu/register.php" style="font-size:18px; color:white; text-decoration:none">Register Now</a></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="row" style="margin-left:40px; margin-top:40px">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <a href="#" style="font-size:18px;">adult</a>
                                </div>
                                <div class="col-6">
                                    <p style="font-size:18px;">Now available for registration</p>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary" style="width:100%; margin-left:10px" ><a href="http://localhost:8080/manu/register.php" style="font-size:18px; color:white; text-decoration:none">Register Now</a></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12"></div>
            </div>
        </div>
    </div>
