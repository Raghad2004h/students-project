<?php
   // 
# echo ("Hello");
// echo "My name is Raghooda";

/* $student_name = "RAghad";

echo $student_name;
*/

// Local scope   المتغيرات المتعرفة داخل الدالة ما بنقدر نصل الها الا من داخل الدالة 

function testFun(){
    $data = "TestData";
    echo $data;
}

testFun();


// global scope  المتغيرات الي عرفناهم خارج الدالة فما بنقدر نصل الها الا من خارج الدالة

$newData = "TestData";

function testFun2(){
    global $newData;    //  global ما بنقدر نستخدم المتغير المعرف خارج الدالة الا اذا عرفناه مرة تانية داخل الدالة باستخدام g
    echo $newData;

}



# Variabels
$age = 21;
$name = "Raghad";
$salary = "350.50";
$isGraduated = true;


var_dump(&age);   /// هاي الميثود بتاخد اسم المتغير وبترجع النا نوعه

# lec2

$data = "I am from Gaza";
$len = strlen($data);  // هاي الدالة بترجع النا طول النص
echo $len;  // => 13

##################

$upper = strtoupper($data);  // هاي الدالة بتحول النص لحروف كبيرة
echo "upper";

$lower = strtolower($data);
echo $lower;


$replace = str_replace("Gaza", "London", $data);    // data هاي الميثود راح  تغير كلمة غزة الى لندن بالمتغير 
echo $replace;   // case sencetive


$arr = explode(" ", $data);   ///  array بتقسم النص حسب المسافة ويتحطه في 
var_dump($arr);  


$newData2= trim($data);    // بتحذف المسافات من جوانب النص يعني من الاول والاخر
echo $newData2;



$rev = strrev($data);  //   بتعكس الاحرق
echo $rev;


   ?>