<nav id="nav" class="h-100">
    <div id="menu_btn" >
        <i class="bi bi-list" style="font-size: 26px;"></i>
    </div>
    <ul class="nav d-flex flex-column pt-4">
        <li id="dashboard" class="mb-2 sideli">
            <a class=" {{ isActive('redirect') }}" href="{{route('redirect')}}">
                <i id="i1" class="bi bi-house-gear-fill"></i>
                <span id="sp1">Dashboard</span>
            </a>
        </li>
        <li id="categories" class="mb-2 sideli">
            <a class=" {{ isActive('category.index') }}" href="{{route('category.index')}}">
                <i id="i2" class="bi bi-bookshelf"></i>
                <span id="sp2">categories</span>
            </a>
        </li>
        <li id="products" class="mb-2 sideli">
            <a class=" {{ isActive('product.index') }}" href="{{route('product.index')}}">
                <i id="i3" class="bi bi-cart-dash"></i>
                <span id="sp3">products</span>
            </a>
        </li>
        <li id="clients" class="mb-2 sideli">
            <a class=" {{ isActive('#') }}" href="{{route('users.index')}}">
                <i id="i4" class="bi bi-people-fill"></i>
                <span id="sp4">clients</span>
            </a>
        </li>
        <li id="orders" class="mb-2 sideli">
            <a class=" {{ isActive('show_orders') }}" href="{{route('show_orders')}}" >
                <i id="i5" class="bi bi-truck"></i>
                <span id="sp5">orders</span>
            </a>
        </li>
    </ul>
    <style>
        #blob{
            z-index: -1;
        }
    </style>
    <div id="blob" class="position-absolute bottom-0">
        <svg id="visual" viewBox="0 0 450 900" width="450" height="900" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="900" fill="#001220"></rect><path d="M0 690L18.8 700.3C37.7 710.7 75.3 731.3 112.8 743.7C150.3 756 187.7 760 225.2 749.2C262.7 738.3 300.3 712.7 337.8 707.3C375.3 702 412.7 717 431.3 724.5L450 732L450 901L431.3 901C412.7 901 375.3 901 337.8 901C300.3 901 262.7 901 225.2 901C187.7 901 150.3 901 112.8 901C75.3 901 37.7 901 18.8 901L0 901Z" fill="#c62368"></path><path d="M0 801L18.8 790.7C37.7 780.3 75.3 759.7 112.8 758.7C150.3 757.7 187.7 776.3 225.2 783.8C262.7 791.3 300.3 787.7 337.8 777C375.3 766.3 412.7 748.7 431.3 739.8L450 731L450 901L431.3 901C412.7 901 375.3 901 337.8 901C300.3 901 262.7 901 225.2 901C187.7 901 150.3 901 112.8 901C75.3 901 37.7 901 18.8 901L0 901Z" fill="#e34c67"></path><path d="M0 806L18.8 809C37.7 812 75.3 818 112.8 822.7C150.3 827.3 187.7 830.7 225.2 830.3C262.7 830 300.3 826 337.8 821.8C375.3 817.7 412.7 813.3 431.3 811.2L450 809L450 901L431.3 901C412.7 901 375.3 901 337.8 901C300.3 901 262.7 901 225.2 901C187.7 901 150.3 901 112.8 901C75.3 901 37.7 901 18.8 901L0 901Z" fill="#fa7268"></path></svg>
    </div>
</nav>
@php
        function isActive($routeName) {
        return request()->routeIs($routeName) ? 'active' : '';
    }
@endphp
