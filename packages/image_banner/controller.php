<?php       

namespace Concrete\Package\ImageBanner;
use Package;
use BlockType;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

	protected $pkgHandle = 'image_banner';
	protected $appVersionRequired = '5.7.1';
	protected $pkgVersion = '1.0.1';
	
	
	
	public function getPackageDescription()
	{
		return t("Add Image Banner to your Site");
	}

	public function getPackageName()
	{
		return t("Image Banner");
	}
	
	public function install()
	{
		$pkg = parent::install();
        BlockType::installBlockTypeFromPackage('image_banner', $pkg); 
        
	}
}
?>