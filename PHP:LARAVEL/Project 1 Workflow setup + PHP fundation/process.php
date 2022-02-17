<pre>
            <?php
            function removeSpecialChar($str){

                $res = preg_replace('/[^a-zA-Z0-9_-]/s','',$str);
                return $res;
            }

            function palindromeChecker($str){
                    $str = strtolower($str);
                    $reverse = strrev($str);
                    
                    if ($str === $reverse){
                        echo '<img style="background-color:green ;border-radius: 25px;" src="./images/yes.svg">';
                    }else{
                        echo '<img style="background-color:red ;border-radius: 25px;" src="./images/no.svg">';
                    }

            }

            function vowel_count($str){
                 $count = 0 ;
                 for ($i=0 ; $i<strlen($str); $i++){
                    if($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u'){
                        $count++;
                    }
                }
                return $count;
            }
    

            function letter_shift($str){

                $result = "";
                for($i=0 ; $i<strlen($str); $i++){

                    if ( (ord($str[$i]) >= 65) && (ord($str[$i] )<= 90) ){
                        $temp = (ord($str[$i]) - 65 + 1)%26 + 65;
                        $temp = chr($temp);
                        $result .= $temp;
                    }else if (ord($str[$i]) >= 97 && ord($str[$i]) <= 122 ) {
                        $temp = (ord($str[$i]) - 97 + 1)%26 +97;
                        $temp = chr($temp);
                        $result .= $temp;
                    }else{
                        $result .= $str[$i];
                    }

                }



                return  $result;
            }


            $original_string = "";
            if(isset($_POST['Process'])) {
                $original_string = $_POST['textfield'] ;
            }
            // Function calling
            $original_string_lower = strtolower($original_string );
            $original_string_after_deletion = removeSpecialChar($original_string );

            ?>

</pre>

<div class="_result">

    <p style = "text-decoration: underline" font-weight="normal"; class="result"> RESULTS </p>
    <p class="result"> String  :  <?php echo $original_string?> </p>
    <p class="result"> Is palindrome  :   <?php  palindromeChecker($original_string_after_deletion)?><br> </p>
    <p class="result"> Vowel  count  :    <?php echo vowel_count($original_string_lower)  ?> <br> </p>
    <p class="result"> Letter shift  :    <?php echo letter_shift($original_string)?> <br></p>
    <div>
        <button style="margin-bottom: 20px;" ><a href="/index.php" style="color: black; font-size : 20px; text-decoration: none;">Click to Refresh and Process Another String</a></button>
    </div>
</div>


