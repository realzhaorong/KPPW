<?php keke_tpl_class::checkrefresh('', '1399975838' );?><?php if(is_array($datalist)) { foreach($datalist as $k => $v) { ?><div data-img="<?php echo $v['ad_file'];?>" data-caption="<?php echo $v['ad_name'];?>"><a href="<?php echo $v['ad_url'];?>" data-video="false" target="_blank" title="<?php echo $v['ad_name'];?>"></a></div><?php } } ?><?php keke_tpl_class::ob_out();?>