<?php

namespace DanielStange\Dst14Vereine\Tests;
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
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Vereinsdatenbank und -karte
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class VereinTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \DanielStange\Dst14Vereine\Domain\Model\Verein
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \DanielStange\Dst14Vereine\Domain\Model\Verein();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getStrasseReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setStrasseForStringSetsStrasse() { 
		$this->fixture->setStrasse('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getStrasse()
		);
	}
	
	/**
	 * @test
	 */
	public function getPostfachReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPostfachForStringSetsPostfach() { 
		$this->fixture->setPostfach('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPostfach()
		);
	}
	
	/**
	 * @test
	 */
	public function getPLZReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPLZForStringSetsPLZ() { 
		$this->fixture->setPLZ('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPLZ()
		);
	}
	
	/**
	 * @test
	 */
	public function getOrtReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOrtForStringSetsOrt() { 
		$this->fixture->setOrt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrt()
		);
	}
	
	/**
	 * @test
	 */
	public function getLandReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLandForStringSetsLand() { 
		$this->fixture->setLand('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLand()
		);
	}
	
	/**
	 * @test
	 */
	public function getWebseiteReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWebseiteForStringSetsWebseite() { 
		$this->fixture->setWebseite('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWebseite()
		);
	}
	
	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() { 
		$this->fixture->setEmail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEmail()
		);
	}
	
	/**
	 * @test
	 */
	public function getLatReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getLat()
		);
	}

	/**
	 * @test
	 */
	public function setLatForFloatSetsLat() { 
		$this->fixture->setLat(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getLat()
		);
	}
	
	/**
	 * @test
	 */
	public function getLngReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getLng()
		);
	}

	/**
	 * @test
	 */
	public function setLngForFloatSetsLng() { 
		$this->fixture->setLng(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getLng()
		);
	}
	
	/**
	 * @test
	 */
	public function getLvReturnsInitialValueForLandesverbaende() { }

	/**
	 * @test
	 */
	public function setLvForLandesverbaendeSetsLv() { }
	
	/**
	 * @test
	 */
	public function getAnsprechpartnerReturnsInitialValueForAnsprechpartner() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getAnsprechpartner()
		);
	}

	/**
	 * @test
	 */
	public function setAnsprechpartnerForObjectStorageContainingAnsprechpartnerSetsAnsprechpartner() { 
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();
		$objectStorageHoldingExactlyOneAnsprechpartner = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneAnsprechpartner->attach($ansprechpartner);
		$this->fixture->setAnsprechpartner($objectStorageHoldingExactlyOneAnsprechpartner);

		$this->assertSame(
			$objectStorageHoldingExactlyOneAnsprechpartner,
			$this->fixture->getAnsprechpartner()
		);
	}
	
	/**
	 * @test
	 */
	public function addAnsprechpartnerToObjectStorageHoldingAnsprechpartner() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();
		$objectStorageHoldingExactlyOneAnsprechpartner = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneAnsprechpartner->attach($ansprechpartner);
		$this->fixture->addAnsprechpartner($ansprechpartner);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneAnsprechpartner,
			$this->fixture->getAnsprechpartner()
		);
	}

	/**
	 * @test
	 */
	public function removeAnsprechpartnerFromObjectStorageHoldingAnsprechpartner() {
		$ansprechpartner = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($ansprechpartner);
		$localObjectStorage->detach($ansprechpartner);
		$this->fixture->addAnsprechpartner($ansprechpartner);
		$this->fixture->removeAnsprechpartner($ansprechpartner);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getAnsprechpartner()
		);
	}
	
	/**
	 * @test
	 */
	public function getSportartenReturnsInitialValueForSportarten() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getSportarten()
		);
	}

	/**
	 * @test
	 */
	public function setSportartenForObjectStorageContainingSportartenSetsSportarten() { 
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();
		$objectStorageHoldingExactlyOneSportarten = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneSportarten->attach($sportarten);
		$this->fixture->setSportarten($objectStorageHoldingExactlyOneSportarten);

		$this->assertSame(
			$objectStorageHoldingExactlyOneSportarten,
			$this->fixture->getSportarten()
		);
	}
	
	/**
	 * @test
	 */
	public function addSportartenToObjectStorageHoldingSportarten() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();
		$objectStorageHoldingExactlyOneSportarten = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneSportarten->attach($sportarten);
		$this->fixture->addSportarten($sportarten);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneSportarten,
			$this->fixture->getSportarten()
		);
	}

	/**
	 * @test
	 */
	public function removeSportartenFromObjectStorageHoldingSportarten() {
		$sportarten = new \DanielStange\Dst14Vereine\Domain\Model\Sportarten();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($sportarten);
		$localObjectStorage->detach($sportarten);
		$this->fixture->addSportarten($sportarten);
		$this->fixture->removeSportarten($sportarten);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getSportarten()
		);
	}
	
}
?>