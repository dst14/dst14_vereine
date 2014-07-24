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
 * Test case for class DanielStange\Dst14Vereine\Controller\LandesverbaendeController.
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class LandesverbaendeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DanielStange\Dst14Vereine\Controller\LandesverbaendeController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DanielStange\\Dst14Vereine\\Controller\\LandesverbaendeController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllLandesverbaendesFromRepositoryAndAssignsThemToView() {

		$allLandesverbaendes = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$landesverbaendeRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$landesverbaendeRepository->expects($this->once())->method('findAll')->will($this->returnValue($allLandesverbaendes));
		$this->inject($this->subject, 'landesverbaendeRepository', $landesverbaendeRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('landesverbaendes', $allLandesverbaendes);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenLandesverbaendeToView() {
		$landesverbaende = new \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('landesverbaende', $landesverbaende);

		$this->subject->showAction($landesverbaende);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenLandesverbaendeToView() {
		$landesverbaende = new \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newLandesverbaende', $landesverbaende);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($landesverbaende);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenLandesverbaendeToLandesverbaendeRepository() {
		$landesverbaende = new \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende();

		$landesverbaendeRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$landesverbaendeRepository->expects($this->once())->method('add')->with($landesverbaende);
		$this->inject($this->subject, 'landesverbaendeRepository', $landesverbaendeRepository);

		$this->subject->createAction($landesverbaende);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenLandesverbaendeToView() {
		$landesverbaende = new \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('landesverbaende', $landesverbaende);

		$this->subject->editAction($landesverbaende);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenLandesverbaendeInLandesverbaendeRepository() {
		$landesverbaende = new \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende();

		$landesverbaendeRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$landesverbaendeRepository->expects($this->once())->method('update')->with($landesverbaende);
		$this->inject($this->subject, 'landesverbaendeRepository', $landesverbaendeRepository);

		$this->subject->updateAction($landesverbaende);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenLandesverbaendeFromLandesverbaendeRepository() {
		$landesverbaende = new \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende();

		$landesverbaendeRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$landesverbaendeRepository->expects($this->once())->method('remove')->with($landesverbaende);
		$this->inject($this->subject, 'landesverbaendeRepository', $landesverbaendeRepository);

		$this->subject->deleteAction($landesverbaende);
	}
}
