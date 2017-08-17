<?php

namespace OuterEdge\Layout\Block\Adminhtml\Group\Edit\Tab;

use Magento\Backend\Block\Widget\Form\Generic;

class Main extends Generic
{
    /**
     * Prepare form
     *
     * @return $this
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareForm()
    {
        $group = $this->_coreRegistry->registry('group');

        $form = $this->_formFactory->create(
            ['data' => ['id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post']]
        );

        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Group Properties')]);

        if ($group->getId()) {
            $fieldset->addField('group_id', 'hidden', ['name' => 'group_id']);
        }

        $fieldset->addField(
            'group_code',
            'text',
            [
                'name'     => 'group[group_code]',
                'label'    => __('Code'),
                'title'    => __('Code'),
                'required' => true
            ]
        );

        $fieldset->addField(
            'title',
            'text',
            [
                'name'  => 'group[title]',
                'label' => __('Title'),
                'title' => __('Title')
            ]
        );
        $fieldset->addField(
            'description',
            'textarea',
            [
                'name'  => 'group[description]',
                'label' => __('Description'),
                'title' => __('Description')
            ]
        );
        $fieldset->addField(
            'sort_order',
            'text',
            [
                'name'  => 'group[sort_order]',
                'label' => __('Sort Order'),
                'title' => __('Sort Order')
            ]
        );

        $form->setValues($group->getData());
        $this->setForm($form);

        $this->_eventManager->dispatch('group_form_build_main_tab', ['form' => $form]);

        return parent::_prepareForm();
    }
}
