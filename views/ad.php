<?php
use yii\web\View;
foreach($ads as $ad):
    echo "<script type=\"text/javascript\"> (function(d) { var id = 'click_sabavision_' + ~~(Math.random() * 999999), url = location.protocol + '//click.sabavision.com/get_camp.php?id=" . $ad->id . "&appended_id='+id; d.write('<div id=\"' + id + '\"></div>'); d.write('<script type=\"text/javascript\" src=\"' + url + '\" async></scri' + 'pt>'); })(document);</script>";
endforeach;
if($count < $count_widget):
    $_count = $count_widget - $count;
    for($i = 1; $i <= $_count; $i++): ?>
        <div class="ad"><span class="ad">آگهی</span><span class="size">200*350</span></div>
    <?php
    endfor;
endif;
?>
