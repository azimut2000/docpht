<?php

/**
 * This file is part of the DocPHT project.
 * 
 * @author Valentino Pesce
 * @copyright (c) Valentino Pesce <valentino@iltuobrand.it>
 * @copyright (c) Craig Crosby <creecros@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DocPHT\Controller;

//use DocPHT\Model\Admin;
use DocPHT\Form\UpdatePasswordForm;
use Instant\Core\Controller\BaseController;


class AdminController extends BaseController
{
	private $modelAdmin;
	private $updatePasswordForm;
    
	public function __construct()
	{
		parent::__construct();
		$this->updatePasswordForm = new UpdatePasswordForm();
		//$this->modelAdmin = new Admin();
	}
			
	public function settings()
	{
		//$data = $this->modelAdmin->getData();
		$this->view->show('partial/head.php',['PageTitle' => 'Admin']);
		$this->view->show('admin/settings.php');
		$this->view->show('partial/footer.php');
	}

	public function updatePassword()
	{
		$form = $this->updatePasswordForm->create();
		
		$this->view->show('partial/head.php', ['PageTitle' => 'Update Password']);
		$this->view->show('admin/update_password.php', ['form' => $form]);
		$this->view->show('partial/footer.php');
	}

	public function removeUser()
	{
		$this->view->show('partial/head.php', ['PageTitle' => 'Remove User']);
		$this->view->show('admin/remove_user.php');
		$this->view->show('partial/footer.php');
	}
		
	public function addUser()
	{
		$this->view->show('partial/head.php', ['PageTitle' => 'Add user']);
		$this->view->show('admin/add_user.php');
		$this->view->show('partial/footer.php');
	}

	public function createHome()
	{
		$this->view->show('partial/head.php', ['PageTitle' => 'Create Home']);
		$this->view->show('admin/create_home.php');
		$this->view->show('partial/footer.php');
	}

	public function translations()
	{
		$this->view->show('partial/head.php', ['PageTitle' => 'Translations']);
		$this->view->show('admin/translations.php');
		$this->view->show('partial/footer.php');
	}

}