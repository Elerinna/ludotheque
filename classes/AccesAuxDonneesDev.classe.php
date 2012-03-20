<?php
/**
* Classe de gestion de l'acc�s � la base de donn�e
*
*/

// Inclusions
require_once("classes/AccesAuxDonnees.classe.php");

//Constantes - param�tre du syst�me
define("BASE_DEV","mdjtufjjpdev");

// Constantes - Definition des Tables SQL
define("TABLE_CATEGORIE", TABLE_PREFIX . "CATEGORIE");
define("TABLE_CATEGORIE_JEUX", TABLE_PREFIX . "CATEGORIE_JEUX");
define("TABLE_EMPRUNT", TABLE_PREFIX . "EMPRUNT");
define("TABLE_ETAT_EXEMPLAIRE", TABLE_PREFIX . "ETAT_EXEMPLAIRE");
define("TABLE_EXEMPLAIRE", TABLE_PREFIX . "EXEMPLAIRE");
define("TABLE_EXTENSION", TABLE_PREFIX . "EXTENSION");
define("TABLE_FAIRE_PARTIE_KIT", TABLE_PREFIX . "FAIRE_PARTIE_KIT");
define("TABLE_INVENTAIRE", TABLE_PREFIX . "INVENTAIRE");
define("TABLE_JEUX", TABLE_PREFIX . "JEUX");
define("TABLE_KIT_JEUX", TABLE_PREFIX . "KIT_JEUX");
define("TABLE_LANGUE", TABLE_PREFIX . "LANGUE");
define("TABLE_LANGUE_REGLE", TABLE_PREFIX . "LANGUE_REGLE");
define("TABLE_LIEU", TABLE_PREFIX . "LIEU");
define("TABLE_NB_JOUEUR", TABLE_PREFIX . "NB_JOUEUR");
define("TABLE_NB_JOUEUR_VERSION_JEU", TABLE_PREFIX . "NB_JOUEUR_VERSION_JEU");
define("TABLE_NOM_JEU", TABLE_PREFIX . "NOM_JEU");
define("TABLE_NOTE_VERSION", TABLE_PREFIX . "NOTE_VERSION");
define("TABLE_PAYS", TABLE_PREFIX . "PAYS");
define("TABLE_PHOTO", TABLE_PREFIX . "PHOTO");
define("TABLE_PHOTO_VERSION", TABLE_PREFIX . "PHOTO_VERSION");
define("TABLE_RESERVATION", TABLE_PREFIX . "RESERVATION");
define("TABLE_SUGGESTION", TABLE_PREFIX . "SUGGESTION");
define("TABLE_VERSION", TABLE_PREFIX . "VERSION");

// D�finition des champs de la table TABLE_CATEGORIE
define("ID_CATEGORIE", "idCategorie");
define("NOM_CATEGORIE", "nomCategorie");
define("DESCRIPTION_CATEGORIE", "descriptionCategorie");

// D�finition des champs de la table TABLE_CATEGORIE_JEU
define("ID_CATEGORIE_JEU", "idCategorieJeu");

// D�finition des champs de la table TABLE_EMPRUNT
define("ID_EMPRUNT", "idEmprunt");
define("DATE_EMPRUNT", "dateEmprunt");
define("DATE_RETOUR_SOUHAITE", "dateRetourSouhaite");
define("DATE_RETOUR_REEL", "dateRetourReel");

// D�finition des champs de la table TABLE_ETAT_EXEMPLAIRE
define("ID_ETAT_EXEMPLAIRE", "idEtatExemplaire");
define("NOM_ETAT", "nomEtat");

// D�finition des champs de la table TABLE_EXEMPLAIRE
define("ID_EXEMPLAIRE", "idExemplaire");
define("DESCRIPTION_EXEMPLAIRE", "descriptionExemplaire");
define("PRIX_MDJT", "prixMJDT");
define("DATE_ACHAT", "dateAchat");
define("DATE_FIN_VIE", "dateFinVie");
define("ID_LIEU_REEL", "idLieuReel");
define("ID_LIEU_TEMPO", "idLieuTempo");

// D�finition des champs de la table TABLE_EXTENSION
define("ID_EXTENSION", "idExtension");
define("NATURE", "nature");
define("ID_VERSION_BASE", "idVesionBase");
define("ID_VERSION_EXTENSION", "idVersionExtension");

// D�finition des champs de la table TABLE_FAIRE_PARTIE_KIT
define("ID_FAIRE_PARTIE_KIT", "idFairePartieKit");

// D�finition des champs de la table TABLE_INVENTAIRE
define("ID_INVENTAIRE", "idInventaire");
define("DATE_INVENTAIRE", "dateInventaire");
define("COMMENTAIRE_INVENTAIRE", "commentaireInventaire");

// D�finition des champs de la table TABLE_JEUX
define("ID_JEU", "idJeu");
define("DESCRIPTION_JEU", "descriptionJeu");
define("AUTEUR", "auteur");

// D�finition des champs de la table TABLE_KIT_JEUX
define("ID_KIT_JEU", "idKitJeu");
define("NOM_KIT_JEU", "nomKit");
define("DESCRIPTIOIN_KIT", "descriptionKit");

// D�finition des champs de la table TABLE_LANGUE
define("ID_LANGUE", "idLangue");
define("NOM_LANGUE", "nomLangue");

// D�finition des champs de la table TABLE_LANGUE_REGLE
define("ID_LANGUE_REGLE", "idLangueRegle");

// D�finition des champs de la table TABLE_LIEU
define("ID_LIEU", "idLieu");
define("NOM_LIEU", "nomLieu");

// D�finition des champs de la table TABLE_NB_JOUEUR
define("ID_NB_JOUEUR", "idNbJoueur");
define("NB_JOUEUR", "nbJoueur");

// D�finition des champs de la table TABLE_NB_JOUEUR_VERSION_JEU
define("ID_NB_JOUEUR_VERSION_JEU", "idNbJoueurJeu");

// D�finition des champs de la table TABLE_NOM_JEU
define("ID_NOM_JEU", "idNomJeu");
define("NOM_JEU", "nomJeu");

// D�finition des champs de la table TABLE_NOTE_VERSION
define("ID_NOTE_VERSION", "idNoteVersion");
define("NOTE_VERSION", "noteVersion");
define("COMMENTAIRE_NOTE_VERSION", "commentaireNoteVersion");

// D�finition des champs de la table TABLE_PAYS
define("ID_PAYS", "idPays");
define("NOM_PAYS", "nomPays");

// D�finition des champs de la table TABLE_PHOTO
define("ID_PHOTO", "idPhoto");
define("NOM_PHOTO", "nomPhoto");
define("TEXTE_ALTERNATIF", "texteAlternatif");

// D�finition des champs de la table TABLE_PHOTO_VERSION
define("ID_PHOTO_VERSION", "idPhotoVERSION");

// D�finition des champs de la table TABLE_RESERVATION
define("ID_RESERVATION", "idReversation");
define("DATE_SOUHAITE_EMPRUNT", "dateSouhaiteEmprunt");

// D�finition des champs de la table TABLE_SUGGESTION
define("ID_SUGGESTION", "idSuggestion");
define("COMMENTAIRE_SUGGESTION", "commentaireSugeestion");
define("ETAT_SUGGESTION", "etatSuggestion");

// D�finition des champs de la table TABLE_VERSION
define("ID_VERSION", "idVersion");
define("NOM_VERSION", "nomVersion");
define("DESCRIPTION_VERSION", "descriptionVersion");
define("AGE_MINIMUM", "ageMinimum");
define("NB_JOUEUR_RECOMMANDE", "nbJoueurRecommande");
define("DUREE_PARTIE", "dureePartie");
define("PRIX_ACHAT", "prixAchat");
define("ANNEE_SORTIE", "anneeSortie");
define("ILLUSTRATEUR", "illustrateur");
define("DISTRIBUTEUR", "distributeur");
define("EDITEUR", "editeur");




class AccesAuxDonneesDev
{

// Attributs
	// Variable de classe stockant le premier objet cr��
	// Sert � garantir qu'on ne cr�era qu'un seul objet
	private static $connexionBase = NULL;
	// Objet d'acces a la base
	private $maBase = NULL;
	// Est-on d�j� connect� � la base - sert � �viter les connexions multiples
	private $estConnecte = NULL;

// Methodes

	/*
	* Le constructeur d'une connexion � la base
	*/
	public function __construct()
	{
		// A la cr�ation de l'objet, on est pas connect� � la base
		$this->estConnecte = FALSE;
	}

	// On interdit le clonage de cet objet	
        public function __clone()
        {
            trigger_error("Clonage d'acc�s aux donn�es interdit.", E_USER_ERROR);
        }

	// On interdit de reveiller un objet AccesAuxDonnees s�rialis�
        public function __wakeup()
        {
            trigger_error("Unserializing is not allowed.", E_USER_ERROR);
        }
	
	//
	// Outils � usage externe
	//
	
	/**
	* Fonction statique de cr�ation d'un acc�s aux donn�es
	* Cette fonction v�rifie qu'un acc�s aux donn�es n'existe pas avant
	* Elle renvoi l'acc�s pr�-existant, ou un nouvel acc�s
	*
	* C'est cette fonction qui doit �tre utilis�e 
	* chaque fois qu'on veut avoir acc�s aux donn�es
	*/
	public static function recupAccesDonnees()
	{
		// Initialisation de l'acc�s � la Base de Donnees
		// Si on a pas encore d'objet d'acc�s aux donnees
		if ( self::$connexionBase == NULL )
		{
			// On en cr�e un et on stocke cette connexion dans la variable de classe
			self::$connexionBase = new AccesAuxDonnees();
			return self::$connexionBase;
		}
		else
		{
			// Sinon, on r�cup�re celle qui existe d�j�
			return self::$connexionBase;
		}
	}
  
  //
  // Outils � usage interne
  //

        /**
        * Fonction de connexion � la base de donn�e
        * Cette fonction initie la connexion � la base de donn�es
        * Uniquement si ce n'est pas d�j� fait.
        * On l'utilise donc au d�but de chaque requ�te
        */
        private function connecteBase()
        {
            // On initie la connexion uniquement si elle n'est pas d�j� faite
            if ($this->estConnecte == FALSE)
            {
                try 
                {
                    // Connexion en mode debug
                    $option[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                    $this->maBase = new PDO("mysql:host=" . SERVEUR . ";dbname=" . BASE_DEV, LOGIN, MDP,$option);
                    // Connexion normale
                    // $this->maBase = new PDO("mysql:host=" . SERVEUR . ";dbname=" . BASE, LOGIN, MDP);
                } 
                catch (PDOException $e)
                {
                        // Acc�s � la base impossible
                        print "Connexion a la base de donnee impossible � la base de d�veloppement<br/>";
                        die();
                }
                $this->estConnecte = TRUE;
            }
	}
	
        
	/**
	* Fonction g�n�rique de requ�te type s�lection dans la base
	*/
	private function requeteSelect($uneRequeteSQL)
	{
		// On initie la connexion � la base, si ce n'est d�j� fait
		$this->connecteBase();	
		// Si on a bien une connexion � la base
		if ($this->estConnecte)
		{
			// On r�cup�re les r�sultats sous forme d'un objet PDOStatement
			$resultat = $this->maBase->query($uneRequeteSQL);
			if ($resultat == false)
			{
				// La requete a �chou�
				return false;
			}
			else 
			{
				// On r�cup�re le resultat de la requete sous la forme d'un tableau
				$tableauResultat = $resultat->fetchAll();
				// On ferme l'objet PDOStatement
				$resultat->closeCursor();
				// On renvoie le tableau avec les r�sultats de la requ�te
				return $tableauResultat;
			}
		}
		else 
		{ // Sinon, pas de connexion � la base
			// La requete a �chou�
			return false;
		}
	}
	
	//
	// Requ�tes accessibles au reste du site
	//
	
	
        
        
        /**
         * Fonction permettant de convertir les donn�es stock�es en base vers les donn�es r�elles
         * notamment en supprimant les caract�res d'�chappement.
         * @param type $uneVariable 
         */
        public function conversionDepuisBase($uneVariable)
        {
            return stripslashes($uneVariable);
        }

}

?>
