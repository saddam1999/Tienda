<style>
    .wrapper {
    display: block;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    /* top layer */
    z-index: 9999;
}

.overlay {
    display: none;
    position: fixed;
    /* full screen */
    width: 100vw;
    height: 100vh;
    /* transparent black */
    background: rgba(0, 0, 0, 0.7);
    /* middle layer, i.e. appears below the sidebar */
    z-index: 998;
    opacity: 0;
    /* animate the transition */
    transition: all 0.5s ease-in-out;
}
/* display .overlay when it has the .active class */
.overlay.active {
    display: block;
    opacity: 1;
}

#dismiss {
    width: 35px;
    height: 35px;
    position: absolute;
    /* top right corner of the sidebar */
    top: 10px;
    right: 10px;
}
</style>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">

        <div id="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>

        <div class="sidebar-header">
            <h3>Carrito</h3>
        </div>
        <div id="dismiss" class="mt-5">
            <i class="fas fa-arrow-left"></i>
        </div>
        <form action="results.php" method="POST">
            <div class="sidebar-header text-dark"
                style="background-color:white; color:dark; border-radius:20px; "
                id="smartcart">
                <h3 class="text-dark"><br> Carrito</h3>
                <!-- SmartCart element -->
        </form>
    </nav>

    <!-- Page Content -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
        </nav>
    </div>
    <!-- Dark Overlay element -->
    <div class="overlay"></div>
</div>
@yield('header')
