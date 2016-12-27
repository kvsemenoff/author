<section class="dd-header-top-wrap">
	<div class="dd-fix-menu">
		<div class="my-container">
			<div class="dd-header-top hidden-xs hidden-sm">
				<ul>
					<li><a href="#">Стоимость</a></li>
					<li><a href="#">Схема работы</a></li>
					<li><a href="#">Наши специалисты</a></li>
					<li><a href="#">Отзывы</a></li>
					<li>Звоните:&nbsp;&nbsp; <span>409-47-66</span></li>
				</ul>
			</div>
		</div>
	</div>


	<div class="my-container">
		<div class="dd-logo">
			<a href="#"><img src="img/dd-logo.png" alt=""></a>
		</div>
		<div class="dd-logo-info">
			<span>
				Работаем с 2013 года<br>
				Устанавливаем защиту для любых марок авто
				За 3 года установили более 14000 устройств
			</span>
		</div>
		<div class="dd-phone">
			<span>Есть вопрос? Звоните:</span>
			<span>+7(812)409-47-66</span>
			<span>Пн.-Пт. 9:00 - 18:00</span>
		</div>
		<div class="dd-head-button-wr">
			<div class="dd-head-button">
				<a href="#log-in" name="modal">Заказать звонок</a>
			</div>
		</div>
	</div>
	<div class="my-container">
		<div class="dd-man">
			<img src="img/dd-man2.png" alt="">
		</div>
		<div class="dd-head-title">
			<h2 class="dd-h-size">Защитим ваш автомобиль с <span>пожизненной гарантией</span></h2>
			<div class="dd-slogan">
				<span>А если Ваш автомобиль угонят, мы <span>выплатим компенсацию</span> в размере
				50 000 - 150 000 руб. в зависимости от установленного комплеска</span>
			</div>
		</div>

		<div class="dd-form-wrap">
			<form class="form2" action="#">
				<div class="form-wrap-main">
					<div class="form-wrap-red">
						<div class="form-title dd-padding-bottom">
							Только до Нового Года!
						</div>
						<div class="dd-form-txt dd-padding-bottom">
							Оставьте заявку и получите подробную консультацию как <br>сэкономить на КАСКО<br>
							до 200 000 руб.
						</div>
						<div class="dd-input-wrap dd-padding-bottom">
							<input class="my-input phone" name="phone" type="text" placeholder="Введите телефон">
						</div>
						<!-- <input type="submit" class="form-button" name="submit" value="Записаться на консультацию \r\n БЕСПЛАТНО"> -->
						<a class="form-button" href="#">Записаться на консультацию БЕСПЛАТНО</a>
						<div class="dd-min-txt-form">
							Заполнение контактов ни к чему не обязывает! 
							Вы сможете отказаться в любой момент!
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>


<div class="anz-menu">
	<input type="checkbox" id="check_1" class=""/>
	<label class="anz-menu-ch hidden-lg hidden-md" for="check_1"><i class="fa fa-bars" aria-hidden="true"></i><img src="img/menu-ico.png"></label>
	<div class="anz-perspective">
		<div class="menu-list-pressed">
			<label class="anz-menu-ch1" for="check_1"><i class="fa fa-times" aria-hidden="true"></i><img src="img/kres.png"></label>
			<ul class="dd-mainmenu">
				<li><a href="#">Стоимость</a></li>
				<li><a href="#">Схема работы</a></li>
				<li><a href="#">Наши специалисты</a></li>
				<li><a href="#">Отзывы</a></li>
				<li>Звоните: <span>409-47-66</span></li>
			</ul>
		</div>
	</div>
</div>

<div id="mask"></div>
<div id="log-in" class="window">
	<div class="dd-form-wrap">
		<form class="form1" action="#" method="post">
			<div class="form-wrap-main">
				<div class="dd-close"></div>
				<div class="form-wrap-red">
					<div class="form-title dd-padding-bottom">
						Только до Нового Года!
					</div>
					<div class="dd-form-txt dd-padding-bottom">
						Оставьте заявку и получите подробную консультацию как <br>сэкономить на КАСКО<br>
						до 200 000 руб.
					</div>
					<div class="dd-input-wrap dd-padding-bottom">
						<input class="my-input phone" type="text" placeholder="Введите телефон" name="phone">
					</div>
					<input type="submit" class="form-button" name="submit" value="Заказать звонок">
					<div class="dd-min-txt-form">
						Заполнение контактов ни к чему не обязывает! 
						Вы сможете отказаться в любой момент!
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div id="thanks" class="window">
	<div class="dd-form-wrap">
		<div class="form-wrap-main">
			<div class="dd-close"></div>
			<div class="form-wrap-red">
				<div class="form-title dd-padding-bottom">
					Спасибо за заявку!
				</div>
				<div class="dd-form-txt dd-padding-bottom">
					Наш менеджер свяжется с вами в ближайшее время!
				</div>
			</div>
		</div>
	</div>
</div>
<a href="#thanks" name="modal"></a>

<script>
	function navigation_scroll(){
		var offset = $('.dd-fix-menu').height() || $(window).height() || 150;
		var scroll = $(document).scrollTop();
		if (scroll < 50) {
			$('.dd-fix-menu')
			.toggleClass('header-no-fixed', false)
			.toggleClass('header-fixed', false);
		}     
		else if (scroll >= offset) {
			$('.dd-fix-menu')
			.toggleClass('header-no-fixed', false)
			.toggleClass('header-fixed', true);

		}
		else if (scroll < offset - 50) {
			$('.dd-fix-menu')
			.toggleClass('header-fixed', true)
			.toggleClass('header-no-fixed', false);
		}
	}
	$(document).scroll(function(){
		navigation_scroll();
	});
</script>