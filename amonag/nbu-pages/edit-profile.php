<?php require_once '_header.php'; ?>

	<div class="content">


		
		<div class="content__item">
			<div class="amonag__content">
				<div class="inside__content">
					<h3>Редактирование профиля</h3>
					<div class="contact__form">
						<form action="">
							<input id="name" name="name" type="text" placeholder="Имя" value="Имя" />
							<div class="error-box top__min"></div>
							<input type="text" placeholder="Фамилия" value="Фамилия" />
							<input type="text" placeholder="Дата рождения" value="Дата рождения" />
							<input id="email" name="email" type="text" placeholder="E-mail" value="E-mail" />
							<div class="error-box top__min"></div>
							<input type="text" placeholder="Телефон" value="Телефон" />
							<input type="submit" value="Сохранить профиль">
						</form>
						<a class="forgot__password" href="#">Отменить редактирование</a>
					</div>
				</div>
			</div>

		</div><!-- .content__item -->

	</div>

	<div class="hidden"></div>

	<div class="loader">
		<div class="loader_inner"></div>
	</div>

<?php require_once '_footer.php';