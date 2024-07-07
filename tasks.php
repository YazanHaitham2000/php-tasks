<?php
/*   1 : -  */
/* a. */#$uppercase="my name is yazan";
        #echo strtoupper($uppercase)."<br>";
/* b. */#$lowercase="MY NAME IS YAZAN";
       # echo strtolower($lowercase)."<br>";
/* c. */#$firstlaterupper="yazan";
       # echo ucfirst($firstlaterupper)."<br>";
/* d. */#$firstlaterupper2="my name is yazan";
        #echo ucwords($firstlaterupper2)."<br>";
        
/*   2 : -  */ /*$time="085119";
$hour=substr($time,0,2);
$min=substr($time,2,2);
$sec=substr($time,4,2);
echo $hour.":".$min.":".$sec;*/

/*   3 : -  *//*$sentence='I am a full stack developer at orange coding academy';
if(strpos($sentence,'orange')!==false){
    echo 'word found';
}else{
    echo 'word not found';
}*/
/*   4 : -  */

/*$url = 'http://www.orange.com/index.php';


$path = parse_url($url, PHP_URL_PATH);

$fileName = basename($path);


echo "$url"."<br>";
echo  "$fileName";*/

/*   5 : -  *//*$email="info@orange.com";
$username=substr($email,0,strpos($email,"@"));
echo "$username";*/
/*   6 : -  *//*$email="info@orange.com";
$last3later=substr($email,-3);
echo "$last3later";*/
/*   7 : -  *//*

// السلسلة المعطاة لإنشاء كلمات المرور العشوائية
$chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

// عدد الأحرف المراد استخدامها في كلمة المرور العشوائية
$passwordLength = 8;

// إنشاء كلمة مرور عشوائية
$password = '';
$charsLength = strlen($chars);

for ($i = 0; $i < $passwordLength; $i++) {
    // اختيار حرف عشوائي من السلسلة المعطاة
    $randomIndex = mt_rand(0, $charsLength - 1);
    $password .= $chars[$randomIndex];
}

// طباعة كلمة المرور
echo "$password";
*/
 /*   8 : -  */ /*// النص النموذجي
$sentence = 'That new trainee is so genius.';

// الكلمة المراد استبدالها
$newWord = 'Our';

// العثور على موضع الفراغ الأول
$firstSpacePos = strpos($sentence, ' ');

if ($firstSpacePos !== false) {
    // استبدال الكلمة الأولى بالكلمة المرادة
    $newSentence = $newWord . substr($sentence, $firstSpacePos);
   
    echo " $newSentence";
} else {
    // إذا لم يتم العثور على مسافة في الجملة
    echo "Invalid sentence format.";
}*/
 /*   9 : -  */ /*

// السلسلة الأولى
$string1 = 'dragonball';
// السلسلة الثانية
$string2 = 'dragonboll';

// طول السلسلتين
$length = strlen($string1);

// البحث عن الفرق
for ($i = 0; $i < $length; $i++) {
    if ($string1[$i] !== $string2[$i]) {
        echo "First difference between two strings at position :- " ." index($i ) ". " \"$string1[$i]\" vs \"$string2[$i]\"";
        break;
    }
}

// إذا كانت السلاسل متطابقة
if ($i === $length) {
    echo "Strings are identical.";
}
*/
/*   10 : -  */ /*
// النص الذي سنقوم بتحويله إلى مصفوفة
$string = "Twinkle, twinkle, little star.";

// الفصل الذي نريد استخدامه لتحويل النص إلى مصفوفة
$delimiter = ", ";

// استخدام دالة explode لتحويل النص إلى مصفوفة
$array = explode($delimiter, $string);

// استخدام var_dump لعرض المصفوفة
var_dump($array);
*/
/*   11 : -  */ /*// الحرف المدخل
$inputChar = 'a';

// الحصول على القيمة الرقمية لحرف ASCII
$asciiValue = ord($inputChar);

// التحقق من ما إذا كان الحرف 'z'
if ($inputChar === 'z') {
    // إذا كان الحرف 'z'، الحرف التالي يجب أن يكون 'a'
    $nextChar = 'a';
} else {
    // الحصول على الحرف التالي
    $nextChar = chr($asciiValue + 1);
}

// طباعة النتيجة

echo "Expected Output: '$nextChar'";*/
/*   12 : -  *//*
// النص الأصلي
$originalString = 'The brown fox';
// النص المراد إدخاله
$insertString = 'quick';
// الموضع الذي سنقوم عنده بالإدخال
$position = strpos($originalString, 'brown');

// تقسيم النص الأصلي عند الموضع المحدد
$beforeInsert = substr($originalString, 0, $position);
$afterInsert = substr($originalString, $position);

// إنشاء النص الجديد
$newString = $beforeInsert . $insertString . ' ' . $afterInsert;

// طباعة النتيجة
echo "Original String: '$originalString'<br>";
echo "Expected Output: '$newString'";*/
/*   13 : -  *//*
// النص الأصلي
$originalString = "0000657022.24";

// إزالة الأصفار
$removedZeros = str_replace("0", "", $originalString);

// طباعة النتيجة
echo "$originalString"."<br>";
echo "$removedZeros";*/
/*   14 : -  *//*
$originalString = "The quick brown fox jumps over the lazy dog";
// إزالة الجزء من النص الأصلي
$newString = str_replace("fox", '', $originalString);
echo "$newString";*/
/*   15 : -  *//*
// النص الأصلي
$originalString = 'The quick brown fox jumps over the lazy dog---';

// إزالة الشرطات الزائدة من نهاية النص
$newString = rtrim($originalString, '-');
echo "$newString";*/
/*   16 : -  *//*
// النص الأصلي
$originalString = '"\1+2/3*2:2-3/4*3';

// إزالة الأحرف الخاصة
$cleanString = preg_replace('/[^0-9]/', '', $originalString);

// طباعة النتيجة

echo " Output: '$cleanString'";*/
/*   17 : -  *//*
// النص الأصلي
$originalString = 'The quick brown fox jumps over the lazy dog';

// تقسيم النص إلى مصفوفة كلمات
$wordsArray = explode(' ', $originalString);

// اختيار أول خمس كلمات
$firstFiveWords = array_slice($wordsArray, 0, 5);

// دمج الكلمات الخمس الأولى مرة أخرى في سلسلة نصية
$resultString = implode(' ', $firstFiveWords);

// طباعة النتيجة

echo " Output: '$resultString'";*/
/*   18 : -  *//*
// النص الأصلي
$originalString = '2,543.12';

// إزالة الفواصل
$cleanString = str_replace(',', '', $originalString);

// طباعة النتيجة

echo " Output: '$cleanString'";*/
/*   19 : -  *//*
// استخدام القيم العددية لرموز ASCII لطباعة الحروف من 'a' إلى 'z'
for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i);
}*/

?>

