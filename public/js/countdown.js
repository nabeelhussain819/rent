function fixIntegers(e) {
    return e < 0 && (e = 0), e < 10 ? "0" + e : "" + e;
}
setInterval(function () {
    var e = new Date("December 28 2020 13:30:00 GMT+0100"),
        t = new Date(),
        n = Math.floor((e.getTime() - t.getTime()) / 1e3),
        r = fixIntegers(n % 60),
        o = fixIntegers((n = Math.floor(n / 60)) % 60),
        f = fixIntegers((n = Math.floor(n / 60)) % 24),
        s = (n = Math.floor(n / 24));
    $("#seconds").html(r),
        $("#minutes").html(o),
        $("#hours").html(f),
        $("#days").html(s);
}, 1e3);
