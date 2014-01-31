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
	 * @dontvalidate $newSportarten
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
		$this->sportartenRepository->add($newSportarten);
		$this->flashMessageContainer->add('Your new Sportarten was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten
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
		$this->sportartenRepository->update($sportarten);
		$this->flashMessageContainer->add('Your Sportarten was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten
	 * @return void
	 */
	public function deleteAction(\DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten) {
		$this->sportartenRepository->remove($sportarten);
		$this->flashMessageContainer->add('Your Sportarten was removed.');
		$this->redirect('list');
	}

}
?>