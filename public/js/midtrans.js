$("#bayar").click(function (e) {
    e.preventDefault();

    $.ajax({
        type: "get",
        url: "midtrans",
        data: {
            id: "Sy010",
            harga: 100000,
            metode: "bank_transfer",
        },
        dataType: "json",
        success: function (response) {
            snap.pay(response, {
                // Optional
                onSuccess: function (result) {
                    console.log(result);
                },
                // Optional
                onPending: function (result) {},
                // Optional
                onError: function (result) {},
            });
        },
    });
});
