<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gui mail</title>
    <link rel="stylesheet" href={{ URL::asset('clienttemplate/assets/css/style.css') }}>
</head>

<body>
    <table class="table table-cart table-mobile">
        <thead>
            <tr>
                <th>ID order</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->idBill }}</td>
                    <td class="product-col">
                        <div class="product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src={{ URL::asset('clienttemplate/assets/images/product/' . $item->img) }}
                                        alt="Product image">
                                </a>
                            </figure>
                            <h3 class="product-title">
                                <a href="#">{{ $item->name }}</a>
                            </h3><!-- End .product-title -->
                        </div><!-- End .product -->
                    </td>

                    <td class="quantity-col">
                        <div class="cart-product-quantity">
                            <p>{{ $item->soLuong }}</p>

                        </div>
                    </td>
                    <td class="price-col">{{ $item->tongtien }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>

</body>

</html>
