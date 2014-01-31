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
class LandesverbaendeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$landesverbaendes = $this->landesverbaendeRepository->findAll();
		$this->view->assign('landesverbaendes', $landesverbaendes);
	}

	/**
	 * action show
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $landesverbaende
	 * @return void
	 */
	public function showAction(\DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $landesverbaende) {
		$this->view->assign('landesverbaende', $landesverbaende);
	}

	/**
	 * action new
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $newLandesverbaende
	 * @dontvalidate $newLandesverbaende
	 * @return void
	 */
	public function newAction(\DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $newLandesverbaende = NULL) {
		$this->view->assign('newLandesverbaende', $newLandesverbaende);
	}

	/**
	 * action create
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $newLandesverbaende
	 * @return void
	 */
	public function createAction(\DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $newLandesverbaende) {
		$this->landesverbaendeRepository->add($newLandesverbaende);
		$this->flashMessageContainer->add('Your new Landesverbaende was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $landesverbaende
	 * @return void
	 */
	public function editAction(\DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $landesverbaende) {
		$this->view->assign('landesverbaende', $landesverbaende);
	}

	/**
	 * action update
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $landesverbaende
	 * @return void
	 */
	public function updateAction(\DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $landesverbaende) {
		$this->landesverbaendeRepository->update($landesverbaende);
		$this->flashMessageContainer->add('Your Landesverbaende was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $landesverbaende
	 * @return void
	 */
	public function deleteAction(\DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $landesverbaende) {
		$this->landesverbaendeRepository->remove($landesverbaende);
		$this->flashMessageContainer->add('Your Landesverbaende was removed.');
		$this->redirect('list');
	}

}
?>