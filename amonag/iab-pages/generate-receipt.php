<?php require_once '_header.php'; ?>

	<div class="content">

		<div class="content__item">
			<div class="amonag__content">
				<div class="inside__content">
					<h3>Сформировать квитанцию</h3>
					<div class="subscription__unit payment">
						<img src="img/img-7.jpg" alt="">
						<div class="subscription__content">
							<span class="rst__title">Общий курс ресторанного бизнеса «РЕСТОРАТОР»</span>
							<span class="info">Доступные языки:</span>
							<span class="lang__span">
								<span>EN</span>
								<span>ES</span>
								<span>RU</span>
								<span>DE</span>
								<span>FR</span>
								<span>IT</span>
								<span>PT</span>
								<span>PO</span>
								<span>ER</span>
								<span>NO</span>
							</span>
							<span class="info">Период подписки</span>
							<div class="data__time">1 год</div>
							<span class="info">Объем и стоимость</span>
							<span class="price__item">
								<span class="time">300 часов</span>
								<span class="price">19500<span class="rur">p</span></span>
							</span>
						</div>
					</div>
					<div class="payment-type"></div>



					<form class="bill-form">
						<label><span>Имя*</span>
							<input id="name" name="name" type="text" class="error">
							<div class="error-box"></div>
						</label>
						<label><span>E-mail*</span>
							<input id="email" name="email" type="text">
							<div class="error-box"></div>
						</label>
						<label><span>Телефон*</span>
							<input type="tel">
						</label>
						<label><span>Адрес</span>
							<input type="text">
						</label>
						<label><span>Комментарии</span>
							<textarea id="message" name="message"></textarea>
							<div class="error-box"></div>
							<button type="submit" class="m-t-10"> Сформировать квитанцию</button>
						</label>

					</form>
					<p class="text-center"><a href="#">Оплачивая услугу, Вы соглашаетесь с условиями договора оферты.</a></p>











				</div>
			</div>

		</div><!-- .content__item -->

	</div>

	
	<div class="hidden"></div>

	<div class="loader">
		<div class="loader_inner"></div>
	</div>

<?php require_once '_scripts.php';