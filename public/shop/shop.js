$(document).ready(function () {

    $('.addToCart').click(function () {
        // if (confirm('Are you Add')) {
        let cartId = $(this).attr('cart');
        let origin = window.location.origin // http://localhost:8000
        $.ajax({
            url: origin + '/addToCart/' + cartId,
            method: 'GET',
            type: 'json',
            //xu ly ajax goi thanh cong
            success: function (res) {
                let totalcart = res.totalcart
                let totalPrice = res.totalPrice
                $('#total-cart').html(totalcart)
                $('.total-price').html(totalPrice)
                // console.log(totalPrice)
                toastr.success('Bạn đã thêm mới 1 sản phẩm vào gỏi hàng', {timeout: 1000})
                // window.location.reload()
            },
            //xu ly ajax that bai
            error: function (error) {
                toastr.error('Thêm mới thất bại', {timeout: 1000})
            }
        })
        // }
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
                    let totalcart = res.totalcart
                    let totalPrice = res.totalPrice
                    $('#destroy-' + remove).remove();
                    toastr.success('Bạn đã xóa 1 sản phẩm', {timeout: 1000})
                    $('#total-cart').html(totalcart)
                    $('.total-price').html(totalPrice)
                },
                //xu ly ajax that bai
                error: function (error) {
                    toastr.error('Delete thất bại', {timeout: 1000})
                }
            })
        }
    });
    $('.updateqtt').on('input', function () {
        let input = $(this).attr('input')
        let value = $('#' + input).val()
        let origin = window.location.origin
        $.ajax({
            url: origin + '/totalQuantity/' + input,
            method: 'GET',
            type: 'json',
            data: {
                totalQuantity: value
            },
            success: function (res) {
                // let total = res.totalQuantity
                // console.log(res.quantity)
                $('#total-' + input).html(res.quantity*res.price);
            },
        })
    })
    // function search(){
    //     // let origin = window.location.origin
    //     let value = $('.input-search').val()
    //     let array = [];
    //     for (let i = 0; i < res.length; i++) {
    //         if (res[i].title.toLowerCase().indexOf(value.toLowerCase())>0){
    //             array.push(res[i]);
    //         }
    //     }
    //     display(array);
    //
    // };
    // $('.input-search').on('input', search);
    // $('.search').click(function () {

    //     $.ajax({
    //         url:origin + '/search/',
    //         method: 'GET',
    //         type: 'json',
    //         success:function (res){
    //
    //             let foods = res.foods
    //
    //         },
    //         error:function (res){
    //
    //         }
    //     })
    // });
    // $('.update').click(function (){
    //     let values =$('.update').val()
    //     let origin = window.location.origin // http://localhost:8000
    //     $.ajax({
    //         url:origin,
    //         method:'GET',
    //         type:'json',
    //         success:function (res){
    //
    //         },
    //     })
    // });
});
