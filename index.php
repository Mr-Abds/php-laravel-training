
<?php
$integer = 10;
$float = 10.5;
$string = "مرحباً بالعالم!";
$booleanTrue = true;
$booleanFalse = false;
$array = array(1, 2, 3, 4, 5);
$object = (object) ['name' => 'John', 'age' => 30];
$nullValue = null;
$steps = [
    "1. تنزيل PHP:",
    "   - انتقل إلى الموقع الرسمي لـ PHP: https://www.php.net/downloads",
    "   - اختر النسخة المناسبة لنظام التشغيل الخاص بك (Windows، Linux، Mac).",
    "",
    "2. تثبيت PHP:",
    "   - اتبع التعليمات الموجودة على الصفحة الخاصة بالنسخة التي قمت بتنزيلها.",
    "   - تأكد من إضافة مسار PHP إلى متغير البيئة PATH.",
    "",
    "3. تثبيت خادم ويب:",
    "   - يمكنك استخدام خادم مثل XAMPP أو WAMP (لـ Windows) أو MAMP (لـ Mac).",
    "   - قم بتنزيل وتثبيت الخادم المناسب.",
    "",
    "4. تشغيل خادم الويب:",
    "   - افتح XAMPP/WAMP/MAMP وابدأ تشغيل Apache.",
    "",
    "5. كتابة كود PHP:",
    "   - أنشئ ملف جديد باسم 'index.php' في مجلد الخادم (مثل www أو htdocs).",
    "   - اكتب الكود التالي في الملف:",
    "     <?php echo 'مرحباً بالعالم!'; ?>",
    "",
    "6. تشغيل الكود:",
    "   - افتح متصفح الويب وانتقل إلى العنوان: http://localhost/index.php",
    "   - يجب أن ترى النص 'مرحباً بالعالم!' يعرض في المتصفح."
];


foreach ($steps as $step) {
    echo $step . "<br>";
}
echo "<h2>أنواع البيانات في PHP:</h2>";
echo "<strong>Integer:</strong> $integer<br>";
echo "<strong>Float:</strong> $float<br>";
echo "<strong>String:</strong> '$string'<br>";
echo "<strong>Boolean (True):</strong> $booleanTrue<br>";
echo "<strong>Boolean (False):</strong> $booleanFalse<br>";
echo "<strong>Array:</strong> ";
print_r($array);
echo "<br>";
echo "<strong>Object:</strong> Name: {$object->name}, Age: {$object->age}<br>";
echo "<strong>Null:</strong> " . var_export($nullValue, true) . "<br>";
?>