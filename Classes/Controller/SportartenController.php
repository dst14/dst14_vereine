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
 * SportartenController
 */
class SportartenController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$sportartens = $this->sportartenRepository->findAll();
		$this->view->assign('sportartens', $sportartens);
	}

	/**
	 * action show
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten
	 * @return void
	 */
	public function showAction(\DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten) {
		$this->view->assign('sportarten', $sportarten);
	}

	/**
	 * action new
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Sportarten $newSportarten
	 * @ignorevalidation $newSportarten
	 * @return void
	 */
	public function newAction(\DanielStange\Dst14Vereine\Domain\Model\Sportarten $newSportarten = NULL) {
		$this->view->assign('newSportarten', $newSportarten);
	}

	/**
	 * action create
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Sportarten $newSportarten
	 * @return void
	 */
	public function createAction(\DanielStange\Dst14Vereine\Domain\Model\Sportarten $newSportarten) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->sportartenRepository->add($newSportarten);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten
	 * @ignorevalidation $sportarten
	 * @return void
	 */
	public function editAction(\DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten) {
		$this->view->assign('sportarten', $sportarten);
	}

	/**
	 * action update
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten
	 * @return void
	 */
	public function updateAction(\DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->sportartenRepository->update($sportarten);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten
	 * @return void
	 */
	public function deleteAction(\DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->sportartenRepository->remove($sportarten);
		$this->redirect('list');
	}

}