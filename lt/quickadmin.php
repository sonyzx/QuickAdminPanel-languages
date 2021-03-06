<?php

return [
	'page_title' => 'Adminpanelių generatorius',
	'quickadmin_for' => 'Adminpanelė',
	'logout' => 'Atsijungti',
	'menu_manager' => 'Meniu valdymas',
	'user_management'     => 'Vartotojų valdymas',
	'back_to_adminpanels' => 'Grįžti prie adminpanelių',

	'sidebar' => [
		'add_menu_item' => 'Pridėti meniu punktą',
		'crud_menu_item' => 'CRUD meniu',
		'non_crud_menu_item' => 'Non-CRUD meniu',
		'parent_menu_item' => 'Parent meniu',
	],

	'menu' => [
		'no_items'                    => 'Meniu tuščias.',
		'download'                    => 'Atsisiųsti sugeneruotą adminpanelę (:price)',
		'download_vip'                => 'Atsisiųsti adminpanelę',
		'view_files'                  => 'Peržiūrėti Laravel failus',
		'create_new_crud'             => 'Naujas CRUD meniu',
		'create_new_custom'           => 'Naujas non-CRUD meniu',
		'create_new_parent_menu_item' => 'Naujas Parent meniu',
		'drag_drop_info'              => 'Galite keisti meniu pozicijas vilkdami meniu punktus',
		'save_changes_warning'        => 'Pakeitimai bus išsaugoti, kai paspausite "Išsaugoti pozicijas"',
		'save_positions'              => 'Išsaugoti pozicijas',
		'title'                       => 'Pavadinimas',
		'edit'                        => 'Redaguoti',
		'clone'                       => 'Dublikuoti',
		'delete'                      => 'Ištrinti',
		'used_as_relationship'        => 'Surištas su kitu CRUD',
		'how_to_use'                  => 'Kaip naudoti parsisiųstą adminpanelę?',
		'how_to_use_instructions'     => '
		<div class="alert alert-success">
			Jūs sėkmingai nusipirkote adminpanelę. Nuo šiol galite neribotai peržiūrėti ir atsisiųsti jos failus. 
		</div>
		<p>1. Išarchyvuokite archyvą ir įkelkite jį į norimą direktoriją</p>
		<p>2. Čia paruoškite savo .env failą su duomenų bazės ir kitais nustatymais.</p>
		<p>3. Paleiskite "<i>composer install</i>" komandą</p>
		<p>4. Paleiskite "<i>php artisan migrate --seed</i>" koamndą. Pastaba: "seed" dalis yra svarbi, nes ji sukurs jums skirtą administratoriaus vartotoją.</p>
		
		<br />
		
		<p>Tai viskas, užeikite į savo adminpanelę ir prisijunkite:</p>
		<p>
		El. paštas: admin@admin.com<br />
		Slaptažodis: password
		</p>
		
		Smagaus naudojimosi!
		',
		'close'                       => 'Uždaryti',

		'payment' => [
			'name'        => 'Vienkartinis mokėjimas',
			'description' => 'Atsisiųsti paruoštą Laravel projektą (:price)',
		],

		'edit_custom'           => 'Redaguoti Controller',
		'edit_parent_menu_item' => 'Redaguoti tėvinį meniu punktą',
		'clone_custom'           => 'Dublikuoti Controller',
		'clone_parent_menu_item' => 'Dublikuoti tėvinį meniu punktą',
		'parent_menu_item' => 'Tėvinis meniu punktas',
		'visual_title' => 'Vizualus pavadinimas',
		'icon' => 'Ikona',
		'link_to_icons' => 'Visos prieinamos ikonos - <a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a>',
	],

	'builder' => [
		'crud_settings' => 'CRUD nustatymai',
		'add_fields' => 'Pridėti laukelių',
		'fields_notice' => '<b>Pastaba:</b> jūs <strong>neturite</strong> pridėti <b>ID</b> ir <b>Timestamps</b> laukelių - jie pridedami automatiškai.',
		'save_crud' => 'Išsaugoti CRUD',
		'parent_menu_item' => 'Tėvinis meniu punktas',
		'new_crud_title' => 'Naujas CRUD pavadinimas',
		'new_visual_title' => 'Naujas vizualus pavadinimas',
		'crud_title' => 'CRUD pavadinimas',
		'visual_title' => 'Vizualus pavadinimas',
		'crud_title_helper' => 'Naudokite tik raides, skaičius ir tarpus.',
		'crud_title_second_helper' => 'Naudojamas sukurti meniu punktą, modelį, controller\'į, duomenų bazės migracijas.
                <br/>Pavadinimo pavyzdžiai: <b>Countries</b>, <b>Companies</b>, <b>Books</b> ir t.t.',
		'visual_title_helper' => 'Vizualus pavadinimas, kuris bus naudojamas meniu punkto atvaizdavimui.',
		'cannot_change_title' => 'Jūs negalite keisti CRUD pavadinimo, tik laukelius.',
		'generate_following' => 'Mes sugeneruosime:',
		'model' => 'Modelį',
		'controller' => 'Controllerį',
		'database_table' => 'Duomenu bazės lentelę',
		'what_actions_to_generate' => 'Kokius veiksmus generuoti?',
		'create' => 'Sukurti',
		'edit' => 'Redaguoti',
		'show' => 'Peržiūrėti',
		'delete' => 'Ištrinti',
		'generate_api' => 'Generuoti API Controllerį šiam CRUD',
		'api_generated' => 'API buvo sugeneruotas šiam CRUD',
		'crud_icon' => 'CRUD ikona',
		'main_settings' => 'Pagrindiniai nustatymai',
		'field_type' => 'Laukelio tipas',
		'field_key' => 'Laukelio raktažodis',
		'belongs_to_relationship' => 'Raktažodis, kuris bus naudojamas kaip funkcijos pavadinimas (išskyrus _id).',
		'field_label' => 'Laukelio pavadinimas',
		'validation' => 'Validacija',
		'nullable' => 'Nullable',
		'in_list' => 'Sąraše?',
		'in_create' => 'Sukurime?',
		'in_edit' => 'Redagavime?',
		'additional_settings' => 'Papildomi nustatymai',
		'ck_editor' => 'Naudoti CKEDITOR?',
		'size_mb' => 'Maks. dydis (MB)',
		'width_px' => 'Maks. ilgis (PX)',
		'height_px' => 'Maks. aukštis (PX)',
		'radio_values' => 'Radio reikšmės:<br/> Tam, kad pridėti reikšmę - spauskite ant \'Pridėti naują reikšmę\' mygtuko ir įveskite duomenis.',
		'label' => 'Pavadinimas',
		'value' => 'Reikšmė',
		'add_new_key_value' => 'Pridėti naują reikšmę',
		'default_value' => 'Numatytoji reikšmė',
		'relationship_model' => 'Relationship modelis',
		'relationship_field' => 'Relationship laukelis',
		'enum_values' => 'ENUM reikšmės (atskirtos kableliu)',
		'save_changes' => 'Išsaugoti pakeitimus',
	],

	'buy_modal' => [
		'title' => 'Štai ką jūs gausite',
		'description' => 'Nuotraukoje pavaizduota direktorija, kurią atsisiųsite po apmokėjimo. Tai pilnas Laravel projektas skirtas jūsų adminpanelei ":title". Paruoštas naudoti iš karto!',
		'buy' => 'PIRKTI IR ATSISIŲSTI DABAR (:price)',
	],

	're-order_fields' => 'Re-order fields',
	'field_type' => 'Laukelio tipas',
	'database_column' => 'Duomenų bazės laukelis',
	'visual_title' => 'Vizualus pavadinimas',
	'field_type_in_form' => 'Laukelio tipas formoje',
	'field_name_in_form_and_database' => 'Laukelio pavadinimas formoje ir duomenų bazėje',
	'field_label_in_form_and_index_page' => 'Laukelio antraštė formoje ir sąraše',
	'edit' => 'Redaguoti',
	'remove_field_from_crud' => 'Pašalinti laukelį iš CRUD',
	'remove' => 'Pašalinti',
	'add_field' => 'Pridėti laukelį',
	'you_need_at_least_one_field' => 'Reikalingas bent vienas laukelis',

	'mb' => 'MB',
	'(w)_px' => '(w) px',
	'(h)_px' => '(h) px',
	'save_crud' => 'Išsaugoti CRUD',
	'add_new_crud' => 'Sukurti naują CRUD',
	'download_full_laravel_project_999' => 'Atsisiųsti paruoštą Laravel projektą ($9.99)',
	'download_files' => 'Atsisiųsti failus',
	'view_files_free' => 'Peržiūrėti failus (NEMOKAMAI)',
	'cruds' => 'CRUDai',
	'title' => 'Pavadinimas',
	'created_at' => 'Sukurta',
	'updated_at' => 'Atnaujinta',
	'clone' => 'Dublikuoti',
	'no_cruds_created_yet' => 'Nėra sukurta jokių CRUD.',
	'one_time_payment' => 'Vienkartinis mokėjimas',
	'file_viewer' => 'Failų peržiūra',
	'name' => 'Pavadinimas',
	'last_modified' => 'Paskutinį kartą keista',
	'modal_title' => 'Langelio pavadinimas',
	'unauthorized' => 'Nesuteiktos teisės.',
	'your_session_has_expired_please_login_again' => 'Jūsų sesija pasibaigė. Prašome <a href="/login">prisijungti</a> iš naujo.',
	'your_form_was_submitted_submitting_once_more_might_cause_bugs' => 'Jūsų užklausa jau buvo išsiųsta. Pakartotinis išsiųntimas gali sukelti klaidų.',
	'need_help' => 'Reikalinga pagalba?',
	'infolaraveldailycom' => 'info@laraveldaily.com',
	'your_custom_controller' => 'Jūsų controlleris!',
	// Custom crud
	'list' => 'Sąrašas',
	'no_entries_in_table' => 'Lentelėje įrašų nėra.',
	'custom_controller_index' => 'Controllerio index puslapis.',
	'create' => 'Sukurti',
	'view' => 'Peržiūrėti',
	'dashboard' => 'Pradžia',
	'clone_crud' => 'Dublikuoti CRUD',
	'optional_selection' => 'Neprivalomas pasirinkimas',
	'you_must_add_at_least_one_field_to_the_crud' => 'Turite pridėti bent vieną laukelį',
	'edit_crud' => 'Redaguoti Crud',
	'crud_deleted' => 'CRUD ištrintas',
	'they_could_not_load_your_custom_model' => 'They could not load your custom model...',
	'they_failed_to_get_table_information' => 'They failed to get table information...',
	'they_failed_to_destroy_information' => 'They failed to destroy information...',
	'they_failed_to_store_data' => 'They failed to store data...',
	'they_failed_to_store_the_data' => 'They failed to store the data...',
	'class' => 'Klasė',
	'does_not_exist' => 'neegzistuoja.',
	'they_failed_to_get_relations_information' => 'They failed to get relations information...',
	'row_created' => 'Įrašas sukurtas',
	'they_failed_to_get_required_information' => 'They failed to get required information...',
	'row_updated' => 'Įrašas atnaujintas',
	'row_deleted' => 'Įrašas ištrintas',
	'they_could_not_load_your_custom_relationship_model' => 'They could not load your custom relationship model...',
	'please_select' => 'Prašome pasirinkti',
	'page_not_found' => 'Puslapis nerastas',
	'this_item_has_child_items_attached_to_it' => 'Šis elementas turi jam priskirtų kitų elementų',
	'they_failed_to_proceed_with_your_payment' => 'They failed to proceed with your payment...',
	'request_does_not_have_a_stripetoken' => 'Request does not have a stripeToken',
	'quick_admin_panel_charge' => 'Quick Admin Panel mokėjimas',
	'they_failed_to_charge_your_card' => 'They failed to charge your card...',
	'crud_builder' => 'CRUD generatorius',

	'optional' => 'Neprivalomas',
	'required' => 'Privalomas',
	'required__unique' => 'Privalomas ir unikalus',

	'no' => 'Ne',
	'yes' => 'Taip',
	'checked' => 'Pažymėta',
	'unchecked' => 'Nepažymėta',

	'text' => 'Tekstas',
	'email' => 'El. paštas',
	'long_text' => 'Ilgas tekstas',
	'radio' => 'Radio',
	'checkbox' => 'Checkbox',
	'date_picker' => 'Data',
	'date_and_time_picker' => 'Data ir laikas',
	'relationship_deprecated' => 'Relationship (Deprecated)',
	'belongsto_relationship' => 'BelongsTo Relationship',
	'file' => 'Failas',
	'photo' => 'Nuotrauka',
	'password_hashed' => 'Slaptažodis (užkoduotas)',
	'money' => 'Pinigai',
	'number' => 'Skaičius',
	'float' => 'Float',
	'select_enum' => 'Pasirinkimas (ENUM)',
	'add_new'                 => 'Pridėti naują',
	'are_you_sure'            => 'Ar esate tikri?',
	'delete'            => 'Ištrinti',

	'roles'        => 'Rolės',
	'user_actions' => 'Vartotojų veiksmai',
	'users'        => 'Vartotojai',
	'title' => 'Pavadinimas',
	'administrator_can_create_other_users' => 'Administratorius (gali kurti vartotojus)',
	'simple_user' => 'Paprastas vartotojas',

	'user' => 'Vartotojas',
	'action' => 'Veiksmas',
	'action_model' => 'Veiksmo modelis',
	'action_id' => 'Veiksmo id',
	'name' => 'Vardas',
	'email' => 'El. paštas',
	'password' => 'Slaptažodis',
	'role' => 'Rolė',
	'remember_token' => 'Priminimo kodas',

	// CUSTOM CRUD (basically we need to include this in generated lang file). This will be done automatically
	// Never change the name of an array (`custom_crud`)
	// Change/Add/Remove only the array items - keys and values.
	'custom_crud' => [
		'save'                    => 'Išsaugoti',
		'update'                  => 'Atnaujinti',
		'list'                    => 'Sąrašas',
		'no_entries_in_table'     => 'Įrašų nėra.',
		'create'                  => 'Sukurti',
		'edit'                    => 'Redaguoti',
		'view'                    => 'Peržiūrėti',
		'custom_controller_index' => 'Papildomo Controller\'io puslapis.',
		'logout'                  => 'Atsijungti',
		'add_new'                 => 'Pridėti naują',
		'are_you_sure'            => 'Ar esate tikri?',
		'back_to_list'            => 'Grįžti į sąrašą',
		'dashboard'				  => 'Pagrindinis',
		'delete'				  => 'Trinti',
	],
];
