<?php
namespace DanielStange\Dst14Vereine\Domain\Model;


/***************************************************************
 *
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
 * Landesverbaende
 */
class Landesverbaende extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * bundesland
	 *
	 * @var string
	 */
	protected $bundesland = '';

	/**
	 * namelv
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $namelv = '';

	/**
	 * lvweb
	 *
	 * @var string
	 */
	protected $lvweb = '';

	/**
	 * Returns the bundesland
	 *
	 * @return string $bundesland
	 */
	public function getBundesland() {
		return $this->bundesland;
	}

	/**
	 * Sets the bundesland
	 *
	 * @param string $bundesland
	 * @return void
	 */
	public function setBundesland($bundesland) {
		$this->bundesland = $bundesland;
	}

	/**
	 * Returns the namelv
	 *
	 * @return string $namelv
	 */
	public function getNamelv() {
		return $this->namelv;
	}

	/**
	 * Sets the namelv
	 *
	 * @param string $namelv
	 * @return void
	 */
	public function setNamelv($namelv) {
		$this->namelv = $namelv;
	}

	/**
	 * Returns the lvweb
	 *
	 * @return string $lvweb
	 */
	public function getLvweb() {
		return $this->lvweb;
	}

	/**
	 * Sets the lvweb
	 *
	 * @param string $lvweb
	 * @return void
	 */
	public function setLvweb($lvweb) {
		$this->lvweb = $lvweb;
	}

}