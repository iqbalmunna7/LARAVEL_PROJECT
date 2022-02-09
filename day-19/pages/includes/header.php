<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Word count</a></li>
            <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Series</a></li>
        </ul>
    </div>

</nav>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card  card-body">
                    <form action="action.php" method="POST">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Input Word</label>
                            <div class="col-md-8">

                                <input type="text" name="input_value" class="form-control">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Select Type</label>
                            <div class="col-md-8">
                                <label for="" ><input type="radio" name="type" value="word">Word Count</label>
                                <label for="" ><input type="radio" name="type" value="character">Character Count</label>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Result</label>
                            <div class="col-md-8">
                                <!--                                    <input type="text" readonly class="form-control" value="--><?php //echo isset($result) ? $result: '';?><!--" >-->
                                <textarea class="form-control" readonly cols="30"  rows="10">

                                        <?php echo "$givenWord\n$wordCount\ncharacterCount"; ?>
                                    </textarea>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Get Result</label>
                            <div class="col-md-8">
                                <input type="Submit"  name="btn" class="btn btn-outline-success btn-block " value="Get result" >
                            </div>

                        </div>

                    </form>
                </div>



            </div>
        </div>
    </div>
</section>


