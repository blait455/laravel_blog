</section>



<footer id="footer_tag">
    <div class="row">
        <div class="small-24 medium-24 large-24 columns">

            <div class="category-links">
                <div class="row">
                    <div class="small-24 medium-8 large-8 columns foo-block">
                        <h6 class="footer-head">Find us on:</h6>
                        <div class="footer-icons">
                            <a href="https://www.facebook.com/TheFridayAd" class="facebook" target="_blank" title="Facebook">Facebook</a>
                            <a href="https://twitter.com/thefridayad" class="twitter" target="_blank" title="Twitter">Twitter</a>
                            <a href="https://www.instagram.com/thefridayad/" class="instagram" target="_blank" title="Instagram">Instagram</a>
                        </div>
                    </div>
                    <div class="small-24 medium-8 large-8 columns foo-block">
                        <h6 class="footer-head foo-other-links"><a href="#">Advertise with us</a></h6>
                        <h6 class="footer-head foo-other-links"><a href="#">About us</a></h6>
                        <h6 class="footer-head foo-other-links"><a href="#">Contact us</a></h6>
                    </div>
                    <div class="small-24 medium-8 large-8 columns foo-block">
                        <div class="fad-logo">
                            <span>F-Ad</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
</div>

<script src="http://static.friday-ad.co.uk/bundles/js/compiled/home.js"></script>
<script type="text/javascript">
    $(document).foundation({
        accordion: {
            multi_expand: true,
        }
    });
</script>
<script language="javascript" type="text/javascript">
    //<![CDATA[

    var headerParallax;
    $(document).ready(function() {


        $( window ).scroll(function() {
            if ($("#sticky_nav").hasClass('fixed')) {
                $("#sticky_nav_top").addClass('fixed');
                $("#sticky_nav_top").addClass('top-bar-shadow');
            } else {
                $("#sticky_nav_top").removeClass('fixed');
                $("#sticky_nav_top").removeClass('top-bar-shadow');
            }
        });

        $(document).foundation({
            accordion: {
                multi_expand: true,
                callback : function (accordion) {
                    accordionCallback(accordion);
                }
            }
        });
    });

    //]]>


</script>

</body>
</html>
