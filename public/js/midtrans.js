$("#bayar").click(function () {
    $.ajax({
        type: "get",
        url: "midtrans",
        
        dataType: "json",
        success: function (response) {
            snap.pay(response, {
                // Optional
                onSuccess: function (result) {},
                // Optional
                onPending: function (result) {},
                // Optional
                onError: function (result) {},
            });
        },
    });
});
