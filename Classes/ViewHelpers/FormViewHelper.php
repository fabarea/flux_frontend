<?php
namespace TYPO3\CMS\FluxFrontend\ViewHelpers;
/***************************************************************
*  Copyright notice
*
*  (c) 2012
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
 * View helper which return a Flux Form.
 *
 * @category    ViewHelpers
 * @package     TYPO3
 * @subpackage  media
 * @author      Fabien Udriot <fabien.udriot@typo3.org>
 */
class FormViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * Returns a Flux form
	 *
	 * @return string
	 */
	public function render() {
		/** @var \Tx_Flux_Form $form */
		$form = $this->objectManager->get('Tx_Flux_Form');
		$field = $form->createField('Input', 'myfield', 'My input field');
		$field->setDefault('My default value')
			->setRequestUpdate(TRUE)
			->setValidate('trim,int');
		$form->add($field);
		$structure = $form->build();

		\TYPO3\CMS\Core\Utility\DebugUtility::debug($structure);

		return 'it works';
	}
}

?>