<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$adults=$_POST['adults'];
$children=$_POST['children'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$preference=$_POST['preference'];
$comment=$_POST['comment'];

$conn = new mysqli('localhost', 'root', '', 'hotel');

$stmt = $conn->prepare("INSERT INTO book(name,email,phone,adults,children,checkin,checkout,Preference,comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssiiissss",$name,$email,$phone,$adults,$children,$checkin,$checkout,$preference,$comment );
$execval = $stmt->execute();
include "bookingconfirmed.html";
$stmt->close();
$conn->close();
?>