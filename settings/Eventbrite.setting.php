<?php

use CRM_Eventbrite_ExtensionUtil as E;

return array(
  'eventbrite_api_token' => array(
    'group_name' => 'Eventbrite Settings',
    'group' => 'eventbrite',
    'name' => 'eventbrite_api_token',
    'type' => 'String',
    'add' => '5.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('See "Creating Your Personal OAuth Token" on the Eventbrite documentation page <a href="https://www.eventbrite.com/platform/docs/authentication" target="blank">Authenticating Your Access to the Eventbrite API</a>.'),
    'title' => E::ts('Eventbrite Personal OAuth Token'),
    'html_type' => 'Text',
    'quick_form_type' => 'Element',
  ),
  'eventbrite_api_organization_id' => array(
    'group_name' => 'Eventbrite Settings',
    'group' => 'eventbrite',
    'name' => 'eventbrite_api_organization_id',
    'type' => 'String',
    'add' => '5.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Eventbrite system ID for the Eventbrite organization to which all linked events will belong.'),
    'title' => E::ts('Eventbrite API Organization ID'),
    'html_type' => 'Text',
  ),
);
