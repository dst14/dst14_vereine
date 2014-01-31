<?php
namespace DanielStange\Dst14Vereine\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Daniel Stange <daniel.stange@gmail.com>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package dst14_vereine
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class VereinController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * vereinRepository
	 *
	 * @var \DanielStange\Dst14Vereine\Domain\Repository\VereinRepository
	 * @inject
	 */
	protected $vereinRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$vereins = $this->vereinRepository->findAll();
		$this->view->assign('vereins', $vereins);
	}

	/**
	 * action show
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Verein $verein
	 * @return void
	 */
	public function showAction(\DanielStange\Dst14Vereine\Domain\Model\Verein $verein) {
		$this->view->assign('verein', $verein);
	}

	/**
	 * action new
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Verein $newVerein
	 * @dontvalidate $newVerein
	 * @return void
	 */
	public function newAction(\DanielStange\Dst14Vereine\Domain\Model\Verein $newVerein = NULL) {
		$this->view->assign('newVerein', $newVerein);
	}

	/**
	 * action create
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Verein $newVerein
	 * @return void
	 */
	public function createAction(\DanielStange\Dst14Vereine\Domain\Model\Verein $newVerein) {
		$this->vereinRepository->add($newVerein);
		$this->flashMessageContainer->add('Your new Verein was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Verein $verein
	 * @return void
	 */
	public function editAction(\DanielStange\Dst14Vereine\Domain\Model\Verein $verein) {
		$this->view->assign('verein', $verein);
	}

	/**
	 * action update
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Verein $verein
	 * @return void
	 */
	public function updateAction(\DanielStange\Dst14Vereine\Domain\Model\Verein $verein) {
		$this->vereinRepository->update($verein);
		$this->flashMessageContainer->add('Your Verein was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Verein $verein
	 * @return void
	 */
	public function deleteAction(\DanielStange\Dst14Vereine\Domain\Model\Verein $verein) {
		$this->vereinRepository->remove($verein);
		$this->flashMessageContainer->add('Your Verein was removed.');
		$this->redirect('list');
	}

}
?>