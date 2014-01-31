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
class Sportarten extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * bezeichnung
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $bezeichnung;

	/**
	 * fachbereich
	 *
	 * @var \string
	 */
	protected $fachbereich;

	/**
	 * fachbereichswebseite
	 *
	 * @var \string
	 */
	protected $fbweb;

	/**
	 * Returns the bezeichnung
	 *
	 * @return \string $bezeichnung
	 */
	public function getBezeichnung() {
		return $this->bezeichnung;
	}

	/**
	 * Sets the bezeichnung
	 *
	 * @param \string $bezeichnung
	 * @return void
	 */
	public function setBezeichnung($bezeichnung) {
		$this->bezeichnung = $bezeichnung;
	}

	/**
	 * Returns the fachbereich
	 *
	 * @return \string $fachbereich
	 */
	public function getFachbereich() {
		return $this->fachbereich;
	}

	/**
	 * Sets the fachbereich
	 *
	 * @param \string $fachbereich
	 * @return void
	 */
	public function setFachbereich($fachbereich) {
		$this->fachbereich = $fachbereich;
	}

	/**
	 * Returns the fbweb
	 *
	 * @return \string $fbweb
	 */
	public function getFbweb() {
		return $this->fbweb;
	}

	/**
	 * Sets the fbweb
	 *
	 * @param \string $fbweb
	 * @return void
	 */
	public function setFbweb($fbweb) {
		$this->fbweb = $fbweb;
	}

}
?>