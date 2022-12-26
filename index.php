<?php

require_once __DIR__ . '/vendor/autoloader.php';

$page = $_GET['p'];
if(array_key_exists('p', $_GET))
{
	switch($page)
	{
		case 'admin_home':
			$adminController = new Controller\Controller();
			$adminController ->displayAdminHome();
			break;
		case 'admin_registration':
			$adminController = new Controller\Controller();
			$adminController ->displayAdminRegistration();
			break;
		case 'add_new_admin':
			$adminController  = new Controller\Controller();
			$adminController ->createNewAdmin();
			break;
		case 'admin_login':
			$adminController  = new Controller\Controller();
			$adminController ->displayAdminLogin();
		break;
		case 'add_admin_login':
			$adminController  = new Controller\Controller();
			$adminController ->readCurrentAdmin();
			break;
		case 'admin_logout':
			$adminController  = new Controller\Controller();
			$adminController ->displayAdminLogout();
		break;
		case 'admin_menu':
			$adminController  = new Controller\Controller();
			$adminController ->displayAdminMenu();
		break;
		case 'admin_collections_list':
			$adminController  = new Controller\Controller();
			$adminController ->displayCollectionsList();
		break;
		case 'admin_caps_catalog':
			$adminController  = new Controller\Controller();
			$adminController ->displayAdminCapsCatalog();
			break;
		case 'admin_cap_description':
			$adminController = new Controller\Controller();
			$adminController ->displayAdminCapDescription();
			break;
		case 'admin_edit_cap':
			$adminController = new Controller\Controller();
			$adminController ->editCurrentCap();
			break;
		case 'admin_add_cap':
			$adminController  = new Controller\Controller();
			$adminController ->createNewCap();
			break;
		case 'admin_update_cap':
			$adminController  = new Controller\Controller();
			$adminController ->updateCurrentCap();
			break;
		case 'admin_update_cap_image':
			$adminController  = new Controller\Controller();
			$adminController ->updateCurrentCapImage();
			break;
		case 'admin_delete_cap':
			$adminController  = new Controller\Controller();
			$adminController ->deleteCurrentCap();
			break;
		case 'admin_employees_list':
			$adminController  = new Controller\Controller();
			$adminController ->displayEmployeesList();
			break;
		case 'admin_winners_list':
			$adminController  = new \Controller\Controller();
			$adminController ->displayWinnersList();
			break;
		case 'home':
			$siteController = new Controller\Controller();
			$siteController->displayHome();
			break;
		case 'about_us':
			$siteController = new Controller\Controller();
			$siteController->displayAboutUs();
			break;
		case 'caps_catalog':
			$siteController = new Controller\Controller();
			$siteController->displayCapsCatalogVisitors();
			break;
		case 'cap_description':
			$siteController = new Controller\Controller();
			$siteController->displayCapDescriptionVisitors();
			break;
		case 'search_game':
			$siteController = new Controller\Controller();
			$siteController->displaySearchGame();
			break;
		case 'guestbook':
			$siteController  = new Controller\Controller();
			$siteController ->displayOnlineGuestBook();
			break;
		case 'add_comment':
			$siteController  = new Controller\Controller();
			$siteController ->visitorCreateNewComment();
			break;
		case 'contact_us':
			$siteController = new Controller\Controller();
			$siteController->displayContactUs();
			break;
		case 'privacy_policy':
			$siteController = new Controller\Controller();
			$siteController->displayPrivacyPolicy();
			break;
		case 'terms_of_service':
			$siteController = new Controller\Controller();
			$siteController->displayTermsOfService();
			break;
		case 'secret_page': 
			$secretController = new Controller\Controller();
			$secretController->displaySecretPage();
			break;
		default: 
			exit(header('Location: index.php?p=secret_page'));
			break;
	}
} else {
	exit(header('Location: index.php?p=home'));
}
?>