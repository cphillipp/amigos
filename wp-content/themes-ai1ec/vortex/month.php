<?php echo $navigation; ?>
<table class="ai1ec-month-view ai1ec-popover-boundary">
	<thead>
		<tr>
			<?php foreach( $weekdays as $weekday ): ?>
				<th class="ai1ec-weekday"><?php echo $weekday; ?></th>
			<?php endforeach; // weekday ?>
		</tr>
	</thead>
	<tbody>
		<?php foreach( $cell_array as $week ): ?>
			<tr class="ai1ec-week">
				<?php foreach( $week as $day ): ?>
					<?php if( $day['date'] ): ?>
						<td <?php if( $day['today'] ) echo 'class="ai1ec-today"' ?>>

							<?php
								// TODO: This div should not be needed, but with multi-day
								// event bars it is required until a better method of arranging
								// events is contrived:
							if ( empty( $week['added_stretcher'] ) ) : ?>
								<div class="ai1ec-day-stretcher"></div>
								<?php $week['added_stretcher'] = true; ?>
							<?php endif; ?>

							<div class="ai1ec-day">
								<div class="ai1ec-date"><div class="ai1ec-load-view" <?php echo $data_type; ?> ><?php echo $day['date'] ?></div></div>
								<?php foreach ( $day['events'] as $event ): ?>
									<a href="<?php echo esc_attr( get_permalink( $event->post_id ) ) . $event->instance_id ?>"
										<?php echo $data_type_events; ?>
										<?php if ( $event->get_multiday() ) : ?>
											data-end-day="<?php echo $event->get_multiday_end_day(); ?>"
											data-start-truncated="<?php echo $event->start_truncated ? 'true' : 'false'; ?>"
											data-end-truncated="<?php echo $event->end_truncated ? 'true' : 'false'; ?>"
										<?php endif; ?>
										data-instance-id="<?php echo $event->instance_id; ?>"
										class="ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
											ai1ec-event-id-<?php echo $event->post_id; ?>
											ai1ec-event-instance-id-<?php echo $event->instance_id; ?>
											<?php if ( $event->allday ) echo 'ai1ec-allday'; ?>
											<?php if ( $event->get_multiday() ) echo 'ai1ec-multiday'; ?>"
										>

										<div class="ai1ec-event"
											style="<?php echo $event->get_color_style(); ?>">
											<span class="ai1ec-event-title">&nbsp;&nbsp;RESERVED</span>	
										</div>
									</a>
									<div class="ai1ec-popup hide">
										<?php if( $event->get_category_colors() ) : ?>
											<div class="ai1ec-category-colors"><?php echo $event->get_category_colors(); ?></div>
										<?php endif ?>

										<div class="ai1ec-event-time"><?php echo $event->get_timespan_html( 'short' ); ?></div>
	
									</div><!-- .ai1ec-popup.hide -->
								<?php endforeach // events ?>
							</div><!--/.ai1ec-day-->
						</td>
					<?php else: ?>
						<td class="ai1ec-empty"></td>
					<?php endif // date ?>
				<?php endforeach // day ?>
			</tr><!--/tr.ai1ec-week-->
		<?php endforeach // week ?>
	</tbody>
</table>
