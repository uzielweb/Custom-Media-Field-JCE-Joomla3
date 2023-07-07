<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Form\Form;
use Joomla\CMS\Form\FormHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

// Form
jimport('joomla.form.formfield');

class JFormFieldCustomMedia extends JFormField
{
    protected $type = 'custommedia';

    // getLabel() left out

    public function getInput()
    {
        // if JCE is installed
        if (JPluginHelper::isEnabled('system', 'jce'))
        {
            $form = new Form('jform');
            
            // Load JCE mediafield
            $form->addFieldPath(JPATH_PLUGINS . '/fields/mediajce/fields');

            // Include jQuery
            HTMLHelper::_('jquery.framework');

            $document = Factory::getDocument();
            $document->addScript(Uri::root(true) . '/plugins/system/jce/js/media.js', array('version' => 'auto'));
            $document->addStyleSheet(Uri::root(true) . '/plugins/system/jce/css/media.css', array('version' => 'auto'));

            $field = FormHelper::loadFieldType('mediajce', true);
            $field->setForm($this->form);
            $field->setup($this->element, $this->value);
            return $field->getInput();
        }
        else
        {
            // Load Joomla mediafield
            FormHelper::addFieldPath(JPATH_LIBRARIES . '/joomla/form/fields');
            $field = FormHelper::loadFieldType('media', true);
            $field->setForm($this->form);
            $field->setup($this->element, $this->value);
            return $field->getInput();
        }
    }
}
?>
