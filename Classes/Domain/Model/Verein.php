<?php
namespace DanielStange\Dst14Vereine\Domain\Model;

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
class Verein extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Vereinsname
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Straße und Hausnummer
	 *
	 * @var \string
	 */
	protected $strasse;

	/**
	 * Postfach
	 *
	 * @var \string
	 */
	protected $postfach;

	/**
	 * Postleitzahl
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $pLZ;

	/**
	 * Ort
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $ort;

	/**
	 * Land
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $land;

	/**
	 * Webseite
	 *
	 * @var \string
	 */
	protected $webseite;

	/**
	 * Emailadresse
	 *
	 * @var \string
	 */
	protected $email;

	/**
	 * lat
	 *
	 * @var \float
	 */
	protected $lat;

	/**
	 * lng
	 *
	 * @var \float
	 */
	protected $lng;

	/**
	 * lv
	 *
	 * @var \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende
	 */
	protected $lv;

	/**
	 * ansprechpartner
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner>
	 */
	protected $ansprechpartner;

	/**
	 * sportarten
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DanielStange\Dst14Vereine\Domain\Model\Sportarten>
	 */
	protected $sportarten;

	/**
	 * __construct
	 *
	 * @return Verein
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->ansprechpartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->sportarten = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return \string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param \string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the strasse
	 *
	 * @return \string $strasse
	 */
	public function getStrasse() {
		return $this->strasse;
	}

	/**
	 * Sets the strasse
	 *
	 * @param \string $strasse
	 * @return void
	 */
	public function setStrasse($strasse) {
		$this->strasse = $strasse;
	}

	/**
	 * Returns the postfach
	 *
	 * @return \string $postfach
	 */
	public function getPostfach() {
		return $this->postfach;
	}

	/**
	 * Sets the postfach
	 *
	 * @param \string $postfach
	 * @return void
	 */
	public function setPostfach($postfach) {
		$this->postfach = $postfach;
	}

	/**
	 * Returns the pLZ
	 *
	 * @return \string $pLZ
	 */
	public function getPLZ() {
		return $this->pLZ;
	}

	/**
	 * Sets the pLZ
	 *
	 * @param \string $pLZ
	 * @return void
	 */
	public function setPLZ($pLZ) {
		$this->pLZ = $pLZ;
	}

	/**
	 * Returns the ort
	 *
	 * @return \string $ort
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * Sets the ort
	 *
	 * @param \string $ort
	 * @return void
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
	}

	/**
	 * Returns the land
	 *
	 * @return \string $land
	 */
	public function getLand() {
		return $this->land;
	}

	/**
	 * Sets the land
	 *
	 * @param \string $land
	 * @return void
	 */
	public function setLand($land) {
		$this->land = $land;
	}

	/**
	 * Returns the webseite
	 *
	 * @return \string $webseite
	 */
	public function getWebseite() {
		return $this->webseite;
	}

	/**
	 * Sets the webseite
	 *
	 * @param \string $webseite
	 * @return void
	 */
	public function setWebseite($webseite) {
		$this->webseite = $webseite;
	}

	/**
	 * Returns the email
	 *
	 * @return \string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param \string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the lat
	 *
	 * @return \float $lat
	 */
	public function getLat() {
		return $this->lat;
	}

	/**
	 * Sets the lat
	 *
	 * @param \float $lat
	 * @return void
	 */
	public function setLat($lat) {
		$this->lat = $lat;
	}

	/**
	 * Returns the lng
	 *
	 * @return \float $lng
	 */
	public function getLng() {
		return $this->lng;
	}

	/**
	 * Sets the lng
	 *
	 * @param \float $lng
	 * @return void
	 */
	public function setLng($lng) {
		$this->lng = $lng;
	}

	/**
	 * Returns the lv
	 *
	 * @return \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $lv
	 */
	public function getLv() {
		return $this->lv;
	}

	/**
	 * Sets the lv
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $lv
	 * @return void
	 */
	public function setLv(\DanielStange\Dst14Vereine\Domain\Model\Landesverbaende $lv) {
		$this->lv = $lv;
	}

	/**
	 * Adds a Ansprechpartner
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner $ansprechpartner
	 * @return void
	 */
	public function addAnsprechpartner(\DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner $ansprechpartner) {
		$this->ansprechpartner->attach($ansprechpartner);
	}

	/**
	 * Removes a Ansprechpartner
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner $ansprechpartnerToRemove The Ansprechpartner to be removed
	 * @return void
	 */
	public function removeAnsprechpartner(\DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner $ansprechpartnerToRemove) {
		$this->ansprechpartner->detach($ansprechpartnerToRemove);
	}

	/**
	 * Returns the ansprechpartner
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner> $ansprechpartner
	 */
	public function getAnsprechpartner() {
		return $this->ansprechpartner;
	}

	/**
	 * Sets the ansprechpartner
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DanielStange\Dst14Vereine\Domain\Model\Ansprechpartner> $ansprechpartner
	 * @return void
	 */
	public function setAnsprechpartner(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ansprechpartner) {
		$this->ansprechpartner = $ansprechpartner;
	}

	/**
	 * Adds a Sportarten
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten
	 * @return void
	 */
	public function addSportarten(\DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportarten) {
		$this->sportarten->attach($sportarten);
	}

	/**
	 * Removes a Sportarten
	 *
	 * @param \DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportartenToRemove The Sportarten to be removed
	 * @return void
	 */
	public function removeSportarten(\DanielStange\Dst14Vereine\Domain\Model\Sportarten $sportartenToRemove) {
		$this->sportarten->detach($sportartenToRemove);
	}

	/**
	 * Returns the sportarten
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DanielStange\Dst14Vereine\Domain\Model\Sportarten> $sportarten
	 */
	public function getSportarten() {
		return $this->sportarten;
	}

	/**
	 * Sets the sportarten
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DanielStange\Dst14Vereine\Domain\Model\Sportarten> $sportarten
	 * @return void
	 */
	public function setSportarten(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $sportarten) {
		$this->sportarten = $sportarten;
	}

}
?>