<?php
$assignDays = array();
$assignShifts = array();

if (isset($_POST['mon-morning'])) {
    array_push($assignDays, "0");
    array_push($assignShifts, "morning");
}
if (isset($_POST['tue-morning'])) {
    array_push($assignDays, "1");
    array_push($assignShifts, "morning");
}
if (isset($_POST['wed-morning'])) {
    array_push($assignDays, "2");
    array_push($assignShifts, "morning");
}
if (isset($_POST['thu-morning'])) {
    array_push($assignDays, "3");
    array_push($assignShifts, "morning");
}
if (isset($_POST['fri-morning'])) {
    array_push($assignDays, "4");
    array_push($assignShifts, "morning");
}
if (isset($_POST['sat-morning'])) {
    array_push($assignDays, "5");
    array_push($assignShifts, "morning");
}
if (isset($_POST['sun-morning'])) {
    array_push($assignDays, "6");
    array_push($assignShifts, "morning");
}
if (isset($_POST['mon-afternoon'])) {
    array_push($assignDays, "0");
    array_push($assignShifts, "afternoon");
}
if (isset($_POST['tue-afternoon'])) {
    array_push($assignDays, "1");
    array_push($assignShifts, "afternoon");
}
if (isset($_POST['wed-afternoon'])) {
    array_push($assignDays, "2");
    array_push($assignShifts, "afternoon");
}
if (isset($_POST['thu-afternoon'])) {
    array_push($assignDays, "3");
    array_push($assignShifts, "afternoon");
}
if (isset($_POST['fri-afternoon'])) {
    array_push($assignDays, "4");
    array_push($assignShifts, "afternoon");
}
if (isset($_POST['sat-afternoon'])) {
    array_push($assignDays, "5");
    array_push($assignShifts, "afternoon");
}
if (isset($_POST['sun-afternoon'])) {
    array_push($assignDays, "6");
    array_push($assignShifts, "afternoon");
}
if (isset($_POST['mon-evening'])) {
    array_push($assignDays, "0");
    array_push($assignShifts, "evening");
}
if (isset($_POST['tue-evening'])) {
    array_push($assignDays, "1");
    array_push($assignShifts, "evening");
}
if (isset($_POST['wed-evening'])) {
    array_push($assignDays, "2");
    array_push($assignShifts, "evening");
}
if (isset($_POST['thu-evening'])) {
    array_push($assignDays, "3");
    array_push($assignShifts, "evening");
}
if (isset($_POST['fri-evening'])) {
    array_push($assignDays, "4");
    array_push($assignShifts, "evening");
}
if (isset($_POST['sat-evening'])) {
    array_push($assignDays, "5");
    array_push($assignShifts, "evening");
}
if (isset($_POST['sun-evening'])) {
    array_push($assignDays, "6");
    array_push($assignShifts, "evening");
}