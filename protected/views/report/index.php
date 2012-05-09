    <?php
    $this->breadcrumbs=array(
            'Отчеты',
    );
    ?>

    <h1>Отчёт по заказам</h1>

    <div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'order-form',
            'enableAjaxValidation'=>false,
    )); ?>
        <div class="row">
            <?
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name'=>'start_at',
                'value' => (isset($_POST['start_at']) ? $_POST['start_at'] : date('d.m.Y')), 
                // additional javascript options for the date picker plugin
                'options'=>array(
                    "dateFormat" => "dd.mm.yy",
                    'showAnim'=>'fold',
                ),
                'htmlOptions'=>array(
                    'style'=>'height:20px;'
                ),
            ));
            ?>
        </div>
        <div class="row">
        <?
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name'=>'end_at',
            'value' => (isset($_POST['end_at']) ? $_POST['end_at'] : date('t.m.Y')), 
            // additional javascript options for the date picker plugin
            'options'=>array(
                "dateFormat" => "dd.mm.yy",
                'showAnim'=>'fold',
            ),
            'htmlOptions'=>array(
                'style'=>'height:20px;'
            ),
        ));
        ?>
    </div>

    <div class="row buttons">
            <?php echo CHtml::submitButton('Показать'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?

if (count($result)>0)
{
    $masters = array();
    foreach($result as $i=>$v)
    {
        $users[$v->master_id][] = $v;
    }
    echo '<div class="report"><table class="items">';
    foreach ($users as $i=>$v)
    {
        $rowclass="odd";
        echo '<tr><td width="280px" class="'.$rowclass.'" rowspan="'.(count($v)+1).'">'.Master::model()->findbypk($i)->name.'<br>'.count($v).' заказов</td></tr>';
        foreach ($v as $j=>$k)
        {
            if ($rowclass=='odd' ) {$rowclass='even';} else {$rowclass="odd";};
            
            echo '<tr class="'.$rowclass.'"><td>'.CHtml::link('#'.$k->id.' '.$k->service->name,array('order/view','id'=>$k->id)).'</td></tr>';
        }    
        if ($rowclass=='odd' ) {$rowclass='even';} else {$rowclass="odd";};
        echo '</tr>';
    }
}   echo '</table></div>' ;
?>

