<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>ARPM Take Home Assignement</title>
</head>
<body>

    <?php

        switch($route->getName())
        {
            case 'home':
    ?>
                <h1>Hi</h1><div>I'm in the homepage</div>
    <?php

                break;

            case 'folder1':
    ?>
                <h1>Hi</h1><div>I'm in folder1</div>
    <?php

                break;

            case 'folder2':
    ?>
                <h1>Hi</h1><div>I'm in folder2</div>
    <?php

                break;
        }

    ?>

</body>
</html>