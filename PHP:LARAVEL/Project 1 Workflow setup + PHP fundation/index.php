<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>String processor PHP project1</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="_container">
        <div>
            <h1>String Processor PHP Project 1</h1>
        </div>

        <div>
             <form method="post">
                    <label for="textfield">ENTER A STRING : </label>
                    <input type="text" name="textfield" id="textfield">
                    <input type="submit" name="Process" value="PROCESS">
             </form>
        </div>
    <?php
    if(isset($_POST['Process']))
        include 'process.php' ;
    ?>
    </div>
</body

</html>