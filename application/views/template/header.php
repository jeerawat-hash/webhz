<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hazakura Server จัดการตัวละคร</title>
	<meta charset="UTF-8">
	<meta name='viewport' 
     content='width=device-width, initial-scale=1.0, maximum-scale=1.0, 
     user-scalable=0' >

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://rhz.webclient.me/assets/Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://rhz.webclient.me/assets/news/ticker.css">
<!-------- ---> 
<!--  <script src="https://rhz.webclient.me/assets/news/ticker.js"></script> -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

</head>

<script type="text/javascript">
   

    var speed = 5000;
    var canTick = true;



      $('.ticker-container ul div').each(function(i) {
        if ($(window).width() >= 500) {
          $(this).find('li').width($(window).width() - parseInt($(this).css('left')));
        }
        if (i == 0) {
          $(this).addClass('ticker-active');
        } else {
          $(this).addClass('not-active');
        }
        if ($(this).find('li').height() > 30) {
          $(this).find('li').css({
            'height': '20px',
            'width': '200%',
            'text-align': 'left',
            'padding-left': '5px'
          });
          $(this).find('li').css('width', $(this).find('li span').width());
        }
      });
      startTicker();
      animateTickerElementHorz();

 
  $(window).resize(function() {
    $('.ticker-container ul div').each(function(i) {
      if ($(this).find('li').height() > 30) {
        $(this).css({
          'height': '20px',
          'width': '200%',
          'text-align': 'left',
          'padding-left': '5px'
        });
        $(this).find('li').css('width', $(this).find('li span').width());
      }
    });
  });

  function startTicker() {
    setInterval(function() {
      if (canTick) {
        $('.ticker-container ul div.ticker-active')
          .removeClass('ticker-active')
          .addClass('remove');
        if ($('.ticker-container ul div.remove').next().length) {
          $('.ticker-container ul div.remove')
            .next()
            .addClass('next');
        } else {
          $('.ticker-container ul div')
            .first()
            .addClass('next');
        }
        $('.ticker-container ul div.next')
          .removeClass('not-active next')
          .addClass('ticker-active');
        setTimeout(function() {
          $('.ticker-container ul div.remove')
            .css('transition', '0s ease-in-out')
            .removeClass('remove')
            .addClass('not-active finished');
          if ($(window).width() < 500) {
            if ($('.ticker-container ul div.finished li').width() < $(window).width()) {
              $('.ticker-container ul div.finished').removeClass('finished');
            }
          } else {
            if ($('.ticker-container ul div.finished li').width() < ($(window).width() - (parseInt($('.ticker-container ul div.ticker-active').css('left')) + 15))) {
              $('.ticker-container ul div.finished').removeClass('finished');
            }
          }
          setTimeout(function() {
            $('.ticker-container ul div')
              .css('transition', '0.25s ease-in-out');
          }, 75);
          animateTickerElementHorz();
        }, 250);
      }
    }, speed);
  }

  function animateTickerElementHorz() {
    if ($(window).width() < 500) {
      if ($('.ticker-container ul div.ticker-active li').width() > $(window).width()) {
        setTimeout(function() {
          $('.ticker-container ul div.ticker-active li').animate({
            'margin-left': '-' + (($('.ticker-container ul div.ticker-active li').width() - $(window).width()) + 15)
          }, speed - (speed / 5), 'swing', function() {
            setTimeout(function() {
              $('.ticker-container ul div.finished').removeClass('finished').find('li').css('margin-left', 0);
            }, ((speed / 5) / 2)); 
          });
        }, ((speed / 5) / 2));
      }
    } else {
      if ($('.ticker-container ul div.ticker-active li').width() > ($(window).width() - parseInt($('.ticker-container ul div.ticker-active').css('left')))) {
        setTimeout(function() {
          $('.ticker-container ul div.ticker-active li').animate({
            'margin-left': Math.abs($('.ticker-container ul div.ticker-active li').width() - ($(window).width() - parseInt($('.ticker-container ul div.ticker-active').css('left'))) + 15) * -1
          }, speed - (speed / 5), 'swing', function() {
            setTimeout(function() {
              $('.ticker-container ul div.finished').removeClass('finished').find('li').css('margin-left', 0);
            }, ((speed / 5) / 2)); 
          });
        }, ((speed / 5) / 2));
      }
    }
  }

  $('.ticker-container').on('mouseover', function() {
    canTick = false;
  });

  $('.ticker-container').on('mouseout', function() {
    canTick = true;
  });

 
</script>
 
<body>

	<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <a class="navbar-brand" href="#">ระบบจัดการสมาชิกและแลกเปลี่ยน</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="#">ข้อมูลส่วนตัว</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">ตลาดซื้อขาย</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">เติมพ้อย</a>
      </li>
 

    </ul> 
  </div>
</nav>

<div class="ticker-container">
  <div class="ticker-caption">
    <p>Breaking News</p>
  </div>
  <ul>
    <div>
      <li><span>Breaking News 1 &ndash; <a href="#">read more</a></span></li>
    </div>
    <div>
      <li><span>Breaking News 2 &ndash; <a href="#">read more</a></span></li>
    </div>
    <div>
      <li><span>Breaking News 3 &ndash; <a href="#">read more</a></span></li>
    </div>
    <div>
      <li><span>Breaking News 4 &ndash; <a href="#">read more</a></span></li>
    </div>
    <div>
      <li><span>Breaking News 5 &ndash; <a href="#">read more</a></span></li>
    </div>
  </ul>
</div>