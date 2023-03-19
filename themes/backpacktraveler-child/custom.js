function clickArrow(direction) {
    var className = "arrow--" + direction;
    var arrow = document.getElementsByClassName(className);
    console.log(arrow, "arrow")

    if(direction === "left")
        document.getElementsByClassName('custom-slider-inner')[0].scrollLeft -= 50;

    if(direction === "right")
        document.getElementsByClassName('custom-slider-inner')[0].scrollLeft += 50;
}