<?php

// احصل على موصفات الجهاز
$deviceSpecs = getDeviceSpecs();

// احصل على عدد الفريمات في الألعاب القوية
$framesPerSecond = getFramesPerSecondForDemandingGames();

// احصل على اسم الجهاز
$deviceName = getDeviceName();

// احصل على تاريخ التصنيع
$manufacturingDate = getManufacturingDate();

// احصل على نسبة الشحن
$batteryLevel = getBatteryLevel();

// احصل على رقم الطرز
$modelNumber = getModelNumber();

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <title>مواصفات الجهاز وعدد الفريمات في الألعاب القوية</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title">مواصفات الجهاز وعدد الفريمات في الألعاب القوية</h1>

    <div class="container">
        <div class="device-specs">
            <h2 class="subtitle">مواصفات الجهاز</h2>
            <ul class="specs">
                <li class="spec">
                    <strong>المعالج:</strong> <?php echo $deviceSpecs['processor']; ?>
                </li>
                <li class="spec">
                    <strong>ذاكرة الوصول العشوائي:</strong> <?php echo $deviceSpecs['ram']; ?> جيجابايت
                </li>
                <li class="spec">
                    <strong>الذاكرة الداخلية:</strong> <?php echo $deviceSpecs['internalStorage']; ?> جيجابايت
                </li>
                <li class="spec">
                    <strong>الشاشة:</strong> <?php echo $deviceSpecs['screen']; ?> بوصة
                </li>
                <li class="spec">
                    <strong>الكاميرا:</strong> <?php echo $deviceSpecs['camera']; ?> ميجابكسل
                </li>
            </ul>
        </div>

        <div class="game-fps">
            <h2 class="subtitle">عدد الفريمات في الألعاب القوية</h2>
            <table class="fps-table">
                <thead>
                    <tr>
                        <th class="game-name">اللعبة</th>
                        <th class="fps">عدد الفريمات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($framesPerSecond as $game => $fps): ?>
                        <tr>
                            <td class="game-name"><?php echo $game; ?></td>
                            <td class="fps"><?php echo $fps; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="device-info">
            <h2 class="subtitle">معلومات الجهاز</h2>
            <ul class="specs">
                <li class="spec">
                    <strong>اسم الجهاز:</strong> <?php echo $deviceName; ?>
                </li>
                <li class="spec">
                    <strong>تاريخ التصنيع:</strong> <?php echo $manufacturingDate; ?>
                </li>
                <li class="spec">
                    <strong>نسبة الشحن:</strong> <?php echo $batteryLevel; ?>%
                </li>
                <li class="spec">
                    <strong>رقم الطرز:</strong> <?php echo $modelNumber; ?>
                </li>
            </ul>
        </div>

        <div class="button-container">
            <button class="save-button">حفظ</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>