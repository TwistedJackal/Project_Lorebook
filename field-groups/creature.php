<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_creature',
		'title' => 'Creature',
		'fields' => array (
			array (
				'key' => 'field_59290146810f0',
				'label' => 'Overview',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5929015a810f1',
				'label' => 'Name',
				'name' => 'creature-name',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'What is the name of this creature?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_592901ab810f2',
				'label' => 'Description',
				'name' => 'creature-description',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'How would you describe this creature?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_592901da810f3',
				'label' => 'Type of creature',
				'name' => 'creature-type-of-creature',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What type of creature is this?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_59290231810f4',
				'label' => 'Universe',
				'name' => 'creature-universe',
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
				'key' => 'field_59290298810f5',
				'label' => 'Looks',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_592902ef810f6',
				'label' => 'Color',
				'name' => 'creature-color',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What colors does this creature come in?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929030f810f7',
				'label' => 'Shape',
				'name' => 'creature-shape',
				'type' => 'textarea',
				'default_value' => 'How would you describe the shape of this creature?',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_59290332810f8',
				'label' => 'Size',
				'name' => 'creature-size',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'How big (or small) is this creature usually?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_59290357810f9',
				'label' => 'Notable Features',
				'name' => 'creature-notable-features',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What physical features are most notable for this creature',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_592903a1810fa',
				'label' => 'Materials',
				'name' => 'creature-materials',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What materials (feathers, scales, etc) is this creature made of?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_592903d3810fb',
				'label' => 'Traits',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_592903e3810fc',
				'label' => 'Aggressiveness',
				'name' => 'creature-aggressiveness',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'How aggressive is this creature?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_59290436810fd',
				'label' => 'Method Of Attack',
				'name' => 'creature-method-of-attack',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What methods does this creature use to attack?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929048b810fe',
				'label' => 'Method of defense',
				'name' => 'creature-method-of-defense',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'How does this creature defend itself?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_592904d0810ff',
				'label' => 'Maximum Speed',
				'name' => 'creature-maximum-speed',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'How fast can this creature move?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_592904ff81100',
				'label' => 'Strengths',
				'name' => 'creature-strengths',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What are the notable strengths of this creature',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929052481101',
				'label' => 'Weakness',
				'name' => 'creature-weakness',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What are the notable weaknesses of this creature',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929055381102',
				'label' => 'Sounds',
				'name' => 'creature-sounds',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What sounds does this creature make?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929056f81103',
				'label' => 'Spoils',
				'name' => 'creature-spoils',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'When hunted, what spoils does this creature leave behind?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929059b81104',
				'label' => 'Habitat',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_592905ab81105',
				'label' => 'Preferred Habitat',
				'name' => 'creature-preferred-habitat',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What kind of habitat is best for this creature?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_592905da81106',
				'label' => 'Habitat',
				'name' => 'creature-habitat',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'location',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 1,
			),
			array (
				'key' => 'field_5929060881107',
				'label' => 'Food Source',
				'name' => 'creature-food-source',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'Where does this creature find its food?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929062d81108',
				'label' => 'Migratory Pattern',
				'name' => 'creature-migratory-pattern',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'Does this creature have any migratory patterns?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929065a81109',
				'label' => 'Reproductive Patterns',
				'name' => 'creature-reproductive-patterns',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'How does this creature reproduce?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_592906808110a',
				'label' => 'Herding Pattern',
				'name' => 'creature-herding-pattern',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What herd patterns does this creature have?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_592906a38110b',
				'label' => 'Comparisons',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_592906ba8110c',
				'label' => 'Similar Creatures',
				'name' => 'creature-similar-creatures',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What other animals is this creature most like?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_592906ec8110d',
				'label' => 'Symbolisms',
				'name' => 'creature-symbolisms',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'What symbolisms does this creature hold in your world?',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929071b8110e',
				'label' => 'Related Creatures',
				'name' => 'creature-related-creatures',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'creature',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 1,
				'multiple' => 1,
			),
			array (
				'key' => 'field_592907498110f',
				'label' => 'Notes',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5929075481110',
				'label' => 'Public Notes',
				'name' => 'creature-public-notes',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'Write as little or as much as you want!',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929077281111',
				'label' => 'Private Notes',
				'name' => 'creature-private-notes',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'Write as little or as much as you want!',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5929078c81112',
				'label' => 'Gallery',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5929079781113',
				'label' => 'Featured Image',
				'name' => 'creature-featured-image',
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
					'value' => 'creature',
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
