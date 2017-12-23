<form action="?createmessage" id="data-form" name="data-form" method="post">
    <div class="form-item">
        <label for="name"><?= $lblName = isset($data['lblName']) ? $data['lblName'] : ""; ?></label>
        <input type="text" name="name" id="name" placeholder="Укажите свое имя " value="<?= $value=(isset($data['correctName']))?($data['correctName']):""; ?>" required>
    </div>
    <label for="email"><?= $lblEmail = isset($data['lblEmail']) ? $data['lblEmail'] : ""; ?></label>
    <div class="form-item">
        <input type="email" name="email" id="email" placeholder="Укажите свой почтовый ящик" value="<?= $value=(isset($data['correctEmail']))?($data['correctEmail']):""; ?>" required>
    </div>
    <label for="message"><?= $lblMessage = isset($data['lblMessage']) ? $data['lblMessage'] : ""; ?></label>
    <div class="form-item">
        <textarea name="message" rows="3" placeholder="Введите текст сообщения: " value="<?= $value=(isset($data['correctMessage']))?($data['correctMessage']):""; ?>" ></textarea>
    </div>
    <div class="form-item clearfix">
        <input type="submit" value="Send">
    </div>
</form>


