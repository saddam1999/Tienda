<script type="text/javascript">
    (function() {
        var options = {
            facebook: "460755991156675", // Facebook page ID
            call_to_action: "", // Call to action
            position: "left", // Position may be 'right' or 'left'
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
<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li><a href="https://www.hollyrenew.website" target="_blank">HollyDev</a></li>
                    <li><a href="https://www.hollyrenew.website" target="_blank">Blog</a></li>
                    <li><a href="https://www.hollyrenew.website" target="_blank">Licenses</a></li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    Copyrigth © <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="text-danger fa fa-heart heart"></i> by HollyDev version 1.0a
                </span>
            </div>
        </div>
    </div>
</footer>
