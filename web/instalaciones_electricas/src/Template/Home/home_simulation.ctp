<div class="grid-container" style="max-width: 80rem">

    <div class="grid-x grid-padding-x buttons-portal ta-center p-bottom-1">

        <div class="large-4 medium-4 cell p-top-1">
            <?php
            echo $this->Html->link( 
                $this->Html->image('/img/portal/objectives.png',array('class'=>'')), 
                array(
                    'controller' => 'home',
                    'action' => 'homeObjectives'
                ), 
                array(
                    'escape' => false,
                    'class' => 'objectives',
                    'title' => __('Objectives')
                )
            );
            ?>
            <div class="large-12 medium-12 cell div-font">
                <?php echo __('Objectives') ?>
            </div>
        </div>
        <div class="large-4 medium-4 cell p-top-1">
            <?php
            echo $this->Html->link( 
                $this->Html->image('/img/portal/scenarios.png',array('class'=>'')), 
                array(
                    'controller' => 'home',
                    'action' => 'homeScenarios'
                ), 
                array(
                    'escape' => false,
                    'class' => 'scenarios',
                    'title' => __('Scenarios')
                )
            );
            ?>
            <div class="large-12 medium-12 cell div-font">
                <?php echo __('Scenarios') ?>
            </div>
        </div>
        <div class="large-4 medium-4 cell p-top-1">
            <?php
            echo $this->Html->link( 
                $this->Html->image('/img/portal/download.png',array('class'=>'')), 
                array(
                    'controller' => 'home',
                    'action' => 'homeSimulation'
                ), 
                array(
                    'escape' => false,
                    'class' => 'simulation',
                    'title' => __('Download')
                )
            );
            ?>
            <div class="large-12 medium-12 cell div-font">
                <?php echo __('Download') ?>
            </div>
        </div>

    </div>

</div>