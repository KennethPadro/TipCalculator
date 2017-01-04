<!DOCTYPE html>
<html>
<title>Tip Calculator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<div class="w3-container w3-margin-top" style="max-width:350px;">
    <div class="w3-card-4" >
        <header class="w3-container w3-deep-orange">
            <h1>Tip Calculator</h1>
        </header>
        <div class="w3-container w3-margin">
            <form action="" method="post">
                Sub Total: $<input style="max-width:150px;" type="text" name="subTotal" value="<?php echo $_POST['subTotal']; ?>"/><br/><br/>
                Select tip Percentage:<br/>

                <?php
                $values = array(10, 15, 20);
                foreach ($values as $value) {
                    ?>
                    <input type="radio" name="tip" value=<?php echo $value;if (isset($_POST['tip']) && $_POST['tip'] == $value) echo ' checked="checked"'; ?>><?php echo $value; ?>%<br>
                    <?php } ?>
                <br>
                <div class="w3-container w3-center ">
                    <input id="button" type="submit" name="submit"class="w3-btn w3-deep-orange"  value="Calculate Tip">
                </div>


        </div>

        <footer class="w3-container w3-deep-orange " style="font-size:16px">
            <?PHP
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST['subTotal']))
                {
                    echo nl2br("Please enter subtotal amount \n");
                } else
                    $subTotal = $_POST['subTotal'];

                if (empty($_POST['tip']))
                {
                    echo nl2br("Please select tip amount \n");
                } else
                    $tip = $_POST['tip'];

                if (isset($_POST['subTotal']) AND isset($_POST['tip']))
                {
                    if (is_numeric($subTotal) AND ($subTotal > 0))
                    {
                        $amount = calculateTip($tip, $subTotal);
                        $total = calculateTotal($subTotal, $amount);
                        echo nl2br("Tip: $$amount \n Total: $$total");
                    } else
                        echo nl2br("Please enter positive numbers only \n");
                }
            }

            function calculateTip($tip, $subTotal)
            {
                return number_format((($tip / 100) * $subTotal), 2);
            }

            function calculateTotal($subTotal, $amount)
            {
                return $subTotal + $amount;
            }
            ?>
        </footer>
    </div>
</div>
</body>

<script type="text/javascript">
    document.getElementById("resultBox").style.color = "w3-red";
</script>
</html>