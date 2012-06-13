<?php foreach($dirs as $dir): ?>
<div class="page">
<?php echo '<img src="/themes/default/images/dir.png" /> <a href="/down/dir/index/name/'.$dir['name'].'">'.$dir['name'].'</a>'; ?><br />
</div>
<?php endforeach; ?>
<?php foreach($files as $file): ?>
<div class="page">
<?php echo '<img src="/themes/default/images/file.png" /> <a href="/down/file/index/name/'.$file['view_name'].'">'.$file['view_name'].'</a>'; ?><br />
</div>
<?php endforeach; ?>
