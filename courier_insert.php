<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: #f2f3f5;
            font-family: 'Roboto Condensed', sans-serif;
            color: #4a697c;
            text-align: center;
            height: auto !important;
            min-height: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            overflow: hidden;

        }

        .container {
            width: 100% !important;
            max-width: 600px;
            display: block;
            margin: auto;
            position: relative;
            top: 8vh;
            background-color: #bbc9c160;
            padding: 2rem;
            border-radius: 10px;


        }

        input[type=text],
        input[type=tel],
        input[type=email],
        input[type=password],
        select {
            outline: none;
            border: none;
            width: 400px;
            height: 26px;
            border-bottom: solid thin black;
            padding: .5em;
            transition: all ease-in-out 0.3s;
            position: relative;
            margin-top: 20px;

        }

        select {
            height: 40px;
            width: 415px;
        }

        input[type=submit] {
            background: #27ae60;
            color: white;
            font-size: large;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 4px;
            box-shadow: inset -1px -.5rem #9bbee4, .5rem rgba(#fff, .1) .5rem;
            height: fit-content;
            display: block;
            margin: auto;
            position: relative;
            top: 20px;
            left: calc((100% / 2)-10%);
            border: none;
            padding: 10px;
            border-radius: 2px;
        }

        label {
            width: fit-content;
            font-size: 27px;
        }

        .nav {
            width: 100% !important;
            max-width: 100%;
            display: block;
            margin: auto;
            position: relative;
            background-color: #bbc9c160;
            padding: 2rem;
            border-radius: 10px;

        }

        .list {
            width: 70%;
            margin: auto;
        }

        ul {
            list-style: none !important;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        li {
            list-style: none;
            text-align: center;
        }

        li a {
            text-decoration: none;
            color: #4a697c;
            font-weight: 900;
            font-size: 20px;

        }

        .page {
            position: relative;
            right: -30%;
            top: 210px;
            overflow: hidden;

        }

        .page img {
            width: 700px;
            height: 500px;
        }
    </style>
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set('desplay_errors', 1);

    require 'con.php';

    if (isset($_REQUEST['desription '])) {

        $description = stripslashes($_REQUEST['description']);
        $description = mysqli_real_escape_string($con, $desription);

        $weight = stripslashes($_REQUEST['weight']);
        $weight = mysqli_real_escape_string($con, $weight);

        $status = stripslashes($_REQUEST['status']);
        $status = mysqli_real_escape_string($con, $status);

        $location = stripslashes($_REQUEST['location']);
        $location = mysqli_real_escape_string($con, $location);

        $query = "INSERT into `couriers`(description, weight,dalivery_date,status,location) VALUES('$description','$weight','$delivery_date','$status','$location');";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "success";
        } else {
            die("Error: " . mysqli_error($con));
        }
    }
    ?>
    <div class="container">
        <form action="" method="post">
            <div class="form">
                <input type="hidden" name="courier_id">
                <div class="desription">
                    <input type="text" name="description" id="description" placeholder="description">

                </div>
                <div class="weight">
                    <input type="text" placeholder="Enter weight in kg">
                </div>
                <div class="select">
                    <select name="status" id="status">
                        <option value="" name="status">select</option>
                        <option value="" name="status">Pending</option>
                        <option value="" name="status">In transit</option>
                        <option value="" name="status">Deliverd</option>
                    </select>
                </div>
                <div class="location">
                    <input type="text" name="location" id="location" placeholder="Enter location">
                </div>

                <input type="submit" value="Submit">
            </div>
        </form>

    </div>
</body>


</html>