function numberButtonFunc(t) {
    var n,
        a = t.parent().find("input").val();
    $('input[type="text"]').each(function () {
        parseInt($(this).val());
    }),
        (n = t.hasClass("qtyInc")
            ? parseFloat(a) + 1
            : a > 0
            ? parseFloat(a) - 1
            : 0),
        t.parent().find("input").val(n).trigger("change");
}
$(document).on("click", ".qtyDec, .qtyInc", function () {
    numberButtonFunc($(this));
}),
    $(".gty-container").each(function () {
        var t = $(this);
        $('input[name="adult_number"]', t).change(function () {
            var n = parseInt($(this).val()),
                a = n;
            "number" == typeof n &&
                (a =
                    n < 2
                        ? n + " " + $(".adult", t).data("text")
                        : n + " " + $(".adult", t).data("text-multi")),
                $(".adult", t).html(a);
        }),
            $('input[name="adult_number"]', t).trigger("change"),
            $('input[name="child_number"]', t).change(function () {
                var n = parseInt($(this).val()),
                    a = n;
                "number" == typeof n &&
                    (a =
                        n < 2
                            ? n + " " + $(".children", t).data("text")
                            : n + " " + $(".children", t).data("text-multi")),
                    $(".children", t).html(a);
            }),
            $('input[name="child_number"]', t).trigger("change");
    });