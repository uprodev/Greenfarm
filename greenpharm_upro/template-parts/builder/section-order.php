<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $args['row']['is_options'] ? get_field($key . '_1', 'option') : $arg; ?>

  <?php if($iframe): ?>

    <section class="order-block"><?= $iframe ?></section>

  <?php endif; ?>

  <?php endif; ?>