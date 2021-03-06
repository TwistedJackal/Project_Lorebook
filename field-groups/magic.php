<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_magic',
		'title' => 'Magic',
		'fields' => array (
			array (
				'key' => 'field_5929e3c62ae75',
				'label' => 'Overview',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5929e3de2ae76',
				'label' => 'Name',
				'name' => 'magic-name',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Write as little or as much as you\'d like!',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e3fb2ae77',
				'label' => 'Type',
				'name' => 'magic-type',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What type of magic is this?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e4112ae78',
				'label' => 'Universe',
				'name' => 'magic-universe',
				'type' => 'post_object',
				'required' => 1,
				'post_type' => array (
					0 => 'universe',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5929e4252ae79',
				'label' => 'Description',
				'name' => 'magic-description',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'How would you describe this magic?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e4602ae7a',
				'label' => 'Appearance',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5929e4682ae7b',
				'label' => 'Visuals',
				'name' => 'magic-visuals',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What do the visual effects of this magic look like?',
				'maxlength' => '',
				'rows' => 5,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e4832ae7c',
				'label' => 'Effects',
				'name' => 'magic-effects',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What effects does this magic have?',
				'maxlength' => '',
				'rows' => 5,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e4942ae7d',
				'label' => 'Effects',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5929e49e2ae7e',
				'label' => 'Positive Effects',
				'name' => 'magic-positive-effects',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What positive effects does this magic have?',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e4bf2ae7f',
				'label' => 'Neutral Effects',
				'name' => 'magic-neutral-effects',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What neutral effects does this magic have?',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e4d32ae80',
				'label' => 'Negative Effects',
				'name' => 'magic-negative-effects',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What negative effects does this magic have?',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e4e82ae81',
				'label' => 'Alignment',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5929e4ee2ae82',
				'label' => 'Element',
				'name' => 'magic-element',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What element is this magic most closely aligned to?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e5052ae83',
				'label' => 'Deity',
				'name' => 'magic-deity',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'character',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5929e5222ae84',
				'label' => 'Requirements',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5929e52a2ae85',
				'label' => 'Resource Costs',
				'name' => 'magic-resource-costs',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What resource costs are required to use this magic?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e5442ae86',
				'label' => 'Materials Required',
				'name' => 'magic-materials-required',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What materials are required to use this magic?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e55e2ae87',
				'label' => 'Skills Required',
				'name' => 'magic-skills-required',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What skills are required to use this magic?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e5752ae88',
				'label' => 'Limitations',
				'name' => 'magic-limitations',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What limitations does this magic have? What can\'t it do?',
				'maxlength' => '',
				'rows' => 5,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e5932ae89',
				'label' => 'Notes',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5929e5992ae8a',
				'label' => 'Public Notes',
				'name' => 'magic-public',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'Write as little or as much as you\'d like!',
				'maxlength' => '',
				'rows' => 5,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e5ab2ae8b',
				'label' => 'Private Notes',
				'name' => 'magic-private',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'Write as little or as much as you\'d like!',
				'maxlength' => '',
				'rows' => 5,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929e5b42ae8c',
				'label' => 'Gallery',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5929e5bb2ae8d',
				'label' => 'Featured Image',
				'name' => 'magic-featured',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'uploadedTo',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'magic',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
