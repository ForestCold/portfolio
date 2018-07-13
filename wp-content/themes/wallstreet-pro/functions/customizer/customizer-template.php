<?php
function wallstreet_template_customizer( $wp_customize ) {

//Template panel 
	$wp_customize->add_panel( 'wallstreet_template', array(
		'priority'       => 920,
		'capability'     => 'edit_theme_options',
		'title'      => __('Template settings', 'wallstreet'),
	) );
	
	
	// add section to manage Section heading
	$wp_customize->add_section(
        'section_heading',
        array(
            'title' => __('About page setting','wallstreet'),
			'panel'  => 'wallstreet_template',
			'priority'   => 100,
			)
    );
	
	// About us page Heading
	$wp_customize->add_setting(
		'wallstreet_pro_options[about_team_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Our great team','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[about_team_title]',
		array(
			'type' => 'text',
			'label' => __('Title','wallstreet'),
			'section' => 'section_heading',
		)
	);
	
	
	
	$wp_customize->add_setting(
		'wallstreet_pro_options[about_team_description]',
		array('capability'  => 'edit_theme_options',
		'default' => __('We offer great services to our clients','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[about_team_description]',
		array(
			'type' => 'textarea',
			'label' => __('Description','wallstreet'),
			'section' => 'section_heading',
		)
	);
	
	//enable/disable blog post meta content
	$wp_customize->add_section( 'blog_template' , array(
		'title'      => __('Blog meta settings', 'wallstreet'),
		'panel'  => 'wallstreet_template',
		'priority'   => 150,
   	) );
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[blog_meta_section_settings]',
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'type' => 'option',
		
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[blog_meta_section_settings]',
    array(
        'label' => __('Hide post meta i.e. author name, date of submission, category, tags from posts page','wallstreet'),
        'section' => 'blog_template',
        'type' => 'checkbox',
    )
	);
	
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[page_meta_section_settings]',
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'type' => 'option',
		
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[page_meta_section_settings]',
    array(
        'label' => __('Hide post meta i.e. author name, date of submission, category, tags from page','wallstreet'),
        'section' => 'blog_template',
        'type' => 'checkbox',
    )
	);
	
	
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[archive_page_meta_section_settings]',
    array(
        'default' => 0,
		'capability'     => 'edit_theme_options',
		'type' => 'option',
		
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[archive_page_meta_section_settings]',
    array(
        'label' => __('Hide post meta i.e. author name, date of submission, category, tags from archive page','wallstreet'),
        'section' => 'blog_template',
        'type' => 'checkbox',
    )
	);
	
	
	
	//Portfolio Texonomy Setting
	
	$wp_customize->add_section(
        'portfolio_texonomy',
        array(
            'title' => __('Portfolio category page setting','wallstreet'),
			'panel'  => 'wallstreet_template',
			'priority'   => 100,
			
			)
    );
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[taxonomy_portfolio_list]',
    array(
       'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'default' => 2,
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'wallstreet_pro_options[taxonomy_portfolio_list]',array(
	 'type' => 'select',
	 'label'   => __('Select column layout','wallstreet'),
    'section' => 'portfolio_texonomy',
	 'choices' => array(2=>2,3=>3,4=>4),
		)
	);
	
	//texonomy Title
	$wp_customize->add_setting(
		'wallstreet_pro_options[wallstreet_texonomy_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Featured portfolio project','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[wallstreet_texonomy_title]',
		array(
			'type' => 'text',
			'label' => __('Title','wallstreet'),
			'section' => 'portfolio_texonomy',
		)
	);
	
	
	//texonomy Description
	$wp_customize->add_setting(
		'wallstreet_pro_options[wallstreet_texonomy_desc]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Most popular of our works.','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[wallstreet_texonomy_desc]',
		array(
			'type' => 'textarea',
			'label' => __('Description','wallstreet'),
			'section' => 'portfolio_texonomy',
		)
	);
	
	//Portfolio Texonomy Setting
	
	$wp_customize->add_section(
        'project_realted',
        array(
            'title' => __('Project related page setting','wallstreet'),
			'panel'  => 'wallstreet_template',
			'priority'   => 100,
			
			)
    );
	
	
	//Related project Title
	$wp_customize->add_setting(
		'wallstreet_pro_options[related_portfolio_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Related projects','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[related_portfolio_title]',
		array(
			'type' => 'text',
			'label' => __('Title','wallstreet'),
			'section' => 'project_realted',
		)
	);
	
	
	//Related project Description
	$wp_customize->add_setting(
		'wallstreet_pro_options[related_portfolio_description]',
		array('capability'  => 'edit_theme_options',
		'default' => __('We offer great services to our clients','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[related_portfolio_description]',
		array(
			'type' => 'textarea',
			'label' => __('Description','wallstreet'),
			'section' => 'project_realted',
		)
	);
	
	
	
	
	
	
	
	//Conatct Page
	// add section to manage Address Section heading
	$wp_customize->add_section(
        'conatact_page',
        array(
            'title' => __('Contact page address settings','wallstreet'),
			'panel'  => 'wallstreet_template',
			'priority'   => 200,
			
			)
    );
	// Enable Contact Page Address Section:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_address_settings]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_address_settings]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable contact page address section','wallstreet'),
			'section' => 'conatact_page',
		)
	);
	
	
	

	
	
	
	// Conatct icon
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_address_icon]',
		array('capability'  => 'edit_theme_options',
		'default' => 'fa-map-marker', 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_address_icon]',
		array(
			'type' => 'text',
			'label' => __('Icon','wallstreet'),
			'section' => 'conatact_page',
		)
	);
	
	
	// Conatct address
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_address_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Address','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_address_title]',
		array(
			'type' => 'text',
			'label' => __('Title','wallstreet'),
			'section' => 'conatact_page',
		)
	);
	
	
	// Contact Aaddress Designation One:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_address_designation_one]',
		array('capability'  => 'edit_theme_options',
		'default' => 'Hoffman Parkway, P.O. Box 353', 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_address_designation_one]',
		array(
			'type' => 'text',
			'label' => __('Address one','wallstreet'),
			'section' => 'conatact_page',
		)
	);
	
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_address_designation_two]',
		array('capability'  => 'edit_theme_options',
		'default' => 'Mountain View. USA', 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_address_designation_two]',
		array(
			'type' => 'text',
			'label' => __('Address two','wallstreet'),
			'section' => 'conatact_page',
		)
	);
	
	// add section to manage conatct phone Section heading
	$wp_customize->add_section(
        'conatact_phone',
        array(
            'title' => __('Contact page phone settings','wallstreet'),
			'panel'  => 'wallstreet_template',
			'priority'   => 200,
			
			)
    );
	
	
	// Enable Contact Page phone Section:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_settings]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_settings]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable contact page phone section','wallstreet'),
			'section' => 'conatact_phone',
		)
	);
	
	
	
	
	// Conatct phone icon
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_icon]',
		array('capability'  => 'edit_theme_options',
		'default' => 'fa-phone', 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_icon]',
		array(
			'type' => 'text',
			'label' => __('Icon','wallstreet'),
			'section' => 'conatact_phone',
			
		)
	);
	
	
	// Contact Phone Title: 
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Phone','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_title]',
		array(
			'type' => 'text',
			'label' => __('Title','wallstreet'),
			'section' => 'conatact_phone',
		)
	);
	
	
	// Contact Phone Number One:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_number_one]',
		array('capability'  => 'edit_theme_options',
		'default' => '1-800-123-789', 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_number_one]',
		array(
			'type' => 'text',
			'label' => __('Phone number one','wallstreet'),
			'section' => 'conatact_phone',
		)
	);
	
	
	// Contact Phone Number Two:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_number_two]',
		array('capability'  => 'edit_theme_options',
		'default' => '1-800-123-789', 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_number_two]',
		array(
			'type' => 'text',
			'label' => __('Phone number two','wallstreet'),
			'section' => 'conatact_phone',
		)
	);
	
	
	
	// add section to manage Contact Page Email Section Settings
	$wp_customize->add_section(
        'conatact_mail',
        array(
            'title' => __('Contact page email settings','wallstreet'),
			'panel'  => 'wallstreet_template',
			'priority'   => 200,
			
			)
    );
	
	
	// Enable Contact Page Email Section:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_settings]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_settings]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable contact page email section','wallstreet'),
			'section' => 'conatact_mail',
		)
	);
	
	// Conatct Email icon
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_icon]',
		array('capability'  => 'edit_theme_options',
		'default' => 'fa-inbox', 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_icon]',
		array(
			'type' => 'text',
			'label' => __('Icon','wallstreet'),
			'section' => 'conatact_mail',
		)
	);
	
	
	// Contact Email Title: 
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Email','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_title]',
		array(
			'type' => 'text',
			'label' => __('Title','wallstreet'),
			'section' => 'conatact_mail',
		)
	);
	
	
	// Contact Email One:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_number_one]',
		array('capability'  => 'edit_theme_options',
		'default' => 'info@webriti.com', 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_number_one]',
		array(
			'type' => 'text',
			'label' => __('Email one','wallstreet'),
			'section' => 'conatact_mail',
		)
	);
	
	
	// Contact Email One:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_number_one]',
		array('capability'  => 'edit_theme_options',
		'default' => 'info@webriti.com', 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_number_one]',
		array(
			'type' => 'text',
			'label' => __('Email one','wallstreet'),
			'section' => 'conatact_mail',
		)
	);
	
	// Contact Email Number Two:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_number_two]',
		array('capability'  => 'edit_theme_options',
		'default' => 'www.webriti.com', 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_number_two]',
		array(
			'type' => 'text',
			'label' => __('Email two','wallstreet'),
			'section' => 'conatact_mail',
		)
	);
	
	
	
	
	
	
	// add section to manage Contact Form title Settings
	$wp_customize->add_section(
        'conatact_form',
        array(
            'title' => __('Contact page form setting','wallstreet'),
			'panel'  => 'wallstreet_template',
			'priority'   => 200,
			
			)
    );
	
	// Contact Form title:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_form_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Drop us a mail','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_form_title]',
		array(
			'type' => 'text',
			'label' => __('Title','wallstreet'),
			'section' => 'conatact_form',
		)
	);
	
	
	// Contact Form Description:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_form_description]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Feel free to write us a message','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_form_description]',
		array(
			'type' => 'text',
			'label' => __('Description','wallstreet'),
			'section' => 'conatact_form',
		)
	);
	
	// Conatct Google map
	$wp_customize->add_section(
        'conatact_page_map',
        array(
            'title' => __('Contact page Google Maps','wallstreet'),
			'panel'  => 'wallstreet_template',
			'priority'   => 190,
			
			)
    );
	
	// Google map:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_google_map_enabled]',
		array('capability'  => 'edit_theme_options',
		'default' => 'themes@webriti.com',
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_google_map_enabled]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Google map in contact page','wallstreet'),
			'section' => 'conatact_page_map',
		)
	);
	
	//Google map  tilte
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_google_map_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Location map','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_google_map_title]',
		array(
			'type' => 'text',
			'label' => __('Title','wallstreet'),
			'section' => 'conatact_page_map',
		)
	);
	
	//Google map URL
	
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_google_map_url]',
		array('capability'  => 'edit_theme_options',
		'default' => 'https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kota+Industrial+Area,+Kota,+Rajasthan&amp;aq=2&amp;oq=kota+&amp;sll=25.003049,76.117499&amp;sspn=0.020225,0.042014&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Kota+Industrial+Area,+Kota,+Rajasthan&amp;z=13&amp;ll=25.142832,75.879538',
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_google_map_url]',
		array(
			'type' => 'textarea',
			'label' => __('URL','wallstreet'),
			'section' => 'conatact_page_map',
		)
	);
	
	
	}
	add_action( 'customize_register', 'wallstreet_template_customizer' );
	?>