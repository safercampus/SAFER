    <div>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="heading">School Sexual Assault</div>
              <a href="/basics">The Basics</a><br>
              <a href="/policy">Policy</a><br>
              <a href="/activism">Activism</a>
            </div>
            <div class="col-md-2">
              <div class="heading">About Us</div>
              <a href="/about">About</a><br>
              <a href="/press">Press</a><br>
            </div>
            <div class="col-md-2">
              <div class="heading">Community</div>
              <a href="https://twitter.com/safercampus">Twitter</a><br>
              <a href="https://www.facebook.com/safercampus">Facebook</a><br>
              <a href="/contact">Contact Us</a>
            </div>
            <div class="col-md-5">
              <div class="heading">Join Our Newsletter!</div>
              <form class="form-horizontal" role="form" action="http://www.trailblz.info/SAFER/signup_post.aspx" method="get" name="newsLetterForm" onsubmit="return validateform()">
                <input type="hidden" name="rd" value="http://safercampus.org">
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="email" name="email" class="form-control" id="" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4">
                    <input name="firstname" type="text" class="form-control" id="" placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                    <input name="lastname" type="text" class="form-control" id="" placeholder="Last Name">
                  </div>
                  <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="small">&copy; 2015 SAFER Campus. All Rights Reserved.</div>
          </div>
        </footer>
      </div>
  </div>
  <? Loader::element('footer_required'); // concrete5 setup  ?>
</body>

<script type="text/javascript">
  // http://stackoverflow.com/a/2855946
  function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
  };

  function validateform() {
    var form = $("form[name='newsLetterForm']");
    var firstname = form.find("input[name='firstname']").val();
    var lastname = form.find("input[name='lastname']").val();
    var email = form.find("input[name='email']").val();
    var emailGroup = form.find(".form-group").first();
    var nameGroup = form.find(".form-group").last();

    var ret = true;
    if (firstname == "" || lastname == "") {
      nameGroup.addClass("has-error");
      ret = false;
    } else {
      nameGroup.removeClass("has-error");
    }
    if (!isValidEmailAddress(email)) {
      emailGroup.addClass("has-error");
      ret = false;
    } else {
      emailGroup.removeClass("has-error");
    }

    return ret;
  }
</script>
</html>
