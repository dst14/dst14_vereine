<?php

namespace DanielStange\Dst14Vereine\Tests\Unit\Domain\Model;

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
 * Test case for class \DanielStange\Dst14Vereine\Domain\Model\Verein.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class VereinTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \DanielStange\Dst14Vereine\Domain\Model\Verein
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \DanielStange\Dst14Vereine\Domain\Model\Verein();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() {
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStrasseReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStrasse()
		);
	}

	/**
	 * @test
	 */
	public function setStrasseForStringSetsStrasse() {
		$this->subject->setStrasse('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'strasse',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPostfachReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPostfach()
		);
	}

	/**
	 * @test
	 */
	public function setPostfachForStringSetsPostfach() {
		$this->subject->setPostfach('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'postfach',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPLZReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPLZ()
		);
	}

	/**
	 * @test
	 */
	public function setPLZForStringSetsPLZ() {
		$this->subject->setPLZ('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'pLZ',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOrtReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOrt()
		);
	}

	/**
	 * @test
	 */
	public function setOrtForStringSetsOrt() {
		$this->subject->setOrt('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ort',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLandReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLand()
		);
	}

	/**
	 * @test
	 */
	public function setLandForStringSetsLand() {
		$this->subject->setLand('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'land',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWebseiteReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWebseite()
		);
	}

	/**
	 * @test
	 */
	public function setWebseiteForStringSetsWebseite() {
		$this->subject->setWebseite('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'webseite',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() {
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLatReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getLat()
		);
	}

	/**
	 * @test
	 */
	public function setLatForFloatSetsLat() {
		$this->subject->setLat(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'lat',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getLngReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getLng()
		);
	}

	/**
	 * @test
	 */
	public function setLngForFloatSetsLng() {
		$this->subject->setLng(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'lng',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getLvReturnsInitialValueForLandesverbaende() {
		$this->assertEquals(
			NULL,
			$this->subject->getLv()
		);
	}

	/**
	 * @test
	 */
	public function setLvForLandesverbaendeSetsLv() {
		$lvFixture = new \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende();
		$this->subject->setLv($lvFixture);

		$this->assertAttributeEquals(
			$lvFixture,
			'lv',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAnsprechpartnerReturnsInitialValueForAnsprechpartner() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getAnsprechpartner()
		);
	}

	/**
	 * @test
	 */
	public function setAnsprechpartnerForObjectStorageContainingAnsprechpartnerSetsAnsprechpartner() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();
		$objectStorageHoldingExactlyOneAnsprechpartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneAnsprechpartner->attach($ansprechpartner);
		$this->subject->setAnsprechpartner($objectStorageHoldingExactlyOneAnsprechpartner);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneAnsprechpartner,
			'ansprechpartner',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addAnsprechpartnerToObjectStorageHoldingAnsprechpartner() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();
		$ansprechpartnerObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$ansprechpartnerObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($ansprechpartner));
		$this->inject($this->subject, 'ansprechpartner', $ansprechpartnerObjectStorageMock);

		$this->subject->addAnsprechpartner($ansprechpartner);
	}

	/**
	 * @test
	 */
	public function removeAnsprechpartnerFromObjectStorageHoldingAnsprechpartner() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();
		$ansprechpartnerObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$ansprechpartnerObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($ansprechpartner));
		$this->inject($this->subject, 'ansprechpartner', $ansprechpartnerObjectStorageMock);

		$this->subject->removeAnsprechpartner($ansprechpartner);

	}

	/**
	 * @test
	 */
	public function getSportartenReturnsInitialValueForSportarten() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getSportarten()
		);
	}

	/**
	 * @test
	 */
	public function setSportartenForObjectStorageContainingSportartenSetsSportarten() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();
		$objectStorageHoldingExactlyOneSportarten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneSportarten->attach($sportarten);
		$this->subject->setSportarten($objectStorageHoldingExactlyOneSportarten);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneSportarten,
			'sportarten',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addSportartenToObjectStorageHoldingSportarten() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();
		$sportartenObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$sportartenObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($sportarten));
		$this->inject($this->subject, 'sportarten', $sportartenObjectStorageMock);

		$this->subject->addSportarten($sportarten);
	}

	/**
	 * @test
	 */
	public function removeSportartenFromObjectStorageHoldingSportarten() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();
		$sportartenObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$sportartenObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($sportarten));
		$this->inject($this->subject, 'sportarten', $sportartenObjectStorageMock);

		$this->subject->removeSportarten($sportarten);

	}
}
