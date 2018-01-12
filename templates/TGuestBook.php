
		<!-- Main -->
			<section id="main">
				<div class="inner">
					<header class="major special">
						<h1>Гостевая книга</h1>
						<p>Режим админа</p>
					</header>

					<!-- Text -->
						<section>

<?php foreach ($data as $line){
echo <<<EOT
              <header>
								<h4>--Запись--</h4>
							</header>
							<p>{$line['text']}</p>
EOT;
echo ($acss===TRUE)?"<p><i><a href='?a=y&del=" . $line['id'] . "'>Удалить эту запись</a></i></p>":'';
echo '<hr />';
} ?>
</code></pre>
						</section>

					<!-- Form -->
						<section>
							<h3>Оставить запись в гостевой книге</h3>
							<form method="post">
								<div class="row uniform 50%">
									<div class="12u$">
										<textarea name="message" id="message" placeholder="Введите свое сообщение" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Отправить" class="special" /></li>
											<li><input type="reset" value="Сброс сообщения" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

				</div>
			</section>
