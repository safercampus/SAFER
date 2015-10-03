<?php  
namespace Application\Block\InformationResource;

use Concrete\Core\Block\BlockController;
use View;
use File;
use stdClass;
use Loader;


class Controller extends BlockController {
	
	protected $btName = 'Information Resource';
	protected $btDescription = 'Add a resource block. Resources are links to outside information + blurbs describing the resource.';
	protected $btTable = 'btDCInformationResource';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	
	public function getSearchableContent() {
		return $this->field_2_textarea_text;
	}






	//Helper function for external URLs
	public function valid_url($url) {
		if ((strpos($url, 'http') === 0) || (strpos($url, 'mailto') === 0)) {
			return $url;
		} else if (strpos($url, '@') !== false) {
			return 'mailto:' . $url;
		} else if (strpos($url, '/') === 0) {
			return View::url($url); //site path (not an external url)
		} else {
			return 'http://' . $url;
		}
	}
	

}
