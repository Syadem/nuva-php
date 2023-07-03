<?php
namespace Syadem\Nuva;

require(__DIR__ . '/entities/root.php');

class Container {

    public static function init($baseUrl = "https://cdnnuva.mesvaccins.net") {
        $last = json_decode(file_get_contents($baseUrl."/versions/last.json"), true);
        $dump = json_decode(file_get_contents($baseUrl."/json/".$last["dump_hash"].".json"));
        $nuva_root = Root::from($dump);
        return new Container($nuva_root);
    }

		private $nuva_root;
		private ?Version $version;

		private Repository $vaccines;
		private Repository $valences;
		private Repository $diseases;

		public function __construct($nuva_root) {
			$this->nuva_root = $nuva_root;
			$this->version = $nuva_root->version;
			$this->vaccines = new Repository($nuva_root->vaccines);
			$this->valences = new Repository($nuva_root->valences);
			$this->diseases = new Repository($nuva_root->diseases);
		}

		public function getVersion() {
			return $this->version;
		}

		public function getVaccines() {
			return $this->vaccines;
		}

		public function getValences() {
			return $this->valences;
		}

		public function getDiseases() {
			return $this->diseases;
		}
}
