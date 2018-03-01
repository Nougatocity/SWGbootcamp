  <div class="col-md-12 text-center" id="footer">&copy; Copyright 2018-2019 4k Gaming Computers</div>

  <!-- Jquery -->
  <script>
    jquery(window).scroll(function(){
      var vscroll = jquery(this).scrollTop();
      jquery('#logotext').css({
        "transform" : "translate(0px, "+vscroll/2+"px)"
      });

      var vscroll = jquery(this).scrollTop();
      jquery('#leftsidehero').css({
        "transform" : "translate(0px, "+vscroll/2+"px)"
      });
    });
  </script>

  </body>

  </html>
