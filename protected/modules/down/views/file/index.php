<div class="page">
Имя: <?php echo $file['view_name']; ?><br />
Описание:<br />
<?php echo $file['about']; ?><br />
Время добавления: <?php echo date('j.n.Y H:i', $file['time']); ?><br />
Размер: <?php echo $size; ?><br />
<a href="/down/download/<?php echo $file['id'] ?>">Скачать</a>
</div>