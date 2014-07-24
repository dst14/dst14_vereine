<?php
namespace DanielStange\Dst14Vereine\Controller;


/***************************************************************
 *
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
 * VereinController
 */
class VereinController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * vereinRepository
	 *
	 * @var \DanielStange\Dst14Vereine\Domain\Repository\VereinRepository
	 * @inject
	 */
	protected $vereinRepository = NULL;

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
	 * @ignorevalidation $newVerein
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
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->vereinRepository->add($newVerein);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Verein $verein
	 * @ignorevalidation $verein
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
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->vereinRepository->update($verein);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Verein $verein
	 * @return void
	 */
	public function deleteAction(\DanielStange\Dst14Vereine\Domain\Model\Verein $verein) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->vereinRepository->remove($verein);
		$this->redirect('list');
	}

}