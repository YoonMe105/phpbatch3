<?php

interface encrypt{

    public function setpasscode($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();

    public function strongpassword();
    public function passwordrehash();

    public function getciphermethod();
    public function customencrypt();
    public function customdecrypt();
    
    public function gethashingalgorithm();
    public function customstrongencrypt();
    public function customstrongdecrypt();

}

// password_hash(string,mixed)
// keywords
// PASSWORD_DEFAULT
// PASSWORD_BCRYPT

class myencryption implements encrypt{

    private $passcode;

    public function setpasscode($plaintext){
        $this->passcode = $plaintext;
    }

    public function passworddef(){
        $newpasscode = password_hash($this->passcode,PASSWORD_DEFAULT);
        echo "This is before encrypt $this->passcode and after encrypt ${newpasscode}. <br/>";
        echo strlen($newpasscode)."<br/>";  // 60
    }
    
    public function passwordbcr(){
        $newpasscode = password_hash($this->passcode,PASSWORD_BCRYPT);
        echo "This is before encrypt $this->passcode and after encrypt ${newpasscode}. <br/>";
        echo strlen($newpasscode)."<br/>";  // 60
    }
    
    public function passwordvry(){

        // =>Decryption 
        // password_verify(string,hash);

        $plaintextone = "password123";
        $enccode = password_hash($plaintextone,PASSWORD_DEFAULT);
        echo "password hash with PASSWORD_DEFAULT = ".$enccode;
        echo "<hr/>";

        $plaintexttwo = "password12345";
        $enccodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);
        echo "password hash with PASSWORD_BCRYPT = ".$enccodetwo;
        echo "<hr/>";

        $verify = password_verify($plaintextone,$enccode);

        if($verify){
            echo "OKI";
        }else{
            echo "Failed";
        }

    }

    public function passwordrehash(){

        // password_hash(string,mixed,optional)
        // keywords
        // PASSWORD_DEFAULT
        // PASSWORD_BCRYPT

        $plaintext = 'password123';
        $enccode = password_hash($plaintext,PASSWORD_DEFAULT);
        echo "Password hash with PASSWORD_DEFAULT = ". $enccode ."<br/>";

        if(password_needs_rehash($enccode,PASSWORD_DEFAULT,['cost'=>12])){
            $rehashed = password_hash($plaintext,PASSWORD_DEFAULT,['cost'=>12]);
            echo $rehashed;
        }else{
            echo "No need to rehash";
        }

    }



    public function passwordmd5(){

        // Message-Digest
        // md5(string,raw)
        // NOTE :: Raw Optional (TRUE,true,FALSE,false)
        // TRUE/true = Raw 16 characters binary format
        // FALSE/false = DEFAULT. 32 characters hax number

        $passcode = "howareyou";
        echo "Before encrypt with md5  = ".$passcode."<br/>";
        echo "After encrypt with md5  = ".md5($passcode)."<br/>";
        echo "After encrypt with md5 by FALSE = ".md5($passcode,FALSE)."<br/>";
        echo "After encrypt with md5 by TRUE = ".md5($passcode,TRUE)."<br/>";

        $getpassword = "b47123e4109e6839adb7ae2a28300d96";

        if($getpassword === md5($passcode)){
            echo "Password Match with md5 32 chars hax number";
        }elseif($getpassword === md5($passcode,TRUE)){
            echo "Password Match with md5 16 chars binary format";  // can't match cuz it's binary code
        }else{
            echo "Password do not match";
        }
        
    }

    public function passwordsha1(){

        // Secure Hash Algorithm
        // sha1(string,raw)
        // NOTE :: Raw Optional (TRUE,true,FALSE,false)
        // TRUE/true = Raw 20 characters binary format
        // FALSE/false = DEFAULT. 40 characters hax number

        $passcode = "goodluck";
        echo "Before encrypt with sha1  = ".$passcode."<br/>";
        echo "After encrypt with sha1  = ".sha1($passcode)."<br/>";
        echo "After encrypt with sha1 by FALSE = ".sha1($passcode,FALSE)."<br/>";
        echo "After encrypt with sha1 by TRUE = ".sha1($passcode,TRUE)."<br/>";

        $getpassword = " 748ad6ccd32e4e52718445bb1cadc01eb08a0df6";

        if($getpassword === sha1($passcode)){
            echo "Password Match with sha1 40 chars hax number";
        }elseif($getpassword === sha1($passcode,TRUE)){
            echo "Password Match with sha1 20 chars binary format";  // can't match cuz it's binary code
        }else{
            echo "Password do not match";
        }
    }

    public function passwordcrypt(){

        // ->crypt(string,key)
        $passcode = "ilovemyjob";
        $cryptkey = "abcdef1234";
        echo "Before encrypt with crypt  = ".$passcode."<br/>";
        echo "After encrypt with crypt  = ".crypt($passcode,$cryptkey)."<br/>";
        echo strlen(crypt($passcode,$cryptkey)); // 13

        $getpassword = "abIfY.EpQE2mU";

        if($getpassword === crypt($passcode,$cryptkey)){
            echo "Password Match";
        }else{
            echo "Password do not match";
        }
    }

    public function strongpassword(){

        $passcode = 'ilovemyjob';

        $newpassword = md5($passcode);
        $newpassword = sha1($newpassword);
        $newpassword = crypt($newpassword,$newpassword);

        echo "Before encrypt = ".$passcode."<br/>";
        echo "After encrypt = ".$newpassword."<br/>";
        echo "After encrypt by single line = ".md5(sha1(crypt($passcode,$passcode)))."<br/>";

         $getpassword = "b87BFK8O.P4dE";

        if($getpassword === md5(sha1(crypt($passcode,$passcode)))){
            echo "Password Match";
        }else{
            echo "Password do not match";
        }
    }

    public function getciphermethod(){

        $ciphers = openssl_get_cipher_methods();
        echo "<pre>".print_r($ciphers,true)."</pre>";

    }

    public function customencrypt(){

        // openssl_encrypt(p,c,p,o,iv)
        // openssl_encrypt(plaintext,cipher,passphrase,options,initalization vector)

        $plaintext = "ilovemyfriend";

        echo "Before Encrypt = ".$plaintext."<br/>";

        // cipher method
        $cipher = 'aes-128-ctr';

        // passphrase (encryption key)
        $encryptionkey = "abcdefg12345";

        // options
        $options = 0; // OPENSSL_ZERO_PADDING is equal with 0 / or OPENSSL_RAW_DATA is equal with 1

        $iv = '12345678910';

        $finalencrypt = openssl_encrypt($plaintext,$cipher,$encryptionkey,$options,$iv);

        echo "After Encrypt = ".$finalencrypt."<br/>";
        echo strlen($finalencrypt);  // 20

    }

    public function customdecrypt(){

        // openssl_decrypt(h,c,p,o,iv)
        // openssl_decrypt(encrypt,cipher,passphrase,options,initalization vector)

        $encrypted = "p/3kpGqOTamzzTXhNw==";

        // cipher method
        $cipher = 'aes-128-ctr';

        // passphrase (encryption key)
        $encryptionkey = "abcdefg12345";

        // options
        $options = 0; // OPENSSL_ZERO_PADDING is equal with 0 / or OPENSSL_RAW_DATA is equal with 1

        $iv = '12345678910';

        $finaldecrypt = openssl_decrypt($encrypted,$cipher,$encryptionkey,$options,$iv);

        echo "After Decrypt = ".$finaldecrypt."<br/>";
    }
    

    public function gethashingalgorithm(){
        $hashalgorithms = hash_hmac_algos();  // keyed-hash message authentication code
        echo "<pre>".print_r($hashalgorithms,true)."</pre>";
    }

    public function customstrongencrypt(){
        // openssl_encrypt(p,c,p,o,iv)

        $plaintext = "ilovemyfriend";
        echo "Before Encrypt = ".$plaintext."<br/>";
        
        $cipher = "aes-128-ctr";

        $encryptionkey = "abcdefg12345";

        $options= 0;

        $ivlen = openssl_cipher_iv_length($cipher);  // we don't need to attention cuz is an arbitrary number
        echo $ivlen."<br/>";
        $iv = openssl_random_pseudo_bytes($ivlen); // changing to dynamic pseudo bytes from $ivlen length 
        echo $iv."<br/>";

        $hash = openssl_encrypt($plaintext,$cipher,$encryptionkey,$options,$iv);
        echo $hash."<br/>";

        // hash_hmac(a,h,p,b)
        // hash_hmac(algorithm,hash,passphrase,binary)

        $hmac = hash_hmac('sha256',$hash,$encryptionkey,true);  // true = raw binary data , false = lowercase hax data
        echo $hmac."<br/>";
        echo strlen($hmac)."<br/>";  // 32

        $finalencrypt = base64_encode($iv.$hmac.$hash);
        echo "After Encrypt = ".$finalencrypt."<br/>";
        echo strlen($finalencrypt)."<br/>";  // 92

    }

    public function customstrongdecrypt(){
        // openssl_decrypt(h,c,p,o,iv)
        // openssl_decrypt(encrypt,cipher,passphrase,options,initalization vector)

        $encrypted = base64_decode('G+RsR0CauJFKNmMORr1KzY3arflTTZymCOBBFSrx/5tp/BCuuX2Fl2aX6ubzQZl8SEVnNXZGeXJQOFV4MjFwdm1nPT0=');
        echo $encrypted."<br/>";

        $cipher = "aes-128-ctr";

        $encryptionkey = "abcdefg12345";

        $options= 0;

        $ivlen = openssl_cipher_iv_length($cipher);  // we don't need to attention cuz is an arbitrary number
        // echo $ivlen."<br/>";  // 16
            //  substr(e,0)
            //  substr(encrypted,start,end)
        $iv = substr($encrypted,0,$ivlen);
        echo $iv."<br/>";

        $algolen = 32;
        
                        // 16+32 = 48
        $gethash = substr($encrypted,$ivlen+$algolen);
        echo $gethash."<br/>";
        echo strlen($gethash)."<br/>";  // 20

        $finaldecrypt = openssl_decrypt($gethash,$cipher,$encryptionkey,$options,$iv);

        echo "After Decrypt = ".$finaldecrypt."<br/>";
    }
}



echo "This is Encryption. <br/>";

$obj = new myencryption();
$obj->setpasscode('password123');
$obj->passworddef();   // This is before encrypt password123 and after encrypt $2y$10$agH00pzyCJUkjphAN/cuJulz194UlvFK3pZ2QW.9uHwSqBYk1G8MS.
$obj->passwordbcr();   // This is before encrypt password123 and after encrypt $2y$10$ai0v2y8wURv2oH0iURaCPufuIgmVUibZqC1JXWHm05cpjVhL0dfNy.


echo "<hr/>";

$obj->passwordvry();

echo "<hr/>";

$obj->passwordrehash();

echo "<hr/>";

$obj->passwordmd5();

echo "<hr/>";

$obj->passwordsha1();

echo "<hr/>";

$obj->passwordcrypt();

echo "<hr/>";

$obj->strongpassword();

echo "<hr/>";

$obj->getciphermethod();

echo "<hr/>";

$obj->customencrypt();
$obj->customdecrypt();

echo "<hr/>";

$obj->gethashingalgorithm();

echo "<hr/>";

$obj->customstrongencrypt();
echo "<hr/>";

$obj->customstrongdecrypt();

echo "<hr/>";

?>