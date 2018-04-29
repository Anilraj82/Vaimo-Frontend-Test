<div class="navContent">
    <nav class="navbar navbar-dark flex-md-nowrap p-0">
        <a class="navbar-brand" href="#">
            <img class="logo" src="./img/logo.png">
        </a>
        <ul class="navbar-nav px-3">
            <li class="nav-item">
                <a class="btn btn-outline-secondary" href="{{ route('pages.shoppingCart') }}">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i> <span>Shopping Cart</span>
                    {{--<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>--}}
                </a>
            </li>
        </ul>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="#">WOMEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">JUNIOR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ACCESSORIES</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">COLLECTIONS</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">2014</a>
                        <a class="dropdown-item" href="#">2013</a>
                        <a class="dropdown-item" href="#">2012</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link act" href="#">SALE </a>
                </li>
            </ul>
            <ul class="navbar-nav nav justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="" role="button">MY ACCOUNT</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>