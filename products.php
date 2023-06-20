<?php
class Product
{
    public function __construct(public Category $categoria, public string $immagine, public string $name, public float $prezzo)
    {
        $this->categoria = $categoria;
        $this->immagine = $immagine;
        $this->name = $name;
        $this->prezzo = $prezzo;
    }
}

class Category
{
    public string $icon;
    public function __construct(public string $name)
    {
        $this->name = $name;
        if ($this->name == "Gatto") {
            $this->icon = "https://static-s.aa-cdn.net/img/gp/20600003342909/J1edgzF2WiDMipbzea05rlmsn7WQxBX9APPoMYmE114ifAXZsP2pjBiwde6637jgBHU?v=1";
        } elseif ($this->name == "Cane") {
            $this->icon = "https://is4-ssl.mzstatic.com/image/thumb/Purple126/v4/69/ee/b4/69eeb4a8-9df2-c4f5-8046-4b21b6f50417/AppIcon-0-1x_U007emarketing-0-10-0-85-220.png/256x256bb.jpg";
        }
    }
}

class Foods extends Product
{
    public function __construct(string $name, public string $taste, string $cat_name, string $immagine, float $prezzo)
    {
        parent::__construct(new Category($cat_name), $immagine, $name, $prezzo);
        $this->taste = $taste;
    }
}

class Games extends Product
{
    public function __construct(string $name, public string $description, string $cat_name, string $immagine, float $prezzo)
    {
        parent::__construct(new Category($cat_name), $immagine, $name, $prezzo);
        $this->description = $description;
    }
}
class Beds extends Product
{
    public function __construct(string $name, public string $size, string $cat_name, string $immagine, float $prezzo)
    {
        parent::__construct(new Category($cat_name), $immagine, $name, $prezzo);
        $this->size = $size;
    }
}
