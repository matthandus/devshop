<?php
/**
 * @file
 * Hosting service classes for the Hosting web server module.osting service classes for the Hosting web server module.
 */



class hostingService_http_ansible_apache extends hostingService_http_apache {
    public $type = 'ansible_apache';

    protected $has_restart_cmd = TRUE;

    function default_restart_cmd()
    {
        return parent::default_restart_cmd();
    }

    function form(&$form) {
        parent::form($form);
        $form['note'] = array(
            '#markup' => t('Your web server will be configured automatically.'),
            '#prefix' => '<p>',
            '#suffix' => '</p>',
        );
    }
}
