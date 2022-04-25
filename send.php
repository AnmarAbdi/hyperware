<?php
if (isset($_POST['Address']) && isset($_POST['Card Number']) && isset($_POST['CVV']) {
    include 'dbh.inc.php';

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Address = validate($_POST['Address']);
    $cardNumber = validate($_POST['Card Number']);
    $CVV = validate($_POST['CVV']);

    if (empty($Address)) || empty($cardNumber) || (empty($CVV)) {
        header("Location: ordered.php");
    }else {

        $sql = "INSERT INTO test(Address, Card Number, CVV) VALUES('$Address', '$cardNumber', '$CVV')";
        $res = mysqli_query($conn, $sql);
    
        if ($res) {
            echo "You ordered it";
        }else {
            echo "It was not sent";
        }
    }

}else {
    header("Location: index.html");
}
?>