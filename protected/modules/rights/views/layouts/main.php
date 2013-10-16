<?php $this->beginContent(Rights::module()->appLayout); ?>
<div class="row-fluid">
    <div class="span2">
        <div class="well sidebar-nav sidebar-nav-fixed well-small">
            <?php $this->renderPartial('/_leftmenu'); ?>
        </div>
    </div>

    <div class="span10" id="view-content">
        <!--Body content-->
        <div> <!-- class="well" id="rights"-->
            <div id="content">
                <?php if ($this->id !== 'install'): ?>

                <!-- <div id="menu" class="well"> -->

                    <?php //$this->renderPartial('/_menu'); ?>

                <!-- </div> -->

                <?php endif; ?>

                <?php //$this->renderPartial('/_flash'); ?>

                <?php echo $content; ?>

            </div>
            <!-- content -->
        </div>
    </div>
</div>
<?php $this->endContent(); ?>