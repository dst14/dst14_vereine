<?php
namespace DanielStange\Dst14Vereine\Tests\Unit\Controller;
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class DanielStange\Dst14Vereine\Controller\SportartenController.
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class SportartenControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DanielStange\Dst14Vereine\Controller\SportartenController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DanielStange\\Dst14Vereine\\Controller\\SportartenController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllSportartensFromRepositoryAndAssignsThemToView() {

		$allSportartens = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$sportartenRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$sportartenRepository->expects($this->once())->method('findAll')->will($this->returnValue($allSportartens));
		$this->inject($this->subject, 'sportartenRepository', $sportartenRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('sportartens', $allSportartens);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenSportartenToView() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('sportarten', $sportarten);

		$this->subject->showAction($sportarten);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenSportartenToView() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newSportarten', $sportarten);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($sportarten);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenSportartenToSportartenRepository() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();

		$sportartenRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$sportartenRepository->expects($this->once())->method('add')->with($sportarten);
		$this->inject($this->subject, 'sportartenRepository', $sportartenRepository);

		$this->subject->createAction($sportarten);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenSportartenToView() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('sportarten', $sportarten);

		$this->subject->editAction($sportarten);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenSportartenInSportartenRepository() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();

		$sportartenRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$sportartenRepository->expects($this->once())->method('update')->with($sportarten);
		$this->inject($this->subject, 'sportartenRepository', $sportartenRepository);

		$this->subject->updateAction($sportarten);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenSportartenFromSportartenRepository() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();

		$sportartenRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$sportartenRepository->expects($this->once())->method('remove')->with($sportarten);
		$this->inject($this->subject, 'sportartenRepository', $sportartenRepository);

		$this->subject->deleteAction($sportarten);
	}
}
