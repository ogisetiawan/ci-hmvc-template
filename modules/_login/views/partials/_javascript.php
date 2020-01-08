<!-- Main JS  -->
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script defer src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<!-- Custom JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/spin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/ladda.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/ladda.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="<?= base_url('assets/js/notie/notie.js') ?>"></script>
<script>
  $(document).ready(function() {
    // loadProgress
    Ladda.bind('.ladda-logins', {
      callback: function(instance) {
        let progress = 0;
        let interval = setInterval(function() {
          progress = Math.min(progress + Math.random() * 0.1, 1);
          instance.setProgress(progress);
          if (progress === 1) {
            instance.stop();
            clearInterval(interval);
            clearInterval(set);
          }
        }, 300);
      }
    });

    // validationForm
    $("#form-login").validate({
      errorPlacement: function(error, element) {
        if (element.attr("name") == "mail")
          error.appendTo('#error-mail');
        else if (element.attr("name") == "pass")
          error.appendTo('#error-pass');
        else if (element.attr("name") == "lost_mail")
          error.appendTo('#error-lostmail');
        else
          error.insertAfter(element);
      },
      rules: {
        mail: {
          required: true,
          minlength: 6,
        },
        pass: {
          required: true,
          minlength: 6,
          maxlength: 25,
        },
        lost_mail: {
          required: true,
          minlength: 6,
        }
      },
      submitHandler: function(form) {
        var email = $('[name = "mail"]').val();
        var pass  = $('[name = "pass"]').val();
        let l     = Ladda.create(document.querySelector('.ladda-login'));
        l.start();
        $.ajax({
          url: '<?= base_url('')?>check_login',
          type: 'POST',
          data: 'mail='+email+'&pass='+pass,
          dataType: 'JSON',
          cache: false,
          success: function(data) {
            if (data === 1) {
              notie.alert(1, '<i class="fa fa-check"></i> Login Success..!!', 2);
              setTimeout(function(){
                window.location.href = "<?= base_url('dashboard') ?>";
              }, 2000);
            } else if (data === 2) {
              notie.alert(2, '<i class="fa fa-close"></i> Wrong Password..!!', 2);
            } else if (data === 3) {
              notie.alert(3, '<i class="fa fa-close"></i> Wrong Username..!!', 2);
            }
          }
        }).always(
          function() {
            l.stop();
          }
        );
      }
    });
    // slideContainer
    $("#forgot-pass").click(function() {
      $("#login-containter").slideToggle();
      $("#lost-containter").slideToggle();
      $(".femail").focus();
    });
    $("#back").click(function() {
      $("#login-containter").slideToggle();
      $("#lost-containter").slideToggle();
      $(".lemail").focus();
    });
  });

  function showPassword() {
    document.form_login.pass.type = (
      document.form_login.chk.value = (
        document.form_login.chk.value == 1) ? '-1' : '1') == '1' ? 'text' : 'password';
  }
  window.onload = function() {
    // documentLoad
    let loadTime = ((window.performance.timing.domComplete - window.performance.timing.navigationStart) / 500) + " sec.";
    let loadTimeAdd = window.performance.timing.domComplete - window.performance.timing.navigationStart + 500;
    setTimeout(function() {
      $('#form-login').children('.spinner').removeClass('show');
      $('#form-login').children('.spinner').addClass('hide');
      $('#form-login').children('.spinner').fadeOut("600").hide();
      $('#form-login').children('.login').removeClass('hide');
      $('#form-login').children('.login').addClass('show');
      $('#form-login').children('.login').fadeIn("600").show();
      $('#body').removeClass('overlay');
      $('#body').find('p').addClass('text-muted');
    }, loadTimeAdd);
    console.log('Page load time is ' + loadTime);
  }
</script>