<?php

function is_email_valid($email){
  if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", trim($email))) {
    return TRUE;
  }
  return FALSE;
}

function phone($input_phone)
{
  $cek_phone = preg_match('/^[+]62/', $input_phone);

  if($cek_phone == true) {
    echo "return true";
  }

  else {
    echo "return false";
  }
}

function cek_username($username){
  if (ctype_lower($username)) {
    echo "String berisi huruf kecil\n";
  } else {
    echo "Tidak semua string berisi huruf kecil\n";
  }
}

function password($input_password)
{
  $cek_password = preg_match('/([A-Z][a-z][0-9][!\@\$\%\^\&]#)/', $input_password);

  if($cek_password == true) {
    echo "return true";
  }

  else {
    echo "return false";
  }
}

cek_username("anjay");

val_no_telp("+6282246101501");

$email = "abc@gmail.com";
$valid = is_email_valid($email);
echo $valid ? "True" : "False";

password("asdasd#");

?>