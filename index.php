<?php

require_once __DIR__ . '/vendor/autoloader.php';

$page = $_GET['p'];

/**
 * Handle the requested page and display the appropriate content.
 */

if(array_key_exists('p', $_GET))
{
	switch($page)
	{
		// Admin Pages
		case 'admin_home':
			// Display the admin home page.
			$adminController = new Controller\Controller();
			$adminController ->displayAdminHome();
			break;
		case 'admin_registration':
			// Display the admin registration page.
			$adminController = new Controller\Controller();
			$adminController ->displayAdminRegistration();
			break;
		case 'add_new_admin':
			// Create a new admin.
			$adminController  = new Controller\Controller();
			$adminController ->createNewAdmin();
			break;
		case 'admin_login':
			// Display the admin login page.
			$adminController  = new Controller\Controller();
			$adminController ->displayAdminLogin();
		break;
		case 'add_admin_login':
			// Check the admin login.
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
			// Display all the caps in the admin dashboard.
			$adminController  = new Controller\Controller();
			$adminController ->displayAdminCapsCatalog();
			break;
		case 'admin_cap_description':
			// Display the description of a specific cap in the admin dahsboard.
			$adminController = new Controller\Controller();
			$adminController ->displayAdminCapDescription();
			break;
		case 'admin_edit_cap':
			// Edit the current cap.
			$adminController = new Controller\Controller();
			$adminController ->editCurrentCap();
			break;
		case 'admin_add_cap':
			// Create a new cap.
			$adminController  = new Controller\Controller();
			$adminController ->createNewCap();
			break;
		case 'admin_update_cap':
			// Update a specific cap.
			$adminController  = new Controller\Controller();
			$adminController ->updateCurrentCap();
			break;
		case 'admin_update_cap_image':
			// Update the image of a specific cap of the catalog.
			$adminController  = new Controller\Controller();
			$adminController ->updateCurrentCapImage();
			break;
		case 'admin_delete_cap':
			// Delete a specific cap of the current catalog.
			$adminController  = new Controller\Controller();
			$adminController ->deleteCurrentCap();
			break;
		case 'admin_employees_list':
			// Display the list of employees for admins.
			$adminController  = new Controller\Controller();
			$adminController ->displayEmployeesList();
			break;
		case 'admin_winners_list':
			// Display the list of winners for admins.
			$adminController  = new \Controller\Controller();
			$adminController ->displayWinnersList();
			break;
		// Visitor Pages
		case 'home':
			// Display the home page.
			$siteController = new Controller\Controller();
			$siteController->displayHome();
			break;
		case 'about_us':
			// Display the about us page.
			$siteController = new Controller\Controller();
			$siteController->displayAboutUs();
			break;
		case 'caps_catalog':
			// Display the caps catalog for visitors.
			$siteController = new Controller\Controller();
			$siteController->displayCapsCatalogVisitors();
			break;
		case 'cap_description':
			// Display the description of a specific cap of the catalog.
			$siteController = new Controller\Controller();
			$siteController->displayCapDescriptionVisitors();
			break;
		case 'search_game':
			// Display the search game page.
			$siteController = new Controller\Controller();
			$siteController->displaySearchGame();
			break;
		case 'guestbook':
			// Display the guestbook page.
			$siteController  = new Controller\Controller();
			$siteController ->displayOnlineGuestBook();
			break;
		case 'add_comment':
			// Adding a comment in the guestbook page.
			$siteController  = new Controller\Controller();
			$siteController ->visitorCreateNewComment();
			break;
		case 'contact_us':
			// Display the contact us page.
			$siteController = new Controller\Controller();
			$siteController->displayContactUs();
			break;
		case 'privacy_policy':
			// Display the privacy policy page.
			$siteController = new Controller\Controller();
			$siteController->displayPrivacyPolicy();
			break;
		case 'terms_of_service':
			// Display the terms of service page.
			$siteController = new Controller\Controller();
			$siteController->displayTermsOfService();
			break;
		case 'secret_page': 
			// Display the secret page.
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
