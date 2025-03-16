<?php
$contacts = [];
function addContacts(array &$contacts, string $name, string $phone, string $email)
{
 $contacts[] = ["name" => $name, "phone" => $phone, "email" => $email];
 echo "contacts are added successfully";

 return $contacts;
}
function displayContacts($contacts)
{
 if (empty($contacts)) {
  echo "No contacts found";
 } else {
  foreach ($contacts as $key => $contact) {
   echo "Contact: " .  ($key + 1) . "\n";
   echo "Name:   " . $contact['name'] . "\n";
   echo "phone:  " . $contact['phone'] . "\n";
   echo "email:  " . $contact['email'] . "\n";
  }
 }
}
while (true) {
 echo "\nEnter your choice (1. add Contact, 2. view contact, 3. exit):   ";
 $choice = readline();

 if ($choice === "1") {
  echo "Enter your name :   ";
  $name = readline();
  echo "Enter your phone :   ";
  $phone = readline();
  echo "Enter your email :   ";
  $email = readline();
  // echo "1";
  addContacts($contacts, $name,  $phone,  $email);
 } elseif ($choice === "2") {
  displayContacts($contacts);
 } elseif ($choice === "3") {
  echo "press ctrl + C from keyboard to exit the program \n";
 } else {
  echo "invalid input";
 }
}
