<!DOCTYPE html>
<html>

<head>
    <title>PHP10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="b">


    <div class="d1">
        <div class="d2">
            <h1>Creat New Account</h1>

        </div>
        <div class="d4">
            <div class="d3">
                <p class="p1"> First Name</p>
                <input type="text" class="t1" id="f">
            </div>
            <div class="d3">
                <p class="p1"> Last Name</p>
                <input type="text" class="t1" id="l">
            </div>
        </div>

        <div class="d6">
            <div class="d5">
                <p class="p1"> Email</p>
                <input type="text" class="t1" id="e">
            </div>
            <div class="d5">
                <p class="p1">Mobile</p>
                <input type="text" class="t1" id="m">
            </div>
            <div class="d5">
                <p class="p1">Password</p>
                <input type="password" class="t1" id="p">
            </div>
        </div>

        <div class="d4">
            <div class="d3">
                <p class="p1">Gender</p>
                <input type="radio" name="gender" value="male" checked id="male" />Male
                <input type="radio" name="gender" value="female" id="female" />Female
            </div>

            <div class="d3">
                <p class="p1">City</p>
                <select class="t1" id="c">

                    <?php

                    $dbms = new mysqli("localhost", "root", "!ABandara2001", "db13", "3306");
                    $q = "SELECT * FROM city";
                    $rs = $dbms->query($q);
                    $n = $rs->num_rows;
                    for ($i = 0; $i < $n; $i++) {
                        $d = $rs->fetch_assoc();
                    ?>

                        <option value="<?php echo $d['id']; ?>"><?php echo $d['name']; ?></option>
                    <?php

                    }
                    ?>                    
                </select>
            </div>
        </div>

        <div class="d6">
            <button class="b1" onclick="m();">Create Account</button>
        </div>

        <script src="script.js"></script>
</body>

</html>