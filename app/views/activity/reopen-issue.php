<li onclick="window.location='<?php echo $issue->to(); ?>';">

    <div class="tag">
        <label class="label important"><?php echo trans('tinyissue.label_reopened'); ?></label>
    </div>

    <div class="data">
        <a href="<?php echo $issue->to(); ?>"><?php echo $issue->title; ?></a> <?php echo trans('tinyissue.was_reopened_by'); ?> <strong><?php echo $user->firstname . ' ' . $user->lastname; ?></strong>
        <span class="time">
            <?php echo date('F jS \a\t g:i A', strtotime($activity->created_at)); ?>
        </span>
    </div>

    <div class="clr"></div>
</li>
