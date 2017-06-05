		<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php //print '<pre>';print_r($row);exit;?>
<div class="event-img">
	<?php print $fields['field_event_image']->content; ?>
</div>
<div class="event-date">
	<div class="event-month event-date-p"><?php print $fields['field_date_and_time']->content; ?></div>
	<div class="event-day  event-date-p"><?php print $fields['field_date_and_time_2']->content; ?></div>
</div>
<div class="events-info">
	<div class="time events-info-txt"><?php print $fields['field_date_and_time_1']->content; ?></div>
	<div class="events-title events-info-txt"><?php print $row->node_title; ?></div>
	<div class="line events-info-txt"></div>
	<div class="lrn events-info-txt"> <?php print l(t('LEARN MORE'), 'node/'. $row->nid, array('attributes' => array('class' => 'btn1 sub-content-text'))); ?> <span class="btn-arr"></span></div>
</div>