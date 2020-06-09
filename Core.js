function Calculate (){
        //All cells as elements
        //Calculating odds of losing an event 1-a/b run c number of times
        //Changing odds of losing d an event c times to odds of winning f
    var a = document.getElementById("1").value;
    var b = document.getElementById("2").value;
    var c = document.getElementById("3").value;
    var d = Math.pow(1-a/b,c);
    var e = 1-d;
    document.getElementById("f").innerHTML = e*100;

    return;
}