<!-- Footer -->
   <!-- GetButton.io widget -->
   <script type="text/javascript">
    (function() {
        var options = {
            facebook: "460755991156675", // Facebook page ID
            call_to_action: "Contactanos por Messenger!", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<script type="text/javascript">
    $(function() {
        $('#WAButton').floatingWhatsApp({
            phone: "524445705494", //WhatsApp Business phone number
            headerTitle: 'Contactanos por Whatsapp!', //Popup Title
            popupMessage: 'Hola como podemos ayudarte?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="https://i.pinimg.com/originals/57/93/fa/5793fa77a347969c747ecf703c2aee90.png" />', //Button Image
            headerColor: 'black', //Custom header color
            backgroundColor: 'white', //Custom background button color
            position: "right" //Position: left | right
        });
    });
</script>
<!--
    <div class="overlay"></div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });
            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
        // $('#smartcart').smartCart();
    </script>
quitado temporalmente-->
    <script type="text/javascript">
        $('#smartcart').smartCart();
    </script>
<footer class="page-footer font-small bg-dark text-white rounded"
    style="background-image: url('../img/backgrounds.jpeg');">
    <!-- Footer Elements -->
    <div class="container">
        <!-- Grid row-->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-12 py-2">
                <div class="flex-center">
                    <!-- Facebook -->
                    <a class="fb-ic text-white">
                        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic text-white" href="https://twitter.com/hollydev3">
                        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic text-white" href="https://www.youtube.com/channel/UCX1rcl5HxAb94teb1l_Tu-A">
                        <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Youtube +-->
                    <a class="you-ic text-white" href="https://www.youtube.com/channel/UCX1rcl5HxAb94teb1l_Tu-A">
                        <i class="fab fa-youtube fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Telegram-->
                    <a class="tele-ic text-white" href="https://t.me/hollydev2">
                        <i class="fab fa-telegram fa-lg mr-md-5 mr-3  white-text fa-2x"> </i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-1 text-white" style="border-radius: 20px;">©Holly Store Pro Copyright 2020 :
        <a class="text-white"href="https://hollyrenew.website/"> Desarrollado por HollyDev</a>
    </div>
    <!-- Copyright -->
    <div class="toast fixed-bottom " role="alert" data-delay="16000" aria-live="assertive"
    aria-atomic="true">
    <div class="toast-header">
        <img width="40px;" src="https://iunlock.store/unlock-2.png" class="rounded mr-2"
            alt="...">
        <strong class="mr-auto">Pre Orden</strong>
        <small class="text-muted">hace 11 minutos</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body text-dark">
        Gracias por tu interes en Holly Store Pro esta es una version Demo y no esta completa
        pero
        trabajamos arduamente por tenerlo finalizado proximamente en caso de estar interesado
        dejamos
        abierta la posibilidad de pre ordenar este sistema y obtener grandes ventajas en cuando
        a precios y
        funciones extras para quien ordene previamente contactame en caso de estar interesado.
    </div>
</div>
</footer>

@section('footer')
