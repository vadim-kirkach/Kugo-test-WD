<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">

  <script>
    /*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-webp-setclasses !*/
!function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?"":"no-")+l.join("-"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),"undefined"!=typeof t)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);
  </script>

  <title>Kugo</title>
</head>
<body>

  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Сервис</a>
      </li>

      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Сотрудничество</a>
      </li>

      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">заказать звонок</a>
      </li>

      <li class="mobile-menu-icons">
        <a href="./" class="header-nav-icon">
          <svg class="header-top-icon" width="20px" height="20px">
            <use href="img/sprite.svg#weight"></use>
          </svg>
        </a>
        <a href="./" class="header-nav-icon">
          <svg class="header-top-icon" width="20px" height="20px">
            <use href="img/sprite.svg#heart"></use>
          </svg>
        </a>
        <a href="./" class="header-nav-icon">
          <svg class="header-top-icon" width="20px" height="20px">
            <use href="img/sprite.svg#basket"></use>
          </svg>
        <span class="icon-text">Корзина</span> </a>
  
      </li>


      <li class="mobile-nav-icons">
        <a href="./" class="header-nav-icon">
          <svg class="header-top-icon" width="20px" height="20px">
            <use href="img/sprite.svg#viber 1"></use>
          </svg>
        </a>
        <a href="./" class="header-nav-icon">
          <svg class="header-top-icon" width="20px" height="20px">
            <use href="img/sprite.svg#003-whatsapp 1"></use>
          </svg>
        </a>
        <a href="./" class="header-nav-icon">
          <svg class="header-top-icon" width="20px" height="20px">
            <use href="img/sprite.svg#003-telegram 1"></use>
          </svg>
        </a>

      </li>

      
    </ul>
    <a href="tel:+78005055461" class="mobile-phone-link">+7 (800) 505-54-61</a>
  
    <div class="mobile-adress">
      <a class="mobile-location">
        Восточно-Кругликовская улица, 86
      </a>
      <span class="work-time">Вт - Сб 10:00 - 20:00</span>
    </div>
    </div>

  </div>




  <nav class="navbar">

    <div class="header-top">
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Сервис</a>
      </li>

      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Сотрудничество</a>
      </li>

      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Заказать звонок</a>
      </li>

      <li class="header-nav-icons">
        <a href="./" class="header-nav-icon">
          <svg class="header-top-icon" width="12px" height="12px">
            <use href="img/sprite.svg#viber 1"></use>
          </svg>
        </a>
        <a href="./" class="header-nav-icon">
          <svg class="header-top-icon" width="12px" height="12px">
            <use href="img/sprite.svg#003-whatsapp 1"></use>
          </svg>
        </a>
        <a href="./" class="header-nav-icon">
          <svg class="header-top-icon" width="12px" height="12px">
            <use href="img/sprite.svg#003-telegram 1"></use>
          </svg>
        </a>

      </li>
</ul>
    <div class="header-phone">
      <a href="tel:+78005055461" class="header-phone-link">+7 (800) 505-54-61</a>
    </div> <!-- /.header-phone -->
  </div><!-- /.header-top -->

  <div class="header-bottom">
    <a href="" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-link"><span class="header-logo">KUGOO</span></a>
      <button class="navbar-button">
        <div class="button-lines">
          <div class="button-line"></div>
          <div class="button-line"></div>
          <div class="button-line"></div>
        </div>
      <span class="button-text">Каталог</span>
     </button>

     <form class="header-search" method="get">
      <input class="search" name="s" placeholder="Искать самокат KUGO" type="search">
      <button class="search-button" type="submit">
        <svg class="search-icon" width="16px" height="16px">
          <use href="img/sprite.svg#search"></use>
        </svg>
      </button>
     </form>

     <li class="header-bottom-icons">
      <a href="./" class="header-nav-icon">
        <svg class="header-top-icon" width="20px" height="20px">
          <use href="img/sprite.svg#weight"></use>
        </svg>
      </a>
      <a href="./" class="header-nav-icon">
        <svg class="header-top-icon" width="20px" height="20px">
          <use href="img/sprite.svg#heart"></use>
        </svg>
      </a>
      <a href="./" class="header-nav-icon">
        <svg class="header-top-icon" width="20px" height="20px">
          <use href="img/sprite.svg#basket"></use>
        </svg>
      <span class="icon-text">Корзина</span> </a>

    </li>

  </div>
     
  </nav>
  <!-- /.navbar -->
  <header class="header header-image">
    
    <div class="container">
      <div class="header-content">
        <div class="header-subtitle">
          <a class="location">
            <svg class="header-icon" width="13px" height="15px">
              <use href="img/sprite.svg#location"></use>
            </svg>
            Восточно-Кругликовская улица, 86
          </a>
          <span class="work-time">Вт - Сб 10:00 - 20:00</span>
        </div>
        <h1 class="header-title">Запишитесь на бесплатный тест-драйв электросамокатов</h1>
        <div class="header-text">в Москве без ограничения по времени</div>
        <div class="header-features">

          <div class="header-features-item">
            <div class="header-features-logo">
              <svg class="header-features-icon" width="18px" height="18px">
                <use href="img/sprite.svg#scooter"></use>
              </svg>
            </div>
            <div class="header-features-text">Поймете, какая модель вам подходит</div>
          </div>

          <div class="header-features-item">
            <div class="header-features-logo">
              <svg class="header-features-icon" width="18px" height="18px">
                <use href="img/sprite.svg#flash"></use>
              </svg>
            </div>
            <div class="header-features-text">Проверите лучшие самокаты в деле</div>
          </div>

        </div>
        <button class="header-button" data-toggle="modal">Записаться</button>
      </div>
    </div>
  </header>
  <section class="section section-practice">
    <div class="section-content">
      <h2 class="section-title">Определите максимально подходящую вам модель<br>не теоретически, а на практике</h2>
      <span class="section-subtitle">Тест-драйв поможет:</span>
      <ul class="test-drive-list">
        <li class="test-drive-item">
          <svg class="li-icon" width="20px" height="20px">
            <use href="img/sprite.svg#check"></use>
          </svg>
          <span class="li-text">Понять подходит ли вам конкретная модель;</span>
        </li>

          <li class="test-drive-item">
            <svg class="li-icon" width="20px" height="20px">
              <use href="img/sprite.svg#check"></use>
            </svg>
            <span class="li-text">Испытать самокат в «реальной жизни»;</span>
          </li>

            <li class="test-drive-item">
              <svg class="li-icon" width="20px" height="20px">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <span class="li-text">Оценить удобство хранения и эксплуатации;</span>
            </li>

          <li class="test-drive-item">
            <svg class="li-icon" width="20px" height="20px">
              <use href="img/sprite.svg#check"></use>
            </svg>
            <span class="li-text">Узнать реальные характеристики и возможности модели.</span>
          </li>
      </ul>
    </div>
    <img src="./img/sec_practice.png" alt="" class="test-drive-picture">
  </section>
  
  <section class="section section-learn-driving">
    <img src="./img/learn_img.png" alt="" class="learn-drive-picture">
    <div class="section-learn-content">
      <h2 class="section-title">Научим правильной<br>и безопасной езде в городе<br>вас или вашего ребенка</h2>
      <span class="section-subtitle">На обучении специалист расскажет:</span>
      <ul class="test-drive-list">
        <li class="test-drive-item">
          <svg class="li-icon" width="20px" height="20px">
            <use href="img/sprite.svg#check"></use>
          </svg>
          <span class="li-text">Как подготовить самокат к поездке;</span>
        </li>

          <li class="test-drive-item">
            <svg class="li-icon" width="20px" height="20px">
              <use href="img/sprite.svg#check"></use>
            </svg>
            <span class="li-text">Как «завести» самокат;</span>
          </li>

            <li class="test-drive-item">
              <svg class="li-icon" width="20px" height="20px">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <span class="li-text">Как вести себя во время поездки и обезопасить себя и окружающих;</span>
            </li>

          <li class="test-drive-item">
            <svg class="li-icon" width="20px" height="20px">
              <use href="img/sprite.svg#check"></use>
            </svg>
            <span class="li-text">Как складывать и раскладывать электросамокат;</span>
          </li>

          <li class="test-drive-item">
            <svg class="li-icon" width="20px" height="20px">
              <use href="img/sprite.svg#check"></use>
            </svg>
            <span class="li-text">Как ухаживать за своим девайсом.</span>
          </li>

      </ul>
    </div>
  </section>

  <section class="section section-catalog">
    <h2 class="section-title section-title-catalog">Сейчас для тест-драйва и обучения<br>доступны следующие модели</h2>
    <div class="catalog-wrapper">
      <div class="card">
        <div class="card-picture">
          <div class="card-features">
            <div class="sale">
              <span class="sale-text">Хит</span>
            </div>
            <svg class="sale-icon" width="20px" height="12px">
              <use href="img/sprite.svg#weight"></use>
            </svg>
          </div>
          <img src="./img/Scooter.png" alt="" class="card-image">
        </div>
        <div class="card-content">
          <div class="card-title">Kugoo Kirin M4</div>
          <div class="card-content-features">

           <div class="features-items-wrapper">
            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="20px">
                <use href="img/sprite.svg#butery"></use>
              </svg>
              <div class="content-text">2000 mAh</div>
            </div>

            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="20px">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <div class="content-text">60 км/ч</div>
            </div> 
          </div>

          <div class="features-items-wrapper">
           
            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="18px">
                <use href="img/sprite.svg#flashG"></use>
              </svg>
              <div class="content-text">1,2 л.с.</div>
            </div>

            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="18px">
                <use href="img/sprite.svg#Timer"></use>
              </svg>
              <div class="content-text">5 часов</div>
            </div>
          </div>

          </div>

          <div class="price-area">
            <div class="price-wrapper">
              <span class="old-price">39 900 ₽</span>
              <span class="price">29 900 ₽</span>
            </div>
            <div class="price-icons">
              <div class="price-icon-frame">
                <svg class="price-icon" width="20px" height="19px">
                  <use href="img/sprite.svg#shopcart"></use>
                </svg>
              </div>

              <div class="price-icon-frame">
                <svg class="price-icon" width="16px" height="16px">
                  <use href="img/sprite.svg#heartblue"></use>
                </svg>
              </div>

            </div>
          </div>


            <button class="card-button">Записаться на тест-драйв</button>
        </div>

      </div>

      <div class="card">
        <div class="card-picture">
          <div class="card-features">
            <div class="new">
              <span class="new-text">Новинка</span>
            </div>
            <svg class="sale-icon" width="20px" height="12px">
              <use href="img/sprite.svg#weight"></use>
            </svg>
          </div>
          <img src="./img/Scooter.png" alt="" class="card-image">
        </div>
        <div class="card-content">
          <div class="card-title">Kugoo Kirin M4</div>
          <div class="card-content-features">

           <div class="features-items-wrapper">
            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="20px">
                <use href="img/sprite.svg#butery"></use>
              </svg>
              <div class="content-text">2000 mAh</div>
            </div>

            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="20px">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <div class="content-text">60 км/ч</div>
            </div> 
          </div>

          <div class="features-items-wrapper">
           
            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="18px">
                <use href="img/sprite.svg#flashG"></use>
              </svg>
              <div class="content-text">1,2 л.с.</div>
            </div>

            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="18px">
                <use href="img/sprite.svg#Timer"></use>
              </svg>
              <div class="content-text">5 часов</div>
            </div>
          </div>

          </div>

          <div class="price-area">
            <div class="price-wrapper">
              <span class="old-price">39 900 ₽</span>
              <span class="price">29 900 ₽</span>
            </div>
            <div class="price-icons">
              <div class="price-icon-frame">
                <svg class="price-icon" width="20px" height="19px">
                  <use href="img/sprite.svg#shopcart"></use>
                </svg>
              </div>

              <div class="price-icon-frame">
                <svg class="price-icon" width="16px" height="16px">
                  <use href="img/sprite.svg#heartblue"></use>
                </svg>
              </div>

            </div>
          </div>


            <button class="card-button">Записаться на тест-драйв</button>
        </div>

      </div>

      <div class="card">
        <div class="card-picture">
          <div class="card-features">
            <div class="sale">
              <span class="sale-text">Хит</span>
            </div>
            <svg class="sale-icon" width="20px" height="12px">
              <use href="img/sprite.svg#weight"></use>
            </svg>
          </div>
          <img src="./img/Scooter.png" alt="" class="card-image">
        </div>
        <div class="card-content">
          <div class="card-title">Kugoo Kirin M4</div>
          <div class="card-content-features">

           <div class="features-items-wrapper">
            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="20px">
                <use href="img/sprite.svg#butery"></use>
              </svg>
              <div class="content-text">2000 mAh</div>
            </div>

            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="20px">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <div class="content-text">60 км/ч</div>
            </div> 
          </div>

          <div class="features-items-wrapper">
           
            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="18px">
                <use href="img/sprite.svg#flashG"></use>
              </svg>
              <div class="content-text">1,2 л.с.</div>
            </div>

            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="18px">
                <use href="img/sprite.svg#Timer"></use>
              </svg>
              <div class="content-text">5 часов</div>
            </div>
          </div>

          </div>

          <div class="price-area">
            <div class="price-wrapper">
              <span class="old-price">39 900 ₽</span>
              <span class="price">29 900 ₽</span>
            </div>
            <div class="price-icons">
              <div class="price-icon-frame">
                <svg class="price-icon" width="20px" height="19px">
                  <use href="img/sprite.svg#shopcart"></use>
                </svg>
              </div>

              <div class="price-icon-frame">
                <svg class="price-icon" width="16px" height="16px">
                  <use href="img/sprite.svg#heartblue"></use>
                </svg>
              </div>

            </div>
          </div>


            <button class="card-button">Записаться на тест-драйв</button>
        </div>

      </div>

      <div class="card">
        <div class="card-picture">
          <div class="card-features">
            <div class="new">
              <span class="new-text">Новинка</span>
            </div>
            <svg class="sale-icon" width="20px" height="12px">
              <use href="img/sprite.svg#weight"></use>
            </svg>
          </div>
          <img src="./img/Scooter.png" alt="" class="card-image">
        </div>
        <div class="card-content">
          <div class="card-title">Kugoo Kirin M4</div>
          <div class="card-content-features">

           <div class="features-items-wrapper">
            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="20px">
                <use href="img/sprite.svg#butery"></use>
              </svg>
              <div class="content-text">2000 mAh</div>
            </div>

            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="20px">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <div class="content-text">60 км/ч</div>
            </div> 
          </div>

          <div class="features-items-wrapper">
           
            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="18px">
                <use href="img/sprite.svg#flashG"></use>
              </svg>
              <div class="content-text">1,2 л.с.</div>
            </div>

            <div class="card-content-features-item">
              <svg class="card-icon" width="20px" height="18px">
                <use href="img/sprite.svg#Timer"></use>
              </svg>
              <div class="content-text">5 часов</div>
            </div>
          </div>

          </div>

          <div class="price-area">
            <div class="price-wrapper">
              <span class="old-price">39 900 ₽</span>
              <span class="price">29 900 ₽</span>
            </div>
            <div class="price-icons">
              <div class="price-icon-frame">
                <svg class="price-icon" width="20px" height="19px">
                  <use href="img/sprite.svg#shopcart"></use>
                </svg>
              </div>

              <div class="price-icon-frame">
                <svg class="price-icon" width="16px" height="16px">
                  <use href="img/sprite.svg#heartblue"></use>
                </svg>
              </div>

            </div>
          </div>
            <button class="card-button">Записаться на тест-драйв</button>
        </div>
      </div>
    </div>
  </section>

  <section class="section-grey">
    <div class="section-grey-content">
      <div class="cta-form-wrapper">
        <form action="handler.php" method="POST" class="cta-form" novalidate="novalidate">
          <h2 class="section-title-grey">Нет нужной модели, которую хотите протестировать?</h2>
        <p class="section-subtitle-grey">Оставьте заявку, и менеджер подберет нужный самокат</p>
          <div class="input-group-wrapper">
            <div class="input-group">
              <input id="user-phone" type="tel" class="input-phone-mask" name="userphone" placeholder="+7 (_ _ _) _ _ - _ _ - _ _" maxlength="30" required="">
            </div>
            <button class="button cta-form-button" type="submit">Оставить заявку на тест-драйв</button>
          </div>
          <div class="checkbox-wrapper">
            <input type="checkbox" id="agree" name="agree" class="check-input" required="">
             <label class="check-text" for="agree">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и политикой конфиденциальности</label>
           </div>
        </form>
        
      </div>
      <img src="./img/Cta_picture.png" alt="" class="cta-image">
    </div>
  </section>

  <footer class="footer">
    <div class="footer-top">
      <div class="footer-top-content">
        <p class="footer-offer">Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты</p>

        <form action="handler-two.php" method="POST" novalidate="novalidate"class="footer-form">
        <div class="input-form-wrapper">
          <div class="input-group">
            <input id="user-email" type="email" class="input-email" name="useremail" placeholder="Введите Ваш email" maxlength="30" required="" >
          </div>
          <button class="button footer-form-button" type="submit">Подписаться</button>
        </div>
        </form>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-bottom-content">


        <div class="footer-menu-wrapper menu-wrapper-first">
          <h2 class="footer-menu-title">Каталог товаров</h2>
          <ul class="footer-menu-list footer-menu-column-1">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Электросамокаты</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Электроскутеры</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Электровелосипеды</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Электровелосипеды</a>
            </li>
          </ul>
        </div>

        <div class="footer-menu-wrapper menu-wrapper-second">
          <h2 class="footer-menu-title">Покупателям</h2>
          <ul class="footer-menu-list footer-menu-column-2">
            
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Сервисный центр</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Доставка и оплата</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Рассрочка</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Тест-драйв</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Блог</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Сотрудничество</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Контакты</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Акции</a>
            </li>
          </ul>
        </div>

        <div class="footer-menu-wrapper menu-wrapper-third">
          <h2 class="footer-menu-title">Контакты</h2>
          <div class="contacts-wrapper">
          <div class="contacts-item">
            <h3 class="contacts-item-title">Call-центр</h3>
            <a href="tel:+78005055461" class="footer-phone">+7 (800) 505-54-61</a>
            <p class="work-time">Пн-Вс 10:00 - 20:00</p>
          </div>

          <div class="contacts-item">
            <h3 class="contacts-item-title">Сервисный центр</h3>
            <a href="tel:+74993507692" class="footer-phone">+7 (499) 350-76-92</a>
            <p class="work-time">Пн-Вс 10:00 - 20:00</p>
          </div>
        </div>
        </div>

        <a href="#" class="footer-call">Заказать звонок</a>

      </div>

    </div>
    <div class="footer-social">
      <div class="footer-social-item">
        <a href="./" class="footer-logo">KUGOO</a>
        <a class="download">
          <img src="/img/Google.svg" alt="">
        </a>
        <a class="download">
          <img src="/img/App.svg" alt="">
        </a>
      </div>

      <div class="footer-social-item">
        <a class="download">
          <img src="/img/vk.svg" alt="">
        </a>
        <a class="download">
          <img src="/img/Yoytube.svg" alt="">
        </a>
        <a class="download">
          <img src="/img/Tg.svg" alt="">
        </a>
      </div>

    </div>
    <div class="footer-copyright">
      <div class="footer-copyright-links">
        <a href="" class="footer-copy-link">Реквизиты</a>
        <a href="" class="footer-copy-link">Политика конфиденциальности</a>
      </div>

      <div class="footer-pay-wrapper">
      <div class="footer-payment">
        <img class="payment" src="./img/payment/Gp.png" alt="">
        <img class="payment" src="./img/payment/Ap.png" alt="">
        <img class="payment" src="./img/payment/Visa.png" alt="">
        <img class="payment" src="./img/payment/Mc.png" alt="">
        <img class="payment" src="./img/payment/Mc2.png" alt="">
        <img class="payment" src="./img/payment/Wm.png" alt="">
        <img class="payment" src="./img/payment/Q.png" alt="">
      </div>
        <div class="footer-chat-wrapper">
        <span class="footer-chat">Online чат:</span>
        <div class="footer-messengers">
          <a href="./" class="footer-social-icon">
            <svg class="header-top-icon" width="16px" height="16px">
              <use href="img/sprite.svg#viber 1"></use>
            </svg>
          </a>
          <a href="./" class="footer-social-icon">
            <svg class="header-top-icon" width="16px" height="16px">
              <use href="img/sprite.svg#003-whatsapp 1"></use>
            </svg>
          </a>
          <a href="./" class="footer-social-icon">
            <svg class="header-top-icon" width="16px" height="16px">
              <use href="img/sprite.svg#003-telegram 1"></use>
            </svg>
          </a>
        </div>
      </div>
        
      </div>

    </div>


  </footer>
  <div class="modal">
    <div class="modal-dialog">
      
      <h2 class="modal-title">Запишитесь на тест-драйв электросамоката</h2>
      <a href="" class="modal-close" data-toggle="modal">
        <svg class="close-icon" width="20px" height="20px">
          <use href="img/sprite.svg#close"></use>
        </svg>
      </a>
      <p class="modal-subtitle">и подберите модель для себя</p>
      <p class="modal-text">Менеджер свяжется с вами в течение 5 минут, чтобы выбрать время.</p>
      <form action="handler.php" method="POST" class="modal-form" novalidate="novalidate">
        
      <p class="modal-form-title">Как с вами удобнее связаться?</p>
        <div class="input-modal-wrapper">
          <div class="input-group">
            <input id="user-phone" type="tel" class="input-phone-mask" name="userphone" placeholder="+7 (_ _ _) _ _ - _ _ - _ _" maxlength="30" required="">
          </div>
          <button class="button modal-form-button" type="submit">Оформить предзаказ</button>
        </div>
        <div class="checkbox-modal-wrapper">
          <input type="checkbox" id="agree-modal" name="agree-modal" class="check-input-modal" required="">
           <label class="check-text-modal" for="agree-modal">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и политикой конфиденциальности</label>
         </div>
      </form>
      <img src="./img/modal.png" alt="" class="modal-picture">
    </div>
  </div>

  <script src="js/just-validate.production.min.js"></script>
  <script src="js/main.js"></script>
  
</body>
</html>