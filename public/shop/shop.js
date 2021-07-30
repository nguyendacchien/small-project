$(document).ready(function () {
    $('.addToCart').click(function () {
        if (confirm('Are you Add')) {
            let cartId = $(this).attr('cart');
            // let count = $(this).attr('count')
            let origin = window.location.origin // http://localhost:8000
            // alert(cartId)
            // goi jquery ajax
            $.ajax({
                // url request duoc gui den
                url: origin + '/addToCart/' + cartId,
                // method request
                method: 'GET',
                //kieu du lieu tra ve
                type: 'json',
                // neu co du lieu gui kem - form
                /*
                data: {
                   key: value
                }
                 */
                //xu ly ajax goi thanh cong
                success: function (res) {
                    toastr.success('Bạn đã thêm mới 1 sản phẩm vào gỏi hàng', 'CART',{timeout:1000})
                },
                //xu ly ajax that bai
                error: function (error) {
                    alert('error')
                }
            })
        }
    })
    $('.remove').click(function () {
        if (confirm('Are you sure?')) {
            let remove = $(this).attr('delete');
            let origin = window.location.origin // http://localhost:8000
            $.ajax({
                url: origin + '/delete/' + remove,
                method: 'GET',
                type: 'json',
                success: function (res) {
                    $('#destroy-'+remove).remove();
                    toastr.success('Bạn đã xóa 1 sản phẩm', 'DELETE',{timeout:1000})
                },
                //xu ly ajax that bai
                error: function (error) {
                    alert('error')
                }
            })
            // alert(remove)
        }
    })
    // $('.input-search').keydown(function (){
    //     $.ajax({
    //         url:,
    //     })
    // })

    });
