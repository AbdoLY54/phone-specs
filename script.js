function save() {
    // احصل على محتويات الصفحة
    const content = document.querySelector(".container").innerHTML;

    // قم بإنشاء صورة جديدة
    const image = new Image();
    image.src = "data:image/png;base64," + btoa(content);

    // أضف علامة مائية إلى الصورة
    const canvas = document.createElement("canvas");
    canvas.width = image.width;
    canvas.height = image.height;
    const ctx = canvas.getContext("2d");
    ctx.drawImage(image, 0, 0);
    ctx.fillStyle = "#fff";
    ctx.font = "16px Arial";
    ctx.fillText("ABDO", 10, 10);

    // احفظ الصورة
    const fileName = new Date().toISOString() + ".png";
    canvas.toDataURL("image/png").then((dataURL) => {
        saveImage(dataURL, fileName);
    });
}

function saveImage(dataURL, fileName) {
    // أحصل على عنصر التخزين
    const storage = window.localStorage;

    // أحفظ الصورة في التخزين
    storage.setItem(fileName, dataURL);

    // أعرض رسالة نجاح
    alert("تم حفظ الصورة بنجاح!");
}

// أربط الوظيفة بحدث النقر على الزر
document.querySelector(".save-button").addEventListener("click", save);