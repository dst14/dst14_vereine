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
 * Test case for class \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class AnsprechpartnerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner();
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
	public function getVornameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getVorname()
		);
	}

	/**
	 * @test
	 */
	public function setVornameForStringSetsVorname() {
		$this->subject->setVorname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'vorname',
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
	public function getTelReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTel()
		);
	}

	/**
	 * @test
	 */
	public function setTelForStringSetsTel() {
		$this->subject->setTel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'tel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFaxReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFax()
		);
	}

	/**
	 * @test
	 */
	public function setFaxForStringSetsFax() {
		$this->subject->setFax('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fax',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTel2ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTel2()
		);
	}

	/**
	 * @test
	 */
	public function setTel2ForStringSetsTel2() {
		$this->subject->setTel2('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'tel2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMobilReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMobil()
		);
	}

	/**
	 * @test
	 */
	public function setMobilForStringSetsMobil() {
		$this->subject->setMobil('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mobil',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBemerkungenReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBemerkungen()
		);
	}

	/**
	 * @test
	 */
	public function setBemerkungenForStringSetsBemerkungen() {
		$this->subject->setBemerkungen('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bemerkungen',
			$this->subject
		);
	}
}
