<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <?php
        if (isset($_POST['submit']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $operation = $_POST['operation'];
            echo '<b>';

            switch ($operation)
            {
                case 'add' :
                    echo $num1 + $num2;
                    break;

                case 'sub' :
                    echo $num1 - $num2;
                    break;

                case 'mul' :
                    echo $num1 * $num2;
                    break;

                case 'div' :
                    echo $num1 / $num2;
                    break;

                default:
                    echo 'Error';
            }

            echo '</b>';

            echo '<br/>';
            echo '<br/>';
        }
    ?>
    <form action="" method="post">
        <input type="text" name="num1" placeholder="Enter first number">
        <br/>
        <br/>
        <input type="text" name="num2" placeholder="Enter second number">
        <br/>
        <br/>
        Operation: <select name="operation">
            <option value="add">Add</option>
            <option value="sub">Sub</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
<br/>
<br/>
        <input type="submit" name="submit">
    </form>
</body>
</html>