<?php foreach ($messages as $item): ?>
<div class="container">
    <div class="message-text">
        <p><?= $item['message']; ?></p>
    </div>
    <div class="wrapper">
        <div class="date">Опубликовано: <time><?= $item['date_publication']; ?></time></div>
        <div class="email">Email: <?= $item['email']; ?></div>
        <div class="author">Автор: <?= $item['name']; ?></div>
    </div>
    <div class="toolbar">
        <form action="?deletemessage" method="post">
            <input type="hidden" name="id" value="<?= $item['id']; ?>">
            <input type="submit" class="delete-btn" value="Удалить">
        </form>
    </div>
</div>
<?php endforeach; ?>
