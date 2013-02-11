<div class="timely ai1ec-single-event
	ai1ec-event-id-<?php echo $event->post_id; ?>
	<?php if ( $event->get_multiday() ) echo 'ai1ec-multiday'; ?>
	<?php if ( $event->allday ) echo 'ai1ec-allday'; ?>">

<a name="ai1ec-event"></a>

<div class="ai1ec-event-details clearfix">

			<div class="ai1ec-calendar-link btn pull-right"><?php echo $categories; ?></div>
	
	<div class="ai1ec-time">
		<div class="ai1ec-label"><?php _e( 'When:', AI1EC_PLUGIN_NAME ); ?></div>
		<div class="ai1ec-field-value"><?php echo $event->get_timespan_html(); ?></div>
	</div>





</div>


</div>
