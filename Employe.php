<?php 

class Employe
{
    private string $nom;
    private string $poste;
    private float $salaire;

    public function __construct(string $nom, string $poste, float $salaire)
    {
        $this->nom = $nom;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }

    public function __toString()
    {
        return "Nom :  $this->nom , Poste : $this->poste, le salaire est de $this->salaire.";
    }

    public function __clone()
    {
        $this->salaire *= 1.10;
    }
}


$employe1 = new Employe("Abdel", "Développeur", 4000);
$employe2 = clone $employe1;

echo"<pre>";
echo "$employe1";
echo"</pre>";

echo"<pre>";
echo "$employe2";
echo"</pre>";



// Créez une classe Employe avec les propriétés suivantes : $nom, $poste, $salaire.

// Ajoutez un constructeur pour initialiser ces propriétés lors de la création d'un objet.

// Implémentez la méthode magique __toString dans la classe Employe pour retourner une chaîne de caractères représentant les détails de l'employé.

// Typez toutes vos méthodes.

// Ajoutez la méthode magique __clone à la classe Employe.

// Modifiez la méthode __clone pour incrémenter le salaire de l'employé cloné de 10%.

// Instanciation:
// Créez un objet $employe1 avec un nom, un poste et un salaire spécifiques.

// Clonez l'objet $employe1 pour créer un nouvel objet $employe2.

// Affichez les détails de $employe1 et $employe2 en utilisant la méthode dans un echo;