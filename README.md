# **Lamarlonance**

## **Description**
Lamrlonance est un site vitrine conçu pour un chorégraphe professionnel. Il présente ses prestations avec un visuel attrayant sous forme de photos dynamiques, un espace dédié pour les contacts, une section "À propos", et une interface d'administration.

---

## **Fonctionnalités**

### **Partie publique**
- **Galerie dynamique** : Les photos des prestations sont récupérées depuis une base de données et affichées de manière attrayante.
- **Formulaire de contact** : Permet aux utilisateurs d'envoyer des messages directement au chorégraphe.
- **À propos** : Présentation détaillée du chorégraphe et de son parcours.

### **Partie administration**
- **Gestion des photos** : Ajouter, modifier ou supprimer les photos des prestations.
- **Gestion des messages** : Consulter les messages reçus via le formulaire de contact et les supprimer si nécessaire.

---

## **Technologies utilisées**
- **Back-end** : PHP (programmation orientée objet).
- **Front-end** : Twig pour la gestion des vues.
- **Base de données** : MySQL pour le stockage des photos, des informations et des messages.
- **Serveur web** : Apache (WAMP ou XAMPP recommandé pour l'environnement local).

---

## **Installation**

### **Prérequis**
- PHP 7.4 ou supérieur
- MySQL
- Composer (pour la gestion des dépendances)
- Serveur Apache

### **Étapes**
1. **Cloner le projet** :
   ```bash
   git clone https://github.com/NabilKADOURI/lamarlonance.git
   cd lamarlonance

## **Configurer la base de données**

1. Importez le fichier SQL fourni dans le dossier `/database` pour configurer les tables nécessaires.
2. Mettez à jour les identifiants de connexion dans le fichier `config/database.php`.

---

## **Installer les dépendances**

```bash
composer install
```

## **Lancer le projet**
1. Placez le projet dans le répertoire de votre serveur web local.
2. Accédez au site via http://localhost/lamarlonance.


# **Utilisation**
## **Accéder à l'interface administrateur**
- Rendez-vous sur /admin.
- Identifiez-vous avec les identifiants par défaut fournis dans la base de données.

## **Ajouter, modifier ou supprimer des photos**
- Accédez à la section "Gestion des prestations".

## **Consulter ou supprimer des messages**
- Accédez à la section "Messages".

# **Code d'exemple**
## **Afficher les photos dynamiques (Twig)**

```html
<div class="w-full md:w-1/2 lg:w-1/4 p-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="uploads/{{ $item['picture_services'] }}" alt="{{ $item['title_services'] }}" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-bold text-center">
                <a href="prestation.php?id={{ $item['id_services'] }}" class="text-gray-800 hover:text-yellow-500">
                    {{ $item['title_services'] }}
                </a>
            </h3>
        </div>
    </div>
</div>

```
## **Traitement du formulaire de contact (PHP)**
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $stmt = $db->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $message]);
    
    echo "Message envoyé avec succès !";
}
```
# **Auteur**
Développé par Nabil KADOURI.
