<!-- login page -->
<?php 
error_reporting(E_ALL & ~E_NOTICE); // ALL EXCEPT NOTICES
ini_set("log_errors", 1); // SAVE ERROR TO LOG FILE
ini_set("error_log", __DIR__ . DIRECTORY_SEPARATOR . "error.log"); // LOG FILE
ini_set("display_errors", 1);
// User Session
SESSION_START();

// Password verification
if(isset($_SESSION['auth']))
{
    if($_SESSION['auth']==1)
    {
        header("location:main.php");
    }
}


    if (isset($_POST['submit'])) 
    {
        $id = $_POST['id'];
        $pass = ($_POST['password']);
        
        if($id=='admin' && $pass=='admin')
        {
            $_SESSION['auth']=1;
            header("location:main.php");
        }

        else
        {
            echo "invalid";
        }

    }
// Dump the variable section
// $sample_session = ['Joy','Barua'];
// var_dump($sample_session);

// Output
// array(2) {
//   [0]=>
//   string(3) "Joy"
//   [1]=>
//   string(5) "Barua"
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comox Fashion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="username = admin" name="id">
                        
                    </div>
                    <div class="input-group form-group">
                        <input type="password" class="form-control" placeholder="password = admin" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>