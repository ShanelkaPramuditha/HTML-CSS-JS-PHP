function loadData (data) {
    if (data === 'iphoneXs') {
        document.getElementById("device-name").innerHTML = "Apple Iphone XS";
        document.getElementById("device-image").src = "images/devices/iphonexs.png";
        document.getElementById("device-details").innerHTML = "Apple iPhone XS mobile was launched in September 2018. The phone comes with a 5.80-inch touchscreen display offering a resolution of 1125x2436 pixels at a pixel density of 458 pixels per inch (ppi). The display sports Other for protection. Apple iPhone XS is powered by a hexa-core Apple A12 Bionic processor. The Apple iPhone XS supports wireless charging, as well as proprietary fast charging.";
        document.getElementById("device-image").style.display = "block";
    }
    else if (data === 'iphoneXsMax') {
        document.getElementById("device-name").innerHTML = "Apple Iphone XS Max";
        document.getElementById("device-image").src = "images/devices/iphonexsmax.png";
        document.getElementById("device-details").innerHTML = "If you watched this year's iPhone launch event, you could've been forgiven for thinking that the iPhone XS is the most underwhelming 'S' upgrade in the iPhone's history. Apple spent surprisingly little time talking about the new features of the flagship iPhone models — a lot more information has come out since, which makes them seem like bigger upgrades than one had initially thought. Not many realise that while the 'S' cycle of iPhone models represents no major changes in design language, historically, we've seen some significant features introduced. Siri, Touch ID, 3D Touch, and even the M-series of motion coprocessors all debuted in an iPhone 'S'.";
        document.getElementById("device-image").style.display = "block";
    }
    else if (data === 'iphone8s') {
        document.getElementById("device-name").innerHTML = "Apple Iphone 8S";
        document.getElementById("device-image").src = "images/devices/iphonexs.png";
        document.getElementById("device-details").innerHTML = "Apple iPhone XS mobile was launched in September 2018. The phone comes with a 5.80-inch touchscreen display offering a resolution of 1125x2436 pixels at a pixel density of 458 pixels per inch (ppi). The display sports Other for protection. Apple iPhone XS is powered by a hexa-core Apple A12 Bionic processor. The Apple iPhone XS supports wireless charging, as well as proprietary fast charging.";
        document.getElementById("device-image").style.display = "block";
    }
    else if (data === 'iphoneSe') {
        document.getElementById("device-name").innerHTML = "Apple Iphone SE";
        document.getElementById("device-image").src = "images/devices/iphonexs.png";
        document.getElementById("device-details").innerHTML = "Apple iPhone XS mobile was launched in September 2018. The phone comes with a 5.80-inch touchscreen display offering a resolution of 1125x2436 pixels at a pixel density of 458 pixels per inch (ppi). The display sports Other for protection. Apple iPhone XS is powered by a hexa-core Apple A12 Bionic processor. The Apple iPhone XS supports wireless charging, as well as proprietary fast charging.";
        document.getElementById("device-image").style.display = "block";
    }
}

function priceForLoop () {
    const prices = ["iphone XS - $1349", "iphone XS Max - $999", "iphone 8S - $1000", "iphone SE - $399"];
    let price = "";
    for (let i = 0; i < prices.length; i++) {
        price += prices[i] + "<br>" ;
    }

    document.getElementById("device-name").innerHTML = "Price List";
    document.getElementById("device-details").innerHTML = price;
    document.getElementById("device-image").style.display = "none";
}