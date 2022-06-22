<a href='<?=route('news.create') ?>'>Add news</h2>
</br>
<?php
        foreach ($news as $k => $new) {
$k++;
            echo $new." <a href='".route('news.edit', ['news' => $k])."'> edit</a></br>";//ключ news скорее связано сназыванием контроллера
        }?>
