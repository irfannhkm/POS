<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="/POS/public">POS - Point of Sale</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item"><a class="nav-link" href="/POS/public">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/POS/public/penjualan">Penjualan</a></li>
                <li class="nav-item"><a class="nav-link" href="/POS/public/user/{$id}/name/{$name}">User</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <li><a class="dropdown-item" href="/POS/public/category/food-beverage">Food Beverage</a></li>
                        <li><a class="dropdown-item" href="/POS/public/category/beauty-health">Beauty Health</a></li>
                        <li><a class="dropdown-item" href="/POS/public/category/home-care">Home Care</a></li>
                        <li><a class="dropdown-item" href="/POS/public/category/baby-kid">Baby Kid</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>