﻿<?php
      $servername="localhost";
$username = "ironsky";
$password = "pfVGdTzSOoLh85yp";
$dbname = "ironsky";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$classes=array();
$query = "SELECT * FROM ClassV1";
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)) {
       
        $classesTest = array(
            "className" => $row["ClassName"],
            "classIndex" => $row["ClassIndex"]
        );
       
        $classes[]=$classesTest;
        
        }     
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Latest compiled JavaScript -->
    <script>
        $(function () {
            $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/navbar.html");
        });
    </script>

    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    
</head>
<style>
    .checked {
    background-color: blue;
}
</style>
<body style="background-color:#1E4072;">

    <!-- START OF NAVIGATION BAR -->

    <div id="includedContent"></div>

    <!-- END OF NAVIGATION BAR -->
    <br>
    <div class="form-gap">
        <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
    </div>
    <br><br>
    <!-- START OF CONTAINER FOR CLASS CREATION -->
    
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-12 mx-auto">
                <!-- form card register -->
                <form data-ajax=”false”>
                    <div class="card ">
                        <div style="overflow-x:auto;">
                            <div class="card-header">
                                <h3 class="mb-0">Create New Class</h3>
                            </div>

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="input1">Class Name</label>
                                    <input type="text" class="form-control" typeof="text" required id="input1" placeholder="Class name" />
                                </div>
                                <div class="form-group">
                                    <label for="input2">Number of places:</label>

                                    <input id="input2" class="form-control" typeof="number" required input type="number">
                                </div>
                                <!-- Default panel contents -->

                                <div class="row">
                                    <div class="col-sm-12 mx-auto">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Hours</th>
                                                    <th scope="col">Monday</th>
                                                    <th scope="col">Tuesday</th>
                                                    <th scope="col">Wednesday</th>
                                                    <th scope="col">Thursday</th>
                                                    <th scope="col">Friday</th>
                                                    <th scope="col">Saturday</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- 7:30-8:15 -->
                                                <tr>
                                                    <td data-id="1">7:30-8:15</td>
                                                    <td data-id="0"  data-position="0-1"></td>
                                                    <td data-id="0"  data-position="0-2"></td>
                                                    <td data-id="0"  data-position="0-3"></td>
                                                    <td data-id="0"  data-position="0-4"></td>
                                                    <td data-id="0"  data-position="0-5"></td>
                                                    <td data-id="0"  data-position="0-6"></td>

                                                </tr>
                                                <!-- 8:15-9:00- -->
                                                <tr>
                                                    <td data-id="1">8:15-9:00</td>
                                                    <td data-id="0" data-position="1-1"></td>
                                                    <td data-id="0" data-position="1-2"></td>
                                                    <td data-id="0" data-position="1-3"></td>
                                                    <td data-id="0" data-position="1-4"></td>
                                                    <td data-id="0" data-position="1-5"></td>
                                                    <td data-id="0" data-position="1-6"></td>
                                                </tr>
                                                <!-- 9:00-12:30- -->
                                                <tr>
                                                    <td data-id="1">9:00-12:30</td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                </tr>
                                                <!-- 12:30-15:30- -->
                                                <tr>
                                                    <td data-id="1">12:30-15:30</td>
                                                    <td data-id="1"><div> CLOSED</div></td>
                                                    <td data-id="1"><div>CLOSED</div></td>
                                                    <td data-id="1"><div>CLOSED</div></td>
                                                    <td data-id="1"><div>CLOSED</div></td>
                                                    <td data-id="1"><div>CLOSED</div></td>
                                                    <td data-id="1"><div></div></td>
                                                </tr>
                                                <!-- 15:30-17:15- -->
                                                <tr>
                                                    <td data-id="1">15:30-17:15</td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div></div></td>
                                                </tr>
                                                <!-- 17:15-18:00- -->
                                                <tr>
                                                    <td data-id="1">17:15-18:00</td>
                                                    <td data-id="0" data-position="2-1"></td>
                                                    <td data-id="0" data-position="2-2"></td>
                                                    <td data-id="0" data-position="2-3"></td>
                                                    <td data-id="0" data-position="2-4"></td>
                                                    <td data-id="0" data-position="2-5"></td>
                                                    <td data-id="1" data-position="2-6"></td>
                                                </tr>
                                                <!-- 18:00-18:45- -->
                                                <tr>
                                                    <td data-id="1">18:00-18:45</td>
                                                    <td data-id="0" data-position="3-1"></td>
                                                    <td data-id="0" data-position="3-2"></td>
                                                    <td data-id="0" data-position="3-3"></td>
                                                    <td data-id="0" data-position="3-4"></td>
                                                    <td data-id="0" data-position="3-5"></td>
                                                    <td data-id="1" data-position="3-6"></td>
                                                </tr>
                                                <!-- 18:45-19:30- -->
                                                <tr>
                                                    <td data-id="1">18:45-19:30</td>
                                                    <td data-id="0" data-position="4-1"></td>
                                                    <td data-id="0" data-position="4-2"></td>
                                                    <td data-id="0" data-position="4-3"></td>
                                                    <td data-id="0" data-position="4-4"></td>
                                                    <td data-id="0" data-position="4-5"></td>
                                                    <td data-id="1" data-position="4-6"></td>
                                                </tr>
                                                <!-- 19:30-20:15- -->
                                                <tr>
                                                    <td data-id="1">19:30-20:15</td>
                                                    <td data-id="0" data-position="5-1"></td>
                                                    <td data-id="0" data-position="5-2"></td>
                                                    <td data-id="0" data-position="5-3"></td>
                                                    <td data-id="0" data-position="5-4"></td>
                                                    <td data-id="0" data-position="5-5"></td>
                                                    <td data-id="1" data-position="5-6"></td>
                                                </tr>
                                                <!-- 20:15-21:00- -->
                                                <tr>
                                                    <td data-id="1">20:15-21:00</td>
                                                    <td data-id="0" data-position="6-1"></td>
                                                    <td data-id="0" data-position="6-2"></td>
                                                    <td data-id="0" data-position="6-3"></td>
                                                    <td data-id="0" data-position="6-4"></td>
                                                    <td data-id="0" data-position="6-5"></td>
                                                    <td data-id="1" data-position="6-6"></td>
                                                </tr>
                                                <!-- 20:15-21:30- -->
                                                <tr>
                                                    <td data-id="1">20:15-21:30</td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div> OPEN GYM</div></td>
                                                    <td data-id="1"><div></div></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="input3">Brief Description</label>
                                <textarea class="form-control" typeof="text" required id="input3"></textarea>
                            </div>
                            <div class="form-group">
                                <button id="submit" class="btn btn-success btn-lg float-right">Create</button>
                            </div>

                        </div>
                    </div>
                </form>


            </div>
        </div> 

        <!-- /form card register -->
    </div>

    <script>
    $( document ).ready(function() {
    var php_var = <?php echo json_encode($classes); ?>;
    var obj=php_var;
    
        obj.forEach(function(obj) {
            $("table td").each(function () {
            if ($(this).attr("data-id") != "1"){
            console.log("opas");
             if($(this).attr("data-position") === obj.classIndex){
             console.log("kalispera");
               // $(this).InnerHTML=obj.className;
               obj["classIndex"] = $(this).attr("data-position");
               obj["className"] = obj.className;
                  $(this).toggleClass("checked");
                //console.log( $(this).attr("data-position"));
                }
                }
         }); 
         }); 

        $("table td").click(function () {
            if ($(this).attr("data-id") != "1")
                $(this).toggleClass("checked");
        });
        var positions = [];
        $("#submit").on("click", function (e) {
            var className = $("#input1").val();
            var nPlaces = $("#input2").val();
            var description = $("#input3").val();
            if (!className || !nPlaces || !description) {
                return; 
            } else {
                //console.log("hey!");
                $("table td").each(function () {
                    if ($(this).hasClass("checked")) {
                        //console.log( $(this).attr("data-position") );
                        positions.push($(this).attr("data-position"));
                      //  console.log( positions );
                    }      
                                   
                }); 
                        
                  $.ajax({
                    url:  "php/postClass.php",
                    type: "POST",
                    data: { className:className,positions: positions,nPlaces:nPlaces,description:description },
                    
                    success: function(data){ 
                      console.log(data);
                    }
                });
            }
             
        });
        });
    </script>
    <!-- END OF CONTAINER FOR CLASS CREATION -->
</body>
</html>