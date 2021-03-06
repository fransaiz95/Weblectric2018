<?php
echo $this->Form->create(
    'Searcher',
    array(
        'url' => array(
            'controller' => 'technologies',
            'action' => 'home'
        ),
        'type' => 'get',
        'class' => 'well form-inline buscador'
    )
);?>
<div class="grid-container p-1">
    <div class="grid-x cnt-form">
        <div class="large-12 title-searcher">
            <?php echo __('Search:') ?>
        </div>
        <div class="large-3 p-1 input_field p-bottom-0">
            <?php echo $this->Form->input(
                'technology_name',
                array(
                    'type' => 'text',
                    'label' => __('Technology'),
                    'div' => '',
                )
            );
            ?>
        </div>
        <div class="large-2 p-1 input_field p-form">
            <?php echo $this->Form->input(
                'is_renewable_yes',
                array(
                    'type' => 'checkbox',
                    'id' => 'renewable-js',
                    'label' => __('Renewable'),
                )
            );
            ?>
        </div>
        <div class="large-2 p-1 input_field p-form">
            <?php echo $this->Form->input(
                'is_renewable_no',
                array(
                    'type' => 'checkbox',
                    'id' => 'no-renewable-js',
                    'label' => __('No Renewable'),
                )
            );
            ?>
        </div>
        <div class="large-2 p-1 ta-right">
            <?php echo $this->Form->button(
                '<span class="c-primary"><ion-icon name="search"></ion-icon></span>',
                array(
                    'escape' => false,
                    'class' => 'btn-search',
                    'value' => 'submit'
                )
            );?>
        </div>
    </div>
</div>
<?php echo $this->Form->end();?>