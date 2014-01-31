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
class Ansprechpartner extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var \string
	 */
	protected $name;

	/**
	 * vorname
	 *
	 * @var \string
	 */
	protected $vorname;

	/**
	 * email
	 *
	 * @var \string
	 */
	protected $email;

	/**
	 * tel
	 *
	 * @var \string
	 */
	protected $tel;

	/**
	 * fax
	 *
	 * @var \string
	 */
	protected $fax;

	/**
	 * tel2
	 *
	 * @var \string
	 */
	protected $tel2;

	/**
	 * mobil
	 *
	 * @var \string
	 */
	protected $mobil;

	/**
	 * bemerkungen
	 *
	 * @var \string
	 */
	protected $bemerkungen;

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
	 * Returns the vorname
	 *
	 * @return \string $vorname
	 */
	public function getVorname() {
		return $this->vorname;
	}

	/**
	 * Sets the vorname
	 *
	 * @param \string $vorname
	 * @return void
	 */
	public function setVorname($vorname) {
		$this->vorname = $vorname;
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
	 * Returns the tel
	 *
	 * @return \string $tel
	 */
	public function getTel() {
		return $this->tel;
	}

	/**
	 * Sets the tel
	 *
	 * @param \string $tel
	 * @return void
	 */
	public function setTel($tel) {
		$this->tel = $tel;
	}

	/**
	 * Returns the fax
	 *
	 * @return \string $fax
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * Sets the fax
	 *
	 * @param \string $fax
	 * @return void
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}

	/**
	 * Returns the tel2
	 *
	 * @return \string $tel2
	 */
	public function getTel2() {
		return $this->tel2;
	}

	/**
	 * Sets the tel2
	 *
	 * @param \string $tel2
	 * @return void
	 */
	public function setTel2($tel2) {
		$this->tel2 = $tel2;
	}

	/**
	 * Returns the mobil
	 *
	 * @return \string $mobil
	 */
	public function getMobil() {
		return $this->mobil;
	}

	/**
	 * Sets the mobil
	 *
	 * @param \string $mobil
	 * @return void
	 */
	public function setMobil($mobil) {
		$this->mobil = $mobil;
	}

	/**
	 * Returns the bemerkungen
	 *
	 * @return \string $bemerkungen
	 */
	public function getBemerkungen() {
		return $this->bemerkungen;
	}

	/**
	 * Sets the bemerkungen
	 *
	 * @param \string $bemerkungen
	 * @return void
	 */
	public function setBemerkungen($bemerkungen) {
		$this->bemerkungen = $bemerkungen;
	}

}
?>