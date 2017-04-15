<?php

return [
	'page_title'          => 'Quickadmin генератор',
	'quickadmin_for'      => 'QuickAdminPanel за',
	'logout'              => 'Изход',
	'menu_manager'        => 'Управление на меню',
	'user_management'     => 'Управление на потребители',
	'back_to_adminpanels' => 'Назад към админ панелите',

	'sidebar' => [
		'add_menu_item' => 'Добави елемент в менюто',
		'crud_menu_item' => 'CRUD елемент',
		'non_crud_menu_item' => 'Не CRUD елемент',
		'parent_menu_item' => 'Главен меню елемент',
	],

	'menu' => [
		'no_items'                    => 'Не са открити меню елементи.',
		'download'                    => 'Свали админ панела (:price)',
		'download_vip'                => 'Свали админ панела',
		'view_files'                  => 'Виж Laravel файловете',
		'create_new_crud'             => 'Създай CRUD меню елемент',
		'create_new_custom'           => 'Създай не-CRUD меню елемент',
		'create_new_parent_menu_item' => 'Създай главен меню елемент',
		'drag_drop_info'              => 'Можете да промените позициите на менютата с привлачване и поставяне',
		'save_changes_warning'        => 'Промените ще бъдат записани когато кликнете на Запази позиции',
		'save_positions'              => 'Запази позиции',
		'title'                       => 'Наименование',
		'edit'                        => 'Промени',
		'clone'                       => 'Клонирай',
		'delete'                      => 'Изтрий',
		'used_as_relationship'        => 'Използвай като взаимовръзка',
		'how_to_use'                  => 'Как да използвам сваления админ панел',
		'how_to_use_instructions'     => '
		<div class="alert alert-success">
		    Успешно поръчахте админ панел. Сега можете да видиш файловете и да ги свалите неограничен брой пъти.
		</div>
		<p>1. Разархивирайте архива и го поставете в желаната директория</p>
		<p>2. Подгответе вашия .env файл с настройки за връзка с БД и други настройки</p>
		<p>3. Изпълнете командата "<i>composer install</i>"</p>
		<p>4. Изпълнете командата "<i>php artisan migrate --seed</i>". Забележка: seed е важно да бъде изпълнено, защото то ще създаде първия администратор за вас.</p>
		
		<br />
		
		<p>Шова е, отворете вашия домейн и влезте със следните данни:</p>
		<p>
		Email: admin@admin.com<br />
		Парола: password
		</p>
		
		Забавлявайте се с вашия админ панел!
		',
		'close'                       => 'Затвори',

		'payment' => [
			'name'        => 'Еднократно плащане',
			'description' => 'Свали пълен Laravel проект (:price)',
		],

		'edit_custom'           => 'Промени Персонализиран контролер',
		'edit_parent_menu_item' => 'Промени главен меню елемент',
		'clone_custom'           => 'Клонирай Персонализиран контролер',
		'clone_parent_menu_item' => 'Клонирай главен меню елемент',
		'parent_menu_item' => 'Главен меню елемент',
		'visual_title' => 'Визуално заглавие',
		'icon' => 'Икона',
		'link_to_icons' => 'Виж всички възможни икони - <a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a>',
	],

	'builder' => [
		'crud_settings' => 'CRUD Настройки',
		'add_fields' => 'Добави полета',
		'fields_notice' => '<b>Забележка:</b> <strong>НЕ Е</strong> необходимо да добавяте полета <b>ID</b> и <b>Timestamp</b> те се добавят автоматично.',
		'save_crud' => 'Запази CRUD',
		'parent_menu_item' => 'Главен меню елемент',
		'new_crud_title' => 'Наименование на нов CRUD',
		'new_visual_title' => 'Ново визуално заглавие',
		'crud_title' => 'CRUD Наименование',
		'visual_title' => 'Визуално заглавие',
		'crud_title_helper' => 'Можете да въведете само букви, цифри и интервали.',
		'crud_title_second_helper' => 'Използва се за създаване на меню елемнти, модели, контролери, БД миграции.
                <br/>Примерни заглавия: <b>Countries</b>, <b>Companies</b>, <b>Books</b> и др.',
		'visual_title_helper' => 'Визуалното заглавие за CRUD, което ще бъде показано в Менюто.',
		'cannot_change_title' => 'Не можете да променяте името на CRUD, само полетата.',
		'generate_following' => 'Ше генерираме следното:',
		'model' => 'Модел',
		'controller' => 'Контролер',
		'database_table' => 'БД таблица',
		'what_actions_to_generate' => 'Какви действия да генерирам?',
		'create' => 'Създай',
		'edit' => 'Промени',
		'show' => 'Покажи',
		'delete' => 'Изтрий',
		'generate_api' => 'Генерирай API контролер за този CRUD',
		'api_generated' => 'API was generated for this CRUD',
		'crud_icon' => 'CRUD Икона',
		'main_settings' => 'Главни настройки',
		'field_type' => 'Тип на поле',
		'field_key' => 'Ключ на поле',
		'belongs_to_relationship' => 'Ключ който ще бъде за ползван за име на функция (изключващо _id).',
		'field_label' => 'Етикет на поле',
		'validation' => 'Валидация',
		'nullable' => 'Възможност да бъде null',
		'in_list' => 'Покажи в списъка?',
		'in_create' => 'Покажи при създаване на нов?',
		'in_edit' => 'Покажи при промяна?',
		'additional_settings' => 'Допълнителни настройки',
		'ck_editor' => 'Използвай CKEDITOR?',
		'size_mb' => 'Максимален размер в MB',
		'width_px' => 'Максимална ширина в PX',
		'height_px' => 'Максимална височина в PX',
		'radio_values' => 'Радио бутон стойности:<br/> За да добавите стойност - кликнете бутона \'Добави нова стойност\' и добавете данните.',
		'label' => 'Етикет',
		'value' => 'Стойност',
		'add_new_key_value' => 'Добави нов ключ/стойност',
		'default_value' => 'Стойност по подразбиране',
		'relationship_model' => 'Модел на взаимовръзка',
		'relationship_field' => 'Поле за взаимовръзка',
		'enum_values' => 'ENUM стойности (разделени със запетая)',
		'save_changes' => 'Запази промените',
		'notice_save_crud' => 'Натиснете Запази CRUD за да запишете вашите променени/създадени полета.',
	],

	'buy_modal' => [
		'title' => 'Ето какво ще получите',
		'description' => 'Това е скрийшот на папката която ще свалите след плащането. Това е пълен Laravel проект за вашия :title - готов за употреба веднага!',
		'buy' => 'КУПИ И СВАЛИ СЕГА (:price)',
	],

	're-order_fields' => 'Преподреди полета',
	'field_type' => 'Тип поле',
	'database_column' => 'БД колона',
	'visual_title' => 'Визуално заглавие',
	'field_type_in_form' => 'Тип поле във форма',
	'field_name_in_form_and_database' => 'Име на поле във форма и БД',
	'field_label_in_form_and_index_page' => 'Етикет на поле във форма и индекс страница',
	'edit' => 'Промени',
	'remove_field_from_crud' => 'Премахни поле от CRUD',
	'remove' => 'Премахни',
	'add_field' => 'Добави поле',
	'you_need_at_least_one_field' => 'Трябва да има поне едно поле',

	'mb' => 'MB',
	'(w)_px' => '(ш) px',
	'(h)_px' => '(в) px',
	'save_crud' => 'Запази CRUD',
	'add_new_crud' => 'Добави нов CRUD',
	'download_full_laravel_project_999' => 'Свали пълен Laravel проект ($9.99)',
	'download_files' => 'Свали файловете',
	'view_files_free' => 'Виж файловете (БЕЗПЛАТНО)',
	'cruds' => 'CRUD-ове',
	'title' => 'Наименование',
	'created_at' => 'Създаден на',
	'updated_at' => 'Обновен на',
	'clone' => 'Клонирай',
	'no_cruds_created_yet' => 'Все още няма създадени CRUD-ове.',
	'one_time_payment' => 'Еднократно плащане',
	'file_viewer' => 'Преглед на файлове',
	'name' => 'Наименование',
	'last_modified' => 'Последна промяна',
	'modal_title' => 'Модално заглавие',
	'unauthorized' => 'Неоторизиран.',
	'your_session_has_expired_please_login_again' => 'Вашата сесия е изтекла. Моля, <a href="/login">влезте</a> отново.',
	'your_form_was_submitted_submitting_once_more_might_cause_bugs' => 'Вашата форма е изпратена. Изпращането повече от 1 път може да причини бъгове.',
	'need_help' => 'Нуждаете се от помощ?<br />Или персонализирано решение?',
	'infolaraveldailycom' => 'info@laraveldaily.com',
	'your_custom_controller' => 'Вашия персонализиран контролер!',

	'custom_controller_index' => 'Персонализиран контролер индекс.',
	'create' => 'Създай',
	'view' => 'Преглед',
	'dashboard' => 'Табло',
	'clone_crud' => 'Клонирай Crud',
	'optional_selection' => 'Опционален избор',
	'you_must_add_at_least_one_field_to_the_crud' => 'Трябва да добавите поне едно поле към CRUD',
	'edit_crud' => 'Промени Crud',
	'crud_deleted' => 'CRUD е изтрит',
	'they_could_not_load_your_custom_model' => 'Не може да бъде зареден вашия персонализиран модел...',
	'they_failed_to_get_table_information' => 'Не може да бъде показана информация за таблица...',
	'they_failed_to_destroy_information' => 'Не може да бъде унищожена информация...',
	'they_failed_to_store_data' => 'Не може да бъде записана информация...',
	'they_failed_to_store_the_data' => 'Информация не може да бъде записана...',
	'class' => 'Клас',
	'does_not_exist' => 'не съществува.',
	'they_failed_to_get_relations_information' => 'Не може да бъде показана информация за взаимовръзки...',
	'row_created' => 'Създаден е запис',
	'they_failed_to_get_required_information' => 'Не може да извадена необходимата информация...',
	'row_updated' => 'Обновен е запис',
	'row_deleted' => 'Изтрит е запис',
	'they_could_not_load_your_custom_relationship_model' => 'Не може да бъде зареден персонализиран модел за взаимовръзка...',
	'please_select' => 'Моля изберете',
	'page_not_found' => 'Страницата не е намерена',
	'this_item_has_child_items_attached_to_it' => 'Този елемент има прикачени поделементи',
	'they_failed_to_proceed_with_your_payment' => 'Грешка при обработване на плащането...',
	'request_does_not_have_a_stripetoken' => 'Заявката няма stripeToken',
	'quick_admin_panel_charge' => 'Такса за Quick Admin Panel',
	'they_failed_to_charge_your_card' => 'Грешка при таксуване на вашата кредитна карта...',
	'crud_builder' => 'CRUD генератор',

	// FIELDS
	'optional' => 'Опционално',
	'required' => 'Задължително',
	'required__unique' => 'Задължително и уникално',

	'no' => 'Не',
	'yes' => 'Да',
	'checked' => 'Маркирано',
	'unchecked' => 'Немаркирано',

	'text' => 'Текст',
	'email' => 'Email',
	'long_text' => 'Дълъг текст',
	'radio' => 'Радио бутон',
	'checkbox' => 'Чекбокс',
	'date_picker' => 'Дата елемент',
	'date_and_time_picker' => 'Дата и час елемент',
	'relationship_deprecated' => 'Взаимовръзка (Deprecated)',
	'belongsto_relationship' => 'Принадлежи към взаимовръзка',
	'file' => 'Файл',
	'photo' => 'Снимка',
	'password_hashed' => 'Парола (хеширана)',
	'money' => 'Валута',
	'number' => 'Число',
	'float' => 'Десетично число',
	'select_enum' => 'Избери ENUM',
	'add_new'                 => 'Добави нов',
	'are_you_sure'            => 'Сигурни ли сте?',
	'delete'            => 'Изтрий',
	'back_to_list' => 'Обратно към списъка',
	
	'roles'        => 'Роли',
	'user_actions' => 'Действия с потребители',
	'users'        => 'Потребители',

	'title' => 'Title',
	'administrator_can_create_other_users' => 'Администратор (може да създава други потребители)',
	'simple_user' => 'Обикновен потребител',

	'user' => 'Потребител',
	'action' => 'Действие',
	'action_model' => 'Действие модел',
	'action_id' => 'Действие id',
	'name' => 'Име',
	'email' => 'Email',
	'password' => 'Парола',
	'role' => 'Роля',
	'remember_token' => 'Запомни токен',

	// Pre-defined (global) translations for generated CRUDs
	// Generator will copy 'custom_crud' elements and add them to locale file of the generated CRUD
	// Note: do not change the 'custom_crud' key name - it's used in generators to get these translations
	'custom_crud' => [
		'create'                  => 'Създай',
		'save'                    => 'Запази',
		'edit'                    => 'Промени',
		'view'                    => 'Покажи',
		'update'                  => 'Обнови',
		'list'                    => 'Списък',
		'no_entries_in_table'     => 'Няма записи в таблицата',
		'custom_controller_index' => 'Персонализиран контролер.',
		'logout'                  => 'Изход',
		'add_new'                 => 'Добави нов',
		'are_you_sure'            => 'Сигурни ли сте?',
		'back_to_list'            => 'Обратно към списъка',
		'dashboard'				  => 'Табло',
		'delete'				  => 'Изтрий',
	],
];
