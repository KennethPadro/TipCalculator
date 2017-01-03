<!DOCTYPE html>
<html>
<title>Tip Calculator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<div class="w3-container w3-margin-top " style="max-width:500px;">
    <div class="w3-card-4 " >
        <header class="w3-container w3-teal">
            <h1>Tip Calculator</h1>
        </header>
        <div class="w3-container w3-margin">
            <form action="" method="post">
                Sub Total: $<input type="text" name="subTotal" value="<?php echo $_POST['subTotal']; ?>"/><br/><br/>
                Select tip Percentage:<br/>

                <?php
                $values = array(10, 15, 20);
                foreach ($values as $value) {
                    ?>
                    <input type="radio" name="tip" value=<?php echo '.' . $value; ?>><?php echo $value; ?>%<br>
                    <?php
                } ?>
                <br>
                <input type="submit" name="submit"class="w3-btn w3-teal"  value="Calculate Tip">
                <br>

                <footer class="w3-container w3-teal" style="font-size:17px">
                    <?PHP


                    function calculateTip($tip,$subTotal) {
                        return  number_format(($tip * $subTotal), 2);
                    }

                    function calculateTotal($subTotal, $amount){
                        return  $subTotal + $amount;
                    }
                    ?>
                </footer>
        </div>
</body>
</html>
