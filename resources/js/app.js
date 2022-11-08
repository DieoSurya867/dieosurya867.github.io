import "./bootstrap";

$("#bayar").click(function (e) {
    e.preventDefault();

    $.ajax({
        type: "get",
        url: "midtrans",
        data: {
            id: "Sy006",
            harga: 100000,
            metode: "shoppepay",
        },
        dataType: "json",
        success: function (response) {
            snap.pay(response),
                {
                    onSuccess: function (result) {
                        console.log(result);
                    },
                    onPending: function (result) {},
                    onError: function (result) {},
                };
        },
    });
});
