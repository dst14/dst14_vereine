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
 * Test case for class DanielStange\Dst14Vereine\Controller\VereinController.
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class VereinControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DanielStange\Dst14Vereine\Controller\VereinController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DanielStange\\Dst14Vereine\\Controller\\VereinController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllVereinsFromRepositoryAndAssignsThemToView() {

		$allVereins = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$vereinRepository = $this->getMock('DanielStange\\Dst14Vereine\\Domain\\Repository\\VereinRepository', array('findAll'), array(), '', FALSE);
		$vereinRepository->expects($this->once())->method('findAll')->will($this->returnValue($allVereins));
		$this->inject($this->subject, 'vereinRepository', $vereinRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('vereins', $allVereins);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenVereinToView() {
		$verein = new \DanielStange\Dst14Vereine\Domain\Model\Verein();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('verein', $verein);

		$this->subject->showAction($verein);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenVereinToView() {
		$verein = new \DanielStange\Dst14Vereine\Domain\Model\Verein();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newVerein', $verein);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($verein);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenVereinToVereinRepository() {
		$verein = new \DanielStange\Dst14Vereine\Domain\Model\Verein();

		$vereinRepository = $this->getMock('DanielStange\\Dst14Vereine\\Domain\\Repository\\VereinRepository', array('add'), array(), '', FALSE);
		$vereinRepository->expects($this->once())->method('add')->with($verein);
		$this->inject($this->subject, 'vereinRepository', $vereinRepository);

		$this->subject->createAction($verein);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenVereinToView() {
		$verein = new \DanielStange\Dst14Vereine\Domain\Model\Verein();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('verein', $verein);

		$this->subject->editAction($verein);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenVereinInVereinRepository() {
		$verein = new \DanielStange\Dst14Vereine\Domain\Model\Verein();

		$vereinRepository = $this->getMock('DanielStange\\Dst14Vereine\\Domain\\Repository\\VereinRepository', array('update'), array(), '', FALSE);
		$vereinRepository->expects($this->once())->method('update')->with($verein);
		$this->inject($this->subject, 'vereinRepository', $vereinRepository);

		$this->subject->updateAction($verein);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenVereinFromVereinRepository() {
		$verein = new \DanielStange\Dst14Vereine\Domain\Model\Verein();

		$vereinRepository = $this->getMock('DanielStange\\Dst14Vereine\\Domain\\Repository\\VereinRepository', array('remove'), array(), '', FALSE);
		$vereinRepository->expects($this->once())->method('remove')->with($verein);
		$this->inject($this->subject, 'vereinRepository', $vereinRepository);

		$this->subject->deleteAction($verein);
	}
}
