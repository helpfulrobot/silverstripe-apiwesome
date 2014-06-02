<?php

/**
 *	APIwesome button which will provide JSON/XML preview capability for the ModelAdminPreviewExtension.
 *	@author Nathan Glasl <nathan@silverstripe.com.au>
 */

class APIwesomePreviewButton implements GridField_HTMLProvider {

	/**
	 *	Render the CMS JSON/XML preview buttons.
	 */

	public function getHTMLFragments($gridfield) {

		$object = strtolower(ltrim(preg_replace('/[A-Z]+[^A-Z]/', '-$0', $gridfield->name), '-'));
		$JSON = "apiwesome/retrieve/{$object}/json";
		$XML = "apiwesome/retrieve/{$object}/xml";
		return array(
			'before' => "<div class='apiwesome wrapper'>
				<div class='apiwesome admin'>
					<div><strong>Security Token</strong></div>
					<div><input class='preview token' spellcheck='false'/></div>
					<a data-url='{$JSON}' href='{$JSON}' target='_blank' class='preview json disabled ss-ui-action-constructive ss-ui-button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary' data-icon='preview'>Preview JSON &raquo;</a>
					<br>
					<a data-url='{$XML}' href='{$XML}' target='_blank' class='preview xml disabled ss-ui-action-constructive ss-ui-button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary' data-icon='preview'>Preview XML &raquo;</a>
				</div>
			</div>"
		);
	}

}
