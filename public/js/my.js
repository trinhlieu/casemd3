$(document).ready(function () {
    $('.delete-product').click(function () {
        let inputCheckbox = $('.product-checked');
        let idProductDelete = [];
        for (let i = 0; i < inputCheckbox.length; i++) {
            if (inputCheckbox[i].checked) {
                idProductDelete.push(inputCheckbox[i].value)
            }
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: origin + '/product/delete',
            method: 'POST',
            data: {
                'productId': idProductDelete
            },
            success: function (res) {
                console.log(res)
                if (res.status === 'success') {
                    for (let i = 0; i < idProductDelete.length; i++) {
                        $('#product-item-' + idProductDelete[i]).remove();
                    }
                }
            },
            error: function (error) {

            }
        })
    })
})
