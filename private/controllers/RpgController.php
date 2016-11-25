<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css" media="screen" title="no title">
    </head>
    <body>
        <div class="container" style="margin-top: 2%;">

            <?php

                class CreateCharacters
                {
                    private $name;
                    private $class;
                    private $inventory;


                    function __construct()
                    {
                        $this->name = $_POST['inputName'];
                        $this->class = $_POST['inputClass'];

                        $this->inventory = new Inventory($_POST['inputWeapon'], $_POST['inputPotion'], $_POST['inputObjects']);
                    }

                    public function getInventory()
                    {
                        return $this->inventory;
                    }

                    public function getClass()
                    {
                        return $this->class;
                    }

                    public function presentation()
                    {
                        echo "<p>Hello <strong>".$this->name." ! </strong><br/>
                        Tu as choisis la classe <strong>";
                        foreach ($this->class as $class) {
                            echo $class;
                        }
                        echo ".</strong> C'est un très bon choix ! </p>";
                    }

                    public function attributeInventory()
                    {
                        echo "<p>Ton inventaire contient : </p><ul>";
                            foreach ($this->inventory->getWeapon() as $weapon) {
                                echo "<li>1x " .$weapon. "</li>";
                            }
                            foreach ($this->inventory->getPotion() as $potion) {
                                echo "<li>1x " .$potion. "</li>";
                            }
                            foreach ($this->inventory->getObject() as $object) {
                                echo "<li>1x " .$object. "</li>";
                            }
                        echo "</ul>";

                    }
                }

                class CreateEnemy
                {
                    private $nameEnemy;
                    private $classEnemy;
                    private $inventoryEnemy;

                    function __construct($nameEnemy, $classEnemy, $weaponEnemy)
                    {
                        $this->nameEnemy = $nameEnemy;
                        $this->classEnemy = $classEnemy;
                        $this->inventoryEnemy = new InventoryEnemy($weaponEnemy);
                    }

                    public function presentation()
                    {
                        echo "<p>Un ennemi s'approche de vous... <br/>
                        Il s'agit d'un <strong>".$this->nameEnemy." ! </strong>Faites attention ! Il a le rang <strong>".
                        $this->classEnemy. ". </strong><br/>
                        Il est équipé d'une <strong>".$this->inventoryEnemy->getWeaponEnemy()."</strong>.<br/>
                        Vous allez devoir l'affronter...</p>";
                    }
                }

                class InventoryEnemy
                {
                    protected $weaponEnemy;

                    function __construct($weaponEnemy)
                    {
                        $this->weaponEnemy = $weaponEnemy;
                    }

                    public function getWeaponEnemy()
                    {
                        return $this->weaponEnemy;
                    }

                    public function addWeaponEnemy()
                    {
                        $this->object = new WeaponEnemy();
                    }
                }

                abstract class ObjectEnemy
                {
                    protected $nameWeaponEnemy;
                    protected $quantities;

                    function __construct()
                    {
                        $this->quantities = 1;
                    }

                    public function getQuantities()
                    {
                        return $this->quantities;
                    }

                    public function getNameWeaponEnemy()
                    {
                        return $this->nameWeaponEnemy;
                    }
                }

                class WeaponEnemy extends ObjectEnemy
                {
                    protected $nameWeaponEnemy;

                    function __construct($id_weaponEnemy)
                    {
                        parent::construct($id_weaponEnemy);
                        $weaponEnemy = array("Epée émoussée", "Dague ensanglantée", "Hache rouillée");
                        $this->nameWeaponEnemy = $weaponEnemy[$id_weaponEnemy];
                    }

                    public function getWeapon()
                    {
                        return $this->weaponEnemy;
                    }

                    public function setWeapon($weaponEnemy)
                    {
                        $this->weaponEnemy = $weaponEnemy;
                    }
                }

                class Inventory
                {
                    private $weapon;
                    private $potion;
                    private $object;

                    function __construct($weapon, $potion, $object)
                    {
                        $this->weapon = $weapon;
                        $this->potion = $potion;
                        $this->object = $object;
                    }

                    public function getWeapon()
                    {
                        return $this->weapon;
                    }

                    public function getPotion()
                    {
                        return $this->potion;
                    }

                    public function getObject()
                    {
                        return $this->object;
                    }

                    public function addWeapon()
                    {
                        $this->objects = new Weapon();
                    }

                    public function addPotion()
                    {
                        $this->objects = new Potion();
                    }

                    public function addObject()
                    {
                        $this->objects = new Objects();
                    }
                }

                abstract class Object
                {
                    protected $weapon;
                    protected $potion;
                    protected $object;

                    function __construct()
                    {

                    }

                    public function getName()
                    {
                        return $this->name;
                    }
                }

                class Weapon extends Object
                {

                    function __construct()
                    {
                        parent::__construct();
                        $weapons = $this->weapon;
                        $this->name = $weapons;
                    }

                    public function getWeapon()
                    {
                        return $this->weapon;
                    }

                    public function setWeapon($weapon)
                    {
                        $this->weapon = $weapon;
                    }
                }

                class Potion extends Object
                {

                    function __construct()
                    {
                        parent::__construct();
                        $potions = $this->potion;
                        $this->name = $potions;
                    }

                    public function getPotion()
                    {
                        return $this->potion;
                    }

                    public function setPotion($potion)
                    {
                        $this->potion = $potion;
                    }
                }

                class Objects extends Object
                {

                    function __construct()
                    {
                        parent::__construct();
                        $objects = $this->object;
                        $this->name = $objects;
                    }

                    public function getObject()
                    {
                        return $this->object;
                    }

                    public function setObject($object)
                    {
                        $this->object = $object;
                    }
                }

                $heros = new CreateCharacters();
                $heros->getInventory()->addWeapon();
                $heros->getInventory()->addPotion();
                $heros->getInventory()->addObject();
                $heros->presentation();
                $heros->attributeInventory();

                $enemy = new CreateEnemy("Bjorg", "Chef Gobelin", "Epée émoussée");
                $enemy->presentation();

            ?>
        </div>
    </body>
</html>
