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
 * Test case for class DanielStange\Dst14Vereine\Controller\AnsprechpartnerController.
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class AnsprechpartnerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DanielStange\Dst14Vereine\Controller\AnsprechpartnerController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DanielStange\\Dst14Vereine\\Controller\\AnsprechpartnerController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllAnsprechpartnersFromRepositoryAndAssignsThemToView() {

		$allAnsprechpartners = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$ansprechpartnerRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$ansprechpartnerRepository->expects($this->once())->method('findAll')->will($this->returnValue($allAnsprechpartners));
		$this->inject($this->subject, 'ansprechpartnerRepository', $ansprechpartnerRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('ansprechpartners', $allAnsprechpartners);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenAnsprechpartnerToView() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('ansprechpartner', $ansprechpartner);

		$this->subject->showAction($ansprechpartner);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenAnsprechpartnerToView() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newAnsprechpartner', $ansprechpartner);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($ansprechpartner);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenAnsprechpartnerToAnsprechpartnerRepository() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();

		$ansprechpartnerRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$ansprechpartnerRepository->expects($this->once())->method('add')->with($ansprechpartner);
		$this->inject($this->subject, 'ansprechpartnerRepository', $ansprechpartnerRepository);

		$this->subject->createAction($ansprechpartner);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenAnsprechpartnerToView() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('ansprechpartner', $ansprechpartner);

		$this->subject->editAction($ansprechpartner);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenAnsprechpartnerInAnsprechpartnerRepository() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();

		$ansprechpartnerRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$ansprechpartnerRepository->expects($this->once())->method('update')->with($ansprechpartner);
		$this->inject($this->subject, 'ansprechpartnerRepository', $ansprechpartnerRepository);

		$this->subject->updateAction($ansprechpartner);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenAnsprechpartnerFromAnsprechpartnerRepository() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();

		$ansprechpartnerRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$ansprechpartnerRepository->expects($this->once())->method('remove')->with($ansprechpartner);
		$this->inject($this->subject, 'ansprechpartnerRepository', $ansprechpartnerRepository);

		$this->subject->deleteAction($ansprechpartner);
	}
}
