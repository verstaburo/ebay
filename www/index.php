<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title>Введите ник продавца или ссылку на его товар или магазин на eBay</title>
    <?php include "blocks/css.php"; ?>
</head>

<body> 

<div class="siteloader">
  <ul class="siteloader__circles">
    <li class="siteloader__icon">
      <img src="img/icon-1_active.svg"  alt="@@">
      <span><img src="img/icon-1_pink.svg" alt="@@"></span>
    </li>
    <li class="siteloader__icon">
      <img src="img/icon-2.svg" alt="@@">
      <span><img src="img/icon-2_pink.svg" alt="@@" ></span>
    </li>
    <li class="siteloader__icon">
      <img class="hand" src="img/icon-3.svg" alt="@@">
      <span><img class="hand-active" src="img/icon-3_pink.svg" alt="@@" ></span>
    </li>
    <li class="siteloader__icon">
      <img src="img/icon-4.svg" alt="@@">
      <span><img src="img/icon-4_pink.svg" alt="@@" ></span>
    </li>
    <li class="siteloader__icon">
      <img src="img/icon-5.svg" alt="@@">
      <span><img src="img/icon-5_pink.svg" alt="@@"></span>
    </li>
  </ul>
  <div class="siteloader__progress">
    <div class="siteloader__progress_bar">
	  <span class="siteloader__progress_bar_progressive"></span>
    </div>
    <div class="siteloader__progress_texts">
      <p class="siteloader__progress_texts_percent"><span>0</span> %</p>
      <p class="siteloader__progress_texts_text">Подключаюсь</p>
    </div>
  </div>
</div>

<!-- ###################### -->

<div class="bigwrapper">
<section class="firstscreen">
	<div class="firstscreen__content">
		<?php include "blocks/header.php"; ?>
		<div class="firstscreen__actions actions actions_main active sticky">
			<div class="actionblock">
		  		<div class="container">
		    		<div class="actionblock__leftside">
			  			<p class="actionblock__watchreview"><a href="#" class="actionblock__icon actionblock__icon_burger"><span></span></a><span class="text">Проверь продавца на eBay</span></p>
					</div>
					<div class="actionblock__rightside">
			  			<a href="mailto:contact@taker.im" class="header__mail">Contact@taker.im</a>
			  			<p class="header__adults">18+</p>
					</div>
		      	</div>
			</div>
		</div>
		<div class="container small">
			<p class="heading">Проверь продавца на eBay</p>
			<h1>Введите ник продавца или ссылку на его товар или магазин на eBay</h1>
			<form action="send.php" method="post" autocomplete="off">
				<div class="inputblock">
		        	<div class="more">
			  			<span class="more__dot"></span>
			  			<span class="more__dot"></span>
			  			<span class="more__dot"></span>
					</div>
					<input type="text" name="seller">
		     		<p class="inputlink">http://www.ebay.com/usr/modelmeistershop?_trksid=p2047675.l2559</p>
		      	</div>
		  		<div class="form-bottom">
		    		<button class="button button_pink" type="submit">Проверить</button>
		      	</div>
			</form>
			<img src="img/together.svg" alt="@@">
			<p class="firstscreen__cardheading">Недавно проверенные продавцы</p>
		 </div>
		 <div class="container container_navcards">
		 	<div class="cardnav firstscreen__cardnav">
				<a href="#" class="cardnav__arrow prev"><img src="img/navarrow.svg" alt="@@"></a>
				<a href="#" class="cardnav__arrow next"><img src="img/navarrow.svg" alt="@@"></a>
			</div>
			<div class="firstscreen__cards js-navcards">
				<a href="#" class="sellercard">
					<div class="sellercard__avatar">
						<img src="img/avatar1.png" alt="@@">
					</div>
					<div class="sellercard__info">
						<p class="sellercard__name">Vologry</p>
						<div class="sellercard__details">
							<p class="sellercard__detail">98<span>баллов</span></p>
							<p class="sellercard__detail">56 сек. назад<span>Проверен</span></p>
						</div>
					</div>
				</a>
				<a href="#" class="sellercard">
					<div class="sellercard__avatar">
						<img src="img/avatar1.png" alt="@@">
					</div>
					<div class="sellercard__info">
						<p class="sellercard__name">Resawa</p>
						<div class="sellercard__details">
							<p class="sellercard__detail">87<span>баллов</span></p>
							<p class="sellercard__detail">2 мин. назад<span>Проверен</span></p>
						</div>
					</div>
				</a>
				<a href="#" class="sellercard">
					<div class="sellercard__avatar">
						<img src="img/avatar1.png" alt="@@">
					</div>
					<div class="sellercard__info">
						<p class="sellercard__name">Maskit</p>
						<div class="sellercard__details">
							<p class="sellercard__detail">87<span>баллов</span></p>
							<p class="sellercard__detail">3 мин. назад<span>Проверен</span></p>
						</div>
					</div>
				</a>
				<a href="#" class="sellercard">
					<div class="sellercard__avatar">
						<img src="img/avatar1.png" alt="@@">
					</div>
					<div class="sellercard__info">
						<p class="sellercard__name">Maskit</p>
						<div class="sellercard__details">
							<p class="sellercard__detail">87<span>баллов</span></p>
							<p class="sellercard__detail">3 мин. назад<span>Проверен</span></p>
						</div>
					</div>
				</a>
				<a href="#" class="sellercard">
					<div class="sellercard__avatar">
						<img src="img/avatar1.png" alt="@@">
					</div>
					<div class="sellercard__info">
						<p class="sellercard__name">Maskit</p>
						<div class="sellercard__details">
							<p class="sellercard__detail">87<span>баллов</span></p>
							<p class="sellercard__detail">3 мин. назад<span>Проверен</span></p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<a href="#" class="scroll-link nav"><span class="scroll-link__mouse"></span><span class="scroll-link__text">Узнать больше</span></a>
</section>

<!-- ###################### -->

<div class="content" style="display:block;">
    
    <section class="topblock">
    		<!-- <aside>
    			<div class="leftside">
    			    <p class="link">http://stores.ebay.com/fashioncity2018_trksid=p2056016.l2563</p>
    			    <p class="tooltip"><span>http://stores.ebay.com/fashioncity2018_trksid=p2056016.l2563</span></p>
    			    <a href="#change" class="button violet small">изменить</a>
    			</div>
    			<a href="#comments" class="button small nav review">оставить отзыв</a>
    		</aside> -->
    		
    		<form>
    			<p class="huge">Введите ник продавца или ссылку на его товар<br> или магазин на eBay</p>
    			<div class="inputblock"><input type="text" name="seller"></div>
    			<div class="buttons">
    				<button class="button" type="submit">Проверить</button>
    				<a href="#cancel" class="button violet">Отмена</a>
    			</div>
    		</form>
    	</section>
	<?php include "blocks/header.php"; ?>
		<div class="firstscreen__actions actions actions_main active sticky">
			<div class="actionblock">
		  		<div class="container">
		    		<div class="actionblock__leftside">
			  			<p class="actionblock__watchreview"><a href="#" class="actionblock__icon actionblock__icon_burger"><span></span></a><span class="text">Проверь продавца на eBay</span></p>
			  			<div class="actionblock__inputblock inputblock">
		        			<div class="more">
			  					<span class="more__dot"></span>
			  					<span class="more__dot"></span>
			  					<span class="more__dot"></span>
							</div>
		     				<p class="actionblock__sellerlink">http://www.ebay.com/usr/modelmeistershop?_trksid=p2047675.l2559</p>
		     				<p class="actionblock__inputlink inputlink">text</p>
		      			</div>
		      			<a href="#change" class="actionblock__changelink">Изменить</a>
					</div>
					<div class="actionblock__rightside">
			  			<a href="#" class="actionblock__commentsbutton">
			  				<p>Комментарии</p>
			  				<p>28</p>
			  			</a>
					</div>
		      	</div>
			</div>
		</div>
	<!-- ###################### -->

	<section class="second good">
		<div class="second__content">
			<div class="container small">
				<div class="second__top">
					<img src="img/good.svg" alt="@@" class="good">
					<img src="img/bad.svg" alt="@@" class="bad">
					<div>
						<p class="second__blockheading">Покупать?</p>
						<p class="second__blocktext" id="yesorno">Да, можно покупать.</p>
					</div>
					<div>
						<p class="second__blockheading">Наш рейтинг продавца</p>
						<p class="second__blocktext"><span id="ratingnumber">85</span> из 100 <br>
						<span id="textrating">очень хороший</span></p>
					</div>
					<div>
						<p class="second__blockheading">Стр. проверки продавца</p>
						<p class="second__sellerpage">http://www.taker.im/e/sorokins</p>
						<a href="#" class="second__addtofav" id="tofavourites">Добавить в избранное</a>
					</div>
					<!-- <a href="#moreinfo" class="button mainnav">Подробнее</a> -->
				</div>
				<div class="second__goods-head">
					<p class="second__goods-heading">Товары  Sorokins в продаже</p>
					<div class="second__goods-share">
						<p class="second__goods-sharetext">Расскажи друзьям о продавце</p>
						<div class="second__goods-social">
							<a href="#" class="icon vk"></a>
							<a href="#" class="icon facebook"></a>
							<a href="#" class="icon twitter"></a>
							<a href="#" class="icon ok"></a>
							<a href="#" class="icon mailru"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="container container_navcards">
			 	<div class="cardnav firstscreen__cardnav">
					<a href="#" class="cardnav__arrow prev"><img src="img/navarrow.svg" alt="@@"></a>
					<a href="#" class="cardnav__arrow next"><img src="img/navarrow.svg" alt="@@"></a>
				</div>
				<div class="second__goods-cards js-navcards">
					<a href="#" class="second__card goodcard shadow-hover">
						<div class="goodcard__image">
							<img src="img/goods9.png" alt="@@">
						</div>
						<div class="goodcard__info">
							<p class="goodcard__number">4967853524565</p>
							<p class="goodcard__price">€ 499</p>
							<p class="goodcard__text">Инновационный мини холодильник OOINO Mini Refrigerator</p>
						</div>
					</a>
					<a href="#" class="second__card goodcard shadow-hover">
						<div class="goodcard__image">
							<img src="img/goods4.png" alt="@@">
						</div>
						<div class="goodcard__info">
							<p class="goodcard__number">3963254525665</p>
							<p class="goodcard__price">€ 192</p>
							<p class="goodcard__text">Сбалансированные беспроводные наушники Gravity</p>
						</div>
					</a>
					<a href="#" class="second__card goodcard shadow-hover">
						<div class="goodcard__image">
							<img src="img/goods2.png" alt="@@">
						</div>
						<div class="goodcard__info">
							<p class="goodcard__number">4967853524565</p>
							<p class="goodcard__price">€ 499</p>
							<p class="goodcard__text">Инновационный мини холодильник OOINO Mini Refrigerator</p>
						</div>
					</a>
					<a href="#" class="second__card morecard shadow-hover">
						<img src="img/ebaylogo.png" alt="@@" class="morecard__logo">
						<p class="morecard__count">+ 8 669</p>
						<p class="morecard__text">Показать все товары Sorokins</p>
					</a>
				</div>
			</div>
		</div>
		<a href="#" class="second__detail-button">Детальная информация</a>
	</section>
	
	<!-- ###################### -->

<section id="moreinfo">

<div class="container">

	<div class="table">
		<div class="container small">
			<ul>
				<li>
					<p>Ник продавца</p>
					<div class="icon avatar"></div>
					<p class="huge">Sorokins</p>
					<p>Никнейм продавца ни разу не изменялся</p>
				</li>
				<li>
					<p>Количество продаж</p>
					<div class="icon happy"></div>
					<p class="huge">658</p>
					<p>Продавец со стажем 658 продаж, надежный продавец.</p>
				</li>
				<li>
					<p>Рейтинг</p>
					<div class="icon happy"></div>
					<p class="huge">99,5%</p>
					<p>Продавец имеет 99,5% положительных отзывов, надежный продавец.</p>
				</li>
				<li>
					<p>Дата регистрации</p>
					<div class="icon happy"></div>
					<p class="huge">1 год и 3 мес.</p>
					<p>Продавец со стажем, 1 год и 3 мес., внушает доверие</p>
				</li>
				<li>
					<p>Страна </p>
					<div class="icon pin"></div>
					<p class="huge">Китай</p>
					<p>• • •</p>
				</li>
				<li>
					<p>Товар соответствует<br> описанию</p>
					<div class="icon sad"></div>
					<p class="huge">3,54</p>
					<p>Y% недовольных качеством товара пользователей. Возможны риски.</p>
				</li>
				<li>
					<p>Общение</p>
					<div class="icon displeased"></div>
					<p class="huge">4,90</p>
					<p>Х% покупателей довольны общением с продавцом. Продавец своевременно отвечает на вопросы.</p>
				</li>
				<li>
					<p>Срок отправки</p>
					<div class="icon happy"></div>
					<p class="huge">4,68</p>
					<p>X% покупателей считают, что срок доставки приемлемый. Скорее всего товар будет получен до рассчетного срока.</p>
				</li>
				<li>
					<p>Стоимость доставки</p>
					<div class="icon sad"></div>
					<p class="huge">4,95</p>
					<p>Доставка большинства товаров бесплатная, или по приемлемой цене.</p>
				</li>
				<li>
					<p>Наличие магазина</p>
					<div class="icon sad"></div>
					<p class="huge">Есть</p>
					<p>У продавца имеется свой магазин, в котором могут быть более привлекательные цены. </p>
				</li>
				<li>
					<p>Наличие статуса Top <br> Rated Seller</p>
					<div class="icon happy"></div>
					<p class="huge">Есть</p>
					<p>У продавца статус TopRate Seller <br> <a href="#" class="rose">подробнее о TopRate Seller</a></p>
				</li>
				<li>
					<p>Кол-во выставленных товаров</p>
					<div class="icon displeased"></div>
					<p class="huge">12</p>
					<p>У продавца выставлено 12 товаров в 3 категорий.</p>
				</li>
				<li>
					<p>Кол-во категорий в которых выставлено</p>
					<div class="icon"></div>
					<p class="huge">3</p>
					<p>• • •</p>
				</li>
				<li>
					<p>Средняя стоимость выставленных товаров</p>
					<div class="icon"></div>
					<p class="huge">$ 678</p>
					<p>Средняя стоимость выставленных товаров у продавца Sorokins составляет 678 USD</p>
				</li>
				<li>
					<p>Средняя стоимость<br> проданных товаров за месяц</p>
					<div class="icon"></div>
					<p class="huge">$ 420</p>
					<p>Средняя стоимость проданных за месяц товаров у продавца Sorokins составляет 420 USD</p>
				</li>
				<li>
					<p>Наличие отзывов от<br> продавцов</p>
					<div class="icon happy"></div>
					<p class="huge">Есть отзывы <br> <span>"Как покупатель"</span></p>
					<p>У продавца есть XX отзывов от других продавцов (продавец так же является покупателем)</p>
				</li>
				<li>
					<p>Кол-во подписчиков<br> (followers)</p>
					<div class="icon sad"></div>
					<p class="huge">Нет <br><span>подписчиков</span></p>
					<p>У продавца нет подписчиков.</p>
				</li>
			</ul>
		</div>
	</div>
    
    <!-- ###################### -->
	
	<div class="share">
		<div class="container small">
			<div>
				<p class="small">Страница проверки продавца</p>
				<div class="checkpage" id="tofavourites">
					<p>http://www.taker.im/e/sorokins</p>
					<img src="img/star.svg" alt="@@">
				</div>
			</div>
			<div class="social">
				<p class="small">Рассказать друзьям</p>
				<a href="#" class="icon vk"></a>
				<a href="#" class="icon facebook"></a>
				<a href="#" class="icon twitter"></a>
				<a href="#" class="icon ok"></a>
				<a href="#" class="icon mailru"></a>
				<a href="#" class="icon google"></a>
			</div>
		</div>
	</div>
    
    <!-- ###################### -->
	
	<div class="goods">
		<div class="container small">
			<div class="top">
				<p class="small">Товары sorokins в продаже</p>
				<p class="small rose"><a href="#"><span>Все 126 товаров</span><img src="img/arrow-right.svg" alt="@@"></a></p>
			</div>
			<div class="goods-cards">
				<a href="#" target="_blank">
					<div class="image" style="background-image:url('img/apple-watch.png')"></div>
					<p class="name">Apple watch</p>
					<p>37 700 руб.</p>
				</a>
				<a href="#" target="_blank">
					<div class="image" style="background-image:url('img/iphone7.png')"></div>
					<p class="name">Apple iPhone 7 plus</p>
					<p>57 900 руб.</p>
				</a>
				<a href="#" target="_blank">
					<div class="image" style="background-image:url('img/macbook.png')"></div>
					<p class="name">Apple macbook</p>
					<p>120 990 руб.</p>
				</a>
				<a href="#" target="_blank">
					<div class="image" style="background-image:url('img/airpods.png')"></div>
					<p class="name">Apple AirPods</p>
					<p>24 500 руб.</p>
				</a>
			</div>
			<a href="#change" class="button">проверить товар продавца</a>
		</div>
	</div>
	
	<!-- ###################### -->
	
	<div class="reviews">
		<div class="container small">
			<div class="top">
				<div>
					<label for="seller">
						<p class="small">Отзывы</p>
					</label>
					<select name="seller" id="seller">
						<option value="О товаре" selected>О товаре</option>
						<option value="О продавце">О продавце</option>
					</select>
					<label for="rating">
						<p>Показать</p>
					</label>
					
					<div class="ratinglist">
					    <input type="checkbox" id="openrating">
					    <label for="openrating" class="ratingselect">
					        <div class="icon neutral"></div>
					        <div class="icon plus"></div>
					        <div class="icon minus"></div>
					    </label>
					    <ul>
					        <li>
					            <input type="checkbox" id="rating1" checked>
					            <label for="rating1"><span class="icon plus"></span><span class="text">Положительные</span></label>
					        </li>
					        <li>
					            <input type="checkbox" id="rating2" checked>
					            <label for="rating2"><span class="icon neutral"></span><span class="text">Нейтральные</span></label>
					        </li>
					        <li>
					            <input type="checkbox" id="rating3" checked>
					            <label for="rating3"><span class="icon minus"></span><span class="text">Отрицательные</span></label>
					        </li>
					    </ul>
					</div>
					
					<label for="range">
						<p>За</p>
					</label>
					<select name="range" id="range">
						<option value="3 мес" selected>3 мес</option>
						<option value="6 мес">6 мес</option>
						<option value="12 мес">12 мес</option>
					</select>
				</div>
					<p class="small rose"><a href="#"><span>Все 6826 отзывов</span><img src="img/arrow-right.svg" alt="@@"></a></p>
			</div>
		</div>
			<div class="scrollbar-inner">
				<ul>
					<li>
						<p>Great Ebayer A+++++++++</p>
						<div class="icon neutral"></div>
					</li>
					<li>
						<p>Arrived quickly and as described Thanks AAA+++</p>
						<div class="icon plus"></div>
					</li>
					<li>
						<p>Excellent product, fast shipping, exactly as described. A+++</p>
						<div class="icon plus"></div>
					</li>
					<li>
						<p>Great Ebayer</p>
						<div class="icon minus"></div>
					</li>
					<li>
						<p>Great Ebayer A+++++++++</p>
						<div class="icon neutral"></div>
					</li>
					<li>
						<p>Arrived quickly and as described Thanks AAA+++</p>
						<div class="icon plus"></div>
					</li>
					<li>
						<p>Excellent product, fast shipping, exactly as described. A+++</p>
						<div class="icon plus"></div>
					</li>
					<li>
						<p>Great Ebayer</p>
						<div class="icon minus"></div>
					</li>
				</ul>
			</div>
	</div>
	
	<!-- ###################### -->
	
	<div class="comments" id="comments">
		<div class="container small">
			<p class="small">6 комментариев</p>
		</div>
		
		<div class="padding">
			<form action="send.php" method="post">
				<div class="icon default"></div>
				<input name="comment" placeholder="Оставить свой комментарий"></input>
			</form>
			
			<!-- ######## -->
			
			<div>
				<p class="mini"><a href="#">новые<img src="img/arrow-down2.svg" alt="@@"></a></p>
				<div class="rightside">
					<p class="mini"><a href="#">Подписаться</a></p>
					<p class="mini"><a href="#">Поделиться</a></p>
				</div>
			</div>
			
			<!-- ######## -->
			
			<ul>
				<li>
					<div class="icon ava" style="background-image:url('img/avatar2.png')"></div>
					<p class="small name rose">Vega</p>
					<p class="small">9 дней назад 13:33</p>
					<p class="message">За что хорошенькую девочку в угол поставили? ))))))))))) <br>
					Классно джинсики сидят, как влитые.</p>
					
					<div class="navblock">
					    <img src="img/shape2.svg" alt="@@">
					    <img src="img/shape3.svg" alt="@@">
					    <img src="img/shape4.svg" alt="@@">
					</div>
					
					<div class="bottom">
						<p class="mini"><a href="#">ответить</a></p>
						<div>
							<p class="mini"><a href="#">не нравится</a></p>
							<p class="mini"><a href="#">нравится</a></p>
							<div class="icon rating"></div>
						</div>
					</div>
				</li>
				
				<!-- ######## -->
				
				<li class="answer">
					<div class="icon ava" style="background-image:url('img/avatar3.png')"></div>
					<p class="small name rose">Sergey Sokolov</p>
					<p class="small">9 дней назад 11:40</p>
					<p class="message">A провинилась наверное)</p>
					
                    <div class="navblock">
					    <img src="img/shape2.svg" alt="@@">
					    <img src="img/shape3.svg" alt="@@">
					    <img src="img/shape4.svg" alt="@@">
					</div>
					
					<div class="bottom">
						<p class="mini"><a href="#">ответить</a></p>
						<div>
							<p class="mini"><a href="#">не нравится</a></p>
							<p class="mini"><a href="#">нравится</a></p>
							<div class="icon rating"></div>
						</div>
					</div>
				</li>
				
				<!-- ######## -->
				
				<li>
					<div class="icon ava" style="background-image:url('img/avatar4.png')"></div>
					<p class="small name rose">Airborn</p>
					<p class="small">9 дней назад 13:33</p>
					<p class="message">Вот, отличный обзор, без рекламы кешбеков.. и фото джинсов на натуре- великолепное.. отлично выглядят!! а стразы там и не нужны, в пупке то пирсинг и так есть!)))</p>
					
                    <div class="navblock">
					    <img src="img/shape2.svg" alt="@@">
					    <img src="img/shape3.svg" alt="@@">
					    <img src="img/shape4.svg" alt="@@">
					</div>
					
					<div class="bottom">
						<p class="mini"><a href="#">ответить</a></p>
						<div>
							<p class="mini"><a href="#">не нравится</a></p>
							<p class="mini"><a href="#">нравится</a></p>
							<div class="icon rating"></div>
						</div>
					</div>
				</li>
				
				<li>
					<div class="icon ava" style="background-image:url('img/avatar4.png')"></div>
					<p class="small name rose">Airborn</p>
					<p class="small">9 дней назад 13:33</p>
					<p class="message">Вот, отличный обзор, без рекламы кешбеков.. и фото джинсов на натуре- великолепное.. отлично выглядят!! а стразы там и не нужны, в пупке то пирсинг и так есть!)))</p>
					
                    <div class="navblock">
					    <img src="img/shape2.svg" alt="@@">
					    <img src="img/shape3.svg" alt="@@">
					    <img src="img/shape4.svg" alt="@@">
					</div>
					
					<div class="bottom">
						<p class="mini"><a href="#">ответить</a></p>
						<div>
							<p class="mini"><a href="#">не нравится</a></p>
							<p class="mini"><a href="#">нравится</a></p>
							<div class="icon rating"></div>
						</div>
					</div>
				</li>
				
				<li>
					<div class="icon ava" style="background-image:url('img/avatar4.png')"></div>
					<p class="small name rose">Airborn</p>
					<p class="small">9 дней назад 13:33</p>
					<p class="message">Вот, отличный обзор, без рекламы кешбеков.. и фото джинсов на натуре- великолепное.. отлично выглядят!! а стразы там и не нужны, в пупке то пирсинг и так есть!)))</p>
					
                    <div class="navblock">
					    <img src="img/shape2.svg" alt="@@">
					    <img src="img/shape3.svg" alt="@@">
					    <img src="img/shape4.svg" alt="@@">
					</div>
					
					<div class="bottom">
						<p class="mini"><a href="#">ответить</a></p>
						<div>
							<p class="mini"><a href="#">не нравится</a></p>
							<p class="mini"><a href="#">нравится</a></p>
							<div class="icon rating"></div>
						</div>
					</div>
				</li>
				
				<li>
					<div class="icon ava" style="background-image:url('img/avatar4.png')"></div>
					<p class="small name rose">Airborn</p>
					<p class="small">9 дней назад 13:33</p>
					<p class="message">Вот, отличный обзор, без рекламы кешбеков.. и фото джинсов на натуре- великолепное.. отлично выглядят!! а стразы там и не нужны, в пупке то пирсинг и так есть!)))</p>
					
                    <div class="navblock">
					    <img src="img/shape2.svg" alt="@@">
					    <img src="img/shape3.svg" alt="@@">
					    <img src="img/shape4.svg" alt="@@">
					</div>
					
					<div class="bottom">
						<p class="mini"><a href="#">ответить</a></p>
						<div>
							<p class="mini"><a href="#">не нравится</a></p>
							<p class="mini"><a href="#">нравится</a></p>
							<div class="icon rating"></div>
						</div>
					</div>
				</li>
				
			</ul>
	</div>
		<div class="buttons">
			<a href="#morecomments" class="button">Показать еще</a>
		</div>
	</div>
	
	<!-- ###################### -->
	
</div>
</section>
</div>

<!-- ###################### -->
<!-- ###################### -->
<!-- ###################### -->

<!-- Сообщение об ошибке -->

<p class="errorblock" id="emptyerror">
    <span class="message">Вы ничего не ввели</span>
    <a href="#close">ОК</a>
</p>

<p class="errorblock" id="bookmarkinfo">
    <span class="message">Ссылка добавлена в закладки браузера</span>
    <a href="#close">ОК</a>
</p>

    </div>

<?php include "blocks/scripts.php"; ?>
</body>
</html>