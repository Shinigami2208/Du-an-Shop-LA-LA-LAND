function edit(button) {
    let url = button.getAttribute('data-url');
    console.log(url);
    $("#loading").show();
    $.ajax({
        url : url,
        success :function (data) {
            $("#loading").hide();
            $("#modal-edit").html(data);
            $("#modal-edit").modal('show');
        },
        error : function () {
            $("#loading").hide();
        }
    });
}

function detailProduct(button) {
    let url = button.getAttribute('data-url');
    $("#loading").show();
    $.ajax({
        url : url,
        success : function (data) {
            $("#loading").hide();
            $(".detail_products").html(data);
        },
        error : function () {
            $("#loading").hide();
        }
    });

    $(document).ajaxComplete(function () {
        $('#detail .pagination li a').click(function (e) {
            e.preventDefault();
            let url = $(this).attr('href');
            $.ajax({
                url : url,
                success : function (data) {
                    $(".detail_products").html(data);
                }

            });
        });
    });
    // $(document).ajaxComplete(function() {
    //     // lang nghe khi co click vi paginate category co cung dia chi. phai them id o detail
    //     $('#detail-product .pagination li a').click(function(e) {
    //         // giu nguyen trang thai
    //         e.preventDefault();
    //         let url = $(this).attr('href');
    //         $.ajax({
    //             url: url,
    //             success: function(data) {
    //                 $("#detail").html(data);
    //             }
    //         });
    //     });
    // });

}
// function myfunction() {
//     let input = document.getElementById("search");
//     let table = document.getElementById("table");
//     let td = table.getElementsByTagName("tr");
//     console.log(input.value);
//     for(let i =0 ; i < td.length; i++ ){
//         let text = td[i].getElementsByTagName("td")[2];
//         //let text2 = text.textContent || text.innerText;
//         console.log(text);
//     }
// }
