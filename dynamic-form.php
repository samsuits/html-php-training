<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Form</title>
</head>
<body>
    <form>
        <?php
            for($i = 0; $i<9; $i++)
            {
              echo '<input type="text" value="' . $i.  '" name="box' . $i.'">';
              echo '<br/>';
            }
        ?>
    </form>

</body>
</html>