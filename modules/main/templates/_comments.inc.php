<?php $module = (isset($module)) ? $module : 'core'; ?>
<?php if ($tbg_user->canPostComments()): ?>
	<table border="0" cellpadding="0" cellspacing="0" style="margin: 5px;" id="comment_add_button"><tr><td class="nice_button" style="font-size: 13px; margin-left: 0;"><input type="button" onclick="$('comment_add_button').hide(); $('comment_add').show();$('comment_bodybox').focus();" value="<?php echo __('Add new comment'); ?>"></td></tr></table>
	<div id="comment_add" class="comment_add" style="<?php if (!(isset($comment_error) && $comment_error)): ?>display: none; <?php endif; ?>margin-top: 5px;">
		<div class="comment_add_main">
			<div class="comment_add_title"><?php echo __('Create a comment'); ?></div><br>
			<form id="comment_form" accept-charset="<?php echo strtoupper(TBGContext::getI18n()->getCharset()); ?>" action="<?php echo make_url('comment_add', array('comment_applies_id' => $target_id, 'comment_applies_type' => $target_type, 'comment_module' => $module)); ?>" method="post" onSubmit="addComment('<?php echo make_url('comment_add', array('comment_applies_id' => $target_id, 'comment_applies_type' => $target_type, 'comment_module' => 'core')); ?>', '<?php echo $comment_count_div; ?>');return false;">
				<label for="comment_visibility"><?php echo __('Comment visibility'); ?> <span class="faded_out">(<?php echo __('whether to hide this comment for "regular users"'); ?>)</span></label><br />
				<select class="comment_visibilitybox" id="comment_visibility" name="comment_visibility">
					<option value="1"><?php echo __('Visible for all users'); ?></option>
					<option value="0"><?php echo __('Visible for me, developers and administrators only'); ?></option>
				</select>
				<br />
				<label for="comment_bodybox"><?php echo __('Comment'); ?></label><br />
				<?php include_template('main/textarea', array('area_name' => 'comment_body', 'area_id' => 'comment_bodybox', 'height' => '200px', 'width' => '970px', 'value' => ((isset($comment_error) && $comment_error) ? $comment_error_body : ''))); ?>
				<div id="comment_add_indicator" style="display: none;">
					<?php echo image_tag('spinning_20.gif'); ?>
				</div>

				<div id="comment_add_controls" style="font-size: 12px;" class="comment_controls">
					<?php if ($target_type == TBGComment::TYPE_ISSUE): ?>
						<input type="checkbox" name="comment_save_changes" id="comment_save_changes" value="1"<?php if ($save_changes_checked): ?> checked<?php endif; ?>>&nbsp;<label for="comment_save_changes"><?php echo __('Save my changes with this comment'); ?></label>
						<br><br>
					<?php endif; ?>
					<input type="hidden" name="forward_url" value="<?php echo $forward_url; ?>">
					<?php echo __('%create_comment% or %cancel%', array('%create_comment%' => '<input type="submit" class="comment_addsave" value="'.__('Create comment').'" />', '%cancel%' => '<a href="javascript:void(0);" onClick="$(\'comment_add\').hide();$(\'comment_add_button\').show();">'.__('cancel').'</a>')); ?>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>
<div class="faded_out comments_none" id="comments_none" <?php if (TBGComment::countComments($target_id, $target_type) != 0): ?>style="display: none;"<?php endif; ?>><?php echo __('There are no comments'); ?></div>
<div id="comments_box">
	<?php foreach (TBGComment::getComments($target_id, $target_type) as $comment): ?>
		<?php

			$options = array('comment' => $comment);
			if (isset($issue))
				$options['issue'] = $issue;

			include_template('main/comment', $options);

		?>
	<?php endforeach; ?>
</div>