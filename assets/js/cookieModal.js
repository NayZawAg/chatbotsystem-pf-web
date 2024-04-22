
$(function(){
  $("#set-cookie").on('click', function(){
    checks = ["google"];
    $.ajax({
        url:'./post_cookie',
        data: {
          'type': '1',
        },
        type:'POST',
    }).then(
      function (data) {
        $('.check-cookie').fadeOut('fast').queue(function() {
          $('.check-cookie').remove();
        });
        $("#header").css({"margin-top":"0"});
        $('.header-language').css({"top":"100px", "margin-top":"0"});
        $('.dropdown-menu').css("top","0");
        setGoogleTagManager(data);        
      },
      function (data) {
        alert('リクエストに失敗しました。しばらく経ってから再度送信してください。');
      }
    );
    /*
    .done((data) => {
        $('.check-cookie').fadeOut('fast').queue(function() {
          $('.check-cookie').remove();
        });
        $("#header").css({"margin-top":"0"});
        $('.header-language').css({"top":"100px", "margin-top":"0"});
        $('.dropdown-menu').css("top","0");
        setGoogleTagManager(data);
    }).fail( (data) => {
      alert('リクエストに失敗しました。しばらく経ってから再度送信してください。');
    })
    */
  });

  $("#save-cookie-list").on('click', function(){
    var checks = [];
    $("[name='allow_cookies[]']:checked").each(function(){
        checks.push(this.value);
    });

    if (checks == []) {
      alert('チェックをしてください');
      return false;
    }

    $.ajax({
        url:'./post_cookie',
        data: {
          'type': '2',
          'allow_list': checks
        },
        type:'POST',
    }).then(
      function() {
        $('#cookieModal').modal('hide');
        setGoogleTagManager(data);
      }
    );

    /*
    .done((data) => {
      $('#cookieModal').modal('hide');
      setGoogleTagManager(data);
    });
    */

    return true;
  });
});

function setGoogleTagManager(data)
{
  if (data == 0) {
    return null;
  }
  scriptTag = '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120355726-1"><\/script><script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag(\'js\', new Date()); gtag(\'config\', \'UA-120355726-1\');<\/script>';
  $('body').append(scriptTag);
}

$('.header-language').css("top","80px");
$('.dropdown-menu').css({"top":"0px", "position":"relative"});
