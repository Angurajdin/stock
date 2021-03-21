<div class="row">
    <div class="col-lg-2 col-md-3 col-sm-3 col-4">
    <nav>
        <div class="menu"><img src="./images/finance.svg" width="150px" alt="Read"></div>
        <ul>
            <li><a href="./?page=dashboard"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="./?page=products"><i class="fa fa-calendar"></i>Product Details</a></li>
            <li><a href="./?page=purchase"><i class="fas fa-shopping-basket"></i>Purchase</a></li>
            <li><a href="./?page=sales-bill"><i class="fas fa-calculator"></i>Sales with Billing</a></li>
            <li><a href="./?page=report"><i class="fas fa-chart-line"></i>Report</a></li>
        </ul>
        <footer>
            <p class="foo"> &copy; Rights Reserved <script>document.write(new Date().getFullYear()); </script></p>
        </footer>
    </nav>
    </div>
    <div class="col-lg-8 col-md-9 col-sm-9 col-8 m-4">
        <section>
            <?php
                include "./php/response.php";
            ?>
        </section>
    </div>
</div>