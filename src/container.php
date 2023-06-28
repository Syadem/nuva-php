<?php
namespace Syadem\Nuva;

require "./entities/root.php";

class Container {
    public static function init($baseUrl = "https://cdnnuva.mesvaccins.net") {
        $last = json_decode(file_get_contents($baseUrl."/versions/last.json"), true);
        $dump = json_decode(file_get_contents($baseUrl."/json/".$last["dump_hash"].".json"));
        $nuva_root = Root::from($dump);
        return new Container($nuva_root);
    }

		private $nuva_root;
		public $repositories;

		public function __construct($nuva_root) {
			$this->nuva_root = $nuva_root;
			$this->repositories = new \StdClass();
			$this->repositories->vaccines = new Repository($nuva_root->vaccines);
		}
}
