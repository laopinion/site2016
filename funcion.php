<?php
    function SignatureReference($amount){
        function GenerateRandomString($length) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $referenceCode = GenerateRandomString(8);
        $apiKey = "s7rVA73TjpE2R7p8SpJ0cFizTj";
        $currency = "COP";
        $merchantId = "561677";
        $stringToHash = "$apiKey~$merchantId~$referenceCode~$amount~$currency";
        $signature = md5($stringToHash);
        return array ($signature, $referenceCode);
    }
    if(isset($_POST['amount'])) {
      list($signature, $referenceCode) = SignatureReference($_POST['amount']);
      echo $signature," ",$referenceCode;
    } 
?>