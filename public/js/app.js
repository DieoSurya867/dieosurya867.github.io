// $(document).ready(function () {
//     $.ajaxSetup({
//         headers: {
//             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//         },
//     });
    // API WILAYAH FUNCTION
    $.ajax({
        type: "get",
        url: "/wilayah",
        dataType: "json",
        success: function (response) {
            response.map((value) => {
                $('#provinces').append($('<option>', {
                    value: value.id,
                    text: value.name
                }));
            })
        }
    });
    
    // const daerah = ()=>{}
    
    function daerah(jenis, id) {
        let dr
    
        if (jenis == 'provinces') {
            dr = 'regencies'
        }else if (jenis == 'regencies') {
            dr = 'districts'
        }else if (jenis == 'districts') {
            dr = 'villages'
        }
        $.ajax({
            type: "get",
            url: `https://www.emsifa.com/api-wilayah-indonesia/api/${dr}/${id}.json`,
            dataType: "json",
            success: function (response) {
                console.log(response);
                $(`#${dr}`).children().remove()
                response.map((value) => {
                    $(`#${dr}`).append($('<option>', {
                        value: value.id,
                        text: value.name
                    }));
                })
            }
        });
    }
                 
// });

    // ADD TO CART FUNCTION
    $(".addToCart").click(function (e) {
        e.preventDefault();

        let produk_id = $(this).closest(".produk-data").find(".prod-id").val();
        let produk_qty = $(this).closest(".produk-data").find(".prod-qty").val();;


        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            type: "POST",
            url: "/keranjang",
            data: {
                'produk_id': produk_id,
                'kuantitas': produk_qty,
            },
            success: function (response) {
                alert(response.status);
            },
        });
    });


    $("#tambah").click(function (e) {
        e.preventDefault();

        let jumlah = $("#jumlah").val();
        let harga = $("#harga_produk").val();
        
        let tambah = jumlah*10
        alert(jumlah);
        alert(harga);
        alert(tambah);
        
        let subtotal = $("#subtotal").val(tambah);
        // $( "#subtotal" ).html("{{ 'Rp.' . ' ' . number_format($item->produk->hargaProduk, 2, ',', '.') }}");

    });



