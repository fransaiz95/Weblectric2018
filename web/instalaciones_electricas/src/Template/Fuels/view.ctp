<?php echo $this->element('Comun/tabs_home');  ?>

<div class="grid-container" >
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h1><?= __('Fuel') ?></h1>
        </div>  
        <div class="large-3 medium-3 cell p-top-1">
            <span class="titles-view">
                <?php echo __('Name:') ?>
            </span>
            <?php echo $fuel['name']; ?>
        </div>

        <div class="large-3 medium-3 cell p-top-1">
            <span class="titles-view">
                <?php echo __('Fue cos:') ?>
            </span>
            <?php 
            echo $fuel['fue_cos']; ?>
        </div>

        <div class="large-3 medium-3 cell p-top-1">
            <span class="titles-view">
                <?php echo __('Production:') ?>
            </span>
            <?php 
            echo $fuel['production']; ?>
        </div>
    </div>
</div>

<?php $class = ($active_tab != ConstantesTabs::TECHNOLOGIES) ? 'd-none' : '';?>

<div class="grid-container p-top-1 cnt-tabs <?php echo $class?>" id="cnt-technologies">
    <div class="grid-x grid-padding-x">

        <div class="large-10 cell">
            <h1><?= __('Technologies') ?></h1>
        </div>  
        <?php 
        $url = ['controller' => 'fuels' , 'action' => 'home'];
        echo $this->element('Comun/btn_back', array('url' => $url)); ?>

        <div class="large-12 cell p-top-1">
            <div class="large-12 cell">
                
                <table cellpadding="0" cellspacing="0">
                    <thead>
                        <tr class="table100-head">
                            <th class="p-left-1"><?php echo __('Name')?></th>
                            <th class="ta-center"><?php echo __('Renowable') ?></th>
                            <th class="ta-center"><?php echo __('Power') ?></th>
                            <th class="ta-center"><?php echo __('Perc Con') ?></th>
                            <th class="ta-center"><?php echo __('Fue Con') ?></th>
                            <th class="actions"><?php echo __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($fuels_technologies as $fuel_technology){ ?>
                        <tr>
                            <td class="p-left-1"><?php echo h($fuel_technology['Technology']['name']); ?></td>
                            <td class="ta-center"><?php echo ($fuel_technology['Technology']['renowable'] == ConstantesBooleanas::SI) ? __('YES') : __('NO') ?></td>
                            <td class="ta-center"><?php echo h($fuel_technology['FuelsTechnology']['power']) ?></td>
                            <td class="ta-center"><?php echo h($fuel_technology['FuelsTechnology']['perc_con']) ?></td>
                            <td class="ta-center"><?php echo h($fuel_technology['FuelsTechnology']['fue_con']) ?></td>
                            <td class="actions">
                                <?php
                                // echo $this->Html->link( 
                                //     '<span class="c-primary"><ion-icon name="create"></ion-icon></span>',
                                //     [
                                //         'controller' => 'fuels_technologies',
                                //         'action' => 'edit',
                                //         $fuel_technology['FuelsTechnology']['id_fuel'],
                                //         $fuel_technology['FuelsTechnology']['id_technology']
                                //     ],
                                //     [
                                //         'escape' => false,
                                //         'style' => 'padding-left:4px;',
                                //         'title' => __('Edit')
                                //     ]
                                // );
                                echo $this->Form->postLink( 
                                    '<span class="c-primary"><ion-icon name="trash"></ion-icon></span>',
                                    [
                                        'controller' => 'fuels_technologies',
                                        'action' => 'delete', 
                                        $fuel_technology['FuelsTechnology']['id_fuel'],
                                        $fuel_technology['FuelsTechnology']['id_technology']                                    ], 
                                    [
                                        'escape' => false,
                                        'title' => __('Delete?'),
                                        'confirm' => __('Are you sure you want to delete technology: {0} of region: {1}?', $fuel_technology['Technology']['name'], $fuel_technology->name)
                                    ]
                                );
                                ?>
                            </td>
                        </tr>

                    <?php
                    }?>
                    </tbody>
                </table>
                <?php //echo $this->element('Comun/paginator'); ?>
            </div>
        </div>

    </div>
</div>


