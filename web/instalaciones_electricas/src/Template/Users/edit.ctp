<div class="breadcrumbs">
    <?php 
    $this->Breadcrumbs->add( __('Home'), ['controller' => 'home', 'action' => 'home'], ['class' => 'cf']); 
    $this->Breadcrumbs->add( __('Users'), ['controller' => 'users', 'action' => 'home'], ['class' => 'cf']); 
    $this->Breadcrumbs->add( $user->name . ' ' . $user->surname, ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'cf']);

    echo $this->Breadcrumbs->render();?>
</div>

<div class="grid-container p-1">
    <div class="grid-x">
        <div class="large-10 cell ta-left">
            <h1><?= __('Edit User') ?></h1>
        </div>
        <?php 
        $url = ['controller' => 'users' , 'action' => 'home'];
        echo $this->element('Comun/btn_back', array('url' => $url));?>
    </div>

    <?php echo $this->element('../Users/Elements/form'); ?>

</div>