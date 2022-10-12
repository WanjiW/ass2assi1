<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login page</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>



    <link rel="stylesheet" href="style.css">


</head>

<body onload='document.formA.text1.focus()'>
    <div class="login">

        <h1 class="text-center">Welcome back!</h1>

        <form class="needs-validation" name="formA" action="loginSave.php" method="post">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email Address</Address></label>
                <input class="form-control" type="email" id="email" name="email" required>
                <!-- <div class="invalid-feedback">
                    Please enter a valid email address
                </div> -->
            </div>

            <div></div>

            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</Address></label>
                <input class="form-control" type="password" id="password" name="password" required>
                <!-- <button class="unmask" type="button" title="Mask/Unmask password to check content">Unmask</button> -->
                <!-- <div class="invalid-feedback">
                    Please enter a strong password
                </div> -->
            </div>


            <!-- <div class="form-group was-validated">
                <label for="role">Choose your role:</label>
                <select name="role" id="role">
                    <option value="student">Student</option>
                <option value="Facilitator">Facilitator</option>
                <option value="Admin">Admin</option>
                </select>
            </div> -->


            <input class="btn btn-success w-100" type="submit" value="Log In">

        </form>

    </div>

    <!-- <script src="checkpassword.js"></script> -->

</body>

</html>