function changeImg(num) {
    var thumb = 'images/' + num + ".jpg";
    document.getElementById("imgblock").src = thumb;
}

function prevImg() {
    var img = document.getElementById("imgblock").src;
    var num = img.lastIndexOf("/");
    num = img.substring(num + 1, img.lastIndexOf("."));
    var number = parseInt(num);
    if (num > 1) {
        number = number - 1;
    } else {
        number = 10;
    }
    var thumb = 'images/' + number + ".jpg";
    document.getElementById("imgblock").src = thumb;
}

function nextImg() {
    var img = document.getElementById("imgblock").src;
    var num = img.lastIndexOf("/");
    num = img.substring(num + 1, img.lastIndexOf("."));
    var number = parseInt(num);
    if (num < 10) {
        number = number + 1;
    } else {
        number = 1;
    }
    var thumb = 'images/' + number + ".jpg";
    document.getElementById("imgblock").src = thumb;
}