<?php require_once('Validator.php');

if(isset($_POST['submit'])){

    //fullname Email Phone fullname
    $validator = new validator(array(
        array('fullname', 'Full Name', 'empty'),
        array('Email', 'Email Address', 'empty|validate_email'),
        array('username', 'Username', 'empty'),
        array('Phone', 'Phone Number', 'empty|validate_number'),
    ));

    if($validator->validation_result['error_code'] == 1){
        print_r($validator->validation_result['error_statement']);
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Form</title>
</head>
<body>

    <form action="" method="post">

        <input type="text" placeholder="Full Name" name="fullname">
        <br>
        <input type="text" placeholder="Email" name="Email">
        <br>
        <input type="text" placeholder="phone" name="Phone">
        <br>
        <input type="text" placeholder="Username" name="username">
        <br>
        <input type="submit" value="Submit" name="submit">



    </form>

</body>
</html>