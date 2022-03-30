 <?php
class Dispenser {
    protected $volume;
    protected $hargasegelas;
    private $volumegelas;
    public $namaminuman;

    public function isi($v){
       $this->volume = $v;
       return $v;
    }
    public function harga($h){
        $this->hargasegelas = $h;
        return $h;
    }
    public function volgel($vg){
        $this->volumegelas = $vg;
        return $vg;
    }
    function nama($nm){
        $this->namaminuman = $nm;
        return $nm;
    }
}

$gelas1 = new Dispenser();
echo "Volume Dispenser adalah : " .$gelas1 -> isi('1000 L');
echo "<br/>Harga segelas minuman : " .$gelas1 -> harga('Rp. 3000');
echo "<br/>Volume gelas minuman : " .$gelas1 -> volgel('750 mL');
echo "<br/>Label minuman : " .$gelas1 -> nama('Le Minerale');
?>