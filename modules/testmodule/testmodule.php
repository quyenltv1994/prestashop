<?php
if (!defined('_PS_VERSION_')) {
    exit;
}
require(dirname(__FILE__).'/menushopheadertop.php');
class TestModule extends Module
{
    public $table;
    function __construct(){
        $this->name = 'testmodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Firstname Lastname';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('My module');
        $this->description = $this->l('Description of my module.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('testmodule')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function install(){
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        if (!parent::install() ||
            !$this->registerHook('leftColumn') ||
            !$this->registerHook('header') ||
            !Configuration::updateValue('testmodule', 'my friend') || !$this->installDb()
        ) {
            return false;
        }

        return true;
    }

    public function installDb(){
        return (Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'menu_shop_top_header` (
        `id_menu_shop_top_header` int(11) unsigned NOT NULL AUTO_INCREMENT,
                                `id_shop` INT( 11 ) UNSIGNED NOT NULL,
                                `link` varchar( 255 ) NOT NULL,
                                `label` varchar( 255 ) NOT NULL,
                                `order` INT( 11 ) UNSIGNED NOT NULL,
                                PRIMARY KEY (`id_menu_shop_top_header`),
                                UNIQUE  `SOMETHING_UNIQ` (  `id_shop` )
                                ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8'));
    }

    public function uninstall(){
        if (!parent::uninstall() ||
            !Configuration::deleteByName('testmodule')
        ) {
            return false;
        }

        return true;
    }

    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        $output = null;
        $args = array();
        if(Tools::isSubmit('submitaddmenuitem')){
            $label = strval(Tools::getValue('label'));
            $link = strval(Tools::getValue('link'));
            $order = strval(Tools::getValue('order'));
            $args[] = array(
                'id_shop' => 1,
                'link'  => pSQL($link),
                'label' => pSQL($label),
                'order' => (int)$order,

            );
            $this->table = 'menu_shop_top_header';
            if(!MenuShopHeaderTop::update($this->table, $args)){
                $output .= $this->displayError($this->l('There are some errors when insert data.'));
            }else{
                $output .= $this->displayConfirmation($this->l('Menu Item added.'));
            }

        }
        return $output.= $this->renderList().$this->renderForm();
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitaddmenuitem';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getAddForm()));
    }

    protected function getAddForm()
    {
        $options[]['val'] = '1';
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Add Menu Top Header Item'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Label'),
                        'name' => 'label',
                        'required' => true
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Link'),
                        'name' => 'link',
                        'required' => true
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Order'),
                        'value' => '0',
                        'name' => 'order',
                        'required' => true,

                    )
                ),
                'submit' => array(
                    'title' => $this->l('Add'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'wikimow_filter_manufacturer_is_active_' => Tools::getValue('wikimow_filter_manufacturer_is_active_', Configuration::get('wikimow_filter_manufacturer_is_active')),

        );
    }

    public function renderList()
    {
        $links = array();

        $links = array_merge($links, MenuShopHeaderTop::getAll());

        $fields_list = array(
            'id_menu_shop_top_header' => array(
                'title' => $this->l('Link ID'),
                'type' => 'text',
            ),
            'label' => array(
                'title' => $this->l('Label'),
                'type' => 'text',
            ),
            'link' => array(
                'title' => $this->l('Link'),
                'type' => 'link',
            ),
            'order' => array(
                'title' => $this->l('New window'),
                'type' => 'text'
            )
        );

        $helper = new HelperList();
        $helper->shopLinkType = '';
        $helper->simple_header = true;
        $helper->identifier = 'id_menu_shop_top_header';
        $helper->table = 'ps_menu_shop_top_header';
        $helper->actions = array('edit', 'delete');
        $helper->show_toolbar = false;
        $helper->module = $this;
        $helper->title = $this->l('Link list');
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        return $helper->generateList($links, $fields_list);
    }
}