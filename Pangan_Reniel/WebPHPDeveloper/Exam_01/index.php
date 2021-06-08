<?php

if(isset($_POST['inputString'])){
   
    function palindrometest($string){ 
        if (strrev($string) == $string){ 
            return  1; 
        }
        else{
            return 0;
        }
    } 
     
    
    if(palindrometest($_POST['inputString'])){ 
        echo "It is a Palindrome"; 
    }
    else { 
        echo "It's not a Palindrome"; 
    }
    unset($_POST['inputString']);
}



?> 

<form action="" method="POST">
  <label for="inputString">Input String:</label><br>
  <input type="input" id="inputString" name="inputString" ><br><br>
  <button type="submit">Submit</button>
</form>