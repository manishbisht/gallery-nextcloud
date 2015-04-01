<?php
/**
 * ownCloud - galleryplus
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Olivier Paroz <owncloud@interfasys.ch>
 *
 * @copyright Olivier Paroz 2014-2015
 */

namespace OCA\GalleryPlus\Controller;

/**
 * Class PublicFilesController
 *
 * Note: Type casting only works if the "@param" parameters are also included in this class as
 * their not yet inherited
 *
 * @package OCA\GalleryPlus\Controller
 */
class PublicFilesController extends FilesController {

	/**
	 * @PublicPage
	 *
	 * Returns a list of all images from the folder the link gives access to
	 *
	 * @inheritDoc
	 *
	 * @param string $location a path representing the current album in the app
	 * @param string $features the list of supported features
	 * @param string $etag the last known etag in the client
	 */
	public function getFiles($location, $features, $etag) {
		return parent::getFiles($location, $features, $etag);
	}

}