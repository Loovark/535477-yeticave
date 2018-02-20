<form class="form form--add-lot container <?= $addclass = isset($err) ? "form--invalid" : ""; ?>" action="add.php"
      method="post"> <!-- form--invalid -->
    <h2>Добавление лота</h2>
    <div class="form__container-two">
        <div class="form__item <?= $addclass = isset($err) ? "form__item--invalid" : ""; ?>">
            <!-- form__item--invalid -->
            <label for="lot-name">Наименование</label>
            <input id="lot-name" type="text" name="lot-name" placeholder="Введите наименование лота" required
                   value="<?= $value = isset($lot['name']) ? htmlspecialchars($lot['name']) : ""; ?>">
            <span class="form__error"><?= $errmessage = isset($err['name']) ? $err['name'] : ""; ?></span>
        </div>
        <div class="form__item <?= $addclass = isset($err['category']) ? "form__item--invalid" : ""; ?>">
            <label for="category">Категория</label>
            <select id="category" name="category" required>
                <option>Выберите категорию</option>
                <option>Доски и лыжи</option>
                <option>Крепления</option>
                <option>Ботинки</option>
                <option>Одежда</option>
                <option>Инструменты</option>
                <option>Разное</option>
            </select>
            <span class="form__error"><?= $errmessage = isset($err['category']) ? $err['category'] : ""; ?></span>
        </div>
    </div>
    <div class="form__item form__item--wide <?= $addclass = isset($err['description']) ? "form__item--invalid" : ""; ?>">
        <label for="message">Описание</label>
        <textarea id="message" name="message" placeholder="Напишите описание лота"
                  required><?= $value = isset($lot['description']) ? htmlspecialchars($lot['description']) : ""; ?></textarea>
        <span class="form__error"><?= $errmessage = isset($err['description']) ? $err['description'] : ""; ?></span>
    </div>
    <div class="form__item form__item--file <?= $addclass = isset($err['image']) ? "form__item--invalid" : "form__item--uploaded"; ?>">
        <!-- form__item--uploaded -->
        <label>Изображение</label>
        <div class="preview">
            <button class="preview__remove" type="button">x</button>
            <div class="preview__img">
                <img src="<?= $value = isset($lot['image']) ? $lot['image'] : ""; ?>" width="113" height="113"
                     alt="Изображение лота">
            </div>
        </div>
        <div class="form__input-file">
            <input class="visually-hidden" type="file" id="photo2" value="">
            <label for="photo2">
                <span>+ Добавить</span>
            </label>
        </div>
    </div>
    <div class="form__container-three">
        <div class="form__item form__item--small <?= $addclass = isset($err['lot-rate']) ? "form__item--invalid" : ""; ?>">
            <label for="lot-rate">Начальная цена</label>
            <input id="lot-rate" type="number" name="lot-rate" placeholder="0" required
                   value="<?= $value = isset($lot['lot-rate']) ? htmlspecialchars($lot['lot-rate']) : ""; ?>">
            <span class=" form__error"><?= $errmessage = isset($err['lot-rate']) ? $err['lot-rate'] : ""; ?></span>
        </div>
        <div class="form__item form__item--small <?= $errmessage = isset($err['lot-step']) ? "Заполните это поле" : ""; ?>">
            <label for="lot-step">Шаг ставки</label>
            <input id="lot-step" type="number" name="lot-step" placeholder="0" required
                   value="<?= $value = isset($lot['lot-step']) ? htmlspecialchars($lot['lot-step']) : ""; ?>">
            <span class=" form__error"><?= $errmessage = isset($err['lot-step']) ? $err['lot-rate'] : ""; ?></span>
        </div>
        <div class="form__item <?= $errmessage = isset($err['lot-date']) ? $err['lot-rate'] : ""; ?>">
            <label for="lot-date">Дата окончания торгов</label>
            <input class="form__input-date" id="lot-date" type="date" name="lot-date" required
                   value="<?= $value = isset($lot['lot-date']) ? htmlspecialchars($lot['lot-step']) : ""; ?>">
            <span class=" form__error"><?= $errmessage = isset($err['lot-date']) ? $err['lot-rate'] : ""; ?></span>
        </div>
    </div>
    <span class="form__error form__error--bottom"><?= $errmessage = isset($err) ? "Пожалуйста, исправьте ошибки в форме." : ""; ?></span>
    <button type="submit" class="button">Добавить лот</button>
</form>