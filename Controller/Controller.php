<?php
namespace Controller;

class Controller
{
    private $adminPage;
	private $sitePage; 
    private $secretPage;
    private $adminLayout = 'views/layouts/admin_layout.php';
	private $siteLayout = 'views/layouts/site_layout.php';
    private $secretLayout = 'views/layouts/secret_layout.php';
	private $titleLayout;
	private $model;
	private $capsCatalog;
	private $cap;
	private $adminCaps;
	private $product_id;
	private $allComments;
	private $badWords;
	private $censorBadWords;
	private $username;
	private $avatar;
	private $title;
	private $rating;
	private $comment;
	private $admin_username;
	private $password;
	private $hashed_password;
	private $adminCollections;
	private $collectionsList;
	private $name;
	private $price;
	private $quantity;
	private $image;
	private $description;
	private $admin_contributor_id;
	private $collection_id;
	private $employeesList;
	private $winnersList;
	private $capImage;
	private $validation;
	private $newValidation;
	private $website;

	private function sessionAdmin() {
		if (!isset($_SESSION['admin_id'])) {
			exit(header('Location: index.php?p=admin_home'));
		}
	}

	public function sessionOnlyAdmin() {
		return $this->sessionAdmin();
	}

	private function sessionCookieImproved()
	{
		$params = session_get_cookie_params();
		setcookie(
			"PHPSESSID",
			session_id(),
			[
				'expires' => 0,
				'path' => $params["path"],
				'domain' => $params["domain"],
				'secure' => true,
				'httponly' => true,
				'samesite' => 'Lax'
			]
		);
	}

	public function sessionCookie()
	{
		return $this->sessionCookieImproved();
	}

	private function adminHome() {
		$this->adminPage = 'views/pages/admin/admin_home.php';
		$this->titleLayout = 'Admin Home | Retro Mania';
		require_once($this->adminLayout);
	} 

	public function displayAdminHome() {	
		return $this->adminHome();
	}
	
	private function adminRegistration() {
		$this->adminPage = 'views/pages/admin/admin_registration.php';
		$this->titleLayout = 'Admin registration | Retro Mania';
		require_once($this->adminLayout);
	}

	public function displayAdminRegistration() {	
		return $this->adminRegistration();
	}

	private function newAdmin() {
		$this->admin_username = htmlspecialchars($_POST['admin_username']);
		$this->password = htmlspecialchars($_POST['password']);
		$this->hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
		$this->validation  = new \Validation\Validate();
		$this->model = new \Models\Create();
		$this->newValidation = $this->validation ->validationNewAdminAccount($this->admin_username,$this->password);
		$this->adminPage = $this->model->createNewAdminAccount($this->admin_username,$this->hashed_password);
		exit(header('Location: index.php?p=admin_login'));
	}

	public function createNewAdmin() {	
		return $this->newAdmin();
	}

	private function adminLogin() {
		$this->adminPage = 'views/pages/admin/admin_login.php';
		$this->titleLayout = 'Admin login | Retro Mania';
		require_once($this->adminLayout);
	}
	
	public function displayAdminLogin() {	
		return $this->adminLogin();
	}

	private function readAdmin() {
		$this->admin_username = htmlspecialchars($_POST['admin_username']);
		$this->password = htmlspecialchars($_POST['password']);
		$this->validation  = new \Validation\Validate();
		$this->model = new \Models\Read();
		$this->newValidation = $this->validation ->validationCurrentAdminAccount($this->admin_username,$this->password);
		$this->adminPage = $this->model->readCurrentAdminAccount($this->admin_username, $this->password);
		exit(header('Location: index.php?p=admin_menu'));
		}

	public function readCurrentAdmin() {	
		return $this->readAdmin();
	}
			
	private function adminLogout() {
		$this->adminPage = 'views/pages/admin/admin_logout.php';
		require_once($this->adminLayout);
	}
		
	public function displayAdminLogout() {	
		return $this->adminLogout();
	}
	
	private function adminMenu() {
		$this->adminPage = 'views/pages/admin/admin_menu.php';
		$this->titleLayout = 'Admin menu | Retro Mania';
		require_once($this->adminLayout);
	}
			
	public function displayAdminMenu() {	
		return $this->adminMenu();
	}

	private function collectionsList() {
		$this->model = new \Models\Read();
		$this->collectionsList = $this->model->readCollectionsList();
		$this->adminPage = 'views/pages/admin/admin_collections_list.php';
		$this->titleLayout = 'Collections list | Retro Mania';
		require_once($this->adminLayout);
	}
				
	public function displayCollectionsList() {	
		return $this->collectionsList();
	}

	private function adminCapsCatalog() {
		$this->model = new \Models\Read();
		$this->capsCatalog = $this->model->readCatalog();
		$this->adminPage = 'views/pages/admin/admin_caps_catalog.php';
		$this->titleLayout = 'Caps catalog | Retro Mania';
		require_once($this->adminLayout);
	}
					
	public function displayAdminCapsCatalog() {	
		return $this->adminCapsCatalog();
	}

	private function createCap() {
		$this->name = trim(htmlspecialchars(ucwords($_POST['name'])));
		$this->price = htmlspecialchars($_POST['price']);
		$this->quantity = htmlspecialchars($_POST['quantity']);
		$this->image = htmlspecialchars($_POST['image']);
		$this->description = trim(htmlspecialchars($_POST['description']));
		$this->collection_id = htmlspecialchars($_POST['collection_id']);
		$this->admin_contributor_id = htmlspecialchars($_POST['admin_contributor_id']);
		$this->validation  = new \Validation\Validate();
		$this->model = new \Models\Create();
		$this->newValidation = $this->validation ->validationNewCap($this->name, $this->price, $this->quantity, $this->image, $this->description, $this->collection_id, $this->admin_contributor_id);
		$this->cap = $this->model->createNewCap($this->name, $this->price, $this->quantity, $this->image, $this->description, $this->collection_id, $this->admin_contributor_id);
		exit(header('Location: index.php?p=admin_caps_catalog'));
	}
					
	public function createNewCap() {	
		return $this->createCap();
	}

	private function deleteCap() {
		$this->product_id = $_GET['product_id'];
		$this->model = new \Models\Delete();
		$this->cap = $this->model->deleteCap($this->product_id);
		exit(header('Location: index.php?p=admin_caps_catalog'));
	}
		
	public function deleteCurrentCap() {	
		return $this->deleteCap();
	}

	private function adminCapDescription() {
		$this->product_id = $_GET['product_id'];
		$this->model = new \Models\Read();
		$this->cap = $this->model->readCapDescription($this->product_id);
		$this->adminPage = 'views/pages/admin/admin_cap_description.php';
		$this->titleLayout = 'Cap description | Retro Mania';
		require_once($this->adminLayout);
	}
						
	public function displayAdminCapDescription() {	
		return $this->adminCapDescription();
	}

	private function updateCapImage() {
		$this->image = htmlspecialchars($_POST['image']);
		$this->product_id = htmlspecialchars($_POST['product_id']);
		$this->validation  = new \Validation\Validate();
		$this->model = new \Models\Update();
		$this->newValidation = $this->validation ->validationUpdateCurrentCapImage($this->image, $this->product_id);
		$this->capImage = $this->model->updateCurrentCapImage($this->image, $this->product_id);
			
		exit(header('Location: index.php?p=admin_caps_catalog'));
	}

	public function updateCurrentCapImage() {	
		return $this->updateCapImage();
	}

	private function editCap() {
		$this->product_id = $_GET['product_id'];
		$this->adminCaps = new \Models\Read();
		$this->cap = $this->adminCaps->readExistingCap($this->product_id);	
		$this->adminPage = 'views/pages/admin/admin_edit_cap.php';
		$this->titleLayout = 'Edit a cap | Retro Mania';
		require_once($this->adminLayout);
	}
							
	public function editCurrentCap() {	
		return $this->editCap();
	}

	private function updateCap() {
		$this->name = trim(htmlspecialchars($_POST['name']));
		$this->price = htmlspecialchars($_POST['price']);
		$this->quantity = htmlspecialchars($_POST['quantity']);
		$this->description = trim(htmlspecialchars($_POST['description']));
		$this->collection_id = htmlspecialchars($_POST['collection_id']);
		$this->admin_contributor_id = htmlspecialchars($_POST['admin_contributor_id']);
		$this->product_id = htmlspecialchars($_POST['product_id']);
		$this->validation  = new \Validation\Validate();
		$this->model = new \Models\Update();
		$this->newValidation = $this->validation ->validationUpdateCurrentCap($this->name, $this->price, $this->quantity, $this->description, $this->collection_id, $this->admin_contributor_id, $this->product_id);
		$this->cap = $this->model->updateCurrentCap($this->name, $this->price, $this->quantity, $this->description, $this->collection_id, $this->admin_contributor_id, $this->product_id);			
		exit(header('Location: index.php?p=admin_caps_catalog'));
	}
			
	public function updateCurrentCap() {	
		return $this->updateCap();
	}
					
	private function employeesList() {
		$this->model = new \Models\Read();
		$this->employeesList = $this->model->readEmployeesList();	
		$this->adminPage = 'views/pages/admin/admin_employees_list.php';
		$this->titleLayout = 'Employees list | Retro Mania';
		require_once($this->adminLayout);
	}
	
	public function displayEmployeesList() {	
		return $this->employeesList();
	}

	private function winnersList() {
		$this->model = new \Models\Read();
		$this->winnersList = $this->model->readWinnersList();
		$this->adminPage = 'views/pages/admin/admin_winners_list.php';
		$this->titleLayout = 'Winners list | Retro Mania';
		require_once($this->adminLayout);
	}
	
	public function displayWinnersList() {	
		return $this->winnersList();
	}

	private function siteHome() {
		$this->sitePage = 'views/pages/site/home.php';
		$this->titleLayout = 'Home | Retro Mania';
		require_once($this->siteLayout);
	}
	
	public function displayHome() {	
		return $this->siteHome();
	}

	private function aboutUs() {
		$this->sitePage = 'views/pages/site/about_us.php';
		$this->titleLayout = 'About us | Retro Mania';
		require_once($this->siteLayout);
	}
	
	public function displayAboutUs() {	
		return $this->aboutUs();
	}

	private function capsCatalogVisitors() {
		$this->model = new \Models\Read();
		$this->capsCatalog = $this->model->readCapsCatalogVisitors();
		$this->sitePage = 'views/pages/site/caps_catalog.php';
		$this->titleLayout = 'Caps catalog | Retro Mania';
		require_once($this->siteLayout);
	}
	
	public function displayCapsCatalogVisitors()
	{	
		return $this->capsCatalogVisitors();
	}

	private function capDescriptionVisitors() {
		$this->product_id = $_GET['product_id'];
		$this->model = new \Models\Read();
		$this->cap = $this->model->readCapDescriptionVisitors($this->product_id);
		$this->sitePage = 'views/pages/site/cap_description.php';
		$this->titleLayout = 'Cap description | Retro Mania';
		require_once($this->siteLayout);
	}
	
	public function displayCapDescriptionVisitors()
	{	
		return $this->capDescriptionVisitors();
	}

	private function searchGame() {
		$this->sitePage = 'views/pages/site/search_game.php';
		$this->titleLayout = 'Search game | Retro Mania';
		require_once($this->siteLayout);
	}
		
	public function displaySearchGame()
	{	
		return $this->searchGame();
	}

	private function contactUs() {
		$this->sitePage = 'views/pages/site/contact_us.php';
		$this->titleLayout = 'Contact us | Retro Mania';
		require_once($this->siteLayout);
	}
			
	public function displayContactUs()
	{	
		return $this->contactUs();
	}

	private function onlineGuestBook() {
		$this->model = new \Models\Read();
		$this->allComments = $this->model->readCommentsVisitors();
		$this->badWords = ['arse', 'asshole', 'bitch', 'bastard', 'bollocks', 'bugger', 'cunt', 'dick', 'dyke', 'cock', 'fag', 'fuck', 'nigga', 'porn', 'pussy', 'prick', 'sex', 'shit', 'slut', 'tranny', 'twat', 'viagra', 'wanker'];
		$this->censorBadWords = "🤬🤬🤬";
		$this->sitePage = 'views/pages/site/online_guestbook.php';
		$this->titleLayout = 'Online guestbook | Retro Mania';
		require_once($this->siteLayout);
	}
				
	public function displayOnlineGuestBook()
	{	
		return $this->onlineGuestBook();
	}

	private function createNewComment() {
		$this->username = htmlspecialchars($_POST['username']);
		$this->avatar = htmlspecialchars($_POST['avatar']);
		$this->title = trim(htmlspecialchars(ucfirst($_POST['title'])));
		$this->rating = htmlspecialchars($_POST['rating']);
		$this->comment = trim(htmlspecialchars(ucfirst($_POST['comment'])));
		$this->website = htmlspecialchars($_POST['website']);
		$this->validation  = new \Validation\Validate();
		$this->model  = new \Models\Create();
		$this->newValidation = $this->validation ->validationNewComment($this->username,$this->title,$this->comment,$this->website);
		$this->newComment = $this->model ->createNewCommentVisitors($this->username,$this->avatar,$this->title,$this->rating,$this->comment);
		exit(header('Location: index.php?p=guestbook'));
	}
					
	public function visitorCreateNewComment()
	{	
		return $this->createNewComment();
	}

	private function privacyPolicy() {
		$this->sitePage = 'views/pages/site/privacy_policy.php';
		$this->titleLayout = 'Privacy Policy | Retro Mania';
		require_once($this->siteLayout);
	}
			
	public function displayPrivacyPolicy()
	{	
		return $this->privacyPolicy();
	}
	
	private function termsOfService() {
		$this->sitePage = 'views/pages/site/terms_of_service.php';
		$this->titleLayout = 'Terms of service | Retro Mania';
		require_once($this->siteLayout);
	}
		
	public function displayTermsOfService()
	{	
		return $this->termsOfService();
	}

    private function secretPage() {
		$this->secretPage = 'views/pages/secret/secret_page.php';
		$this->titleLayout = 'バブルボブル | レトロマニア';
		require_once($this->secretLayout);
	}

	public function displaySecretPage()
	{	
		return $this->secretPage();
	}
}
