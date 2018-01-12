		<!-- Main -->
			<section id="main">
				<div class="inner">
					<header class="major special">
						<h1>Фото</h1>
						<p>Что-то написано...</p>
					</header>

					<!-- Image -->
					<section>
						<h3>Фото</h3>
						<h4>Fit</h4>
						<div class="box alt">
							<div class="row 50% uniform">
                <?php foreach ($fotos as $foto) { ?>
								<div class="12u$"><span class="image fit"><img src="/../img/<?=$foto?>" alt="" /></span></div>
								<?php } ?>
                <div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
							</div>
						</div>

					</section>

					<!-- Text -->
						<section>
							<h3>Заголовок</h3>
							<p>Описание чего-то...
							<hr />

						</section>

					<!-- Form -->
						<section>
							<h3>Форма загрузки фотографий</h3>
              <ul class="actions">
              <form action=""  method="post" enctype="multipart/form-data">
                <input type="file"  name="mmm" >
                  <li><input type="submit" value="Загрузить фото" class="special" /></li>
                </ul>
              </form>
						</section>

				</div>
			</section>
