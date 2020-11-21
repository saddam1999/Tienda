
                <!-- GetButton.io widget -->
               <script type="text/javascript">
                   (function() {
                       var options = {
                           facebook: "1878357115573555", // Facebook page ID
                           call_to_action: "En que podemos Ayudarte", // Call to action
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
                           phone: "5491133454999", //WhatsApp Business phone number
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
               <script type="text/javascript">
                   $('#smartcart').smartCart();
               </script>
               <div style="margin-bottom:70px;" id="WAButton"></div>

               @if($Promocion->isEmpty()) @else
               <script>
                   $('.toast').toast('show');
               </script>
               @endif
               </div>
               <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

               <!-- jQuery CDN - Slim version (=without AJAX) -->
               <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
               <!-- Popper.JS -->
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                   integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
                   crossorigin="anonymous">
               </script>
               <!-- Bootstrap JS -->
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
                   integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
                   crossorigin="anonymous">
               </script>
               <!-- jQuery Custom Scroller CDN -->
               <script
                   src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
               </script>

               <!-- jQuery CDN - Slim version (=without AJAX) -->
               <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

               <!-- Popper.JS -->
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                   integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
                   crossorigin="anonymous">
               </script>
               <!-- Bootstrap JS -->
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
                   integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
                   crossorigin="anonymous">
               </script>
               <!-- jQuery Custom Scroller CDN -->
               <script
                   src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
               </script>
               <!-- Scripts -->
               <script src="assets/js/jquery.min.js"></script>
               <script src="assets/js/jquery.dropotron.min.js"></script>
               <script src="assets/js/browser.min.js"></script>
               <script src="assets/js/breakpoints.min.js"></script>
               <script src="assets/js/util.js"></script>
               <script src="assets/js/main.js"></script>
               <script>
                $(document).ready(function() {
                    $(".se-pre-con").fadeOut("slow");
                });
            </script>
@yield('scriptswelcome')
