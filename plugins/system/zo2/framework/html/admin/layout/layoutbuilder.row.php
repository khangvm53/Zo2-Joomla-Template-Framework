<?php
$jDoc = $row->getJdoc();
$blockName = $row->get('name');
$jDocName = $jDoc->get('name');
$children = $row->get('children', array());
$properties = $row->getProperties();
if (isset($properties['children']))
{
    unset($properties['childrent']);
}
?>

<div class="sortable-row <?php echo $row->getClass(); ?> <?php echo $child ? 'row-child' : 'row-parent'; ?>"
     id="zo2-<?php echo $blockName; ?>"
     data-zo2="<?php echo htmlentities(Zo2HelperEncode::json($properties)); ?>"
     >
    <div class="row-control">
        <div class="parent-container clearfix row">
            <div class="row-size">
                <a title="Decrease width" href="#" class="row-decrease"><i data-original-title="Decrease width" class="hasTooltip fa fa-angle-double-left"></i></a>
                <span class="column_size">1/1</span>
                <a title="Increase width" href="#" class="row-increase"><i data-original-title="Increase width" class="hasTooltip fa fa-angle-double-right"></i></a>
            </div>
            <div class="row-name">
                <span><?php echo $row->get('name'); ?></span>
            </div>
            <div class="row-controls">
                <?php echo $row->getControls(); ?>
            </div>
        </div>
        <?php if (count($children) > 0) : ?>
            <div class="children-container row sortable-row connectedSortable">
                <?php
                {
                    foreach ($children as $child)
                    {
                        $this->set('child', true);
                        $this->set('row', new Zo2LayoutbuilderRow($child));
                        $this->load('Zo2://html/admin/layout/layoutbuilder.row.php');
                    }
                }
                ?>
            </div>
        <?php endif; ?>
    </div>
</div>